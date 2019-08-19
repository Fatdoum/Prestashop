<?php
/* Smarty version 3.1.33, created on 2019-08-19 17:08:01
  from '/var/www/html/Amultiservice/themes/bentriz/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5ad771522119_04506400',
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
function content_5d5ad771522119_04506400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="newsletter-section">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6508347665d5ad771511657_22181392', 'hook_footer_before');
?>

</div>
<div class="footer-container">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4063584135d5ad771513d49_40737790', 'hook_footer');
?>

        </div>
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13903021795d5ad771515cd6_44649542', 'hook_footer_after');
?>

        </div>
        <div class="col-md-12 footer-bottom">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-sm-center">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13239262285d5ad771517b26_52977093', 'copyright_link');
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
class Block_6508347665d5ad771511657_22181392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_6508347665d5ad771511657_22181392',
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
class Block_4063584135d5ad771513d49_40737790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_4063584135d5ad771513d49_40737790',
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
class Block_13903021795d5ad771515cd6_44649542 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_13903021795d5ad771515cd6_44649542',
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
class Block_13239262285d5ad771517b26_52977093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_13239262285d5ad771517b26_52977093',
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
