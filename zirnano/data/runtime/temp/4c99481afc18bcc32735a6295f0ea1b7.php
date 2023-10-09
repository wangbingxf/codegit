<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:51:"./application/admin/template/member\level_index.htm";i:1680508820;s:58:"E:\APMZ\web12\application\admin\template\public\layout.htm";i:1686877574;s:61:"E:\APMZ\web12\application\admin\template\public\theme_css.htm";i:1680508820;s:56:"E:\APMZ\web12\application\admin\template\member\left.htm";i:1680508820;s:56:"E:\APMZ\web12\application\admin\template\public\page.htm";i:1655708909;s:58:"E:\APMZ\web12\application\admin\template\public\footer.htm";i:1680508820;}*/ ?>
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
<body class="bodystyle" style="cursor: default; -moz-user-select: inherit; height: calc( 100% - 40px );">
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
                <?php if(is_check_access('Member@level_index') == '1'): ?>
                <li>
                    <a <?php if(in_array(\think\Request::instance()->action(), ['level_index','level_add','level_edit'])): ?>class="current"<?php endif; ?> href='<?php echo url("Member/level_index"); ?>'>
                        <span>会员级别</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div> -->
    <div class="flexigrid">
        <!-- 操作说明 -->
        <div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); width: 99%; height: 100%;">
            <div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>
                <h4 title="提示相关设置操作时应注意的要点">提示</h4>
                <span title="收起提示" id="explanationZoom" style="display: block;"></span>
            </div>
            <ul>
                <li>等级值越高权根越高</li>
            </ul>
        </div>
        <br/>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="sign w20 none" axis="col0">
                            <div class="tc"></div>
                        </th>
                        <th abbr="ac_id" axis="col4">
                            <div style="padding-left: 15px;">级别名称</div>
                        </th>
                        <th abbr="article_time" axis="col4" class="w160">
                            <div class="tc">会员等级值</div>
                        </th>
                        <?php if($isShowDownCount == '1'): ?>
                        <th abbr="article_time" axis="col4" class="w100">
                            <div class="tc">下载次数(天)</div>
                        </th>
                        <?php endif; ?>
                        <th abbr="article_time" axis="col4" class="w160">
                            <div class="tc">折扣率(%)</div>
                        </th>
                        <th axis="col1" class="w150">
                            <div class="tc">操作</div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto; min-height: auto;">
            <form id="PostForm">
                <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                    <table style="width: 100%">
                        <tbody id="Template">
                        <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                            <tr>
                                <div class="">
                                    <div class="no_pic"><img src="/public/static/admin/images/null-data.png"></div>
                                </div>
                            </tr>
                        <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                            <tr class="tr">
                                <td class="sign none">
                                    <div class="w20 tc">
                                        <input type="hidden" name="level_id[]" value="<?php echo $vo['level_id']; ?>">
                                    </div>
                                </td>
                                <td style="width: 100%">
                                    <div style="padding-left: 10px;">
                                        <?php if(is_check_access('Member@level_add') == '1'): ?>
                                            <input type="text" name="level_name[]" value="<?php echo $vo['level_name']; ?>" class="w180">
                                        <?php else: ?>
                                            <?php echo $vo['level_name']; endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="w160 tc">
                                        <?php if(is_check_access('Member@level_add') == '1'): ?>
                                            <input type="text" name="level_value[]" value="<?php echo $vo['level_value']; ?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="tc w80">
                                        <?php else: ?>
                                            <?php echo $vo['level_value']; endif; ?>
                                    </div>
                                </td>
                                <?php if($isShowDownCount == '1'): ?>
                                <td>
                                    <div class="w100 tc">
                                        <?php if(is_check_access('Member@level_add') == '1'): ?>
                                            <input type="text" name="down_count[]" value="<?php echo $vo['down_count']; ?>" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'')" class="tc w80">
                                        <?php else: ?>
                                            <?php echo $vo['down_count']; endif; ?>
                                    </div>
                                </td>
                                <?php endif; ?>
                                <td>
                                    <div class="w160 tc">
                                        <?php if(is_check_access('Member@level_add') == '1'): ?>
                                            <input type="text" name="discount[]" value="<?php echo $vo['discount']; ?>" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'')" class="tc w80">
                                        <?php else: ?>
                                            <?php echo $vo['discount']; endif; ?>
                                    </div>
                                </td>
                                <td  class="operation">
                                    <div class="w150 tc">
                                        <?php if(is_check_access('Member@level_del') == '1'): ?>
                                            <!-- 判断是否属于系统定义级别，0为会员级别 -->
                                            <?php if($vo['is_system'] == '0'): ?>  
                                                <!-- 判断是否级别下是否存在会员，是否可以删除。0可删除 -->
                                                <?php if(empty($levelgroup[$vo['level_id']])): ?>
                                                    <a class="btn red"  href="javascript:void(0);" data-url="<?php echo url('Member/level_del'); ?>" data-level_name="<?php echo $vo['level_name']; ?>" data-id="<?php echo $vo['level_id']; ?>" onClick="usersdel(this);">删除</a>
                                                <?php else: ?>
                                                    正在使用
                                                <?php endif; else: ?>
                                                系统内置
                                            <?php endif; endif; ?>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        </tbody>
                    </table>
                </div>
            </form>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div class="footer-oper">
            <?php if(is_check_access(CONTROLLER_NAME.'@level_add') == '1'): ?>
			
			<div class="fbutton">
                <a href="javascript:void(0);" data-url="<?php echo url('Member/level_add', ['_ajax'=>1]); ?>" onclick="AddLevelData(this);" class="layui-btn layui-btn-primary">
                    <span class="">保存</span>
                </a>
            </div>
			
            <div class="fbutton">
                <a href="javascript:void(0);" onclick="AddLevelType();" class="layui-btn layui-btn-primary">
                    <span>新增级别</span>
                </a>
            </div>
            
            
            <?php endif; if(is_check_access('Level@index') == '1'): ?>
            <div class="fbutton">
                <a href="javascript:void(0);" data-href="<?php echo U('Level/index'); ?>" onclick="openFullframe(this, '升级套餐管理', '80%', '80%');" class="layui-btn layui-btn-primary">
                    <span class="red">升级套餐管理</span>
                </a>
            </div>
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
        </div>
        <div style="clear:both"></div>
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
    });

    // tr数,取唯一标识
    var tr_id = $('#Template .tr').length;

    function AddLevelType(){
        var isShowDownCount = <?php echo $isShowDownCount; ?>;
        var AddHtml = [];
        AddHtml += 
            '<tr class="tr" id="tr_'+tr_id+'">'+
                '<td class="sign none">'+
                    '<div class="w20 tc"><input type="hidden" name="level_id[]"></div>'+
                '</td>'+

                '<td style="width: 100%">'+
                    '<div style="padding-left: 10px;">'+
                        '<input type="text" name="level_name[]" class="w180">'+
                    '</div>'+
                '</td>'+

                '<td>'+
                    '<div class="w160 tc">'+
                        '<input type="text" name="level_value[]" onkeyup="this.value=this.value.replace(/[^0-9]/g,\'\')" class="tc w80">'+
                    '</div>'+
                '</td>';
        if (isShowDownCount == 1) {
            AddHtml += 
                '<td>'+
                    '<div class="w100 tc">'+
                        '<input type="text" name="down_count[]" class="tc w80" value="100">'+
                    '</div>'+
                '</td>';
        }
        AddHtml += 
                '<td>'+
                    '<div class="w160 tc">'+
                        '<input type="text" name="discount[]" class="tc w80" value="100">'+
                    '</div>'+
                '</td>'+

                '<td class="">'+
                    '<div class="w150 tc">'+
                        '<a class="btn red" href="javascript:void(0);" data-trid="tr_'+tr_id+'" onclick="DelHtml(this)"><i class="fa fa-trash-o"></i>删除</a>'+
                    '</div>'+
                '</td>'+
            '</tr>';
        $('#Template').append(AddHtml);
        tr_id += 1;
    }

    // 删除未保存的级别
    function DelHtml(obj){
        $('#'+$(obj).attr('data-trid')).remove();
    }

    // 提交
    function AddLevelData(obj){
        layer_loading('正在处理');
        $.ajax({
            type : 'post',
            url : $(obj).attr('data-url'),
            data : $('#PostForm').serialize(),
            dataType : 'json',
            success : function(data){
                layer.closeAll();
                if(data.code == 1){
                    layer.msg(data.msg, {icon: 1, time:1000},function(){
                        window.location.reload();
                    });
                }else{
                    layer.alert(data.msg, {icon: 2, title:false});
                }
            }
        })
    }

    // 删除
    function usersdel(obj){
        layer.confirm('确认彻底删除<span style="color:red;">'+$(obj).attr('data-level_name')+'</span>？', {
            shade: layer_shade,
            area: ['480px', '190px'],
            move: false,
            title: '提示',
            btnAlign:'r',
            closeBtn: 3,
            btn: ['确定','取消'] ,//按钮
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