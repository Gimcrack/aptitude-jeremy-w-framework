<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-23 09:40:02
  from '/var/www/html/aptitudecare/dev/protected/Views/layouts/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef23e729a0855_15593425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '990011d6807dccad404237e80b8e8dcd23ca1ee8' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/layouts/main.tpl',
      1 => 1592933947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef23e729a0855_15593425 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
 &nbsp;|&nbsp; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->module, ENT_QUOTES, 'UTF-8');?>
</title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSS Files -->
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
		<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-3.4.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/custom.css">
		<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/lity-2.4.0/dist/lity.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/selectize/dist/css/selectize.default.css">
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/themes/default.css">
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/themes/default.date.css">
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/themes/default.time.css">
	
		<!-- <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
> -->
		<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/lity-2.4.0/dist/lity.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/bootstrap-4.5.0-dist/js/bootstrap.bundle.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/jQuery-Autocomplete/dist/jquery.autocomplete.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/picker.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/picker.date.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/picker.time.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/microplugin/src/microplugin.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/sifter/sifter.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/selectize/dist/js/selectize.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery.maskedinput.min.js"><?php echo '</script'; ?>
>		

		<!-- WYSIWYG script -->
		<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"><?php echo '</script'; ?>
>
		<!-- /WYSIWYG script -->

		<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/5df6dcce04.js" crossorigin="anonymous"><?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
>
			var SITE_URL = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
';
			var AWS = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['AWS']->value, ENT_QUOTES, 'UTF-8');?>
';
			$(document).ready(function() {
				$('.alert-success').delay(8000).fadeOut();
				$('.alert-warning').delay(8000).fadeOut();

				// show collapsible content when page is selected
				var pathname = window.location.pathname;
				console.log(pathname);
			});

			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			});

			function getUrlParameter(sParam) {
			    var sPageURL = window.location.search.substring(1),
			        sURLVariables = sPageURL.split('&'),
			        sParameterName,
			        i;

			    for (i = 0; i < sURLVariables.length; i++) {
			        sParameterName = sURLVariables[i].split('=');

			        if (sParameterName[0] === sParam) {
			            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			        }
			    }
			};

			
		<?php echo '</script'; ?>
>

	</head>
	<body>
		<!-- top navigation bar -->	
		<nav class="navbar flex-md-nowrap p-0 shadow sticky-top">
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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flashMessages']->value, 'message', false, 'class');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value => $_smarty_tpl->tpl_vars['message']->value) {
?>
					<div class="col-12 text-center alert-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" role="alert">
						<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
							<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value, ENT_QUOTES, 'UTF-8');?>
</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
				<?php }?>
				<!-- /flash messages ------>

				<!-- individual page content -->
				<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				<!-- /individual page content -->

			</div>
		</main>
		<!-- /main page content -->
				


		<!-- <div id="timeout-warning">
		    <p>Your session is about to timeout.  You will be automatically logged out in 1 minute. To remain logged in click the button below.</p>
		</div> -->
	</body>
	<?php echo '<script'; ?>
>
		$(document).ready(function() {
			<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['jsfile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		});
	<?php echo '</script'; ?>
>
</html>
<?php }
}
