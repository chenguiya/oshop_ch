<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,vancl_common.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js')); ?>
<div id="Head">
	<div class="menuTopRight" style="display:none"><div id="shoppingCarNone" class="active"> <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div></div>
	<div class="mainNavBox" id="mainNavBox">
		<div class="mainNavTop">
		     <!--<div class="back_home"><a href=""></a></div>-->
			<div class="mainTextNav">
				<ul class="mainLeftNav">
					<li><a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="track cur"<?php endif; ?>><?php echo $this->_var['lang']['home']; ?></a></li>
					<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['noo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noo']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['noo']['iteration']++;
?>
					<?php if ($this->_foreach['noo']['iteration'] < 8): ?>
					<li><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> class="track<?php if ($this->_var['nav']['active'] == 1): ?> cur<?php endif; ?>"><?php echo $this->_var['nav']['name']; ?></a></li>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
