<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:47:"./application/admin/template/language\index.htm";i:1686877574;s:58:"E:\APMZ\web12\application\admin\template\public\layout.htm";i:1686877574;s:61:"E:\APMZ\web12\application\admin\template\public\theme_css.htm";i:1680508820;s:57:"E:\APMZ\web12\application\admin\template\language\bar.htm";i:1655708908;s:58:"E:\APMZ\web12\application\admin\template\public\footer.htm";i:1680508820;}*/ ?>
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
<body class="bodystyle" style="cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    
    <div class="fixed-bar">
        <div class="item-title"><a class="back_xin" href="javascript:history.back();" title="返回"><i class="iconfont e-fanhui"></i></a>
            <div class="subject">
                <h3>多语言</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <?php if(is_check_access('Language@index') == '1'): ?>
                <li>
                <?php if('Language' == CONTROLLER_NAME AND in_array(ACTION_NAME, ['index','add','edit'])): ?>
                    <a href="<?php echo url("Language/index"); ?>" class="tab current"><span>语言列表</span></a>
                <?php else: ?>
                    <a href="<?php echo url("Language/index"); ?>" class="tab"><span>语言列表</span></a>
                <?php endif; ?>
                </li>
                <?php endif; if(is_check_access('Language@customvar_arctype') == '1'): ?>
                <li>
                <?php if('Language' == CONTROLLER_NAME AND in_array(ACTION_NAME, ['customvar_arctype'])): ?>
                    <a href="<?php echo url("Language/customvar_arctype"); ?>" class="tab current"><span>模板栏目变量</span></a>
                <?php else: ?>
                    <a href="<?php echo url("Language/customvar_arctype"); ?>" class="tab"><span>模板栏目变量</span></a>
                <?php endif; ?>
                </li>
                <?php endif; if(is_check_access('Language@pack_index') == '1'): ?>
                <li>
                <?php if('Language' == CONTROLLER_NAME AND in_array(ACTION_NAME, ['pack_index','pack_add','pack_batch_add','pack_edit'])): ?>
                    <a href="<?php echo url("Language/pack_index"); ?>" class="tab current"><span>模板语言变量</span></a>
                <?php else: ?>
                    <a href="<?php echo url("Language/pack_index"); ?>" class="tab"><span>模板语言变量</span></a>
                <?php endif; ?>
                </li>
                <?php endif; if(is_check_access('Language@pack_index') == '1'): ?>
                <li>
                <?php if('Language' == CONTROLLER_NAME AND in_array(ACTION_NAME, ['official_pack_index'])): ?>
                    <a href="<?php echo url("Language/official_pack_index"); ?>" class="tab current"><span>官方语言包变量</span></a>
                <?php else: ?>
                    <a href="<?php echo url("Language/official_pack_index"); ?>" class="tab"><span>官方语言包变量</span></a>
                <?php endif; ?>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="flexigrid">
        <div class="mDiv pt0">
            <div class="ftitle">
                <?php if($main_lang == $admin_lang): if(is_check_access('Language@add') == '1'): ?>
                    <div class="fbutton">
                        <a href="javascript:void(0);" data-href="<?php echo url('Language/add'); ?>" onclick="openFullframe(this, '新增语言', '600px', '500px');">
                            <div class="add">
                                <span><i class="layui-icon layui-icon-addition"></i>新增语言</span>
                            </div>
                        </a>
                    </div>
                    <?php endif; endif; ?>
            </div>
            <form class="navbar-form form-inline" action="<?php echo url('Language/index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <div class="sDiv2">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="中文名称搜索...">
                        <input type="submit" class="btn" value="搜索">
                        <i class="iconfont e-sousuo"></i>
                    </div>
                </div>
            </form>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <?php if($main_lang == $admin_lang): ?>
                        <th class="sign w40" axis="col0">
                            <div class="tc"><input type="checkbox" class="checkAll"></div>
                        </th>
                        <?php endif; ?>
                        <th abbr="article_show" axis="col5" class="w40">
                            <div class="tc">ID</div>
                        </th>
                        <th abbr="ac_id" axis="col4">
                            <div class="text-l10">语言名称</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w80">
                            <div class="tc">语言标识</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="w180">
                            <div class="text-l10">中文名称</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w60">
                            <div class="tc">国旗</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">前台默认语言</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w50">
                            <div class="tc">开启</div>
                        </th>
                        <!-- <th abbr="article_time" axis="col6" class="w200">
                            <div class="tc">单独域名</div>
                        </th> -->
                        <th axis="col1" class="w100">
                            <div class="tc">操作</div>
                        </th>
                        <th abbr="article_show" axis="col5" class="w60">
                            <div class="tc">排序</div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%">
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <div class="no_row">
                                    <div class="no_pic"><img src="/public/static/admin/images/null-data.png"></div>
                                </div>
                            </td>
                        </tr>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                        <tr>
                            <?php if($main_lang == $admin_lang): ?>
                            <td class="sign">
                                <div class="w40 tc">
                                    <?php if(1 != $vo['is_home_default'] AND 0 < $k): ?>
                                    <input type="checkbox" autocomplete="off" name="ids[]" value="<?php echo $vo['id']; ?>">
                                    <?php else: ?>
                                    <input disabled  type="checkbox" name="ids[]" value="<?php echo $vo['id']; ?>">
                                    <?php endif; ?>
                                </div>
                            </td>
                            <?php endif; ?>
                            <td class="sort">
                                <div class="w40 tc">
                                    <?php echo $vo['id']; ?>
                                </div>
                            </td>
                            <td style="width: 100%">
                                <div class="text-l10" style="">
                                    <a href="javascript:void(0);" data-href="<?php echo url('Language/edit',array('id'=>$vo['id'])); ?>" onclick="openFullframe(this, '编辑语言', '600px', '530px');">
                                    <?php echo $vo['title']; ?></a>
                                </div>
                            </td>
                            <td class="tc">
                                <div class="w80 tc">
                                    <?php echo $vo['mark']; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w180 text-l10">
                                    <?php echo $languagemarkList[$vo['mark']]['cn_title']; ?>
                                </div>
                            </td>
                            <td class="tc">
                                <div class="w60 tc">
                                    <img src="/public/static/common/images/language/<?php echo $vo['mark']; ?>.gif" alt="<?php echo $vo['cn_title']; ?>" style="float: unset;"/>
                                </div>
                            </td>
                            <td class="">
                                <div class="w100 tc">
                                    <?php if($vo['is_home_default'] == '1'): ?>
                                        <span class="yes">是</span>
                                    <?php else: ?>
                                        <span class="no">否</span>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w50 tc">
                                    <?php if($vo['status'] == '1'): ?>
                                        <span class="yes" <?php if(is_check_access('Language@edit') == '1'): ?>onClick="changeTableVal('language','id','<?php echo $vo['id']; ?>','status',this);"<?php endif; ?>><i class="fa fa-check-circle"></i>是</span>
                                    <?php else: ?>
                                        <span class="no" <?php if(is_check_access('Language@edit') == '1'): ?>onClick="changeTableVal('language','id','<?php echo $vo['id']; ?>','status',this);"<?php endif; ?>><i class="fa fa-ban"></i>否</span>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <!-- <td class="">
                                <div class="w200 tc">
                                    <?php echo $vo['url']; ?>
                                </div>
                            </td> -->
                            <td class="operation">
                                <div class="w100 tc">
                                    <?php if(is_check_access('Language@edit') == '1'): ?>
                                    <a href="javascript:void(0);" data-href="<?php echo url('Language/edit',array('id'=>$vo['id'])); ?>" onclick="openFullframe(this, '编辑语言', '600px', '530px');" class="btn blue">编辑</a>
                                    <?php endif; if($vo['is_home_default'] == 1 OR $vo['mark'] == $main_lang): ?>
                                        <i></i>
                                        <a class="btn grey"  href="javascript:void(0);" data-id="<?php echo $vo['admin_id']; ?>">删除</a>
                                    <?php else: if(is_check_access('Language@del') == '1'): ?>
                                        <i></i>
                                        <a class="btn red"  href="javascript:void(0)" data-url="<?php echo url('Language/del'); ?>" data-id="<?php echo $vo['id']; ?>" onClick="delfun(this);">删除</a>
                                        <?php endif; endif; ?>
                                </div>
                            </td>
                            <td class="sort">
                                <div class="w60 tc">
                                    <?php if(is_check_access('Language@edit') == '1'): ?>
                                    <input style="text-align: left;" type="text" onchange="changeTableVal('language','id','<?php echo $vo['id']; ?>','sort_order',this);" size="4"  value="<?php echo $vo['sort_order']; ?>" />
                                    <?php else: ?>
                                    <?php echo $vo['sort_order']; endif; ?>
                                </div>
                            </td>
                           
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div class="tDiv">
            <div class="tDiv2">
                <?php if($main_lang == $admin_lang): ?>
                    <div class="fbutton checkboxall">
                        <input type="checkbox" class="checkAll">
                    </div>
                    <?php if(is_check_access('Language@del') == '1'): ?>
                    <div class="fbutton">
                        <a onclick="batch_del(this, 'ids');" data-url="<?php echo url('Language/del'); ?>">
                            <div class="add">
                                <span>批量删除</span>
                            </div>
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="fbutton">
                        <a  href="javascript:void(0);" onclick="tag_call('web_language_switch');">
                            <div class="add">
                                <span>标签调用</span>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div style="clear:both"></div>
        </div>
        <!--分页位置-->
        <?php echo $page; ?>
    </div>
