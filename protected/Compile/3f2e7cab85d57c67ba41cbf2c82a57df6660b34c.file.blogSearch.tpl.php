<?php /* Smarty version Smarty-3.1.19, created on 2020-04-23 15:30:30
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/blogSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16614939955e9e3720dc21c2-75397224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f2e7cab85d57c67ba41cbf2c82a57df6660b34c' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/blogSearch.tpl',
      1 => 1587684627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16614939955e9e3720dc21c2-75397224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e9e3720dc58e9_21081244',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9e3720dc58e9_21081244')) {function content_5e9e3720dc58e9_21081244($_smarty_tpl) {?>	<div class="col-sm-4 recent-news">
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/news/posts/" class="form-inline my-lg-0">
			<input type="search" name="keyword" class="form-control mr-2" placeholder="Search" aria-label="Search">
			<button class="btn btn-primary my-sm-0" type="submit">Search</button>
		</form>
		
		<h3 class="text-14">News Categories</h3>
		<ul class="nav">			
			<?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
?>
			<li class="nav-item mr-5">
				<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/news/posts/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->post_count, ENT_QUOTES, 'UTF-8');?>
)</a>
			</li>
			<?php } ?>
		</ul>
	</div>
<?php }} ?>
