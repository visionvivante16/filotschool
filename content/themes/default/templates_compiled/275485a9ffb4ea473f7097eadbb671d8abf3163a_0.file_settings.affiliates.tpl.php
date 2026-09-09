<?php
/* Smarty version 5.7.0, created on 2026-09-07 13:19:37
  from 'file:settings.affiliates.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a9eb9e9c53215_76544579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '275485a9ffb4ea473f7097eadbb671d8abf3163a' => 
    array (
      0 => 'settings.affiliates.tpl',
      1 => 1766163214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__social_share.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:_no_transactions.tpl' => 1,
  ),
))) {
function content_6a9eb9e9c53215_76544579 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"affiliates",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Affiliates");?>

</div>
<div class="card-body">
  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
    <div class="alert alert-info">
      <div class="text">
        <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Affiliates System");?>
</strong><br>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Earn up to");?>

        <?php if ($_smarty_tpl->getValue('system')['affiliate_type'] == "registration") {?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 1");?>
)
          <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 2) {?>
            , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_2']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 2");?>
)
          <?php }?>
          <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 3) {?>
            , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_3']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 3");?>
)
          <?php }?>
          <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 4) {?>
            , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_4']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 4");?>
)
          <?php }?>
          <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 5) {?>
            , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_5']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 5");?>
)
          <?php }?>
          <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 6) {?>
            , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_6']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 6");?>
)
          <?php }?>
          <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 7) {?>
            , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_7']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 7");?>
)
          <?php }?>
          <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 8) {?>
            , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_8']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 8");?>
)
          <?php }?>
          <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 9) {?>
            , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_9']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 9");?>
)
          <?php }?>
          <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 10) {?>
            , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_10']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 10");?>
)
          <?php }?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("For each user you will refer");?>
.<br>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You will be paid when");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("new user registered");?>

        <?php } else { ?>
          <?php if ($_smarty_tpl->getValue('system')['affiliate_payment_type'] == "fixed") {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 1");?>
)
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 2) {?>
              , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_2']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 2");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 3) {?>
              ,<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_3']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 3");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 4) {?>
              , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_4']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 4");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 5) {?>
              , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_5']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 5");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 6) {?>
              , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_6']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 6");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 7) {?>
              , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_7']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 7");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 8) {?>
              , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_8']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 8");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 9) {?>
              , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_9']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 9");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 10) {?>
              , <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_per_user_10']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 10");?>
)
            <?php }?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("For each user you will refer");?>
.<br>
          <?php } else { ?>
            <?php echo $_smarty_tpl->getValue('system')['affiliates_percentage'];?>
% (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 1");?>
)
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 2) {?>
              , <?php echo $_smarty_tpl->getValue('system')['affiliates_percentage_2'];?>
% (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 2");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 3) {?>
              , <?php echo $_smarty_tpl->getValue('system')['affiliates_percentage_3'];?>
% (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 3");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 4) {?>
              , <?php echo $_smarty_tpl->getValue('system')['affiliates_percentage_4'];?>
% (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 4");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 5) {?>
              , <?php echo $_smarty_tpl->getValue('system')['affiliates_percentage_5'];?>
% (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 5");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 6) {?>
              , <?php echo $_smarty_tpl->getValue('system')['affiliates_percentage_6'];?>
% (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 6");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 7) {?>
              , <?php echo $_smarty_tpl->getValue('system')['affiliates_percentage_7'];?>
% (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 7");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 8) {?>
              , <?php echo $_smarty_tpl->getValue('system')['affiliates_percentage_8'];?>
% (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 8");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 9) {?>
              , <?php echo $_smarty_tpl->getValue('system')['affiliates_percentage_9'];?>
% (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 9");?>
)
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['affiliates_levels'] >= 10) {?>
              , <?php echo $_smarty_tpl->getValue('system')['affiliates_percentage_10'];?>
% (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Level 10");?>
)
            <?php }?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From the package or monetized content price of your refered user");?>
.<br>
          <?php }?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You will be paid when");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("new user registered & bought a package or monetized content");?>

        <?php }?>
        <br>
        <?php if ($_smarty_tpl->getValue('system')['affiliates_money_withdraw_enabled']) {?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can withdraw your money");?>

        <?php }?>
        <?php if ($_smarty_tpl->getValue('system')['affiliates_money_transfer_enabled']) {?>
          <?php if ($_smarty_tpl->getValue('system')['affiliates_money_withdraw_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("or");?>
 <?php }?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can transfer your money to your");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/wallet" target="_blank"><i class="fa fa-wallet"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("wallet");?>
</a>
        <?php }?>
      </div>
    </div>
    <div class="text-center text-xlg">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your affiliate link is");?>

    </div>
    <div style="margin: 25px auto; width: 60%;">
      <div class="input-group">
        <input type="text" disabled class="form-control" value="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/?ref=<?php echo $_smarty_tpl->getValue('user')->_data['user_name'];?>
">
        <button class="btn btn-light js_clipboard" data-clipboard-text="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/?ref=<?php echo $_smarty_tpl->getValue('user')->_data['user_name'];?>
" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Copy");?>
'>
          <i class="fas fa-copy"></i>
        </button>
      </div>
    </div>
    <div class="text-center text-xlg mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share");?>
<br>
      <?php $_smarty_tpl->renderSubTemplate('file:__social_share.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_link'=>((string)$_smarty_tpl->getValue('system')['system_url'])."/?ref%3D".((string)$_smarty_tpl->getValue('user')->_data['user_name'])), (int) 0, $_smarty_current_dir);
?>
    </div>
    <div class="row justify-content-center">
      <!-- money balance -->
      <div class="col-sm-6">
        <div class="section-title mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Affiliates Money Balance");?>

        </div>
        <div class="stat-panel bg-primary">
          <div class="stat-cell">
            <i class="fa fas fa-donate bg-icon"></i>
            <div class="h3 mtb10">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('user')->_data['user_affiliate_balance']);?>

            </div>
          </div>
        </div>
      </div>
      <!-- money balance -->
    </div>

    <div class="divider"></div>

    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('affiliates')) > 0) {?>
      <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('affiliates'), '_user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach0DoElse = false;
?>
          <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->getValue('_user')["connection"]), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </ul>
    <?php } else { ?>
      <p class="text-center text-muted">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No affiliates");?>

      </p>
    <?php }?>

    <!-- see-more -->
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('affiliates')) >= $_smarty_tpl->getValue('system')['max_results']) {?>
      <div class="alert alert-info see-more js_see-more" data-uid="<?php echo $_smarty_tpl->getValue('user')->_data['user_id'];?>
" data-get="affiliates">
        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
        <div class="loader loader_small x-hidden"></div>
      </div>
    <?php }?>
    <!-- see-more -->
  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "payments") {?>
    <div class="heading-small mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Withdrawal Request");?>

    </div>
    <div class="pl-md-4">
      <form class="js_ajax-forms" data-url="users/withdraw.php?type=affiliates">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your Balance");?>

          </label>
          <div class="col-md-9">
            <h6>
              <span class="badge badge-lg bg-info">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('user')->_data['user_affiliate_balance']);?>

              </span>
            </h6>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Amount");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="amount">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The minimum withdrawal request amount is");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['affiliates_min_withdrawal']);?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payment Method");?>

          </label>
          <div class="col-md-9">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("paypal",$_smarty_tpl->getValue('system')['affiliate_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_paypal" value="paypal" class="form-check-input">
                <label class="form-check-label" for="method_paypal"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("PayPal");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("skrill",$_smarty_tpl->getValue('system')['affiliate_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_skrill" value="skrill" class="form-check-input">
                <label class="form-check-label" for="method_skrill"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Skrill");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("bank",$_smarty_tpl->getValue('system')['affiliate_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_bank" value="bank" class="form-check-input">
                <label class="form-check-label" for="method_bank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Bank Transfer");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("custom",$_smarty_tpl->getValue('system')['affiliate_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_custom" value="custom" class="form-check-input">
                <label class="form-check-label" for="method_custom"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['affiliate_payment_method_custom']);?>
</label>
              </div>
            <?php }?>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Transfer To");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="method_value">
          </div>
        </div>

        <div class="row">
          <div class="col-md-9 offset-md-3">
            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make a withdrawal");?>
</button>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </form>
    </div>

    <div class="divider"></div>

    <div class="heading-small mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Withdrawal History");?>

    </div>
    <div class="pl-md-4">
      <?php if ($_smarty_tpl->getValue('payments')) {?>
        <div class="table-responsive mt20">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Amount");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Method");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Transfer To");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Time");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payments'), 'payment');
$_smarty_tpl->getVariable('payment')->iteration = 0;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('payment')->iteration++;
$foreach1Backup = clone $_smarty_tpl->getVariable('payment');
?>
                <tr>
                  <td><?php echo $_smarty_tpl->getVariable('payment')->iteration;?>
</td>
                  <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('payment')['amount']);?>
</td>
                  <td>
                    <?php if ($_smarty_tpl->getValue('payment')['method'] == "custom") {?>
                      <?php echo $_smarty_tpl->getValue('system')['affiliate_payment_method_custom'];?>

                    <?php } else { ?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('payment')['method']);?>

                    <?php }?>
                  </td>
                  <td><?php echo $_smarty_tpl->getValue('payment')['method_value'];?>
</td>
                  <td>
                    <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('payment')['time'];?>
"><?php echo $_smarty_tpl->getValue('payment')['time'];?>
</span>
                  </td>
                  <td>
                    <?php if ($_smarty_tpl->getValue('payment')['status'] == '0') {?>
                      <span class="badge rounded-pill badge-lg bg-warning"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending");?>
</span>
                    <?php } elseif ($_smarty_tpl->getValue('payment')['status'] == '1') {?>
                      <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approved");?>
</span>
                    <?php } else { ?>
                      <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Declined");?>
</span>
                    <?php }?>
                  </td>
                </tr>
              <?php
$_smarty_tpl->setVariable('payment', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
        </div>
      <?php } else { ?>
        <?php $_smarty_tpl->renderSubTemplate('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      <?php }?>
    </div>
  <?php }?>
</div><?php }
}
