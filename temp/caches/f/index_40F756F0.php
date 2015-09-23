<?php exit;?>a:3:{s:8:"template";a:2:{i:0;s:39:"E:/www/oshop/themes/moonbasha/index.dwt";i:1;s:53:"E:/www/oshop/themes/moonbasha/library/page_header.lbi";}s:7:"expires";i:1442984525;s:8:"maketime";i:1442980925;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="5U商城" />
<meta name="Description" content="5U商城" />
<title>5U商城 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/moonbasha/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|5U商城 - Powered by ECShop" href="feed.php" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script><style type="text/css">
.mainNavBox .allSortBox {
    display: block;
}
#BDBridgeIconWrap{display:none !important;}
</style>
</head>
<body>
<div class="index_wap">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/vancl_common.js"></script><script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript" src="js/jquery.SuperSlide.js"></script><div id="Head">
	<div class="menuTopRight" style="display:none"><div id="shoppingCarNone" class="active"> 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca </div></div>
	<div class="mainNavBox" id="mainNavBox">
		<div class="mainNavTop">
		     <!--<div class="back_home"><a href=""></a></div>-->
			<div class="mainTextNav">
				<ul class="mainLeftNav">
					<li><a href="index.php" class="track cur">首页</a></li>
															<li><a href="category.php?id=740"  class="track">梅西</a></li>
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
     <p><img src="themes/moonbasha/images/index_w01.jpg" /></p>
     <p><img src="themes/moonbasha/images/index_w02.jpg" /></p>
     <p><img src="themes/moonbasha/images/index_w03.jpg" /></p>
     <p><img src="themes/moonbasha/images/index_w04.jpg" /></p>
     <div class="index_lists cl">
          <a href="category.php?id=740"><img src="themes/moonbasha/images/index_list01.jpg" /></a>
          <a href="category.php?id=736"><img src="themes/moonbasha/images/index_list02.jpg" /></a>
          <a href="category.php?id=748"><img src="themes/moonbasha/images/index_list03.jpg" /></a>
          <a href="category.php?id=744"><img src="themes/moonbasha/images/index_list04.jpg" /></a>
          <a href="category.php?id=752"><img src="themes/moonbasha/images/index_list05.jpg" /></a>
          <a href="category.php?id=756"><img src="themes/moonbasha/images/index_list06.jpg" /></a>
     </div>
</div>
</body>
</html>