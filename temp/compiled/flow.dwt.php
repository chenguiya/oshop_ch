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
</head>
<body>


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'vancl_flow.js')); ?>

<div id="wrapper">
    <?php echo $this->fetch('library/page_header.lbi'); ?>
    <div class="blank20"></div>
	<div class="block" style="position:relative;">
    	<?php if ($this->_var['step'] == "cart"): ?>
    	
        <?php echo $this->smarty_insert_scripts(array('files'=>'showdiv.js')); ?>
        <script type="text/javascript">
			<?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
			var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</script>
        <div id="location" class="stepby1"></div>
        <div id="content">
        	<div id="cart-gift">
            	<div id="cart-product" class="clearfix">
                	<div id="batchdelcart">
                      <form id="formCart" name="formCart" method="post" action="flow.php">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="top">
                            <thead>
                                <tr>
                                    <th width="3%">&nbsp;</th>
                                    <th class="name" width="47.3%"> <?php echo $this->_var['lang']['goods_name']; ?> </th>
                                    <th class="price" width="13%"> <?php echo $this->_var['lang']['shop_prices']; ?> </th>
                                    <th class="qty" width="9%"> <?php echo $this->_var['lang']['number']; ?> </th>
                                    <th class="subtotal" width="17%"> <?php echo $this->_var['lang']['subtotal']; ?> </th>
                                    <th class="operate" align="left"> <?php echo $this->_var['lang']['handle']; ?> </th>
                                </tr>
                            </thead>
                        </table>
                        <div class="Buygoods">
                        	<div style="width:95%; margin:0 auto;">
                            <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" id="vancl-general-product">
                                <tbody name="vancl-general-product">
                                    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                                    <tr>
                                        <td class="image bd-bottom" align="right" width="9%"><a target="_blank" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" title="<?php echo $this->_var['goods']['goods_name']; ?>"><img alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a></td>
                                        <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                                        <td class="name bd-bottom" width="41%">
                                            <a target="_blank" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" title="<?php echo $this->_var['goods']['goods_name']; ?>"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['parent_id'] > 0): ?><span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span><?php endif; ?><?php if ($this->_var['goods']['is_gift'] > 0): ?><span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span><?php endif; ?></a>
                                            <p><?php echo $this->_var['goods']['goods_attr']; ?></p>
                                        </td>
                                        <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                                        <td class="name bd-bottom" align="center">
                                            <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
                                            <p><?php echo $this->_var['goods']['goods_attr']; ?></p>
                                            <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
                                                <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
                                                <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </td>
                                        <?php else: ?>
                                        <td class="name bd-bottom"><a target="_blank" href="javascript:void(0);" title="<?php echo $this->_var['goods']['goods_name']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></td>
                                        <?php endif; ?>
                                        <td class="price bd-bottom" align="center" width="14%"> <?php echo $this->_var['goods']['goods_price']; ?> </td>
                                        <td class="qty bd-bottom" align="center" width="9.6%">
                                            <div class="sl">
                                                <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                                                <a class="track decrease-disable" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,-1);" href="javascript:void(0);" >-</a><input name="itemNumBox" data-goodsid="<?php echo $this->_var['goods']['rec_id']; ?>" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>"  type="text" class="modify-product-qty" ><a class="increase track" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,+1);" href="javascript:void(0);" >+</a>
                                                <?php else: ?>
                                                <?php echo $this->_var['goods']['goods_number']; ?>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                        <td class="subtotal bd-bottom" id="total_items_<?php echo $this->_var['goods']['rec_id']; ?>" align="center" width="18%"> <?php echo $this->_var['goods']['subtotal']; ?> </td>
                                        <td class="operate bd-bottom">
                                            <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; " class="del track"><?php echo $this->_var['lang']['drop']; ?></a>
                                            <?php if ($_SESSION['user_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                                            <p><a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_to_collect&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; " class="add-faverate track"><?php echo $this->_var['lang']['drop_to_collect']; ?></a></p>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </tbody>
                            </table>
                            </div>
                            <div id="bar-summary" class="bar-summary clearfix">
                                <input type="button" value="" class="bnt_blue_q" onclick="location.href='flow.php?step=clear'" title="清空购物车">
                                <div class="bar-summaryR">
                                    <div class="summary">数量总计：<span><em id="totalNumber"><?php echo $this->_var['total']['goods_count']; ?></em>件</span>产品金额总计(不含运费)：<span class="amount" id="amount"><?php echo $this->_var['total']['goods_price']; ?></span> </div>
                                    <div class="btn-panel"><a class="checkout track" href="flow.php?step=checkout" id="sp_cart_mycar_goPay"> 去结算&gt;&gt;</a> <input type="hidden" name="step" value="update_cart" /></div>
                                </div>
                            </div>
                            <span class="blank20"></span>
                            <div class="summaryR_Box">
                            	<div class="summary">数量总计：<span><em id="totalNumber"><?php echo $this->_var['total']['goods_count']; ?></em>件</span>产品金额总计(不含运费)：<span class="amount" id="amount"><?php echo $this->_var['total']['goods_price']; ?></span> </div>
                                <div class="btn-panel"><a class="checkout track" href="flow.php?step=checkout" id="sp_cart_mycar_goPay"> 去结算&gt;&gt;</a> <input type="hidden" name="step" value="update_cart" /></div>
                            </div>
                        </div>
            
                                </form> <?php if ($_SESSION['user_id'] > 0): ?>
                  
                   <script type="text/javascript" charset="utf-8">
                    function collect_to_flow(goodsId)
                    {
                      var goods        = new Object();
                      var spec_arr     = new Array();
                      var fittings_arr = new Array();
                      var number       = 1;
                      goods.spec     = spec_arr;
                      goods.goods_id = goodsId;
                      goods.number   = number;
                      goods.parent   = 0;
                      Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), collect_to_flow_response, 'POST', 'JSON');
                    }
                    function collect_to_flow_response(result)
                    {
                      if (result.error > 0)
                      {
                        // 如果需要缺货登记，跳转
                        if (result.error == 2)
                        {
                          if (confirm(result.message))
                          {
                            location.href = 'user.php?act=add_booking&id=' + result.goods_id;
                          }
                        }
                        else if (result.error == 6)
                        {
                          openSpeDiv(result.message, result.goods_id);
                        }
                        else
                        {
                          alert(result.message);
                        }
                      }
                      else
                      {
                        location.href = 'flow.php';
                      }
                    }
                  </script><?php endif; ?>
                    </div>
                    <?php if ($this->_var['fittings_list']): ?>
                    <?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?>
                    <script type="text/javascript" charset="utf-8">
                        function fittings_to_flow(goodsId,parentId){
                            var goods        = new Object();
                            var spec_arr     = new Array();
                            var number       = 1;
                            goods.spec     = spec_arr;
                            goods.goods_id = goodsId;
                            goods.number   = number;
                            goods.parent   = parentId;
                            Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), fittings_to_flow_response, 'POST', 'JSON');
                        }
                        function fittings_to_flow_response(result){
                            if (result.error > 0){
                                // 如果需要缺货登记，跳转
                                if (result.error == 2){
                                    if (confirm(result.message)){
                                        location.href = 'user.php?act=add_booking&id=' + result.goods_id;
                                    }
                                }else if (result.error == 6){
                                    openSpeDiv(result.message, result.goods_id, result.parent);
                                }else{
                                    alert(result.message);
                                }
                            }else{
                                location.href = 'flow.php';
                            }
                        }
                    </script>
                    <div class="section_content clearfix" >
                        <div id="tabnavs"><h2 class="nstep1_tit2"><?php echo $this->_var['lang']['goods_fittings']; ?></h2></div>
                        <form action="flow.php" method="post">
                            <div class="buylist2">
                                <ul class="other-teambuy">
                                    <?php $_from = $this->_var['fittings_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fittings');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['fittings']):
        $this->_foreach['no']['iteration']++;
