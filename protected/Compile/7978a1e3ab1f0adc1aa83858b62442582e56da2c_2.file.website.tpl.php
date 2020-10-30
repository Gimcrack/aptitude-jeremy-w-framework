<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-23 09:05:47
  from '/var/www/html/aptitudecare/dev/protected/Views/layouts/website.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef2366be78bc8_77373446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7978a1e3ab1f0adc1aa83858b62442582e56da2c' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/layouts/website.tpl',
      1 => 1592931167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef2366be78bc8_77373446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name= "description" content="Aspen Creek provides senior assistance and elderly care in Alaska. Find the right place for your loved ones by visiting our state-of-the-art community! "/>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- CSS -->
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/lity-2.4.0/dist/lity.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/public-custom.css"> 
    <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/themes/default.css">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/themes/default.date.css">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/themes/default.time.css">



    <?php if ($_smarty_tpl->tpl_vars['GOOGLE_ANALYTICS']->value) {?>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-126621302-2"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-126621302-2');
    <?php echo '</script'; ?>
>
    
    <?php }?>

    
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
 | Senior Living in Anchorage, AK </title>
</head>

<body>
    <!-- covid-19 message -->
<!--     <div id="covid-19-message" class="sticky-top">
        <div id="inner-message" class="alert alert-warning">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/news/posts/covid-19">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p class="text-center">Updates on how we are protecting our residents from COVID-19</p>
            </a>
        </div>
    </div>
 -->    <!-- /covid-19 message -->

    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('publicNav'), ENT_QUOTES, 'UTF-8');?>


    <!-- page body -->
    <?php if ($_smarty_tpl->tpl_vars['flashMessages']->value) {?>
    <div id="flashMessages" class="container">
        <div class="row mx-4 p-4 flash-message">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flashMessages']->value, 'message', false, 'class');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value => $_smarty_tpl->tpl_vars['message']->value) {
?>
            <div class="col-12 text-center alert-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" role="alert">
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
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div> 
    </div>
    <?php }?>
  
    <!-- load page content -->
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <!-- /load page content -->
    <!-- /page body -->


    <!-- footer -->
    <footer>
        <div class="container-fluid footer-background">

            <!-- row 1 -->
            <div class="row py-5">
                <div class="col-lg-8 col-sm-12 logo">
                    <a href="/"><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/aspencreek-logo_white.png" alt="Aspen Creek White Logo senior living Anchorage, AK /assisted living Anchorage, AK /assisted living facility Anchorage, AK /senior care center Anchorage, Alaska elderly care Alaska/Elderly Care Center Alaska/elderly care Alaska/senior assistance Alaska" ></a>
                </div>
                <div class="social col-lg-4 col-sm-12">
                    <a href="https://www.facebook.com/aspencreekalaska" target="_blank"><i class="fab fa-facebook fa-2x ml-2"></i></a>
                    <a href="https://www.instagram.com/aspencreekalaska/" target="_blank"><i class="fab fa-instagram fa-2x ml-2"></i></a>
                    <a href="https://www.youtube.com/channel/UCeYE9V77h4y_NcM2EpjhvFQ?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-2x ml-2"></i></a>
                    <a href="https://vimeo.com/user100366085" target="_blank"><i class="fab fa-vimeo fa-2x ml-2"></i></a>
                </div>
            </div>
            <!-- /row 1 -->

            <!-- row 2 -->
            <div class="row py-2">
                <div class="col-lg-3 col-md-6 ml-5 address-area">
                    <p><i class="fas fa-map-marked-alt"></i> 
                        <span class="ml-1">5915 Petersburg Street</span><br>
                        <span class="ml-4">Anchorage, Alaska 99507</span>
                    </p>                    
                    <p><i class="fas fa-phone-volume"></i><span class="ml-2">&nbsp;907.868.2688</span></p>
                </div>
            
                <div class="col-lg-8 col-md-6">
                    <ul class="nav float-right">
                        <li class="nav-item">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" class="nav-link"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/living-at-aspen-creek" class="nav-link">Living at Aspen Creek</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/faq" class="nav-link">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/contact" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/careers" class="nav-link">Careers</a>
                        </li>
                        <li class="nav-item">
                            <?php if (!$_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/login" class="nav-link">Login</a>
                            <?php } else { ?>
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/login/logout" class="nav-link">Logout</a>
                            <?php }?>
                            
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 text-12 text-dark-grey text-center copyright">
                    <p>All Content &copy; <?php echo htmlspecialchars(smarty_modifier_date_format(time(),"%Y"), ENT_QUOTES, 'UTF-8');?>
 <a href="https://www.springcreekenterprise.com/" class="text-dark-grey" target="new">Spring Creek Enterprise</a>. All Rights Reserved.</p>
                </div>
            </div>
    </footer>
    <!-- /footer -->


    <!-- podium script -->
    <?php echo '<script'; ?>
 defer src="https://connect.podium.com/widget.js#API_TOKEN=5a2423dd-edc2-41e3-abef-c417d13b723f" id="podium-widget" data-api-token="5a2423dd-edc2-41e3-abef-c417d13b723f"><?php echo '</script'; ?>
>
    <!-- /podium script -->  

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/5df6dcce04.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var SITE_URL = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
';
        $(document).ready(function() {
            $('#flashMessages').delay(8000).fadeOut();
        });
        
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="//tag.brandcdn.com/autoscript/aspencreekassistedliving_vdfsbk1rnvjqvda9/_.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['jsfile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo '</script'; ?>
>

    
</body>


</html><?php }
}
