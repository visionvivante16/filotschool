<div class="modal-header">
  <h6 class="modal-title">
    {__("Referral Sale Details")}
  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Order")}</label>
    <div class="col-md-8">{$commission['order_hash']}</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Product")}</label>
    <div class="col-md-8">{$commission['product_name']}</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Customer")}</label>
    <div class="col-md-8">
      <a target="_blank" href="{$system['system_url']}/{$commission['buyer_user_name']}">
        <img class="tbl-image" src="{$commission['buyer_picture']}">
        {$commission['buyer_fullname']}
      </a>
    </div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Affiliate")}</label>
    <div class="col-md-8">
      <a target="_blank" href="{$system['system_url']}/{$commission['user_name']}">
        <img class="tbl-image" src="{$commission['user_picture']}">
        {$commission['user_fullname']}
      </a>
    </div>
  </div>

  <div class="divider dashed"></div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Sale Amount")}</label>
    <div class="col-md-8">{print_money($commission['sale_amount'])}</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Commission Rate")}</label>
    <div class="col-md-8">{$commission['commission_rate']}%</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Commission")}</label>
    <div class="col-md-8">{print_money($commission['commission_amount'])}</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Status")}</label>
    <div class="col-md-8">
      {if $commission['status'] == "approved"}
        <span class="badge badge-lg bg-success">{__($commission['status'])|ucfirst}</span>
      {elseif $commission['status'] == "rejected" || $commission['status'] == "cancelled"}
        <span class="badge badge-lg bg-danger">{__($commission['status'])|ucfirst}</span>
      {else}
        <span class="badge badge-lg bg-info">{__($commission['status'])|ucfirst}</span>
      {/if}
    </div>
  </div>

</div>
