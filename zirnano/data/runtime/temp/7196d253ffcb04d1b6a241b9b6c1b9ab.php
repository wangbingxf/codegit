<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:45:"./application/admin/template/product\edit.htm";i:1686877574;s:58:"E:\APMZ\web12\application\admin\template\public\layout.htm";i:1686877574;s:61:"E:\APMZ\web12\application\admin\template\public\theme_css.htm";i:1680508820;s:76:"E:\APMZ\web12\application\admin\template\archives\get_field_addonextitem.htm";i:1680508820;s:74:"E:\APMZ\web12\application\admin\template\product\old_product_attr_edit.htm";i:1610607784;s:58:"E:\APMZ\web12\application\admin\template\public\footer.htm";i:1680508820;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen"/>
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css?v=<?php echo $version; ?>" rel="stylesheet" />
<link href="/public/static/admin/font/css/iconfont.css?v=<?php echo $version; ?>" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css?v=<?php echo $version; ?>">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadimgnew/upload'); ?>";
    // 插件专用旧版上传图片框
    if ('Weapp@execute' == "<?php echo CONTROLLER_NAME; ?>@<?php echo ACTION_NAME; ?>") {
      GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    }
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
    var __seo_pseudo__ = <?php echo (isset($global['seo_pseudo']) && ($global['seo_pseudo'] !== '')?$global['seo_pseudo']:1); ?>;
    var __web_xss_filter__ = <?php echo (isset($global['web_xss_filter']) && ($global['web_xss_filter'] !== '')?$global['web_xss_filter']:0); ?>;
    var __is_mobile__ = <?php echo (isset($is_mobile) && ($is_mobile !== '')?$is_mobile:0); ?>;
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css"/>
<!-- <link type="text/css" rel="stylesheet" href="/public/plugins/tags_input/css/jquery.tagsinput.css?v=<?php echo $version; ?>"> -->
<style type="text/css">html, body { overflow: visible;}</style>
<link href="/public/static/admin/css/diy_style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />

<!-- 官方内置样式表，升级会覆盖变动，请勿修改，否则后果自负 -->

