<?php
/* Smarty version 5.7.0, created on 2026-05-08 10:05:47
  from 'file:emails/notification_email.txt' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69fdb57be23c96_72654206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4be2cdb31f963fb72bb02372e6ac3a6d3050bcc3' => 
    array (
      0 => 'emails/notification_email.txt',
      1 => 1745729517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fdb57be23c96_72654206 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates/emails';
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hi");?>
 <?php echo $_smarty_tpl->getValue('receiver')['name'];?>
,

<?php if (!$_smarty_tpl->getValue('notification')['system_notification']) {
echo $_smarty_tpl->getValue('user')->_data['user_fullname'];
}?> <?php echo $_smarty_tpl->getValue('notification')['message'];?>

<?php echo $_smarty_tpl->getValue('notification')['url'];?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Team");
}
}
