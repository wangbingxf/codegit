<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:51:"./application/admin/template/member\users_index.htm";i:1686877574;s:58:"E:\APMZ\web12\application\admin\template\public\layout.htm";i:1686877574;s:61:"E:\APMZ\web12\application\admin\template\public\theme_css.htm";i:1680508820;s:56:"E:\APMZ\web12\application\admin\template\member\left.htm";i:1680508820;s:56:"E:\APMZ\web12\application\admin\template\public\page.htm";i:1655708909;s:58:"E:\APMZ\web12\application\admin\template\public\footer.htm";i:1680508820;}*/ ?>
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
<div class="sidebar-second ">
    <ul>
        <li class="sidebar-second-title">会员中心</li>

        <?php if(is_check_access('Member@users_index') == '1'): ?>
        <li>
            <a <?php if(in_array(ACTION_NAME, ['users_index','users_edit'])): ?>class="active"<?php endif; ?> href='<?php echo url("Member/users_index"); ?>'>会员列表</a>
        </li>
        <?php endif; if(is_check_access('Member@level_index') == '1'): ?>
        <li>
            <a <?php if(in_array(\think\Request::instance()->action(), ['level_index','level_add','level_edit'])): ?>class="active"<?php endif; ?> href='<?php echo url("Member/level_index"); ?>'>会员级别</a>
        </li>
        <?php endif; if(is_check_access('Member@attr_index') == '1'): ?>
        <li>
            <a <?php if(in_array(\think\Request::instance()->action(), ['attr_index','attr_add','attr_edit'])): ?>class="active"<?php endif; ?> href='<?php echo url("Member/attr_index"); ?>'>会员字段</a>
        </li>
        <?php endif; if(is_check_access('Member@users_config') == '1'): ?>
        <li>
            <a <?php if(in_array(\think\Request::instance()->action(), ['users_config'])): ?>class="active"<?php endif; ?> href='<?php echo url("Member/users_config"); ?>'>功能配置</a>
        </li>
        <?php endif; if($php_servicemeal > 1): if(is_check_access('UsersScore@conf') == '1'): ?>
            <li>
                <a <?php if(in_array(CONTROLLER_NAME, ['UsersScore'])): ?>class="active"<?php endif; ?> href='<?php echo url("UsersScore/conf"); ?>'>积分管理</a>
            </li>
            <?php endif; endif; ?>
    </ul>
