<?php /* Smarty version Smarty-3.1.19, created on 2020-05-06 12:47:18
         compiled from "/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13098906005eb0a2cc45f802-48809247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5d510e3249100209b5c84b2ad46f96c0ac7bdf6' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/index.tpl',
      1 => 1588798034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13098906005eb0a2cc45f802-48809247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5eb0a2cc4605c7_32671530',
  'variables' => 
  array (
    'this' => 0,
    'SITE_URL' => 0,
    'prospects' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb0a2cc4605c7_32671530')) {function content_5eb0a2cc4605c7_32671530($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('selectLocation'), ENT_QUOTES, 'UTF-8');?>

		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 mt-1">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=new-prospect" class="btn btn-primary text-white">New Prospect</a>
		</div>
	</div>

	<h1>Current Prospects</h1>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Name</th>
					<th scope="col">Phone</th>
					<th scope="col">Email</th>
					<th scope="col">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["p"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prospects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["p"]->key => $_smarty_tpl->tpl_vars["p"]->value) {
$_smarty_tpl->tpl_vars["p"]->_loop = true;
?>
					<tr>
						<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->last_name, ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->first_name, ENT_QUOTES, 'UTF-8');?>
</td>
						<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->phone, ENT_QUOTES, 'UTF-8');?>
</td>
						<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->email_address, ENT_QUOTES, 'UTF-8');?>
</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>
