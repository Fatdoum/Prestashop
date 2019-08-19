<?php
/* Smarty version 3.1.33, created on 2019-08-19 17:08:02
  from '/var/www/html/Amultiservice/modules/ht_googleanalytics/views/templates/hook/ht_googleanalytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5ad7727762d6_34733060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55abf1f0a8cf3b123c7daaf7f1b09d5533d91086' => 
    array (
      0 => '/var/www/html/Amultiservice/modules/ht_googleanalytics/views/templates/hook/ht_googleanalytics.tpl',
      1 => 1564237906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5ad7727762d6_34733060 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['ga_enable']->value) && $_smarty_tpl->tpl_vars['ga_enable']->value == 'ga_yes') {?>
    <?php echo '<script'; ?>
>
        
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        
            ga('create', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_google_tracking_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'auto');
            ga('send', 'pageview');
    <?php echo '</script'; ?>
>
<?php }
}
}
