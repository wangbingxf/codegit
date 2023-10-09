<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:31:"./template/pc/lists_product.htm";i:1691133747;s:36:"E:\APMZ\web12\template\pc\header.htm";i:1691069279;s:36:"E:\APMZ\web12\template\pc\footer.htm";i:1691068475;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="applicable-device" content="pc,mobile" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta name='viewport' content='width=1440' />
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/all.css" rel="stylesheet" type="text/css" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/r.css" rel="stylesheet" type="text/css" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/home.css" rel="stylesheet" type="text/css" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/products_lsit.css" rel="stylesheet" type="text/css" />
<meta name='viewport' content='width=1440' />
<meta http-equiv="Cache-Control" content="no-transform" />
<script type="text/javascript">
    window.siteIsPc=true;
    window.foreignList= [];
    window.tenant = {"cdnFlag":"2","createTime":null,"domain":"","domainInfo":null,"foreign":true,"id":220339,"language":"zh_CN","mobileDomain":"","mobileStatus":8,"status":6,"templateCode":"global_site_standard","tenantCode":"100001_2011275283","unittype":"100001","verify":"dc5208d213d5fc676cd5f21085b296fa","mverify":"da20d96bfa310ebf5bcb4a0194e4e793"};
    window.upgradeVersion="b142bf0401dd43ce7abb2bea2b370c8b";
    var isxinnet = "false";
    window.noredirectCookieName = "_noredirect";
    var visittrack_siteId = "100001_2011275283";
    var visittrack_url = "";
    var gatherScripts = "";
    var unittype=window.tenant.unittype ;
    window.globalObj={};
    window.globalObj.isOpenSSL = true;
</script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/all.js"></script>
<link type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/swiper.min.css" rel="stylesheet" />
<link type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/ys.css" rel="stylesheet"/>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/swiper.min.js"></script>
<!--[if lt IE 9]> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/html5shiv.min.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/respond.js"></script>
<![endif]-->
</head>
<body data-pageid="b5b57759-d0bb-4bf5-b545-04b724519574" data-layout="flow" data-tmplid="fe7d153b-602f-457a-9181-2b1b671cf38f">
	<div class="main pagebox"><div id="c_portalResnav_main-16048453281381729" class="c_portalResnav_main-01001014"> 
	<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/dh.js"></script>
	<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/dh2.js"></script>
<!-- PC导航 -->
<div class="pc_nav">
<header class="header1">
	<div class="header-left f-cb">
		<h1 class="fl">
			<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>">
				<img class="img1" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>"/>
			</a>
		</h1>
		<div class="head_lan">
		  <div class="lan_con">
			<div class="lan_tit">
			  <i class="iconfont map"></i>
			  <span><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></span>
			</div>
		  </div>
		</div>
		<nav class="fr">
			<ul class="f-cb1">
				<li class="hvr-left subnav2 js-m js-m-2">
					<a class="home-dec" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:4:"sys1";}'); echo $__VALUE__; ?></a>
				</li>
				<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
				<li class="hvr-left subnav2 js-m js-m-2">
					<a class="home-dec" href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a>
				</li>
				<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
				<li class="hvr-left subnav2 js-m js-m-2">
					<?php  $tagLanguage = new \think\template\taglib\eyou\TagLanguage; $_result = $tagLanguage->getLanguage("default", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
					<a class="home-dec" href="<?php echo $field['url']; ?>"><?php echo $field['title']; ?></a>
					<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
				</li>
			</ul>
		</nav>
	</div>
</header>
  </div>
<!--PC导航结束-->
<!--MO导航-->
<div class="header2">
	<div class="main-wrap f-cb">
		<h1 class="logo fl">
			<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>">
				<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>"/>
			</a>
		</h1>
		<div class="nav-btn fr">
			<span class="line line1"></span>
			<span class="line line2"></span>
			<span class="line line3"></span>
		</div>
	</div>
	<div class="sub-menu">
		<ul>
			<li class="js-m-3">
				<a class="tit sub-tit" href="/"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:4:"sys1";}'); echo $__VALUE__; ?></a>
           	</li>
			<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>				
			<li class="js-m-3">
				<a class="tit sub-tit" href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a>
           	</li>
			<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
			
			<li class="js-m-3">
				<?php  $tagLanguage = new \think\template\taglib\eyou\TagLanguage; $_result = $tagLanguage->getLanguage("default", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
				<a class="tit sub-tit" href="<?php echo $field['url']; ?>"><?php echo $field['title']; ?></a>
				<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
           	</li>
			<li class="js-m-3 animate">
				<div class="mo_tel"><i class="iconfont"></i><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:7:"hotline";}'); echo $__VALUE__; ?>：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></div>
			</li>
		</ul>
	</div>
