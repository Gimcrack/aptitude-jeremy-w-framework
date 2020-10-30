<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 00:36:59
         compiled from "/var/www/html/riverside_dev/protected/Views/layouts/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20699072515c4a5a2b67ea03-70579244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e903c6d42084adec5d3a989d8fe12926b25d399' => 
    array (
      0 => '/var/www/html/riverside_dev/protected/Views/layouts/main.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20699072515c4a5a2b67ea03-70579244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'this' => 0,
    'FRAMEWORK_JS' => 0,
    'FRAMEWORK_CSS' => 0,
    'CSS' => 0,
    'SITE_URL' => 0,
    'JS' => 0,
    'auth' => 0,
    'logo' => 0,
    'flashMessages' => 0,
    'class' => 0,
    'message' => 0,
    'm' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4a5a2b695b65_83013619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a5a2b695b65_83013619')) {function content_5c4a5a2b695b65_83013619($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/riverside_dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1');?>
 &nbsp;|&nbsp; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->module, ENT_QUOTES, 'ISO-8859-1');?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jQuery-Autocomplete-master/content/styles.css" />
	<!-- <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_CSS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/styles.css"> -->
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery-ui-1.11.4.custom/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css" />
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/dropzone/dropzone.css" />
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/site_styles.css" />
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/tagit/css/jquery.tagit.css" />
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/shadowbox-3.0.3/shadowbox.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/bootstrap_styles.css">

	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery-2.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
	<?php if ($_smarty_tpl->tpl_vars['this']->value->module=="HomeHealth") {?>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jQuery-Autocomplete-master/dist/jquery.autocomplete.min.js"></script>
	<?php }?>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery-validation-1.13.0/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/datepicker.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery-ui-timepicker-0.3.3/jquery.ui.timepicker.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery.row-grid.min.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/dropzone/dropzone.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/gridify/gridify-min.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/gridify/require.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/shadowbox-3.0.3/shadowbox.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/fancybox/helpers/jquery.fancybox-buttons.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/tagit/js/tag-it.min.js"></script>


	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/fancybox/helpers/jquery.fancybox-buttons.css" />

	<script>
		var SITE_URL = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
';
		Shadowbox.init({
			height: 425,
			width: 450,
			handleOversize: "resize",
			overlayColor: "#666",
			overlayOpacity: "0.25"
		});
	</script>

	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/general.js"></script>

	<?php if ($_smarty_tpl->tpl_vars['auth']->value->valid()&&$_smarty_tpl->tpl_vars['auth']->value->getRecord()->timeout) {?>
		<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/timeout.js"></script>

		<script>
			$(document).ready(function() {
				startTimer();
			});
		</script>
	<?php }?>
</head>
<body>
	<div id="header-container">
		<div id="header">
			<?php if ($_smarty_tpl->tpl_vars['auth']->value->valid()) {?>
			<div id="user-info">
				Welcome, <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?page=users&amp;action=my_info&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth']->value->getRecord()->public_id, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth']->value->fullName(), ENT_QUOTES, 'ISO-8859-1');?>
</a> &nbsp;|&nbsp; <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/login/logout">Logout</a>
			</div>
			<?php }?>
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="Logo" class="logo"/>
			<?php if ($_smarty_tpl->tpl_vars['auth']->value->valid()) {?>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("navigation"), ENT_QUOTES, 'ISO-8859-1');?>

			<?php }?>
		</div>
	</div>
	<div class="clear"></div>

	<div class="container">
		<div id="content">
			<?php if ($_smarty_tpl->tpl_vars['flashMessages']->value) {?>
			<div id="flash-messages">
				<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['flashMessages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->value = $_smarty_tpl->tpl_vars['message']->key;
?>
				<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
					<ul>
					<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
						<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value, ENT_QUOTES, 'ISO-8859-1');?>
</li>
					<?php } ?>
					</ul>
				</div>
				<div class="clear"></div>
				<?php } ?>
			</div>

			<?php }?>

			<div id="page-content">
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>

		</div>
<!-- 		<div id="copyright">
			<p>All content &copy; <?php echo htmlspecialchars(smarty_modifier_date_format(time(),"%Y"), ENT_QUOTES, 'ISO-8859-1');?>
 AptitudeCare.  All rights reserved. Powered by <a href="http://www.aptitudeit.net" target="_blank">aptITude</a></p>
		</div>
	</div>-->

	</div>

	<div id="timeout-warning">
	    <p>Your session is about to timeout.  You will be automatically logged out in 1 minute. To remain logged in click the button below.</p>
	</div>

</body>
</html>
<?php }} ?>
