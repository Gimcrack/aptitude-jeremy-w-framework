<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 01:15:14
         compiled from "/var/www/html/riverside_dev/modules/Dietary/Views/photos/photos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:620562815c4a6322ac2156-58906949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4338f153b2d4bdfaffb5884319123450d2fe8ed' => 
    array (
      0 => '/var/www/html/riverside_dev/modules/Dietary/Views/photos/photos.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '620562815c4a6322ac2156-58906949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'location' => 0,
    'photos' => 0,
    'categories' => 0,
    'facility_selected' => 0,
    'subcat_selected' => 0,
    'category' => 0,
    'IMAGES' => 0,
    'FILES' => 0,
    'photo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4a6322ad2e03_57328307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a6322ad2e03_57328307')) {function content_5c4a6322ad2e03_57328307($_smarty_tpl) {?><div class="container">
	<a class="btn btn-primary right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&page=photos&action=upload_photos&location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Upload Photos</a>
	<div class="clear"></div>
	<br>
	<?php if (!isset($_smarty_tpl->tpl_vars['photos']->value)) {?>
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
		<div class="col-md-3 col-lg-2 col-sm-4 col-6">
			<div class="photo-folder">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&amp;page=photos&amp;action=photos&amp;<?php if ($_smarty_tpl->tpl_vars['facility_selected']->value) {?>facility_id<?php } elseif ($_smarty_tpl->tpl_vars['subcat_selected']->value) {?>subcategory_id<?php } else { ?>category_id<?php }?>=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/folder-icon.png" alt="">
					<div class="folder-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</div>							
				</a>
			</div>
		</div>	
		<?php } ?>
		<?php if (!$_smarty_tpl->tpl_vars['subcat_selected']->value) {?>
		<div class="col-md-3 col-lg-2 col-6">
			<div class="photo-folder">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&amp;page=photos&amp;action=photos&amp;category_id=all_locations">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/folder-icon.png" alt="">
					<div class="folder-name">Individual Locations</div>	
				</a>
			</div>
		</div>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['subcat_selected']->value) {?>
	<button class="btn btn-primary right" onclick="history.back()">Back</button>
	<?php }?>
	<?php } else { ?>
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
		<div class="col-md-3 col-lg-2">
			<div class="item-image">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FILES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/dietary_photos/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value->filename, ENT_QUOTES, 'ISO-8859-1');?>
" rel="shadowbox">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FILES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/dietary_photos/thumbnails/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value->filename, ENT_QUOTES, 'ISO-8859-1');?>
" class="img-thumbnail" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value->filename, ENT_QUOTES, 'ISO-8859-1');?>
">
				</a>
			</div>
		</div>
		<?php } ?>
	</div>
	<button class="btn btn-primary right" onclick="history.back()">Back</button>
	<?php }?>
	
</div><?php }} ?>
