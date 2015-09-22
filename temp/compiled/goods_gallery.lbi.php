<div class="danpin_colLef">
	<div class="danpinLeft">
    	<div class="smallImg">
        	<div class="smallImgUp upper"></div>
            <div class="imageMenu">
                <ul id="imageMenu">
                    <?php if ($this->_var['pictures']): ?> 
                    <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>
                    <li class="track"><center><a class="SpriteSmallImgs" href="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>" rel="zoom-id: Zoomer" rev="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>"><img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"></a></center></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    <?php endif; ?>
                </ul>
            </div>
            <div class="smallImgDown downHover"></div>
        </div>
    </div>
    <div class="danpinColCenter">
        <div class="bigImg" id="vertical">
            <a href="<?php echo $this->_var['pictures']['0']['img_url']; ?>" class="MagicZoomPlus" id="Zoomer" rel="hint-text: ; selectors-effect: false; selectors-class: onlickImg; zoom-distance: 22;zoom-width: 440; zoom-height: 400;"><img id="midimg" src="<?php echo $this->_var['goods']['goods_img']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"></a>
            <div id="winSelector" style="left: 0px; top: 36px; display: none; "></div>
        </div>
    </div>
</div>