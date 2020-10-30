<?php /* Smarty version Smarty-3.1.19, created on 2020-04-20 15:23:21
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/layouts/website.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21098280635e55d1306d2bd5-10915343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a57bf72749625df1df5a3c15fd7251512bf30e8' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/layouts/website.tpl',
      1 => 1587424992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21098280635e55d1306d2bd5-10915343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e55d1306d4ad9_51388248',
  'variables' => 
  array (
    'CSS' => 0,
    'JS' => 0,
    'SITE_URL' => 0,
    'title' => 0,
    'this' => 0,
    'flashMessages' => 0,
    'class' => 0,
    'message' => 0,
    'm' => 0,
    'content' => 0,
    'IMAGES' => 0,
    'auth' => 0,
    'jsfile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e55d1306d4ad9_51388248')) {function content_5e55d1306d4ad9_51388248($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name= "description" content="Aspen Creek provides senior assistance and elderly care in Alaska. Find the right place for your loved ones by visiting our state-of-the-art community! "/>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/slick-theme.css">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/slick.css">
    <link rel="stylesheet" type="text/css" href="fonts/fonts.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/public-custom.css"> 

    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/lity-2.4.0/dist/lity.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/lity-2.4.0/dist/lity.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <script src="https://kit.fontawesome.com/5df6dcce04.js" crossorigin="anonymous"></script>
    <script src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/website.js"></script>
    <script>
        var SITE_URL = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
';
        $(document).ready(function() {
            $('.alert-success').delay(8000).fadeOut();
            $('.alert-warning').delay(8000).fadeOut();
        });
        
    </script>
    
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
 | Senior Living in Anchorage, AK </title>
</head>

<body>
    <!-- covid-19 message -->
    <div id="covid-19-message" class="sticky-top">
        <div id="inner-message" class="alert alert-warning">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/news/posts/covid-19">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p class="text-center">Updates on how we are protecting our residents from COVID-19</p>
            </a>
        </div>
    </div>
    <!-- /covid-19 message -->

    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('publicNav'), ENT_QUOTES, 'UTF-8');?>


    <!-- page body -->
    <?php if ($_smarty_tpl->tpl_vars['flashMessages']->value) {?>
    <div class="container">
        <div class="row mx-4">
        <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['flashMessages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->value = $_smarty_tpl->tpl_vars['message']->key;
?>
            <div class="col-12 text-center alert <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" role="alert">
                <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value, ENT_QUOTES, 'UTF-8');?>

                <?php } ?>
            </div>
        <?php } ?>
        </div> 
    </div>
    <?php }?>
  
    <!-- load page content -->
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <a href="https://vimeo.com/user100366085"><i class="fab fa-vimeo fa-2x ml-2"></i></a>
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
    <script defer src="https://connect.podium.com/widget.js#API_TOKEN=5a2423dd-edc2-41e3-abef-c417d13b723f" id="podium-widget" data-api-token="5a2423dd-edc2-41e3-abef-c417d13b723f"></script>
    <!-- /podium script -->  
    
</body>
<script>
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['jsfile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</script>

</html><?php }} ?>
