<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:52:"./application/admin/template/field\channel_index.htm";i:1686877574;s:58:"E:\APMZ\web12\application\admin\template\public\layout.htm";i:1686877574;s:61:"E:\APMZ\web12\application\admin\template\public\theme_css.htm";i:1680508820;s:60:"E:\APMZ\web12\application\admin\template\channeltype\bar.htm";i:1680508820;s:56:"E:\APMZ\web12\application\admin\template\public\page.htm";i:1655708909;s:58:"E:\APMZ\web12\application\admin\template\public\footer.htm";i:1680508820;}*/ ?>
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
    <?php if(!(empty($channel_id) || (($channel_id instanceof \think\Collection || $channel_id instanceof \think\Paginator ) && $channel_id->isEmpty()))): ?>
    <div class="fixed-bar">
        <div class="item-title">
            <a class="back_xin" href="<?php echo url('Channeltype/index'); ?>"  title="返回"><i class="iconfont e-fanhui"></i></a>
            <div class="subject">
                <h3><?php echo (isset($channeltype_row[$channel_id]['ntitle']) && ($channeltype_row[$channel_id]['ntitle'] !== '')?$channeltype_row[$channel_id]['ntitle']:'无'); ?>字段</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="<?php echo url('Channeltype/edit', ['id'=>$channel_id]); ?>" <?php if(\think\Request::instance()->action() == 'edit'): ?>class="current"<?php endif; ?>><span>模型编辑</span></a></li>
                <li><a href="<?php echo url('Field/channel_index', ['channel_id'=>$channel_id]); ?>" <?php if(\think\Request::instance()->action() == 'channel_index'): ?>class="current"<?php endif; ?>><span>字段管理</span></a></li>
            </ul>
        </div>
    </div>
    <?php else: ?>
    <!-- 全部模型字段管理 -->
    <div class="fixed-bar">
    <div class="item-title">
        <a class="back_xin" href="<?php echo url('Index/switch_map'); ?>" title="返回"><i class="iconfont e-fanhui"></i></a>
        <div class="subject">
            <h3>频道模型</h3>
            <h5></h5>
        </div>
        <ul class="tab-base nc-row">
            <li><a href="<?php echo url('Channeltype/index'); ?>" <?php if(\think\Request::instance()->action() == 'index'): ?>class="current"<?php endif; ?>><span>模型管理</span></a></li>
            <li><a href="<?php echo url('Field/channel_index'); ?>" <?php if(\think\Request::instance()->action() == 'channel_index'): ?>class="current"<?php endif; ?>><span>字段管理</span></a></li>
        </ul>
    </div>
