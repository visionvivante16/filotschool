<?php
/* Smarty version 5.7.0, created on 2026-02-13 10:42:51
  from 'file:__feeds_post.text.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_698f002ba0cdb7_90378304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a37e6ea53a263e09a18dac5c42121c263f268fb' => 
    array (
      0 => '__feeds_post.text.tpl',
      1 => 1714828043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_698f002ba0cdb7_90378304 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="post-replace">
  <?php if (is_array($_smarty_tpl->getValue('post')['colored_pattern'])) {?>
    <div class="post-colored" <?php if ($_smarty_tpl->getValue('post')['colored_pattern']['type'] == "color") {?> style="background-image: linear-gradient(45deg, <?php echo $_smarty_tpl->getValue('post')['colored_pattern']['background_color_1'];?>
, <?php echo $_smarty_tpl->getValue('post')['colored_pattern']['background_color_2'];?>
);" <?php } else { ?> style="background-image: url(<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['colored_pattern']['background_image'];?>
)" <?php }?>>
      <div class="post-colored-text-wrapper js_scroller" data-slimScroll-height="240">
        <div class="post-text" dir="auto" style="color: <?php echo $_smarty_tpl->getValue('post')['colored_pattern']['text_color'];?>
;">
          <?php echo $_smarty_tpl->getValue('post')['text'];?>

        </div>
      </div>
    </div>
  <?php } else { ?>
    <div class="post-text js_readmore" dir="auto"><?php echo $_smarty_tpl->getValue('post')['text'];?>
</div>
  <?php }?>
  <div class="post-text-translation x-hidden" dir="auto"></div>
  <div class="post-text-plain x-hidden"><?php echo $_smarty_tpl->getValue('post')['text_plain'];?>
</div>
</div><?php }
}
