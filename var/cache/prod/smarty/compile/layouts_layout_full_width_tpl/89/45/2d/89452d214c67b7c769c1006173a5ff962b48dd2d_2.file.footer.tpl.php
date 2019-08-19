<?php
/* Smarty version 3.1.33, created on 2019-08-19 17:08:11
  from '/var/www/html/Amultiservice/themes/bentriz/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5ad77bedd825_49138414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89452d214c67b7c769c1006173a5ff962b48dd2d' => 
    array (
      0 => '/var/www/html/Amultiservice/themes/bentriz/templates/_partials/footer.tpl',
      1 => 1564237906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5ad77bedd825_49138414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="newsletter-section">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15550848265d5ad77bece547_43076664', 'hook_footer_before');
?>

</div>
<div class="footer-container">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13318333265d5ad77bed2185_41278157', 'hook_footer');
?>

        </div>
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12257274235d5ad77bed3899_60253901', 'hook_footer_after');
?>

        </div>
        <div class="col-md-12 footer-bottom">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-sm-center">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19350180925d5ad77bed5833_14523753', 'copyright_link');
?>

                    </p>
                </div>
                <div class="cards col-md-6">
                    <ul>
                        <li>
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
/americanexpress.png">
                        </li>
                        <li>
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
/discover.png">
                        </li>
                        <li>
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
/maestro.png">
                        </li>
                        <li>
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
/master.png">
                        </li>
                        <li>
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
/visa.png">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }
/* {block 'hook_footer_before'} */
class Block_15550848265d5ad77bece547_43076664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_15550848265d5ad77bece547_43076664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_13318333265d5ad77bed2185_41278157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_13318333265d5ad77bed2185_41278157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_12257274235d5ad77bed3899_60253901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_12257274235d5ad77bed3899_60253901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_19350180925d5ad77bed5833_14523753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_19350180925d5ad77bed5833_14523753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <a class="_blank" href="http://www.prestashop.com" target="_blank">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                            </a>
                        <?php
}
}
/* {/block 'copyright_link'} */
}
