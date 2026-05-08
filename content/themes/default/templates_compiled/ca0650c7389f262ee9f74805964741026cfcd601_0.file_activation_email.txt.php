<?php
/* Smarty version 5.7.0, created on 2026-02-13 10:45:40
  from 'file:emails/activation_email.txt' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_698f00d4d1dea7_22429627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca0650c7389f262ee9f74805964741026cfcd601' => 
    array (
      0 => 'emails/activation_email.txt',
      1 => 1693733137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_698f00d4d1dea7_22429627 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates/emails';
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hi");?>
 <?php echo $_smarty_tpl->getValue('name');?>
,

<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("To complete the activation process, please follow this link");?>
:
<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/activation/<?php echo $_smarty_tpl->getValue('email_verification_code');?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Activiation Code");?>
: <?php echo $_smarty_tpl->getValue('email_verification_code');?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Welcome to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Team");
}
}