</div>
<div class="search-bg"></div>
<!--MO导航结束-->
<script>
	$(function () {
       var _li =$('.header2 .sub-menu ul').children('.js-m-3');
       _li.each(function(i, e) {
           $(this).addClass('delay0'+(i+1));
       });
	  $(".mobile-nav-click a").on("click",function(){
			$(".header2 .nav-btn").removeClass('hover');
		    $(".header2 .nav-btn").removeClass('active');
		    $(".header2 .nav-btn").children('.line1').stop(true,true).transition({rotate: 0}, 300);
		    $(".header2 .nav-btn").children('.line2').stop(true,true).fadeIn(300);
		    $(".header2 .nav-btn").children('.line3').stop(true,true).transition({rotate: 0}, 300);
		    $(".header2 .nav-btn").parent(".main-wrap").siblings('.sub-menu').stop().fadeOut();
		    $("header .list-cont").removeClass('active');
		    $("body,html").stop(true,true).removeClass('ovh-f');
		    $(".search-bg").stop(true,true).fadeOut();
		    $(".header2").removeClass('active');
		    $(".sub-menu li").removeClass("animate");
		    var target = $(this).attr('href');
	        var target_top = $(target).offset().top;
	        $('html,body').animate({
	            scrollTop : target_top
	        },600, 'easeInOutQuad');
	        return false;
		})
      	$(window).scroll(function(){
        if ($(window).scrollTop() > 0) {
            $(".header1").addClass("active");
        }else{
            $(".header1").removeClass("active");
        }
	  })
$(".header2 .sub-menu .js-m-3").click(function () {
	$(this).children("div.sec-list").slideToggle('slow').end().find('.jt')
			.toggleClass('jtRote');
	$(this).siblings('li').children('.sec-list').slideUp('slow').end().find('.jt')
			.removeClass('jtRote');
});
		$(".search-btn").on('click', function () {
			$(".search-alert").addClass("active");
		});
		$(".search-alert .close").on('click', function () {
			$(".search-alert").removeClass("active");
		});
		indexnav();
		function indexnav() {
			$(".header1 .subnav").hover(function () {
				$(".nav").addClass("on");
				var k = $(this).index();
			}, function () {
				$(".pc-sub-nav").stop(true, false).slideUp(300);
				var k = $(this).index();
				$(".pc-sub-nav").hover(function () {
					$(".pc-sub-nav").stop(true, false).slideDown(300);
					$(".subnav").eq(k).addClass("cur").siblings(".subnav").removeClass("cur");
				}, function () {
					$(".subnav").removeClass("cur");
					$(".pc-sub-nav").stop(true, false).slideUp(300);
				});
			})
			$(".header1 .subnav2").hover(function () {
				$(this).find(".nav-sub").addClass("active").parents(".subnav2").siblings().find(".nav-sub").removeClass("active");
			}, function () {
				$(this).find(".nav-sub").removeClass("active");
			})
		}
	})
</script>
<script>$("div[id^='c_']").attr("loaded","true")</script>	
</div>
<div id="w_grid-1577071578786" class="w_grid-000"><div class="w_grid signal">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1577071578786-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_grid-1579414453868" class="w_grid-000" data-tmpleditable="editable"><div class="w_grid signal">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1579414453868-0" class="e_box e_box-000 d_gridCell_0 p_gridCell ND_empty" data-editablecontent="1579414453868"><div id="w_grid-1604931548352" class="w_grid-000"><div class="w_grid signal">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1604931548352-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="c_portalResEbizads_banner-16049315468467228" class="c_portalResEbizads_banner-01001"> 
<div class="e_box  p_banner">
  <div class="bgc_img_box pc_img" style="background-image:url(<?php echo gettoptype($eyou['field']['typeid'],'litpic'); ?>"></div>
  <div class="bgc_img_box mo_img" style="background-image:url(<?php echo gettoptype($eyou['field']['typeid'],'litpic'); ?>"></div>
  <div class="banner_content">
        <h2 class="p_ImgHead"><?php echo gettoptype($eyou['field']['typeid'],'typename'); ?></h2>
            <div class="summary"><?php echo gettoptype($eyou['field']['typeid'],'englist_name'); ?> </div>
      </div>
</div>
<script>
  $(function () {
    var id = "portalResEbizads_banner-16049315468467228"  // 组件ID
    var scp = $compCl.getScope(id)  // 组件实例
    require([
      "wgt_util",
      "wgt_readyload",
    ], function (util, ready) {
      scp.find("img").onErrorImg("/public/img/no-img.svg"); // 处理错误图片
      scp.find('.p_ImgHead').fixLineN(1); // 控制行数
      scp.find('.summary').fixLineN(2); // 控制行数
      ready.lazyImg(); // 图片懒加载
    })
  })
