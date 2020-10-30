<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 20:15:31
         compiled from "/var/www/html/aptitudecare/protected/Views/elements/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15912509455c92ac5349d5c1-47494744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed573adf690781d8dfbb52ea2b82922d7b043d22' => 
    array (
      0 => '/var/www/html/aptitudecare/protected/Views/elements/navigation.tpl',
      1 => 1558026410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15912509455c92ac5349d5c1-47494744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c92ac534a8c72_53904661',
  'variables' => 
  array (
    'session' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c92ac534a8c72_53904661')) {function content_5c92ac534a8c72_53904661($_smarty_tpl) {?><nav>
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
