<?php /* Smarty version Smarty-3.1.19, created on 2019-01-30 23:17:47
         compiled from "/var/www/html/aspencreek_dev/protected/Views/elements/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4900555955c52309b6a91e8-40110604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c77c43143277f3fadfe93c56bdfbc6ddc89a56d9' => 
    array (
      0 => '/var/www/html/aspencreek_dev/protected/Views/elements/navigation.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4900555955c52309b6a91e8-40110604',
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
  'unifunc' => 'content_5c52309b6b56f7_75905470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c52309b6b56f7_75905470')) {function content_5c52309b6b56f7_75905470($_smarty_tpl) {?><nav>
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
