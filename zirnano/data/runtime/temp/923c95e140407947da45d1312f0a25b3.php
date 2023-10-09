<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:50:"./application/admin/template/channeltype\index.htm";i:1686877574;s:58:"E:\APMZ\web12\application\admin\template\public\layout.htm";i:1686877574;s:61:"E:\APMZ\web12\application\admin\template\public\theme_css.htm";i:1680508820;s:60:"E:\APMZ\web12\application\admin\template\channeltype\bar.htm";i:1680508820;s:56:"E:\APMZ\web12\application\admin\template\public\page.htm";i:1655708909;s:58:"E:\APMZ\web12\application\admin\template\public\footer.htm";i:1680508820;}*/ ?>
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
    <div class="flexigrid">
        <div class="mDiv pt0">
            <div class="ftitle">
                <?php if(is_check_access('Channeltype@add') == '1'): ?>
                <div class="fbutton">
                    <a href="javascript:void(0);" data-href="<?php echo url('Channeltype/add'); ?>" onclick="openFullframe(this, '新增模型', '80%', '80%');">
                        <div class="add">
                            <span><i class="layui-icon layui-icon-addition"></i>新增模型</span>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th abbr="article_title" axis="col3" class="w40">
                            <div class="tc">ID</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="">
                            <div class="text-l10">模型名称</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w120">
                            <div class="tc">模型标识</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w80">
                            <div class="tc">字段数</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w50">
                            <div class="tc">启用</div>
                        </th>
                        <th axis="col1" id="th_handle" class="w150">
                            <div class="tc">操作</div>
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
                                <div class="tc w40">
                                    <?php echo $vo['id']; ?>
                                </div>
                            </td>
                            <td class="" style="width: 100%;">
                                <div class="tl text-l10">
                                    <?php if(is_check_access('Channeltype@edit') == '1'): if($vo['nid'] == 'ask'): ?>
                                            <a href="javascript:void(0);" data-href="<?php echo url('Ask/index'); ?>" onclick="openFullframe(this, '问答模型', '100%', '100%');"><?php echo $vo['ntitle']; ?></a>
                                        <?php else: ?>
                                            <a href="<?php echo url('Channeltype/edit',array('id'=>$vo['id'])); ?>" ><?php echo $vo['title']; ?></a>
                                        <?php endif; else: ?>
                                        <?php echo $vo['ntitle']; endif; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w120 tc"><?php echo $vo['nid']; ?></div>
                            </td>
                            <td class="">
                                <div class="w80 tc"><?php echo (isset($channelfieldRow[$vo['id']]['num']) && ($channelfieldRow[$vo['id']]['num'] !== '')?$channelfieldRow[$vo['id']]['num']:'0'); ?></div>
                            </td>
                            <td>
                                <div class="tc w50">
                                <?php if(is_check_access('Channeltype@edit') == '1'): if($vo['status'] == 1): ?>
                                        <span class="yes" data-id="<?php echo $vo['id']; ?>" data-status="<?php if($vo['status'] == '1'): ?>0<?php else: ?>1<?php endif; ?>" data-title="<?php echo $vo['title']; ?>" onClick="handleShow(this);"><i class="fa fa-check-circle"></i>是</span>
                                    <?php else: ?>
                                        <span class="no" data-id="<?php echo $vo['id']; ?>" data-status="<?php if($vo['status'] == '1'): ?>0<?php else: ?>1<?php endif; ?>" data-title="<?php echo $vo['title']; ?>" onClick="handleShow(this);"><i class="fa fa-ban"></i>否</span>
                                    <?php endif; else: if($vo['status'] == 1): ?>是<?php else: ?>否<?php endif; endif; ?>
                                </div>
                            </td>
                            <td class="operation">
                                <div class="tc w150">
                                    <?php if($vo['nid'] == 'ask'): ?>
                                        <a href="javascript:void(0);" data-href="<?php echo url('Ask/index'); ?>" onclick="openFullframe(this, '问答模型', '100%', '100%');" class="btn blue">管理</a>
                                        <i></i>
                                        <a class="btn grey" href="javascript:void(0);">字段</a>
                                    <?php else: if(is_check_access('Channeltype@edit') == '1'): ?>
                                            <a href="<?php echo url('Channeltype/edit',array('id'=>$vo['id'])); ?>" class="btn blue" >编辑</a>
                                        <?php endif; if(is_check_access('Channeltype@edit') == '1'): if($vo['nid'] == 'guestbook'): ?>
                                            <i></i>
                                            <a href="<?php echo url('Field/attribute_index'); ?>" class="btn blue">属性</a>
                                            <?php else: ?>
                                            <i></i>
                                            <a href="<?php echo url('Field/channel_index',array('channel_id'=>$vo['id'])); ?>" class="btn blue">字段</a>
                                            <?php endif; endif; endif; if(empty($vo['ifsystem']) || (($vo['ifsystem'] instanceof \think\Collection || $vo['ifsystem'] instanceof \think\Paginator ) && $vo['ifsystem']->isEmpty())): if(is_check_access('Channeltype@del') == '1'): ?>
                                        <i></i>
                                        <a class="btn red"  href="javascript:void(0);" data-url="<?php echo url('Channeltype/del'); ?>" data-id="<?php echo $vo['id']; ?>" data-deltype="pseudo" onClick="delfun(this);">删除</a>
                                        <?php endif; else: ?>
                                        <i></i>
                                        <a class="btn grey"  href="javascript:void(0);">删除</a>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td align="" class="" style="width: 100%;">
                                <div>&nbsp;</div>
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
            </div>
            <div style="clear:both"></div>
        </div>
        <!--分页位置-->
       
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

    function delfun(obj){
        var title = '<font color="#ff0000">重要提示！</font>';
        layer.confirm('确认删除？此操作将会删除与该模型所有相关的数据且不可恢复。', {
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
                success : function(res){
                    layer.closeAll();
                    if(res.code == 1){
                        layer.msg(res.msg, {icon: 1});
                        window.location.reload();
                    }else{
                        showErrorAlert(res.msg);
                    }
                },
                error:function(e){
                    showErrorAlert(e.responseText);
                }
            })
        }, function(index){
          layer.close(index);
        });
      return false;
    }

    function handleShow(obj){
        var title = $(obj).attr('data-title');
        var channel_id = $(obj).attr('data-id');
        var status = $(obj).attr('data-status');
        $.ajax({
            type : 'post',
            url : "<?php echo url('Channeltype/ajax_show'); ?>",
            data : {id:channel_id,status:status, _ajax:1},
            dataType : 'json',
            success : function(res){

                if (res.code == 1) {

                    if (0 == res.data.confirm) {
                        if (channel_id == 5){
                            if(status == 1){
                                parent.$("#sub-menu").find("#Member_media_index").show();
                            }else{
                                parent.$("#sub-menu").find("#Member_media_index").hide();
                            }
                        }
                        layer.msg(res.msg, {icon: 1, time:500}, function(){
                            window.location.reload();
                        });
                    } else {
                        var confirm = layer.confirm(res.msg, {
                            title: false,
                            btn: ['启用','取消'] //按钮
                        }, function(index){
                            layer.close(index);
                            // 确定
                            if (51 == channel_id) {
                                layer_loading('正在下载');
                                $.ajax({
                                    type : 'post',
                                    url : "<?php echo url('Channeltype/ajax_syn_theme_ask', ['_ajax'=>1]); ?>",
                                    data : {id:channel_id,status:$(obj).attr('data-status'),_ajax:1},
                                    dataType : 'json',
                                    success : function(res){
                                        layer.closeAll();
                                        if(res.code == 1){
                                            layer.msg(res.msg, {icon: 1, time: 500}, function(){
                                                window.location.reload();
                                            });
                                        }else{
                                            var icon = 5;
                                            if (res.data.icon) {icon = res.data.icon;}
                                            layer.alert(res.msg, {icon: icon, title:false, closeBtn:false}, function(){
                                                window.location.reload();
                                            });
                                        }
                                    },
                                    error:function(e){
                                        showErrorAlert(e.responseText);
                                    }
                                })
                            } else {
                                layer_loading('正在处理');
                                $.ajax({
                                    type : 'post',
                                    url : "<?php echo url('Channeltype/ajax_check_tpl'); ?>",
                                    data : {id:channel_id,status:$(obj).attr('data-status'),tpltype:res.data.tpltype, _ajax:1},
                                    dataType : 'json',
                                    success : function(res){
                                        layer.closeAll();
                                        if(res.code == 1){
                                            layer.msg(res.msg, {icon: 1, time: 500}, function(){
                                                window.location.reload();
                                            });
                                        }else{
                                            showErrorAlert(res.msg);
                                        }
                                    },
                                    error:function(e){
                                        showErrorAlert(e.responseText);
                                    }
                                })
                            }
                        });
                    }
                } else {
                    var icon = 5;
                    try {
                        if (res.data.icon) {
                            icon = res.data.icon;
                        }
                    }catch(err){}
                    showErrorAlert(res.msg, icon);
                }
            },
            error:function(e){
                showErrorAlert(e.responseText);
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