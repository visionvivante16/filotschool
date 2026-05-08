<?php
/* Smarty version 5.7.0, created on 2026-02-26 09:17:43
  from 'file:pdf/invoice.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69a00fb7de2ff1_20996200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a3ee3b1d76644fc6bb3a80b5fb6387fa8ac382' => 
    array (
      0 => 'pdf/invoice.tpl',
      1 => 1761617647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a00fb7de2ff1_20996200 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates/pdf';
?><div id="invoice-wrapper-<?php echo $_smarty_tpl->getValue('order')['order_id'];?>
" style="display: none;">
  <div id="invoice-<?php echo $_smarty_tpl->getValue('order')['order_hash'];?>
">
    <div class="container">
      <h1 class="text-center mb30"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
</h1>
      <div class="row">
        <div class="col-12">
          <hr>
          <div class="invoice-title">
            <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invoice");?>
</h2>
            <h3 class="float-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
 #<?php echo $_smarty_tpl->getValue('order')['order_hash'];?>
</h3>
          </div>
          <hr>
          <div class="row">
            <div class="col-6">
              <address>
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Seller");?>
:</strong><br>
                <?php echo $_smarty_tpl->getValue('order')['seller_fullname'];?>
<br>
              </address>
              <address class="mt20">
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order Date");?>
:</strong><br>
                <?php echo $_smarty_tpl->getValue('order')['insert_time'];?>
<br><br>
              </address>
            </div>
            <div class="col-6 text-end">
              <address>
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Billed & Shipped To");?>
:</strong><br>
                <?php echo $_smarty_tpl->getValue('order')['buyer_fullname'];?>
<br>
                <?php echo $_smarty_tpl->getValue('order')['address_details'];?>
<br>
                <?php echo $_smarty_tpl->getValue('order')['address_city'];?>
<br>
                <?php echo $_smarty_tpl->getValue('order')['address_country'];?>
<br>
                <?php echo $_smarty_tpl->getValue('order')['address_zip_code'];?>
<br>
                <?php echo $_smarty_tpl->getValue('order')['address_phone'];?>
<br>
              </address>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="order-summary">
            <div class="order-summary-header">
              <h3><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order summary");?>
</strong></h3>
            </div>
            <div class="order-summary-body">
              <div class="table-responsive">
                <table class="table table-condensed table-invoice">
                  <thead>
                    <tr>
                      <td><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Item");?>
</strong></td>
                      <td class="text-center"><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price");?>
</strong></td>
                      <td class="text-center"><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Quantity");?>
</strong></td>
                      <td class="text-right"><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Totals");?>
</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('order')['items'], 'order_item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('order_item')->value) {
$foreach0DoElse = false;
?>
                      <tr>
                        <td><?php echo $_smarty_tpl->getValue('order_item')['post']['product']['name'];?>
</td>
                        <td class="text-center">
                          <?php echo $_smarty_tpl->getValue('order_item')['post']['product']['price_formatted'];?>

                        </td>
                        <td class="text-center"><?php echo $_smarty_tpl->getValue('order_item')['quantity'];?>
</td>
                        <td class="text-right">
                          <?php echo $_smarty_tpl->getValue('order_item')['quantity']*$_smarty_tpl->getValue('order_item')['post']['product']['price'];?>

                        </td>
                      </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <tr>
                      <td class="thick-line"></td>
                      <td class="thick-line"></td>
                      <td class="thick-line text-center"><strong><?php if ($_smarty_tpl->getValue('order')['seller_id'] == $_smarty_tpl->getValue('user')->_data['user_id']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subtotal");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total");
}?></strong></td>
                      <td class="thick-line text-right"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('order')['sub_total'],2));?>
</td>
                    </tr>
                    <?php if ($_smarty_tpl->getValue('order')['seller_id'] == $_smarty_tpl->getValue('user')->_data['user_id']) {?>
                      <tr>
                        <td class="no-line"></td>
                        <td class="no-line"></td>
                        <td class="no-line text-center"><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Commission");?>
</strong></td>
                        <td class="no-line text-right">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('order')['total_commission'],2));?>
</td>
                      </tr>
                      <tr>
                        <td class="no-line"></td>
                        <td class="no-line"></td>
                        <td class="no-line text-center"><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total");?>
</strong></td>
                        <td class="no-line text-right"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('order')['final_price'],2));?>
</td>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php echo '<script'; ?>
>
    var invoice = document.querySelector('#invoice-<?php echo $_smarty_tpl->getValue('order')['order_hash'];?>
');
    var opt = {
      margin: 0.5,
      filename: "invoice-<?php echo $_smarty_tpl->getValue('order')['order_hash'];?>
.pdf",
      jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };
    html2pdf().from(invoice).set(opt).save();
  <?php echo '</script'; ?>
>
</div><?php }
}
