<?php
/* Smarty version 5.7.0, created on 2026-05-06 11:12:29
  from 'file:__custom_fields.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69fb221d8a77f2_81327937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4869ae33f22c886c948636b26dcef41d8c37dd21' => 
    array (
      0 => '__custom_fields.tpl',
      1 => 1741463775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb221d8a77f2_81327937 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
if ($_smarty_tpl->getValue('_registration')) {?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_custom_fields'), 'custom_field');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach0DoElse = false;
?>
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
 <?php if ($_smarty_tpl->getValue('custom_field')['mandatory'] && !$_smarty_tpl->getValue('_search')) {?>*<?php }?></label>
      <?php if ($_smarty_tpl->getValue('custom_field')['type'] == "textbox") {?>
        <input class="form-control" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
" type="text" <?php if (!$_smarty_tpl->getValue('_search')) {?>placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
" <?php }?> <?php if ($_smarty_tpl->getValue('custom_field')['mandatory'] && !$_smarty_tpl->getValue('_search')) {?>required<?php }?>>
      <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "textarea") {?>
        <textarea class="form-control" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
" <?php if (!$_smarty_tpl->getValue('_search')) {?>placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
" <?php }?> <?php if ($_smarty_tpl->getValue('custom_field')['mandatory'] && !$_smarty_tpl->getValue('_search')) {?>required<?php }?>></textarea>
      <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "selectbox") {?>
        <select class="form-select" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
" <?php if ($_smarty_tpl->getValue('custom_field')['mandatory'] && !$_smarty_tpl->getValue('_search')) {?>required<?php }?>>
          <?php if ($_smarty_tpl->getValue('_search')) {?>
            <option selected value="any"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Any");?>
</option>
          <?php } else { ?>
            <option selected value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
</option>
          <?php }?>
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_field')['options'], 'value', false, 'id');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
            <option value="<?php echo $_smarty_tpl->getValue('id');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('value')));?>
</option>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
      <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "multipleselectbox") {?>
        <select class="form-select" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
[]" multiple <?php if ($_smarty_tpl->getValue('custom_field')['mandatory'] && !$_smarty_tpl->getValue('_search')) {?>required<?php }?>>
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_field')['options'], 'value', false, 'id');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach2DoElse = false;
?>
            <option value="<?php echo $_smarty_tpl->getValue('id');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('value')));?>
</option>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('custom_field')['description'] && !$_smarty_tpl->getValue('_search')) {?>
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['description']);?>

        </div>
      <?php }?>
    </div>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
} else { ?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_custom_fields'), 'custom_field');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach3DoElse = false;
?>
    <div class="form-group <?php if ($_smarty_tpl->getValue('_inline')) {?>row<?php }?>">
      <label class="form-label <?php if ($_smarty_tpl->getValue('_inline')) {?>col-md-3<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
 <?php if ($_smarty_tpl->getValue('custom_field')['mandatory']) {?>*<?php }?></label>
      <?php if ($_smarty_tpl->getValue('_inline')) {?><div class="col-md-9"><?php }?>
        <?php if ($_smarty_tpl->getValue('custom_field')['type'] == "textbox") {?>
          <input class="form-control" type="text" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
" value="<?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
" <?php if ($_smarty_tpl->getValue('custom_field')['mandatory']) {?>required<?php }?>>
        <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "textarea") {?>
          <textarea class="form-control" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
" <?php if ($_smarty_tpl->getValue('custom_field')['mandatory']) {?>required<?php }?>><?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
</textarea>
        <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "selectbox") {?>
          <select class="form-select" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
" <?php if ($_smarty_tpl->getValue('custom_field')['mandatory']) {?>required<?php }?>>
            <option <?php if ($_smarty_tpl->getValue('custom_field')['value'] == '') {?>selected<?php }?> value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
</option>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_field')['options'], 'value', false, 'id');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach4DoElse = false;
?>
              <option <?php if ($_smarty_tpl->getValue('custom_field')['value'] == $_smarty_tpl->getValue('value')) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('id');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('value')));?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </select>
        <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "multipleselectbox") {?>
          <select class="form-select" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
[]" multiple <?php if ($_smarty_tpl->getValue('custom_field')['mandatory']) {?>required<?php }?>>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_field')['options'], 'value', false, 'id');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach5DoElse = false;
?>
              <option <?php if ((true && (true && null !== ($_smarty_tpl->getValue('custom_field')['value'] ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('id'),$_smarty_tpl->getValue('custom_field')['value'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('id');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('value')));?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </select>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('custom_field')['description']) {?>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['description']);?>

          </div>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('_inline')) {?>
      </div><?php }?>
    </div>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
