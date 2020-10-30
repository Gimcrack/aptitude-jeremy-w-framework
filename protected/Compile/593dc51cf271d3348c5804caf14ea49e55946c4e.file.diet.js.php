<?php /* Smarty version Smarty-3.1.19, created on 2020-05-06 10:52:25
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/diet.js" */ ?>
<?php /*%%SmartyHeaderCode:16618784315e85098c9cc948-41960779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '593dc51cf271d3348c5804caf14ea49e55946c4e' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/diet.js',
      1 => 1587162959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16618784315e85098c9cc948-41960779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e85098c9d35c6_39550701',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e85098c9d35c6_39550701')) {function content_5e85098c9d35c6_39550701($_smarty_tpl) {?>    

$('#food-allergies').selectize({
     delimiter: ',',
     load: function(query, callback) {
          var patientId = $('.patient-id').val();
          $.ajax({
               url: SITE_URL,
               page: 'patientInfo',
               action: 'fetchAllergies',
               patientId: patientId,
               type: 'GET',
               error: function() {
                    console.log('failed');
               }, 
               success: function(response) {
                    console.log(response);
                    callback({value: response.id, text: response.name});
               }
          });
     },               
     create: function (input, callback) {
          console.log($(this).parent().next('input:hidden').attr('name'));
          $.post(SITE_URL, {
               page: 'patient_info',
               action: 'addAllergy',
               name: input,
          },
          function(response) {
               console.log(response);
               callback({value: response.id, text: response.name});
          }, 'json');


     }

});

$('#food-dislikes').selectize({
     delimiter: ',',
     load: function(query, callback) {
          var patientId = $('.patient-id').val();
          $.get(SITE_URL, {
               page: 'patientInfo',
               action: 'fetchDislikes',
               patientId: patientId
          },
          function(response, callback) {
               console.log(response);
               callback({value: response.id, text: response.name});
          }
          );
     },
     create: function (input, callback) {
          console.log($(this).parent().next('input:hidden').attr('name'));
          $.post(SITE_URL, {
               page: 'patient_info',
               action: 'addDislike',
               name: input,
          },
          function(response) {
               console.log(response);
               callback({value: response.id, text: response.name});
          }, 'json');


     }

});

$('.special-request').selectize({
     create: function(input, callback) {
          $.post(SITE_URL, {
               page: 'patientInfo',
               action: 'addSpecialRequest',
               name: input,
          },
          function(response) {
               callback({value: response.id, text: response.name});
          }, 'json');
     }
});

$('.beverages').selectize();


// add minus icon for collapse element which is open by default
$(".collapse.show").each(function() {
     $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
});

// toggle plus minus icon on show hide of collapse element
$(".collapse").on('show.bs.collapse', function() {
     $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
}).on('hide.bs.collapse', function() {
     $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
});

<?php }} ?>
