<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 20:15:31
         compiled from "/var/www/html/aptitudecare/protected/Views/elements/module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2680653295c92ac534ee813-23763017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90337cd5e89a1b7295fa0fe556cfa62e99b7c3bf' => 
    array (
      0 => '/var/www/html/aptitudecare/protected/Views/elements/module.tpl',
      1 => 1558026410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2680653295c92ac534ee813-23763017',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c92ac534f2bf4_34469889',
  'variables' => 
  array (
    'modules' => 0,
    'm' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c92ac534f2bf4_34469889')) {function content_5c92ac534f2bf4_34469889($_smarty_tpl) {?><script>
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
