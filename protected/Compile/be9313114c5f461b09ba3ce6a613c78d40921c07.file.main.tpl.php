<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 15:56:35
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/layouts/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13849928355d787ad45d84e1-09505890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be9313114c5f461b09ba3ce6a613c78d40921c07' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/layouts/main.tpl',
      1 => 1588722992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13849928355d787ad45d84e1-09505890',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d787ad464c6f5_76775204',
  'variables' => 
  array (
    'title' => 0,
    'this' => 0,
    'CSS' => 0,
    'VENDORS' => 0,
    'JS' => 0,
    'FRAMEWORK_JS' => 0,
    'SITE_URL' => 0,
    'IMAGES' => 0,
    'auth' => 0,
    'flashMessages' => 0,
    'class' => 0,
    'message' => 0,
    'm' => 0,
    'content' => 0,
    'jsfile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d787ad464c6f5_76775204')) {function content_5d787ad464c6f5_76775204($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
 &nbsp;|&nbsp; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->module, ENT_QUOTES, 'UTF-8');?>
</title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSS Files -->
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/custom.css">
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/selectize/dist/css/selectize.default.css">
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/themes/default.css">
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/themes/default.date.css">
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/themes/default.time.css">
	
		<script src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/picker.js"></script>
		<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/picker.date.js"></script>
		<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/picker.time.js"></script>
		<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/microplugin/src/microplugin.js"></script>
		<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/sifter/sifter.min.js"></script>
		<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/selectize/dist/js/selectize.min.js"></script>
		<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery.maskedinput.min.js"></script>
		

		<!-- WYSIWYG script -->
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
		<!-- /WYSIWYG script -->

		<script src="https://kit.fontawesome.com/5df6dcce04.js" crossorigin="anonymous"></script>

		<script>
			var SITE_URL = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
';
			$(document).ready(function() {
				$('.alert-success').delay(8000).fadeOut();
				$('.alert-warning').delay(8000).fadeOut();

				// show collapsible content when page is selected
				var pathname = window.location.pathname;
				console.log(pathname);
			});


			
		</script>

	</head>
	<body>
		<!-- top navigation bar -->	
		<nav class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow sticky-top">
			<a href="/" class="navbar-brand col-sm-6 col-md-2 mr-0"><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/aspencreek-logo_white.png" alt="Aspen Creek Black Logo"></a>
			<ul class="navbar-nav px-3">
				<li class="nav-item text-nowrap text-white">
					<?php if ($_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>Hello, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth']->value->fullName(), ENT_QUOTES, 'UTF-8');?>
 &nbsp;|&nbsp; <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="text-white">Public Page</a> &nbsp;|&nbsp; <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/login/logout" class="text-white">Logout</a><?php }?>
				</li>
			</ul>
		</nav>
		<!-- / top navigation bar -->

		<!-- side navigation panel -->
		<?php if ($_smarty_tpl->tpl_vars['auth']->value->valid()) {?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("navigation"), ENT_QUOTES, 'UTF-8');?>

		<?php }?>
		<!-- /side navigation panel -->

		<!-- main page content -->
		<main class="col-md-9 ml-sm-auto col-lg-10">
			<div class="d-flex-justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2">	
				
				<!-- flash messages ------>
				<?php if ($_smarty_tpl->tpl_vars['flashMessages']->value) {?>
				<div class="row mx-4 p-4 flash-message">
					<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['flashMessages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->value = $_smarty_tpl->tpl_vars['message']->key;
?>
					<div class="col-12 text-center alert-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" role="alert">
						<ul>
						<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
							<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value, ENT_QUOTES, 'UTF-8');?>
</li>
						<?php } ?>
						</ul>
					</div>
					<?php } ?>
				</div>
				<?php }?>
				<!-- /flash messages ------>

				<!-- individual page content -->
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<!-- /individual page content -->

			</div>
		</main>
		<!-- /main page content -->
				


		<!-- <div id="timeout-warning">
		    <p>Your session is about to timeout.  You will be automatically logged out in 1 minute. To remain logged in click the button below.</p>
		</div> -->
	</body>
	<script>
		$(document).ready(function() {
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['jsfile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		});
	</script>
</html>
<?php }} ?>
