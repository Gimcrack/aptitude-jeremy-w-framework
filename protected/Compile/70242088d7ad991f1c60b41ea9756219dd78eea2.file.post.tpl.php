<?php /* Smarty version Smarty-3.1.19, created on 2020-04-24 11:50:41
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/news/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6815828565e9a20be1fde12-56524134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70242088d7ad991f1c60b41ea9756219dd78eea2' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/news/post.tpl',
      1 => 1587757839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6815828565e9a20be1fde12-56524134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e9a20be201634_54986689',
  'variables' => 
  array (
    'post' => 0,
    'AWS_IMAGES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9a20be201634_54986689')) {function content_5e9a20be201634_54986689($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['post']->value->filename) {?>
<div class="container-fluid text-center">	
	<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['AWS_IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
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
<?php }} ?>
