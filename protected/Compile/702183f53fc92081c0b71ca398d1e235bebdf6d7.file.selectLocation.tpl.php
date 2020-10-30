<?php /* Smarty version Smarty-3.1.19, created on 2020-03-25 12:43:06
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/selectLocation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16301447505d787ad46a9e38-94231686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '702183f53fc92081c0b71ca398d1e235bebdf6d7' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/selectLocation.tpl',
      1 => 1585168985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16301447505d787ad46a9e38-94231686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d787ad46b0986_15412524',
  'variables' => 
  array (
    'this' => 0,
    'locations' => 0,
    'location' => 0,
    'SITE_URL' => 0,
    'selectedLocation' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d787ad46b0986_15412524')) {function content_5d787ad46b0986_15412524($_smarty_tpl) {?><script type="text/javascript">
	$(document).ready(function() {
		$("#location").change(function() {
			window.location.href = SITE_URL + "/?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->page, ENT_QUOTES, 'UTF-8');?>
&action=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->action, ENT_QUOTES, 'UTF-8');?>
&location=" + $("option:selected", this).val();
		});
	});
</script>

<?php if (count($_smarty_tpl->tpl_vars['locations']->value)>1) {?>
<div class="dropdown">
	<button class="btn btn-secondary dropdown-toggle" type="button" id="locationDropdownButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>

	</button>
	<?php if (count($_smarty_tpl->tpl_vars['locations']->value)>1) {?>
	<div class="dropdown-menu" aria-labelledby="locationDropdownButton">
	<select name="location" id="location" class="btn btn-primary dropdown-toggle dropdown-toggle-split">
		<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
		<a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->page, ENT_QUOTES, 'UTF-8');?>
&action=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->action, ENT_QUOTES, 'UTF-8');?>
&location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item <?php if ($_smarty_tpl->tpl_vars['selectedLocation']->value==$_smarty_tpl->tpl_vars['location']->value->name) {?> selected<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
		<?php } ?>		
	</div>
	<?php }?>
</div>
<?php }?>
<?php }} ?>
