<?php
/* Smarty version 5.7.0, created on 2026-02-13 10:59:37
  from 'file:ajax.live.notifications.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_698f0419bc1bc3_02377498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37be39c9c156b8b85d9c989a5bcaa590d65e921d' => 
    array (
      0 => 'ajax.live.notifications.tpl',
      1 => 1647975803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_notification.tpl' => 1,
  ),
))) {
function content_698f0419bc1bc3_02377498 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('notifications'), 'notification');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('notification')->value) {
$foreach0DoElse = false;
?>
  <?php $_smarty_tpl->renderSubTemplate('file:__feeds_notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