</div>
<script>
    $(function(){
        $('input[name*=ids]').click(function(){
            if ($('input[name*=ids]').length == $('input[name*=ids]:checked').length) {
                $('.checkAll').prop('checked','checked');
            } else {
                $('.checkAll').prop('checked', false);
            }
        });
        $('input[type=checkbox].checkAll').click(function(){
            $('input[type=checkbox]:not(:disabled)').prop('checked',this.checked);
        });
    });
    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        // 显示顶部菜单语言列表
        append_lang();
        function append_lang(){
            $(".em_lang ul li.lang", window.parent.document).remove();
            var htmlstr = '';
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                htmlstr += '<li class="ey-tool-list text-center lang"><a class="liaojie" href="?lang=<?php echo $vo['mark']; ?>"><?php echo $vo['title']; ?></a></li>';
            <?php endforeach; endif; else: echo "" ;endif; ?>
            $('#addlang', window.parent.document).before(htmlstr);
        }
    });

    function pack_iframe(obj)
    {
        var url = $(obj).data('url');
        //iframe窗
        layer.open({
            type: 2,
            title: '模板语言变量',
            fixed: true, //不固定
            shadeClose: false,
            shade: layer_shade,
            maxmin: false, //开启最大化最小化按钮
            area: ['90%', '90%'],
            content: url,
            end: function(){ //结束弹窗之后的处理

            }
        });
    }
  
    function delfun(obj){
      var title = $(obj).attr('data-typename');
      layer.confirm('<font color="#ff0000">将同步清空该语言的全部数据</font>，确认删除？', {
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
        }, function(){
          layer_loading('正在处理');
        // 确定
          $.ajax({
            type : 'post',
            url : $(obj).attr('data-url'),
            data : {del_id:$(obj).attr('data-id'), _ajax:1},
            dataType : 'json',
            success : function(data){
              layer.closeAll();
              if(data.code == 1){
                layer.msg(data.msg, {icon: 1});
                window.location.reload();
                // $('tr[data-id="'+$(obj).attr('data-id')+'"]').remove();
              }else{
                layer.alert(data.msg, {icon: 2, title:false});
              }
            }
          })
        }, function(index){
          layer.close(index);
        }
      );
      return false;
    }
    function tag_call(name)
    {
        $.ajax({
            type: "POST",
            url: "<?php echo url('System/ajax_tag_call', ['_ajax'=>1]); ?>",
            data: {name:name},
            dataType: 'json',
            success: function (res) {
                if(res.code == 1){
                    //询问框
                    var confirm = layer.confirm(res.data.msg, {
                            area: ['780px','350px'],
                            move: false,
                            title: '提示',
                            shade: layer_shade,
                            btnAlign:'r',
                            closeBtn: 3,
                            btn: ['关闭'] ,//按钮
                            success: function () {
                                $(".layui-layer-content").css('text-align', 'left');
                            }
                        }, function(){
                            layer.close(confirm);
                        }
                    );
                }else{
                    layer.alert(res.msg, {icon: 2, title:false});
                }
            },
            error:function(e){
                layer.alert(e.responseText, {icon: 2, title:false});
            }
        });
    }
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