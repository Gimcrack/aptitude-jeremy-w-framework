<?php /* Smarty version Smarty-3.1.19, created on 2020-03-26 11:12:01
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/layouts/blank.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12499367745e7cfe813cb389-54761438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06d77dca3917c182320891b29b6a568823f22733' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/layouts/blank.tpl',
      1 => 1583534250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12499367745e7cfe813cb389-54761438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'FRAMEWORK_JS' => 0,
    'FRAMEWORK_CSS' => 0,
    'CSS' => 0,
    'SITE_URL' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e7cfe813d4d25_06350986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e7cfe813d4d25_06350986')) {function content_5e7cfe813d4d25_06350986($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</title>
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jQuery-Autocomplete-master/content/styles.css" />
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_CSS']->value, ENT_QUOTES, 'UTF-8');?>
/styles.css">
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/site_styles.css" />
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-ui-1.11.0.custom/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-ui-1.11.0.custom/jquery-ui.theme.min.css" />
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/shadowbox-3.0.3/shadowbox.css" />
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_CSS']->value, ENT_QUOTES, 'UTF-8');?>
/blank.css" />

	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-ui-1.11.0.custom/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-validation-1.13.0/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jQuery-Autocomplete-master/dist/jquery.autocomplete.min.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/shadowbox-3.0.3/shadowbox.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/general.js"></script>

	<script>
		var SITE_URL = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
';
	</script>
	
</head>
<body>
	<div id="blank-wrapper">
		<div id="content">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
		
	</div>
</body>
</html><?php }} ?>
