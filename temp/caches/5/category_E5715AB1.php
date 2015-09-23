<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:42:"E:/www/oshop/themes/moonbasha/category.dwt";i:1;s:53:"E:/www/oshop/themes/moonbasha/library/page_header.lbi";i:2;s:52:"E:/www/oshop/themes/moonbasha/library/goods_list.lbi";}s:7:"expires";i:1442983693;s:8:"maketime";i:1442980093;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>梅西 签名珍品_5U商城 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/moonbasha/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/global.js"></script><script type="text/javascript" src="js/compare.js"></script></head>
<body>
<div class="wrapper">
<script type="text/javascript" src="js/vancl_common.js"></script><script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript" src="js/jquery.SuperSlide.js"></script><div id="Head">
	<div class="menuTopRight" style="display:none"><div id="shoppingCarNone" class="active"> 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca </div></div>
	<div class="mainNavBox" id="mainNavBox">
		<div class="mainNavTop">
		     <!--<div class="back_home"><a href=""></a></div>-->
			<div class="mainTextNav">
				<ul class="mainLeftNav">
					<li><a href="index.php">首页</a></li>
															<li><a href="category.php?id=740"  class="track cur">梅西</a></li>
																				<li><a href="category.php?id=736"  class="track">C罗</a></li>
																				<li><a href="category.php?id=748"  class="track">内马尔</a></li>
																				<li><a href="category.php?id=744"  class="track">J罗</a></li>
																				<li><a href="category.php?id=752"  class="track">贝尔</a></li>
																				<li><a href="category.php?id=756"  class="track">其他球星</a></li>
														</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
function deleteCartGoods(rec_id)
{
	Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#shoppingCarNone").html(res.content);
  }
}
</script> 
<p><img src="themes/moonbasha/images/cat_meixi.jpg"></p>
<p><img src="themes/moonbasha/images/cat_cluo.jpg"></p>
<p><img src="themes/moonbasha/images/cat_nenmaer.jpg"></p>
<p><img src="themes/moonbasha/images/cat_jluo.jpg"></p>
<p><img src="themes/moonbasha/images/cat_beier.jpg"></p>
<p><img src="themes/moonbasha/images/cat_qita.jpg"></p>
<div class="subCategories">
<ul class="subCat2">
	<li idd="740" class="cat_alls active" data-catid="740"><a href="category.php?id=740"><i></i>全部</a></li>
	<li class="cat_god1 " data-catid="741"><a href="category.php?id=741"><i></i>签名球衣</a></li>
	<li class="cat_god2 " data-catid="742"><a href="category.php?id=742"><i></i>签名球鞋</a></li>
	<li class="cat_god3 " data-catid="743"><a href="category.php?id=743"><i></i>签名照片</a></li>
</ul>
</div>
 
 
 
 
 
 
 
<div class="chapList">
    <div class="fbListPruArea">
        <div class="productList">
        <ul class="ContentMonitor">
             
                        <li id="gItem_119" class="scListArea">
                <div class="god_imgs"><a href="goods.php?id=119" title="5U体育icons独家代理巴萨梅西亲笔签名私藏珍品礼盒 独家正品礼盒" class="track"> <img src="images/201509/thumb_img/119_thumb_G_1442454570723.jpg" class="productLazyLoad" alt="5U体育icons独家代理巴萨梅西亲笔签名私藏珍品礼盒 独家正品礼盒" style="display: inline; "></a> </div>
				<p class="Product-Name"><a href="goods.php?id=119" title="5U体育icons独家代理巴萨梅西亲笔签名私藏珍品礼盒 独家正品礼盒" class="track">5U体育icons独家代理巴萨梅西亲笔签名私藏珍品礼盒 独家正品礼盒</a></p>
                <div class="Product-Price">RMB:<strong> 8990</strong></div>
            </li>
                         
                                    		</ul>
    </div>
    </div>
<script type="Text/Javascript" language="JavaScript">
	$(function(){
		$(".productList .scListArea").hover(function(){
			$(this).find(".Collect").show();
		},function(){
			$(this).find(".Collect").hide();
		})
	});
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script> 
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script></div>
</div>
<script>
	$(function(){
		var RightFlNav = $("#RightFlNav");
		var bodyW = $(window).width();
		var RightFlNavW = $("#RightFlNav").outerWidth();
		RightFlNav.css({"right":(bodyW-1200)/2-RightFlNavW-20});
		RightFlNav.find("li").each(function(){
			$(this).hover(function(){
				$(this).addClass("on");
			},function(){
				$(this).removeClass("on");
			});
		});
		$(".ToTop").click(function(){
			$('body,html').animate({scrollTop:0},500);
		});
		
		//悬浮右侧导航
		$(window).scroll(function(){
			var ScrollCon = $(".crollTop");
			var ScrollTop = $(window).scrollTop();
			if( ScrollTop>=100 ){
				ScrollCon.show();
			}else{
				ScrollCon.hide();
			};
		})
	});
</script>
</body>
</html>