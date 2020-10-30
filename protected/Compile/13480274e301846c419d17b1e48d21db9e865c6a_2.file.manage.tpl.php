<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 15:53:24
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee172740fa941_28959066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13480274e301846c419d17b1e48d21db9e865c6a' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/manage.tpl',
      1 => 1586986420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee172740fa941_28959066 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Manage Menus</h1>


<table class="table">
	<tr>
		<th>Menu Name</th>
		<th style="width:20px;font-weight:normal"><span class="text-darker-grey">Edit</span></th>
		<th style="width:20px;font-weight:normal"><span class="text-darker-grey">Delete</span></th>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
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
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("deleteModal"), ENT_QUOTES, 'UTF-8');?>

<?php }
}