</script>
<input class="requsetParam" type="hidden" value="" />
<input type="hidden" class="requsetParam" value="&pid=0&compId=portalResEbizads_banner-16049315468467228" />
<input type="hidden" class="requsetID" data-ename="可视化配置" value="&columnId=1" />
</div></div>       </div>  </div></div><div id="w_grid-1579425805849" class="w_grid-000"><div class="w_grid signal">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1579425805849-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_grid-1579425805863" class="w_grid-001"><div class="w_grid ">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1579425805863-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_grid-1579425805873" class="w_grid-000"><div class="w_grid signal">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1579425805873-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_common_text-1579425805888" class="reset_style"><div><p><span style="font-size:24px"><span style="color:#FFFFFF"><strong><?php echo gettoptype($eyou['field']['typeid'],'typename'); ?></strong></span></span></p>
</div></div></div>       </div>  </div></div><div id="c_portalResProduct_category-15794258061311031" class="c_portalResProduct_category-01001"> 
<div class="categrayBox">
            <div class="moveBtn">
               <?php echo gettoptype($eyou['field']['typeid'],'typename'); ?>
              <i class="iconfont">&#xe6af;</i>
            </div>
            <div class="contentBox">
              <div class="backBtn">
						<i class="iconfont btn">&#xe6ae;</i>
              </div>
                <ul class="content">
                    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "first", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
					<li csass="cateListBox">
                        <h3 class="yjTitle link">
                            <a class="yjLink cateName" href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a>
                        </h3>
                    </li>
					<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>		
                </ul>
            </div>
        </div>
		<script>
		  // 通过操作   light  类名 实现高亮
		 $(window).load(function () {
			var href = location.pathname + location.search;
			if (!href) return;
			$(".content .cateName").each(function (i, e) {
				var aa = $(e).attr("href");
				if (aa == href) {
					// 自身样式
					$(e).parents('.cateListBox').children('.link').addClass('light')
						.end().siblings('.cateListBox').find('.link').removeClass('light');
				}
			});
		});
		</script>
		<script>
            // 获取 屏幕宽度
            var domWith = $(document).width();
            console.log(domWith);
            // 点击一级下的图标
            if (domWith > 1024) {
                // 三级显示
                $('.ejLi1').hover(function () {
                    // 图标 转向
                    $(this).find('.iconfont21').addClass('icf').end()
                        .find('.sjBox1').show();
                }, function () {
                    // 图标复原
                    $(this).find('.iconfont21').removeClass('icf').end()
                        .find('.sjBox1').hide();
                })
            } else {
                // 移动端 点击出现
                $('.moveBtn').on('click', function () {
                    // 按钮隐藏
                    $(this).css({
                        'opacity': 0
                    }, 500)
                    // 内容滑出
                    $('.contentBox').animate({
                        "left": 0
                    }, 500)
                })
                // 移动端 点击收回
                $('.backBtn').on('click', function () {
                    // 按钮显示
                    $('.moveBtn').css({
                        'opacity': 1
                    }, 500)
                    // 内容收回
                    $('.contentBox').animate({
                        "left": "100%"
                    }, 500)
                })
                // 移动端二级 点击事件
                $('.iconfont2').on('click', function () {
                    // 蓝线的显示与隐藏
                    $(this).siblings('.line_right').toggleClass('line_show');
                    // 自身 三级下拉 ,其它的隐藏
                    $(this).toggleClass('jsDeg')
                        .parents('.ejLi').find('.sjBox').slideToggle().end()
                        .siblings('.ejLi').find('.sjBox').slideUp()
                        .end().find('.iconfont2').removeClass('jsDeg');
                })
            }
        </script>
</div>
<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "8"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?> 
<div id="w_grid-1579426088577" class="w_grid-000"><div class="w_grid signal">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1579426088577-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_common_text-1579426088589" class="reset_style"><div><p><span style="font-size:24px"><span style="color:#FFFFFF"><strong><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></strong></span></span></p>
</div></div></div>       </div>  </div></div>

