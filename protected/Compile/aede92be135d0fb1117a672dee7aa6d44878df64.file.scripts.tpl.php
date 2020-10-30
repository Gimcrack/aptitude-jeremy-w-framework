<?php /* Smarty version Smarty-3.1.19, created on 2020-03-20 00:09:21
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8618246685e613da49ce377-15191808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aede92be135d0fb1117a672dee7aa6d44878df64' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/scripts.tpl',
      1 => 1584662959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8618246685e613da49ce377-15191808',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e613da49d65a0_86595933',
  'variables' => 
  array (
    'FRAMEWORK_JS' => 0,
    'this' => 0,
    'SITE_URL' => 0,
    'JS' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e613da49d65a0_86595933')) {function content_5e613da49d65a0_86595933($_smarty_tpl) {?>  <!-- Bootstrap scripts -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  
<!-- Older JS scripts -->
<!--   <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
 --><!--   <?php if ($_smarty_tpl->tpl_vars['this']->value->module=="HomeHealth") {?>
 --><!--   <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jQuery-Autocomplete-master/dist/jquery.autocomplete.min.js"></script>
  <?php }?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-validation-1.13.0/dist/jquery.validate.min.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery.maskedinput.min.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-ui-timepicker-0.3.3/jquery.ui.timepicker.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery.row-grid.min.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/dropzone/dropzone.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/fancybox/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/gridify/gridify-min.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/gridify/require.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/shadowbox-3.0.3/shadowbox.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/fancybox/helpers/jquery.fancybox-buttons.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/tagit/js/tag-it.min.js"></script>
 -->
<!--   <script>
    var SITE_URL = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
';
    Shadowbox.init({
      height: 425,
      width: 450,
      handleOversize: "resize",
      overlayColor: "#666",
      overlayOpacity: "0.25"
    });
  </script>

  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/general.js"></script>


  <?php if ($_smarty_tpl->tpl_vars['auth']->value->valid()&&$_smarty_tpl->tpl_vars['auth']->value->getRecord()->timeout) {?>
    <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'UTF-8');?>
/timeout.js"></script>

    <script>
      $(document).ready(function() {
        startTimer();
      });
    </script>
  <?php }?>
 --><?php }} ?>
