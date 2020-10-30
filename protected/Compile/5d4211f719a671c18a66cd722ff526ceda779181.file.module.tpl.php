<?php /* Smarty version Smarty-3.1.19, created on 2020-03-25 13:58:31
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8374621615d787ad46a2d69-45722933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d4211f719a671c18a66cd722ff526ceda779181' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/module.tpl',
      1 => 1585173508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8374621615d787ad46a2d69-45722933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d787ad46a8bb4_13539969',
  'variables' => 
  array (
    'modules' => 0,
    'this' => 0,
    'module' => 0,
    'm' => 0,
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d787ad46a8bb4_13539969')) {function content_5d787ad46a8bb4_13539969($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['modules']->value)>1) {?>
	<div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="moduleDropdownButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->module, ENT_QUOTES, 'UTF-8');?>

		</button>
		<div class="dropdown-menu" aria-labelledby="moduleDropdownButton">
			<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
			<a class="dropdown-item <?php if ($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['m']->value->name) {?> selected<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->name, ENT_QUOTES, 'UTF-8');?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
			<?php } ?>
		</div>
	</div>

<?php }?><?php }} ?>
