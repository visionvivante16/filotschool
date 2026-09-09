<div class="card-header with-icon">
  {include file='__svg_icons.tpl' icon="affiliates" class="main-icon mr15" width="24px" height="24px"}
  {__("Affiliate Program")}
</div>
<div class="card-body">

  {if $sub_view == ""}

    <div class="row">
      <div class="col-md-4">
        <div class="stat-panel border">
          <div class="stat-cell">
            <i class="fa fa-mouse-pointer icon bg-gradient-info"></i>
            <span class="text-xxlg">{$marketplace_affiliate_stats['total_clicks']}</span><br>
            <span class="text-lg">{__("Total Clicks")}</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stat-panel border">
          <div class="stat-cell">
            <i class="fa fa-shopping-bag icon bg-gradient-success"></i>
            <span class="text-xxlg">{$marketplace_affiliate_stats['total_sales']}</span><br>
            <span class="text-lg">{__("Sales")}</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stat-panel border">
          <div class="stat-cell">
            <i class="fa fa-tags icon bg-gradient-success"></i>
            <span class="text-xxlg">{print_money($marketplace_affiliate_stats['total_sales_value'])}</span><br>
            <span class="text-lg">{__("Sales Value")}</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stat-panel border">
          <div class="stat-cell">
            <i class="fa fa-wallet icon bg-gradient-primary"></i>
            <span class="text-xxlg">{print_money($marketplace_affiliate_stats['accumulated_commission'])}</span><br>
            <span class="text-lg">{__("Accumulated Commission")}</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stat-panel border">
          <div class="stat-cell">
            <i class="fa fa-hourglass-half icon bg-gradient-warning"></i>
            <span class="text-xxlg">{print_money($marketplace_affiliate_stats['pending_commission'])}</span><br>
            <span class="text-lg">{__("Pending Commission")}</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stat-panel border">
          <div class="stat-cell">
            <i class="fa fa-check-circle icon bg-gradient-success"></i>
            <span class="text-xxlg">{print_money($marketplace_affiliate_stats['approved_commission'])}</span><br>
            <span class="text-lg">{__("Approved Commission")}</span>
          </div>
        </div>
      </div>
    </div>

    <div class="divider dashed"></div>

    <div class="section-title mb20">
      {__("Products You're Promoting")}
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>{__("Product")}</th>
            <th>{__("Commission")}</th>
            <th>{__("Clicks")}</th>
            <th>{__("Sales")}</th>
            <th>{__("Sales Value")}</th>
            <th>{__("Commission")}</th>
            <th>{__("Status")}</th>
            <th>{__("Affiliate Link")}</th>
          </tr>
        </thead>
        <tbody>
          {if $marketplace_affiliate_products}
            {foreach $marketplace_affiliate_products as $product}
              <tr>
                <td>{$product['product_name']}</td>
                <td>{$product['commission_rate']}%</td>
                <td>{$product['clicks_count']}</td>
                <td>{$product['sales_count']}</td>
                <td>{print_money($product['sales_value'])}</td>
                <td>{print_money($product['total_commission'])}</td>
                <td>
                  {if $product['status'] == "suspended"}
                    <span class="badge badge-lg bg-danger">{__($product['status'])|ucfirst}</span>
                  {else}
                    <span class="badge badge-lg bg-success">{__($product['status'])|ucfirst}</span>
                  {/if}
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" disabled class="form-control" value="{$product['affiliate_link']}">
                    <button type="button" class="btn btn-light js_clipboard" data-clipboard-text="{$product['affiliate_link']}" data-bs-toggle="tooltip" title='{__("Copy Link")}'>
                      <i class="fas fa-copy"></i>
                    </button>
                  </div>
                </td>
              </tr>
            {/foreach}
          {else}
            <tr>
              <td colspan="8" class="text-center">
                {__("You're not promoting any products yet")}
              </td>
            </tr>
          {/if}
        </tbody>
      </table>
    </div>

  {elseif $sub_view == "commissions"}

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>{__("Date")}</th>
            <th>{__("Product")}</th>
            <th>{__("Order")}</th>
            <th>{__("Sale Amount")}</th>
            <th>{__("Commission Rate")}</th>
            <th>{__("Commission")}</th>
            <th>{__("Status")}</th>
          </tr>
        </thead>
        <tbody>
          {if $rows}
            {foreach $rows as $row}
              <tr>
                <td><span class="js_moment" data-time="{$row['insert_time']}">{$row['insert_time']}</span></td>
                <td>{$row['product_name']}</td>
                <td>{$row['order_hash']}</td>
                <td>{print_money($row['sale_amount'])}</td>
                <td>{$row['commission_rate']}%</td>
                <td>{print_money($row['commission_amount'])}</td>
                <td>
                  {if $row['status'] == "approved"}
                    <span class="badge badge-lg bg-success">{__($row['status'])|ucfirst}</span>
                  {elseif $row['status'] == "rejected" || $row['status'] == "cancelled"}
                    <span class="badge badge-lg bg-danger">{__($row['status'])|ucfirst}</span>
                  {else}
                    <span class="badge badge-lg bg-info">{__($row['status'])|ucfirst}</span>
                  {/if}
                </td>
              </tr>
            {/foreach}
          {else}
            <tr>
              <td colspan="7" class="text-center">
                {__("No commissions to show")}
              </td>
            </tr>
          {/if}
        </tbody>
      </table>
    </div>

    {$pager}

  {/if}

</div>