?>
                                    <?php if ($this->_foreach['no']['iteration'] < 6): ?>
                                    <li>
                                        <a href="<?php echo $this->_var['fittings']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['fittings']['goods_name']); ?>"><img src="<?php echo $this->_var['fittings']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['fittings']['name']); ?>" width="175" height="254" /></a>
                                        <div class="text">
                                        	<p class="hpink"><a href="<?php echo $this->_var['fittings']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['fittings']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['fittings']['goods_name']); ?></a></p>
                                            <p class="hde"><em><?php echo $this->_var['fittings']['fittings_price']; ?></em></p>
                                        </div>
                                        <a class="pinkbtn" href="javascript:fittings_to_flow(<?php echo $this->_var['fittings']['goods_id']; ?>,<?php echo $this->_var['fittings']['parent_id']; ?>)">加入购物车</a>
                                    </li>
                                    <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                                <span class="blank20"></span>
                            </div>
                        </form>
                    </div>
                    <?php endif; ?>
                    <?php echo $this->fetch('library/recommend_hot_flow.lbi'); ?>
                    <?php echo $this->fetch('library/recommend_best_flow.lbi'); ?>
                </div>
            </div>
        </div>
        <script>
        	$(function(){
				var summary = $(".bar-summary");
				var summaryTop = summary.offset().top + summary.outerHeight();
				var summaryR_Box = $(".summaryR_Box");
				var summaryR_BoxH = summaryR_Box.outerHeight();
				var scrollTop=$(window).scrollTop();
				if(scrollTop < summaryTop){
					summaryR_Box.slideUp("show"),100;
				}else{
					summaryR_Box.slideDown("hide"),100;
				};
				$(window).scroll(function(){
					if( $(window).scrollTop() < summaryTop ){
						summaryR_Box.slideUp("show"),100;
					}else{
						summaryR_Box.slideDown("hide"),100;
					}
				})
				summaryR_Box.css({left:$(".HeadBox").offset().left})
				$("body").css({paddingBottom:summaryR_BoxH-35});
			})
        </script>
        <?php endif; ?>
  
  		<?php if ($this->_var['step'] == "consignee"): ?> 
        
