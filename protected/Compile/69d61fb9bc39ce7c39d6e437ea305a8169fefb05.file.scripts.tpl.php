<?php /* Smarty version Smarty-3.1.19, created on 2019-03-21 22:39:44
         compiled from "/var/www/html/aptitudecare/protected/Views/elements/scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13029748355c92b10c7e4481-70660865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69d61fb9bc39ce7c39d6e437ea305a8169fefb05' => 
    array (
      0 => '/var/www/html/aptitudecare/protected/Views/elements/scripts.tpl',
      1 => 1553207965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13029748355c92b10c7e4481-70660865',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c92b10c7ea447_07790326',
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
<?php if ($_valid && !is_callable('content_5c92b10c7ea447_07790326')) {function content_5c92b10c7ea447_07790326($_smarty_tpl) {?>  <!-- Bootstrap scripts -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  
<!-- Older JS scripts -->
  <!-- <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
  <?php if ($_smarty_tpl->tpl_vars['this']->value->module=="HomeHealth") {?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jQuery-Autocomplete-master/dist/jquery.autocomplete.min.js"></script>
  <?php }?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery-validation-1.13.0/dist/jquery.validate.min.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery.maskedinput.min.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/datepicker.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery-ui-timepicker-0.3.3/jquery.ui.timepicker.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/jquery.row-grid.min.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/dropzone/dropzone.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/fancybox/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/gridify/gridify-min.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/gridify/require.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/shadowbox-3.0.3/shadowbox.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/fancybox/helpers/jquery.fancybox-buttons.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/tagit/js/tag-it.min.js"></script>

  <script>
    var SITE_URL = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
';
    Shadowbox.init({
      height: 425,
      width: 450,
      handleOversize: "resize",
      overlayColor: "#666",
      overlayOpacity: "0.25"
    });
  </script>

  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/general.js"></script> -->

  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/bootstrap/js/bootstrap.min.js"></script>

  <?php if ($_smarty_tpl->tpl_vars['auth']->value->valid()&&$_smarty_tpl->tpl_vars['auth']->value->getRecord()->timeout) {?>
    <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/timeout.js"></script>

    <script>
      $(document).ready(function() {
        startTimer();
      });
    </script>
  <?php }?>
<?php }} ?>