<div id="w_grid-1579426432276" class="w_grid-000"><div class="w_grid signal">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1579426432276-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_common_text-1579426501981" class="reset_style"><div>
<p><span style="color:#696969"><span style="line-height:2.2"><span style="font-size:14px"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attrname_8"); echo $__VALUE__; ?>：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_8"); echo $__VALUE__; ?></span></span></span></p>
<p><span style="line-height:2.2"><span style="font-size:14px"><span style="color:#696969"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attrname_1"); echo $__VALUE__; ?>：</span><a href="tel:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?>"><span style="color:#696969"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></span></a></span></span></p>
<p><span style="line-height:2.2"><span style="font-size:14px"><span style="color:#696969"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attrname_6"); echo $__VALUE__; ?>：</span><a href="tel:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_6"); echo $__VALUE__; ?>"><span style="color:#696969"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_6"); echo $__VALUE__; ?></span></a></span></span></p>
<p><span style="line-height:2.2"><span style="font-size:14px"><span style="color:#696969"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attrname_7"); echo $__VALUE__; ?>：</span><a href="mailto:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; ?>"><span style="color:#696969"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; ?></span></a></span></span></p>
</div>
</div></div>       </div>  </div></div></div>    
<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
<div id="content_box-1579425805863-1" class="e_box e_box-000 d_gridCell_1 p_gridCell"><div id="w_grid-1579425805878" class="w_grid-000"><div class="w_grid signal">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1579425805878-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="c_portalResBreadcrumb_nav-15794258062049091" class="c_portalResBreadcrumb_nav-01001"> <!--homePage  首页-->
<div class="e_box e_box-000 p_breadcrumbList" data-ename="面包屑导航">
	<div class="e_breadcrumb e_breadcrumb-001 p_breadcrumbFirst">
        <span class="weizhi"><i class="iconfont"></i><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:8:"position";}'); echo $__VALUE__; ?>：</span>
		 <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", "crumb"); echo $__VALUE__; ?>
</div>

