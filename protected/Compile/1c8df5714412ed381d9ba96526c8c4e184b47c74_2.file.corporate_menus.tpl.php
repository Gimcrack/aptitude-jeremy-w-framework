<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 15:53:25
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/corporate_menus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee1727559a0f2_78809358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c8df5714412ed381d9ba96526c8c4e184b47c74' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/corporate_menus.tpl',
      1 => 1586987310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:elements/pagination.tpl' => 1,
  ),
),false)) {
function content_5ee1727559a0f2_78809358 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedMenu']->value->name, ENT_QUOTES, 'UTF-8');?>
 Menu</h1>
		</div>
		<div class="col-md-2">
			<select name="menu" id="menu" class="form-control">
				<option value="">Select a menu...</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu', false, 'key', 'menu', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['menu']->value) {
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['selectedMenu']->value && $_smarty_tpl->tpl_vars['selectedMenu']->value->id == $_smarty_tpl->tpl_vars['menu']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>	
		</div>
	</div>



	<table class="table">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItems']->value, 'menuItem', false, NULL, 'menuItems', array (
  'first' => true,
  'iteration' => true,
  'last' => true,
  'index' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['total'];
?>	

		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['first'] : null)) {?>
		<tr>
			<th colspan="3" class="text-center">Day <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->day, ENT_QUOTES, 'UTF-8');?>
</th>
		</tr>
		<tr>
		<?php }?>
					
			<td class="menu-content">
				<div class="menu">
					<div class="menu-info <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->type == "MenuChange") {?> background-grey<?php }?>">
						<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItem']->value->content, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
							<li><?php echo htmlspecialchars(htmlspecialchars_decode($_smarty_tpl->tpl_vars['menu']->value, ENT_QUOTES), ENT_QUOTES, 'UTF-8');?>
</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
					<div class="text-right">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=menu&amp;action=edit_corporate_menu&amp;menu=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedMenu']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;type=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->type, ENT_QUOTES, 'UTF-8');?>
&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page, ENT_QUOTES, 'UTF-8');?>
" class="btn-table">Edit</a>
					</div>
				</div>
			</td>

		<?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['iteration'] : null) % 3)) {?>
		</tr>
		<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['last'] : null)) {?>
		<tr>
			<th colspan="3" class="text-center">Day <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->day+1, ENT_QUOTES, 'UTF-8');?>
</th>
		</tr>
		<tr>
		<?php }?>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>

	<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)) {?>
	<div class="row text-center">
		<div class="col-12">
			<?php $_smarty_tpl->_assignInScope('url', ((string)$_smarty_tpl->tpl_vars['SITE_URL']->value)."?module=Dietary&page=dietary&action=corporate_menus&menu=".((string)$_smarty_tpl->tpl_vars['selectedMenu']->value->id));?>
			<?php $_smarty_tpl->_subTemplateRender("file:elements/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>			
	<?php }?>


</div>
<?php }
}
