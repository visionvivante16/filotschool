<?php
/* Smarty version 5.7.0, created on 2026-05-06 11:27:07
  from 'file:_boosted_post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69fb258b72ec26_51516639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f769f578d1b609cf0724ed7b5e637c3184c9e69' => 
    array (
      0 => '_boosted_post.tpl',
      1 => 1742824134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
))) {
function content_69fb258b72ec26_51516639 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
if (!$_smarty_tpl->getValue('_no_title')) {?>
  <!-- posts-filter -->
  <div class="posts-filter">
    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Promoted Posts");?>
</span>
  </div>
  <!-- posts-filter -->
<?php }?>

<?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'boosted'=>true), (int) 0, $_smarty_current_dir);
}
}
