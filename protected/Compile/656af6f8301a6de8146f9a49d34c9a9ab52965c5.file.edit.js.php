<?php /* Smarty version Smarty-3.1.19, created on 2020-03-26 13:42:19
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/blog/edit.js" */ ?>
<?php /*%%SmartyHeaderCode:14908264345e7bec5b8b9fc4-95324496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '656af6f8301a6de8146f9a49d34c9a9ab52965c5' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/blog/edit.js',
      1 => 1585258935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14908264345e7bec5b8b9fc4-95324496',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e7bec5b8baaf6_93537932',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e7bec5b8baaf6_93537932')) {function content_5e7bec5b8baaf6_93537932($_smarty_tpl) {?><script>
	
	
	$(function() {
		var postId = $('#public-id').val();
		$.ajax({
			type: 'post',
			url: SITE_URL,
			data: {
				page: 'blog_tag',
				action: 'get_existing_tags',
				post_id: postId
			},
			success: function(e) {
				var result = e.map(function(val) {
					return val.name;
				}).join(',');

				$('#tags').importTags(result);
			}
		});
	});


	$('#summernote').summernote({
    	height: 350
    });

    $('#tags').tagsInput({
    	// autocomplete_url: SITE_URL + '/blogTag/get_tags',
    	'height': '3rem',
    	'width': '100%',
    	// 'interactive': true,
    	'defaultText': 'Add a tag',
    	// 'onAddTag': function() {
    	// 	var tags = $(this).val();
    	// 	var postId = $('#public-id').val();		
    	// 	$.ajax({
    	// 		url: SITE_URL,
    	// 		data: {
    	// 			page: 'blog_tag',
    	// 			action: 'add_tags',
    	// 			post_id: postId,
    	// 			name: tags
    	// 		}, success: function(e) {
    	// 			console.log(e);
    	// 		}
    	// 	});
    	// },
    	'onChange': function() {
    		// delete the tags with the blog id
    		var tags = $(this).val();
    		var postId = $('#public-id').val();
    		$.ajax({
    			url: SITE_URL,
    			data: {
    				type: 'post',
    				page: 'blog_tag',
    				action: 'add_tags',
    				post_id: postId,
    				name: tags
    			}, success: function(e) {
    				console.log(e);
    			}
    		});

    	},
    	// 'delimiter': [',',';'],   // Or a string with a single delimiter. Ex: ';'
   		// 'removeWithBackspace' : true,
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

</script><?php }} ?>