</div>
<div class="page" style="min-width:auto;margin-left:100px;">
    <!-- <div class="fixed-bar">
        <div class="item-title">
            <ul class="tab-base nc-row">
                <?php if(is_check_access('Member@users_index') == '1'): ?>
                <li>
                    <a <?php if(in_array(\think\Request::instance()->action(), ['users_index','users_add','users_edit'])): ?>class="current"<?php endif; ?> href='<?php echo url("Member/users_index"); ?>'>
                        <span>会员列表</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div> -->
    <div class="flexigrid member_lt">
        <div class="mDiv pt0">
            <div class="ftitle_nav">
                <?php if(is_array($levelCountList) || $levelCountList instanceof \think\Collection || $levelCountList instanceof \think\Paginator): $i = 0; $__LIST__ = $levelCountList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="fbutton">
                    <a href="<?php echo url('Member/users_index', ['level'=>$vo['level_id']]); ?>">
                        <div class="<?php if(\think\Request::instance()->param('level') == $vo['level_id']): ?>cur<?php endif; ?>">
                            <?php echo $vo['level_name']; ?><span><?php echo $vo['level_count']; ?></span>
                        </div>
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <form class="navbar-form form-inline" id="searchForm" action="<?php echo url('Member/users_index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    
                    <div class="sDiv2" style="margin: 0 6px;">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="搜索用户名...">
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
                        <th class="sign w40" axis="col0">
                            <div class="tc"><input type="checkbox" autocomplete="off" class="checkAll"></div>
                        </th>
                        <th abbr="article_title" axis="col3" class="w40">
                            <div class="tc">ID</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="w50">
                            <div class="tc">头像</div>
                        </th>
                        <th abbr="ac_id" axis="col4">
                            <div class="tl text-l10">昵称/绑定</div>
                        </th>
                        <th abbr="ac_id" axis="col4" class="w100">
                            <div class="tc">级别</div>
                        </th>
                        <th abbr="ac_id" axis="col4" class="w60">
                            <div class="tc">激活</div>
                        </th>
                        <th abbr="ac_id" axis="col4" class="w150">
                            <div class="tc">注册日期</div>
                        </th>
                        <th axis="col1" class="w120">
                            <div class="tc">操作</div>
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
                        <div class="no-data">
                            <div class="no_row">
                                <div class="no_pic"><img src="/public/static/admin/images/null-data.png"></div>
                            </div>
                        </div>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                        <tr>
                            <td class="sign">
                                <div class="w40 tc">
                                    <input type="checkbox" autocomplete="off" name="ids[]" value="<?php echo $vo['users_id']; ?>">
                                </div>
                            </td>
                            <td class="sort">
                                <div class="w40 tc"><?php echo $vo['users_id']; ?></div>
                            </td>
                            <td class="sign">
                                <div class="w50 tc">
                                    <img id="img_head_pic" style="height: 40px;margin-right: 5px;float: unset;margin: auto;" src="<?php echo get_head_pic($vo['head_pic'],false,$vo['sex']); ?>" />
                                </div>
                            </td>
                            <td style="width: 100%">
                                <div class="text-l10">
                                    <p style="margin-top: -5px;">
                                    <?php if(is_check_access('Member@users_edit') == '1'): ?>
                                        <a href="<?php echo url('Member/users_edit',array('id'=>$vo['users_id'])); ?>"><?php echo (isset($vo['nickname']) && ($vo['nickname'] !== '')?$vo['nickname']:$vo['username']); ?></a>
                                    <?php else: ?>
                                        <?php echo (isset($vo['nickname']) && ($vo['nickname'] !== '')?$vo['nickname']:$vo['username']); endif; ?>
                                    </p>
                                    
                                    <p class="binding">
                                        <?php if($vo['is_mobile'] == 1 && !empty($vo['mobile'])): ?>
                                            <img src="/public/static/admin/images/r_phone.png">
                                        <?php endif; if(in_array($vo['thirdparty'], [5]) || !empty($wxlogin[$vo['users_id']]['openid'])): ?>
                                            <img src="/public/static/admin/images/r_weixin.png">
                                        <?php endif; if(in_array($vo['thirdparty'], [6])): ?>
                                            <img src="/public/static/admin/images/r_wechat.png">
                                        <?php endif; if(!empty($qqlogin[$vo['users_id']])): ?>
                                            <img src="/public/static/admin/images/r_qq.png">
                                        <?php endif; if(in_array($vo['thirdparty'], [4])): ?>
                                            <img src="/public/static/admin/images/r_wxapp.png">
                                        <?php endif; if(!empty($wblogin[$vo['users_id']])): ?>
                                            <img src="/public/static/admin/images/r_wb.png">
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="w100 tc">
                                    <?php echo $vo['level_name']; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w60 tc">
                                    <?php if($vo['is_activation'] == '1'): ?>
                                        <span class="yes" <?php if(is_check_access('Member@users_edit') == '1'): ?>onClick="changeTableVal('users','users_id','<?php echo $vo['users_id']; ?>','is_activation',this);"<?php endif; ?>><i class="fa fa-check-circle"></i>是</span>
                                    <?php else: ?>
                                        <span class="no" <?php if(is_check_access('Member@users_edit') == '1'): ?>onClick="changeTableVal('users','users_id','<?php echo $vo['users_id']; ?>','is_activation',this);"<?php endif; ?>><i class="fa fa-ban"></i>否</span>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td>
                                <div class="w150 tc">
                                    <?php echo MyDate('Y-m-d H:i:s',$vo['reg_time']); ?>
                                </div>
                            </td>
                            <td class="operation">
                                <div class="w120 tc">
                                    <?php if(is_check_access('Member@users_edit') == '1'): ?>
                                    <a href="<?php echo url('Member/users_edit',array('id'=>$vo['users_id'])); ?>" class="btn blue">编辑</a>
                                    <?php endif; if(is_check_access('Member@users_del') == '1'): ?>
										<i></i>
                                        <a class="btn red"  href="javascript:void(0);" data-url="<?php echo url('Member/users_del'); ?>" data-id="<?php echo $vo['users_id']; ?>" data-admin_id="<?php echo $vo['admin_id']; ?>" data-username="<?php echo $vo['username']; ?>" onClick="usersdel(this);">删除</a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div class="footer-oper">
            <?php if(is_check_access('Member@users_del') == '1'): ?>
            <span class="ml15">
                <input type="checkbox" autocomplete="off" class="checkAll">
            </span>
            <div class="nav-dropup">
                <a onclick="batch_del(this, 'ids');" data-url="<?php echo url('Member/users_del'); ?>" class="layui-btn layui-btn-primary">
                    <div class="add">
                        <span>批量删除</span>
                    </div>
                </a>
            </div>
            <?php endif; if(is_check_access('Member@users_batch_add') == '1'): ?>
                <a href="javascript:void(0);" data-href="<?php echo url('Member/users_batch_add'); ?>" class="layui-btn layui-btn-primary" onclick="openFullframe(this, '批量新增会员','60%','80%');">
                    <div class="add">
                        <span class="red">批量新增</span>
                    </div>
                </a>
            <?php endif; ?>
			<div class="fbuttonr">
    <div class="pages">
       <?php echo $page; ?>
    </div>
