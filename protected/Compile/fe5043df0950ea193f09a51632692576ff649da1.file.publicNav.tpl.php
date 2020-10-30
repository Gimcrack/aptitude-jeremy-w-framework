<?php /* Smarty version Smarty-3.1.19, created on 2020-04-20 15:58:26
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/publicNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5501942415e9a1bacbe1506-82289044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe5043df0950ea193f09a51632692576ff649da1' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/publicNav.tpl',
      1 => 1587427091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5501942415e9a1bacbe1506-82289044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e9a1bacbe5238_18512024',
  'variables' => 
  array (
    'IMAGES' => 0,
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9a1bacbe5238_18512024')) {function content_5e9a1bacbe5238_18512024($_smarty_tpl) {?><!-- nav header -->
<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
            <a class="navbar-brand" href="/"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/aspencreek-logo.svg" alt="assisted living Anchorage, AK"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="fas fa-home"></i></a></li>
            
                    <!-- assisted living dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Assisted Living</a>
                            
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/living-at-aspen-creek">Living at Aspen Creek</a>
                            <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/faq">FAQ</a>
                        </div>       
                    </li>                     
                    <!-- /assisted living dropdown -->

                    <!-- meet the team dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="meetTheTeamDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MEET THE TEAM</a>
                        
                        <div class="dropdown-menu" aria-labelledby="meetTheTeamDropdown">
                            <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/leadership-team">Leadership Team</a>
                            <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/care-team">Care Team</a>
                        </div>
                    </li>
                    <!-- /meet the team dropdown -->

                    <!-- about dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT</a>
              
                        <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/menu" class="dropdown-item">Current Menu</a>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/activities" class="dropdown-item">Current Activities</a>
                        </div>
                    </li>
                    <!-- /about dropdown -->

                    <!-- contact -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/contact">Contact</a>
                    </li>
                    <!-- /contact -->

                    <!-- blog -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/news">News</a>
                    </li>   
                    <!-- /blog -->
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- /nav header -->
<?php }} ?>
