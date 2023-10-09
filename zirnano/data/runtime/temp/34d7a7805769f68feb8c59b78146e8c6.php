<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:52:"./application/admin/template/archives\batch_copy.htm";i:1655708908;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>复制文档</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" type="text/css" href="/public/plugins/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="/public/static/common/js/jquery.min.js?t=v1.6.3"></script>
    <script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?t=v1.6.3"></script>
    <script type="text/javascript">
        var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
        var module_name = "<?php echo MODULE_NAME; ?>";
        var __root_dir__ = "";
        var __lang__ = "<?php echo $admin_lang; ?>";
        var __main_lang__ = "<?php echo $main_lang; ?>";
    </script>
    <script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
    <style type="text/css">
        .container-fluid {
            padding: 10px 10px;
            overflow: hidden;
        }
        .control-group {
            padding: 5px 0px;
        }
        .input{
            width: 100px;
        }
        .select {
            height: 28px;
            font-size: 12px;
            border: 1px solid #eee;
			padding: 4px 0;
        }
        .btn{
            background-color: #4fc0e8;
            color: #FFF;
            border-radius: 4px;
            padding: 6px 20px;
        }
        .btn:hover {
            color: #FFF;
            background-color: #3aa8cf;

        }
        .controls{
            margin: 0 auto;
        }
        .notic{
            border:1px dashed #cae9f5;
            border-radius:6px;
            padding: 10px 16px;
            margin-top: 10px;
            background-color:#e7f6fc;
            color: #0d7fca;
        }
        em{
            color: red;
        }
		input[type="text"]{
		    color: #555555;
		    background-color: #FFF;
		    border: solid 1px #eee;
			padding: 4px 6px;
			resize: none;
		}
		input[type="text"]:focus, input[type="text"]:hover, input[type="text"]:active{
			border: 1px solid;
			border-color: rgba(82,168,236,0.8);
			box-shadow: 0 0 0 2px rgba(82, 168, 236, 0.15);
			outline: 0 none;
		}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <form class="form-horizontal" id="post_form" method="POST" action="<?php echo (isset($form_action) && ($form_action !== '')?$form_action:''); ?>" onsubmit="check_submit();">
                    <div class="control-group">
                        <div class="controls">
                            <label class="control-label" for="inputEmail"><em>*</em> 复制到栏目：</label>
                            <select id="typeid" name="typeid" class="select">
                                <?php echo $arctype_html; ?>
                            </select>
                            <input type="hidden" name="aids" id="aids" value="" class="input">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <label class="control-label" for="inputEmail"><em>*</em> 每篇复制数量：</label>
                            <input type="text" name="num" value="5" class="input" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" onpaste="this.value=this.value.replace(/[^\d]/g,'');" autocomplete="off">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <p class="notic">复制到的目标栏目必须和当前模型类型一致，否则程序会自动忽略不符合的文档。</p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls" style="text-align: center;">
							<input type="hidden" name="_ajax" value="1">
							<input type="button" class="btn" value="确认提交" onclick="check_submit();" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var parentObj = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
        $('#aids').val(parent.get_aids());


        function check_submit()
        {
            layer_loading('正在处理');
            $.ajax({
                url: $('#post_form').attr('action'),
                type: 'POST',
                dataType: 'JSON',
                data: $('#post_form').serialize(),
                success: function(res){
                    layer.closeAll();
                    if (res.code == 1) {
                        parent.layer.msg(res.msg, {shade: layer_shade, time: 1000}, function(){
                            parent.window.location.reload();
                            parent.layer.close(parentObj);
                        });
                    } else {
                        layer.alert(res.msg, {icon: 5, title:false});
                    }
                    return false;
                },
                error: function(e){
                    layer.closeAll();
                    layer.alert('操作失败', {icon: 5, title:false});
                    return false;
                }
            });
        }

        /**
         * 封装的加载层
         */
        function layer_loading(msg){
            var loading = layer.msg(
            msg+'...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请勿刷新页面', 
            {
                icon: 1,
                time: 3600000, //1小时后后自动关闭
                shade: [0.2] //0.1透明度的白色背景
            });
            //loading层
            var index = layer.load(3, {
                shade: [0.1,'#fff'] //0.1透明度的白色背景
            });

            return loading;
        }
    </script>
</body>
</html>