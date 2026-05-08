<?php
/* Smarty version 5.7.0, created on 2026-02-13 10:43:52
  from 'file:ajax.lightbox.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_698f0068a90231_43672816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e8c2c6ee391e5bce05c5f58f83582f7331e915b' => 
    array (
      0 => 'ajax.lightbox.tpl',
      1 => 1647975801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post_photo.tpl' => 1,
  ),
))) {
function content_698f0068a90231_43672816 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
$_smarty_tpl->assign('post', $_smarty_tpl->getValue('photo')['post'], false, NULL);?>

<div class="lightbox-post" data-id="<?php if ($_smarty_tpl->getValue('photo')['is_single']) {
echo $_smarty_tpl->getValue('post')['post_id'];
} else {
echo $_smarty_tpl->getValue('photo')['photo_id'];
}?>">
  <div class="js_scroller" data-slimScroll-height="100%">
    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_lightbox'=>true), (int) 0, $_smarty_current_dir);
?>
  </div>
</div><?php }
}
