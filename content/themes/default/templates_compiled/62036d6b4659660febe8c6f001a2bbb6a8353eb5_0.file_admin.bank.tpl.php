<?php
/* Smarty version 5.7.0, created on 2026-02-13 10:59:28
  from 'file:admin.bank.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_698f0410c38802_89947338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62036d6b4659660febe8c6f001a2bbb6a8353eb5' => 
    array (
      0 => 'admin.bank.tpl',
      1 => 1697300824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_698f0410c38802_89947338 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-university mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Bank Receipts");?>

  </div>

  <div class="card-body">

    <?php if (!$_smarty_tpl->getValue('system')['bank_transfers_enabled']) {?>
      <div class="alert alert-warning">
        <div class="icon">
          <i class="fa fa-exclamation-triangle fa-2x"></i>
        </div>
        <div class="text pt5">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Bank transfers is disabled");?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make sure you have configured");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/payments"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments Settings");?>
</a>
        </div>
      </div>
    <?php }?>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover js_dataTable">
        <thead>
          <tr>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("User");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Handle");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Time");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
          </tr>
        </thead>
        <tbody>
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
            <tr>
              <td><?php echo $_smarty_tpl->getValue('row')['transfer_id'];?>
</td>
              <td>
                <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
">
                  <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['user_picture'];?>
">
                  <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('row')['user_name'];
} else {
echo $_smarty_tpl->getValue('row')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('row')['user_lastname'];
}?>
                </a>
              </td>
              <td>
                <?php if ($_smarty_tpl->getValue('row')['handle'] == "packages") {?>
                  <?php echo $_smarty_tpl->getValue('row')['package_name'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Package");?>
 = <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('row')['package_price']);?>
</strong>
                <?php } elseif ($_smarty_tpl->getValue('row')['handle'] == "wallet") {?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Wallet Balance");?>
 = <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('row')['price']);?>
</strong>
                <?php } elseif ($_smarty_tpl->getValue('row')['handle'] == "donate") {?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding Donation");?>
 = <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('row')['price']);?>
</strong>
                <?php } elseif ($_smarty_tpl->getValue('row')['handle'] == "subscribe") {?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribe");?>
 = <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('row')['price']);?>
</strong>
                <?php } elseif ($_smarty_tpl->getValue('row')['handle'] == "paid_post") {?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Post");?>
 = <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('row')['price']);?>
</strong>
                <?php } elseif ($_smarty_tpl->getValue('row')['handle'] == "movies") {?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");?>
 = <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('row')['price']);?>
</strong>
                <?php }?>
              </td>
              <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('row')['time'],"%e %B %Y");?>
</td>
              <td>
                <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View Bank Receipt");?>
' class="btn btn-sm btn-icon btn-rounded btn-info js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('row')['bank_receipt'];?>
">
                  <i class="fa fa-paperclip"></i>
                </button>
                <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verify");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_admin-bank-accept" data-id="<?php echo $_smarty_tpl->getValue('row')['transfer_id'];?>
">
                  <i class="fa fa-check"></i>
                </button>
                <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-bank-decline" data-id="<?php echo $_smarty_tpl->getValue('row')['transfer_id'];?>
">
                  <i class="fa fa-times"></i>
                </button>
              </td>
            </tr>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </div>
  </div>

</div><?php }
}
