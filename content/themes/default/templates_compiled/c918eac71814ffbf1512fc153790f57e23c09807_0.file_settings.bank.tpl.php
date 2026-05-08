<?php
/* Smarty version 5.7.0, created on 2026-02-26 09:18:40
  from 'file:settings.bank.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69a00ff09ce0c0_49673714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c918eac71814ffbf1512fc153790f57e23c09807' => 
    array (
      0 => 'settings.bank.tpl',
      1 => 1697301057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:_no_transactions.tpl' => 1,
  ),
))) {
function content_69a00ff09ce0c0_49673714 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"bank",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Bank Transfers");?>

</div>
<div class="card-body">
  <div class="heading-small mb20">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Transactions History");?>

  </div>
  <div class="pl-md-4">
    <?php if ($_smarty_tpl->getValue('transfers')) {?>
      <div class="table-responsive mt20">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Time");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('transfers'), 'transfer');
$_smarty_tpl->getVariable('transfer')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('transfer')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('transfer')->iteration++;
$foreach0Backup = clone $_smarty_tpl->getVariable('transfer');
?>
              <tr>
                <td><?php echo $_smarty_tpl->getVariable('transfer')->iteration;?>
</td>
                <td>
                  <?php if ($_smarty_tpl->getValue('transfer')['handle'] == "packages") {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('transfer')['package_name']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Package");?>
 = <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('transfer')['package_price']);?>
</strong>
                  <?php } elseif ($_smarty_tpl->getValue('transfer')['handle'] == "wallet") {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Wallet Balance");?>
 = <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('transfer')['price']);?>
</strong>
                  <?php } elseif ($_smarty_tpl->getValue('transfer')['handle'] == "donate") {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding Donation");?>
 = <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('transfer')['price']);?>
</strong>
                  <?php } elseif ($_smarty_tpl->getValue('transfer')['handle'] == "subscribe") {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribe");?>
 = <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('transfer')['price']);?>
</strong>
                  <?php } elseif ($_smarty_tpl->getValue('transfer')['handle'] == "paid_post") {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Post");?>
 = <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('transfer')['price']);?>
</strong>
                  <?php } elseif ($_smarty_tpl->getValue('transfer')['handle'] == "movies") {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");?>
 = <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('transfer')['price']);?>
</strong>
                  <?php }?>
                </td>
                <td>
                  <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('transfer')['time'];?>
"><?php echo $_smarty_tpl->getValue('transfer')['time'];?>
</span>
                </td>
                <td>
                  <?php if ($_smarty_tpl->getValue('transfer')['status'] == '0') {?>
                    <span class="badge rounded-pill badge-lg bg-warning"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending");?>
</span>
                  <?php } elseif ($_smarty_tpl->getValue('transfer')['status'] == '1') {?>
                    <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approved");?>
</span>
                  <?php } else { ?>
                    <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Declined");?>
</span>
                  <?php }?>
                </td>
              </tr>
            <?php
$_smarty_tpl->setVariable('transfer', $foreach0Backup);
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
</div><?php }
}