</div>
</div></div>       </div>  </div></div><div id="c_portalResProduct_list-15794258062209720" class="c_portalResProduct_list-01001"> 
<input type="hidden" class="listAddUrl" value="&gototype=add&productType=0&backType=picview&proshowcaseId=&proparentId=&appId=">
<input type="hidden" class="listModifyUrl" value="&proparentId=&appId="> <div class="e_box p_ProductList" data-ename="产品列表">
  <!--  
	  -->
    <div class="proBox" data-ename="产品列表">
        <div class="e_box p_products proLists" data-ename="产品列表框架区">
            <?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "",      "keyword"=> "",      "idlist"=> "",      "idrange"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 9, "", "", "desc", "on","off","");if(!empty($_result_tmp) && (is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 40, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
			<div class="e_box p_Product proList" dataId="85" data-dismoveable data-foreachitem>
               <div class="imgBox">
                   <img class="img" src="<?php echo $field['litpic']; ?>" alt="产品名称">
               </div>
               <h3 class="titleBox"><?php echo $field['title']; ?></h3>
             	<div class="e_box d_SummaryBox p_SummaryBox_1" data-ename="概要描述容器">     		 
					<div class="e_article description d_summary p_summary_1"><?php echo html_msubstr($field['seo_description'],0,50,true); ?></div>
				</div>
               <a class="link" href="<?php echo $field['arcurl']; ?>"></a>
            </div>
			<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </div>
    </div>
    <div class="e_box e_OccupyBox-001 p_OccupyBox">
		<div class="e_pagebox e_pagebox-000 p_page">
				<div class="pre2">
	               <div class="font2"><div class="dede_pages">
				<ul>
					 <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eyou\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "index,end,pre,pageno,next", "2"); echo $__VALUE__; ?>
				</ul>
			</div>            </div>
	             </div>

        </div>
		
    </div>
</div>
<script>$("div[id^='c_']").attr("loaded","true")</script>
<script type="text/javascript">
    $comp({
        textParams: {
            isCutOfName: true, //标题是否自动截取超长显示内容
            linesOfCutOfName:2, //标题超出隐藏的行数设置
            isCutOfSummary: true, //概述是否自动截取超长显示内容
            linesOfCutOfSummary: 3, //概述超出隐藏的行数设置
            categorySummary: true, //分类概述是否自动截取超长显示内容
            categorySummaryMaxLen: 2 //分类概述超出隐藏的行数设置
        },
        picParams: {
            isOpenCutMode: true, //是否开启裁剪 不开启false
            isRate: true, //是否按比例裁剪
            widthOfRate: 1, //宽度的比率
            heightOfRate: 1, //高度的比率
            definedDefaultImage: false, //是否设置默认图片
            defaultImage: "", //设置默认图片的值
            appId: 2
        },
        ctx: "",
        appId: "2",
        productMode: "",
        requestParam:{"orderType":"","xibcommonId":"5","appType":"productCateId","orderColumn":"","productCateId":"5"},
        pageParam: {
            url: "/comp/portalResProduct/list.do?compId=portalResProduct_list-15794258062209720",
            appId: "2",
            turnPageType:"turnPage"
        },
        id: "portalResProduct_list-15794258062209720",
        lib: ["js/portalProduct/portalResProduct_list-01"],
        imageOpts: {
            "comp_w_size": "", //容器宽
            /*大图*/
            //列表类传值为空，避免图片外层盒子创建2次
            "box_img_style_0": null,
            "box_img_style_1": null,
            "box_img_style_2": null,
            "e_img_style_0": "e_image",
            "e_img_style_1": "e_image-000",
            "e_img_style_2": "p_image",
            "e_a_img_style_0": "e_link",
            "e_a_img_style_1": "e_link-000",
            "e_a_img_style_2": "p_linkB",
            "e_a_txt_style_0": "e_link",
            "e_a_txt_style_1": "e_link-000",
            "e_a_txt_style_2": "p_linkA",
            //大图宽高比例
            "img_scale_x": "4", //宽
            "img_scale_y": "3", //高
            "img_transition": "fade", //图片动画效果
            "img_speed": 1000, //效果显示速度
            "img_easing": "easeOutQuart", //动画效果
            //大图高清裁剪, 普通：normal; 高清： hd; 裁剪: cut; 高清和裁剪： both;
            "img_display_type": "cut",
            "box_nav_style_1": "e_box-000",
            "box_nav_style_0": "e_box",
            "box_nav_style_2": "p_ThumbnailBox",
            "e_nav_img_style_1": "e_ProductRelationImg-001",
            "e_nav_img_style_0": "e_relationimg",
            "e_nav_img_style_2": "p_thumbnail",
            "nav_display_status": true, //规格图是否显示，true-显示，false-隐藏
            "nav_type": "block",
            "nav_img_display_type": "cut", // 显示状态， 普通：normal; 高清： hd; 裁剪: cut; 高清和裁剪： both;
            //规格图宽高比例
            "nav_scale_x": "4", //宽
            "nav_scale_y": "3", //高
            "nav_display_num": "6", //焦点图显示数量
            "nav_position": "center", //焦点小图位置
            "nav_display_padding": 10,
            "nav_step": 1, //切换个数
            "nav_hover": true,
            /*标记*/
            "box_tag_style_0": "e_box",
            "box_tag_style_1": "e_box-000",
            "box_tag_style_2": "p_TagBox",
            "e_img_tag_style_0": "e_image",
            "e_img_tag_style_2": "p_tag",
            "e_img_tag_style_1": "e_image-000",
            "img_tag_display": true, //true 显示标记，false 隐藏标记
            "shiftUpAnimSwitch": false, //是否显示轮播图dom true显示，false不显示
            "img_tag_display_type": "cut", //产品标记 显示状态， 普通：normal; 高清： hd; 裁剪: cut; 高清和裁剪： both;
            //移上动画的配置参数
            //图片遮罩层
            "box_shade_style_0": "e_MatteBox",
            "box_shade_style_1": "e_MatteBox-001",
            "box_shade_style_2": "p_matteA",
            //动画外层
            "box_animatOuter_style_0": "e_MatteBox",
            "box_animatOuter_style_1": "e_MatteBox-000",
            "box_animatOuter_style_2": "p_matte",
            //动画位置层
            "box_Position_style_0": "e_box",
            "box_Position_style_1": "e_PositionBox-001",
            "box_Position_style_2": "p_Position",
            "comp_type": "productList", //组件类型
        },
        sortParams: {
            "DEFAULT_SORT": {
                "v": "默认",
                "title": "默认",
                "style": ""
            },
            "PUBLISH_TIME": {
                "show": true,
                "v": "发布时间",
                "title": "按产品的发布时间进行排序",
                "style": ""
            },
            "PRODUCT_NAME": {
                "show": true,
                "v": "产品名称",
                "title": "按照产品的名称进行排序",
                "style": ""
            },
            "PVS": {
                "show": false,
                "v": "浏览量",
                "title": "按产品的浏览量进行排序",
                "style": ""
            },
            "comment": {
                "show": false,
                "v": "评论数量",
                "title": "按照产品的评论数量进行排序",
                "style": ""
            },
            "PRODUCT_CODE": {
                "show": true,
                "v": "产品编号",
                "title": "按产品的编号进行排序",
                "style": ""
            }
        },
        styleId: "c_portalResProduct_list-01001"
    });
</script>
 </div></div>       </div>  </div></div></div>       </div>  </div></div></div>       </div>  </div></div></div>       </div>  </div></div>


<div id="w_grid-1577156962791" class="w_grid-000"><div class="w_grid signal">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1577156962791-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_grid-1577156962809" class="w_grid-000" data-vhide768="true"><div class="w_grid ">   <div class="e_box e_box-000 p_gridbox">      
  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "8"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?> 
<div id="content_box-1577156962809-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_common_text-1577156962821" class="reset_style"><div data-url="#"><p><span style="font-size:18px"><font color="#ffffff"><strong><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></strong></font></span></p>
</div></div><div id="w_grid-1577156962831" class="w_grid-000"><div class="w_grid ">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1577156962831-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_ficon-1577156962849" class="w_ficon-001"><div class="w_ficon animated  " data-url="#">  <a class="e_link e_link-000 p_link" target="_blank" title="Address" disabled="disabled" datahref="/Home.html">   <i class="e_icon e_icon-000 p_icon" title="Address"></i>  </a> </div></div></div>         <div id="content_box-1577156962831-1" class="e_box e_box-000 d_gridCell_1 p_gridCell"><div id="w_common_text-1577156962855" class="reset_style"><div><p><span style="line-height:1.6"><span style="color:#FFFFFF"><span style="font-size:14px"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_8"); echo $__VALUE__; ?></span></span></span></p>
</div></div></div>       </div>  </div></div><div id="w_grid-1577156962835" class="w_grid-000"><div class="w_grid ">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1577156962835-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_ficon-1577156962858" class="w_ficon-001"><div class="w_ficon animated  " data-url="#">  <a class="e_link e_link-000 p_link" target="_blank" title="TEL" disabled="disabled" datahref="/Home.html">   <i class="e_icon e_icon-000 p_icon" title="TEL"></i>  </a> </div></div></div>         <div id="content_box-1577156962835-1" class="e_box e_box-000 d_gridCell_1 p_gridCell"><div id="w_common_text-1577156962861" class="reset_style"><div>
<p><span style="color:#FFFFFF"><span style="font-size:14px"><span style="font-family:微软雅黑"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></span></span></span></p>
</div>
</div></div>       </div>  </div></div><div id="w_grid-1577156962840" class="w_grid-000"><div class="w_grid ">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1577156962840-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_ficon-1577156962864" class="w_ficon-001"><div class="w_ficon animated  " data-url="#">  <a class="e_link e_link-000 p_link" target="_blank" title="PHONE" disabled="disabled" datahref="/Home.html">   <i class="e_icon e_icon-000 p_icon" title="PHONE"></i>  </a> </div></div></div>         <div id="content_box-1577156962840-1" class="e_box e_box-000 d_gridCell_1 p_gridCell"><div id="w_common_text-1577156962867" class="reset_style"><div><p><span style="font-size:14px"><span style="font-family:微软雅黑"><a href="tel: 0357-8125003"><span style="color:#FFFFFF"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_6"); echo $__VALUE__; ?></span></a></span></span></p>
</div></div></div>       </div>  </div></div><div id="w_grid-1577156962844" class="w_grid-000"><div class="w_grid ">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1577156962844-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_ficon-1577156962871" class="w_ficon-001"><div class="w_ficon animated  " data-url="#">  <a class="e_link e_link-000 p_link" target="_blank" title="E-MAIL" disabled="disabled" datahref="/Home.html">   <i class="e_icon e_icon-000 p_icon" title="E-MAIL"></i>  </a> </div></div></div>         <div id="content_box-1577156962844-1" class="e_box e_box-000 d_gridCell_1 p_gridCell"><div id="w_common_text-1577156962874" class="reset_style"><div><p><span style="font-size:14px;color:#FFFFFF"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; ?></span></p>
</div></div></div>       </div>  </div></div><div id="c_portalResPublic_websiteShare-15771576343731811" class="c_portalResPublic_websiteShare-01001"> 
<div class="row-pad">
    <div class="row">
        <div class="iShare iShare-16 share-internal"></div>
    </div>
    <div class="row">
        <div class="iShare iShare-16 share-foreign"></div>
    </div>
</div>

</div></div>         
<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
<div id="content_box-1577156962809-1" class="e_box e_box-000 d_gridCell_1 p_gridCell"><div id="w_grid-1577156962824" class="w_grid-000"><div class="w_grid ">   <div class="e_box e_box-000 p_gridbox">
 <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "6"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?> 
<div id="content_box-1577156962824-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_common_text-1577156962877" class="reset_style"><div data-url="#"><p><span style="font-size:18px"><span style="line-height:1"><strong><span style="color:#FFFFFF"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></span></strong></span></span></p>
</div></div><div id="c_portalResNews_list-15771569631883019" class="c_portalResNews_list-01001"> 
<div>
<div class="e_box p_Newslist" data-ename="资讯整体框架">   
        <div class="e_box p_news dialog" data-ename="资讯列表容器">
        	<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 2; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'row' => '2',
  'titlelen' => '25',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 25, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>									
			<div class="e_box p_articles borderB_default" data-dismoveable data-foreachitem data-ename="<?php echo $field['title']; ?>" data-url="<?php echo $field['arcurl']; ?>">
	            <div class="js_coverUrlTitle item_hide"><?php echo $field['title']; ?></div>
	            <div class="e_box p_content" data-ename="">
	                <div class="e_box p_header" data-ename="">
	                    <div class="e_box p_assist" data-ename="">
	                        <div class="e_title p_time" data-ename=""><h6 class="color_assist"><?php echo MyDate('Y-m-d',$field['add_time']); ?></h6></div>
	                    </div>
	                    <!--互动信息结束-->
	                    <!--标题-->
	                    <div class="e_box p_TitleBox" data-ename="">
	                        <a href="<?php echo $field['arcurl']; ?>" class=""><h5 class="e_title p_title h5"><?php echo $field['title']; ?></h5></a>
	                    </div>
	                    <!--标题end-->
	                </div>
	          
	            </div>
	        
			</div>
			<div class="blank background_form"></div> 
			<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </div>
</div>

<input type="hidden" class="requsetParam" value="&cid=1"/>
</div>
</div></div>     
<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist);  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "28"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?> 
<div id="content_box-1577156962824-1" class="e_box e_box-000 d_gridCell_1 p_gridCell"><div id="w_grid-1577156962880" class="w_grid-000"><div class="w_grid signal">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1577156962880-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_common_text-1577156962887" class="reset_style"><div data-url="#"><h1><span style="color:#FFFFFF"><span style="font-size:18px"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></span></span></h1>
</div></div><div id="c_portalResMessage_form-15771569632085501" class="c_portalResMessage_form-01001"> 
<div class="e_box p_inquiry" data-ename="填写留言表单">
        <div class="e_wbox p_ConWBox" data-ename="弹窗内容容器">
		<?php  $typeid = "0"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagGuestbookform = new \think\template\taglib\eyou\TagGuestbookform; $_result = $tagGuestbookform->getGuestbookform($typeid, "default", "", 0); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
		<form method="POST"  <?php echo $field['formhidden']; ?> action="<?php echo $field['action']; ?>" onsubmit="<?php echo $field['submit']; ?>" class="form-horizontal d_formItemBox p_productInfoForm">
            <input type="hidden" id="categoryId" class="required" name="categoryId" value="1">
            <input type="hidden" name="compId" class="required" value="portalResMessage_form-15771569632085501">
            <input type="hidden" name="referer" class="required" value="">
            <!--联系信息-->
            <div class="e_box p_ContactInfo" data-ename="信息内容容器">
                                                <!--多行文本-->
                <div class="e_box form-group p_groupBox" data-ename="多行文本容器">
                    <label for="c_intentionIntro" class="e_title col-sm-2 control-label d_formItemTitle h5 color_normal p_intentionIntroTitle">
                        <span class="e_title d_formItemStar color_error p_intentionIntroStar">*</span>
                        留言内容：
                    </label>
                    <div class="e_text p_eqdescInput" data-ename="多行文本输入框">
                        <textarea class="InputText form-control" id='attr_9' name='<?php echo $field['attr_9']; ?>' maxlength="255" class="InputText" maxlength="1000"
                            placeholder="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"enter";}'); echo $__VALUE__; ?><?php echo $field['itemname_9']; ?>"  data-required="true"  tit="留言内容"></textarea>
                    </div>
                </div>


       
                <div class="e_box p_aaa">
                    <div class="e_box form-group p_PhoneBox" data-ename="手机信息区">
                        <label for="c_intentionIntro" class="e_title col-sm-2 control-label d_formItemTitle h5 color_normal p_intentionIntroTitle">
                                                        手机：
                        </label>
                        <div class="e_input p_phone" data-ename="手机输入框">
                            <input  id='attr_3' name='<?php echo $field['attr_3']; ?>' class="InputText form-control" maxlength="20" data-type="1"
                                data-subType="3" type="text"  data-required="false"  placeholder="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"enter";}'); echo $__VALUE__; ?><?php echo $field['itemname_3']; ?>" tit="手机">
                        </div>
                    </div>
                    <!--手机 结束-->
                </div>
                <div class="e_box form-group p_CaptchasBox" >
                    <div class="e_box form-group p_PhoneBox" data-ename="手机信息区">
                        <label for="c_intentionIntro" class="e_title col-sm-2 control-label d_formItemTitle h5 color_normal p_intentionIntroTitle">
                             邮箱：
                        </label>
                        <div class="e_input p_phone" data-ename="手机输入框">
                            <input  id='attr_5' name='<?php echo $field['attr_5']; ?>' class="InputText form-control" maxlength="20" data-type="1"
                                data-subType="3" type="text"  data-required="false"  placeholder="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"enter";}'); echo $__VALUE__; ?><?php echo $field['itemname_5']; ?>" tit="手机">
                        </div>
                    </div>
                    <!--手机 结束-->
                </div>
		
                <div class="e_wbox p_CoupWBox" style="margin-top:25px;">
                    <button type="submit" class="btn btn-primary submitPC p_submit" data-ename="提交按钮"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:6:"submit";}'); echo $__VALUE__; ?></button>
                </div>
                <!--提交结束-->
            </div>
           <?php echo $field['hidden']; ?>
		</form>
		<?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </div>
    <!--弹窗内容容器 结束-->
