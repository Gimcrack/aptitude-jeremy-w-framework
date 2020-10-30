<?php /* Smarty version Smarty-3.1.19, created on 2020-04-15 13:48:31
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/corporate_menus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16335837665d800ef3887328-15239608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b972ab96d53cd4d78f8c7df9d48c4a48b909acf' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/corporate_menus.tpl',
      1 => 1586987310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16335837665d800ef3887328-15239608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d800ef38aeb85_18841829',
  'variables' => 
  array (
    'selectedMenu' => 0,
    'menus' => 0,
    'menu' => 0,
    'menuItems' => 0,
    'menuItem' => 0,
    'SITE_URL' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d800ef38aeb85_18841829')) {function content_5d800ef38aeb85_18841829($_smarty_tpl) {?><div class="container">
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedMenu']->value->name, ENT_QUOTES, 'UTF-8');?>
 Menu</h1>
		</div>
		<div class="col-md-2">
			<select name="menu" id="menu" class="form-control">
				<option value="">Select a menu...</option>
				<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['menu']->key;
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['selectedMenu']->value&&$_smarty_tpl->tpl_vars['selectedMenu']->value->id==$_smarty_tpl->tpl_vars['menu']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
				<?php } ?>
			</select>	
		</div>
	</div>



	<table class="table">
		<?php  $_smarty_tpl->tpl_vars["menuItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menuItem"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["menuItem"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["menuItem"]->iteration=0;
 $_smarty_tpl->tpl_vars["menuItem"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["menuItem"]->key => $_smarty_tpl->tpl_vars["menuItem"]->value) {
$_smarty_tpl->tpl_vars["menuItem"]->_loop = true;
 $_smarty_tpl->tpl_vars["menuItem"]->iteration++;
 $_smarty_tpl->tpl_vars["menuItem"]->index++;
 $_smarty_tpl->tpl_vars["menuItem"]->first = $_smarty_tpl->tpl_vars["menuItem"]->index === 0;
 $_smarty_tpl->tpl_vars["menuItem"]->last = $_smarty_tpl->tpl_vars["menuItem"]->iteration === $_smarty_tpl->tpl_vars["menuItem"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['first'] = $_smarty_tpl->tpl_vars["menuItem"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['last'] = $_smarty_tpl->tpl_vars["menuItem"]->last;
?>	

		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['menuItems']['first']) {?>
		<tr>
			<th colspan="3" class="text-center">Day <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->day, ENT_QUOTES, 'UTF-8');?>
</th>
		</tr>
		<tr>
		<?php }?>
					
			<td class="menu-content">
				<div class="menu">
					<div class="menu-info <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->type=="MenuChange") {?> background-grey<?php }?>">
						<ul>
						<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItem']->value->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
							<li><?php echo htmlspecialchars(htmlspecialchars_decode($_smarty_tpl->tpl_vars['menu']->value, ENT_QUOTES), ENT_QUOTES, 'UTF-8');?>
</li>
						<?php } ?>
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

		<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['menuItems']['iteration'] % 3)) {?>
		</tr>
		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['menuItems']['last']) {?>
		<tr>
			<th colspan="3" class="text-center">Day <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->day+1, ENT_QUOTES, 'UTF-8');?>
</th>
		</tr>
		<tr>
		<?php }?>
		<?php }?>
	<?php } ?>
	</table>

	<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)) {?>
	<div class="row text-center">
		<div class="col-12">
			<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['SITE_URL']->value)."?module=Dietary&page=dietary&action=corporate_menus&menu=".((string)$_smarty_tpl->tpl_vars['selectedMenu']->value->id), null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate ("elements/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>			
	<?php }?>


</div>
<?php }} ?>