</div>
    <?php endif; ?>
    <div class="flexigrid">
        <div class="mDiv pt0">
            <div class="ftitle">
				<?php if(is_check_access(CONTROLLER_NAME.'@channel_add') == '1'): ?>
				<div class="fbutton">
                    <a href="javascript:void(0);" <?php if(!(empty($channel_id) || (($channel_id instanceof \think\Collection || $channel_id instanceof \think\Paginator ) && $channel_id->isEmpty()))): ?> data-href="<?php echo url('Field/channel_add', array('channel_id'=>$channel_id)); ?>" <?php else: ?> data-href="<?php echo url('Field/channel_add', array('type'=>'all')); ?>" <?php endif; ?> onclick="openFullframe(this, '新增字段', '100%', '100%');">
				        <div class="add">
				            <span><i class="layui-icon layui-icon-addition"></i>新增字段</span>
				        </div>
				    </a>
				</div>
				<?php endif; ?>
            </div>
            <form id="searchForm" class="navbar-form form-inline" action="<?php echo url('Field/channel_index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <div class="sDiv2">  
                        <select id="select_channel" class="select" style="margin:0px 5px;">
                            <option value="">--全部模型--</option>
                            <?php if(is_array($channeltype_row) || $channeltype_row instanceof \think\Collection || $channeltype_row instanceof \think\Paginator): $i = 0; $__LIST__ = $channeltype_row;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>" <?php if($channel_id == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['title']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <div class="sDiv2">
                        <input type="hidden" name="searchopt" value="1">
                        <input type="hidden" name="channel_id" id="channel_id" value="<?php echo (isset($channel_id) && ($channel_id !== '')?$channel_id:'1'); ?>">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="标题/名称搜索...">
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
                        <th abbr="article_title" axis="col3" class="w50">
                            <div class="tc">ID</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="">
                            <div class="text-l10">字段标题</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w160">
                            <div class="tc">所属模型</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w160">
                            <div class="tc">字段名称</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w120">
                            <div class="tc">字段类型</div>
                        </th>
                        <!-- <th abbr="article_time" axis="col6" class="w70">
                            <div class="tc">字段分类</div>
                        </th> -->
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">更新时间</div>
                        </th>
                        <th axis="col1" class="w220">
                            <div class="tc">操作</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w60">
                            <div class="tc">排序</div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%;">
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
                            <td class="sort">
                                <div class="tc w50">
                                    <?php if($pager->nowPage > 1): ?>
                                        <?php echo $pager->listRows * ($pager->nowPage-1) + $k+1; else: ?>
                                        <?php echo $k+1; endif; ?>
                                </div>
                            </td>
                            <td style="width: 100%">
                                <div class="text-l10">
                                <?php if(($vo['ifsystem'] == 1) OR (1 == $vo['ifmain'])): ?>
                                    <?php echo $vo['title']; else: if(is_check_access(CONTROLLER_NAME.'@channel_edit') == '1'): ?>
                                    <a href="javascript:void(0);" <?php if(!(empty($channel_id) || (($channel_id instanceof \think\Collection || $channel_id instanceof \think\Paginator ) && $channel_id->isEmpty()))): ?> data-href="<?php echo url('Field/channel_edit',array('channel_id'=>$vo['channel_id'],'id'=>$vo['id'])); ?>" <?php else: ?> data-href="<?php echo url('Field/channel_edit',array('channel_id'=>$vo['channel_id'],'id'=>$vo['id'],'type'=>'all')); ?>" <?php endif; ?> onclick="openFullframe(this, '编辑字段', '100%', '100%');"><?php echo $vo['title']; ?></a>
                                    <?php else: ?>
                                    <?php echo $vo['title']; endif; endif; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w160 tc">
                                    <?php echo $channeltype_list[$vo['channel_id']]['title']; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w160 tc">
                                    <?php echo $vo['name']; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w120 tc">
                                    <?php echo (isset($fieldtypeList[$vo['dtype']]['title']) && ($fieldtypeList[$vo['dtype']]['title'] !== '')?$fieldtypeList[$vo['dtype']]['title']:'数据错误'); ?>
                                </div>
                            </td>
                            <!-- <td>
                                <div class="tc w70">
                                    <?php if(($vo['ifsystem'] == 1) OR (1 == $vo['ifmain'])): ?>
                                        系统
                                    <?php else: ?>
                                        自定义
                                    <?php endif; ?>
                                </div>
                            </td> -->
                            <td>
                                <div class="w100 tc">
                                    <?php echo date('Y-m-d',$vo['update_time']); ?>
                                </div>
                            </td>
                            <td  class="operation">
                                <div class="w220 tc">
                                <?php if(is_check_access('Field@ajax_channel_show') == '1'): if($vo['ifcontrol'] == 1): ?>
                                <a class="btn grey"  href="javascript:void(0);" data-id="<?php echo $vo['id']; ?>" data-ifeditable="<?php if($vo['ifeditable'] == '1'): ?>0<?php else: ?>1<?php endif; ?>"><?php if($vo['ifeditable'] == 1): ?>隐藏<?php else: ?>显示<?php endif; ?></a>
                                <?php else: ?>
                                <a class="btn blue"  href="javascript:void(0);" data-url="<?php echo url('Field/ajax_channel_show'); ?>" data-id="<?php echo $vo['id']; ?>" data-ifeditable="<?php if($vo['ifeditable'] == '1'): ?>0<?php else: ?>1<?php endif; ?>" onClick="handleShow(this);"><?php if($vo['ifeditable'] == 1): ?>隐藏<?php else: ?>显示<?php endif; ?></a>
                                <?php endif; endif; ?>
								<i></i>
                                <?php if(($vo['ifsystem'] == 1) OR (1 == $vo['ifmain'])): if(is_check_access(CONTROLLER_NAME.'@channel_edit') == '1'): ?>
                                    <a href="javascript:void(0);" class="btn grey">编辑</a>
                                    <?php endif; ?>
									<i></i>
                                    <?php if(is_check_access(CONTROLLER_NAME.'@channel_del') == '1'): ?>
                                    <a class="btn grey"  href="javascript:void(0);"  data-id="<?php echo $vo['id']; ?>">删除</a>
                                    <?php endif; else: if(is_check_access(CONTROLLER_NAME.'@channel_edit') == '1'): ?>
                                    <a href="javascript:void(0);" <?php if(!(empty($channel_id) || (($channel_id instanceof \think\Collection || $channel_id instanceof \think\Paginator ) && $channel_id->isEmpty()))): ?> data-href="<?php echo url('Field/channel_edit',array('channel_id'=>$vo['channel_id'],'id'=>$vo['id'])); ?>" <?php else: ?> data-href="<?php echo url('Field/channel_edit',array('channel_id'=>$vo['channel_id'],'id'=>$vo['id'],'type'=>'all')); ?>" <?php endif; ?> class="btn blue" onclick="openFullframe(this, '编辑字段', '100%', '100%');">编辑</a>
                                    <?php endif; ?>
									<i></i>
                                    <?php if(is_check_access(CONTROLLER_NAME.'@channel_del') == '1'): ?>
                                    <a class="btn red"  href="javascript:void(0);" data-url="<?php echo url('Field/channel_del', array('channel_id'=>$vo['channel_id'])); ?>" data-id="<?php echo $vo['id']; ?>" onClick="delfun(this);">删除</a>
                                    <?php endif; endif; ?>
								<i></i>
                                <a class="btn blue" href="javascript:void(0);" data-name="<?php echo $vo['name']; ?>" data-channel_id="<?php echo (isset($vo['channel_id']) && ($vo['channel_id'] !== '')?$vo['channel_id']:'0'); ?>" data-dtype="<?php echo $vo['dtype']; ?>" data-ifmain="<?php echo $vo['ifmain']; ?>" data-is_screening="<?php echo $vo['is_screening']; ?>" onclick="copyToClipBoard(this)">标签调用</a>
                                </div>
                            </td>
                            <td class="sort">
                                <div class="w60 tc">
                                <?php if(empty($vo['ifmain'])): if(is_check_access(CONTROLLER_NAME.'@channel_edit') == '1'): ?>
                                    <input class="tc" onchange="changeTableVal('channelfield','id','<?php echo $vo['id']; ?>','sort_order',this);"  size="4"  value="<?php echo $vo['sort_order']; ?>" />
                                    <?php else: ?>
                                    <?php echo $vo['sort_order']; endif; else: ?>
                                    ———
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
        <div class="tDiv">
            <div class="tDiv2">
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
<script type="text/javascript">
    $(document).ready(function(){

        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        /*模型下拉框跳转*/
        $('#select_channel').change(function(){
            var channel_id = $(this).val();
            var url = "<?php echo url('Field/channel_index'); ?>";
            if (url.indexOf('?') > -1) {
                url += '&';
            } else {
                url += '?';
            }
            url += 'channel_id='+channel_id;
            layer_loading('正在处理');
            window.location.href = url;
        });
        /*--end*/
    });

    function delfun(obj){
      var title = $(obj).attr('data-typename');
      layer.confirm('确认删除？', {
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

    /**
     * 标签调用js
     * @param string  fieldname 字段名称
     * @param intval  channel_id 模型ID
     */
    function copyToClipBoard(obj) {
        var fieldname = $(obj).attr('data-name');
        var channel_id = $(obj).attr('data-channel_id');
        var dtype = $(obj).attr('data-dtype');
        var ifmain = $(obj).attr('data-ifmain');
        var is_screening = $(obj).attr('data-is_screening');
        var height = '280px';
        var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px;">';
        if (6 == channel_id) {
            switch(dtype)
            {
                case 'imgs':
                    {
                        height = '400px';
                        var viewstr = "{eyou:diyfield type='"+dtype+"' id='"+fieldname+"' name='$"+"eyou.field."+fieldname+"'}\r\n    <img src='{$"+fieldname+".image_url}' />\r\n    注释：{$"+fieldname+".intro}\r\n{/eyou:diyfield";
                        contentdiv += '<dd>列表/内容页：</dd>';
                        contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:80px;">' + viewstr + '}</textarea></dd>';
                        var liststr = "{eyou:type typeid='栏目ID' id='eyoav' addfields='"+fieldname+"'}\r\n    {eyou:diyfield type='"+dtype+"' id='"+fieldname+"' name='$"+"eyoav."+fieldname+"'}\r\n        <img src='{$"+fieldname+".image_url}' />\r\n        注释：{$"+fieldname+".intro}\r\n    {/eyou:diyfield"+"}\r\n{/eyou:type";
                        contentdiv += '<dd>标签 arclist / list 内调用 <font color="red">(更多简洁调法请参考标签 arclist /list)</font>：</dd>';
                        contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:120px;">' + liststr + '}</textarea></dd>';
                    }
                    break;

                case 'checkbox':
                    {
                        height = '400px';
                        var viewstr = "{eyou:diyfield type='"+dtype+"' id='"+fieldname+"' name='$"+"eyou.field."+fieldname+"'}\r\n    {$"+fieldname+".value}\r\n{/eyou:diyfield";
                        contentdiv += '<dd>列表/内容页：</dd>';
                        contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:60px;">' + viewstr + '}</textarea></dd>';
                        var liststr = "{eyou:type typeid='栏目ID' id='eyoav' addfields='"+fieldname+"'}\r\n    {eyou:diyfield type='"+dtype+"' id='"+fieldname+"' name='$"+"eyoav."+fieldname+"'}\r\n        {$"+fieldname+".value}\r\n    {/eyou:diyfield"+"}\r\n{/eyou:type";
                        contentdiv += '<dd>标签 arclist / list 内调用 <font color="red">(更多简洁调法请参考标签 arclist /list)</font>：</dd>';
                        contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:120px;">' + liststr + '}</textarea></dd>';
                    }
                    break;

                case 'datetime':
                    {
                        contentdiv += '<dd>列表/内容页：</dd>';
                        contentdiv += '<dd><input type="text" style=" width:470px;margin-bottom:10px;" value="{$'+'eyou.field.'+fieldname+'|MyDate=\'Y-m-d H:i:s\',###}"></dd>';
                        var liststr = "{eyou:type typeid='栏目ID' addfields='"+fieldname+"'}\r\n    {$"+"field."+fieldname+"|MyDate=\'Y-m-d H:i:s\',###}\r\n{/eyou:type";
                        contentdiv += '<dd>标签 type 属性 addfields 调用：</dd>';
                        contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:60px;">' + liststr + '}</textarea></dd>';
                    }
                    break;

                default:
                    {
                        contentdiv += '<dd>列表/内容页：</dd>';
                        contentdiv += '<dd><input type="text" style=" width:470px;margin-bottom:10px;" value="{$'+'eyou.field.'+fieldname+'}"></dd>';
                        var liststr = "{eyou:type typeid='栏目ID' addfields='"+fieldname+"'}\r\n    {$"+"field."+fieldname+"}\r\n{/eyou:type";
                        contentdiv += '<dd>标签 type 属性 addfields 调用：</dd>';
                        contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:60px;">' + liststr + '}</textarea></dd>';
                    }
                    break;
            }

        } else {
            switch(dtype)
            {
                case 'imgs':
                    {
                        height = '400px';
                        var viewstr = "{eyou:diyfield type='"+dtype+"' id='"+fieldname+"' name='$"+"eyou.field."+fieldname+"'}\r\n    <img src='{$"+fieldname+".image_url}' />\r\n    注释：{$"+fieldname+".intro}\r\n{/eyou:diyfield";
                        contentdiv += '<dd>内容页：</dd>';
                        contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:80px;">' + viewstr + '}</textarea></dd>';
                        var liststr = "{eyou:arcview aid='$"+"field.aid' id='eyoav' addfields='"+fieldname+"'}\r\n    {eyou:diyfield type='"+dtype+"' id='"+fieldname+"' name='$"+"eyoav."+fieldname+"'}\r\n        <img src='{$"+fieldname+".image_url}' />\r\n        注释：{$"+fieldname+".intro}\r\n    {/eyou:diyfield"+"}\r\n{/eyou:arcview";
                        contentdiv += '<dd>标签 arclist / list 内调用 <font color="red">(更多简洁调法请参考标签 arclist /list)</font>：</dd>';
                        contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:120px;">' + liststr + '}</textarea></dd>';
                    }
                    break;

                case 'checkbox':
                    {
                        height = '430px';
                        var viewstr = "{eyou:diyfield type='"+dtype+"' id='"+fieldname+"' name='$"+"eyou.field."+fieldname+"'}\r\n    {$"+fieldname+".value}\r\n{/eyou:diyfield";
                        contentdiv += '<dd>内容页：</dd>';
                        contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:60px;">' + viewstr + '}</textarea></dd>';
                        var liststr = "{eyou:arcview aid='$"+"field.aid' id='eyoav' addfields='"+fieldname+"'}\r\n    {eyou:diyfield type='"+dtype+"' id='"+fieldname+"' name='$"+"eyoav."+fieldname+"'}\r\n        {$"+fieldname+".value}\r\n    {/eyou:diyfield"+"}\r\n{/eyou:arcview";
                        contentdiv += '<dd>标签 arclist / list 内调用 <font color="red">(更多简洁调法请参考标签 arclist /list)</font>：</dd>';
                        contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:120px;">' + liststr + '}</textarea></dd>';
                        if (1 == is_screening) {
                            contentdiv += '<dd style="color: red;">自定义字段应用于条件筛选，请参考标签用法：<a id="call_tags_help" href="JavaScript:void(0);" onclick="click_to_eyou_1575506523('+"'https://www.eyoucms.com/plus/view.php?aid=7881&origin_eycms=1','筛选标签调用'"+')">查看标签调用</a></dd>';
                        }
                    }
                    break;

                case 'datetime':
                    {
                        contentdiv += '<dd>内容页：</dd>';
                        contentdiv += '<dd><input type="text" style=" width:470px;margin-bottom:10px;" value="{$'+'eyou.field.'+fieldname+'|MyDate=\'Y-m-d H:i:s\',###}"></dd>';
                        var liststr = "{eyou:arcview aid='$"+"field.aid' id='eyoav' addfields='"+fieldname+"'}\r\n    {$"+"eyoav."+fieldname+"|MyDate=\'Y-m-d H:i:s\',###}\r\n{/eyou:arcview";
                        contentdiv += '<dd>标签 arclist / list 内调用 <font color="red">(更多简洁调法请参考标签 arclist /list)</font>：</dd>';
                        contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:60px;">' + liststr + '}</textarea></dd>';
                    }
                    break;

                case 'htmltext':
                    {
                        contentdiv += '<dd>内容页：</dd>';
                        contentdiv += '<dd><input type="text" style=" width:470px;margin-bottom:10px;" value="{$'+'eyou.field.'+fieldname+'}"></dd>';
                        if (1 == ifmain) {
                            contentdiv += '<dd>标签 arclist / list 内调用：</dd>';
                            contentdiv += '<dd><input type="text" style=" width:470px;margin-bottom:10px;" value="{$'+'field.'+fieldname+'}"></dd>';
                        } else {
                            var liststr = "eyou:field aid='$"+"field.aid' addfields='"+fieldname+"|html_msubstr=###,0,150,true' /";
                            contentdiv += '<dd>标签 arclist / list 内调用：</dd>';
                            contentdiv += '<dd><input type="text" style=" width:470px;margin-bottom:10px;" value="{'+liststr+'}"></dd>';
                        }
                        if (1 == is_screening) {
                            contentdiv += '<dd style="color: red;">自定义字段应用于条件筛选，请参考标签用法：<a id="call_tags_help" href="https://www.eyoucms.com/plus/view.php?aid=7881&origin_eycms=1" target="_blank">查看标签调用</a></dd>';
                        }
                    }
                    break;

                default:
                    {
                        contentdiv += '<dd>内容页：</dd>';
                        contentdiv += '<dd><input type="text" style=" width:470px;margin-bottom:10px;" value="{$'+'eyou.field.'+fieldname+'}"></dd>';
                        if (1 == ifmain) {
                            contentdiv += '<dd>标签 arclist / list 内调用：</dd>';
                            contentdiv += '<dd><input type="text" style=" width:470px;margin-bottom:10px;" value="{$'+'field.'+fieldname+'}"></dd>';
                        } else {
                            var liststr = "eyou:field aid='$"+"field.aid' addfields='"+fieldname+"' /";
                            contentdiv += '<dd>标签 arclist / list 内调用：</dd>';
                            contentdiv += '<dd><input type="text" style=" width:470px;margin-bottom:10px;" value="{'+liststr+'}"></dd>';
                        }
                        if (1 == is_screening) {
                            contentdiv += '<dd style="color: red;">自定义字段应用于条件筛选，请参考标签用法：<a id="call_tags_help" href="https://www.eyoucms.com/plus/view.php?aid=7881&origin_eycms=1" target="_blank">查看标签调用</a></dd>';
                        }
                    }
                    break;
            }
        }
        contentdiv += '<dd style="border-top: dotted 1px #E7E7E7; color: #F60;">请将相应标签复制并粘贴到对应模板文件中！</dd></dl></div>'
        layer.open({
            shade: layer_shade,
            title: '标签调用',
            type: 1,
            skin: 'layui-layer-demo',
            area: ['550px', height], //宽高
            content: contentdiv
        });
    }

    function handleShow(obj){
        $.ajax({
            type : 'post',
            url : $(obj).attr('data-url'),
            data : {id:$(obj).attr('data-id'),ifeditable:$(obj).attr('data-ifeditable'), _ajax:1},
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