</div>

</div></div>       </div>  </div></div></div>       </div>  </div></div></div>       </div>  </div></div>
<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
<style>
.banquan a{color:#FFFFFF}
</style>
<div id="w_grid-1577156962816" class="w_grid-000"><div class="w_grid signal">   <div class="e_box e_box-000 p_gridbox">         <div id="content_box-1577156962816-0" class="e_box e_box-000 d_gridCell_0 p_gridCell"><div id="w_common_text-1577156962892" class="reset_style banquan" data-vhide768="true"><div><div>
<p style="text-align:center"><span style="font-size:14px"><span style="line-height:1.8"><span style="color:#FFFFFF"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?>&nbsp;&nbsp;<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?>&nbsp;&nbsp;<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_garecordnum"); echo $__VALUE__;  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?></span></span></span></p>
</div>
</div></div>
<div id="w_common_text-1611293384739" class="reset_style banquan" data-vhide100p="true" data-vhide1024="true"><div>
<div>
<p style="text-align:center"><span style="color:#FFFFFF"><span style="font-size:14px"><span style="line-height:1.8"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?>&nbsp;&nbsp;<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?>&nbsp;&nbsp;<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_garecordnum"); echo $__VALUE__;  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?></span></span></span></p>
<p style="text-align:center"> </p>

</div>
</div></div><div id="c_portalResPublic_codeContainer-15959012622034390" class="c_portalResPublic_codeContainer-01001"> 
<div class="e_box"></div>

<div class="right_bar" style="display: none;">
	<ul>
		<li class="rtbar_li1" style="left: 0px;"> 
			<a href="tel:0357-8125003" target="_blank"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/picture/rtbar_tel.png" alt="电话"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></a> 
		</li>
		<li class="rtbar_li2"> 
			<a href="javascript:void(0);"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/picture/rtbar_ewm.png" alt="二维码"> </a>
			<div class="rtbar_shwx" style="display: none;">
				<img width="160" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_13"); echo $__VALUE__; ?>" alt="二维码" class="_full">
			</div>
		</li>
		<li class="rtbar_li3" style="left: 0px;"> 
			<a href="mailto:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; ?>"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/picture/hc_mail.png" alt="Email">发送邮件</a> 
		</li>
		<li class="rtbar_li4 gotop"> 
			<a href=""> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/picture/rtbar_top.png" alt="top"> </a> 
		</li>
	</ul>
</div>
<style>
.right_bar{position:fixed; top:300px; right:0; width:50px; height:203px; z-index:10;}
.right_bar li{ width:62px; height:50px; z-index:20; }
.right_bar li.rtbar_li1,.right_bar li.rtbar_li4{ position:absolute; left:0;}
.right_bar li.rtbar_li1{ top:0; width:172px; }
.right_bar li.rtbar_li2{ position:absolute; top:51px; left:0; }
.right_bar li.rtbar_li3{ position:absolute; top:102px; left:0; width:126px; }
.right_bar li.rtbar_li4{ top:153px;}
.rtbar_li4{ position:absolute; top:153px; left:0;}
.right_bar li a{ display:block; color:#FFF; font-size:14px; height:50px; line-height:50px; overflow:hidden; background-color:#17479d; opacity:0.8; border-radius:6px;}
.right_bar li a img{ display:block; float:left; vertical-align:middle; width:24px; height:24px; margin:12px 12px 14px 14px;}
.right_bar li a:hover{ background-color:#0099dd; opacity:1;}
.rtbar_shwx{ display:none; position:absolute; top:-120px; left:-160px; padding-bottom:9px; }
.rtbar_shwx img{ padding:14px; background-color:#FFF; }
.right_bar{display:none;}
.rtbar_shwx{top:-50px;}
</style>
<script>
$(window).bind("scroll",function(){
    var _wTop = _winScroll = windowPos = $(window).scrollTop();
    if(_wTop>100&&window.innerWidth>1024){
		$('.right_bar').fadeIn();
    }else{
		$('.right_bar').fadeOut();
    }
});
 $('body').on('click', '.gotop', function() { $('html,body').stop(1).animate({ scrollTop: '0' }, 300); return false });
$('.right_bar li').eq(0).hover(function() {
        $(this).stop().animate({ left: -116 }, 300);
    }, function() {
        $(this).stop().animate({ left: 0 }, 300);
});
$('.right_bar li').eq(1).hover(function() {
        $(this).stop().find('.rtbar_shwx').show();
    }, function() {
        $(this).stop().find('.rtbar_shwx').hide();
});
$("div[id^='c_n']").attr("loaded","true");
</script>
</div></div>       </div>  </div></div></div>       </div>  </div></div></div>

</body>
</html>