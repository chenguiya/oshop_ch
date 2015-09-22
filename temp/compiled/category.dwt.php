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
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>

<div class="wrapper">
<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php $this->assign('ads_id','47'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
<?php if ($this->_var['cat']['id'] == $this->_var['cat_level'] [ 0 ]): ?>
<div class="subCategories">
<ul class="subCat2">
	<li idd="<?php echo $this->_var['cat']['id']; ?>" class="cat_alls <?php if ($this->_var['cat_level'] [ 0 ] == $this->_var['category']): ?>active<?php endif; ?>" data-catid="<?php echo $this->_var['cat_level']['0']; ?>"><a href="category.php?id=<?php echo $this->_var['cat_level']['0']; ?>"><i></i>全部</a></li>
<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['foo']['iteration']++;
?>
	<li class="cat_god<?php echo $this->_var['child']['num']; ?> <?php if ($this->_var['cat_level'] [ 1 ] == $this->_var['child']['id']): ?>active<?php endif; ?>" data-catid="<?php echo $this->_var['child']['id']; ?>"><a href="<?php echo $this->_var['child']['url']; ?>"><i></i><?php echo $this->_var['child']['name']; ?></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
<?php endif; ?> 
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
<div class="chapList">
    <?php echo $this->fetch('library/goods_list.lbi'); ?>
</div>
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