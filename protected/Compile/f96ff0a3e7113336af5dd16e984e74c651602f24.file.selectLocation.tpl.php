<?php /* Smarty version Smarty-3.1.19, created on 2019-08-27 00:22:35
         compiled from "/var/www/html/aptitudecare/protected/Views/elements/selectLocation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10853980255c92ac534f3e13-93448235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f96ff0a3e7113336af5dd16e984e74c651602f24' => 
    array (
      0 => '/var/www/html/aptitudecare/protected/Views/elements/selectLocation.tpl',
      1 => 1566865130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10853980255c92ac534f3e13-93448235',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c92ac534f9294_81677731',
  'variables' => 
  array (
    'this' => 0,
    'locations' => 0,
    'location' => 0,
    'selectedLocation' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c92ac534f9294_81677731')) {function content_5c92ac534f9294_81677731($_smarty_tpl) {?><script type="text/javascript">
	$(document).ready(function() {
		$("#location").change(function() {
			window.location.href = SITE_URL + "/?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->page, ENT_QUOTES, 'UTF-8');?>
&action=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->action, ENT_QUOTES, 'UTF-8');?>
&location=" + $("option:selected", this).val();
		});
	});
</script>
	<select name="location" id="location" class="btn btn-primary dropdown-toggle dropdown-toggle-split">
		<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value->public_id==$_smarty_tpl->tpl_vars['selectedLocation']->value->public_id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
		<?php } ?>
	</select>
<?php }} ?>
