<?php
/* Smarty version 5.7.0, created on 2026-02-13 10:42:51
  from 'file:__reaction_emojis.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_698f002ba0f1f2_32005962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e40262566f06916833b99e8aeb22284df2ff2fd' => 
    array (
      0 => '__reaction_emojis.tpl',
      1 => 1764699973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_698f002ba0f1f2_32005962 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->getValue('system')['reactions'][$_smarty_tpl->getValue('_reaction')]['image_url'];?>
" alt="<?php echo $_smarty_tpl->getValue('system')['reactions'][$_smarty_tpl->getValue('_reaction')]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
