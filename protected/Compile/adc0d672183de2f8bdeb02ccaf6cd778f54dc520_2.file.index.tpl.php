<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 16:42:43
  from '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee02c83196fd6_58406560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adc0d672183de2f8bdeb02ccaf6cd778f54dc520' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/index.tpl',
      1 => 1591749761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee02c83196fd6_58406560 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="prospects" class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('selectLocation'), ENT_QUOTES, 'UTF-8');?>

		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 mt-1">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=new_prospect" class="btn btn-primary text-white">New Prospect</a>
		</div>
	</div>

	<h1>Prospects</h1>
	
	<ul class="nav justify-content-center">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['status']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
		<li class="nav-item">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=index&amp;filterBy=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->description, ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php if ($_smarty_tpl->tpl_vars['s']->value->description == $_smarty_tpl->tpl_vars['activeTab']->value) {?> selected<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
		</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>		
	<div class="table-responsive">
		<table class="table table-striped prospects">
			<thead>
				<tr>
					<th scope="col"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=index&amp;filterBy=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activeTab']->value, ENT_QUOTES, 'UTF-8');?>
&amp;sortBy=room" id="sort-room">Room <i class="fas fa-caret-down"></i></a></th>
					<th scope="col"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=index&amp;filterBy=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activeTab']->value, ENT_QUOTES, 'UTF-8');?>
&amp;sortBy=resident_name">Resident Name <i class="fas fa-caret-down"></i></a></th>
					<th scope="col"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=index&amp;filterBy=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activeTab']->value, ENT_QUOTES, 'UTF-8');?>
&amp;sortBy=contact">Primary Contact <i class="fas fa-caret-down"></i></a></th>
					<th scope="col"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=index&amp;filterBy=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activeTab']->value, ENT_QUOTES, 'UTF-8');?>
&amp;sortBy=timeframe">Estimated Admission Date <i class="fas fa-caret-down"></i></a></th>
					<th scope="col">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prospects']->value, 'p', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
?>
					<tr>
						<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->number, ENT_QUOTES, 'UTF-8');?>
</td>
						<td>
							<a tabindex="0" role="button" class="btn" data-toggle="popover" data-trigger="focus" title="Contact Info" data-content='<strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->phone, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->phone, ENT_QUOTES, 'UTF-8');?>
</a> <br><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->email, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->email, ENT_QUOTES, 'UTF-8');?>
</a>' data-html="true"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->last_name, ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->first_name, ENT_QUOTES, 'UTF-8');?>
</a>
						</td>
						<td class="main-contact">
							<a tabindex="0" role="button" class="btn" data-toggle="popover" data-trigger="focus" title="Contact Info" data-content='<strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->contact_phone, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->contact_phone, ENT_QUOTES, 'UTF-8');?>
</a> <br><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->contact_email, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->contact_email, ENT_QUOTES, 'UTF-8');?>
</a>' data-html="true"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->contact_first_name, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->contact_last_name, ENT_QUOTES, 'UTF-8');?>
</a>
						</td>	
						<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->datetime_admit, ENT_QUOTES, 'UTF-8');?>
</td>
						<td>
							<div class="dropdown">
							    <button class="btn text-right" type="button" id="prospectsInfoDropdown<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-tools"></i></button>
							    <div class="dropdown-menu" aria-labelledby="prospectsInfoDropdown<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
">
							        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=profiles&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item">Profile</a>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=convert_to_prospect&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item">Convert to Current Prospect</a>
							        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&page=admissions&action=assign_room&prospect=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item">Assign a Room</a>
							        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&page=assessments&action=schedule&id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item">Schedule Assessment</a>
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
