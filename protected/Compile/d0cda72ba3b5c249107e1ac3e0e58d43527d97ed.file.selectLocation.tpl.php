<?php /* Smarty version Smarty-3.1.19, created on 2019-01-30 23:17:47
         compiled from "/var/www/html/aspencreek_dev/protected/Views/elements/selectLocation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19189954425c52309b705258-37498400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0cda72ba3b5c249107e1ac3e0e58d43527d97ed' => 
    array (
      0 => '/var/www/html/aspencreek_dev/protected/Views/elements/selectLocation.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19189954425c52309b705258-37498400',
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
  'unifunc' => 'content_5c52309b70bc56_76612232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c52309b70bc56_76612232')) {function content_5c52309b70bc56_76612232($_smarty_tpl) {?><script type="text/javascript">
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
