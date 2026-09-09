<div class="modal-header">
  <h6 class="modal-title">
    {__("Affiliate Details")}
  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Affiliate")}</label>
    <div class="col-md-8">
      <a target="_blank" href="{$system['system_url']}/{$affiliate['user_name']}">
        <img class="tbl-image" src="{$affiliate['user_picture']}">
        {$affiliate['user_fullname']}
      </a>
    </div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Promoted Product")}</label>
    <div class="col-md-8">{$affiliate['product_name']}</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Referral Code")}</label>
    <div class="col-md-8">{$affiliate['referral_code']}</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Affiliate Link")}</label>
    <div class="col-md-8">
      <div class="input-group">
        <input type="text" disabled class="form-control" value="{$affiliate['affiliate_link']}">
        <button type="button" class="btn btn-light js_clipboard" data-clipboard-text="{$affiliate['affiliate_link']}" data-bs-toggle="tooltip" title='{__("Copy Link")}'>
          <i class="fas fa-copy"></i>
        </button>
      </div>
    </div>
  </div>

  <div class="divider dashed"></div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Clicks")}</label>
    <div class="col-md-8">{$affiliate['clicks_count']}</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Generated Sales")}</label>
    <div class="col-md-8">{$affiliate['sales_count']}</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Total Sales Value")}</label>
    <div class="col-md-8">{print_money($affiliate['sales_value'])}</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Total Commission")}</label>
    <div class="col-md-8">{print_money($affiliate['total_commission'])}</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Pending Commission")}</label>
    <div class="col-md-8">{print_money($affiliate['pending_commission'])}</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Approved Commission")}</label>
    <div class="col-md-8">{print_money($affiliate['approved_commission'])}</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 form-label">{__("Status")}</label>
    <div class="col-md-8">
      {if $affiliate['status'] == "suspended"}
        <span class="badge badge-lg bg-danger">{__($affiliate['status'])|ucfirst}</span>
      {else}
        <span class="badge badge-lg bg-success">{__($affiliate['status'])|ucfirst}</span>
      {/if}
    </div>
  </div>

</div>
