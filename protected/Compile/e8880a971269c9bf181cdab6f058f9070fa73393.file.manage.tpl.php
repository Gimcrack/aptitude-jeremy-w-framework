<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 01:09:06
         compiled from "/var/www/html/riverside_dev/protected/Views/users/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4775415075c4a61b2ac9681-94019779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8880a971269c9bf181cdab6f058f9070fa73393' => 
    array (
      0 => '/var/www/html/riverside_dev/protected/Views/users/manage.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4775415075c4a61b2ac9681-94019779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'location_id' => 0,
    'locations' => 0,
    'location' => 0,
    'areas' => 0,
    'area' => 0,
    'users' => 0,
    'user' => 0,
    'FRAMEWORK_IMAGES' => 0,
    'pagination' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4a61b2af6545_38035583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a61b2af6545_38035583')) {function content_5c4a61b2af6545_38035583($_smarty_tpl) {?><script>
	$(document).ready(function() {
		$(".delete").click(function(e) {
			e.preventDefault();
			var dataRow = $(this).parent().parent();
			var item = $(this);
			$("#dialog").dialog({
				buttons: {
					"Confirm": function() {
						var row = item.children().next($(".public-id"));
						var id = row.val();
							
						$.ajax({
							type: 'post',
							url: SITE_URL,
							data: {
								page: "users",
								action: 'delete_user',
								id: id,
							},
							success: function() {
								dataRow.fadeOut("slow");
							}
						});
						$(this).dialog("close");

					},
					"Cancel": function() {
						$(this).dialog("close");
					}
				}
			});
		});

		$(".order").click(function(e) {
			e.preventDefault();
			var order = $(this).next("input").val();
			console.log
			window.location = SITE_URL + "/?page=data&action=manage&type=" + $("#page").val() + "&orderBy=" + order;
		});


		$("#locations").change(function() {
			window.location = SITE_URL + "/?page=users&action=manage&location=" + $("#locations option:selected").val();
		});

	});
</script>


<div id="page-header">
	<div id="action-left">
		<a class="button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?page=users&amp;action=user&amp;type=add&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">Add New</a>
	</div>
	<div id="center-title">
		<div id="locations">
			<select name="location" id="location">
			<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
				<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value->public_id==$_smarty_tpl->tpl_vars['location_id']->value) {?> selected<?php }?>><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</h1></option>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['area']->key => $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->_loop = true;
?>
				<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['area']->value->public_id==$_smarty_tpl->tpl_vars['location_id']->value) {?> selected<?php }?>><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</h1></option>
			<?php } ?>
			</select>
		</div>
	</div>
</div>


<h2>Manage Users</h2>

<table class="view">
	<tr>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Default Location</th>
		<th>Default Module</th>
		<th>Group Name</th>
		<th style="width:20px;font-weight:normal"><span class="text-darker-grey">Edit</span></th>
		<th style="width:20px;font-weight:normal"><span class="text-darker-grey">Delete</span></th>
	</tr>

	<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
	<tr>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->last_name, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->first_name, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->phone, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->default_location, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->default_module, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->group_name, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?page=users&amp;action=user&amp;type=edit&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/pencil.png" alt="">
			</a>
		</td>
		<td>
			<a href="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" class="delete">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/delete.png" alt="">
				<input type="hidden" name="public_id" class="public-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" />
			</a>
		</td>
	</tr>
	<?php } ?>
</table>


<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)) {?>
	<div id="pagination">
		<?php if ($_smarty_tpl->tpl_vars['pagination']->value->current_page!=1) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page-1, ENT_QUOTES, 'ISO-8859-1');?>
">&laquo;&nbsp; Previous</a>
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = max($_smarty_tpl->tpl_vars['pagination']->value->current_page-5,1);
  if ($_smarty_tpl->tpl_vars['i']->value<=max(1,min($_smarty_tpl->tpl_vars['pagination']->value->num_pages,$_smarty_tpl->tpl_vars['pagination']->value->current_page+5))) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=max(1,min($_smarty_tpl->tpl_vars['pagination']->value->num_pages,$_smarty_tpl->tpl_vars['pagination']->value->current_page+5)); $_smarty_tpl->tpl_vars['i']->value++) {
?>
			<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['pagination']->value->current_page) {?>
				<strong><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="page-numbers"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a></strong>
			<?php } else { ?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="page-numbers"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a>
			<?php }?>
		<?php }} ?>
		<?php if ($_smarty_tpl->tpl_vars['pagination']->value->current_page!=$_smarty_tpl->tpl_vars['pagination']->value->num_pages) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page+1, ENT_QUOTES, 'ISO-8859-1');?>
">Next &nbsp;&raquo;</a>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['pagination']->value->num_pages>20) {?>
	<div id="beginning-end">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;page_count=1" class="page-numbers">First Page</a>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?page=users&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;page_count=<?php echo htmlspecialchars(floor($_smarty_tpl->tpl_vars['pagination']->value->num_pages), ENT_QUOTES, 'ISO-8859-1');?>
" class="page-numbers">Last Page</a>
	</div>
	<?php }?>
<?php }?>



<div id="dialog" title="Confirmation Required">
	<p>Are you sure you want to delete this item? This cannot be undone.</p>
</div>
<?php }} ?>
