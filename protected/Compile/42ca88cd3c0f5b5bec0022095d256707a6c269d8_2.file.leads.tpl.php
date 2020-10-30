<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-14 11:21:00
  from '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/leads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebd9a1c4f8503_57862407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42ca88cd3c0f5b5bec0022095d256707a6c269d8' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/leads.tpl',
      1 => 1589484058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebd9a1c4f8503_57862407 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container" id="leads">
	<div class="row">
		<div class="col-sm-12 text-center">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('selectLocation'), ENT_QUOTES, 'UTF-8');?>

		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 mt-1">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=new-lead" class="btn btn-primary text-white">New Lead</a>
		</div>
	</div>

	<h1>Prospect Leads</h1>
	<div class="table-responsive">
		<table class="table table-striped prospects">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Resident Name</th>
					<th scope="col">Phone</th>
					<th scope="col">Email</th>
					<th scope="col">Main Contact</th>
					<th scope="col">Timeframe</th>
					<th scope="col">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leads']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
					<tr>
						<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->last_name, ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->first_name, ENT_QUOTES, 'UTF-8');?>
</a></td>
						<td><a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->phone, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->phone, ENT_QUOTES, 'UTF-8');?>
</a></td>
						<td><a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->email, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->email, ENT_QUOTES, 'UTF-8');?>
</a></td>
						<td class="main-contact">
							<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->contact_name, ENT_QUOTES, 'UTF-8');?>
</p>
							<p class="text-8"><a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->contact_phone, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->contact_phone, ENT_QUOTES, 'UTF-8');?>
</a></p>
							<p class="text-8"><a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->contact_email, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->contact_email, ENT_QUOTES, 'UTF-8');?>
</a></p>
						</td>						
						<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->timeframe, ENT_QUOTES, 'UTF-8');?>
</td>
						<td>
							<div class="dropdown">
							    <button class="btn text-right" type="button" id="prospectsInfoDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-tools"></i></button>
							    <div class="dropdown-menu" aria-labelledby="prospectsInfoDropdown">
							        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=profile&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item">Lead Profile</a>
							        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=convert_to_prospect&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item">Convert to Current Prospect</a>
							    </div>
							</div>
						</td>
					</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
	</div>

</div><?php }
}