<?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
<script type="text/javascript">
	region.isAdmin = false;
	<?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

	
	onload = function(){
		if (!document.all)
		{
		document.forms['theForm'].reset();
		}
	}
	
</script> 
<div id="location" class="stepby2"></div>

<div id="content"> 
<div class="FlowTitle consigneeTit"><span></span></div>
<div class="consigneeBox">
  	<?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
        $this->_foreach['no']['iteration']++;
?>
    <div class="consigneeBoxCon" style="border:0; padding:0;">
    	<form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)"><?php echo $this->fetch('library/consignee.lbi'); ?></form>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <span class="NewConsig"><a href="javascript:;"><em>+</em>新增收货地址</a></span>
</div>
<script>
$(function(){
	var ConNumber=$(".consigneeBoxCon").length;
	var NewConsig=$(".NewConsig");
	if( ConNumber <= 1 ){
		NewConsig.hide();
	}else{
		$(".consigneeBoxCon:last").hide();
	};
	NewConsig.click(function(){
		if( $(this).prev().css("display")=="none" ){
			$(this).prev().slideDown("show");
			$(this).find("a").html("<em>-</em>取消新增收货地址");
		}else{
			$(this).prev().slideUp("hide");
			$(this).find("a").html("<em>+</em>新增收货地址");
		}
	})
});
</script>
</div>
<?php endif; ?> 
  
<?php if ($this->_var['step'] == "checkout"): ?>
<div id="location" class="stepby3"></div>
<div id="content">
	<form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
    <script type="text/javascript">
		var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
        var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
	</script>
    <div class="FlowTitle consigneeTit"><span></span><a href="flow.php?step=consignee" class="f6">[ <?php echo $this->_var['lang']['modify']; ?> ]</a></div>
    <div class="consigneeBox bb0"><span class="msg"><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>　<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>　<?php echo $this->_var['consignee']['tel']; ?>　<?php echo htmlspecialchars($this->_var['consignee']['email']); ?></span></div>
    
    <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
    <div class="FlowTitle payTit"><span></span></div>
    <div class="consigneeBox PeisongPayCon bb0">
    	<div class="consigneeBoxCon peisong">
        	<h3><?php echo $this->_var['lang']['shipping_method']; ?></h3>
        	<ul>
            	<?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['shipping']):
        $this->_foreach['no']['iteration']++;
