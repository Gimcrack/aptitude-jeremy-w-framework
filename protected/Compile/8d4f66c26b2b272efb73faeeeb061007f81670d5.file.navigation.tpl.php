<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 01:03:17
         compiled from "/var/www/html/riverside_dev/protected/Views/elements/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8850450355c4a605529ba19-81622607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d4f66c26b2b272efb73faeeeb061007f81670d5' => 
    array (
      0 => '/var/www/html/riverside_dev/protected/Views/elements/navigation.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8850450355c4a605529ba19-81622607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'session' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4a60552dd4f9_78668789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a60552dd4f9_78668789')) {function content_5c4a60552dd4f9_78668789($_smarty_tpl) {?><nav>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['session']->value->getModule()=="HomeHealth") {?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("homeHealthNav"), ENT_QUOTES, 'ISO-8859-1');?>

		<?php } elseif ($_smarty_tpl->tpl_vars['session']->value->getModule()=="Dietary") {?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("dietaryNav"), ENT_QUOTES, 'ISO-8859-1');?>

		<?php } elseif ($_smarty_tpl->tpl_vars['session']->value->getModule()=="Activities") {?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("activitiesNav"), ENT_QUOTES, 'ISO-8859-1');?>

		<?php } elseif ($_smarty_tpl->tpl_vars['session']->value->getModule()=="Admission") {?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("admissionsNav"), ENT_QUOTES, 'ISO-8859-1');?>

		<?php }?>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("dataTab"), ENT_QUOTES, 'ISO-8859-1');?>

	</ul>
</nav>
<?php }} ?>
