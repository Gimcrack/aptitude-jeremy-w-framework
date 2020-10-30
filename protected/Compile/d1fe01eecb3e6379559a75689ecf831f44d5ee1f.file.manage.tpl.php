<?php /* Smarty version Smarty-3.1.19, created on 2020-04-15 13:33:43
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2320567355d800eddac6946-12523057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1fe01eecb3e6379559a75689ecf831f44d5ee1f' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/manage.tpl',
      1 => 1586986420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2320567355d800eddac6946-12523057',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d800eddad1472_60703424',
  'variables' => 
  array (
    'menus' => 0,
    'menu' => 0,
    'SITE_URL' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d800eddad1472_60703424')) {function content_5d800eddad1472_60703424($_smarty_tpl) {?><h1>Manage Menus</h1>


<table class="table">
	<tr>
		<th>Menu Name</th>
		<th style="width:20px;font-weight:normal"><span class="text-darker-grey">Edit</span></th>
		<th style="width:20px;font-weight:normal"><span class="text-darker-grey">Delete</span></th>
	<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
	<tr>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'UTF-8');?>
</td>
		<td>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=info&amp;action=edit_menu&amp;menu=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
				<i class="fas fa-edit"></i>
			</a>
		</td>
		<td>
			<a href="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" data-toggle="modal" data-target="#deleteModal" class="delete">
				<i class="fas fa-trash"></i>
				<input type="hidden" name="public_id" class="public-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" />
			</a>
		</td>
	</tr>
	<?php } ?>
</table>

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("deleteModal"), ENT_QUOTES, 'UTF-8');?>

<?php }} ?>
