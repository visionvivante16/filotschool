<?php
/* Smarty version 5.7.0, created on 2026-09-08 07:12:06
  from 'file:_pinned_post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a9fb54663e788_02620671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46f4ee9e987a21c8041b5c1dcb9cde0ab1735779' => 
    array (
      0 => '_pinned_post.tpl',
      1 => 1647975699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
))) {
function content_6a9fb54663e788_02620671 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><!-- posts-filter -->
<div class="posts-filter">
  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pinned Post");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'pinned'=>true), (int) 0, $_smarty_current_dir);
}
}
