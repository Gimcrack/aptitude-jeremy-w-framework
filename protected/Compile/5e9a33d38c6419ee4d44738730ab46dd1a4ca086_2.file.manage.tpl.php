<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 08:43:46
  from '/var/www/html/aptitudecare/dev/protected/Views/users/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee10dc251c083_47283103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e9a33d38c6419ee4d44738730ab46dd1a4ca086' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/users/manage.tpl',
      1 => 1587087895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee10dc251c083_47283103 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container manage-users-page">
	
	<!-- top navigation -->
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div id="locations" class="input-group">
				<?php if (count($_smarty_tpl->tpl_vars['locations']->value) > 1) {?>
					<select name="location" id="location" class="form-control">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'location');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value->public_id == $_smarty_tpl->tpl_vars['location_id']->value) {?> selected<?php }?>><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
</h1></option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['areas']->value, 'area');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['area']->value) {
?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['area']->value->public_id == $_smarty_tpl->tpl_vars['location_id']->value) {?> selected<?php }?>><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value->name, ENT_QUOTES, 'UTF-8');?>
</h1></option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				<?php }?>
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-lg-12">
				<a class="btn btn-primary text-white float-right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=users&amp;action=user&amp;type=add&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
">Add New</a>
			</div>

		</div>
	</div>
	<!-- top navigation -->

	<div class="row">
		<div class="col-12 my-5 text-center">
			<h2>Manage Users</h2>
		</div>
	</div>





	<table class="table">
		<thead>
			<tr>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
			<tr>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->last_name, ENT_QUOTES, 'UTF-8');?>
</td>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->first_name, ENT_QUOTES, 'UTF-8');?>
</td>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8');?>
</td>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->phone, ENT_QUOTES, 'UTF-8');?>
</td>
				<td>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=users&amp;action=user&amp;type=edit&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
						<i class="fas fa-edit"></i>
					</a>
				</td>
				<td>
					<a href="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" data-toggle="modal" data-target="#deleteModal" class="delete">
						<i class="fas fa-trash"></i>
						<input type="hidden" name="public_id" class="public-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" />
					</a>
				</td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>


	<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)) {?>
		<div id="pagination">
			<?php if ($_smarty_tpl->tpl_vars['pagination']->value->current_page != 1) {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page-1, ENT_QUOTES, 'UTF-8');?>
">&laquo;&nbsp; Previous</a>
			<?php }?>
			<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = max($_smarty_tpl->tpl_vars['pagination']->value->current_page-5,1);
if ($_smarty_tpl->tpl_vars['i']->value <= max(1,min($_smarty_tpl->tpl_vars['pagination']->value->num_pages,$_smarty_tpl->tpl_vars['pagination']->value->current_page+5))) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= max(1,min($_smarty_tpl->tpl_vars['pagination']->value->num_pages,$_smarty_tpl->tpl_vars['pagination']->value->current_page+5)); $_smarty_tpl->tpl_vars['i']->value++) {
?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['pagination']->value->current_page) {?>
					<strong><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" class="page-numbers"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
</a></strong>
				<?php } else { ?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" class="page-numbers"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
</a>
				<?php }?>
			<?php }
}
?>
			<?php if ($_smarty_tpl->tpl_vars['pagination']->value->current_page != $_smarty_tpl->tpl_vars['pagination']->value->num_pages) {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page+1, ENT_QUOTES, 'UTF-8');?>
">Next &nbsp;&raquo;</a>
			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['pagination']->value->num_pages > 20) {?>
		<div id="beginning-end">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=1" class="page-numbers">First Page</a>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars(floor($_smarty_tpl->tpl_vars['pagination']->value->num_pages), ENT_QUOTES, 'UTF-8');?>
" class="page-numbers">Last Page</a>
		</div>
		<?php }?>
	<?php }?>
</div>

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("deleteModal"), ENT_QUOTES, 'UTF-8');?>


<?php }
}
