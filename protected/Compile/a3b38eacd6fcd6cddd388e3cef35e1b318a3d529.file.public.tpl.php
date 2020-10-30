<?php /* Smarty version Smarty-3.1.19, created on 2020-04-16 18:29:51
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/layouts/public.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16911931645d7881be823090-18491225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3b38eacd6fcd6cddd388e3cef35e1b318a3d529' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/layouts/public.tpl',
      1 => 1587087894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16911931645d7881be823090-18491225',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d7881be82c8a1_93470896',
  'variables' => 
  array (
    'CSS' => 0,
    'JS' => 0,
    'FRAMEWORK_JS' => 0,
    'IMAGES' => 0,
    'content' => 0,
    'flashMessages' => 0,
    'class' => 0,
    'message' => 0,
    'm' => 0,
    'jsfile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7881be82c8a1_93470896')) {function content_5d7881be82c8a1_93470896($_smarty_tpl) {?><!-- /app/View/Layouts/default.ctp -->
<!DOCTYPE html>
<html lang="en">
<head>
	<!--<meta http-equiv="refresh" content="1800">-->
	<title>Aspen Creek Senior Living Menu &amp; Activities</title>
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/tv-display.css">

	<script src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-3.4.1.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery.jclock.js"></script>
<!-- 	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 -->

	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/public.js"></script>


</head>

<body>

	<div class="containter-fluid text-center">
		<div class="row position-absolute" style="left: 2rem; top: 2rem;">
			<div class="col-5">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/aspencreek-logo-white.png" class="img-fluid"  alt="">
			</div>	
		</div>
		<div class="row position-absolute" style="top: 2rem; right: 0;">
			<div class="col">
				<div id="date"><span id="clock">&nbsp;</span></div>
			</div>	
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



		<?php if ($_smarty_tpl->tpl_vars['flashMessages']->value) {?>
		<div id="flash-messages">
			<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['flashMessages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->value = $_smarty_tpl->tpl_vars['message']->key;
?>
			<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
">
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
			<div class="clear"></div>
			<?php } ?>
		</div>
			
		<?php }?>
			
	</div>

	<!-- div containing the red warning symbol -->
	<div id="error" style="display:none;position:absolute;bottom:10px;left:20px;font-size: 2em;color:yellow;">&#x26A0;</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['jsfile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</html>
<?php }} ?>
