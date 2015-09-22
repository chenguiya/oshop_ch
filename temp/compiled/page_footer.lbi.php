
<div class="f_mbs_info">
	<div class="f_mbs_info">
    	<img src="themes/moonbasha/images/mbs_img_1.jpg">
        <img src="themes/moonbasha/images/mbs_img_2.jpg">
        <img src="themes/moonbasha/images/mbs_img_3.jpg">
        <img src="themes/moonbasha/images/mbs_img_4.jpg">
    </div>
</div>
 

<div id="footer" style="display:none;">
  <div class="text"> <?php echo $this->_var['shop_address']; ?> 
    <?php if ($this->_var['service_phone']): ?> 
    Tel: <?php echo $this->_var['service_phone']; ?> 
    <?php endif; ?> 
    <?php if ($this->_var['service_email']): ?> 
    E-mail: <?php echo $this->_var['service_email']; ?><br />
    <?php endif; ?> 
    <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/moonbasha/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <img src="themes/moonbasha/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
  </div>
</div>

<div class="copyRight">
	<div style="width: 980px; margin: auto; position: relative;">
    	
    	<?php if ($this->_var['navigator_list']['bottom']): ?> 
        <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_53187500_1442895775');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_53187500_1442895775']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?><a href="<?php echo $this->_var['nav_0_53187500_1442895775']['url']; ?>" <?php if ($this->_var['nav_0_53187500_1442895775']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_53187500_1442895775']['name']; ?></a>&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?>
        
        <br>
        <?php echo $this->_var['copyright']; ?>常年法律顾问：上海华宏律师事务所
        <p style="color:#999;">上海市普陀区中山北路2911号中关村科技大厦2402        Tel: 4000 021 758 </p>
        <div align="center"><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/moonbasha/images/ecmoban.gif" alt="ECShop模板"></a></div>
    </div>
</div>


<div class="subFooter">
	<img src="themes/moonbasha/images/mbs_f_01.jpg">
    <img src="themes/moonbasha/images/mbs_f_02.jpg">
    <a href="http://http://weiquan.moonbasa.com/" target="_blank"><img src="themes/moonbasha/images/logo.jpg"></a>
    <img src="themes/moonbasha/images/mbs_f_04.jpg">
    <img src="themes/moonbasha/images/mbs_f_05.jpg">
    <a href="http://www.ccredit.cn/zx/zxt.aspx?id=65" target="_blank"><img src="themes/moonbasha/images/mbs_f_06.jpg"></a>
    <a href="https://search.szfw.org/cert/l/CX20120920001676001786?id=5" target="_blank"><img src="themes/moonbasha/images/mbs_f_07.jpg"></a>
</div>




