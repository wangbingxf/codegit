<?php
/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海南赞赞网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 小虎哥 <1105415366@qq.com>
 * Date: 2018-06-28
 */

namespace weapp\Sitecollect\controller;

use think\Cache;
use think\Page;
use think\Db;
use app\common\controller\Weapp;
use weapp\Sitecollect\model\SitecollectModel;
use weapp\Sitecollect\controller\WxCrawler;


/**
 * 插件的控制器
 */
class Sitecollect extends Weapp
{
    /**
     * 实例化模型
     */
    private $model;
    /**
     * 实例化对象
     */
    private $db;
    /**
     * 插件基本信息
     */
    private $weappInfo;
    public $current_channel_list = [];
    public $channel_type_list = [];


    /**
     * 构造方法
     */
    public function __construct(){
        parent::__construct();
        $this->model = new SitecollectModel;
        $this->db = Db::name('WeappSitecollect');

        /*插件基本信息*/
        $this->weappInfo = $this->getWeappInfo();
        $this->assign('weappInfo', $this->weappInfo);
        /*--end*/
    }

    /**
     * 插件后台管理 - 列表
     */
    public function index()
    {
        $config = tpCache('weapp');
        if (empty($config['weapp_sitecollect_empty'])){
            tpCache('weapp', ['weapp_sitecollect_empty'=>1]);
            $this->into_default();
        }
        $list = array();
        $keywords = input('keywords/s');

        $map = array();
        if (!empty($keywords)) {
            $map['title'] = array('LIKE', "%{$keywords}%");
        }
        $count = $this->db->where($map)->count('id');// 查询满足要求的总记录数
        $pageObj = new Page($count, config('paginate.list_rows'));// 实例化分页类 传入总记录数和每页显示的记录数
        $list = $this->db ->field("a.*,b.typename")
            ->alias('a')->join('__ARCTYPE__ b', 'a.typeid = b.id', 'LEFT')->where($map)->order('id desc')->limit($pageObj->firstRow.','.$pageObj->listRows)->select();
        $pageStr = $pageObj->show(); // 分页显示输出
        $this->assign('list', $list); // 赋值数据集
        $this->assign('pageStr', $pageStr); // 赋值分页输出
        $this->assign('pageObj', $pageObj); // 赋值分页对象

        return $this->fetch('index');
    }
    /*
     * 导入默认
     */
    private function into_default(){
        $encode = "eyJiYXNlIjp7ImlkIjoyNSwidGl0bGUiOiJcdTc5M2FcdTRmOGJcdTRlZmJcdTUyYTEoXHU3OTNhXHU0ZjhiXHU3ZjUxXHU1NzQwXHVmZjFhaHR0cDpcL1wvd3d3Lnp6ZnJqdC5jb21cL25iYVwvaW5kZXhfMi5odG1sKSIsInR5cGVpZCI6MTAsImFkZF90aW1lIjoxNTc2NjM0OTc4LCJ1cGRhdGVfdGltZSI6MTU3NjYzNTAyNywiaXNfZGVzYyI6MSwiaXNfc3RhdHVzIjoxLCJpc19saXRwaWMiOjEsImlzX2ZpbHRfcmVwZXQiOjEsImlzX2xvY2FsIjoxLCJmaWx0X2lmcmFtZSI6MCwiZmlsdF9qcyI6MCwiZmlsdF9hIjowLCJmaWx0X3N0eWxlIjowLCJmaWx0X29iamVjdCI6MCwiZ2V0X3N0eWxlIjoyLCJ1cmxfcnVsZSI6Imh0dHA6XC9cL3d3dy56emZyanQuY29tXC9uYmFcL2luZGV4X3t7aWR9fS5odG1sIiwibWluX2lkIjoyLCJtYXhfaWQiOjMsImxpc3RfcnVsZSI6IiZsdDt1bCBpZD0nbGlzdE5ld3NUaW1lTHknIGNsYXNzPSZxdW90O2xpc3ROZXdzVGltZUx5JnF1b3Q7Jmd0O1tcdTUxODVcdTViYjldJmx0O2RpdiBjbGFzcz0mcXVvdDtwYWduYXRpb24mcXVvdDsgaWQ9JnF1b3Q7cGFnbmF0aW9uJnF1b3Q7IHN0eWxlPSZxdW90O3BhZGRpbmctYm90dG9tOjMwcHg7JnF1b3Q7Jmd0OyIsImFfcnVsZSI6IiZsdDthIGNsYXNzPSZxdW90O0otc2hhcmUtYSZxdW90OyBocmVmPSZxdW90O1tcdTUxODVcdTViYjldJnF1b3Q7IHRhcmdldD0mcXVvdDtfYmxhbmsmcXVvdDsmZ3Q7IiwiYV9pbnZvbHZlIjoiIiwiYV9leGNsdXNpdmUiOiIiLCJpc19saXN0X2xpdHBpYyI6MSwibGl0cGljX3J1bGUiOiImbHQ7aW1nIGNsYXNzPSZxdW90O2FuaW1hdGlvbiZxdW90OyBzcmM9JnF1b3Q7W1x1NTE4NVx1NWJiOV0mcXVvdDsiLCJpc19wYWdlIjowLCJwYWdlX2FfcnVsZSI6IiIsInBhZ2VfbGlzdF9ydWxlIjoiIiwic29ydF9vcmRlciI6MTAwLCJzdGF0dXMiOjF9LCJydWxlIjpbeyJuYW1lIjoic2VvX2Rlc2NyaXB0aW9uIiwidGl0bGUiOiJTRU9cdTYzY2ZcdThmZjAiLCJydWxlIjoiIiwib3JpZ2luIjoiIiwicmVwbGFjZSI6IiIsImRlZmF1bHQiOiIiLCJpc19wYWdlIjowfSx7Im5hbWUiOiJzZW9fa2V5d29yZHMiLCJ0aXRsZSI6IlNFT1x1NTE3M1x1OTUyZVx1OGJjZCIsInJ1bGUiOiIiLCJvcmlnaW4iOiIiLCJyZXBsYWNlIjoiIiwiZGVmYXVsdCI6IiIsImlzX3BhZ2UiOjB9LHsibmFtZSI6InNlb190aXRsZSIsInRpdGxlIjoiU0VPXHU2ODA3XHU5ODk4IiwicnVsZSI6IiIsIm9yaWdpbiI6IiIsInJlcGxhY2UiOiIiLCJkZWZhdWx0IjoiIiwiaXNfcGFnZSI6MH0seyJuYW1lIjoibGl0cGljIiwidGl0bGUiOiJcdTdmMjlcdTc1NjVcdTU2ZmUiLCJydWxlIjoiIiwib3JpZ2luIjoiIiwicmVwbGFjZSI6IiIsImRlZmF1bHQiOiIiLCJpc19wYWdlIjowfSx7Im5hbWUiOiJ0aXRsZSIsInRpdGxlIjoiXHU2ODA3XHU5ODk4IiwicnVsZSI6IiZsdDtoMSZndDsmbHQ7c3BhbiZndDtbXHU1MTg1XHU1YmI5XSZsdDtcL3NwYW4mZ3Q7Jmx0O1wvaDEmZ3Q7Iiwib3JpZ2luIjoiIiwicmVwbGFjZSI6IiIsImRlZmF1bHQiOiIiLCJpc19wYWdlIjowfSx7Im5hbWUiOiJjb250ZW50IiwidGl0bGUiOiJcdTUxODVcdTViYjlcdThiZTZcdTYwYzUiLCJydWxlIjoiJmx0O2RpdiBjbGFzcz0mcXVvdDtKLWNvbnRhaW5fZGV0YWlsX2NudCBjb250YWluX2RldGFpbF9jbnQmcXVvdDsmZ3Q7W1x1NTE4NVx1NWJiOV0mbHQ7cCZndDtcdTRlMGFcdTRlMDBcdTdiYzciLCJvcmlnaW4iOiIiLCJyZXBsYWNlIjoiIiwiZGVmYXVsdCI6IiIsImlzX3BhZ2UiOjF9LHsibmFtZSI6ImFkZF90aW1lIiwidGl0bGUiOiJcdTY1YjBcdTU4OWVcdTY1ZjZcdTk1ZjQiLCJydWxlIjoiIiwib3JpZ2luIjoiIiwicmVwbGFjZSI6IiIsImRlZmF1bHQiOiIiLCJpc19wYWdlIjowfSx7Im5hbWUiOiJkdW94dWFuIiwidGl0bGUiOiJcdTU5MWFcdTkwMDlcdTk4NzlcdTZkNGJcdThiZDUiLCJydWxlIjoiIiwib3JpZ2luIjoiIiwicmVwbGFjZSI6IiIsImRlZmF1bHQiOiIiLCJpc19wYWdlIjowfSx7Im5hbWUiOiJ4aWFsYWt1YW5nIiwidGl0bGUiOiJcdTRlMGJcdTYyYzlcdTY4NDZcdTZkNGJcdThiZDUiLCJydWxlIjoiIiwib3JpZ2luIjoiIiwicmVwbGFjZSI6IiIsImRlZmF1bHQiOiIiLCJpc19wYWdlIjowfSx7Im5hbWUiOiJkYW54dWFuIiwidGl0bGUiOiJcdTRmNDZcdTkwMDlcdTk4NzlcdTZkNGJcdThiZDUiLCJydWxlIjoiIiwib3JpZ2luIjoiIiwicmVwbGFjZSI6IiIsImRlZmF1bHQiOiIiLCJpc19wYWdlIjowfV0sInVybCI6W3sidXJsIjoiaHR0cDpcL1wvd3d3Lnp6ZnJqdC5jb21cL25iYVwvaW5kZXhfMy5odG1sIn0seyJ1cmwiOiJodHRwOlwvXC93d3cuenpmcmp0LmNvbVwvbmJhXC9pbmRleF8yLmh0bWwifV19";
        $list = json_decode(base64_decode($encode),true);
        if (!empty($list['base']) && $list['rule'] && $list['url']){
            $now_time = getTime();
            $nowData = array(
                'add_time'    => $now_time,
                'update_time'    => $now_time,
            );
            $row = $list['base'];
            unset($row['id']);
            $row = array_merge($row, $nowData);
            $insertId = $this->db->insertGetId($row);
            if (false !== $insertId){
                $url_list = $list['url'];
                foreach ($url_list as $key=>$val){
                    $url_list[$key]['collectid'] = $insertId;
                    $url_list[$key]['add_time'] = $now_time;
                    $url_list[$key]['update_time'] = $now_time;
                }
                Db::name("weapp_sitecollet_urllist")->insertAll($url_list);
                $rule_list = $list['rule'];
                foreach ($rule_list as $key=>$val){
                    $rule_list[$key]['collectid'] = $insertId;
                    $rule_list[$key]['add_time'] = $now_time;
                    $rule_list[$key]['update_time'] = $now_time;
                }
                Db::name("weapp_sitecollet_rule")->insertAll($rule_list);
                adminLog('导入'.$this->weappInfo['name'].'：'.$row['title']); // 写入操作日志
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
        exit;


    }
    /**
     * 插件后台管理 - 新增
     */
    public function add()
    {
        if (IS_POST) {
            $post = input('post.');
            if (empty($post['typeid'])){
                $this->error('必须选择类别！');
                exit;
            }
            /*组装存储数据*/
            $nowData = array(
                'add_time'    => getTime(),
                'update_time'    => getTime(),
            );
            $saveData = array_merge($post, $nowData);
            /*--end*/
            $insertId = $this->db->insertGetId($saveData);
            if (false !== $insertId) {
                adminLog('新增'.$this->weappInfo['name'].'：'.$post['title']); // 写入操作日志
                $this->success("操作成功", weapp_url('Sitecollect/Sitecollect/pageset',['id'=>$insertId]));
            }else{
                $this->error("操作失败");
            }
            exit;
        }
        $channel_type = M('channeltype')->where("is_del=0 and id not in (6,8)")->getField('id',true);
        $arctype_html = allow_release_arctype(0,$channel_type);
        $assign_data['arctype_html'] = $arctype_html;
        $this->assign($assign_data);

        return $this->fetch('add');
    }
    /**
     * 插件后台管理 - 编辑
     */
    public function edit()
    {
        if (IS_POST) {
            $post = input('post.');
            $post['id'] = eyIntval($post['id']);
            if (empty($post['typeid'])){
                $this->error('必须选择类别！');
                exit;
            }
            if(!empty($post['id'])){
                /*组装存储数据*/
                $nowData = array(
                    'is_desc'    => !empty($post['is_desc']) ? 1 : 0,
                    'is_status'    => !empty($post['is_status']) ? 1 : 0,
                    'is_litpic'    => !empty($post['is_litpic']) ? 1 : 0,
                    'is_filt_repet'    => !empty($post['is_filt_repet']) ? 1 : 0,
                    'is_local'    => !empty($post['is_local']) ? 1 : 0,
//                    'filt_iframe'    => !empty($post['filt_iframe']) ? 1 : 0,
//                    'filt_js'    => !empty($post['filt_js']) ? 1 : 0,
//                    'filt_a'    => !empty($post['filt_a']) ? 1 : 0,
//                    'filt_style'    => !empty($post['filt_style']) ? 1 : 0,
//                    'filt_object'    => !empty($post['filt_object']) ? 1 : 0,
                    'url'    => trim($post['url']),
                    'update_time'    => getTime(),
                );
                $saveData = array_merge($post, $nowData);
                /*--end*/
                $r = $this->db->where(array('id'=>$post['id']))->update($saveData);
                if ($r) {
                    adminLog('编辑'.$this->weappInfo['name'].'：'.$post['title']); // 写入操作日志
                    $this->success("操作成功", weapp_url('Sitecollect/Sitecollect/pageset',['id'=>$post['id']]));
                }
            }
            $this->error("操作失败!");
        }
        $id = input('id/d', 0);
        $row = $this->db->find($id);
        if (empty($row)) {
            $this->error('数据不存在，请联系管理员！');
            exit;
        }
        $this->assign('row',$row);
        $channel_type = M('channeltype')->where("is_del=0 and id not in (6,8)")->getField('id',true);
        $arctype_html = allow_release_arctype($row['typeid'],$channel_type);
        $assign_data['arctype_html'] = $arctype_html;
        $this->assign($assign_data);
        return $this->fetch('edit');
    }
    /*
     * 页面设置
     */
    public function pageset(){
        if (IS_POST) {
            $post = input('post.');
            $post['id'] = eyIntval($post['id']);
            if(!empty($post['id'])){
                /*组装存储数据*/
                $nowData = array(
                    'update_time'    => getTime(),
                );
                $saveData = array_merge($post, $nowData);
                $r = $this->db->where(array('id'=>$post['id']))->update($saveData);
                if ($r) {
                    Db::name("weapp_sitecollet_urllist")->where("collectid=".$post['id'])->delete();
                    $now_time = getTime();
                    if ($post['get_style'] == 1){
                        if (!empty($post['urllist'])){
                            $url_arr = explode(PHP_EOL,$post['urllist']);
                            $list = [];
                            foreach ($url_arr as $url){
                                $url = trim($url);
                                if (!empty($url)){
                                    $list[] = ['collectid'=>$post['id'],'url'=>$url,'add_time'=> $now_time,'update_time'=> $now_time];
                                }
                            }
                        }
                    }else{
                        $temp = $post['min_id'];
                        $url_rule = htmlspecialchars_decode($post['url_rule']);
                        $list = [];
                        while ($temp <= $post['max_id']){
                            $rule = str_replace("{{id}}",$temp,$url_rule);
                            $list[] = ['collectid'=>$post['id'],'url'=>trim($rule),'add_time'=> $now_time,'update_time'=> $now_time];
                            $temp ++ ;
                        }
                    }
                    if (!empty($list)){
                        Db::name("weapp_sitecollet_urllist")->insertAll($list);
                    }
                    adminLog('编辑'.$this->weappInfo['name'].'：'.$post['title']); // 写入操作日志
                    $data = [
                        weapp_url('Sitecollect/Sitecollect/contentset',['id'=>$post['id']]),
                        weapp_url('Sitecollect/Sitecollect/testlist',['id'=>$post['id']])
                    ];
                    $this->success("操作成功!", weapp_url('Sitecollect/Sitecollect/contentset',['id'=>$post['id']]),$data);
                }
            }
            $this->error("操作失败!");
        }
        $id = input('id/d', 0);
        $row = $this->db->find($id);
        if (empty($row)) {
            $this->error('数据不存在，请联系管理员！');
            exit;
        }
        $url_arr = Db::name("weapp_sitecollet_urllist")->where("collectid=".$row['id'])->getField('url',true);
        $row['urllist'] = implode(PHP_EOL,$url_arr);

        $this->assign('row',$row);
        $channel_type = M('channeltype')->where("is_del=0 and id not in (6,8)")->getField('id',true);
        $arctype_html = allow_release_arctype($row['typeid'],$channel_type);
        $assign_data['arctype_html'] = $arctype_html;
        $this->assign($assign_data);

        return $this->fetch('pageset');
    }
    /*
     * 预览页面采集设置结果
     */
    public function testlist(){
        function_exists('set_time_limit') && set_time_limit(0);
        $id = input('id/d', 0);
        $row = $this->db->find($id);
        if (empty($row)) {
            $this->error('数据不存在，请联系管理员！');
            exit;
        }
        $this->assign('row',$row);
        $order = "id asc";
        if (!empty($row['is_desc'])){
            $order = "id desc";
        }
        $url = Db::name("weapp_sitecollet_urllist")->where("collectid=".$id)->order($order)->getField("url");
        if (empty($url)){
            $this->error('分页网址不存在，请检查分页网址设置规则');
            exit;
        }
        $row['is_local'] = 0;   //测试，图片不本地化（防止图片沉鱼）
        $host_url = $this->getHostUrl($url);
        $crawler = new WxCrawler($this->root_dir,$host_url);
        $url_list = $this->getListData($crawler,$url,$row);
        foreach ($url_list as $key=>$val) {
            $url_list[$key]['url'] = $crawler->setRealUrl($val['url']);
            $url_list[$key]['litpic'] = $crawler->setImgLeech($crawler->setRealUrl($val['litpic']));
        }
        $assign_data['url_list'] = $url_list;
        $assign_data['row'] = $row;
        $this->assign($assign_data);

        return $this->fetch('testlist');
    }
    /*
     * 内容采集设置
     */
    public function contentset(){
        if (IS_POST) {
            $post = input('post.');
            $post['id'] = eyIntval($post['id']);
            if(!empty($post['id'])){
                $nowData = array(
                    'filt_iframe'    => !empty($post['filt_iframe']) ? 1 : 0,
                    'filt_js'    => !empty($post['filt_js']) ? 1 : 0,
                    'filt_a'    => !empty($post['filt_a']) ? 1 : 0,
                    'filt_style'    => !empty($post['filt_style']) ? 1 : 0,
                    'filt_object'    => !empty($post['filt_object']) ? 1 : 0,
                    'update_time'    => getTime(),
                );
                $saveData = array_merge($post, $nowData);
                 $this->db->where(array('id'=>$post['id']))->update($saveData);
                $SitecollectModel = new SitecollectModel();
                $SitecollectModel->setRule($post);
                adminLog('编辑'.$this->weappInfo['name'].'：'.$post['title']); // 写入操作日志
                $data = [
                    weapp_url('Sitecollect/Sitecollect/index'),
                    weapp_url('Sitecollect/Sitecollect/test',['id'=>$post['id']])
                ];
                $this->success("操作成功!", weapp_url('Sitecollect/Sitecollect/index'),$data);
//                $this->success("操作成功!", weapp_url('Sitecollect/Sitecollect/index'));
            }
            $this->error("操作失败!");
        }
        $id = input('id/d', 0);
        $row = $this->db->find($id);
        if (empty($row)) {
            $this->error('数据不存在，请联系管理员！');
            exit;
        }
        $this->assign('row',$row); //.$row['typeid']
        $channel = Db::name("arctype")->where("id=".$row['typeid'])->getField("current_channel");
        if(empty($channel)){
            $this->success("请设置有效导入栏目!", weapp_url('Sitecollect/Sitecollect/edit',['id'=>$id]));
        }
        $channel_type_list_origin = [
            ['name'=>'title','title'=>'标题'],
            ['name'=>'content','title'=>'内容详情'],
            ['name'=>'litpic','title'=>'缩略图'],
            ['name'=>'seo_title','title'=>'SEO标题'],
            ['name'=>'seo_keywords','title'=>'SEO关键词'],
            ['name'=>'seo_description','title'=>'SEO描述'],
            ['name'=>'add_time','title'=>'新增时间'],
        ];
        $channel_type_list = Db::name('channelfield')->field("name,title")
            ->where("ifcontrol=0 and name not in ('content') and channel_id=".$channel)
            ->order("id desc")->select();
        $channel_type_list = array_merge($channel_type_list_origin,$channel_type_list);
        $rule_list = Db::name("weapp_sitecollet_rule")->where("collectid=".$row['id'])->getField("name,id,title,rule,origin,replace,default,is_page");
        if (!empty($rule_list)){
            foreach ($channel_type_list as $key=>$val){
                $channel_type_list[$key]['ruleid'] = $rule_list[$val['name']]['id'];
                $channel_type_list[$key]['rule'] = $rule_list[$val['name']]['rule'];
                $channel_type_list[$key]['origin'] = $rule_list[$val['name']]['origin'];
                $channel_type_list[$key]['replace'] = $rule_list[$val['name']]['replace'];
                $channel_type_list[$key]['default'] = $rule_list[$val['name']]['default'];
                $channel_type_list[$key]['is_page'] = $rule_list[$val['name']]['is_page'];
            }
        }
        $assign_data['oringin_channel_type_list'] = $channel_type_list;
        unset($channel_type_list[1]);
        unset($channel_type_list[0]);
        $assign_data['channel_type_list'] = array_merge($channel_type_list);
        $this->assign($assign_data);
        return $this->fetch('contentset');
    }
    /*
     * 测试
     */
    public function test(){
        function_exists('set_time_limit') && set_time_limit(0);
        $id = input('id/d', 0);
        $row = $this->db->find($id);
        if (empty($row)) {
            $this->error('数据不存在，请联系管理员！');
            exit;
        }
        $this->assign('row',$row);
        $order = "id asc";
        if (!empty($row['is_desc'])){
            $order = "id desc";
        }
        $url = Db::name("weapp_sitecollet_urllist")->where("collectid=".$id)->order($order)->getField("url");
        if (empty($url)){
            $this->error('数据不存在，请联系管理员！');
            exit;
        }
       $row['is_local'] = 0;   //测试，图片不本地化（防止图片沉鱼）
        $rule_list = Db::name("weapp_sitecollet_rule")->where("collectid=".$row['id'])->order("id asc")->getField("name,id,title,rule,origin,replace,default,is_page");
        if (empty($rule_list)){
            $this->error('不存在数据，请先配置内容采集规则');
            exit;
        }
        $result = $this->caiji_list($url,$row,$rule_list);
        $assign_data['content_list'] = $result['content_list'][0];
        $assign_data['url_content'] = $result['url_content'][0];
        $this->assign($assign_data);
        return $this->fetch('test');
    }
    /*
     * 采集单个列表页面的数据
     * $url        列表页面链接
     * $config     基本配置内容
     * $rule_list  页面获取规则
     * $type        first:获取第一条，all:获取全部
     * $insert      是否保存，1：是，0：否
     */
    public function caiji_list($url,$config,$rule_list,$type = 'first',$insert = 0){
        $host_url = $this->getHostUrl($url);
        $crawler = new WxCrawler($this->root_dir,$host_url);
        $url_list = $this->getListData($crawler,$url,$config);
        $result = ["url_content"=>[],"content_list"=>[]];
        foreach ($url_list as $val) {
            $url_content = $crawler->setRealUrl($val['url']);
            $config['litpic'] = $val['litpic']; //列表缩略图
            $result['url_content'][] = $url_content;
            $content_list = $this->caiji_one($crawler,$url_content,$rule_list,$config,$insert);
            $result['content_list'][] = $content_list;
            if ($type == 'first'){
                break;
            }
        }

        return $result;
    }
    /*
     * 获取采取链接的主域名
     */
    private function getHostUrl($url){
        $host_url = [0=>"",1=>""];
        preg_match('/(.*?):\/\//s', $url,$host_http);
        if (!empty($host_http[1])){
            $host_url[0] = $host_http[1];
        }
        preg_match_all('/(.*?)\//s', $url,$host_arr);
        if (!empty($host_arr[0][0]) && !empty($host_arr[0][1]) && !empty($host_arr[0][2])){
            $host_url[1] = $host_arr[0][0].$host_arr[0][1].$host_arr[0][2];
        }
        return $host_url;
    }
    /*
    * 分批次执行（每篇文章)
    */
    public function execute_article(){
        function_exists('set_time_limit') && set_time_limit(0);
        $id =  input("param.id/d",0); // 栏目ID
        $achievepage_old = $achievepage = input("param.achieve/d",0);  //已采集页数(当前采集下标)
        $fid =  input("param.fid/d",0);  //已采集条数-当前页面(当前采集下标)
        $achievelistpage = input("param.achievelistpage/d",0);   //已采集条数，全部
        $achievelisttotal = input("param.achievelisttotal/d",0);  //应该被采集条数，全部
        if ($achievepage == 0 && $fid == 0){
            $this->clearCache();
        }
        $result = $this->getData($id);

        if ($fid == 0){
            $this->clearListDataCache();
        }
        $host_url = $this->getHostUrl($result['url_list'][$achievepage]['url']);
        $crawler = new WxCrawler($this->root_dir,$host_url);
        $url_list = $this->getListDataCache($crawler,$result['url_list'][$achievepage]['url'],$result['config']);
        $listtotal = count($url_list);   //本页应该被执行条数
        if ($listtotal > 0 && $listtotal > $fid){
            $url_content = $crawler->setRealUrl($url_list[$fid]['url']);
            $result['config']['litpic'] = $url_list[$fid]['litpic']; //列表缩略图
            $this->caiji_one($crawler,$url_content,$result['rule_list'],$result['config'],1);
        }
        $data['id'] = $id;
        $data['typeid'] = $result['config']['typeid'];
        $data['pagetotal'] = $result['pagetotal'];
        $fid_old = $data['fid'] = $fid + 1;
        $data['achievelistpage'] = $achievelistpage + 1;
        empty($achievelisttotal) && $achievelisttotal = $listtotal * $data['pagetotal'];
        if ($listtotal == $data['fid']){  //本页已执行完成，下次进入，执行下一页面链接
            $data['fid'] = 0;
            $achievepage += 1;
            if ($result['pagetotal'] == $achievepage){  //已经执行完成，填写记录
                $url_arr = [];
                foreach ($result['url_list'] as $val){
                    $url_arr[] = $val['url'];
                }
                $date = getTime();
                $record = [
                    'collectid' => $result['config']['id'],
                    'title' => $result['config']['title'],
                    'url_list' => json_encode($url_arr),
                    'add_time'     => $date,
                    'update_time'  => $date
                ];
                Db::name("weapp_sitecollet_record")->insert($record);
                $data['achievelistpage'] = $achievelisttotal;
            }
        }
        $data['achievelisttotal'] = $achievelisttotal;
        $data['achievepage'] = $achievepage ;
        //第一页执行完成，执行第二页怎么避免问题发生
        $this->success($result['url_list'][$achievepage_old]['url'].",第".$fid_old."篇采集成功",null,$data);


        if ($result['pagetotal'] > 0  && $result['pagetotal'] > $achievepage){
            $this->caiji_list($result['url_list'][$achievepage]['url'],$result['config'],$result['rule_list'],"all",1);
            if (($result['pagetotal'] - $achievepage) == 1){  //已经执行完成，填写记录
                $url_arr = [];
                foreach ($result['url_list'] as $val){
                    $url_arr[] = $val['url'];
                }
                $date = getTime();
                $record = [
                    'collectid' => $result['config']['id'],
                    'title' => $result['config']['title'],
                    'url_list' => json_encode($url_arr),
                    'add_time'     => $date,
                    'update_time'  => $date
                ];
                Db::name("weapp_sitecollet_record")->insert($record);
            }
        }
        $data['achievepage'] = $achievepage + 1;

        $this->success($result['url_list'][$achievepage]['url']."采集成功",null,$data);
    }
    /*
     * 获取缓存单列表链接
     */
    private function getListDataCache($crawler,$url,$config){
        $url_list_data_serialize = cache("url_list_data_serialize","");
        if (empty($url_list_data_serialize)){
            $url_list_data = $this->getListData($crawler,$url,$config);
            cache("url_list_data_serialize",serialize($url_list_data));
        }else{
            $url_list_data = unserialize($url_list_data_serialize);
        }

        return $url_list_data;
    }
    /*
     * 清理缓存
     */
    private function clearListDataCache(){
        cache("url_list_data_serialize",null);
    }
    /*
     * 获取列表数据集合
     */
    private function getListData($crawler,$url,$config){
        $content = $crawler->_get($url);
        if (empty($content)){
            $this->error($url.'链接无效，请检查分页网址链接！');
            exit;
        }
        if(empty($config['is_list_litpic'])){
            $config['litpic_rule'] = "";
        }
        $url_list = $crawler->getLink($content,$config);
        if (empty($url_list)){
            $this->error($url.'规则无效，请检查列表正则代码和链接正则代码！');
            exit;
        }
        return $url_list;
    }
    /*
     * 采集单条数据
     * $crawler     类对象
     * $url_content 详情页链接
     * $rule_list   各个字段规则
     * $config      基本配置信息
     * $insert      是否保存
     */
    public function caiji_one($crawler,$url_content,$rule_list,$config,$insert = 0){
        $content_html = $crawler->_get($url_content);
        if (empty($content_html)){
            $this->error('无法获取页面数据，请联系管理员！');
            exit;
        }
        //判断获取到的页面内容是否无效
        preg_match('/<title>400(.*?)<\/title>/s', $content_html, $matchBad);
        if (!empty($matchBad[1])){
            $this->error('链接正则代码错误，无法获取正确的页面地址！'.$matchBad[1]);
            exit;
        }
        $content_list = $crawler->getFieldInfo($url_content,$content_html,$rule_list,$config,$insert);
//        if (empty($content_list)){
//            $this->error('无法获取页面数据，请检查内容采集规则是否书写正确！');
//            exit;
//        }
        if ($insert && $content_list){
            $this->caiji_save_one($content_list,$config);
        }

        return $content_list;
    }
    /*
     * 保存数据(单条)
     */
    public function caiji_save_one($content_list,$config){
        $current_channel_list_serialize = cache("current_channel_list_serialize","");
        if (empty($current_channel_list_serialize)){
            $this->current_channel_list = Db::name('arctype')->where("is_del=0")->getField('id,current_channel');
            $this->channel_type_list = Db::name('channeltype')->where("is_del=0 and id not in (6,8)")->getField('id,table');

            cache("current_channel_list_serialize",serialize($this->current_channel_list));
            cache("channel_type_list_serialize",serialize($this->channel_type_list));
        }else{
            $this->current_channel_list = unserialize($current_channel_list_serialize);
            $this->channel_type_list = unserialize(cache("channel_type_list_serialize",""));
        }
        if(empty($this->current_channel_list[$config['typeid']])){
            $this->error("采集数据失败,请设置有效的导入栏目");
        }
        $date = getTime();
        $addonFieldExt = [
            'add_time'     => !empty($content_list['add_time']['content']) ? strtotime($content_list['add_time']['content']) : $date,
            'update_time'  => $date
        ];
        foreach ($content_list as $key=>$val){
            if (in_array($val['name'],['add_time','title','litpic','seo_description','seo_keywords','seo_title']) || empty($val['content'])){
                continue ;
            }
            $addonFieldExt[$val['name']] = $val['content'];
        }
        $channelid = !empty($this->current_channel_list[$config['typeid']]) ? $this->current_channel_list[$config['typeid']] : 0;
        $data = array(
            'typeid'=> $config['typeid'],
            'channel'   => $channelid,
            'title' => $content_list['title']['content'],
            'litpic' => $content_list['litpic']['content'],
            'author' => !empty($content_list['author']['content']) ? $content_list['author']['content'] : session('admin_info.pen_name'),
            'is_b'      => 0,
            'is_head'      => 0,
            'is_special'      => 0,
            'is_recom'      => 0,
            'is_jump'     => 0,
            'is_litpic'     => empty($content_list['litpic']['content']) ? 0 : 1,
            'jumplinks' => '',
            'click' => 0,
            'ismake'=>0,
            'seo_title'=> $content_list['seo_title']['content'],
            'seo_keywords'     => $content_list['seo_keywords']['content'],
            'seo_description'     => $content_list['seo_description']['content'],
            'admin_id'  => session('admin_info.admin_id'),
            'sort_order'    => 100,
            'status' => 1,
            'arcrank' => $config['is_status'] ? 0 : -1 ,
            'add_time'     => !empty($content_list['add_time']['content']) ? strtotime($content_list['add_time']['content']) : $date,
            'update_time'  => $date,
            'province_id'  => 0,
            'city_id'      => 0,
            'area_id'      => 0,
            'addonFieldExt' => $addonFieldExt
        );

        $aid = Db::name('archives')->insertGetId($data);
        if ($aid){
            model($this->channel_type_list[$channelid])->afterSave($aid, $data, 'add');
            adminLog('新增文档：'.$data['title']);
        }else{
            $this->error("添加数据失败");
        }
    }
    /*
     * 执行采集 -- 不统计进度条时间
     */
    public function execute(){
        function_exists('set_time_limit') && set_time_limit(0);
        $id = input('id/d', 0);
        $row = $this->db->find($id);
        if (empty($row)){
            $this->error("操作失败，不存在数据");
        }
        $rule_list = Db::name("weapp_sitecollet_rule")->where("collectid=".$row['id'])->getField("name,id,title,rule,origin,replace,default,is_page");
        if (empty($rule_list)){
            $this->error('不存在数据，请先配置内容采集规则');
            exit;
        }
        $order = "id asc";
        if (!empty($row['is_desc'])){
            $order = "id desc";
        }
        $url_list = Db::name("weapp_sitecollet_urllist")->field("url")->where("collectid=".$id)->order($order)->select();
        if (empty($url_list)){
            $this->error('数据不存在，请检查网站采集相关配置是否正确！');
            exit;
        }
        $result = [];
        $url_arr = [];
        foreach ($url_list as $val){
            $url_arr[] = $val['url'];
            $result[] = $this->caiji_list($val['url'],$row,$rule_list,"all",1);
        }
        $date = getTime();
        $record = [
            'collectid' => $row['id'],
            'title' => $row['title'],
            'url_list' => json_encode($url_arr),
            'add_time'     => $date,
            'update_time'  => $date
        ];
        Db::name("weapp_sitecollet_record")->insert($record);
        $this->success("操作成功");
        exit;
    }
    /*
     * 分批次生成执行进行弹出页面
     */
    public function channel(){
        $id = input('param.id/d','0'); // 栏目ID
        $this->assign("id",$id);
        $this->assign("seo_pseudo",tpCache('global.seo_pseudo'));
        return $this->fetch();
    }

    /*
     * 分批次执行(每次执行一页面--一个列表，通常10篇文章)
     */
    public function execute_one(){
        function_exists('set_time_limit') && set_time_limit(0);
        $id =  input("param.id/d",0); // 栏目ID
        $achievepage = input("param.achieve/d",0);  //已采集页数(当前采集下标)
        if ($achievepage == 0){
            $this->clearCache();
        }
        $result = $this->getData($id);
        $data['id'] = $id;
        $data['typeid'] = $result['config']['typeid'];
        $data['pagetotal'] = $result['pagetotal'];
        if ($result['pagetotal'] > 0  && $result['pagetotal'] > $achievepage){
            $this->caiji_list($result['url_list'][$achievepage]['url'],$result['config'],$result['rule_list'],"all",1);
            if (($result['pagetotal'] - $achievepage) == 1){  //已经执行完成，填写记录
                $url_arr = [];
                foreach ($result['url_list'] as $val){
                    $url_arr[] = $val['url'];
                }
                $date = getTime();
                $record = [
                    'collectid' => $result['config']['id'],
                    'title' => $result['config']['title'],
                    'url_list' => json_encode($url_arr),
                    'add_time'     => $date,
                    'update_time'  => $date
                ];
                Db::name("weapp_sitecollet_record")->insert($record);
            }
        }
        $data['achievepage'] = $achievepage + 1;

        $this->success($result['url_list'][$achievepage]['url']."采集成功",null,$data);
    }
    /*
     * 获取缓存数据
     */
    private function getData($id){
        $config_serialize = cache("config_serialize","");
        if (empty($config_serialize)){
            $config = $this->db->find($id);
            if (empty($config)){
                $this->error("操作失败，不存在数据");
            }
            $rule_list = Db::name("weapp_sitecollet_rule")->where("collectid=".$config['id'])->order('id asc')->getField("name,id,title,rule,origin,replace,default,is_page");
            if (empty($rule_list)){
                $this->error('不存在数据，请先配置内容采集规则');
                exit;
            }
            $order = "id asc";
            if (!empty($config['is_desc'])){
                $order = "id desc";
            }
            $url_list = Db::name("weapp_sitecollet_urllist")->field("url")->where("collectid=".$id)->order($order)->select();
            if (empty($url_list)){
                $this->error('数据不存在，请检查网站采集相关配置是否正确！');
                exit;
            }
            $pagetotal = count($url_list);
            cache("config_serialize",serialize($config));
            cache("rule_list_serialize",serialize($rule_list));
            cache("url_list_serialize",serialize($url_list));
            cache("pagetotal_serialize",$pagetotal);

        }else{
            $config = unserialize($config_serialize);
            $rule_list = unserialize(cache("rule_list_serialize",""));
            $url_list = unserialize(cache("url_list_serialize",""));
            $pagetotal = cache("pagetotal_serialize","");
        }
        return ['config'=>$config,'rule_list'=>$rule_list,'url_list'=>$url_list,'pagetotal'=>$pagetotal];
    }
    /*
     * 清理缓存
     */
    private function clearCache(){
        cache("config_serialize",null);
        cache("rule_list_serialize",null);
        cache("url_list_serialize",null);
        cache("pagetotal_serialize",null);
        cache("current_channel_list_serialize",null);
        cache("channel_type_list_serialize",null);
    }
    /*
     * 导出
     */
    public function export(){
        $id = input('id/d', 0);
        $row = $this->db->find($id);
        if (empty($row)) {
            $this->error('数据不存在，请联系管理员！');
            exit;
        }
        $rule_list = Db::name("weapp_sitecollet_rule")->field("name,title,rule,origin,replace,default,is_page")->where("collectid=".$id)->select();
        $url_list = Db::name("weapp_sitecollet_urllist")->field("url")->where("collectid=".$id)->select();
        if (empty($rule_list) || empty($url_list)){
            $this->error('请先完善信息');
            exit;
        }
        $list = [
            'base' => $row,
            'rule' => $rule_list,
            'url'  =>$url_list
        ];
        $assign_data['encode'] = base64_encode(json_encode($list));
        $this->assign($assign_data);
        return $this->fetch('export');
    }
    /*
     * 导入任务
     */
    public function into(){
        if (IS_POST) {
            $encode = input('post.encode/s','');
            $list = json_decode(base64_decode($encode),true);
            if (!empty($list['base']) && $list['rule'] && $list['url']){
                $now_time = getTime();
                $nowData = array(
                    'add_time'    => $now_time,
                    'update_time'    => $now_time,
                );
                $row = $list['base'];
                unset($row['id']);
                $row = array_merge($row, $nowData);
                $insertId = $this->db->insertGetId($row);
                if (false !== $insertId){
                    $url_list = $list['url'];
                    foreach ($url_list as $key=>$val){
                        $url_list[$key]['collectid'] = $insertId;
                        $url_list[$key]['add_time'] = $now_time;
                        $url_list[$key]['update_time'] = $now_time;
                    }
                    Db::name("weapp_sitecollet_urllist")->insertAll($url_list);
                    $rule_list = $list['rule'];
                    foreach ($rule_list as $key=>$val){
                        $rule_list[$key]['collectid'] = $insertId;
                        $rule_list[$key]['add_time'] = $now_time;
                        $rule_list[$key]['update_time'] = $now_time;
                    }
                    Db::name("weapp_sitecollet_rule")->insertAll($rule_list);
                    adminLog('导入'.$this->weappInfo['name'].'：'.$row['title']); // 写入操作日志
                    $this->success("操作成功", weapp_url('Sitecollect/Sitecollect/index',['id'=>$insertId]));
                }else{
                    $this->error("操作失败，请联系管理员");
                }
            }else{
                $this->error("操作失败，数据错误");
            }
            exit;
        }

        return $this->fetch('into');
    }
    /*
     * 复制任务
     */
    public function copy(){
        $id = input('id/d', 0);
        $row = $this->db->find($id);
        if (empty($row)){
            $this->error("操作失败，不存在数据");
        }
        $rule_list = Db::name("weapp_sitecollet_rule")->field("name,title,rule,origin,replace,default,is_page")->where("collectid=".$id)->select();
        if (empty($rule_list)){
            $this->error('不存在数据，请先配置内容采集规则');
            exit;
        }
        $url_list = Db::name("weapp_sitecollet_urllist")->field("url")->where("collectid=".$id)->select();
        if (empty($url_list)){
            $this->error('数据不存在，请联系管理员！');
            exit;
        }
        $now_time = getTime();
        $nowData = array(
            'add_time'    => $now_time,
            'update_time'    => $now_time,
        );
        unset($row['id']);
        $row = array_merge($row, $nowData);
        $insertId = $this->db->insertGetId($row);
        if (false !== $insertId){
            foreach ($url_list as $key=>$val){
                $url_list[$key]['collectid'] = $insertId;
                $url_list[$key]['add_time'] = $now_time;
                $url_list[$key]['update_time'] = $now_time;
            }
            Db::name("weapp_sitecollet_urllist")->insertAll($url_list);
            foreach ($rule_list as $key=>$val){
                $rule_list[$key]['collectid'] = $insertId;
                $rule_list[$key]['add_time'] = $now_time;
                $rule_list[$key]['update_time'] = $now_time;
            }
            Db::name("weapp_sitecollet_rule")->insertAll($rule_list);
            adminLog('复制'.$this->weappInfo['name'].'：'.$row['title']); // 写入操作日志
            $this->success("操作成功", weapp_url('Sitecollect/Sitecollect/index',['id'=>$insertId]));
        }else{
            $this->error("操作失败，请联系管理员");
        }
        exit;
    }
    /**
     * 删除文档
     */
    public function del()
    {
        $id_arr = input('del_id/a');
        $id_arr = eyIntval($id_arr);
        if(!empty($id_arr) && IS_POST){
            $result = $this->db->where("id",'IN',$id_arr)->select();
            $title_list = get_arr_column($result, 'title');
            $r = $this->db->where("id",'IN',$id_arr)->delete();
            if($r){
                Db::name("weapp_sitecollet_rule")->where("collectid","IN",$id_arr)->delete();
                Db::name("weapp_sitecollet_urllist")->where("collectid","IN",$id_arr)->delete();
                adminLog('删除'.$this->weappInfo['name'].'：'.implode(',', $title_list));
                $this->success("操作成功!");
            }else{
                $this->error("操作失败!");
            }
        }else{
            $this->error("参数有误!");
        }
    }
    /*
     * 历史记录
     */
    public function record(){
        $list = array();
        $keywords = input('keywords/s');

        $map = array();
        if (!empty($keywords)) {
            $map['title'] = array('LIKE', "%{$keywords}%");
        }
        $count = Db::name("weapp_sitecollet_record")->where($map)->count('id');// 查询满足要求的总记录数
        $pageObj = new Page($count, config('paginate.list_rows'));// 实例化分页类 传入总记录数和每页显示的记录数
        $list = Db::name("weapp_sitecollet_record")->where($map)->order('id desc')->limit($pageObj->firstRow.','.$pageObj->listRows)->select();
        $pageStr = $pageObj->show(); // 分页显示输出
        foreach ($list as $key=>$val){
            $list[$key]['url_arr'] = json_decode($val['url_list'],true);
        }
        $this->assign('list', $list); // 赋值数据集
        $this->assign('pageStr', $pageStr); // 赋值分页输出
        $this->assign('pageObj', $pageObj); // 赋值分页对象

        return $this->fetch('record');
    }
    /*
     * 删除历史记录
     */
    public function del_record(){
        $id_arr = input('del_id/a');
        $id_arr = eyIntval($id_arr);
        if(!empty($id_arr) && IS_POST){
            $result = Db::name("weapp_sitecollet_record")->where("id",'IN',$id_arr)->select();
            $title_list = get_arr_column($result, 'title');
            $r = Db::name("weapp_sitecollet_record")->where("id",'IN',$id_arr)->delete();
            if($r){
                adminLog('删除记录'.$this->weappInfo['name'].'：'.implode(',', $title_list));
                $this->success("操作成功!");
            }else{
                $this->error("操作失败!");
            }
        }else{
            $this->error("参数有误!");
        }
    }
    public function doc()
    {
        return $this->fetch('doc');
    }
}