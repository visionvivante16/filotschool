<?php
/* Smarty version 5.7.0, created on 2026-09-08 10:30:14
  from 'file:ajax.marketplace_affiliate.view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a9fe3b6e1f994_13051015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58f47abce2d7084d2d40bb90239185bcc586f211' => 
    array (
      0 => 'ajax.marketplace_affiliate.view.tpl',
      1 => 1788863160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a9fe3b6e1f994_13051015 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Affiliate Details");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

  <div class="row form-group">
    <label class="col-md-4 form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Affiliate");?>
</label>
    <div class="col-md-8">
      <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('affiliate')['user_name'];?>
">
        <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('affiliate')['user_picture'];?>
">
        <?php echo $_smarty_tpl->getValue('affiliate')['user_fullname'];?>

      </a>
    </div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Promoted Product");?>
</label>
    <div class="col-md-8"><?php echo $_smarty_tpl->getValue('affiliate')['product_name'];?>
</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Referral Code");?>
</label>
    <div class="col-md-8"><?php echo $_smarty_tpl->getValue('affiliate')['referral_code'];?>
</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Affiliate Link");?>
</label>
    <div class="col-md-8">
      <div class="input-group">
        <input type="text" disabled class="form-control" value="<?php echo $_smarty_tpl->getValue('affiliate')['affiliate_link'];?>
">
        <button type="button" class="btn btn-light js_clipboard" data-clipboard-text="<?php echo $_smarty_tpl->getValue('affiliate')['affiliate_link'];?>
" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Copy Link");?>
'>
          <i class="fas fa-copy"></i>
        </button>
      </div>
    </div>
  </div>

  <div class="divider dashed"></div>

  <div class="row form-group">
    <label class="col-md-4 form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Clicks");?>
</label>
    <div class="col-md-8"><?php echo $_smarty_tpl->getValue('affiliate')['clicks_count'];?>
</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Generated Sales");?>
</label>
    <div class="col-md-8"><?php echo $_smarty_tpl->getValue('affiliate')['sales_count'];?>
</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Sales Value");?>
</label>
    <div class="col-md-8"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('affiliate')['sales_value']);?>
</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Commission");?>
</label>
    <div class="col-md-8"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('affiliate')['total_commission']);?>
</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending Commission");?>
</label>
    <div class="col-md-8"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('affiliate')['pending_commission']);?>
</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approved Commission");?>
</label>
    <div class="col-md-8"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('affiliate')['approved_commission']);?>
</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</label>
    <div class="col-md-8">
      <?php if ($_smarty_tpl->getValue('affiliate')['status'] == "suspended") {?>
        <span class="badge badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('affiliate')['status']));?>
</span>
      <?php } else { ?>
        <span class="badge badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('affiliate')['status']));?>
</span>
      <?php }?>
    </div>
  </div>

</div>
<?php }
}
