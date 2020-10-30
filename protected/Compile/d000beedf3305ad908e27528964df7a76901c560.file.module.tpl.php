<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 01:03:17
         compiled from "/var/www/html/riverside_dev/protected/Views/elements/module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:389186905c4a605532a078-55231061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd000beedf3305ad908e27528964df7a76901c560' => 
    array (
      0 => '/var/www/html/riverside_dev/protected/Views/elements/module.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '389186905c4a605532a078-55231061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules' => 0,
    'm' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4a605532fa53_20697269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a605532fa53_20697269')) {function content_5c4a605532fa53_20697269($_smarty_tpl) {?><script>
	$(document).ready(function() {
		$("#module").change(function() {
			var module = $("#module option:selected").val();
			window.location.href = SITE_URL + "/?module=" + module;
		});
	});
</script>


<?php if (count($_smarty_tpl->tpl_vars['modules']->value)>1) {?>
	<span class="text-grey">Module:</span>
	<select name="module" id="module" class="btn btn-primary dropdown-toggle dropdown-toggle-split">
		<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['m']->value->name) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</option>
		<?php } ?>
	</select>
	<?php }?>
<?php }} ?>
