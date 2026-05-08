<?php
/* Smarty version 5.7.0, created on 2026-05-08 09:39:08
  from 'file:admin.blacklist.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69fdaf3c2198d2_91686800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7a51b880725ce8b38f0c4d92d99f198f0099477' => 
    array (
      0 => 'admin.blacklist.tpl',
      1 => 1742652802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fdaf3c2198d2_91686800 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/blacklist/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/blacklist" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-minus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blacklist");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "add") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New");
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Value");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Added");?>
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
                <td><?php echo $_smarty_tpl->getValue('row')['node_id'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['node_type'] == "ip") {?>
                    <span class="badge badge-lg bg-danger">IP</span>
                  <?php } elseif ($_smarty_tpl->getValue('row')['node_type'] == "email") {?>
                    <span class="badge badge-lg bg-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('row')['node_type']);?>
</span>
                  <?php } elseif ($_smarty_tpl->getValue('row')['node_type'] == "username") {?>
                    <span class="badge badge-lg bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('row')['node_type']);?>
</span>
                  <?php }?>
                </td>
                <td><span class="badge badge-lg bg-warning"><?php echo $_smarty_tpl->getValue('row')['node_value'];?>
</span></td>
                <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('row')['created_time'];?>
"><?php echo $_smarty_tpl->getValue('row')['created_time'];?>
</span></td>
                <td>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="blacklist_node" data-id="<?php echo $_smarty_tpl->getValue('row')['node_id'];?>
">
                    <i class="fa fa-trash-alt"></i>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add") {?>

    <form class="js_ajax-forms" data-url="admin/blacklist.php?do=add">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>

          </label>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input type="radio" name="node_type" id="ip" value="ip" class="form-check-input" checked>
              <label class="form-check-label" for="ip"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("IP");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="node_type" id="email" value="email" class="form-check-input">
              <label class="form-check-label" for="email"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email Provider");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="node_type" id="username" value="username" class="form-check-input">
              <label class="form-check-label" for="username"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Username");?>
</label>
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select what you want to add to the blackist");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Value");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="node_value">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("IP (Example: 192.168.687.123) | Email Provider (Example: gmail.com) | Username (Example: superadmin)");?>
<br>
            </div>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
      </div>
    </form>

  <?php }?>
</div><?php }
}