</div>
<div class="fbuttonr">
    <div class="total">
        <h5>共有<?php echo (isset($pager->totalRows) && ($pager->totalRows !== '')?$pager->totalRows:0); ?>条,每页显示
            <select name="pagesize" style="width: 60px;" onchange="ey_selectPagesize(this);">
                <option <?php if($pager->listRows == 20): ?> selected <?php endif; ?> value="20">20</option>
                <option <?php if($pager->listRows == 50): ?> selected <?php endif; ?> value="50">50</option>
                <option <?php if($pager->listRows == 100): ?> selected <?php endif; ?> value="100">100</option>
                <option <?php if($pager->listRows == 200): ?> selected <?php endif; ?> value="200">200</option>
            </select>
        </h5>
    </div>
</div>
            <div style="clear:both"></div>
        </div>
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
            $('input[type=checkbox]').prop('checked',this.checked);
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

        <?php if($is_syn_theme_users == '1'): ?>
            syn_theme_users();
        <?php endif; ?>
        function syn_theme_users()
        {
            layer_loading('初始化中');
            // 确定
            $.ajax({
                type : 'get',
                url : "<?php echo url('Member/ajax_syn_theme_users'); ?>",
                data : {_ajax:1},
                dataType : 'json',
                success : function(res){
                    layer.closeAll();
                    if(res.code == 1){
                        layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                            window.location.href = res.url;
                        });
                    }else{
                        layer.alert(res.msg, {icon: 2, title:false}, function(){
                            window.location.reload();
                        });
                    }
                },
                error: function(e){
                    layer.closeAll();
                    layer.alert(e.responseText, {icon: 2, title:false}, function(){
                        window.location.reload();
                    });
                }
            })
        }
    });

    // 删除
    function usersdel(obj){
        var admin_id = $(obj).data('admin_id');
        if (0 < admin_id) {
            var title = "系统管理员前台ID，删除不可恢复？<br/>包含该会员数据有(订单、投稿、问答、留言等)";
        } else {
            var title = "是否删除该会员？删除后不可找回。<br/>包含该会员数据有(订单、投稿、问答、留言等)";
        }
        layer.confirm(title, {
            shade: layer_shade,
            area: ['480px', '200px'],
            move: false,
            title: '提示',//$(obj).attr('data-username'),
            btnAlign:'r',
            closeBtn: 3,
            btn: ['确定','取消'], //按钮
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
                    }else{
                        layer.alert(data.msg, {icon: 2, title:false});
                    }
                }
            })
        }, function(index){
            layer.close(index);
        });
        return false;
    }

    /**
     * 批量删除提交
     */
    function batch_del(obj, name) {
        var a = [];
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
            }
        })
        if(a.length == 0){
            layer.alert('请至少选择一项', {
                shade: layer_shade,
                area: ['480px', '190px'],
                move: false,
                title: '提示',
                btnAlign:'r',
                closeBtn: 3,
                success: function () {
                      $(".layui-layer-content").css('text-align', 'left');
                  }
            });
            return;
        }
        // 删除按钮
        layer.confirm('确认批量彻底删除？<br/>包含该会员数据有(订单、投稿、问答、留言等)', {
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
            $.ajax({
                type: "POST",
                url: $(obj).attr('data-url'),
                data: {del_id:a, _ajax:1},
                dataType: 'json',
                success: function (data) {
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 1});
                        window.location.reload();
                    }else{
                        layer.alert(data.msg, {icon: 2, title:false});
                    }
                },
                error:function(e){
                    layer.closeAll();
                    layer.alert(e.responseText, {icon: 2, title:false});
                }
            });
        }, function (index) {
            layer.closeAll(index);
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