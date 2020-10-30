<?php /* Smarty version Smarty-3.1.19, created on 2019-01-26 00:09:19
         compiled from "/var/www/html/synesis_dev/protected/Views/layouts/public.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10775513525c4ba52f60b834-48253935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1326c908506da6d6fa606c0735707f33331af15b' => 
    array (
      0 => '/var/www/html/synesis_dev/protected/Views/layouts/public.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10775513525c4ba52f60b834-48253935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS' => 0,
    'FRAMEWORK_JS' => 0,
    'JS' => 0,
    'location' => 0,
    'IMAGES' => 0,
    'flashMessages' => 0,
    'class' => 0,
    'message' => 0,
    'm' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba52f614727_47434230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba52f614727_47434230')) {function content_5c4ba52f614727_47434230($_smarty_tpl) {?><!-- /app/View/Layouts/default.ctp -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!--<meta http-equiv="refresh" content="1800">-->
	<title>Advanced Health Care Menu &amp; Activities</title>
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/public_styles.css" type="text/css" />
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery.jclock.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/public.js"></script>


</head>

<body>

	<div id="wrapper">
		<div class="overall">
			<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" />

			<div id="header">
				<div id="headerTop">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/header_top.gif" alt="" />
						</div>
						<div id="headerLogo">
							<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/ahc_header_logo.png" alt="" />
						</div>
						<div id="date"><span id="clock">&nbsp;</span></div>
				</div>
			</div>
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
 	</div>
	</div>
	<!-- div containing the red warning symbol -->
	<div id="error" style="display:none;position:absolute;bottom:10px;left:20px;font-size: 2em;color:yellow;">&#x26A0;</div>
</body>
</html>
<?php }} ?>
