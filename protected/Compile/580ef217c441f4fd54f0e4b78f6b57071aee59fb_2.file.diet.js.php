<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 13:20:19
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/diet.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebf07930b5520_37730962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '580ef217c441f4fd54f0e4b78f6b57071aee59fb' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/diet.js',
      1 => 1587162959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebf07930b5520_37730962 (Smarty_Internal_Template $_smarty_tpl) {
?>    

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

<?php }
}
