<?php /* Smarty version Smarty-3.1.19, created on 2020-04-17 15:06:20
         compiled from "/var/www/html/aptitudecare/dev/modules/Blog/Views/blog/edit.js" */ ?>
<?php /*%%SmartyHeaderCode:20987598785e990be49d47b5-45902861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84f5d54a110a4b2cc2ef6e4bb3ade4c44181d9fb' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Blog/Views/blog/edit.js',
      1 => 1587164778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20987598785e990be49d47b5-45902861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e990be49d6428_86062956',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e990be49d6428_86062956')) {function content_5e990be49d6428_86062956($_smarty_tpl) {?>$(".active").removeClass("active");
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


<?php }} ?>
