<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 23:47:33
         compiled from "/var/www/html/synesis_dev/protected/Views/elements/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1332566595c4ba01519c593-83429089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f79d0b3f77a552a741358621c98416b08f47e1f' => 
    array (
      0 => '/var/www/html/synesis_dev/protected/Views/elements/navigation.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1332566595c4ba01519c593-83429089',
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
  'unifunc' => 'content_5c4ba0151ae410_54002535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba0151ae410_54002535')) {function content_5c4ba0151ae410_54002535($_smarty_tpl) {?><nav>
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
