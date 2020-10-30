<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 23:47:33
         compiled from "/var/www/html/synesis_dev/protected/Views/elements/selectLocation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17129872035c4ba015239bb2-00494027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b2fcd17c3cfb38b8247ccb3a5e89f7d5aaf6ee' => 
    array (
      0 => '/var/www/html/synesis_dev/protected/Views/elements/selectLocation.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17129872035c4ba015239bb2-00494027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'locations' => 0,
    'location' => 0,
    'selectedLocation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba015240667_56717486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba015240667_56717486')) {function content_5c4ba015240667_56717486($_smarty_tpl) {?><script type="text/javascript">
	$(document).ready(function() {
		$("#location").change(function() {
			window.location.href = SITE_URL + "/?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->page, ENT_QUOTES, 'ISO-8859-1');?>
&action=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->action, ENT_QUOTES, 'ISO-8859-1');?>
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
			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value->public_id==$_smarty_tpl->tpl_vars['selectedLocation']->value->public_id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</option>
		<?php } ?>
	</select>
<?php }} ?>
