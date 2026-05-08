<?php
/* Smarty version 5.7.0, created on 2026-02-13 10:48:59
  from 'file:ajax.live.conversations.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_698f019b6f2422_68159636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4261130ac66e15369dffcb88c5d70792ff37a27' => 
    array (
      0 => 'ajax.live.conversations.tpl',
      1 => 1647975803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_conversation.tpl' => 1,
  ),
))) {
function content_698f019b6f2422_68159636 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('conversations'), 'conversation');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('conversation')->value) {
$foreach0DoElse = false;
?>
  <?php $_smarty_tpl->renderSubTemplate('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
