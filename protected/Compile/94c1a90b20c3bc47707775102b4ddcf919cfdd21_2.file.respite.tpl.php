<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 09:18:00
  from '/var/www/html/aptitudecare/dev/protected/Views/layouts/respite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e8248903158_25472259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94c1a90b20c3bc47707775102b4ddcf919cfdd21' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/layouts/respite.tpl',
      1 => 1598980644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e8248903158_25472259 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/lity-2.4.0/dist/lity.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/public-custom.css"> 
    <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/themes/default.css">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/themes/default.date.css">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/themes/default.time.css">

    <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/respite.css">
	<title>Respite Vacation | Aspen Creek</title>
</head>
<body>
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('publicNav'), ENT_QUOTES, 'UTF-8');?>

	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
