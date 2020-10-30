<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 09:36:43
  from '/var/www/html/aptitudecare/dev/protected/Views/layouts/blank.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed1482b4bc2b2_85921074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9be917d827e99c8d056bcb4538a298913764bd2c' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/layouts/blank.tpl',
      1 => 1590773797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed1482b4bc2b2_85921074 (Smarty_Internal_Template $_smarty_tpl) {
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
	
		<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-3.4.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/jQuery-Autocomplete/dist/jquery.autocomplete.min.js"><?php echo '</script'; ?>
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
			$(document).ready(function() {
				$('.alert-success').delay(8000).fadeOut();
				$('.alert-warning').delay(8000).fadeOut();

				// show collapsible content when page is selected
				var pathname = window.location.pathname;
				console.log(pathname);
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
	<div id="blank-wrapper">
		<div id="content">
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

			<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		</div>
		
	</div>
</body>
</html><?php }
}