?>
            	<li><input name="shipping" type="radio" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked="true"<?php endif; ?> supportCod="<?php echo $this->_var['shipping']['support_cod']; ?>" insure="<?php echo $this->_var['shipping']['insure']; ?>" onclick="selectShipping(this)" id="Delivery_0<?php echo $this->_foreach['no']['iteration']; ?>" class="InputRadio" align="absmiddle" /><label for="Delivery_0<?php echo $this->_foreach['no']['iteration']; ?>"><?php echo $this->_var['shipping']['shipping_name']; ?>（<?php echo $this->_var['lang']['fee']; ?>：<?php echo $this->_var['shipping']['format_shipping_fee']; ?>）</label></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                
                <li><input name="need_insure" id="ECS_NEEDINSURE" type="checkbox"  onclick="selectInsure(this.checked)" value="1" <?php if ($this->_var['order']['need_insure']): ?>checked="true"<?php endif; ?> <?php if ($this->_var['insure_disabled']): ?>disabled="true"<?php endif; ?> class="InputRadio" /><label for="ECS_NEEDINSURE"> <?php echo $this->_var['lang']['need_insure']; ?> </label></li>
            </ul>
        </div>
    	<div class="consigneeBoxCon zhifu">
        	<h3><?php echo $this->_var['lang']['payment_method']; ?></h3>
        	<ul>
                <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['payment']):
        $this->_foreach['no']['iteration']++;
