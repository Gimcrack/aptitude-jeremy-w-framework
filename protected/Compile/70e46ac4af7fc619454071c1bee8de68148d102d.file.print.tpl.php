<?php /* Smarty version Smarty-3.1.19, created on 2019-10-31 02:37:50
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/layouts/print.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7414983445dba48fe8c7da4-78471154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70e46ac4af7fc619454071c1bee8de68148d102d' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/layouts/print.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7414983445dba48fe8c7da4-78471154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'FRAMEWORK_CSS' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dba48fe8cf834_53941096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dba48fe8cf834_53941096')) {function content_5dba48fe8cf834_53941096($_smarty_tpl) {?><html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</title>
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_CSS']->value, ENT_QUOTES, 'UTF-8');?>
/print.css">
	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
