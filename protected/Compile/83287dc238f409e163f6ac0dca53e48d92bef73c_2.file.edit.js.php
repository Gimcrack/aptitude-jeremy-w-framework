<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-07 13:33:35
  from '/var/www/html/aptitudecare/dev/modules/Blog/Views/blog/edit.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb47eaf767f72_48517053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83287dc238f409e163f6ac0dca53e48d92bef73c' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Blog/Views/blog/edit.js',
      1 => 1587164778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb47eaf767f72_48517053 (Smarty_Internal_Template $_smarty_tpl) {
?>$(".active").removeClass("active");
$("#new-post").addClass("active");


$('#blog-tags').selectize({
    create: function(input, callback) {
        $.post(SITE_URL, {
            page: 'blogTag',
            action: 'createTag',
            name: input
        },
        function(response) {
            callback({value: response.id, text: response.name});
        }, 'json');
    }
});


$('#summernote').summernote({
    height: 350
});


$('#deletePost').click(function(e) {
    var id = $('#public-id').val();
    $.ajax({
        type: 'post',
        url: SITE_URL + '/?page=blog&action=delete_post&id=' + id,
        success: function(response) {
            window.location.href = SITE_URL + '/?page=blog&action=manage';
        }
    });
});


<?php }
}
