<?php
namespace weapp\Sitecollect\controller;

use think\Db;
/**
* 微信公众号文章爬取类
* 使用方法：
* $crawler = new WxCrawler();
* $content = $crawler->crawByUrl($url);
*/
class WxCrawler
{
	/** @var 代理  */
	protected $agent = [
		"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; AcooBrowser; .NET CLR 1.1.4322; .NET CLR 2.0.50727)",
        "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Acoo Browser; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506)",
        "Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.35; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)",
        "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
        "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
        "Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 1.0.3705; .NET CLR 1.1.4322)",
        "Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.2; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.2; .NET CLR 3.0.04506.30)",
        "Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.3 (Change: 287 c9dfb30)",
        "Mozilla/5.0 (X11; U; Linux; en-US) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.6",
        "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2pre) Gecko/20070215 K-Ninja/2.1.1",
        "Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9) Gecko/20080705 Firefox/3.0 Kapiko/3.0",
        "Mozilla/5.0 (X11; Linux i686; U;) Gecko/20070322 Kazehakase/0.4.5",
        "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.8) Gecko Fedora/1.9.0.8-1.fc10 Kazehakase/0.5.6",
        "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.56 Safari/535.11",
        "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/535.20 (KHTML, like Gecko) Chrome/19.0.1036.7 Safari/535.20",
        "Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; fr) Presto/2.9.168 Version/11.52",
	];
	public $host = '';
	public $header = '';
	public $referer = '';
	public $antiLeech = '';
	public $root_dir = '';
	public $host_http = '';
	public $host_url = '';
	public $content_html = "[内容]";

