<?php if ($this->_var['helps']): ?>
<div class="footer">
	<div class="footerBox">
        <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['foo']['iteration']++;
?>
        <?php if ($this->_foreach['foo']['iteration'] < 7): ?>
        <ul>
            <li class="lititle"><?php echo $this->_var['help_cat']['cat_name']; ?></li>
            <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['noo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noo']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['noo']['iteration']++;
?>
            <?php if ($this->_foreach['noo']['iteration'] < 5): ?>
            <li><a target="_blank" href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></li>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <ul>
        	<li class="lititle">咨询订购</li>
            <li>400-716-2828</li>
            <li class="lititle">客户服务</li>
            <li>400-716-7878</li>
        </ul>
    </div>
</div>
<?php endif; ?>