<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 20:25:32
         compiled from "/var/www/html/aptitudecare/modules/Dietary/Views/info/beverages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:687375845c92c2a76cdc84-01100522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5734a7c3afeec3c1254544c8713e12ea6d1170d' => 
    array (
      0 => '/var/www/html/aptitudecare/modules/Dietary/Views/info/beverages.tpl',
      1 => 1553125343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '687375845c92c2a76cdc84-01100522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c92c2a76d57c7_60849933',
  'variables' => 
  array (
    'this' => 0,
    'location' => 0,
    'SITE_URL' => 0,
    'current_url' => 0,
    'beverages' => 0,
    'bev' => 0,
    'menu' => 0,
    'FRAMEWORK_IMAGES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c92c2a76d57c7_60849933')) {function content_5c92c2a76d57c7_60849933($_smarty_tpl) {?><div class="row text-center">
  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'UTF-8');?>

</div>

<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
 Beverages</h1>
<br>
<!-- <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" method="post"> -->
  <input type="hidden" name="page" value="info">
  <input type="hidden" name="action" value="save_beverages">
  <input type="hidden" name="location" class="locationId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
  <input type="hidden" name="current_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">

  <div class="row bev-items">
  <?php  $_smarty_tpl->tpl_vars['bev'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bev']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['beverages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bev']->key => $_smarty_tpl->tpl_vars['bev']->value) {
$_smarty_tpl->tpl_vars['bev']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['bev']->key;
?>
      <div class="col-sm-4 col-xs-4 bev-item">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bev']->value->name, ENT_QUOTES, 'UTF-8');?>

        <a href="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="delete">
          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/delete.png" class="pull-right" alt="">
          <input type="hidden" name="bev_id" class="bev-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bev']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" />
        </a>
      </div>
  <?php } ?>
    <div class="col-sm-4 col-xs-4">
      <input type="text" name="beverage" class="new-bev" placeholder="Enter Name">
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-sm-12 text-right">
      <input type="submit" class="btn btn-success" value="Save">
    </div>
  </div> -->
<!-- </form> -->

<div id="dialog" title="Confirmation Required">
	<p>Are you sure you want to delete this item? This cannot be undone.</p>
</div>

<script>
  $(document).ready(function() {

    var locationId = $('.locationId').val();
    var bevName = null;

    $(document).on('focusout', '.new-bev', function() {
      bevName = $(this).val();
      var itemRow = $(this).parent();
      if (bevName !== '') {
        $.post(
          SITE_URL,
          {
            page: 'MainPage',
            action: 'ajax_save',
            item: {
              1: {
                object: 'BeverageList',
                colName: 'name',
                value: bevName
              },
              2: {
                object: 'LocationBeverage',
                colName: 'location_id',
                join: 'beverage_id'
              }

            },
            location: locationId
          },
          function () {
            // replace the input with text only showing the new name
            itemRow.empty().html(bevName).after('<div class="col-sm-4 col-xs-4"><input type="text" name="beverage" class="new-bev" placeholder="Enter Name"></div>');
            $('.new-bev').focus();
          },
          'text'
        );
      }

    });

    $(document).on('click', '.delete', function(e) {
      e.preventDefault();
      var bevId = $(this).children("input.bev-id").val();
      var inputBox = $(this).parent();

      $.post(
        SITE_URL,
        {
          page: 'MainPage',
          action: 'ajax_delete',
          item: {
            object: 'LocationBeverage',
            colName: 'public_id',
            value: bevId
          }
        },
        function() {
          inputBox.fadeOut('slow');
        }
      );
    });

  });
</script>
<?php }} ?>
