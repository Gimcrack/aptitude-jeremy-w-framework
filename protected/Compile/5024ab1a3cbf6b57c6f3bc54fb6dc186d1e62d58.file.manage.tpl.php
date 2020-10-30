<?php /* Smarty version Smarty-3.1.19, created on 2020-04-16 18:57:56
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/users/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10875938495d7b17d534edc1-99898097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5024ab1a3cbf6b57c6f3bc54fb6dc186d1e62d58' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/users/manage.tpl',
      1 => 1587087895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10875938495d7b17d534edc1-99898097',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d7b17d53bc6f7_71221319',
  'variables' => 
  array (
    'locations' => 0,
    'location' => 0,
    'location_id' => 0,
    'areas' => 0,
    'area' => 0,
    'SITE_URL' => 0,
    'users' => 0,
    'user' => 0,
    'pagination' => 0,
    'i' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7b17d53bc6f7_71221319')) {function content_5d7b17d53bc6f7_71221319($_smarty_tpl) {?><div class="container manage-users-page">
	
	<!-- top navigation -->
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div id="locations" class="input-group">
				<?php if (count($_smarty_tpl->tpl_vars['locations']->value)>1) {?>
					<select name="location" id="location" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value->public_id==$_smarty_tpl->tpl_vars['location_id']->value) {?> selected<?php }?>><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
</h1></option>
					<?php } ?>
					<?php  $_smarty_tpl->tpl_vars['area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['area']->key => $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->_loop = true;
?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['area']->value->public_id==$_smarty_tpl->tpl_vars['location_id']->value) {?> selected<?php }?>><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value->name, ENT_QUOTES, 'UTF-8');?>
</h1></option>
					<?php } ?>
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

			<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
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
			<?php } ?>
		</tbody>
	</table>


	<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)) {?>
		<div id="pagination">
			<?php if ($_smarty_tpl->tpl_vars['pagination']->value->current_page!=1) {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page-1, ENT_QUOTES, 'UTF-8');?>
">&laquo;&nbsp; Previous</a>
			<?php }?>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = max($_smarty_tpl->tpl_vars['pagination']->value->current_page-5,1);
  if ($_smarty_tpl->tpl_vars['i']->value<=max(1,min($_smarty_tpl->tpl_vars['pagination']->value->num_pages,$_smarty_tpl->tpl_vars['pagination']->value->current_page+5))) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=max(1,min($_smarty_tpl->tpl_vars['pagination']->value->num_pages,$_smarty_tpl->tpl_vars['pagination']->value->current_page+5)); $_smarty_tpl->tpl_vars['i']->value++) {
?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['pagination']->value->current_page) {?>
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
			<?php }} ?>
			<?php if ($_smarty_tpl->tpl_vars['pagination']->value->current_page!=$_smarty_tpl->tpl_vars['pagination']->value->num_pages) {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page+1, ENT_QUOTES, 'UTF-8');?>
">Next &nbsp;&raquo;</a>
			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['pagination']->value->num_pages>20) {?>
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


<?php }} ?>
