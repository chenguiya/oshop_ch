<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
</head>
<body>

<div class="danpinBox">
     <?php echo $this->fetch('library/page_header.lbi'); ?><?php echo $this->smarty_insert_scripts(array('files'=>'magiczoomplus.js,easydialog.min.js,vancl_goods.js')); ?>
    <div class="breadNav"><?php echo $this->_var['ur_here']; ?></div>
    <div class="danpinArea cl">
    	<div class="main_left">
            
            <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
        </div>
        <div class="danpinRight">
        	<div class="p_info">
                <div id="productTitle" class="danpinTitleTab">
                    <h2 title="<?php echo $this->_var['goods']['goods_style_name']; ?>"><?php echo $this->_var['goods']['goods_name']; ?><span><?php if ($this->_var['cfg']['show_goodssn']): ?>( <?php echo $this->_var['goods']['goods_sn']; ?> )<?php endif; ?></span></h2>
                </div>
                <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
                    <div id="pricearea" name="Normal">
                        <span class="blank10"></span>
                        <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
                        <div class="info_list" style="display:none;"><?php echo $this->_var['lang']['goods_brand']; ?> <a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a> </div>
                        <?php endif; ?>
                        <div class="cuxiaoPrice">
                            <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
                            <span class="tehuiMoney">RMB:</span><strong id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['promote_price']; ?></strong>
                            <?php else: ?>
                            <span class="tehuiMoney">RMB:</span><strong id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['shop_price_formated']; ?></strong>
                            <?php endif; ?>
                        </div>
                        <?php if ($this->_var['volume_price_list']): ?>
                        <div class="info_list">
                            <font class="f1"><?php echo $this->_var['lang']['volume_price']; ?>：</font><br />
                            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#aad6ff">
                                <tr>
                                    <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['number_to']; ?></strong></td>
                                    <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['preferences_price']; ?></strong></td>
                                </tr>
                                <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
                                <tr>
                                    <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['number']; ?></td>
                                    <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['format_price']; ?></td>
                                </tr>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </table>
                        </div>
                        <?php endif; ?> 
                    </div>
                    
                    <?php if ($this->_var['promotion']): ?>
                    <span class="blank20"></span>
                    <div id="promotion">
                        <div class="danpin_YhTsBox danpin_YhTsTab ">
                        	<h4><span>优惠活动：</span></h4>
                            <ul>
                                <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                                <li>
                                    <?php if ($this->_var['item']['type'] == "snatch"): ?>
                                    <i>夺宝</i>
                                    <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
                                    <i>团购</i>
                                    <?php elseif ($this->_var['item']['type'] == "auction"): ?>
                                    <i>拍卖</i>
                                    <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
                                    <i>活动</i>
                                    <?php endif; ?>
                                    <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>"><?php echo $this->_var['item']['act_name']; ?></a>
                                </li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                            <span class="blank0"></span>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <div class="selectArea">
                    	<span class="blank20"></span>
                         
                        <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?> 
                        <?php if ($this->_var['spec']['attr_type'] == 1): ?> 
                        <?php if ($this->_var['spec']['is_show_img'] == 1): ?>
                        <div class="spec_img_box">
                            <div class="danpinColor_Select">
                                <div style="line-height:40px;" class="danpinColorTitle"><p><?php echo $this->_var['spec']['name']; ?></p></div>
                                <div class="spec_img_list">
                                    <ul>
                                        <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                        <li title="<?php echo $this->_var['value']['label']; ?>" data-specid="<?php echo $this->_var['value']['id']; ?>" >
                                            <div class="colorBlock">
                                                <a href="<?php echo $this->_var['value']['img_original']; ?>" rel="zoom-id: Zoomer" rev="<?php echo $this->_var['value']['img_original']; ?>">
                                                    <img src="<?php echo $this->_var['value']['thumb_url']; ?>" />
                                                    <p><?php echo $this->_var['value']['label']; ?></p>
                                                </a>
                                            </div>
                                            <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" style="display:none;" />
                                            <span class="colorHoverok"></span>
                                        </li>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="spec_box">
                            <div class="danpinColorTitle"><p style="line-height:25px;"><?php echo $this->_var['spec']['name']; ?></p></div>
                            <div class="spec_list">
                                <ul>
                                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                    <li data-specid="<?php echo $this->_var['value']['id']; ?>" >
                                        <p><?php echo $this->_var['value']['label']; ?></p>
                                        <span></span>
                                        <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" style="display:none;" />
                                    </li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                                </ul>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php else: ?>
                        <div class="spec_checkbox">
                            <div class="danpinColorTitle"><p> <?php echo $this->_var['spec']['name']; ?>：</p></div>
                            <div class="checkbox_list">
                                <ul>
                                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                        <li><p><input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" style="margin-top:2px;*margin-top:0px; float:left;"/><?php echo $this->_var['value']['label']; ?></p></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                                </ul>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                        
                        <div class="blank0"></div>
                        <div class="goodsNum">
                            <div style="line-height:27px;" class="danpinColorTitle"><p>数量</p></div>
                            <div class="number">
                            	<a onclick="buyNumber.minus()" href="javascript:;" class="minus">-</a><input name="number" id="number" type="text" value="1" class="inp_num" onkeyup="inputOnlyNum(this, 1, 999);" readonly="readonly"><a onclick="buyNumber.plus()" href="javascript:;" class="plus">+</a>
                            </div>
                            
