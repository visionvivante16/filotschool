<?php
/* Smarty version 5.7.0, created on 2026-09-08 07:10:01
  from 'file:_affiliates_levels.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a9fb4c908ae39_79070906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '928263d4235d77fb4a3c7c6390e6c72e8b464a24' => 
    array (
      0 => '_affiliates_levels.tpl',
      1 => 1763035735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a9fb4c908ae39_79070906 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="heading-small mb20">
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 1");?>

</div>
<div class="pl-md-4">
  <div class="row form-group">
    <label class="col-md-3 form-label">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price/Referred");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
    </label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="affiliates_per_user" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_per_user'];?>
">
      <div class="form-text">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The fixed price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 1");?>
)
      </div>
    </div>
  </div>

  <div class="row form-group">
    <label class="col-md-3 form-label">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Percentage");?>
 (%)
    </label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="affiliates_percentage" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_percentage'];?>
">
      <div class="form-text">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The percentage from price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 1");?>
)
      </div>
    </div>
  </div>
</div>

<div class="<?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] < 2) {?>x-hidden<?php }?>" id="affiliates-levels-2">
  <div class="divider dashed"></div>

  <div class="heading-small mb20">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 2");?>

  </div>
  <div class="pl-md-4">
    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price/Referred");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_per_user_2" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_per_user_2'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The fixed price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 2");?>
)
        </div>
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Percentage");?>
 (%)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_percentage_2" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_percentage_2'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The percentage from price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 2");?>
)
        </div>
      </div>
    </div>
  </div>
</div>

<div class="<?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] < 3) {?>x-hidden<?php }?>" id="affiliates-levels-3">
  <div class="divider dashed"></div>

  <div class="heading-small mb20">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 3");?>

  </div>
  <div class="pl-md-4">
    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price/Referred");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_per_user_3" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_per_user_3'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The fixed price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 3");?>
)
        </div>
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Percentage");?>
 (%)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_percentage_3" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_percentage_3'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The percentage from price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 3");?>
)
        </div>
      </div>
    </div>
  </div>
</div>

<div class="<?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] < 4) {?>x-hidden<?php }?>" id="affiliates-levels-4">
  <div class="divider dashed"></div>

  <div class="heading-small mb20">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 4");?>

  </div>
  <div class="pl-md-4">
    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price/Referred");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_per_user_4" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_per_user_4'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The fixed price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 4");?>
)
        </div>
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Percentage");?>
 (%)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_percentage_4" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_percentage_4'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The percentage from price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 4");?>
)
        </div>
      </div>
    </div>
  </div>
</div>

<div class="<?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] < 5) {?>x-hidden<?php }?>" id="affiliates-levels-5">
  <div class="divider dashed"></div>

  <div class="heading-small mb20">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 5");?>

  </div>
  <div class="pl-md-4">
    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price/Referred");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_per_user_5" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_per_user_5'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The fixed price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 5");?>
)
        </div>
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Percentage");?>
 (%)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_percentage_5" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_percentage_5'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The percentage from price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 5");?>
)
        </div>
      </div>
    </div>
  </div>
</div>

<div class="<?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] < 6) {?>x-hidden<?php }?>" id="affiliates-levels-6">
  <div class="divider dashed"></div>

  <div class="heading-small mb20">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 6");?>

  </div>
  <div class="pl-md-4">
    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price/Referred");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_per_user_6" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_per_user_6'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The fixed price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 6");?>
)
        </div>
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Percentage");?>
 (%)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_percentage_6" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_percentage_6'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The percentage from price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 6");?>
)
        </div>
      </div>
    </div>
  </div>
</div>

<div class="<?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] < 7) {?>x-hidden<?php }?>" id="affiliates-levels-7">
  <div class="divider dashed"></div>

  <div class="heading-small mb20">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 7");?>

  </div>
  <div class="pl-md-4">
    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price/Referred");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_per_user_7" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_per_user_7'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The fixed price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 7");?>
)
        </div>
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Percentage");?>
 (%)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_percentage_7" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_percentage_7'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The percentage from price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 7");?>
)
        </div>
      </div>
    </div>
  </div>
</div>

<div class="<?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] < 8) {?>x-hidden<?php }?>" id="affiliates-levels-8">
  <div class="divider dashed"></div>

  <div class="heading-small mb20">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 8");?>

  </div>
  <div class="pl-md-4">
    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price/Referred");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_per_user_8" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_per_user_8'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The fixed price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 8");?>
)
        </div>
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Percentage");?>
 (%)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_percentage_8" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_percentage_8'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The percentage from price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 8");?>
)
        </div>
      </div>
    </div>
  </div>
</div>

<div class="<?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] < 9) {?>x-hidden<?php }?>" id="affiliates-levels-9">
  <div class="divider dashed"></div>

  <div class="heading-small mb20">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 9");?>

  </div>
  <div class="pl-md-4">
    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price/Referred");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_per_user_9" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_per_user_9'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The fixed price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 9");?>
)
        </div>
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Percentage");?>
 (%)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_percentage_9" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_percentage_9'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The percentage from price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 9");?>
)
        </div>
      </div>
    </div>
  </div>
</div>

<div class="<?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] < 10) {?>x-hidden<?php }?>" id="affiliates-levels-10">
  <div class="divider dashed"></div>

  <div class="heading-small mb20">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 10");?>

  </div>
  <div class="pl-md-4">
    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price/Referred");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_per_user_10" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_per_user_10'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The fixed price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 10");?>
)
        </div>
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 form-label">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Percentage");?>
 (%)
      </label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="affiliates_percentage_10" value="<?php echo $_smarty_tpl->getValue('_affiliate')['affiliates_percentage_10'];?>
">
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The percentage from price for each new referred user");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("level 10");?>
)
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
