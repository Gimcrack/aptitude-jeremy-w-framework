<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 20:26:07
         compiled from "/var/www/html/aptitudecare/protected/Views/layouts/pdf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8454259795cddc75f087ff2-37750347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e11050f010c27731e485c9fd8143dc66b371a707' => 
    array (
      0 => '/var/www/html/aptitudecare/protected/Views/layouts/pdf.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8454259795cddc75f087ff2-37750347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'CSS' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cddc75f095221_08745882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cddc75f095221_08745882')) {function content_5cddc75f095221_08745882($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/pdf_styles.css" type="text/css" media="mpdf" />
</head>
<body>
	<div id="blank-wrapper">
		<div id="content">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>

	</div>
</body>
</html>
<?php }} ?>
