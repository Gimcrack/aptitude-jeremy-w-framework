<?php /* Smarty version Smarty-3.1.19, created on 2020-05-04 15:49:47
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/case_managers/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18051877205eb0aa1bef8647-68410806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8adf2e29abdef9653c567a09a30c71135bf36c4' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/case_managers/manage.tpl',
      1 => 1583534246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18051877205eb0aa1bef8647-68410806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'location_id' => 0,
    'locations' => 0,
    'location' => 0,
    'data' => 0,
    'key' => 0,
    'dataset' => 0,
    'k' => 0,
    'd' => 0,
    'FRAMEWORK_IMAGES' => 0,
    'pagination' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5eb0aa1bf32511_25247985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb0aa1bf32511_25247985')) {function content_5eb0aa1bf32511_25247985($_smarty_tpl) {?><!-- /protected/Views/case_managers/manage.tpl -->

<script>
	$(document).ready(function() {
		$(".delete").click(function(e) {
			e.preventDefault();
			var dataRow = $(this).parent().parent();
			console.log(dataRow);
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
								page: "case_managers",
								action: 'deleteId',
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
			window.location = SITE_URL + "/?page=case_managers&action=manage&type=&orderBy=" + order;
		});


		$("#locations").change(function() {
			window.location = SITE_URL + "/?page=case_managers&action=manage&location=" + $("#locations option:selected").val();
		});

	});
</script>


<div id="action-left"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=case_managers&amp;action=case_manager&amp;type=add&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="button">Add New</a></div>
<div id="center-title">
	<div id="locations">
		<select name="location" id="location">
		<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value->public_id==$_smarty_tpl->tpl_vars['location_id']->value) {?> selected<?php }?>><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
</h1></option>
		<?php } ?>
		</select>
	</div>
</div>
<br>
<br>
<h2>Manage Case Managers</h2>

<table class="view">
	<tr>
		<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = array_keys($_smarty_tpl->tpl_vars['data']->value[0]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value!="public_id") {?>
		<th style="width: auto; padding: 6px 35px">
			<a href="" class="order"><?php echo htmlspecialchars(stringify($_smarty_tpl->tpl_vars['key']->value), ENT_QUOTES, 'UTF-8');?>
</a>
			<input type="hidden" name="order" id="order-value" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" />
		</th>
		<?php }?>
		<?php } ?>
		<?php if (!empty($_smarty_tpl->tpl_vars['data']->value[0])) {?>
		<th style="width:20px;font-weight:normal"><span class="text-darker-grey">Edit</span></th>
		<th style="width:20px;font-weight:normal"><span class="text-darker-grey">Delete</span></th>
		<?php }?>
	</tr>

	<?php  $_smarty_tpl->tpl_vars['dataset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dataset']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dataset']->key => $_smarty_tpl->tpl_vars['dataset']->value) {
$_smarty_tpl->tpl_vars['dataset']->_loop = true;
?>
		<tr class="data-row">
			<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dataset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['d']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['k']->value!="public_id") {?>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['k']->value=="email") {?>
					<a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value, ENT_QUOTES, 'UTF-8');?>
" target="_top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value, ENT_QUOTES, 'UTF-8');?>
</a>
				<?php } else { ?>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value, ENT_QUOTES, 'UTF-8');?>

				<?php }?>
			</td>
			<?php }?>
			<?php } ?>
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value[0])) {?>
			<td class="text-center">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=case_managers&amp;action=case_manager&amp;type=edit&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dataset']->value['public_id'], ENT_QUOTES, 'UTF-8');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/pencil.png" alt="">
				</a>
			</td>
			<td class="text-center">
				<a href="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dataset']->value['public_id'], ENT_QUOTES, 'UTF-8');?>
" class="delete">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/delete.png" alt="">
					<input type="hidden" name="public_id" class="public-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dataset']->value['public_id'], ENT_QUOTES, 'UTF-8');?>
" />
				</a>
			</td>
			<?php }?>
		</tr>
	<?php } ?>
</table>


<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)) {?>
	<div id="pagination">
		<?php if ($_smarty_tpl->tpl_vars['pagination']->value->current_page!=1) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=case_managers&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page-1, ENT_QUOTES, 'UTF-8');?>
">&laquo;&nbsp; Previous</a>
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = max($_smarty_tpl->tpl_vars['pagination']->value->current_page-5,1);
  if ($_smarty_tpl->tpl_vars['i']->value<=max(1,min($_smarty_tpl->tpl_vars['pagination']->value->num_pages,$_smarty_tpl->tpl_vars['pagination']->value->current_page+5))) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=max(1,min($_smarty_tpl->tpl_vars['pagination']->value->num_pages,$_smarty_tpl->tpl_vars['pagination']->value->current_page+5)); $_smarty_tpl->tpl_vars['i']->value++) {
?>
			<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['pagination']->value->current_page) {?>
				<strong><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=case_managers&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" class="page-numbers"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
</a></strong>
			<?php } else { ?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=case_managers&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" class="page-numbers"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
</a>
			<?php }?>
		<?php }} ?>
		<?php if ($_smarty_tpl->tpl_vars['pagination']->value->current_page!=$_smarty_tpl->tpl_vars['pagination']->value->num_pages) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=case_managers&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page+1, ENT_QUOTES, 'UTF-8');?>
">Next &nbsp;&raquo;</a>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['pagination']->value->num_pages>20) {?>
	<div id="beginning-end">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=case_managers&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=1" class="page-numbers">First Page</a>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=case_managers&amp;action=manage&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars(floor($_smarty_tpl->tpl_vars['pagination']->value->num_pages), ENT_QUOTES, 'UTF-8');?>
" class="page-numbers">Last Page</a>
	</div>
	<?php }?>
<?php }?>

<div id="dialog" title="Confirmation Required">
	<p>Are you sure you want to delete this item? This cannot be undone.</p>
</div>
<?php }} ?>
