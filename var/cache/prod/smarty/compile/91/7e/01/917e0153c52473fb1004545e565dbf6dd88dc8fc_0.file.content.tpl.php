<?php
/* Smarty version 3.1.33, created on 2019-08-19 17:04:46
  from '/var/www/html/Amultiservice/admin978up8vab/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5ad6ae449800_26861368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '917e0153c52473fb1004545e565dbf6dd88dc8fc' => 
    array (
      0 => '/var/www/html/Amultiservice/admin978up8vab/themes/default/template/content.tpl',
      1 => 1564161789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5ad6ae449800_26861368 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
