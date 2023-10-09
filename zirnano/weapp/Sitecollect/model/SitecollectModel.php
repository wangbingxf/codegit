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
 * Date: 2018-4-3
 */

namespace weapp\Sitecollect\model;

use think\Model;
use think\Db;

/**
 * 模型
 */
class SitecollectModel extends Model
{
    /**
     * 数据表名，不带前缀
     */
    public $name = 'weapp_sitecollect';

    //初始化
    protected function initialize()
    {
        // 需要调用`Model`的`initialize`方法
        parent::initialize();
    }
    public function setRule($post){
        Db::name('weapp_sitecollet_rule')->where("collectid=".$post['id'])->delete();
        $channel = Db::name("arctype")->where("id=".$post['typeid'])->getField("current_channel");
        $now_time = getTime();
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
        foreach ($channel_type_list as $key=>$val){
            $rule = $origin = $replace = '';
            if (in_array($val['name'],$post['name'])){
                $name_id = array_search($val['name'],$post['name']);
                !empty($post['rule'][$name_id]) && $rule = $post['rule'][$name_id];
            }
            if (in_array($val['name'],$post['replace_name'])){
                $replace_id = array_search($val['name'],$post['replace_name']);
                !empty($post['origin'][$replace_id]) && $origin = $post['origin'][$replace_id];
                !empty($post['replace'][$replace_id]) && $replace = $post['replace'][$replace_id];
            }
            $channel_type_list[$key]['collectid'] = $post['id'];
            $channel_type_list[$key]['rule'] = $rule;
            $channel_type_list[$key]['origin'] = $origin;
            $channel_type_list[$key]['replace'] = $replace;
            $channel_type_list[$key]['is_page'] = $val['name'] == 'content' ? 1 : 0;
            $channel_type_list[$key]['add_time'] = $now_time;
            $channel_type_list[$key]['update_time'] = $now_time;
        }
        if (!empty($channel_type_list)){
            Db::name('weapp_sitecollet_rule')->insertAll($channel_type_list);
        }
    }
    public function setRule_old($post){
        Db::name('weapp_sitecollet_rule')->where("collectid=".$post['id'])->delete();
        $addata = [];
        $now_time = getTime();
        if (!empty($post['name']) && !empty($post['replace_name'])){
            $name_arr = array_unique(array_merge($post['name'],$post['replace_name']));
        }else if(!empty($post['name'])){
            $name_arr = $post['name'];
        }else{
            $name_arr = $post['replace_name'];
        }

        $channel = Db::name("arctype")->where("id=".$post['typeid'])->getField("current_channel");
        $channel_type_list_origin = [
            'title' => '标题',
            'content' => '内容详情',
            'litpic' => '缩略图',
            'seo_title' => 'SEO标题',
            'seo_keywords' => 'SEO关键词',
            'seo_description' => 'SEO描述',
            'add_time' => '新增时间',
        ];
        $channel_type_list = Db::name('channelfield')->field("name,title")
            ->where("ifcontrol=0 and name not in ('content') and channel_id=".$channel)
            ->order("id desc")->getField('name,title');
        $channel_type_list = array_merge($channel_type_list_origin,$channel_type_list);

        foreach ($name_arr as $val){
            $rule = $origin = $replace = '';
            if (in_array($val,$post['name'])){
                $name_id = array_search($val,$post['name']);
                !empty($post['rule'][$name_id]) && $rule = $post['rule'][$name_id];
            }
            if (in_array($val,$post['replace_name'])){
                $replace_id = array_search($val,$post['replace_name']);
                !empty($post['origin'][$replace_id]) && $origin = $post['origin'][$replace_id];
                !empty($post['replace'][$replace_id]) && $replace = $post['replace'][$replace_id];
            }

            $addata[] = [
                'collectid'=>$post['id'],
                'name'=>$val,
                'title' => !empty($channel_type_list[$val]) ? $channel_type_list[$val] : '',
                'rule'=>$rule,
                'origin'=>$origin,
                'replace'=>$replace,
                'is_page'=>$val == 'content' ? 1 : 0,
                'add_time'=>$now_time,
                'update_time'=>$now_time,
            ];
        }
        if (!empty($addata)){
            Db::name('weapp_sitecollet_rule')->insertAll($addata);
        }

    }
}