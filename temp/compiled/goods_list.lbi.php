<div class="fbListPruArea">
    <?php if ($this->_var['pager']['display'] == 'grid'): ?>
    <div class="productList">
        <ul class="ContentMonitor">
            <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo']['iteration']++;
?> 
            <?php if ($this->_var['goods']['goods_id']): ?>
            <li id="gItem_<?php echo $this->_var['goods']['goods_id']; ?>" class="scListArea">
                <div class="god_imgs"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="track"> <img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" class="productLazyLoad" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="display: inline; "></a> </div>
				<p class="Product-Name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="track"><?php echo htmlspecialchars($this->_var['goods']['name']); ?></a></p>
                <div class="Product-Price">RMB:<strong> <?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong></div>
            </li>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php if (($this->_foreach['foo']['iteration'] - 1) <= 0): ?>
            <center>
                <br>没有找到产品
            </center>
            <?php endif; ?>
		</ul>
    </div>
    <?php endif; ?>
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
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>