?>
            	<li>
                	<input type="radio" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?> id="Payment_0<?php echo $this->_foreach['no']['iteration']; ?>" class="InputRadio"/>
                    <label for="Payment_0<?php echo $this->_foreach['no']['iteration']; ?>"><?php echo $this->_var['payment']['pay_name']; ?>（<?php echo $this->_var['lang']['pay_fee']; ?>：<?php echo $this->_var['payment']['format_pay_fee']; ?>）</label>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
    <?php else: ?>
    <input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
    <?php endif; ?>
    
    
    <div class="FlowTitle otherTit" style="display:none;"><span></span></div>
    <div class="consigneeBox PeisongPayCon bb0" style="display:none">
    	<?php if ($this->_var['pack_list']): ?>
    	<div class="consigneeBoxCon packaging">
        	<h3><?php echo $this->_var['lang']['goods_package']; ?></h3>
            <ul>
            	<li><input type="radio" name="pack" value="0" <?php if ($this->_var['order']['pack_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" id="pack_0" class="InputRadio" /><label for="pack_0"><?php echo $this->_var['lang']['no_pack']; ?></label></li>
                <?php $_from = $this->_var['pack_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pack');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['pack']):
        $this->_foreach['no']['iteration']++;
?>
            	<li><input type="radio" name="pack" value="<?php echo $this->_var['pack']['pack_id']; ?>" <?php if ($this->_var['order']['pack_id'] == $this->_var['pack']['pack_id']): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" id="pack_0<?php echo $this->_foreach['no']['iteration']; ?>" class="InputRadio" /><label for="pack_0<?php echo $this->_foreach['no']['iteration']; ?>"><?php echo $this->_var['pack']['pack_name']; ?>（<?php echo $this->_var['lang']['price']; ?>：<?php echo $this->_var['pack']['format_pack_fee']; ?>）</label><?php if ($this->_var['pack']['pack_img']): ?><a href="data/packimg/<?php echo $this->_var['pack']['pack_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?>包装</a><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
        <?php endif; ?>
        <?php if ($this->_var['card_list']): ?>
        <div class="consigneeBoxCon packaging">
        	<h3><?php echo $this->_var['lang']['goods_card']; ?></h3>
            <ul>
            	<li><input type="radio" name="card" value="0" <?php if ($this->_var['order']['card_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectCard(this)" id="Card_0" class="InputRadio" /><label for="Card_0"><?php echo $this->_var['lang']['no_card']; ?></label></li>
                <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['card']):
        $this->_foreach['no']['iteration']++;
?>
                <li><input type="radio" name="card" value="<?php echo $this->_var['card']['card_id']; ?>" <?php if ($this->_var['order']['card_id'] == $this->_var['card']['card_id']): ?>checked="true"<?php endif; ?> onclick="selectCard(this)" id="Card_0<?php echo $this->_foreach['no']['iteration']; ?>" class="InputRadio" /><label for="Card_0<?php echo $this->_foreach['no']['iteration']; ?>"><?php echo $this->_var['card']['card_name']; ?>（<?php echo $this->_var['lang']['price']; ?>：<?php echo $this->_var['card']['format_card_fee']; ?>）</label><?php if ($this->_var['card']['card_img']): ?><a href="data/cardimg/<?php echo $this->_var['card']['card_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?>贺卡</a><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
        <?php endif; ?>
        <div class="consigneeBoxCon Promotions"></div>
    </div>
        
    <div class="FlowTitle shopTit"><span></span><?php if ($this->_var['allow_edit_cart']): ?><a href="flow.php" class="f6">[ <?php echo $this->_var['lang']['modify']; ?> ]</a><?php endif; ?></div>
	<div class="consigneeBox">
    	<div class="consigneeBoxCon shop_list" style="padding-bottom:20px; border-bottom:0;">
        	<table width="100%" align="center" border="0" cellpadding="5" cellspacing="0" bgcolor="#fff">
            	<tr>
                	<th bgcolor="#f5f5f5" style="border-right:0;">&nbsp;</th>
                	<th bgcolor="#f5f5f5" style="border-left:0;" width="50%"><?php echo $this->_var['lang']['goods_name']; ?></th>
                    <th bgcolor="#f5f5f5"><?php if ($this->_var['gb_deposit']): ?><?php echo $this->_var['lang']['deposit']; ?><?php else: ?><?php echo $this->_var['lang']['shop_prices']; ?><?php endif; ?></th>
                    <th bgcolor="#f5f5f5"><?php echo $this->_var['lang']['number']; ?></th>
                    <th bgcolor="#f5f5f5"><?php echo $this->_var['lang']['subtotal']; ?></th>
                </tr>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no']['iteration']++;
?>
                	<tr>
                        <td align="right" bgcolor="#fff" style="padding:5px 0; border-right:0;"><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="58" height="58"/></a></td>
                        <td class="name" bgcolor="#fff" style="padding-left:10px;">
                        	<?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                            <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
                            <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
                                <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
                                <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </div>
                            <?php else: ?>
                            <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a>
                            <p><?php echo $this->_var['goods']['goods_attr']; ?></p>
                            <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                            <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                            <?php elseif ($this->_var['goods']['is_gift']): ?>
                            <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                            <?php endif; ?> 
                        	<?php endif; ?> 
                        	<?php if ($this->_var['goods']['is_shipping']): ?>(<span style="color:#FF0000"><?php echo $this->_var['lang']['free_goods']; ?></span>)<?php endif; ?>
                        </td>
                        <td align="center"><?php echo $this->_var['goods']['formated_goods_price']; ?></td>
                        <td align="center"><?php echo $this->_var['goods']['goods_number']; ?></td>
                        <td align="center" class="Price"><?php echo $this->_var['goods']['formated_subtotal']; ?></td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </table>
            <div class="blank10"></div>
            <div class="Promotions f_l" style="width:75%; display:none">
            	<ul style="padding-left:0;">
                	<li style="width:100%;">
                        <span><?php echo $this->_var['lang']['order_postscript']; ?>：</span>
                        <input name="postscript" id="postscript" class="coupon-text" type="text" value="<?php echo htmlspecialchars($this->_var['order']['postscript']); ?>" style="width:60%;" />
                    </li>
                    
                    <?php if ($this->_var['allow_use_surplus']): ?>
                    <li style="width:100%;">
                        <span><?php echo $this->_var['lang']['use_surplus']; ?>：</span>
                        <input name="surplus" type="text" id="ECS_SURPLUS" size="10" class="coupon-text" value="<?php echo empty($this->_var['order']['surplus']) ? '0' : $this->_var['order']['surplus']; ?>" onblur="changeSurplus(this.value)" <?php if ($this->_var['disable_surplus']): ?>disabled="disabled"<?php endif; ?> />
                        <span><?php echo $this->_var['lang']['your_surplus']; ?><?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?></span>
                        <span id="ECS_SURPLUS_NOTICE" class="notice"></span>
                    </li>
                    <?php endif; ?>
                    
                    <?php if ($this->_var['allow_use_integral']): ?>
                    <li style="width:100%;">
                        <span><?php echo $this->_var['lang']['use_integral']; ?></span>
                        <input name="integral" type="text" class="coupon-text" id="ECS_INTEGRAL" onblur="changeIntegral(this.value)" value="<?php echo empty($this->_var['order']['integral']) ? '0' : $this->_var['order']['integral']; ?>" size="10" />
                        <span><?php echo $this->_var['lang']['can_use_integral']; ?>:<?php echo empty($this->_var['your_integral']) ? '0' : $this->_var['your_integral']; ?> <?php echo $this->_var['points_name']; ?>，<?php echo $this->_var['lang']['noworder_can_integral']; ?><?php echo $this->_var['order_max_integral']; ?>  <?php echo $this->_var['points_name']; ?>. </span>
                        <span id="ECS_INTEGRAL_NOTICE" class="notice"></span>
                    </li>
                    <?php endif; ?>
                    
                    <?php if ($this->_var['allow_use_bonus']): ?>
                    <li style="width:100%;">
                        <span><?php echo $this->_var['lang']['use_bonus']; ?>：</span>
                        <span><?php echo $this->_var['lang']['select_bonus']; ?></span>
                        <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="border:1px solid #ccc;">
                            <option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
                            <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
                            <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </select>
                        <span><?php echo $this->_var['lang']['input_bonus_no']; ?></span>
                        <input name="bonus_sn" class="coupon-text" type="text" size="15" value="<?php echo $this->_var['order']['bonus_sn']; ?>" />
                        <input name="validate_bonus" type="button" class="coupon-btn" value="<?php echo $this->_var['lang']['validate_bonus']; ?>" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" style="vertical-align:middle;" />
                    </li>
                    <?php endif; ?>
                    
                    <?php if ($this->_var['inv_content_list']): ?>
                    <li style="width:100%;">
                        <span><?php echo $this->_var['lang']['invoice']; ?>：</span>
                        <input name="need_inv" type="checkbox"  class="input" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" <?php if ($this->_var['order']['need_inv']): ?>checked="true"<?php endif; ?> />
                        <?php if ($this->_var['inv_type_list']): ?>
                        <span><?php echo $this->_var['lang']['invoice_type']; ?></span>
                        <select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()" style="border:1px solid #ccc;"><?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?></select>
                        <?php endif; ?>
                        <span><?php echo $this->_var['lang']['invoice_title']; ?></span>
                        <input name="inv_payee" type="text" class="input" id="ECS_INVPAYEE" size="20" <?php if (! $this->_var['order']['need_inv']): ?>disabled="true"<?php endif; ?> value="<?php echo $this->_var['order']['inv_payee']; ?>" onblur="changeNeedInv()" />
                        <span><?php echo $this->_var['lang']['invoice_content']; ?></span>
                        <select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?>  onchange="changeNeedInv()" style="border:1px solid #ccc;"><?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?></select>
                    </li>
                    <?php endif; ?>
                    
                    <?php if ($this->_var['how_oos_list']): ?>
                    <li style="width:100%;">
                        <span><?php echo $this->_var['lang']['booking_process']; ?>：</span>
                        <?php $_from = $this->_var['how_oos_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('how_oos_id', 'how_oos_name');if (count($_from)):
    foreach ($_from AS $this->_var['how_oos_id'] => $this->_var['how_oos_name']):
?>
                        <input name="how_oos" type="radio" value="<?php echo $this->_var['how_oos_id']; ?>" <?php if ($this->_var['order']['how_oos'] == $this->_var['how_oos_id']): ?>checked<?php endif; ?> onclick="changeOOS(this)" />
                        <label><?php echo $this->_var['how_oos_name']; ?></label>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="f_r" style="width:25%;"><?php echo $this->fetch('library/order_total.lbi'); ?></div>
            <div class="blank0"></div>
        </div>
        <div class="OrderSub">
        	<input type="submit" value="提交订单"/>
            <input type="hidden" name="step" value="done" />
            <span>请核对以上信息，确认无误后点击"提交订单"</span>
        </div>
    </div>
	</form>
</div>
	<?php endif; ?>
  
  <?php if ($this->_var['step'] == "done"): ?> 
  
  <div class="flowBox vancl_none" style="margin:5px auto 70px auto;">
    <h6 style="text-align:center; height:30px; line-height:30px;"><?php echo $this->_var['lang']['remember_order_number']; ?>: <font style="color:#db0179"><?php echo $this->_var['order']['order_sn']; ?></font></h6>
    <table width="99%" align="center" border="0" cellpadding="15" cellspacing="0" bgcolor="#fff" style="border:1px solid #ddd; margin:20px auto;" >
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php if ($this->_var['order']['shipping_name']): ?><?php echo $this->_var['lang']['select_shipping']; ?>: <strong><?php echo $this->_var['order']['shipping_name']; ?></strong>，<?php endif; ?><?php echo $this->_var['lang']['select_payment']; ?>: <strong><?php echo $this->_var['order']['pay_name']; ?></strong>。<?php echo $this->_var['lang']['order_amount']; ?>: <strong style="color:#db0179;"><?php echo $this->_var['total']['amount_formated']; ?></strong></td>
      </tr>
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['order']['pay_desc']; ?></td>
      </tr>
      <?php if ($this->_var['pay_online']): ?> 
      
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['pay_online']; ?></td>
      </tr>
      <?php endif; ?>
    </table>
    <?php if ($this->_var['virtual_card']): ?>
    <div style="text-align:center;overflow:hidden;border:1px solid #E2C822;background:#FFF9D7;margin:10px;padding:10px 50px 30px;"> 
      <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
      <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
      <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
      <ul style="list-style:none;padding:0;margin:0;clear:both">
        <?php if ($this->_var['card']['card_sn']): ?>
        <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span> </li>
        <?php endif; ?> 
        <?php if ($this->_var['card']['card_password']): ?>
        <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span> </li>
        <?php endif; ?> 
        <?php if ($this->_var['card']['end_date']): ?>
        <li style="float:left;"> <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?> </li>
        <?php endif; ?>
      </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <?php endif; ?>
    <p style="text-align:center; margin-bottom:20px; font-size:14px;"><?php echo $this->_var['order_submit_back']; ?></p>
  </div>
  <?php endif; ?> 
  
  <?php if ($this->_var['step'] == "login"): ?> 
  <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?> 
  <script type="text/javascript">
        <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        
        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        
        </script> 

<div class="login_wrapper" style="margin-top:0;">
  	<h2 class="user"></h2>
  	<div class="login">
    	<form action="flow.php?step=login" method="post" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)">
        	<ul>
            	<li>
                	<label><?php echo $this->_var['lang']['username']; ?>：</label>
                    <input name="username" type="text" class="i_text" id="username" />
                    <span class="blank0"></span>
                    <p >&nbsp;</p>
                </li>
                <li>
                	<label><?php echo $this->_var['lang']['password']; ?>：</label>
                    <input name="password" class="i_text" type="password" />
                    <span class="blank0"></span>
                    <p >&nbsp;</p>
                </li>
                <?php if ($this->_var['enabled_login_captcha']): ?>
                <li>
                	<label><?php echo $this->_var['lang']['comment_captcha']; ?>：</label>
                    <input type="text" size="8" name="captcha" class="i_text" style="width:65px;" />
                    <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" height="35" style=" margin-left:9px;vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" />
                    <span class="blank0"></span>
                    <p >&nbsp;</p>
                </li>
                <?php endif; ?>
                <li>
                	<label>&nbsp;</label>
                    <input type="submit" class="log" name="login" value="<?php echo $this->_var['lang']['forthwith_login']; ?>" style="margin-right:10px;"/>
                    <?php if ($this->_var['anonymous_buy'] == 1): ?>
                    <input type="button" class="log" value="不登录" onclick="location.href='flow.php?step=consignee&amp;direct_shopping=1'" />
                    <?php endif; ?>
                    <input name="act" type="hidden" value="signin" />
                    <span class="blank0"></span>
                    <p >&nbsp;</p>
                </li>
            </ul>
        </form>
        <?php if ($this->_var['need_rechoose_gift']): ?>
        <tr>
        	<td colspan="2" align="center" style="border-top:1px #ccc solid; padding:5px; color:red;"><?php echo $this->_var['lang']['gift_remainder']; ?></td>
        </tr>
        <?php endif; ?>
    </div>
    <div class="advert"><b>还不是5U商城会员？</b><a href="user.php?act=register" class="log">注册新用户</a></div>
    <div class="clear"></div>
    <div class="fm_gray"></div>
</div>
 
  <?php endif; ?>
  
  </div>
</div>



<div id="RightFlNav" class="crollTop" style="top:62%">
	<ul>
        <li><a href="javascript:;" class="FlToTop ToTop"></a></li>
    </ul>
</div>
<script>
	$(function(){
		var RightFlNav = $("#RightFlNav");
		var bodyW = $(window).width();
		var RightFlNavW = $("#RightFlNav").outerWidth();
		RightFlNav.css({"right":(bodyW-1140)/2-RightFlNavW-20});
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
		
		//二维码
		var isClose=true;
		$(window).scroll(function(){
			var ScrollCon = $(".ScrollTop");
			var ScrollTop = $(window).scrollTop();
			if( ScrollTop>=100 && isClose){
				ScrollCon.show();
			}else{
				ScrollCon.hide();
			};
		})
		$(".ScanClose").click(function(){
			$(this).parent().hide();
			isClose=false;
		})
		
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
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</html>
