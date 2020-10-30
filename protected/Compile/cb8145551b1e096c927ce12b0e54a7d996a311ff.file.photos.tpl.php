<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 20:26:27
         compiled from "/var/www/html/aptitudecare/modules/Dietary/Views/photos/photos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15846994435cddc77326a781-06910654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb8145551b1e096c927ce12b0e54a7d996a311ff' => 
    array (
      0 => '/var/www/html/aptitudecare/modules/Dietary/Views/photos/photos.tpl',
      1 => 1553125343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15846994435cddc77326a781-06910654',
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
  'unifunc' => 'content_5cddc773278f96_65022026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cddc773278f96_65022026')) {function content_5cddc773278f96_65022026($_smarty_tpl) {?><div class="container">
	<a class="btn btn-primary right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&page=photos&action=upload_photos&location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
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
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=photos&amp;action=photos&amp;<?php if ($_smarty_tpl->tpl_vars['facility_selected']->value) {?>facility_id<?php } elseif ($_smarty_tpl->tpl_vars['subcat_selected']->value) {?>subcategory_id<?php } else { ?>category_id<?php }?>=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->id, ENT_QUOTES, 'UTF-8');?>
">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/folder-icon.png" alt="">
					<div class="folder-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8');?>
</div>							
				</a>
			</div>
		</div>	
		<?php } ?>
		<?php if (!$_smarty_tpl->tpl_vars['subcat_selected']->value) {?>
		<div class="col-md-3 col-lg-2 col-6">
			<div class="photo-folder">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=photos&amp;action=photos&amp;category_id=all_locations">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
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
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FILES']->value, ENT_QUOTES, 'UTF-8');?>
/dietary_photos/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value->filename, ENT_QUOTES, 'UTF-8');?>
" rel="shadowbox">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FILES']->value, ENT_QUOTES, 'UTF-8');?>
/dietary_photos/thumbnails/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value->filename, ENT_QUOTES, 'UTF-8');?>
" class="img-thumbnail" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value->filename, ENT_QUOTES, 'UTF-8');?>
">
				</a>
			</div>
		</div>
		<?php } ?>
	</div>
	<button class="btn btn-primary right" onclick="history.back()">Back</button>
	<?php }?>
	
</div><?php }} ?>
