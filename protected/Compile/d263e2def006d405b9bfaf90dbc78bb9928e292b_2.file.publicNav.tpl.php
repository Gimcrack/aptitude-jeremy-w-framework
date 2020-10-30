<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 13:12:22
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/publicNav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb328361ef1b9_78278560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd263e2def006d405b9bfaf90dbc78bb9928e292b' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/publicNav.tpl',
      1 => 1587427091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb328361ef1b9_78278560 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- nav header -->
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
<?php }
}
