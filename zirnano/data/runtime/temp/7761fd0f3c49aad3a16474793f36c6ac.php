<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:52:"./application/admin/template/member\users_config.htm";i:1680508820;s:58:"E:\APMZ\web12\application\admin\template\public\layout.htm";i:1686877574;s:61:"E:\APMZ\web12\application\admin\template\public\theme_css.htm";i:1680508820;s:56:"E:\APMZ\web12\application\admin\template\member\left.htm";i:1680508820;s:58:"E:\APMZ\web12\application\admin\template\public\footer.htm";i:1680508820;}*/ ?>
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
<script src="/public/static/admin/js/users_upgrade.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/plugins/colpick/js/colpick.js"></script>
<link href="/public/plugins/colpick/css/colpick.css" rel="stylesheet" type="text/css"/>
<body class="bodystyle" style="overflow-y: scroll; cursor: default; -moz-user-select: inherit;">
<style type="text/css">
#picker {
    /*margin:0;*/
    /*padding:0;*/
    border:solid 1px <?php echo (isset($info['theme_color']) && ($info['theme_color'] !== '')?$info['theme_color']:'#ff6565'); ?>;
    width:70px;
    height:20px;
    border-right:40px solid green;
    /*line-height:20px;*/
} 
</style>
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
                <?php if(is_check_access('Member@users_config') == '1'): ?>
                <li>
                    <a <?php if(in_array(\think\Request::instance()->action(), ['users_config'])): ?>class="current"<?php endif; ?> href='<?php echo url("Member/users_config"); ?>'>
                        <span>功能配置</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div> -->
    <div class="flexigrid">
        <form class="form-horizontal" id="postForm" action="<?php echo url('Member/users_config'); ?>" method="post">
            <div class="hDiv htitx">
                <div class="hDivBox">
                    <table cellspacing="0" cellpadding="0" style="width: 100%">
                        <thead>
                        <tr>
                            <th class="sign w10" axis="col0">
                                <div class="tc"></div>
                            </th>
                            <th abbr="article_title" axis="col3" class="w10">
                                <div class="tc">注册设置</div>
                            </th>
                            <th abbr="ac_id" axis="col4">
                                <div class=""></div>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <!-- config/users -->
            <div class="ncap-form-default">
                <dl class="row">
                    <dt class="tit">
                        <label for="uname">会员中心</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin">
                            <input type="radio" name="users[users_open_register]" value="0" <?php if(!isset($info['users_open_register']) || empty($info['users_open_register'])): ?>checked="checked"<?php endif; ?>/>开启
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label class="curpoin" title="关闭后将自动隐藏账户注册/登录的入口">
                            <input type="radio" name="users[users_open_register]" value="1" <?php if($info['users_open_register'] == 1): ?>checked="checked"<?php endif; ?>/>关闭
                        </label>
                    </dd>
                </dl>

                <dl class="row">
                    <dt class="tit">
                        <label for="uname">开启注册</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin">
                            <input type="radio" name="users[users_open_reg]" value="0" <?php if(!isset($info['users_open_reg']) || empty($info['users_open_reg'])): ?>checked="checked"<?php endif; ?>/>开启
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label class="curpoin" title="关闭后将自动隐藏账户注册的入口">
                            <input type="radio" name="users[users_open_reg]" value="1" <?php if($info['users_open_reg'] == 1): ?>checked="checked"<?php endif; ?>/>关闭
                        </label>
                    </dd>
                </dl>

                <dl class="row" id="users_verification_dl" <?php if(!empty($info['users_open_reg']) && $info['users_open_reg'] == 1): ?>style="display: none;"<?php endif; ?>>
                    <dt class="tit">
                        <label for="username">注册验证</label>
                    </dt>
                    <dd class="opt" style="line-height: 26px;">
                        <label class="curpoin">
                            <input type="radio" name="users[users_verification]" value="0" <?php if(!isset($info['users_verification']) || empty($info['users_verification'])): ?>checked="checked"<?php endif; ?>/>不验证
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label class="curpoin" title="注册会员后，需后台审核激活后才能登录">
                            <input type="radio" name="users[users_verification]" value="1" <?php if($info['users_verification'] == 1): ?>checked="checked"<?php endif; ?>/>后台激活
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label class="curpoin" title="注册会员时，发送邮箱验证码校验才能注册">
                            <input type="radio" name="users[users_verification]" value="2" onclick="email(1);" <?php if($info['users_verification'] == 2): ?>checked="checked"<?php endif; ?>/>邮件验证
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label class="curpoin" title="注册会员中，发送手机验证码校验才能注册">
                            <input type="radio" name="users[users_verification]" value="3" onclick="mobile(1);" <?php if($info['users_verification'] == 3): ?>checked="checked"<?php endif; ?>/>手机验证
                        </label>
                        <p class="notic">邮件验证和手机验证需要正确配置后才能使用，请去基本信息-接口配置，配置电子邮箱或云短信</p>
                    </dd>
                </dl>

                <dl class="row">
                    <dt class="tit">
                        <label for="username">找回密码</label>
                    </dt>
                    <dd class="opt" style="line-height: 26px;">
                        <label class="curpoin">
                            <input type="radio" name="users[users_retrieve_password]" value="1" onclick="email(2, this);" <?php if(isset($info['users_retrieve_password']) && $info['users_retrieve_password'] == 1): ?>checked="checked"<?php endif; ?>/>邮件验证
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label class="curpoin">
                            <input type="radio" name="users[users_retrieve_password]" value="2" onclick="mobile(2, this);" <?php if(isset($info['users_retrieve_password']) && $info['users_retrieve_password'] == 2): ?>checked="checked"<?php endif; ?>/>手机验证
                        </label>
                        <p class="notic">邮件验证和手机验证需要正确配置后才能使用，请去基本信息-接口配置，配置电子邮箱或云短信</p>
                    </dd>
                </dl>

                <dl class="row">
                    <dt class="tit">
                        <label for="username">禁止注册用户名</label>
                    </dt>
                    <dd class="opt" style="line-height: 26px;">
                        <textarea rows="5" cols="60" name="users[users_reg_notallow]" style="height:60px;"><?php echo (isset($info['users_reg_notallow']) && ($info['users_reg_notallow'] !== '')?$info['users_reg_notallow']:'www,bbs,ftp,mail,user,users,admin,administrator,eyoucms'); ?></textarea>
                        <p class="notic">前台注册时禁止注册的用户名列表，以逗号(,)分隔开</p>
                    </dd>
                </dl>
            </div>
            <div class="hDiv htitx">
                <div class="hDivBox">
                    <table cellspacing="0" cellpadding="0" style="width: 100%">
                        <thead>
                        <tr>
                            <th class="sign w10" axis="col0">
                                <div class="tc"></div>
                            </th>
                            <th abbr="article_title" axis="col3" class="w10">
                                <div class="tc">登录设置</div>
                            </th>
                            <th abbr="ac_id" axis="col4">
                                <div class=""></div>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="ncap-form-default">
                <dl class="row">
                    <dt class="tit">
                        <label for="users_login_expiretime">前台登录超时</label>
                    </dt>
                    <dd class="opt">
                        <input id="users_login_expiretime" name="users[users_login_expiretime]" value="<?php echo (isset($info['users_login_expiretime']) && ($info['users_login_expiretime'] !== '')?$info['users_login_expiretime']:config('login_expire')); ?>" autocomplete="off" type="text" style="width: 200px;" />&nbsp;(秒)
                        <input type="hidden" name="users[login_expiretime_old]" value="<?php echo (isset($info['users_login_expiretime']) && ($info['users_login_expiretime'] !== '')?$info['users_login_expiretime']:0); ?>">
                        <p class="notic">默认3600秒等于1小时，最多不超过1个月（2592000秒）</p>
                        <p class="notic2 none red" id="tips_users_login_expiretime"></p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label for="username">登录后跳转</label>
                    </dt>
                    <dd class="opt" style="line-height: 26px;">
                        <label class="curpoin">
                            <input type="radio" name="users[users_login_jump_type]" value="1" onclick="$('#login_jump_url_dl').hide();" <?php if(!empty($info['users_login_jump_type']) && $info['users_login_jump_type'] == 1): ?>checked="checked"<?php endif; ?>/>首页
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label class="curpoin">
                            <input type="radio" name="users[users_login_jump_type]" value="2" onclick="$('#login_jump_url_dl').hide();" <?php if(!isset($info['users_login_jump_type']) || $info['users_login_jump_type'] == 2): ?>checked="checked"<?php endif; ?>/>当前页
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label class="curpoin">
                            <input type="radio" name="users[users_login_jump_type]" value="3" onclick="$('#login_jump_url_dl').hide();" <?php if(!empty($info['users_login_jump_type']) && $info['users_login_jump_type'] == 3): ?>checked="checked"<?php endif; ?>/>会员中心
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label class="curpoin">
                            <input type="radio" name="users[users_login_jump_type]" value="4" onclick="$('#login_jump_url_dl').show();" <?php if(!empty($info['users_login_jump_type']) && $info['users_login_jump_type'] == 4): ?>checked="checked"<?php endif; ?>/>自定义链接
                        </label>
                    </dd>
                </dl>
                <dl class="row <?php if($info['users_login_jump_type'] != '4'): ?>none<?php endif; ?>" id="login_jump_url_dl">
                    <dt class="tit">
                        <label></label>
                    </dt>
                    <dd class="opt">
                        <input name="users[users_login_jump_url]" value="<?php echo (isset($info['users_login_jump_url']) && ($info['users_login_jump_url'] !== '')?$info['users_login_jump_url']:''); ?>" autocomplete="off" placeholder="http://" type="text" class="input-txt"/>
                        <p class="notic">请填写完整的链接</p>
                    </dd>
                </dl>
            </div>
            <!-- config/theme -->
            <?php if(is_check_access('UsersRelease@conf') == '1'): if(1 == $userConfig['users_open_release']): ?>
                    <div class="hDiv htitx">
                        <div class="hDivBox">
                            <table cellspacing="0" cellpadding="0" style="width: 100%">
                                <thead>
                                <tr>
                                    <th class="sign w10" axis="col0">
                                        <div class="tc"></div>
                                    </th>
                                    <th abbr="article_title" axis="col3" class="w10">
                                        <div class="tc">
                                            <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?><i class="anchor-icon anchor-icon-biao" title="限商业授权以上可用"></i><?php endif; ?>投稿设置
                                        </div>
                                    </th>
                                    <th abbr="ac_id" axis="col4">
                                        <div class=""></div>
                                    </th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="ncap-form-default <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?> page on-off_show <?php endif; ?>">
                        <div class="on-off_shade <?php if(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty())): ?> none <?php endif; ?>">
                            <div class="on-off_shadeCon">
                                <span>限商业授权以上可用，<a href="https://www.eyoucms.com/buy/" target="_blank">购买授权</a></span>
                            </div>
                        </div>
                        <dl class="row">
                            <dt class="tit">
                                <label>投稿自动审核</label>
                            </dt>
                            <dd class="opt" style="line-height: 26px;">
                                <label class="curpoin">
                                    <input type="radio" name="users[is_automatic_review]" value="1" <?php if(isset($info['is_automatic_review']) && $info['is_automatic_review'] == 1): ?>checked="checked"<?php endif; ?>/>开启
                                </label>
                                &nbsp;&nbsp;&nbsp;
                                <label class="curpoin" title="关闭后将自动隐藏账户注册/登录的入口">
                                    <input type="radio" name="users[is_automatic_review]" value="0" <?php if(!isset($info['is_automatic_review']) || empty($info['is_automatic_review'])): ?>checked="checked"<?php endif; ?>/>关闭
                                </label>
                                <p class="notic">开启后会员投稿将直接展示到前台文档列表</p>
                            </dd>
                        </dl>

                        <dl class="row">
                            <dt class="tit">
                                <label>投稿次数限制</label>
                            </dt>
                            <dd class="opt">
                                <label class="curpoin">
                                    <input name="users[is_open_posts_count]" value="1" type="radio"  <?php if(isset($info['is_open_posts_count']) && $info['is_open_posts_count'] == 1): ?> checked="checked"<?php endif; ?>>开启
                                </label>
                                <label class="curpoin">
                                &nbsp;&nbsp;&nbsp;
                                    <input name="users[is_open_posts_count]" value="0" type="radio" <?php if(!isset($info['is_open_posts_count']) || empty($info['is_open_posts_count'])): ?> checked="checked" <?php endif; ?>>关闭
                                </label>
                                <a <?php if(!isset($info['is_open_posts_count']) || empty($info['is_open_posts_count'])): ?>style="display: none;"<?php endif; ?> id='UpUsersLevelBout' href="javascript:void(0);" onclick="UpUsersLevelBout();" class="ml10 ncap-btn ncap-btn-green">设置次数</a>
                                <p class="notic">开启后可设置会员每日的投搞数量</p>
                            </dd>
                        </dl>

                        <dl class="row">
                            <dt class="tit">
                                <label for="title" id="select_title">投稿栏目选择</label>
                            </dt>
                            <dd class="opt">
                                <select name="release_typeids[]" style="width: 300px;" size="15" multiple="true">
                                    <?php echo $release_select_html; ?>
                                </select>
                                <span class="err"></span>
                                <p class="notic2 red">(按 Ctrl 可以进行多选)</p>
                            </dd>
                        </dl>
                    </div>
                    <script type="text/javascript">
                        $(function(){
                            //关闭注册隐藏注册验证
                            $('input[name="users[users_open_reg]"]').click(function(){
                                var users_open_reg = $(this).val();
                                if (1 == users_open_reg) {
                                    $('#users_verification_dl').hide();
                                } else {
                                    $('#users_verification_dl').show();
                                }
                            });
                            $('input[name="users[is_open_posts_count]"]').click(function(){
                                var is_open_posts_count = $(this).val();
                                if (1 == is_open_posts_count) {
                                    $('#UpUsersLevelBout').show();
                                } else {
                                    $('#UpUsersLevelBout').hide();
                                }
                            });
                        });

                        function UpUsersLevelBout()
                        {
                            var url = "<?php echo url('UsersRelease/ajax_users_level_bout'); ?>";
                            //iframe窗
                            layer.open({
                                type: 2,
                                title: '会员投稿次数设置',
                                fixed: true, //不固定
                                shadeClose: false,
                                shade: layer_shade,
                                maxmin: true, //开启最大化最小化按钮
                                area: ['50%', '80%'],
                                content: url
                            });
                        }
                    </script>
                <?php endif; endif; ?>
            <!-- config/theme -->
            <div class="hDiv htitx">
                <div class="hDivBox">
                    <table cellspacing="0" cellpadding="0" style="width: 100%">
                        <thead>
                        <tr>
                            <th class="sign w10" axis="col0">
                                <div class="tc"></div>
                            </th>
                            <th abbr="article_title" axis="col3" class="w10">
                                <div class="tc">前台风格设置</div>
                            </th>
                            <th abbr="ac_id" axis="col4">
                                <div class=""></div>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="ncap-form-default">
                <dl class="row">
                    <dt class="tit">标签调用</dt>
                    <dd class="opt">
                        <a href="javascript:void(0);" onclick="tag_call('web_users_switch');" class="ncap-btn ncap-btn-green">查看教程</a>
                    </dd>
                </dl>

                <?php if($usersTplVersion != 'v3'): ?>
                <dl class="row">
                    <dt class="tit">
                        <label for="uname"><?php if($usersTplVersion == 'v2'): ?>PC左侧菜单<?php else: ?>左侧菜单<?php endif; ?></label>
                    </dt>
                    <dd class="opt">
                        <a href="javascript:void(0);" onclick="menu_index();" class="ncap-btn ncap-btn-green">管理</a>
                    </dd>
                </dl>
                <?php endif; if($usersTplVersion == 'v2'): ?>
                <dl class="row">
                    <dt class="tit">
                        <label for="uname">WAP底部菜单</label>
                    </dt>
                    <dd class="opt">
                        <a href="javascript:void(0);" onclick="bottom_menu_index();" class="ncap-btn ncap-btn-green">管理</a>
                    </dd>
                </dl>
                <?php endif; ?>
                <dl class="row">
                    <dt class="tit">
                        <label for="uname">主题颜色</label>
                    </dt>
                    <dd class="opt">
                        <input type="text" name="theme[theme_color]" value="<?php echo (isset($info['theme_color']) && ($info['theme_color'] !== '')?$info['theme_color']:'#ff6565'); ?>" id="picker" style="border-color: <?php echo (isset($info['theme_color']) && ($info['theme_color'] !== '')?$info['theme_color']:'#ff6565'); ?>;" />
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label for="web_users_tpl_theme">模板风格</label>
                    </dt>
                    <dd class="opt">
                        <select name="web[web_users_tpl_theme]">
                            <option value="">默认风格</option>
                            <?php if(is_array($tpl_theme_list) || $tpl_theme_list instanceof \think\Collection || $tpl_theme_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tpl_theme_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!in_array(($vo), explode(',',"users"))): ?>
                                <option value="<?php echo $vo; ?>" <?php if($web_users_tpl_theme == $vo): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        &nbsp;<a href="JavaScript:void(0);" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=11017&origin_eycms=1','如何制作可切换的会员中心模板？')" style="font-size: 12px;padding-left: 38px;position:absolute;top: 18px;">查看教程？</a>
                        <p class="notic"></p>
                    </dd>
                </dl>
            </div>

            <div class="ncap-form-default">
                <dl class="row">
                    <div class="bot">
                        <a href="JavaScript:void(0);" onclick="usersset();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
                    </div>
                </dl>
            </div>

        </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        // 颜色选择
        $('#picker').colpick({
            flat:false,
            layout:'rgbhex',
            submit:0,
            colorScheme:'light',
            color:$('#picker').val(),
            onChange:function(hsb,hex,rgb,el,bySetColor) {
                $(el).css('border-color','#'+hex);
                // Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
                if(!bySetColor) $(el).val('#'+hex);
            }
        }).keyup(function(){
            $(this).colpickSetColor('#'+this.value);
        });

        //前台登录超时
        $('#users_login_expiretime').keyup(function(){
            var users_login_expiretime = $(this).val();
            if (users_login_expiretime > 2592000) {
                $(this).val(2592000);
                $('#tips_users_login_expiretime').html('最多不能设置超过一个月（2592000秒）').show();
            } else if (users_login_expiretime < 60) {
                $('#tips_users_login_expiretime').html('最少不能设置低于60秒').show();
            } else {
                $('#tips_users_login_expiretime').hide();
            }
        });
    });

    function email(source, obj) {
        $.ajax({
            url: "<?php echo url('Member/ajax_users_config_email'); ?>",
            type: 'GET',
            dataType: 'JSON',
            data: {_ajax:1},
            success: function(res){
                if (res.code == 0) {
                    if (1 == source) {
                        $("input[name='users[users_verification]'][value=0]").attr("checked", "checked");
                        layer.alert(res.msg, {icon: 2, title:false});
                        return false;
                    } else {
                        $(obj).removeAttr('checked');
                        layer.alert(res.msg, {icon: 2, title:false});
                        return false;
                    }
                }
            },
            error: function(e){
                showErrorMsg(e.responseText);
                $(obj).removeAttr('checked');
                return false;
            }
        });
    }

    function mobile(source, obj) {
        $.ajax({
            url: "<?php echo url('Member/ajax_users_config_mobile'); ?>",
            type: 'GET',
            dataType: 'JSON',
            data: {_ajax:1},
            success: function(res){
                if (res.code == 0) {
                    if (1 == source) {
                        $("input[name='users[users_verification]'][value=0]").attr("checked", "checked");
                        layer.alert(res.msg, {icon: 2, title:false});
                        return false;
                    } else {
                        $(obj).removeAttr('checked');
                        layer.alert(res.msg, {icon: 2, title:false});
                        return false;
                    }
                }
            },
            error: function(e){
                showErrorMsg(e.responseText);
                $(obj).removeAttr('checked');
                return false;
            }
        });
    }

    function menu_index()
    {
        var url = "<?php echo url('Member/ajax_menu_index'); ?>";
        //iframe窗
        layer.open({
            type: 2,
            title: '前台会员中心左侧菜单',
            fixed: true, //不固定
            shadeClose: false,
            shade: layer_shade,
            maxmin: true, //开启最大化最小化按钮
            area: ['90%', '90%'],
            content: url
        });
    }

    function bottom_menu_index()
    {
        var url = "<?php echo url('Member/ajax_bottom_menu_index'); ?>";
        //iframe窗
        layer.open({
            type: 2,
            title: '前台会员中心手机端底部菜单',
            fixed: true, //不固定
            shadeClose: false,
            shade: layer_shade,
            maxmin: true, //开启最大化最小化按钮
            area: ['90%', '90%'],
            content: url
        });
    }

    function usersset(){
        var users_open_release = <?php echo (isset($userConfig['users_open_release']) && ($userConfig['users_open_release'] !== '')?$userConfig['users_open_release']:0); ?>;

        // 前台登录超时
        var users_login_expiretime_obj = $('#users_login_expiretime');
        if (users_login_expiretime_obj.val() < 60) {
            showErrorMsg('前台登录超时不能少于60秒！');
            users_login_expiretime_obj.focus();
            return false;
        }

        layer_loading('正在处理');
        $.ajax({
            type : 'post',
            url : "<?php echo url('Member/users_config', ['_ajax'=>1]); ?>",
            data : $('#postForm').serialize(),
            dataType : 'json',
            success : function(res){
                if(res.code == 1){
                    var php_servicemeal = <?php echo (isset($php_servicemeal) && ($php_servicemeal !== '')?$php_servicemeal:0); ?>;
                    if (1 == users_open_release && php_servicemeal > 0) {
                        saveReleaseConf(res.msg);
                    } else {
                        layer.closeAll();
                        layer.msg(res.msg, {shade: layer_shade, time: 1000}, function(){
                            window.location.reload();
                        });
                    }
                }else{
                    layer.closeAll();
                    showErrorAlert(res.msg);
                }
            },
            error: function(e){
                layer.closeAll();
                showErrorAlert(e.responseText);
            }
        });
    }

    function saveReleaseConf(msg)
    {
        var is_automatic_review = $("input[name='users[is_automatic_review]']:checked").val();
        var is_open_posts_count = $("input[name='users[is_open_posts_count]']:checked").val();
        var release_typeids = '';
        var k = 0;
        $('select[name^=release_typeids]').each(function(i,o){
            if (k > 0) {
                release_typeids += ',';
            }
            release_typeids += $(o).val();
            k++;
        })
        $.ajax({
            type : 'get',
            url : "<?php echo url('UsersRelease/conf', ['_ajax'=>1]); ?>",
            data : {is_automatic_review:is_automatic_review, is_open_posts_count:is_open_posts_count, release_typeids:release_typeids},
            dataType : 'json',
            success : function(res){
                layer.closeAll();
                if(res.code == 1){
                    layer.msg(res.msg, {shade: layer_shade, time: 1000}, function(){
                        window.location.reload();
                    });
                }else{
                    var msg = res.msg;
                    msg = msg.replace('该功能', '投稿设置');
                    showErrorAlert(msg);
                }
            },
            error: function(e){
                layer.closeAll();
                showErrorAlert(e.responseText);
            }
        });
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
                            shade: layer_shade,
                            title: false,
                            area: ['70%','80%'],
                            btn: ['关闭'] ,//按钮
                            btnAlign:'r',

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