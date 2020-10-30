<?php /* Smarty version Smarty-3.1.19, created on 2019-03-20 06:11:41
         compiled from "/var/www/html/aspencreekalaska-dashboard/protected/Views/elements/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12178804485c91d99dbbc4e9-63897142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a0762361e70b1d8b1ea47d2d989d324dc2f4000' => 
    array (
      0 => '/var/www/html/aspencreekalaska-dashboard/protected/Views/elements/navigation.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12178804485c91d99dbbc4e9-63897142',
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
  'unifunc' => 'content_5c91d99dc0e393_06283920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c91d99dc0e393_06283920')) {function content_5c91d99dc0e393_06283920($_smarty_tpl) {?><nav>
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