<style type="text/css">
	/*左侧收缩图标*/
	#foldSidebar i { font-size: 24px;color:<?php echo $global['web_theme_color']; ?>; }
    /*左侧菜单*/
    .eycms_cont_left{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl dd a:hover,.eycms_cont_left dl dd a.on,.eycms_cont_left dl dt.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl dd a:active{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist dd{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl.jslist dd a:hover,.eycms_cont_left dl.jslist dd a.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist:hover{ background:<?php echo $global['web_assist_color']; ?>; }
    /*栏目操作*/
    .cate-dropup .cate-dropup-con a:hover{ background-color: <?php echo $global['web_theme_color']; ?>; }
    /*按钮*/
    a.ncap-btn-green { background-color: <?php echo $global['web_theme_color']; ?>; }
    a:hover.ncap-btn-green { background-color: <?php echo $global['web_assist_color']; ?>; }
    .flexigrid .sDiv2 .btn:hover { background-color: <?php echo $global['web_theme_color']; ?>; }
    .flexigrid .mDiv .fbutton div.add{background-color: <?php echo $global['web_theme_color']; ?>; border: none;}
    .flexigrid .mDiv .fbutton div.add:hover{ background-color: <?php echo $global['web_assist_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds{color:<?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds:hover{ background-color: <?php echo $global['web_theme_color']; ?>;}
    /*选项卡字体*/
    .tab-base a.current,
    .tab-base a:hover.current {color:<?php echo $global['web_theme_color']; ?> !important;}
    .tab-base a.current:after,
    .tab-base a:hover.current:after {background-color: <?php echo $global['web_theme_color']; ?>;}
    .addartbtn input.btn:hover{ border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>; }
    .addartbtn input.btn.selected{ color: <?php echo $global['web_theme_color']; ?>;border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>;}
	/*会员导航*/
	.member-nav-group .member-nav-item .btn.selected{background: <?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;box-shadow: -1px 0 0 0 <?php echo $global['web_theme_color']; ?>;}
	.member-nav-group .member-nav-item:first-child .btn.selected{border-left: 1px solid <?php echo $global['web_theme_color']; ?> !important;}
	/*搜索按钮图标*/
	.flexigrid .sDiv2 .fa-search{}
        
    /* 商品订单列表标题 */
   .flexigrid .mDiv .ftitle h3 {border-left: 3px solid <?php echo $global['web_theme_color']; ?>;} 
	
    /*分页*/
    .pagination > .active > a, .pagination > .active > a:focus, 
	.pagination > .active > a:hover, 
	.pagination > .active > span, 
	.pagination > .active > span:focus, 
	.pagination > .active > span:hover { border-color: <?php echo $global['web_theme_color']; ?>;color:<?php echo $global['web_theme_color']; ?>; }
    
    .layui-form-onswitch {border-color: <?php echo $global['web_theme_color']; ?> !important;background-color: <?php echo $global['web_theme_color']; ?> !important;}
    .onoff .cb-enable.selected { background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .onoff .cb-disable.selected {background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .pcwap-onoff .cb-enable.selected { background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .pcwap-onoff .cb-disable.selected {background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    input[type="text"]:focus,
    input[type="text"]:hover,
    input[type="text"]:active,
    input[type="password"]:focus,
    input[type="password"]:hover,
    input[type="password"]:active,
    textarea:hover,
    textarea:focus,
    textarea:active { border-color:<?php echo hex2rgba($global['web_theme_color'],0.8); ?>;box-shadow: 0 0 0 1px <?php echo hex2rgba($global['web_theme_color'],0.5); ?> !important;}
    .input-file-show:hover .type-file-button {background-color:<?php echo $global['web_theme_color']; ?> !important; }
    .input-file-show:hover {border-color: <?php echo $global['web_theme_color']; ?> !important;box-shadow: 0 0 5px <?php echo hex2rgba($global['web_theme_color'],0.5); ?> !important;}
    .input-file-show:hover span.show a,
    .input-file-show span.show a:hover { color: <?php echo $global['web_theme_color']; ?> !important;}
    .input-file-show:hover .type-file-button {background-color: <?php echo $global['web_theme_color']; ?> !important; }
    .color_z { color: <?php echo $global['web_theme_color']; ?> !important;}
    a.imgupload{
        background-color: <?php echo $global['web_theme_color']; ?> !important;
        border-color: <?php echo $global['web_theme_color']; ?> !important;
    }
    /*专题节点按钮*/
    .ncap-form-default .special-add{background-color:<?php echo $global['web_theme_color']; ?>;border-color:<?php echo $global['web_theme_color']; ?>;}
    .ncap-form-default .special-add:hover{background-color:<?php echo $global['web_assist_color']; ?>;border-color:<?php echo $global['web_assist_color']; ?>;}
    
    /*更多功能标题*/
    .on-off_panel .title::before {background-color:<?php echo $global['web_theme_color']; ?>;}
    .on-off_panel .on-off_list-caidan .icon_bg .on{color: <?php echo $global['web_theme_color']; ?>;}
    .on-off_panel .e-jianhao {color: <?php echo $global['web_theme_color']; ?>;}
    
     /*内容菜单*/
    .ztree li a:hover{color:<?php echo $global['web_theme_color']; ?> !important;}
    .ztree li a.curSelectedNode{background-color: <?php echo $global['web_theme_color']; ?> !important; border-color:<?php echo $global['web_theme_color']; ?> !important;}
    .layout-left .on-off-btn {background-color: <?php echo $global['web_theme_color']; ?> !important;}

    .iframe_loading{
        width:100%;
        background:url(/public/static/admin/images/loading-0.gif) no-repeat center center;
    }
    
    .layui-btn-normal {background-color: <?php echo $global['web_theme_color']; ?>;}
    
    /* 商品规格按钮 */
    /* .preset-bt{border-color: <?php echo $global['web_theme_color']; ?> !important;background:<?php echo $global['web_theme_color']; ?>;} */
</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js?v=<?php echo $version; ?>"></script>
<!-- <script type="text/javascript" src="/public/plugins/tags_input/js/jquery.tagsinput.js?v=<?php echo $version; ?>"></script> -->
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/myFormValidate.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>

<?php if($editor['editor_select'] == '1'): ?>
    <script type="text/javascript" src="/public/plugins/Ueditor/ueditor.config.js?t=v1.6.3"></script>
    <script type="text/javascript" src="/public/plugins/Ueditor/ueditor.all.min.js?t=v1.6.3"></script>
    <script type="text/javascript" src="/public/plugins/Ueditor/lang/zh-cn/zh-cn.js?t=v1.6.3"></script>
<?php else: ?>
    <script type="text/javascript" src="/public/plugins/ckeditor/ckeditor.js?t=v1.6.3"></script>
<?php endif; ?>

<body class="bodysy-w">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="geduan_div" class="h10"></div>
<div id="page_div" class="page min-hg-c mb-20" style="min-width:auto;box-shadow:none;">
    <div class="fixed-bar">
        <div class="item-title"><a class="back_xin" href="javascript:history.back();" title="返回"><i class="iconfont e-fanhui"></i></a>
			<a class="back_sz" href="javascript:void(0);" data-href="<?php echo url('Product/help'); ?>" onclick="openHelpframe(this, '设置与帮助', '500px', '100%', 'r');" title="设置与帮助"><i class="iconfont e-shezhi-tongyong"></i></a>
            <ul class="tab-base nc-row">
                <li><a href="javascript:void(0);" data-index='1' class="tab current"><span>基础内容</span></a></li>
                <li><a href="javascript:void(0);" data-index='2' class="tab"><span>产品参数</span></a></li>
                <li><a href="javascript:void(0);" data-index='3' class="tab"><span>SEO优化</span></a></li>
                <li><a href="javascript:void(0);" data-index='4' class="tab"><span>更多设置</span></a></li>
                <!-- #weapp_demontrate_li# -->
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Product/edit'); ?>" method="post">
        <!-- 常规信息 -->
        <div class="ncap-form-default tab_div_1">
            <dl class="row">
                <dt class="tit"> <label for="title"><em>*</em>文档标题</label> </dt>
                <dd class="opt">
                    <input type="text" name="title" value="<?php echo $field['title']; ?>" id="title" class="input-txt" maxlength="200" <?php if($channelRow['is_repeat_title'] == '0'): ?> oninput="check_title_repeat(this,'<?php echo $field['aid']; ?>');" <?php endif; ?>>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    副标题：<input type="text" name="subtitle" value="<?php echo $field['subtitle']; ?>" id="subtitle" class="w200">
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit"> <label for="typeid"><em>*</em>栏目分类</label> </dt>
                <dd class="opt"> 
                    <input type="hidden" name="attr[typeid]" id="attr_typeid" value="<?php echo $field['typeid']; ?>">
                    <select name="typeid" id="typeid"><?php echo $arctype_html; ?></select>
                </dd>
            </dl>
            <dl class="row <?php if(empty($global['web_stypeid_open']) || (($global['web_stypeid_open'] instanceof \think\Collection || $global['web_stypeid_open'] instanceof \think\Paginator ) && $global['web_stypeid_open']->isEmpty())): ?> none <?php endif; ?>">
                <dt class="tit"> <label for="stypeid">副栏目分类</label> </dt>
                <dd class="opt"> 
                    <input type="hidden" name="stypeid" id="stypeid" value="<?php echo $field['stypeid']; ?>" class="input-txt" onkeyup="this.value=this.value.replace(/[^\d\,]/g,'');" onpaste="this.value=this.value.replace(/[^\d\,]/g,'');" placeholder="">
                    &nbsp;<a href="javascript:void(0);" data-channel="<?php echo $channeltype; ?>" onclick="select_stypeid(this);" class="ncap-btn ncap-btn-green">选择副栏目</a>
                    <div id="stypeid_txt" class="pt5">
                        <?php if(is_array($stypeid_arr) || $stypeid_arr instanceof \think\Collection || $stypeid_arr instanceof \think\Paginator): $i = 0; $__LIST__ = $stypeid_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($key > '0'): ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php endif; ?><span><?php echo $vo['typename']; ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit"> <label>文档属性</label> </dt>
                <dd class="opt">
                    <?php if(is_array($archives_flags) || $archives_flags instanceof \think\Collection || $archives_flags instanceof \think\Paginator): $i = 0; $__LIST__ = $archives_flags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input type="hidden" name="attr[<?php echo $vo['flag_fieldname']; ?>]" <?php if($field[$vo['flag_fieldname']] == 1): ?>value="1"<?php else: ?>value="0"<?php endif; ?>>
                        <label><input type="checkbox" name="<?php echo $vo['flag_fieldname']; ?>" value="1" <?php if($field[$vo['flag_fieldname']] == 1): ?>checked<?php endif; ?>><?php echo $vo['flag_name']; ?><!-- [<?php echo $vo['flag_attr']; ?>] --></label>&nbsp;
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                <span class="err"></span>
                <p class="notic">如需管理，请点击右上角设置与帮助按钮</p>
                </dd>
            </dl>
            <dl class="row <?php if($field['is_jump'] != 1): ?>none<?php endif; ?> dl_jump">
                <dt class="tit"> <label for="jumplinks">跳转网址</label> </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $field['jumplinks']; ?>" name="jumplinks" id="jumplinks" class="input-txt" placeholder="http://">
                </dd>
            </dl>
            <dl class="row" style="z-index: 2;">
                <dt class="tit"> <label>文档标签</label> </dt>
                <dd class="opt">          
                    <input type="text" value="<?php echo $field['tags']; ?>" name="tags" id="tags" class="input-txt" placeholder="多个标签之间以逗号隔开" autocomplete="off" oninput="get_common_tagindex_input(this);" onfocus="$('#often_tags').hide();" onkeyup="this.value=this.value.replace(/[\，]/g,',');" onpaste="this.value=this.value.replace(/[\，]/g,',');">&nbsp;
                    <a href="javascript:void(0);" onclick="get_common_tagindex(this);">显示常用标签</a>&nbsp;<img id="tag_loading" src="/public/static/common/images/loading.gif" style="display: none;" />
                    <div class="often_tags" id="often_tags" data-opt="edit" style="display: none;"></div>
                    <div class="often_tags" id="often_tags_input" style="display: none;"></div>
                    <input type="hidden" id="tags_click_count">
                </dd>
            </dl>
            <dl class="row <?php if(empty($global['web_citysite_open']) || (($global['web_citysite_open'] instanceof \think\Collection || $global['web_citysite_open'] instanceof \think\Paginator ) && $global['web_citysite_open']->isEmpty())): ?> none <?php endif; ?> ">
                <dt class="tit"> <label>所属区域</label> </dt>
                <dd class="opt"> 
                    <select name="province_id" id="province_id" onchange="set_city_list(0);">
                        <option value="0">全国</option>
                        <?php $_result=get_site_province_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>" <?php if($field['province_id'] == $vo['id']): ?> selected <?php endif; ?> ><?php echo $vo['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <select name="city_id" id="city_id" class="none ml5" onchange="set_area_list(0);">
                        <option value="">--请选择--</option>
                    </select>
                    <select name="area_id" id="area_id" class="none ml5">
                        <option value="">--请选择--</option>
                    </select>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit"> <label>封面图片</label> </dt>
                <dd class="opt">
                    <div class="input-file-show div_litpic_local" <?php if($field['is_remote'] != '0'): ?>style="display: none;"<?php endif; ?>>
                        <span class="show">
                            <a id="img_a" target="_blank" class="nyroModal" rel="gal" href="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:'javascript:void(0);'); ?>">
                                <i id="img_i" class="fa fa-picture-o" <?php if(!(empty($field['litpic_local']) || (($field['litpic_local'] instanceof \think\Collection || $field['litpic_local'] instanceof \think\Paginator ) && $field['litpic_local']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:''); ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="litpic_local" name="litpic_local" value="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:''); ?>" class="type-file-text" autocomplete="off">
                            <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                            <input class="type-file-file" onClick="GetUploadify(1,'','allimg','img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo" title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                        </span>
                    </div>
                    <input type="text" id="litpic_remote" name="litpic_remote" value="<?php echo (isset($field['litpic_remote']) && ($field['litpic_remote'] !== '')?$field['litpic_remote']:''); ?>" placeholder="http://" class="input-txt" onKeyup="keyupRemote(this, 'litpic');" <?php if($field['is_remote'] != '1'): ?>style="display: none;"<?php endif; ?>>
                    &nbsp;
                    <label><input type="checkbox" name="is_remote" id="is_remote" value="1" <?php if($field['is_remote'] == '1'): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, 'litpic');">远程图片</label>
                </dd>
            </dl>
            <dl class="row <!-- #weapp_diy911873092_product_none# -->">
                <dt class="tit"> <label>图片集</label> </dt>
                <dd class="opt">          
                    <div class="tab-pane pics" id="tab_proimg">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td >
                                    <div class="sort-list-img">
                                        <?php if(is_array($proimg_list) || $proimg_list instanceof \think\Collection || $proimg_list instanceof \think\Paginator): $k = 0; $__LIST__ = $proimg_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                        <div class="images_upload images_upload_html" style="display:inline-block;">
                                            <div class="images_upload_box">
                                                <input type="hidden" name="proimg[]" value="<?php echo $vo['image_url']; ?>">
                                                <a href="<?php echo $vo['image_url']; ?>" onclick="" class="upimg" target="_blank" title="拖动修改排序">
                                                    <img src="<?php echo $vo['image_url']; ?>">
                                                </a>
                                                <a href="javascript:void(0)" onclick="ClearPicArr2(this,'<?php echo $vo['image_url']; ?>')" class="delect" title="删除"></a>
                                            </div>
                                            <textarea rows="5" cols="60" name="imgintro[]" placeholder="图片注释"><?php echo $vo['intro']; ?></textarea>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        <div class="images_upload"></div>
                                    </div>
                                    <a href="javascript:void(0);" onClick="GetUploadify(30,'','allimg','proimg_call_back');" class="img-upload mb15" title="点击上传"> <div class="y-line"></div> <div class="x-line"></div> </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- 上传图片显示的样板 start -->
                    <div class="images_upload_tpl none">
                        <div class="images_upload images_upload_html">
                            <div class="images_upload_box">
                                <input type="hidden" name="proimg[]" value="" />
                                <a href="javascript:void(0);" onClick="" class="upimg" title="拖动修改排序">
                                    <img src="/public/static/admin/images/add-button.jpg"/>
                                </a>
                                <a href="javascript:void(0)" class="delect" title="删除">&nbsp;&nbsp;</a>
                            </div>
                            <textarea rows="5" cols="60" name="imgintro[]" placeholder="图片注释"></textarea>
                        </div>
                    </div>
                    <!-- 上传图片显示的样板 end -->
                </dd>
            </dl>

            <?php if(!empty($shopConfig['shop_open']) && 1 == $shopConfig['shop_open']): ?>
                <!-- 产品价格属性 -->
                <?php if($shopConfig['shop_type'] == '2'): ?>
                    <dl class="row">
                        <dt class="tit"> <label>产品类型</label> </dt>
                        <dd class="opt">
                            <label> <input type="radio" name="prom_type" value="0" onclick="change_prom_type(0)" <?php if($field['prom_type'] == '0'): ?> checked="checked" <?php endif; ?> />普通产品 </label>
                            &nbsp;
                            <label> <input type="radio" name="prom_type" value="1" onclick="change_prom_type(1)" <?php if(in_array(($field['prom_type']), explode(',',"1,2,3"))): ?> checked="checked" <?php endif; ?>/>虚拟产品 </label>
                        </dd>
                    </dl>
                <?php else: if(empty($IsSame) || (($IsSame instanceof \think\Collection || $IsSame instanceof \think\Paginator ) && $IsSame->isEmpty())): ?>
                        <input type="hidden" name="prom_type" value="<?php echo $field['prom_type']; ?>"/>
                    <?php else: ?>
                        <dl class="row">
                            <dt class="tit"> <label>产品类型</label> </dt>
                            <dd class="opt">
                                <label> <input type="radio" name="prom_type" value="0" onclick="change_prom_type(0)" <?php if($field['prom_type'] == '0'): ?> checked="checked" <?php endif; ?> />普通产品 </label>
                                &nbsp;
                                <label> <input type="radio" name="prom_type" value="1" onclick="change_prom_type(1)" <?php if(in_array(($field['prom_type']), explode(',',"1,2,3"))): ?> checked="checked" <?php endif; ?>/>虚拟产品 </label>
                            </dd>
                        </dl>
                    <?php endif; endif; endif; ?>

            <dl class="row" id="fahuoxingshi" <?php if(empty($field['prom_type']) || (($field['prom_type'] instanceof \think\Collection || $field['prom_type'] instanceof \think\Paginator ) && $field['prom_type']->isEmpty())): ?> style="display: none;" <?php endif; ?>>
                <dt class="tit"> <label>发货形式</label> </dt>
                <dd class="opt">
                    <label> <input type="radio" name="prom_type_vir" value="1" onclick="change_prom_type(2)" <?php if($field['prom_type'] == '1'): ?> checked="checked" <?php endif; ?>/>手动发货 </label>
                    &nbsp;
                    <label> <input type="radio" name="prom_type_vir" value="2" onclick="change_prom_type(3)" <?php if($field['prom_type'] == '2'): ?> checked="checked" <?php endif; ?>/>网盘下载 </label>
                    &nbsp;
                    <label> <input type="radio" name="prom_type_vir" value="3" onclick="change_prom_type(4)" <?php if($field['prom_type'] == '3'): ?> checked="checked" <?php endif; ?>/>文本内容 </label>
                </dd>
            </dl>
            <div id="wangpanxiazai" <?php if($field['prom_type'] != '2'): ?> style="display: none;" <?php endif; ?>>
                <dl class="row">
                    <dt class="tit"> <label for="netdisk_url"><em>*</em>网盘地址</label> </dt>
                    <dd class="opt">
                        <input type="text" name="netdisk_url" id="netdisk_url" value="<?php echo (isset($netdisk['netdisk_url']) && ($netdisk['netdisk_url'] !== '')?$netdisk['netdisk_url']:''); ?>" class="input-txt" placeholder="http://">
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit"> <label for="netdisk_pwd">提取码</label> </dt>
                    <dd class="opt">
                        <input type="text" name="netdisk_pwd" value="<?php echo (isset($netdisk['netdisk_pwd']) && ($netdisk['netdisk_pwd'] !== '')?$netdisk['netdisk_pwd']:''); ?>" id="netdisk_pwd" class="input-txt">
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit"> <label for="unzip_pwd">解压密码</label> </dt>
                    <dd class="opt">
                        <input type="text" name="unzip_pwd" value="<?php echo (isset($netdisk['unzip_pwd']) && ($netdisk['unzip_pwd'] !== '')?$netdisk['unzip_pwd']:''); ?>" id="unzip_pwd" class="input-txt">
                    </dd>
                </dl>
            </div>
            <dl class="row" id="wenbenneirong" <?php if($field['prom_type'] != '3'): ?> style="display: none;" <?php endif; ?>>
                <dt class="tit"> <label for="text_content"><em>*</em>文本内容</label> </dt>
                <dd class="opt">
                    <textarea rows="5" cols="80" id="text_content" name="text_content" style="width: 375px; height: 160px;"><?php echo (isset($netdisk['text_content']) && ($netdisk['text_content'] !== '')?$netdisk['text_content']:''); ?></textarea>
                </dd>
            </dl>
            
            <?php if(1 == $shopConfig['shop_open'] && !empty($ifcontrolRow['users_price'])): if(!isset($shopConfig['shop_open_spec']) || 0 == $shopConfig['shop_open_spec']): ?>
                    <!-- 待添加后续逻辑... -->
                <?php else: ?>
                    <dl class="row">
                        <dt class="tit"> <label>商品规格</label> </dt>
                        <dd class="opt">
                            <label> <input type="radio" id="spec_type1" name="spec_type" value="1" <?php if(empty($useSpecNum) || (($useSpecNum instanceof \think\Collection || $useSpecNum instanceof \think\Paginator ) && $useSpecNum->isEmpty())): ?>checked="checked"<?php endif; ?> onclick="SpecTypeSelect(1);">单规格 </label>
                            &nbsp;
                            <label> <input type="radio" id="spec_type2" name="spec_type" value="2" <?php if(!(empty($useSpecNum) || (($useSpecNum instanceof \think\Collection || $useSpecNum instanceof \think\Paginator ) && $useSpecNum->isEmpty()))): ?>checked="checked"<?php endif; ?> onclick="SpecTypeSelect(2);">多规格 </label>
                        </dd>
                    </dl>
                    <dl class="row spec_type_2" <?php if(empty($useSpecNum) || (($useSpecNum instanceof \think\Collection || $useSpecNum instanceof \think\Paginator ) && $useSpecNum->isEmpty())): ?>style="display: none;"<?php endif; ?>>
                        <dt class="tit"> <label></label> </dt>
                        <dd class="opt">
                            <div>
                                <div id='SpecSelectName'><?php if(is_array($SpecSelectName) || $SpecSelectName instanceof \think\Collection || $SpecSelectName instanceof \think\Paginator): $i = 0; $__LIST__ = $SpecSelectName;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><?php echo $vo; endforeach; endif; else: echo "" ;endif; ?></div>
                                <input type="hidden" id="spec_mark_id_arr" value="<?php echo $spec_mark_id_arr; ?>">
                                <input type="hidden" id="maxPresetMarkID" value="<?php echo $maxPresetMarkID; ?>">
                                <div id="addSpecButton">
                                    <a href="JavaScript:void(0);" id="addCustomSpec" data-value="<?php echo $useSpecNum; ?>" onclick="addCustomSpec(this);" class="ncap-btn ncap-btn-green ml15">新增规格</a>
                                    <select name="spec_value" id="spec_value" onchange="addPresetSpec(this)">
                                        <option value="0">从规格库提取</option>
                                        <?php if(is_array($preset_value) || $preset_value instanceof \think\Collection || $preset_value instanceof \think\Paginator): $i = 0; $__LIST__ = $preset_value;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['preset_mark_id']; ?>"><?php echo $vo['preset_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="row spec_type_2" <?php if(empty($useSpecNum) || (($useSpecNum instanceof \think\Collection || $useSpecNum instanceof \think\Paginator ) && $useSpecNum->isEmpty())): ?>style="display: none;"<?php endif; ?>>
                        <dt class="tit"> <label for="users_price">价格/库存</label> </dt>
                        <dd class="opt"> <div id='SpecTempLateDiv'><?php echo $HtmlTable; ?></div> </dd>
                    </dl>
                <?php endif; endif; if(!empty($ifcontrolRow['users_price'])): ?>
                <dl class="row spec_type_1" <?php if(!(empty($useSpecNum) || (($useSpecNum instanceof \think\Collection || $useSpecNum instanceof \think\Paginator ) && $useSpecNum->isEmpty()))): ?>style="display: none;"<?php endif; ?>>
                    <dt class="tit"> <label for="users_price"><?php if(1 == $shopConfig['shop_open']): ?><em>*</em><?php endif; ?>价格</label> </dt>
                    <dd class="opt">
                        <input type="text" name="users_price" id="users_price" maxlength="100" placeholder="原价" style="width: 10%;" value="<?php echo $field['users_price']; ?>" onkeyup="this.value=this.value.replace(/[^\.\d]/g,'');" onpaste="this.value=this.value.replace(/[^\.\d]/g,'')">
                    </dd>
                </dl>
            <?php endif; if(1 == $shopConfig['shop_open'] && !empty($ifcontrolRow['users_price'])): ?>
                <dl class="row spec_type_1" <?php if(!(empty($useSpecNum) || (($useSpecNum instanceof \think\Collection || $useSpecNum instanceof \think\Paginator ) && $useSpecNum->isEmpty()))): ?>style="display: none;"<?php endif; ?>>
                    <dt class="tit"> <label for="stock_count">库存</label> </dt>
                    <dd class="opt">
                        <input type="text" name="stock_count" id="stock_count" style="width: 10%;" value="<?php echo $field['stock_count']; ?>" <?php if(!(empty($useSpecNum) || (($useSpecNum instanceof \think\Collection || $useSpecNum instanceof \think\Paginator ) && $useSpecNum->isEmpty()))): ?>readonly="readonly"<?php endif; ?>>
                        <label>
                            <input type="checkbox" name="stock_show" value='1' <?php if($field['stock_show'] == '1'): ?>checked<?php endif; ?>>页面显示商品库存
                        </label>
                    </dd>
                </dl>
                <?php if(empty($shopConfig['shop_open_spec'])): ?>
                    <!-- 待添加后续逻辑... -->
                <?php else: ?>
                    <script type="text/javascript">
                        function SpecTypeSelect(spec_type) {
                            var IsSpecData = $('#SpecTempLateDiv').html();
                            if (1 == spec_type) {
                                $('.spec_type_1').show();
                                $('.spec_type_2').hide();
                                $('#dl_virtual_sales').show();
                                $('#users_price, #stock_count').removeAttr("readonly");
                                if (IsSpecData && IsSpecData != ' ') {
                                    layer.confirm('<span style="color: red;">请注意：您已添加多规格，若切换单规格并保存商品，则清空多规格数据！</span>', {
	                                    shade: layer_shade,
	                                    area: ['480px', '190px'],
	                                    move: false,
	                                    title: '提示',
	                                    btnAlign:'r',
	                                    closeBtn: 3,
	                                    btn: ['确定', '取消'] ,//按钮
	                                    success: function () {
	                                          $(".layui-layer-content").css('text-align', 'left');
	                                      }
                                    }, function (index) {
                                        $('#spec_type1').attr('checked', 'checked');
                                        $('#spec_type2').removeAttr('checked');
                                        layer.close(index);
                                    }, function (index) {
                                        $('.spec_type_1').hide();
                                        $('.spec_type_2').show();
                                        $('#users_price, #stock_count').attr("readonly", "readonly");
                                        $('#spec_type1').removeAttr('checked');
                                        $('#spec_type2').attr('checked', 'checked');
                                        layer.close(index);
                                    });
                                }
                            } else {
                                $('.spec_type_1').hide();
                                $('.spec_type_2').show();
                                $('#dl_virtual_sales').hide();
                                $('#users_price, #stock_count').attr("readonly", "readonly");
                            }
                        }
                    </script>

                    <script type="text/javascript">
                        // 规格列表管理
                        var TemplateUrl = "<?php echo url('Shop/spec_template'); ?>";
                        // 规格选择
                        var SelectUrl = "<?php echo url('Shop/spec_select'); ?>";
                        // 获取规格名称规格值框架URL
                        var GetHtmlUrl = "<?php echo url('Shop/assemble_spec_data'); ?>";
                        // 当规格库更新后，调用此方式及时更新选择规格名称的下拉框信息
                        var GetPresetSpecUrl = "<?php echo url('Shop/update_spec_info'); ?>";
                        // 同步更新规格库数据到产品规格中，单条操作
                        var RefreshSpecUrl = "<?php echo url('Shop/refresh_spec_value'); ?>";

                        var aid = "<?php echo $field['aid']; ?>";

                        $(function () {
                            var stock_count = 0;
                            $('.stock_count').each(function(){
                                stock_count +=+ $(this).val();
                            })
                            if (0 === stock_count) {
                                stock_count = '<?php echo $field['stock_count']; ?>';
                            }
                            $('#stock_count').val(stock_count);
                            // 取最小值价格
                            UpPrice();
                            // 合并单元格
                            MergeCells();
                        });

                        // 自定义规格
                        function addCustomSpec(obj) {
                            // 本次使用的规格数量
                            var specValue = $(obj).attr('data-value');
                            if (3 <= specValue) {
                                showErrorMsg('最多使用三种商品规格大类');
                                return false;
                            }
                            // 自定义规格数量+1覆盖原值
                            $(obj).attr('data-value', ++specValue);
                            // if (3 == specValue) $('#addSpecButton').hide();
                            // 创建一个自定义规格空数据和表格
                            layer_loading('正在处理');
                            $.ajax({
                                type: 'post',
                                data: {aid: aid, action: 'name', _ajax: 1},
                                url : "<?php echo url('ShopProduct/add_product_custom_spec'); ?>",
                                dataType: 'json',
                                success: function(res) {
                                    layer.closeAll();
                                    if (1 == res.code) {
                                        // 最大的规格标记ID
                                        var maxSpecMarkID = res.data.spec_mark_id;
                                        // 规格框
                                        var html = [
                                            '<div class="prset-box">'+
                                                '<span class="set-preset-bt mr10" style="display: block;">'+
                                                    '<input type="text" name="set_spec_name" class="zdy-ggname w150" placeholder="规格名称.." onchange="setSpecName(this, ' + maxSpecMarkID + ');">'+
                                                    '<em onclick="setSpecNameClear(this, ' + maxSpecMarkID + ');">'+
                                                        '<i class="fa fa-times-circle" title="关闭" style="margin-left: -20px; margin-top: 8px;"></i>'+
                                                    '</em>'+
                                                '</span>'+
                                                '<span class="set-preset-box"></span>'+
                                                '<span class="set-preset-con">'+
                                                    '<span class="set-preset-bt mr10">'+
                                                        '<input type="hidden" value="' + res.data.spec_value_id + '">'+
                                                        '<input type="text" class="zdy-ggshuzi w150" placeholder="规格值.." onchange="setSpecValue(this, ' + maxSpecMarkID + ');">'+
                                                    '</span>'+
                                                    '<a href="javascript:void(0);" onclick="addCustomSpecValue(this, ' + maxSpecMarkID + ');" class="preset-bt-shuzi mr10">+增加规格值</a>'+
                                                '</span>'+
                                            '</div>'
                                        ];
                                        $('#SpecSelectName').show().append(html);
                                        // 价格/库存HTML
                                        if (res.data.htmlTable) {
                                            // 加载规格框架
                                            $('#SpecTempLateDiv').html(res.data.htmlTable);
                                            // 合并单元格
                                            MergeCells();
                                        }
                                    } else {
                                        showErrorMsg(res.msg);
                                    }
                                },
                                error: function(e) {
                                    layer.closeAll();
                                    showErrorAlert(e.responseText);
                                }
                            });
                        }

                        // 输入完规格名称后执行
                        function setSpecName(obj, spec_mark_id) {
                            var set_spec_name = $(obj).val();
                            if (spec_mark_id && set_spec_name) {
                                $.ajax({
                                    type: 'post',
                                    dataType: 'json',
                                    data: {aid: aid, spec_mark_id: spec_mark_id, set_spec_name: set_spec_name},
                                    url : "<?php echo url('ShopProduct/add_product_custom_spec_name', ['_ajax'=>1]); ?>",
                                    success: function(res) {
                                        if (1 == res.code) {
                                            // 价格/库存HTML
                                            if (res.data.htmlTable) {
                                                // 加载规格框架
                                                $('#SpecTempLateDiv').html(res.data.htmlTable);
                                                // 合并单元格
                                                MergeCells();
                                            }
                                        } else {
                                            showErrorMsg(res.msg);
                                        }
                                    },
                                    error: function(e) {
                                        layer.closeAll();
                                        showErrorAlert(e.responseText);
                                    }
                                });
                            }
                        }

                        // 清除数据库指定数据
                        function setSpecNameClear(obj, spec_mark_id) {
                            if (spec_mark_id) {
                                // 执行处理
                                $.ajax({
                                    type: 'post',
                                    url : "<?php echo url('ShopProduct/del_product_custom_spec', ['_ajax'=>1]); ?>",
                                    data: {aid: aid, spec_mark_id: spec_mark_id, del: 'name'},
                                    dataType: 'json',
                                    success: function(res) {
                                        // 删除当前点击规格块的顶级html
                                        $(obj).parent().parent().remove();
                                        // 如果存在则执行覆盖新的规格列表框
                                        if (res.data.htmlTable) {
                                            // 加载规格框架
                                            $('#SpecTempLateDiv').html(res.data.htmlTable);
                                            // 合并单元格
                                            MergeCells();
                                        }
                                        // 使用规格数量-1覆盖原值
                                        var specValue = $('#addCustomSpec').attr('data-value');
                                        $('#addCustomSpec').attr('data-value', --specValue);
                                        // 显示添加按钮
                                        // $('#addSpecButton').show();
                                    }
                                });
                            }
                        }

                        // 规格规格值
                        function addCustomSpecValue(obj, spec_mark_id) {
                            if (spec_mark_id) {
                                layer_loading('正在处理');
                                $.ajax({
                                    type: 'post',
                                    data: {aid: aid, spec_mark_id: spec_mark_id, action: 'value', _ajax: 1},
                                    url : "<?php echo url('ShopProduct/add_product_custom_spec'); ?>",
                                    dataType: 'json',
                                    success: function(res) {
                                        layer.closeAll();
                                        if (1 == res.code) {
                                            // 规格值HTML
                                            var html = [
                                                '<span class="set-preset-bt mr10">'+
                                                    '<input type="hidden" value="' + res.data.spec_value_id + '">'+
                                                    '<input type="text" class="zdy-ggshuzi w150" placeholder="规格值.." onchange="setSpecValue(this, ' + res.data.spec_mark_id + ');">'+
                                                    '<em data-spec_mark_id="' + res.data.spec_mark_id + '" data-spec_value_id="' + res.data.spec_value_id + '" onclick="setSpecValueClear(this);"><i class="fa fa-times-circle" title="关闭" style="margin-left: -22px;margin-top: 8px;cursor: pointer;"></i></em>'+
                                                '</span>'
                                            ];
                                            // 加载一个规格值 input
                                            $(obj).before(html);
                                            // 价格/库存HTML
                                            if (res.data.htmlTable) {
                                                // 加载规格框架
                                                $('#SpecTempLateDiv').html(res.data.htmlTable);
                                                // 合并单元格
                                                MergeCells();
                                            }
                                        } else {
                                            showErrorMsg(res.msg);
                                        }
                                    },
                                    error: function(e) {
                                        layer.closeAll();
                                        showErrorAlert(e.responseText);
                                    }
                                });
                            }
                        }

                        // 输入完规格值后执行
                        function setSpecValue(obj, spec_mark_id) {
                            // 指定的FormID
                            var set_spec_value = $(obj).val();
                            var spec_value_id = $(obj).prev().val();
                            if (set_spec_value && spec_value_id && spec_mark_id) {
                                $.ajax({
                                    type: 'post',
                                    dataType: 'json',
                                    data: {aid: aid, set_spec_value: set_spec_value, spec_value_id: spec_value_id, spec_mark_id: spec_mark_id},
                                    url : "<?php echo url('ShopProduct/add_product_custom_spec_value', ['_ajax'=>1]); ?>",
                                    success: function(res) {
                                        if (1 == res.code) {
                                            // 价格/库存HTML
                                            if (res.data.htmlTable) {
                                                // 加载规格框架
                                                $('#SpecTempLateDiv').html(res.data.htmlTable);
                                                // 合并单元格
                                                MergeCells();
                                            }
                                        } else {
                                            showErrorMsg(res.msg);
                                        }
                                    },
                                    error: function(e) {
                                        layer.closeAll();
                                        showErrorAlert(e.responseText);
                                    }
                                });
                            }
                        }

                        // 清除数据库指定数据
                        function setSpecValueClear(obj) {
                            // 当选对象
                            var spec_mark_id = $(obj).attr('data-spec_mark_id');
                            var spec_value_id = $(obj).attr('data-spec_value_id');
                            // 执行处理
                            $.ajax({
                                type: 'post',
                                url : "<?php echo url('ShopProduct/del_product_custom_spec', ['_ajax'=>1]); ?>",
                                data: {aid: aid, spec_mark_id: spec_mark_id, spec_value_id: spec_value_id, del: 'value'},
                                dataType: 'json',
                                success: function(res) {
                                    // 删除当前点击规格块的顶级html
                                    $(obj).parent().remove();
                                    // 如果存在则执行覆盖新的规格列表框
                                    if (res.data.htmlTable) {
                                        // 加载规格框架
                                        $('#SpecTempLateDiv').html(res.data.htmlTable);
                                        // 合并单元格
                                        MergeCells();
                                    }
                                }
                            });
                        }

                        // 生成选中规格名称html并更新加载规格值
                        function addPresetSpec(obj) {
                            var preset_mark_id = $(obj).val();
                            if (0 === parseInt(preset_mark_id)) return false;
                            // 本次使用的规格数量
                            var specValue = $('#addCustomSpec').attr('data-value');
                            if (3 <= specValue) {
                                showErrorMsg('最多使用三种商品规格大类');
                                return false;
                            }
                            // 自定义规格数量+1覆盖原值
                            $('#addCustomSpec').attr('data-value', ++specValue);
                            // if (3 == specValue) $('#addSpecButton').hide();
                            layer_loading('正在处理');
                            $.ajax({
                                type: 'post',
                                url : "<?php echo url('ShopProduct/add_product_custom_spec'); ?>",
                                data: {aid: aid, preset_mark_id: preset_mark_id, action: 'specName', _ajax: 1},
                                dataType: 'json',
                                success: function(res) {
                                    layer.closeAll();
                                    if (0 == res.code) {
                                        showErrorMsg(res.msg);
                                    } else {
                                        // 主DIV加载
                                        var html = [
                                            '<div class="prset-box" id="preset_'+preset_mark_id+'">'+
                                                '<div id="div_'+preset_mark_id+'">'+
                                                    '<div><span class="preset-bt w150 mr10" style="display: block;"><span class="spec_name_span_'+preset_mark_id+'">'+res.data.spec_name+'</span><em data-name="'+res.data.spec_name+'" data-mark_id="'+preset_mark_id+'" onclick="clearPresetSpec(this, '+preset_mark_id+')"><i class="fa fa-times-circle" title="关闭"></i></em></span>'+
                                                        '<span class="set-preset-box"></span>'+
                                                        '<span class="set-preset-con">'+
                                                            '<span id="SelectEd_'+preset_mark_id+'"></span>'+
                                                            '<select class="preset-select" name="spec_value" id="spec_value_'+preset_mark_id+'" onchange="addPresetSpecValue(this, '+preset_mark_id+')">'+
                                                            '</select>'+
                                                        '</span>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'
                                        ];
                                        $('#SpecSelectName').append(html);
                                        // 规格值加载
                                        if (res.data.spec_value_option) $('#spec_value_' + preset_mark_id).empty().html(res.data.spec_value_option);
                                        // 更新预设名称下拉框
                                        if (res.data.preset_name_option) $('#spec_value').empty().html(res.data.preset_name_option);
                                        // 价格/库存HTML
                                        if (res.data.htmlTable) {
                                            // 加载规格框架
                                            $('#SpecTempLateDiv').html(res.data.htmlTable);
                                            // 合并单元格
                                            MergeCells();
                                        }
                                    }
                                }
                            });
                        }

                        // 清除数据库指定数据
                        function clearPresetSpec(obj, spec_mark_id) {
                            if (spec_mark_id) {
                                // 执行处理
                                $.ajax({
                                    type: 'post',
                                    url : "<?php echo url('ShopProduct/del_product_custom_spec', ['_ajax'=>1]); ?>",
                                    data: {aid: aid, spec_mark_id: spec_mark_id, del: 'specName'},
                                    dataType: 'json',
                                    success: function(res) {
                                        // 删除当前点击规格块的顶级html
                                        $(obj).parent().parent().parent().parent().remove();
                                        // 如果存在则执行覆盖新的规格列表框
                                        if (res.data.htmlTable) {
                                            // 加载规格框架
                                            $('#SpecTempLateDiv').html(res.data.htmlTable);
                                            // 合并单元格
                                            MergeCells();
                                        }
                                        // 更新预设名称下拉框
                                        if (res.data.preset_name_option) $('#spec_value').empty().html(res.data.preset_name_option);
                                        // 使用规格数量+1覆盖原值
                                        var specValue = $('#addCustomSpec').attr('data-value');
                                        $('#addCustomSpec').attr('data-value', --specValue);
                                        // 显示添加按钮
                                        // $('#addSpecButton').show();
                                    }
                                });
                            }
                        }

                        // 追加预设规格名称和规格值
                        function addPresetSpecValue(obj, spec_mark_id) {
                            var spec_value_id = $(obj).val();
                            layer_loading('正在处理');
                            $.ajax({
                                type: 'post',
                                url : "<?php echo url('ShopProduct/add_product_custom_spec'); ?>",
                                data: {aid: aid, spec_value_id: spec_value_id, spec_mark_id: spec_mark_id, action: 'specValue', _ajax: 1},
                                dataType : 'json',
                                success : function(res){
                                    layer.closeAll();
                                    if (0 == res.code) {
                                        showErrorMsg(res.msg);
                                    }else{
                                        // 追加选中的值
                                        $('#SelectEd_'+spec_mark_id).append(
                                            '<span class="preset-bt2 mr10" id="preset-bt2_'+spec_value_id+'"><span class="preset_value_span_'+spec_value_id+'">'+res.data.spec_value+'</span><em data-value="'+res.data.spec_value+'" data-spec_mark_id="'+spec_mark_id+'" data-spec_value_id="'+spec_value_id+'" onclick="clearPresetSpecValue(this)"><i class="fa fa-times-circle" title="关闭"></i></em> &nbsp; </span>'
                                        );
                                        // 规格值加载
                                        if (res.data.spec_value_option) $('#spec_value_'+spec_mark_id).empty().html(res.data.spec_value_option);
                                        // 价格/库存HTML
                                        if (res.data.htmlTable) {
                                            // 加载规格框架
                                            $('#SpecTempLateDiv').html(res.data.htmlTable);
                                            // 合并单元格
                                            MergeCells();
                                        }
                                    }
                                }
                            });
                        }

                        // 清除数据库指定数据
                        function clearPresetSpecValue(obj) {
                            // 当选对象
                            var spec_mark_id = $(obj).attr('data-spec_mark_id');
                            var spec_value_id = $(obj).attr('data-spec_value_id');
                            // 执行处理
                            $.ajax({
                                type: 'post',
                                url : "<?php echo url('ShopProduct/del_product_custom_spec', ['_ajax'=>1]); ?>",
                                data: {aid: aid, spec_mark_id: spec_mark_id, spec_value_id: spec_value_id, del: 'specValue'},
                                dataType: 'json',
                                success: function(res) {
                                    // 删除当前点击规格块的顶级html
                                    $(obj).parent().remove();
                                    // 规格值加载
                                    if (res.data.spec_value_option) $('#spec_value_'+spec_mark_id).empty().html(res.data.spec_value_option);
                                    // 如果存在则执行覆盖新的规格列表框
                                    if (res.data.htmlTable) {
                                        // 加载规格框架
                                        $('#SpecTempLateDiv').html(res.data.htmlTable);
                                        // 合并单元格
                                        MergeCells();
                                    }
                                }
                            });
                        }

                        // 更新同步规格值信息
                        function RefreshSpecValue(obj) {
                            layer.confirm('此操作将会把规格库<span style="color:red;">'+$(obj).data('name')+'</span>的规格数据同步更新！操作不可逆，确认同步？', {
                                shade: layer_shade,
                                area: ['480px', '190px'],
                                move: false,
                                title: '提示',
                                btnAlign:'r',
                                closeBtn: 3,
                                btn: ['确定', '取消'] ,//按钮
                                success: function () {
                                      $(".layui-layer-content").css('text-align', 'left');
                                  }
                            }, function () {
                                layer_loading('正在处理');
                                var mark_id = $(obj).data('mark_id');
                                if (mark_id) {
                                    var aid = $("input[name=aid]").val();
                                    $.ajax({
                                        type : 'post',
                                        url  : RefreshSpecUrl,
                                        data : {spec_mark_id:mark_id, aid:aid, _ajax:1},
                                        dataType : 'json',
                                        success : function(res){
                                            layer.closeAll();
                                            if (res.data) {
                                                // 更新规格值下拉框
                                                if (res.data.ValueOption) {
                                                    $('#spec_value_'+mark_id).empty().html(res.data.ValueOption);
                                                }

                                                // 更新页面上已选的规格名称及规格值
                                                if (res.data.UpData) {
                                                    for (var i = 0; i < res.data.UpData.length; i++) {
                                                        /*替换已选商品规格名称及规格值*/
                                                        // 替换规格名称
                                                        $('.spec_name_span_'+res.data.UpData[i]['spec_mark_id']).html(res.data.UpData[i]['spec_name']);
                                                        $('.spec_name_input_'+res.data.UpData[i]['spec_mark_id']).val(res.data.UpData[i]['spec_name']);
                                                        if (res.data.UpData[i]['spec_value_id']) {
                                                            // 替换规格值
                                                            $('.spec_value_span_'+res.data.UpData[i]['spec_value_id']).html(res.data.UpData[i]['spec_value']);
                                                            $('.spec_value_input_'+res.data.UpData[i]['spec_value_id']).val(res.data.UpData[i]['spec_value']);    
                                                        }
                                                        /* END */
                                                    }
                                                }
                                                
                                                // 清除页面上已选的规格数据
                                                if (res.data.SpecIds) {
                                                    if (res.data.DelAllSpec) {
                                                        $('#spec_'+res.data.DelAllSpec).remove();
                                                    }else{
                                                        for (var i = 0; i < res.data.SpecIds.length; i++) {
                                                            $('#preset-bt2_'+res.data.SpecIds[i]).remove();
                                                        }    
                                                    }
                                                }

                                                // 重新加载规格价格库存填写栏
                                                if (res.data.HtmlTable && res.data.SpecMarks) {
                                                    // 加载规格框架
                                                    $('#SpecTempLateDiv').html(res.data.HtmlTable);
                                                    // 合并单元格
                                                    MergeCells();
                                                    $('#spec_mark_id_arr').val(res.data.SpecMarks);
                                                }
                                            }
                                            layer.msg(res.msg, {time:1500, icon: 1});
                                        },
                                        error : function(e) {
                                            layer.closeAll();
                                            layer.alert(e.responseText, {icon: 5});
                                        }
                                    });
                                }else{
                                    layer.closeAll();
                                    layer.msg('数据有误，同步失败，请刷新重试！', {time:2000, icon: 2});
                                }
                            }, function (index) {
                                // 取消
                                layer.closeAll(index);
                            });
                        }

                        // 加载下拉框
                        function SpecSelectName(obj) {
                            // 本次使用的规格数量
                            var specValue = $('#addCustomSpec').attr('data-value');
                            if (3 <= specValue) {
                                showErrorMsg('最多使用三种商品规格大类');
                                return false;
                            }

                            var aid = $("input[name=aid]").val();
                            var spec_mark_id = $(obj).val();
                            var spec_mark_id_arr = $('#spec_mark_id_arr').val();
                            $.ajax({
                                type: 'post',
                                url : SelectUrl,
                                data: {aid: aid, spec_mark_id: spec_mark_id, spec_mark_id_arr: spec_mark_id_arr, preset_mark_id_arr: spec_mark_id_arr, _ajax: 1},
                                dataType: 'json',
                                success: function(res){
                                    if (0 == res.code) {
                                        showErrorMsg(res.msg);
                                    } else {
                                        var html = [];
                                        // 主DIV加载
                                        html += [
                                            '<div class="prset-box" id="preset_'+spec_mark_id+'">'+
                                                '<div id="div_'+spec_mark_id+'">'+
                                                    '<div><span class="preset-bt"><span class="spec_name_span_'+spec_mark_id+'">'+res.data.preset_name+'</span><em data-name="'+res.data.preset_name+'" data-mark_id="'+spec_mark_id+'" onclick="DelDiv(this)"><i class="fa fa-times-circle" title="关闭"></i></em></span>'+
                                                        '<span id="SelectEd_'+spec_mark_id+'"></span> &nbsp; &nbsp;'+
                                                        '<select name="spec_value" id="spec_value_'+spec_mark_id+'" onchange="AppEndPreset(this,'+spec_mark_id+')">'+
                                                        '</select> &nbsp; <span title="同步规格值" data-mark_id="'+spec_mark_id+'" data-name="'+res.data.preset_name+'" onclick="RefreshSpecValue(this);"><i class="fa fa-refresh"></i></span>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'
                                        ];
                                        $('#SpecSelectName').append(html);
                                        // 预设值加载
                                        $('#spec_value_'+spec_mark_id).empty().html(res.data.preset_value_option);
                                        // 更新预设名称下拉框
                                        res.data.preset_name_option = '<option value="0">选择规格名称</option>' + res.data.preset_name_option;
                                        $('#spec_value').empty().html(res.data.preset_name_option);
                                        $('#spec_mark_id_arr').val(res.data.spec_mark_id_arr);

                                        // 自定义规格数量+1覆盖原值
                                        $('#addCustomSpec').attr('data-value', ++specValue);
                                    }
                                }
                            });
                        }

                        // 追加预设规格名称和规格值
                        function AppEndPreset(obj, spec_mark_id) {
                            var spec_value_id = $(obj).val();
                            var aid = $("input[name=aid]").val();
                            $.ajax({
                                type: 'post',
                                url : "<?php echo url('ShopProduct/spec_value_select'); ?>",
                                data: {aid: aid, spec_value_id: spec_value_id, spec_mark_id: spec_mark_id, _ajax: 1},
                                dataType: 'json',
                                success: function(res){
                                    if (0 == res.code) {
                                        showErrorMsg(res.msg);
                                    } else {
                                        // 追加选中的值
                                        $('#SelectEd_'+spec_mark_id).append(
                                            '<span class="preset-bt2" id="preset-bt2_'+spec_value_id+'"><span class="spec_value_span_'+spec_value_id+'">'+res.data.Value+'</span><em data-value="'+res.data.Value+'" data-mark_id="'+spec_mark_id+'" data-preset_id="'+spec_value_id+'" onclick="DelValue(this)"><i class="fa fa-times-circle" title="关闭"></i></em> &nbsp; </span>'
                                        );
                                        // 加载规格值下拉框
                                        if (res.data.Option) $('#spec_value_'+spec_mark_id).empty().html(res.data.Option);
                                        // 加载规格框架
                                        if (res.data.htmlTable) {
                                            // 合并单元格
                                            $('#SpecTempLateDiv').html(res.data.htmlTable);
                                            MergeCells();
                                            if (res.data.htmlTable != ' ') {
                                                $("#users_price").attr("readonly", "readonly");
                                                $("#stock_count").attr("readonly", "readonly");
                                            } else {
                                                $("#users_price").removeAttr("readonly");
                                                $("#stock_count").removeAttr("readonly");
                                            }
                                        } else {
                                            $("#users_price").removeAttr("readonly");
                                            $("#stock_count").removeAttr("readonly");
                                        }
                                    }
                                }
                            });
                        }

                        // 清除session中的指定数据，同时对数据库进行操作
                        function DelDiv(obj) {
                            var spec_mark_id = $(obj).attr('data-mark_id');
                            var spec_mark_id_arr = $('#spec_mark_id_arr').val();
                            var aid = $("input[name=aid]").val();
                            // 执行处理
                            $.ajax({
                                type: 'post',
                                url : "<?php echo url('ShopProduct/del_product_custom_spec', ['_ajax'=>1]); ?>",
                                data: {aid: aid, spec_mark_id: spec_mark_id, spec_mark_id_arr: spec_mark_id_arr, del: 'name'},
                                dataType: 'json',
                                success: function(res) {
                                    // 关闭所有弹出层
                                    layer.closeAll();
                                    // 删除当前点击规格块的顶级html
                                    $(obj).parent().parent().parent().parent().remove();
                                    // 加载选中的规格名称ID
                                    if (res.data.spec_mark_id_arr) $('#spec_mark_id_arr').val(res.data.spec_mark_id_arr);
                                    // 如果存在则执行覆盖新的规格列表框
                                    if (res.data.htmlTable) {
                                        // 加载规格框架
                                        $('#SpecTempLateDiv').html(res.data.htmlTable);
                                        // 合并单元格
                                        MergeCells();
                                    }
                                    // 使用规格数量+1覆盖原值
                                    var specValue = $('#addCustomSpec').attr('data-value');
                                    $('#addCustomSpec').attr('data-value', --specValue);
                                    // 更新预设名称下拉框
                                    res.data.Option = '<option value="0">选择规格名称</option>' + res.data.Option;
                                    if (res.data.Option) $('#spec_value').empty().html(res.data.Option);
                                }
                            });
                            // 使用规格数量+1覆盖原值
                            var specValue = $('#addCustomSpec').attr('data-value');
                            $('#addCustomSpec').attr('data-value', --specValue);
                        }

                        // 清除session中的指定数据，同时对数据库进行操作
                        function DelValue(obj) {
                            var spec_mark_id = $(obj).attr('data-mark_id');
                            var spec_value_id = $(obj).attr('data-preset_id');
                            var aid = $("input[name=aid]").val();
                            $.ajax({
                                type: 'post',
                                url : "<?php echo url('ShopProduct/del_product_custom_spec', ['_ajax'=>1]); ?>",
                                data: {aid: aid, spec_value_id: spec_value_id, spec_mark_id: spec_mark_id, del: 'value'},
                                dataType: 'json',
                                success: function(res) {
                                    layer.closeAll();
                                    // 清除页面html
                                    $(obj).parent().remove();
                                    if (res.data.Option) $('#spec_value_'+spec_mark_id).empty().html(res.data.Option);

                                    // 加载规格框架
                                    if (res.data.htmlTable) {
                                        // 合并单元格
                                        $('#SpecTempLateDiv').html(res.data.htmlTable);
                                        MergeCells();
                                        if (res.data.htmlTable != ' ') {
                                            $("#users_price").attr("readonly", "readonly");
                                            $("#stock_count").attr("readonly", "readonly");
                                        } else {
                                            $("#users_price").removeAttr("readonly");
                                            $("#stock_count").removeAttr("readonly");
                                        }
                                    } else {
                                        $("#users_price").removeAttr("readonly");
                                        $("#stock_count").removeAttr("readonly");
                                    }
                                }
                            });
                        }

                        // 批量设置价格
                        function BulkSetPrice(obj) {
                            layer.prompt({
                                formType: 3,
                                shade: layer_shade,
                                id: 'BulkSetPrice',
                                title: '提示',
                                btn: ['确定', '关闭'],
                                btnAlign:'r',
                                closeBtn: 3,
                                success: function(layero, index){
                                    $("#BulkSetPrice").find('input').attr('placeholder', '批量设置价格');
                                    $("#BulkSetPrice").find('input').attr('onkeyup', "this.value=this.value.replace(/[^\\d.]/g,'')");
                                    $("#BulkSetPrice").find('input').attr('onpaste', "this.value=this.value.replace(/[^\\d.]/g,'')");
                                }
                            }, function(price, index){
                                layer.close(index);
                                // 规格中的价格
                                $('.users_price').val(price);
                                // 产品价格
                                $('#users_price').val(price);
                            });
                        }

                        // 更新价格，取出最小的值赋值到价格中
                        function UpPrice(obj) {
                            var UsersPriceArray = new Array();
                            $('.users_price').each(function(){
                                UsersPriceArray.push($(this).val());
                            });
                            if (UsersPriceArray.length != 0) {
                                // 取出最小值
                                var MinValue = Math.min.apply(Math, UsersPriceArray);
                                // 禁用库存框
                                $('#users_price').attr('readonly','readonly');
                            }else{
                                var MinValue = '<?php echo $field['users_price']; ?>';
                            }
                            $('#users_price').val(MinValue);
                        }

                        // 批量设置库存
                        function BulkSetStock(obj) {
                            layer.prompt({
                                formType: 3,
                                shade: layer_shade,
                                id: 'BulkSetStock',
                                title: '提示',
                                btn: ['确定', '关闭'],
                                btnAlign:'r',
                                closeBtn: 3,
                                success: function(layero, index){
                                    $("#BulkSetStock").find('input').attr('placeholder', '批量设置库存');
                                    $("#BulkSetStock").find('input').attr('onkeyup', "this.value=this.value.replace(/[^\\d.]/g,'')");
                                    $("#BulkSetStock").find('input').attr('onpaste', "this.value=this.value.replace(/[^\\d.]/g,'')");
                                }
                            }, function(stock, index){
                                layer.close(index);
                                // 单个库存
                                $('.stock_count').val(stock);
                                $('.stock_count').attr('data-old_stock',stock);
                                stock_count = Number($('.stock_count').length) * Number(stock);
                                $('#stock_count').val(stock_count);
                                // 禁用库存框
                                $('#stock_count').attr('readonly','readonly');
                            });
                        }

                        // 更新库存量
                        function UpStock(obj) {
                            var stock_count = $('#stock_count').val();
                            var new_stock = $(obj).val();
                            var old_stock = $(obj).attr('data-old_stock');
                            $(obj).attr('data-old_stock',new_stock);
                            if (Number(old_stock) > Number(new_stock)) {
                                new_stock   = Number(old_stock) - Number(new_stock);
                                stock_count = Number(stock_count) - Number(new_stock);
                            }else{
                                new_stock   = Number(new_stock) - Number(old_stock);
                                stock_count = Number(stock_count) + Number(new_stock);
                            }
                            $('#stock_count').val(stock_count);
                        }

                        // 合并单元格
                        function MergeCells() {
                            var tab = document.getElementById("spec_input_tab");
                            var maxCol = 2, val, count, start; 
                            if (tab != null) {
                                for (var col = maxCol - 1; col >= 0; col--) {
                                    count = 1;
                                    val = "";
                                    for (var i = 0; i < tab.rows.length; i++) {
                                        if (val == tab.rows[i].cells[col].innerHTML) {
                                            count++;
                                        } else {
                                            if (count > 1) { //合并
                                                start = i - count;
                                                tab.rows[start].cells[col].rowSpan = count;
                                                for (var j = start + 1; j < i; j++) {
                                                    tab.rows[j].cells[col].style.display = "none";
                                                }
                                                count = 1;
                                            }
                                            val = tab.rows[i].cells[col].innerHTML;
                                        }
                                    }
                                    if (count > 1) { //合并，最后几行相同的情况下
                                        start = i - count;
                                        tab.rows[start].cells[col].rowSpan = count;
                                        for (var j = start + 1; j < i; j++) {
                                            tab.rows[j].cells[col].style.display = "none";
                                        }
                                    }
                                }
                            }
                        }

                        // 规格列表管理
                        function SpecTempLate() {
                            //iframe窗
                            layer.open({
                                type: 2,
                                title: '规格模板库',
                                shade:layer_shade,
                                shadeClose: false,
                                maxmin: false, //开启最大化最小化按钮
                                area: ['90%', '90%'],
                                content: TemplateUrl
                            });
                        }
                        
                        // 当规格库更新后，调用此方式及时更新选择规格名称的下拉框信息及规格框信息
                        function UpPresetSpecData(preset_mark_id) {
                            var spec_mark_id_arr = $('#spec_mark_id_arr').val();
                            var aid = $("input[name=aid]").val();
                            $.ajax({
                                type: 'post',
                                url : GetPresetSpecUrl,
                                data: {aid: aid, preset_mark_id: preset_mark_id, spec_mark_id_arr: spec_mark_id_arr, preset_mark_id_arr: spec_mark_id_arr, _ajax: 1},
                                dataType: 'json',
                                success: function(res){
                                    // 更新规格名称下拉框
                                    res.data.spec_name_option = '<option value="0">选择规格名称</option>' + res.data.spec_name_option;
                                    $('#spec_value').empty().html(res.data.spec_name_option);
                                }
                            });
                        }
                    </script>
                <?php endif; ?>
                <dl class="row <?php if(!(empty($useSpecNum) || (($useSpecNum instanceof \think\Collection || $useSpecNum instanceof \think\Paginator ) && $useSpecNum->isEmpty()))): ?> none <?php endif; ?>" id="dl_virtual_sales">
                    <dt class="tit"> <label for="virtual_sales">虚拟销量</label> </dt>
                    <dd class="opt">
                        <input type="text" name="virtual_sales" id="virtual_sales" maxlength="100" style="width: 10%;" value="<?php echo $field['virtual_sales']; ?>" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" onpaste="this.value=this.value.replace(/[^\d]/g,'')">
                        <p class="notic">只适用单规格商品，前台展示时是实际销量+虚拟销量</p>
                    </dd>
                </dl>
            <?php endif; ?>

            <span id="FieldAddonextitem" class="custom_fields"></span>
<script type="text/javascript">
    $(function() {
        var aidNew = <?php echo (isset($field['aid']) && ($field['aid'] !== '')?$field['aid']:'0'); ?>;
        var typeidNew = <?php echo (isset($typeid) && ($typeid !== '')?$typeid:'0'); ?>;
        if (!typeidNew) typeidNew = <?php echo (isset($field['typeid']) && ($field['typeid'] !== '')?$field['typeid']:'0'); ?>;
        var channeltypeNew = <?php echo (isset($channeltype) && ($channeltype !== '')?$channeltype:'0'); ?>;
        var ControllerName = '<?php echo CONTROLLER_NAME; ?>';
        var ActionName = '<?php echo ACTION_NAME; ?>';
        GetAddonextitem(0, typeidNew, channeltypeNew, aidNew, false, ControllerName, ActionName);
    });

    function GetAddonextitem(init, typeidNew, channeltypeNew, aidNew, is_destroy, ControllerName, ActionName) {
        layer.load(3, {shade: [0.5,'#fff']});
        ControllerName = ControllerName ? ControllerName : '';
        ActionName = ActionName ? ActionName : '';
        $.ajax({
            url: "<?php echo url('Archives/ajax_get_addonextitem'); ?>",
            data: {typeid: typeidNew, channeltype: channeltypeNew, aid: aidNew, controller_name: ControllerName, action_name:ActionName, _ajax:1},
            type:'get',
            success:function(res) {
                layer.closeAll();
                if (res.code == 0) {
                    layer.alert(res.msg, {icon: 2, title:false});
                } else {
                    var EditorSelect = <?php echo $editor['editor_select']; ?>;
                    if (2 == EditorSelect) {
                        // 编辑器内容数据提取
                        var contentData = [];
                        $.each(res.data.htmltextField, function (index, value) {
                            var contentID = 'addonFieldExt_' + value;
                            var getContent = '';
                            for (instance in CKEDITOR.instances) {
                                CKEDITOR.instances[contentID].updateElement();
                                getContent = CKEDITOR.instances[contentID].getData();
                            }
                            contentData.push(getContent);
                        });
                        // 覆盖原先的编辑器HTML
                        $('#FieldAddonextitem').empty().html(res.data.html);
                        // 追加编辑器的内容
                        $.each(res.data.htmltextField, function (index, value) {
                            if (contentData[index]) {
                                var contentID = 'addonFieldExt_' + value;
                                CKEDITOR.instances[contentID].setData(contentData[index]);
                            }
                        });
                    } else if (1 == EditorSelect) {
                        $('#FieldAddonextitem').empty().html(res.data.html);
                        
                        if (1 == init) {
                            $.each(res.data.htmltextField, function (index, value) {
                                showEditor_1597892187('addonFieldExt_'+value);
                            });
                        }
                    }
                    // 自动远程图片本地化和自动清除本站链接
                    var editor_addonFieldExt = '';
                    $.each(res.data.htmltextField, function (index, value) {
                        if ($('#editor_addonFieldExt')) {
                            if (editor_addonFieldExt) {
                                editor_addonFieldExt += ','+value;
                            }else{
                                editor_addonFieldExt = value;
                            }
                        }
                    });
                    if (editor_addonFieldExt) {
                        $('#editor_addonFieldExt').val(editor_addonFieldExt);
                    }
                }
            },
            error: function(e){
                layer.closeAll();
                layer.alert(e.responseText, {icon: 2, title:false});
            }
        });
    }

    // 渲染编辑器
    function showEditor_1597892187(elemtid) {
        var content = '';
        try{
            content = UE.getEditor(elemtid).getContent();
            UE.getEditor(elemtid).destroy();
        }catch(e){}
        var serverUrl = eyou_basefile+'?m=admin&c=Ueditor&a=index&savepath=ueditor&lang='+__lang__;
        var options = {
            serverUrl : serverUrl,
            zIndex: 999,
            initialFrameWidth: "100%", //初化宽度
            initialFrameHeight: 450, //初化高度            
            focus: false, //初始化时，是否让编辑器获得焦点true或false
            maximumWords: 99999,
            removeFormatAttributes: 'class,style,lang,width,height,align,hspace,valign',//允许的最大字符数 'fullscreen',
            pasteplain:false, //是否默认为纯文本粘贴。false为不使用纯文本粘贴，true为使用纯文本粘贴
            autoHeightEnabled: false,
            toolbars: ueditor_toolbars
        };
        eval("ue_"+elemtid+" = UE.getEditor(elemtid, options);ue_"+elemtid+".ready(function() {ue_"+elemtid+".setContent(content);});");
    }
</script>
        </div>
        <!-- 常规信息 -->

        <!-- 产品参数 -->
        <div class="ncap-form-default tab_div_2" style="display: none;">
            <input type="hidden" name="is_old_product_attr" value="<?php echo (isset($is_old_product_attr) && ($is_old_product_attr !== '')?$is_old_product_attr:'0'); ?>">
            <?php if(!(empty($is_old_product_attr) || (($is_old_product_attr instanceof \think\Collection || $is_old_product_attr instanceof \think\Paginator ) && $is_old_product_attr->isEmpty()))): ?>
                <dl class="row">
    <div class="tab-pane" id="tab_product_spec">
        <table class="table table-bordered" width="100%">
            <tr>
                <td>
                    <!-- 操作说明 -->
                    <div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); width: 99%; height: 100%;">
                        <div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>
                            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                            <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                        </div>
                        <ul>
                            <li>
                                <?php if(empty($typeid) || (($typeid instanceof \think\Collection || $typeid instanceof \think\Paginator ) && $typeid->isEmpty())): ?>
                                请先在【常规选项】里选择产品主栏目，再点击【<a href="<?php echo url('Product/attribute_index', array('typeid'=>$field['typeid'])); ?>">参数选项</a>】进行更多操作。
                                <?php else: ?>
                                如果想对产品参数进行新增、修改、删除等操作，请点击【<a href="<?php echo url('Product/attribute_index', array('typeid'=>$field['typeid'])); ?>">参数选项</a>】进行更多操作。
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</dl>
<dl class="row" style="margin-top: 10px;" id="product_attr_table">
    <?php if(empty($canshu) || (($canshu instanceof \think\Collection || $canshu instanceof \think\Paginator ) && $canshu->isEmpty())): ?>
    <div style="color: red;font-size: 12px;text-align: center;">提示：该主栏目还没有参数值，若有需要请点击【<a href="<?php echo url('Product/attribute_index', array('typeid'=>$field['typeid'])); ?>">参数选项</a>】进行更多操作。</div>
    <?php else: ?>
    <?php echo $canshu; endif; ?>
</dl> 
            <?php else: ?>
                <!-- <dl class="row">
                    <dt class="tit"> <label>参数类型</label> </dt>
                    <dd class="opt">
                        <label><input type="radio" name="param_type" value="1" <?php if(!(empty($field['attrlist_id']) || (($field['attrlist_id'] instanceof \think\Collection || $field['attrlist_id'] instanceof \think\Paginator ) && $field['attrlist_id']->isEmpty()))): ?> checked="checked" <?php endif; ?> onclick="paramType(1);">系统参数</label>
                        &nbsp;
                        <label><input type="radio" name="param_type" value="2" <?php if(empty($field['attrlist_id']) || (($field['attrlist_id'] instanceof \think\Collection || $field['attrlist_id'] instanceof \think\Paginator ) && $field['attrlist_id']->isEmpty())): ?> checked="checked" <?php endif; ?> onclick="paramType(2);">自定义参数</label>
                    </dd>
                </dl> -->
                <dl class="row">
                    <dt class="tit"> <label>商品参数</label> </dt>
                    <dd class="opt">
                        <div id="system_param">
                            <div>
                                <select name="attrlist_id" id="attrlist_id" onchange="AttrListSelect(this);">
                                    <option value="0">请选择参数</option>
                                    <?php if(is_array($AttrList) || $AttrList instanceof \think\Collection || $AttrList instanceof \think\Paginator): $i = 0; $__LIST__ = $AttrList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['list_id']; ?>" <?php if($vo['list_id'] == $field['attrlist_id']): ?>selected<?php endif; ?>><?php echo $vo['list_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                &nbsp; &nbsp; &nbsp;
                                <a href="JavaScript:void(0);" id="addCustomParam" data-attr_id="<?php echo $maxAttrID; ?>" onclick="addCustomParam(this);" class="ncap-btn ncap-btn-green">自定义参数</a>
                                &nbsp;<a href="JavaScript:void(0);" onclick="attrlistLayer(this)" style="font-size: 12px;padding-left: 10px;">[管理]</a>
                            </div>
                            <dl class="row">
                                <dt class="sort-e lh40 pl0 text-l10" style=" background: #f4f6f8;">排序</dt>
                                <dt class="tit lh40 pl5 text-l10" style=" background: #f4f6f8;"> 参数名称</dt>
                                <dd class="opt w350 lh40 text-l10" style=" background: #f4f6f8;">参数值</dd>
                            </dl>
                            <div id='AttrSelectName' style="margin: 1px;"><?php echo $canshu; ?></div>
                            <div id='customParam' style="margin: 1px;">
                                <input type="hidden" name="del_attr_id" value="<?php echo $delAttrID; ?>">
                                <?php if(is_array($customParam) || $customParam instanceof \think\Collection || $customParam instanceof \think\Paginator): $i = 0; $__LIST__ = $customParam;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <dl class="row">
                                    <dt class="sort-e pl0"> <input type="text" size="4" name="sort_order[<?php echo $vo['attr_id']; ?>]" value="<?php echo $vo['sort_order']; ?>"> </dt>
                                    <dt class="tit pl5"> <input type="text" size="10" name="attr_name[<?php echo $vo['attr_id']; ?>]" value="<?php echo $vo['attr_name']; ?>"> </dt>
                                    <dd class="opt pl5">
                                        <input type="text" size="40" name="attr_value[<?php echo $vo['attr_id']; ?>]" value="<?php echo $vo['attr_value']; ?>">
                                        <a class="text_a" href="javascript:void(0);" onClick="delCustomParam(this);">删除</a>
                                    </dd>
                                </dl>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                        <!-- <div id="custom_param" <?php if(empty($field['attrlist_id']) || (($field['attrlist_id'] instanceof \think\Collection || $field['attrlist_id'] instanceof \think\Paginator ) && $field['attrlist_id']->isEmpty())): ?> style="display: block;" <?php else: ?> style="display: none;" <?php endif; ?>>
                            <div class="copybtn"><a class="ncap-btn ncap-btn-green" href="javascript:void(0);" onclick="addCustomParam();">新增</a></div><br>
                            <div class="itemInfo">
                                <table cellspacing="0" cellpadding="0" border="0" class="normTbe tabInfo">
                                    <thead>
                                        <tr>
                                            <th class="w350">参数名称</th>
                                            <th class="w350">参数值</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody1" id="attr_tbody">
                                        <?php if(is_array($customParam) || $customParam instanceof \think\Collection || $customParam instanceof \think\Paginator): $i = 0; $__LIST__ = $customParam;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <td class="w350"><input type="text" name="param_name[]" value="<?php echo $vo['param_name']; ?>"></td>
                                            <td class="w350"><input type="text" name="param_value[]" value="<?php echo $vo['param_value']; ?>"></td>
                                            <td> <a class="text_a" href="javascript:void(0);" onclick="delCustomParam(this);">删除</a> </td>
                                        </tr>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                    </dd>
                </dl>
                <script type="text/javascript">
                    // 商品参数切换
                    // function paramType(param_type) {
                    //     if (1 == param_type) {
                    //         $('#system_param').show();
                    //         $('#custom_param').hide();
                    //     } else {
                    //         $('#system_param').hide();
                    //         $('#custom_param').show();
                    //     }
                    // }

                    // 添加自定义参数
                    function addCustomParam(obj) {
                        var maxAttrID = $(obj).attr('data-attr_id');

                        // 规格值HTML
                        var html = [
                            '<dl class="row">'+
                                '<dt class="sort-e pl0"> <input type="text" size="4" name="sort_order['+maxAttrID+']" placeholder="100"> </dt>'+
                                '<dt class="tit pl5"> <input type="text" size="10" name="attr_name['+maxAttrID+']"> </dt>'+
                                '<dd class="opt pl5">'+
                                    '<input type="text" size="40" name="attr_value['+maxAttrID+']"> '+
                                    '<a class="text_a" href="javascript:void(0);" onClick="delCustomParam(this);">删除</a>'+
                                '</dd>'+
                            '</dl>'
                            // '<tr>'+
                            //     '<td class="w350"><input type="text" name="param_name[]" /></td>'+
                            //     '<td class="w350"><input type="text" name="param_value[]" /></td>'+
                            //     '<td> <a class="text_a" href="javascript:void(0);" onClick="delCustomParam(this);">删除</a> </td>'+
                            // '</tr>'
                        ];
                        // 加载一个规格值 input
                        $('#customParam').append(html);

                        // 自定义参数数量+1覆盖原值
                        $(obj).attr('data-attr_id', ++maxAttrID);
                    }

                    // 删除自定义参数
                    function delCustomParam(obj) {
                        $(obj).parent().parent().remove();
                        // var length = $("#attr_tbody>tr").length;
                        // if (parseInt(length) <= 1) {
                        //     showErrorMsg("至少保留一行");
                        // } else {
                        //     $(obj).parent().parent().remove();
                        // }
                    }

                    // 参数选择
                    function AttrListSelect(obj) {
                        var aid = '';
                        var list_id = $(obj).val();
                        if (parseInt(list_id) < 1) {
                            $("#AttrSelectName").empty();
                            return false;
                        }
                        $('#AttrSelectName').html('<div style="color: red;font-size: 12px;text-align: center;">加载中……</div>');
                        // 商品栏目切换时 ajax 调用  返回不同的属性输入框     
                        $.ajax({
                            type:'GET',
                            data:{aid:aid, list_id:list_id, _ajax:1}, 
                            url :"<?php echo url('ShopProduct/ajax_get_shop_attr_input'); ?>",
                            success:function(data) {
                                $("#AttrSelectName").empty().append(data);
                            }
                        });
                    }

                    function attrlistLayer(obj) {
                        var url = "<?php echo url('ShopProduct/attrlist_index', ['oldinlet'=>1]); ?>";
                        //iframe窗
                        var iframes = layer.open({
                            type: 2,
                            title: '商品参数管理',
                            fixed: true, //不固定
                            shadeClose: false,
                            shade: layer_shade,
                            area: ['95%', '95%'],
                            content: url,
                            end: function(index){
                                var list_id = $('#attrlist_id').val();
                                $.ajax({
                                    url:"<?php echo url('Product/ajax_get_shop_attrlist'); ?>",
                                    type:'GET',
                                    data:{list_id:list_id, _ajax:1},
                                    success:function(res) {
                                        var html = "<option value='0'>请选择参数</option>";
                                        html += res;
                                        $("#attrlist_id").empty().append(html);

                                        // 删掉选中的参数之后，默认不选中，参数属性同时要清空掉
                                        if ($('#attrlist_id').val() < 1) {
                                            $("#AttrSelectName").empty();
                                        }
                                    },
                                    error: function(e){
                                        showErrorAlert(e.responseText);
                                    }
                                });
                            }
                        });
                        // layer.full(iframes);
                    }
                </script>
            <?php endif; ?>
        </div>
        <!-- 产品参数 -->

        <!-- SEO参数 -->
        <div class="ncap-form-default tab_div_3" style="display: none;">
            <dl class="row">
                <dt class="tit"> <label for="seo_title">SEO标题</label> </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $field['seo_title']; ?>" name="seo_title" id="seo_title" class="input-txt">
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit"> <label for="seo_keywords">SEO关键词</label> </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_keywords" name="seo_keywords" style="height:20px;"><?php echo $field['seo_keywords']; ?></textarea>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit"> <label for="seo_description">SEO描述</label> </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_description" name="seo_description" style="height:130px;"><?php echo $field['seo_description']; ?></textarea>
                    <p><label><input type="checkbox" name="basic_update_seo_description" value="1" <?php if(!empty($global['basic_update_seo_description'])): ?> checked="checked" <?php endif; ?>>勾选后SEO描述将随正文内容更新</label></p>
                </dd>
            </dl>
        </div>
        <!-- SEO参数 -->

        <!-- 其他参数 -->
        <div class="ncap-form-default tab_div_4" style="display: none;">
            <dl class="row">
                <dt class="tit"> <label for="author">作者</label> </dt>
                <dd class="opt">
                    <input type="hidden" value="<?php echo $field['users_id']; ?>" name="users_id" class="input-txt">
                    <input type="text" value="<?php echo $field['author']; ?>" name="author" id="author" class="input-txt">
                </dd>
            </dl>
            <dl class="row dl_origin">
                <dt class="tit"> <label for="origin">来源</label> </dt>
                <dd class="opt origin-hot">
                    <input type="text" value="<?php echo $field['origin']; ?>" name="origin" id="origin" class="input-txt" onclick="searchOrigin(this);" autocomplete="off">
                    <div class="origin-hot-list" style="display: none;" id="search_keywords_list_origin"></div>
                    <textarea id="system_originlist_str" style="display: none;"><?php echo $system_originlist_str; ?></textarea>
                    <span class="setting" onclick="set_originlist();">设置</span>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit"> <label for="click">点击数</label> </dt>
                <dd class="opt">    
                    <input type="text" value="<?php echo $field['click']; ?>" name="click" id="click" class="input-txt">
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit"> <label>阅读权限</label> </dt>
                <dd class="opt">
                    <input type="hidden" value="<?php echo $field['arcrank']; ?>" name="old_arcrank" class="input-txt">
                    <select name="arcrank" id="arcrank" <?php if($field['arcrank'] < 0 && $admin_info['role_id'] > 0 && $auth_role_info['check_oneself'] < 1): ?> disabled="disabled" <?php endif; ?>>
                        <?php if(is_array($arcrank_list) || $arcrank_list instanceof \think\Collection || $arcrank_list instanceof \think\Paginator): $i = 0; $__LIST__ = $arcrank_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['rank']; ?>" <?php if($vo['rank'] == $field['arcrank']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>    
                </dd>
            </dl>
            <!-- #weapp_UsersGroup_content_users_id=<?php echo $field['users_id']; ?>#--><!-- #weapp_UsersGroup_content# -->
            <dl class="row">
                <dt class="tit"> <label for="add_time">发布时间</label> </dt>
                <dd class="opt">
                    <input type="text" class="input-txt" id="add_time" name="add_time" value="<?php echo date('Y-m-d H:i:s',$field['add_time']); ?>" autocomplete="off">
                    <span class="add-on input-group-addon"> <i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit"> <label for="tempview">文档模板</label> </dt>
                <dd class="opt">
                    <select name="tempview" id="tempview">
                        <?php if(is_array($templateList) || $templateList instanceof \think\Collection || $templateList instanceof \think\Paginator): $i = 0; $__LIST__ = $templateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo; ?>" <?php if($vo == $tempview): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <input type="hidden" name="type_tempview" value="<?php echo $tempview; ?>" />
                </dd>
            </dl>
            <dl class="row <?php if(!in_array(($seo_pseudo), explode(',',"2,3"))): ?>no-grey<?php endif; ?>">
                <dt class="tit"> <label>自定义文件名</label> </dt>
                <dd class="opt">
                    <input type="text" <?php if(!in_array(($seo_pseudo), explode(',',"2,3"))): ?>readonly="readonly" title="动态模式下不支持自定义文档url"<?php endif; ?> value="<?php echo $field['htmlfilename']; ?>" name="htmlfilename" id="htmlfilename" autocomplete="off" onkeyup="this.value=this.value.replace(/[^\w\-]/g,'-');" onpaste="this.value=this.value.replace(/[^\w\-]/g,'-');" class="input-txt <?php if(!in_array(($seo_pseudo), explode(',',"2,3"))): ?>no-drop<?php endif; ?>">.html
                </dd>
            </dl>
        </div>
        <!-- 其他参数 -->
        <!-- #weapp_demontrate_div# -->
        <div class="ncap-form-default">
            <div class="bot2">
                <input type="hidden" name="gourl" value="<?php echo (isset($gourl) && ($gourl !== '')?$gourl:''); ?>">
                <input type="hidden" name="aid" value="<?php echo (isset($field['aid']) && ($field['aid'] !== '')?$field['aid']:'0'); ?>">
                <input type="hidden" id="editor_addonFieldExt" value="">
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
                <a class="ncap-btn-big ncap-btn-no" href="javascript:history.back();" title="返回">返回</a>
            </div>
        </div> 
    </form>
</div>
<script type="text/javascript">
    layui.use('laydate', function() {
        var laydate = layui.laydate;

        laydate.render({
            elem: '#add_time'
            ,type: 'datetime'
        });
    })
    $(function () {

        try {
            var web_citysite_open = <?php echo (isset($global['web_citysite_open']) && ($global['web_citysite_open'] !== '')?$global['web_citysite_open']:0); ?>;
            if (web_citysite_open > 0) {
                var province_id = <?php echo (isset($field['province_id']) && ($field['province_id'] !== '')?$field['province_id']:0); ?>;
                var city_id = <?php echo (isset($field['city_id']) && ($field['city_id'] !== '')?$field['city_id']:0); ?>;
                var area_id = <?php echo (isset($field['area_id']) && ($field['area_id'] !== '')?$field['area_id']:0); ?>;
                if (province_id > 0) {
                    set_city_list(city_id);
                }
                if (city_id > 0) {
                    set_area_list(area_id);
                }
            }
        }catch(e){}

        //选项卡切换列表
        $('.tab-base').find('.tab').click(function(){
            $('.tab-base').find('.tab').each(function(){
                $(this).removeClass('current');
            });
            $(this).addClass('current');
            var tab_index = $(this).data('index');          
            $(".tab_div_1, .tab_div_2, .tab_div_3, .tab_div_4").hide();          
            $(".tab_div_"+tab_index).show();
            layer.closeAll();
        });

        $('input[name=is_jump]').click(function(){
            if ($(this).is(':checked')) {
                $('.dl_jump').show();
            } else {
                $('.dl_jump').hide();
            }
        });

        var dftypeid = <?php echo (isset($field['typeid']) && ($field['typeid'] !== '')?$field['typeid']:'0'); ?>;
        $('#typeid').change(function(){
            var current_channel = $(this).find('option:selected').data('current_channel');
            if (0 < $(this).val() && <?php echo $channeltype; ?> != current_channel) {
                showErrorMsg('请选择对应模型的栏目！');
                $(this).val(dftypeid);
            } else if (<?php echo $channeltype; ?> == current_channel) {
                layer.closeAll();
            }
            var aid = $("input[name=aid]").val();
            GetAddonextitem(1, $(this).val(), <?php echo $channeltype; ?>, aid, true);
        });

        $(document).click(function(){
            $('#often_tags').hide();
            $('#often_tags_input').hide();
            event.stopPropagation();
        });

        $('#often_tags').click(function(){
            $('#often_tags').show();
            event.stopPropagation();
        });
    });

    function change_prom_type(val) {
        if ( val == 1 ){
            $("input[name=prom_type_vir]:eq(0)").attr("checked",'checked');
            $("#fahuoxingshi").show();
        } else if ( val == 2 ){
            $("#wangpanxiazai").hide();
            $("#wenbenneirong").hide();
        } else if ( val == 3 ){
            $("#wangpanxiazai").show();
            $("#wenbenneirong").hide();
        } else if( val == 4 ){
            $("#wangpanxiazai").hide();
            $("#wenbenneirong").show();
        }
        else {
            $("#wangpanxiazai").hide();
            $("#wenbenneirong").hide();
            $("#fahuoxingshi").hide();
        }
    }

    // 判断输入框是否为空
    function check_submit(){
        if($.trim($('input[name=title]').val()) == ''){
            $($('.tab-base').find('.tab')[0]).trigger('click'); 
            showErrorMsg('标题不能为空！');
            $('input[name=title]').focus();
            return false;
        }
        if ($('#typeid').val() == 0) {
            $($('.tab-base').find('.tab')[0]).trigger('click'); 
            showErrorMsg('请选择栏目…！');
            $('#typeid').focus();
            return false;
        }
        if ($('input[name=prom_type]:checked').val() == 1) {
            if($('input[name=prom_type_vir]:checked').val() == 2 && $.trim($('input[name=netdisk_url]').val()) == ''){
                $($('.tab-base').find('.tab')[0]).trigger('click'); 
                showErrorMsg('网盘地址不能为空！');
                $('input[name=netdisk_url]').focus();
                return false;
            }
            if($('input[name=prom_type_vir]:checked').val() == 3 && $.trim($('textarea[name=text_content]').val()) == ''){
                $($('.tab-base').find('.tab')[0]).trigger('click'); 
                showErrorMsg('虚拟文本内容不能为空！');
                $('textarea[name=text_content]').focus();
                return false;
            }
        }
        
        var htmlfilename = $.trim($('input[name=htmlfilename]').val());
        if (htmlfilename != '') {
            var exp = /^\d{1,}$/;
            if (exp.test(htmlfilename)) {
                showErrorAlert('自定义文件名不能纯数字，会与文档ID冲突！');
                $('input[name=htmlfilename]').focus();
                return false;
            }
        }
        
        layer_loading('正在处理');
        if(!ajax_check_htmlfilename())
        {
            layer.closeAll();
            showErrorMsg('自定义文件名已存在！');
            $('input[name=htmlfilename]').focus();
            return false;
        }
        setTimeout(function (){
            editor_auto_210607();
            $('#post_form').submit();
        }, 1);
    }

    function img_call_back(fileurl_tmp)
    {
        $("#litpic_local").val(fileurl_tmp);
        $("#img_a").attr('href', fileurl_tmp);
        $("#img_i").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
        $("input[name=is_litpic]").attr('checked', true); // 自动勾选属性[图片]
    }

    // 上传产品相册回调函数
    function proimg_call_back(paths){
        var  last_div = $(".images_upload_tpl").html();
        for (var i=0;i<paths.length ;i++ )
        {
            if ($(".sort-list-img .images_upload_html").length > 0) {
                $(".sort-list-img .images_upload_html:last").after(last_div);  // 插入一个 新图片
            } else {
                $(".sort-list-img .images_upload:last").before(last_div);  // 插入一个 新图片
            }
            $(".sort-list-img .images_upload_html:last").find('a:eq(0)').attr('href',paths[i]).attr('onclick','').attr('target', "_blank");// 修改他的链接地址
            $(".sort-list-img .images_upload_html:last").find('img').attr('src',paths[i]);// 修改他的图片路径
            $(".sort-list-img .images_upload_html:last").find('a:eq(1)').attr('onclick',"ClearPicArr2(this,'"+paths[i]+"')").text('');
            $(".sort-list-img .images_upload_html:last").find('input').val(paths[i]); // 设置隐藏域 要提交的值
        }            
    }
    
    /*
     * 上传之后删除组图input     
     * @access   public
     * @val      string  删除的图片input
     */
    function ClearPicArr2(obj,path)
    {
        var aid = "<?php echo (isset($field['aid']) && ($field['aid'] !== '')?$field['aid']:'0'); ?>";
        // 删除数据库记录
        $.ajax({
            type:'POST',
            url:"<?php echo url('Product/del_proimg'); ?>",
            data:{filename:path,_ajax:1,aid:aid},
            success:function(){
                $(obj).parent().parent().remove(); // 删除完服务器的, 再删除 html上的图片
                $.ajax({
                    type:'POST',
                    url:"<?php echo url('Uploadimgnew/delupload'); ?>",
                    data:{action:"del", filename:path,_ajax:1},
                    success:function(){}
                });      
            }
        });     
    }

    /** 以下 产品参数相关 js*/
    $(document).ready(function(){
        // 产品栏目切换时 ajax 调用  返回不同的属性输入框
        $("#typeid").change(function(){
            get_attr_input();
        });
        // 触发产品栏目
        // $("#typeid").trigger('change'); 
    });

    // 产品栏目切换时 ajax 调用  返回不同的属性输入框
    function get_attr_input()
    {
        var aid = $("input[name=aid]").val();
        var typeid = $("#typeid").val();
        if (parseInt(typeid) < 1) {
            return false;
        }
        $('#product_attr_table').html('<div style="color: red;font-size: 12px;text-align: center;">加载中……</div>');
        // 产品栏目切换时 ajax 调用  返回不同的属性输入框     
        $.ajax({
            type:'GET',
            data:{aid:aid,typeid:typeid,_ajax:1}, 
            url:"<?php echo url('Product/ajax_get_attr_input'); ?>",
            success:function(data){
                $("#product_attr_table").html('').append(data);
            },
            error: function(e){
                $('#product_attr_table').html('<div style="color: red;font-size: 12px;text-align: center;">加载失败，点击此处<a href="javascript:void(0);" onClick="get_attr_input();">刷新</a></div>');
            }
       });
    }

    /** 以下 图集相册的拖动排序相关 js*/
    
    $( ".sort-list-img" ).sortable({
        start: function( event, ui) {
        
        }
        ,stop: function( event, ui ) {
            // var rdata = '', url="<?php echo url('Product/ajax_sort_proimg'); ?>";
            // var container = $(ui.item).closest("TB");
            // var LIs = $(container).find("DIV");
            // $(LIs).each(function(){
            //     console.log($(this))
            //     rdata += $(this).attr('rel') + ',' + $(this).index() + '|';
            // });
            // rdata = rdata.substr(0, (rdata.length-1));
            // console.log(rdata)
            // $.post(url, {str:rdata}, function(){
            
            // });
        }
    });
    //因为他们要拖动，所以尽量设置他们的文字不能选择。 
    // $( ".sort-list-img" ).disableSelection();
</script>
<script>
    try{
        var mt20_1649209614 = sessionStorage.getItem("mt20_1649209614");
        if (mt20_1649209614 == 1){
            $("#geduan_div").removeClass("h10");
        }else{
            $("#geduan_div").addClass("h10");
        }
    }catch(e){}
</script>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>