	public function __construct($root_dir = '',$host_url='',$host='', $referer='', $proxy=false)
	{
        $this->root_dir = $root_dir;
        $this->host_http = $host_url[0].':';
        $this->host_url = $host_url[1];
		/** @var 初始化curl信息  */
		$this->header  = $this->agent[rand(0,count($this->agent) - 1)];
		$this->referer = empty($referer)?'https://www.eyoucms.com/' : $referer;
		$this->host    = empty($host)?'www.eyoucms.com' : $host;
		/** @var 处理微信图片的防盗链 */
		$this->antiLeech = $this->root_dir.'/index.php?m=plugins&c=Sitecollect&a=tool&url=';
	}
	/*
	 * 判断图片链接是否包含http，不包含，则加上网站域名
	 */
	public function setRealUrl($litpic){
        if (!empty($litpic) && !preg_match("#^http(s?):\/\/#i", $litpic) && !preg_match("/^\/\//", $litpic)){		//判断是否为完整路径
            $litpic = $this->host_url.$litpic;
        }else if(!empty($litpic) && !preg_match("#^http(s?):\/\/#i", $litpic)){
            $litpic = $this->host_http.$litpic;
        }

        return $litpic;
    }
    /*
     * 图片加上读取方法
     */
    public function setImgLeech($litpic){
        if (!empty($litpic)){
            // 不是合法链接
            if(!preg_match("#^http(s?):\/\/#i", $litpic))
            {
                return $litpic;
            }
            $heads = @get_headers($litpic, 1);
            // 获取请求头并检测死链
            if (empty($heads)) {
                return $litpic;
            } else if(!(stristr($heads[0],"200") && stristr($heads[0],"OK"))){
                return $litpic;
            }
            // 图片扩展名
            $fileType = substr($heads['Content-Type'], -4, 4);
            if(!preg_match("#\.(jpg|jpeg|gif|png|ico|bmp)#i", $fileType))
            {
                if($fileType=='image/gif')
                {
                    $fileType = ".gif";
                }
                else if($fileType=='image/png')
                {
                    $fileType = ".png";
                }
                else if($fileType=='image/x-icon')
                {
                    $fileType = ".ico";
                }
                else if($fileType=='image/bmp')
                {
                    $fileType = ".bmp";
                }
                else
                {
                    $fileType = '.jpg';
                }
            }
            $fileType = strtolower($fileType);
            //格式验证(扩展名验证和Content-Type验证)，链接contentType是否正确
            $allowFiles = [".png", ".jpg", ".jpeg", ".gif", ".bmp", ".ico", ".webp"];
            if(!in_array($fileType,$allowFiles) || (isset($heads['Content-Type']) && !stristr($heads['Content-Type'],"image/"))){
                return $litpic;
            }
            $litpic =  $this->antiLeech.urlencode($litpic);
        }

        return $litpic;
    }
	/**
	 * 爬取内容
	 * @author bignerd
	 * @since  2016-08-16T10:13:58+0800
	 * @param  $url
	 */
	public function _get($url)
	{
		$ch=curl_init($url);
		$options = [
			CURLOPT_USERAGENT => $this->agent,
			CURLOPT_REFERER => $this->referer,
		];
		curl_setopt_array($ch,$options);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_BINARYTRANSFER,true);
        // https请求 不验证证书和hosts
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch,CURLOPT_TIMEOUT,60);

        $output=curl_exec($ch);

        return $output;
	}
    public function _get_old($url){
        ob_start();
        $context = stream_context_create(
            array('http' => array(
                'follow_location' => false
            ))
        );
        readfile($url,false,$context);
        $img = ob_get_contents();
        ob_end_clean();

        return $img;
    }
	/*
	 * 获取页面链接集合（包括缩略图和标题）
	 * 链接获取规则：
	 * 1、存在正则表达式时，优先使用表达式；
	 * 2、如果不存在正则表达式，或者通过正则表达式获取不到链接时，默认获取a标签里面是链接，并执行一下规则：
	 * 2-1、通过a_involve和a_exclusive过滤，
	 * 2-2、过滤重复的链接。
	 * 缩略图获取规则：
	 * 1、存在正则表达式时，优先使用表达式；
	 * 2、默认获取img标签（存在多个就坑爹了）
	 */
    public function getLink($content,$config){
        $result = [];
        $list_rule = htmlspecialchars_decode($config['list_rule']);
        $list_rule = $this->regularStrTrans($list_rule);
        $list_rule = str_replace($this->content_html,'(.*?)',$list_rule);
        $list_rule = '/'.$list_rule.'/s';
        preg_match($list_rule, $content, $matchList);
        if (empty($matchList[1])){
            return false;
        }
        //正则获取链接集合
        if (!empty($config['a_rule'])){
            $a_rule = htmlspecialchars_decode($config['a_rule']);
            $a_rule = $this->regularStrTrans($a_rule);
            $a_rule = str_replace($this->content_html,'(.*?)',$a_rule);
            $a_rule = '/'.$a_rule.'/s';
            preg_match_all($a_rule, $matchList[1], $matchA);
        }
        //根据a标签获取链接集合
        if (empty($matchA[1])){
            $a_rule = '/href="(.*?)"/s';
            preg_match_all($a_rule, $matchList[1], $matchA);
            if (empty($matchA[1])){
                return false;
            }
            $a_list = [];
            foreach ($matchA[1] as $val){
                if (empty($val) || in_array($val,$a_list)){
                    continue;
                }
                if (!empty($config['a_involve'])){
                    if (!strpos($val,$config['a_involve'])){
                        continue;
                    }
                }
                if (!empty($config['a_exclusive'])){
                    if (strpos($val,$config['a_exclusive'])){
                        continue;
                    }
                }
                $a_list[] = $val;
            }
            $matchA[1] = $a_list;
        }
        if (empty($matchA[1])){
            return false;
        }
        if ($config['litpic_rule']){
            $litpic_rule = htmlspecialchars_decode($config['litpic_rule']);
            $litpic_rule = $this->regularStrTrans($litpic_rule);
            $litpic_rule = str_replace($this->content_html,'(.*?)',$litpic_rule);
            $litpic_rule = '/'.$litpic_rule.'/s';
            preg_match_all($litpic_rule, $matchList[1], $matchLitpic);
        }
        if ($config['is_list_litpic'] && empty($matchLitpic[1])){
            $a_rule = '/src="(.*?)"/s';
            preg_match_all($a_rule, $matchList[1], $matchLitpic);
        }
        foreach ($matchA[1] as $key=>$val){
            $result[] = [
                'url' => $val,
                'litpic' => !empty($matchLitpic[1][$key]) ? $matchLitpic[1][$key] : ''
            ];
        }
        return $result;
    }

    /*
     * 获取页面链接集合
     * $content		内容
     *$list_rule	列表规则
     * $a_rule		a标签规则
     * $litpic_rule 缩略图规则
     */
    public function getLink_old($content,$list_rule,$a_rule,$litpic_rule = ''){
        $result = [];
        $list_rule = htmlspecialchars_decode($list_rule);
        $list_rule = $this->regularStrTrans($list_rule);
        $list_rule = str_replace($this->content_html,'(.*?)',$list_rule);
        $list_rule = '/'.$list_rule.'/s';
        preg_match($list_rule, $content, $matchList);

        if (empty($matchList[1])){
            return false;
        }

        $a_rule = htmlspecialchars_decode($a_rule);
        $a_rule = $this->regularStrTrans($a_rule);
        $a_rule = str_replace($this->content_html,'(.*?)',$a_rule);
        $a_rule = '/'.$a_rule.'/s';
        preg_match_all($a_rule, $matchList[1], $matchA);
        if (empty($matchA[1])){
            return false;
        }

        if ($litpic_rule){
            $litpic_rule = htmlspecialchars_decode($litpic_rule);
            $litpic_rule = $this->regularStrTrans($litpic_rule);
            $litpic_rule = str_replace($this->content_html,'(.*?)',$litpic_rule);
            $litpic_rule = '/'.$litpic_rule.'/s';
            preg_match_all($litpic_rule, $matchList[1], $matchLitpic);

        }
        foreach ($matchA[1] as $key=>$val){
            $result[] = [
                'url' => $val,
                'litpic' => !empty($matchLitpic[1][$key]) ? $matchLitpic[1][$key] : ''
            ];
        }

        return $result;
    }

    /*
     * 获取各个字段信息
     * $url_content 当前页面链接
     * $content		页面内容
     * $rule_list	字段规则集合
     * $config		基本配置信息（是否去除样式等）
     * $insert	    是否插入
     *
     */
    public function getFieldInfo($url_content,$content,$rule_list,$config,$insert = 0){
        $rule_list = $this->getCanonicalData($content,$rule_list,$config,$insert);
        //存在分页，获取分页内容
        if (!empty($rule_list) && !empty($config['is_page']) && !empty($config['page_a_rule']) && !empty($config['page_list_rule'])){
            $rule_list = $this->getPageList($url_content,$rule_list,$config);
        }
        return $rule_list;
	}
    /*
     * 获取单页数据（正则）
     ** $content		页面内容
     * $rule_list	字段规则集合
     * $config		基本配置信息（是否去除样式等）
     * $insert	    是否插入
     * $type        页面类型（1：主页，》1的其他值为分页，分页只正则获取需要分页内容的值）
     * 返回值       当前页面正则规则对应信息
     */
    public function getCanonicalData($content,$rule_list,$config,$insert = 0,$type = 1){
        $charset_rule = htmlspecialchars_decode('<meta http-equiv="Content-Type" content="text/html; charset='.$this->content_html.'" />');
        $charset_rule = str_replace($this->content_html,'(.*?)',$charset_rule);
        $charset_rule = str_replace('/','\/',$charset_rule);
        $charset_rule = '/'.$charset_rule.'/s';
        preg_match($charset_rule, $content, $matchCharset);
        $charset = !empty($matchCharset[1]) ? $matchCharset[1] : 'utf-8';   //获取原页面编码格式
        $all = $empty = 0;
//        $rule_list = array_reverse($rule_list,true);
        foreach ($rule_list as $key => $val) {
            if ($type > 1){
                $rule_list[$key]['content'] = "";
                if (empty($val['is_page'])){
                    continue;
                }
            }
            $all ++ ;
            if ($val['rule']){
                $rule = htmlspecialchars_decode($val['rule']);
                $rule = $this->regularStrTrans($rule);
                $rule = str_replace($this->content_html,'(.*?)',$rule);
                $rule = '/'.$rule.'/s';
                preg_match($rule, $content, $matchList);

                if (!empty($matchList[1])){
                    if ($charset == 'gb2312'){      //转码
                        $matchList[1] = iconv('GB2312', 'UTF-8', $matchList[1]);
                    }
                    $content_last = $this->filter($matchList[1],$config);  //过滤
                    //替换
                    if (!empty($val['origin'])){
                        $origin_arr = explode(PHP_EOL,$val['origin']);
                        $replace_arr = explode(PHP_EOL,$val['replace']);
                        foreach ($origin_arr as $k=>$v){
                            if (!empty($v)){
                                $replace = !empty($replace_arr[$k]) ? $replace_arr[$k] : '';
                                $content_last = str_replace($v,$replace,$content_last);
                            }
                        }
                    }
                    $rule_list[$key]['content'] = $content_last;
                    $rule_list[$key]['content'] = $this->handel_html_img($rule_list[$key]['content'],$config);
                    if ($val['name'] == 'content'){
                        $rule_list[$key]['content'] = htmlspecialchars($rule_list[$key]['content']);
                    }
                }
            }
            if ($val['name'] == 'title' && $insert == 1 && $config['is_filt_repet'] == 1){     //过滤重复标题
                $have = Db::name("archives")->where("typeid={$config['typeid']} and title='{$rule_list[$key]['content']}'")->find();
                if ($have){
                    return false;
                }
            }
            if ($val['name'] == 'litpic'){		//缩略图处理
                if(empty($rule_list[$key]['content']) && !empty($config['litpic'])){    //获取列表封面图为缩略图（列表缩略图）
                    $rule_list[$key]['content'] = $config['litpic'];
                }
                if (empty($rule_list[$key]['content']) && !empty($config['is_litpic'])){	//获取第一张图片为缩略图
                    //判断是否存在content字段，且不为空，获取content中的第一张图片
                    $rule = '/<img(.*?)src="(.*?)"/s';
                    if (!empty($rule_list['content']['content'])){
                        preg_match($rule, htmlspecialchars_decode($rule_list['content']['content']), $matchList);
                        if (!empty($matchList[2])){
                            $rule_list[$key]['content'] = $matchList[2];
                            continue;
                        }
                    }
                    //判断整页内容，且不为空，获取页面中的第一张图片
//                    if (empty($rule_list[$key]['content'])){
//                        preg_match($rule, $content, $matchList);
//                        if (!empty($matchList[2])){
//                            $rule_list[$key]['content'] = $matchList[2];
//                        }
//                    }
                }
                $rule_list[$key]['content'] = $this->setRealUrl($rule_list[$key]['content']);
                if (!empty($rule_list[$key]['content']) && empty($config['is_local'])){		//判断是否图片本地化
                    $rule_list[$key]['content'] = $this->setImgLeech($rule_list[$key]['content']);
                }else if(empty($val['default']) && !empty($rule_list[$key]['content'])){        //本地化
                    $rule_list[$key]['content'] = $this->local_litpic($rule_list[$key]['content']);
                }
            }
            if (empty($rule_list[$key]['content'])){       //不存在匹配值，则设置默认值
                $empty ++ ;
                $rule_list[$key]['content'] = $val['default'];
            }
        }

        if ($all == $empty){        //所有正则都匹配不到内容，返回空值（主要应用于302跳转到404页面）
            return false;
        }
//        $rule_list = array_reverse($rule_list,true);

        return $rule_list;
    }
    /*
     * 获取分页内容数据大集合
     * $url_content     本页路径
     * $rule_list       第一页内容集合
     * $config          配置项
     * 返回值            所有页面拼凑之后的数据集合
     */
    public function getPageList($url_content,$rule_list,$config){
        $rule_list_page = $rule_list;
        $page = 2;
        $id = $this->getPageId($url_content,$config);
        while (!empty($rule_list_page)){
            $pageUrl = $this->getPageUrl($id,$page,$config);
            $content = $this->_get($pageUrl);
            if (empty($content)){
                break;
            }
            $rule_list_page = $this->getCanonicalData($content,$rule_list,$config,0,$page);
            if (empty($rule_list_page)){
                break;
            }
            foreach ($rule_list as $key=>$val){
                !empty($rule_list_page[$key]['content']) && $rule_list[$key]['content'] = $val['content'].$rule_list_page[$key]['content'];
            }

            $page++;
        }

        return $rule_list;
    }
	/*
	 * 获取当前页码id
	 * $url_content     当前页面链接
	 * $config          配置项
	 * 返回值           存在分页规则，则匹配，否在，返回false
	 */
	public function getPageId($url_content,$config){
	    if (empty($config['is_page']) || empty($config['page_a_rule'])){
	        return false;
        }
        $rule = htmlspecialchars_decode($config['page_a_rule']);
        $rule = $this->regularStrTrans($rule);
        $rule = str_replace('{{id}}','(.*?)',$rule);
        $rule = '/'.$rule.'/s';
        preg_match($rule, $url_content, $matchList);

        return !empty($matchList[1]) ? $matchList[1] : false;
    }
    /*
     * 获取分页链接
     * $pageId      页面id
     * $config      配置内容
     * $page        页码
     * 返回值      在分页规则，则匹配，否在，返回false
     */
    public function getPageUrl($id,$page,$config){
        if (empty($config['is_page']) || empty($config['page_list_rule'])){
            return false;
        }
        $rule = htmlspecialchars_decode($config['page_list_rule']);
        $rule = str_replace('{{id}}',$id,$rule);
        $rule = str_replace('{{page}}',$page,$rule);

        return $rule;
    }

	/*
	 * 过滤样式
	 * $content			内容
	 * $config			配置
	 */
	public function filter($content,$config){
        $content = preg_replace_callback('/[\xf0-\xf7].{3}/', function($r) { return '';}, $content);
		if (!empty($config['filt_iframe'])){
            $content = preg_replace("/<iframe[\s\S]*?<\/iframe>/i", "", $content);
//            $content = preg_replace("/<iframe[^>]*>/i", '', $content);//去除视频
//            @$content = preg_replace("/<\/iframe>/i", '', $content);//去除视频
		}
        if (!empty($config['filt_js'])){
            $content = preg_replace("/<script[\s\S]*?<\/script>/i", "", $content);
//            $content = preg_replace("/<script[^>]*>/i", "", $content);
//            @$content = preg_replace("/<\/script>/i", "", $content);
        }
        if (!empty($config['filt_a'])){
            $content = preg_replace("/<a[^>]*>/i", "", $content);
            @$content = preg_replace("/<\/a>/i", "", $content);
        }
        if (!empty($config['filt_style'])){
            $content = preg_replace("/style=[\"|\'](.*?)[\"|\']/",'',$content);
//            $content = preg_replace("/<!--[^>]*-->/i", "", $content);//注释内容
//            $content = preg_replace("/style=.+?['|\"]/i", '', $content);//去除样式
//            $content = preg_replace("/class=.+?['|\"]/i", '', $content);//去除样式
//            $content = preg_replace("/id=.+?['|\"]/i", '', $content);//去除样式
//            $content = preg_replace("/lang=.+?['|\"]/i", '', $content);//去除样式
//            $content = preg_replace("/width=.+?['|\"]/i", '', $content);//去除样式
//            $content = preg_replace("/height=.+?['|\"]/i", '', $content);//去除样式
//            $content = preg_replace("/border=.+?['|\"]/i", '', $content);//去除样式
//            $content = preg_replace("/face=.+?['|\"]/i", '', $content);//去除样式
//            $content = preg_replace("/face=.+?['|\"]/", '', $content);//去除样式 只允许小写 正则匹配没有带 i 参数
        }
        if (!empty($config['filt_object'])){
            $content = preg_replace("/<object[\s\S]*?<\/object>/i", "", $content);
//            $content = preg_replace("/<object[^>]*>/i", "", $content);
//            @$content = preg_replace("/<\/object>/i", "", $content);
        }

        return $content;
	}
	/*
	 * 内容图片处理
	 * $content     内容
	 * $config      基本配置
	 * 返回值       经过页面处理过的参数
	 */
	public function handel_html_img($content,$config){
        if (empty($config['is_local'])){		//判断是否图片本地化
            $content = preg_replace_callback('/src="(.*?)"/s', function($matches){
                $img_url = $matches[1];
                $img_url = $this->setImgLeech($this->setRealUrl($img_url));
                return 'src="'.$img_url.'"';
            }, $content);
        }else{
            if ( ! function_exists('remote_to_local')){
                die("操作失败，当前系统版本不支持图片本地化，请更新至1.4.0以上");
            }
            $content = preg_replace_callback('/src="(.*?)"/s', function($matches){
                $img_url = $matches[1];
                $img_url = $this->setRealUrl($img_url);
                return 'src="'.$img_url.'"';
            }, $content);
            $content = remote_to_local($content);
        }

        return $content;
	}
	/*
	 * 封面图片本地化
	 */
	public function local_litpic($imgUrl){
        $dirname = './'.UPLOAD_PATH.'ueditor/'.date('Ymd/');
        !file_exists($dirname) && !mkdir($dirname,0777,true);
        $file_name = session('admin_id').'-'.dd2char(date("ymdHis").mt_rand(100,999)).'.jpg';
        $save_name = '/'.UPLOAD_PATH.'ueditor/'.date('Ymd/').$file_name;
        $put_name = ".".$save_name;
        ob_start();
        $context = stream_context_create(
            array('http' => array(
                'follow_location' => false
            ))
        );
        readfile($imgUrl,false,$context);
        $img = ob_get_contents();
        ob_end_clean();
        if(!(file_put_contents($put_name, $img) && file_exists($put_name))){ //移动失败
            return false;
        }

        return $save_name;
	}
	/*
	 * 正则规则特殊字符处理
	 */
	public function regularStrTrans($string){
        $string = str_replace('/','\/',$string);
        $string = str_replace('(','\(',$string);
        $string = str_replace(')','\)',$string);
        $string = str_replace('*','\*',$string);
        $string = str_replace('|','\|',$string);
        $string = str_replace('+','\+',$string);
        $string = str_replace('?','\?',$string);
        $string = str_replace('^','\^',$string);
        $string = str_replace('$','\$',$string);

        return $string;
    }
	/**
	 * 特殊字符转换
	 * @author bignerd
	 * @since  2016-08-16T17:30:52+0800
	 * @param  $string
	 * @return $string
	 */
	public function htmlTransform($string)
	{
		$string = str_replace('&quot;','"',$string);
        $string = str_replace('&amp;','&',$string);
        $string = str_replace('amp;','',$string);
        $string = str_replace('&lt;','<',$string);
        $string = str_replace('&gt;','>',$string);
        $string = str_replace('&nbsp;',' ',$string);
        $string = str_replace("\\", '',$string);
        return $string;
	}
}

?>