<script type="text/javascript">
	// add by liuguichun 2011-7-19
	var buyNumber = {
		maxNumber : 100,
		minNumber : 1,
		defaultNumber : function(){
			var defaultnumber = $('#number').attr('value');
			defaultnumber = parseInt(defaultnumber)
			if(defaultnumber < 1){
				defaultnumber = 1;
			}
			return defaultnumber;
		},
																										
		goodNumber : function(num){
			if(typeof(num) == 'number'){
				return $('#number').val(num);
			}else{
				return parseInt($('#number').val());
			}
																											
		},
		plus : function(){
			var num = buyNumber.goodNumber() + buyNumber.defaultNumber();
			if(num <= buyNumber.maxNumber){
				buyNumber.goodNumber(num);
			}
		},
		minus : function(){
			var num = buyNumber.goodNumber() - buyNumber.defaultNumber();
			if(num >= buyNumber.minNumber){
				buyNumber.goodNumber(num);
			}
		}
																										
	}
</script> 	
                        </div>
                        <span class="blank20"></span>
                        <div class="shoppingNews">
                        	<ul>
                            	<li><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);" class="dp_gwbtn">立即购买</a></li>
                                <li><a class="dp_gwbtn2" href="javascript:addToCartPro(<?php echo $this->_var['goods']['goods_id']; ?>)" name="item-item-select-shopping" id="addToShoppingCar"> 放入购物车</a></li>
                            </ul>
                        </div>
                        <span class="blank20"></span>
                    </div>
                    <div class="specialWarm">
                    	 <img src="themes/moonbasha/images/good_ico.png" align="absmiddle" />全国地区顺丰包邮(港澳台除外)
                    </div>
                </form>
            </div>
        </div>
       <div class="blank"></div>
		<div class="cuxiaoPrice"></div>
        <!--
		<div class="blank20"></div>
		<div>
            <span><img src="themes/moonbasha/images/common_icon.png"/></span>
            <span class="blank5"></span>
            <span><img src="themes/moonbasha/images/common_ics.png" /></span>
        </div>
		-->
    </div>
        
        <span class="blank25"></span>
        <div class="sideBarSettabArea">
            <div class="RsetTabArea">
            	
                <div class="rightItem">
                	<!--<p><img src="themes/moonbasha/images/good_hrg.png"></p>-->
                    <div class="detail">
                        <div class="pro_info"><?php echo $this->_var['goods']['goods_desc']; ?></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

<div class="blank20"></div>


<div class="CartTips">
	<div class="CartTipsCon">
        <div class="close">
            <a href="javascript:;" id="close">关闭</a>
        </div>
        <div class="Cart">
            <i></i>
            <p class="p1">该商品已成功放入购物车</p>
            <p>购物车共<b id="cart_goods_number"><?php echo $this->_var['number']; ?>3</b>件商品</p>
            <p class="p2">
                <a href="javascript:;" class="shopping">继续购物</a>
                <a href="flow.php" class="flow">￥去结算</a>
            </p>
        </div>
    </div>
    <div class="CartTipsBj"></div>
</div>

</body>
<script>
	$(function(){
		var RightFlNav = $("#RightFlNav");
		var bodyW = $(window).width();
		var RightFlNavW = $("#RightFlNav").outerWidth();
		RightFlNav.css({"right":(bodyW-1200)/2-RightFlNavW-20});
		
		$(window).scroll(function(){
			var ScrollCon = $(".crollTop");
			var ScrollTop = $(window).scrollTop();
			if( ScrollTop>=100 ){
				ScrollCon.show();
			}else{
				ScrollCon.hide();
			};
		})
		//
		$(".ToTop").click(function(){
			$('body,html').animate({scrollTop:0},500);
		});
		//
	
		$("#close,.shopping").click(function(){
			$(".CartTips").hide();
		});
	})
</script>
<script type="text/javascript">
	var goods_id = <?php echo $this->_var['goods_id']; ?>;
	var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
	var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
	<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	var goodsId = <?php echo $this->_var['goods_id']; ?>;
	var now_time = <?php echo $this->_var['now_time']; ?>;
	
	
	onload = function(){
	  // changePrice();
	  fixpng();
	  try {onload_leftTime();}
	  catch (e) {}
	}
	
	/**
	* 点选可选属性或改变数量时修改商品价格的函数
	*/
	function changePrice()
	{
	  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
	
	  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
	
	  // Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
	  Ajax.call('goods.php', 'act=price_extend&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
	}
	
	/**
	 * 接收返回的信息
	 */
	function changePriceResponse(res)
	{
	  if (res.err_msg.length > 0)
	  {
		alert(res.err_msg);
	  }
	  else
	  {
        $('.goodsNum .stock').html('库存 '+res.pdt_num);
		document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
		if (document.getElementById('ECS_SHOPPRICE'))
		  document.getElementById('ECS_SHOPPRICE').innerHTML = res.result;
		if (document.getElementById('ECS_GOODS_AMOUNT'))
		  document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
		
	  }
	}
	
	//
	$(function(){
		var main_leftH=$('.main_left').height();
		var danpinRightH=$('.danpinRight').height();
		if( main_leftH > danpinRightH ){
			$('.danpinRight').height(main_leftH);
		};
	});
</script>
</html>
