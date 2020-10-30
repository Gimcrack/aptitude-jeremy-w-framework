<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 08:45:33
  from '/var/www/html/aptitudecare/dev/protected/Views/news/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee10e2dabd763_76888431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '044c110d670b53916486acd6f242d993b6b1620a' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/news/post.tpl',
      1 => 1591746874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee10e2dabd763_76888431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['post']->value->filename) {?>
<div class="container-fluid text-center">	
	<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['AWS']->value, ENT_QUOTES, 'UTF-8');?>
/cover_image/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->filename, ENT_QUOTES, 'UTF-8');?>
" alt="" class="img-fluid">
</div>
<?php }?>

<div class="container">
	<h1 class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
</h1>
	<p>Published: <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date_published,"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</p>
	<?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>

	<button class="btn btn-secondary float-right" onclick="history.go(-1)">Go Back</button>
</div>
<?php }
}
