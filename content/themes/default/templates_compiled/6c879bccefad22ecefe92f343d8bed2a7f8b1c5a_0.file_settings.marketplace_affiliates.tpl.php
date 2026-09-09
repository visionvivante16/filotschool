<?php
/* Smarty version 5.7.0, created on 2026-09-08 10:22:42
  from 'file:settings.marketplace_affiliates.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a9fe1f24ca272_52248063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c879bccefad22ecefe92f343d8bed2a7f8b1c5a' => 
    array (
      0 => 'settings.marketplace_affiliates.tpl',
      1 => 1788862934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_6a9fe1f24ca272_52248063 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"affiliates",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Affiliate Program");?>

</div>
<div class="card-body">

  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>

    <div class="row">
      <div class="col-md-4">
        <div class="stat-panel border">
          <div class="stat-cell">
            <i class="fa fa-mouse-pointer icon bg-gradient-info"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('marketplace_affiliate_stats')['total_clicks'];?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Clicks");?>
</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stat-panel border">
          <div class="stat-cell">
            <i class="fa fa-shopping-bag icon bg-gradient-success"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('marketplace_affiliate_stats')['total_sales'];?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sales");?>
</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stat-panel border">
          <div class="stat-cell">
            <i class="fa fa-tags icon bg-gradient-success"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('marketplace_affiliate_stats')['total_sales_value']);?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sales Value");?>
</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stat-panel border">
          <div class="stat-cell">
            <i class="fa fa-wallet icon bg-gradient-primary"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('marketplace_affiliate_stats')['accumulated_commission']);?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Accumulated Commission");?>
</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stat-panel border">
          <div class="stat-cell">
            <i class="fa fa-hourglass-half icon bg-gradient-warning"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('marketplace_affiliate_stats')['pending_commission']);?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending Commission");?>
</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stat-panel border">
          <div class="stat-cell">
            <i class="fa fa-check-circle icon bg-gradient-success"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('marketplace_affiliate_stats')['approved_commission']);?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approved Commission");?>
</span>
          </div>
        </div>
      </div>
    </div>

    <div class="divider dashed"></div>

    <div class="section-title mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Products You're Promoting");?>

    </div>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Product");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Commission");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Clicks");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sales");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sales Value");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Commission");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Affiliate Link");?>
</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($_smarty_tpl->getValue('marketplace_affiliate_products')) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('marketplace_affiliate_products'), 'product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->getValue('product')['product_name'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('product')['commission_rate'];?>
%</td>
                <td><?php echo $_smarty_tpl->getValue('product')['clicks_count'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('product')['sales_count'];?>
</td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('product')['sales_value']);?>
</td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('product')['total_commission']);?>
</td>
                <td>
                  <?php if ($_smarty_tpl->getValue('product')['status'] == "suspended") {?>
                    <span class="badge badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('product')['status']));?>
</span>
                  <?php } else { ?>
                    <span class="badge badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('product')['status']));?>
</span>
                  <?php }?>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" disabled class="form-control" value="<?php echo $_smarty_tpl->getValue('product')['affiliate_link'];?>
">
                    <button type="button" class="btn btn-light js_clipboard" data-clipboard-text="<?php echo $_smarty_tpl->getValue('product')['affiliate_link'];?>
" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Copy Link");?>
'>
                      <i class="fas fa-copy"></i>
                    </button>
                  </div>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          <?php } else { ?>
            <tr>
              <td colspan="8" class="text-center">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You're not promoting any products yet");?>

              </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "commissions") {?>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Date");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Product");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sale Amount");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Commission Rate");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Commission");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($_smarty_tpl->getValue('rows')) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach1DoElse = false;
?>
              <tr>
                <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('row')['insert_time'];?>
"><?php echo $_smarty_tpl->getValue('row')['insert_time'];?>
</span></td>
                <td><?php echo $_smarty_tpl->getValue('row')['product_name'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['order_hash'];?>
</td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('row')['sale_amount']);?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['commission_rate'];?>
%</td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('row')['commission_amount']);?>
</td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['status'] == "approved") {?>
                    <span class="badge badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('row')['status']));?>
</span>
                  <?php } elseif ($_smarty_tpl->getValue('row')['status'] == "rejected" || $_smarty_tpl->getValue('row')['status'] == "cancelled") {?>
                    <span class="badge badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('row')['status']));?>
</span>
                  <?php } else { ?>
                    <span class="badge badge-lg bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('row')['status']));?>
</span>
                  <?php }?>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          <?php } else { ?>
            <tr>
              <td colspan="7" class="text-center">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No commissions to show");?>

              </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>

    <?php echo $_smarty_tpl->getValue('pager');?>


  <?php }?>

</div>
<?php }
}
