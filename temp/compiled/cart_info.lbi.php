
<div class="top_cart">
	<a class="shopborder track" href="flow.php" id="shoppingcar_link">购物车<span car_product_total="shoppingCar_product_totalcount"><?php echo $this->_var['number']; ?></span></a>
</div>

<div class="shopDropList"> 
    <?php if ($this->_var['cart_list']): ?>
    <div class="havepru">
    	<div class="havepruMid">
            <ul>
            	<?php $_from = $this->_var['cart_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                <li>
                	<div class="carListLeft"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img width="36" heigth="36" alt="<?php echo $this->_var['goods']['name']; ?>" src="<?php echo $this->_var['goods']['thumb']; ?>"></a></div>
                    <div class="carListRight">
                    	<h3><a title="<?php echo $this->_var['goods']['name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['short_name']; ?></a></h3>
                        <div class="priceArea"> <strong>￥<?php echo $this->_var['goods']['shop_price']; ?></strong><em>×<?php echo $this->_var['goods']['goods_number']; ?></em> </div>
                    </div>
                    <div class="carListDelect"> <a style="cursor:pointer;" class="track" href="javascript:deleteCartGoods(<?php echo $this->_var['goods']['rec_id']; ?>);">删除</a></div>
                    <span class="blank0"></span>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <div class="ShopCarPage">
            	<div class="SCtotalpage">
                	<br>
                	<div class="clearFix"><span>共<strong><?php echo $this->_var['number']; ?></strong>件商品</span>合计：<strong>￥<?php echo $this->_var['amount']; ?></strong></div>
                    <a rel="nofollow" href="flow.php" class="checkout_btn">去结算</a>
                </div>
        	</div>
        </div>
    </div>
    <?php else: ?>
    <div class="shopnopru">
    	<div class="SCtotalpageno">您的购物车中没有任何商品</div>
    </div>
    <?php endif; ?>
</div>
