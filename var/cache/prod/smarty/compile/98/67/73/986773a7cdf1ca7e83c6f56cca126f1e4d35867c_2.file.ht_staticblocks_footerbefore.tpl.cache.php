<?php
/* Smarty version 3.1.33, created on 2019-08-19 17:08:01
  from '/var/www/html/Amultiservice/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_footerbefore.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5ad77153e665_91386585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '986773a7cdf1ca7e83c6f56cca126f1e4d35867c' => 
    array (
      0 => '/var/www/html/Amultiservice/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_footerbefore.tpl',
      1 => 1564237906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5ad77153e665_91386585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9628805175d5ad7715337c2_42216444';
?>

<!-- Static Block module -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_list']->value, 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
	<?php if (isset($_smarty_tpl->tpl_vars['block']->value['content'])) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['content'],'quotes','UTF-8' ));?>

	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /Static block module --><?php }
}
