<?php
/* Smarty version 5.7.0, created on 2026-05-07 10:05:37
  from 'file:admin.events.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69fc63f1157858_47746654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2df4da38f0446be23e2a6d2896c3237934c6693' => 
    array (
      0 => 'admin.events.tpl',
      1 => 1758563736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 3,
    'file:__custom_fields.tpl' => 1,
    'file:__svg_icons.tpl' => 1,
    'file:__categories.recursive_rows.tpl' => 1,
  ),
))) {
function content_69fc63f1157858_47746654 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == "find") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/events" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit_event") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/events" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>
</span>
        </a>
        <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('data')['event_id'];?>
" class="btn btn-md btn-info">
          <i class="fa fa-eye"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View Event");?>
</span>
        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "categories") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/events/add_category" class="btn btn-md btn-primary">
          <i class="fa fa-plus"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Category");?>
</span>
        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_category" || $_smarty_tpl->getValue('sub_view') == "edit_category") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/events/categories" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>
</span>
        </a>
      </div>
    <?php }?>
    <i class="fa fa-calendar mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "find") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Find");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit_event") {?> &rsaquo; <?php echo $_smarty_tpl->getValue('data')['event_title'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "categories") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add_category") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Category");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit_category") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->getValue('data')['category_name'];
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '' || $_smarty_tpl->getValue('sub_view') == "find") {?>

    <div class="card-body">

      <!-- search form -->
      <div class="mb20">
        <form class="d-flex flex-row align-items-center flex-wrap" action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/events/find" method="get">
          <div class="form-group mb0">
            <div class="input-group">
              <input type="text" class="form-control" name="query">
              <button type="submit" class="btn btn-sm btn-light"><i class="fas fa-search mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
            </div>
          </div>
        </form>
        <div class="form-text small">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search by Event Title");?>

        </div>
      </div>
      <!-- search form -->

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Event");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Admin");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Privacy");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Interested");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Going");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invited");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
                <tr>
                  <td>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('row')['event_id'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('row')['event_id'];?>
</a>
                  </td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('row')['event_id'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['event_title'];?>

                    </a>
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
                    <?php if ($_smarty_tpl->getValue('row')['event_privacy'] == "public") {?>
                      <i class="fa fa-globe fa-fw mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>

                    <?php } elseif ($_smarty_tpl->getValue('row')['event_privacy'] == "closed") {?>
                      <i class="fa fa-unlock-alt fa-fw mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed");?>

                    <?php } elseif ($_smarty_tpl->getValue('row')['event_privacy'] == "secret") {?>
                      <i class="fa fa-lock fa-fw mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secret");?>

                    <?php }?>
                  </td>
                  <td><?php echo $_smarty_tpl->getValue('row')['event_interested'];?>
</td>
                  <td><?php echo $_smarty_tpl->getValue('row')['event_going'];?>
</td>
                  <td><?php echo $_smarty_tpl->getValue('row')['event_invited'];?>
</td>
                  <td>
                    <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/events/edit_event/<?php echo $_smarty_tpl->getValue('row')['event_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                      <i class="fa fa-pencil-alt"></i>
                    </a>
                    <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="event" data-id="<?php echo $_smarty_tpl->getValue('row')['event_id'];?>
">
                      <i class="fa fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="8" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
      <?php echo $_smarty_tpl->getValue('pager');?>

    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit_event") {?>

    <form class="js_ajax-forms" data-url="admin/events.php?do=edit_event&id=<?php echo $_smarty_tpl->getValue('data')['event_id'];?>
">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-2 text-center mb20">
            <img class="img-fluid img-thumbnail rounded-circle" src="<?php echo $_smarty_tpl->getValue('data')['event_picture'];?>
">
          </div>
          <div class="col-12 col-md-5 mb20">
            <ul class="list-group">
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->getValue('data')['event_id'];?>
</span>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Event ID");?>

              </li>
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary">
                  <?php if ($_smarty_tpl->getValue('data')['event_privacy'] == "public") {?>
                    <i class="fa fa-globe fa-fw mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>

                  <?php } elseif ($_smarty_tpl->getValue('data')['event_privacy'] == "closed") {?>
                    <i class="fa fa-unlock-alt fa-fw mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed");?>

                  <?php } elseif ($_smarty_tpl->getValue('data')['event_privacy'] == "secret") {?>
                    <i class="fa fa-lock fa-fw mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secret");?>

                  <?php }?>
                </span>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Privacy");?>

              </li>
            </ul>
          </div>
          <div class="col-12 col-md-5 mb20">
            <ul class="list-group">
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->getValue('data')['event_interested'];?>
</span>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Interested");?>

              </li>
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->getValue('data')['event_going'];?>
</span>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Going");?>

              </li>
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->getValue('data')['event_invited'];?>
</span>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invited");?>

              </li>
            </ul>
          </div>
        </div>

        <!-- tabs nav -->
        <ul class="nav nav-tabs mb20">
          <li class="nav-item">
            <a class="nav-link active" href="#event_settings" data-bs-toggle="tab">
              <i class="fa fa-cog fa-fw mr5"></i><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Event Settings");?>
</strong>
            </a>
          </li>
        </ul>
        <!-- tabs nav -->

        <!-- tabs content -->
        <div class="tab-content">
          <!-- settings tab -->
          <div class="tab-pane active" id="event_settings">
            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Admin");?>

              </label>
              <div class="col-md-9">
                <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('data')['user_name'];?>
">
                  <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('data')['user_picture'];?>
">
                  <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('data')['user_name'];
} else {
echo $_smarty_tpl->getValue('data')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('data')['user_lastname'];
}?>
                </a>
                <a target="_blank" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/edit/<?php echo $_smarty_tpl->getValue('data')['user_id'];?>
" class="btn btn-sm btn-light btn-icon btn-rounded ml10">
                  <i class="fa fa-pencil-alt"></i>
                </a>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name Your Event");?>

              </label>
              <div class="col-md-9">
                <input class="form-control" name="title" value="<?php echo $_smarty_tpl->getValue('data')['event_title'];?>
">
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Start Date");?>

              </label>
              <div class="col-md-9">
                <input type="datetime-local" class="form-control" name="start_date" value="<?php echo $_smarty_tpl->getValue('data')['event_start_date'];?>
">
                <div class="form-text">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your current server datetime is");?>
: <?php echo $_smarty_tpl->getValue('date');?>
 (UTC)
                </div>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("End Date");?>

              </label>
              <div class="col-md-9">
                <input type="datetime-local" class="form-control" name="end_date" value="<?php echo $_smarty_tpl->getValue('data')['event_end_date'];?>
">
                <div class="form-text">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your current server datetime is");?>
: <?php echo $_smarty_tpl->getValue('date');?>
 (UTC)
                </div>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Event Type");?>

              </label>
              <div class="col-md-9">
                <select class="form-select" name="is_online">
                  <option <?php if ($_smarty_tpl->getValue('data')['event_is_online'] == 0) {?>selected<?php }?> value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("In Person");?>
</option>
                  <option <?php if ($_smarty_tpl->getValue('data')['event_is_online'] == 1) {?>selected<?php }?> value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Online");?>
</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Privacy");?>

              </label>
              <div class="col-md-9">
                <select class="form-select" name="privacy">
                  <option <?php if ($_smarty_tpl->getValue('data')['event_privacy'] == "public") {?>selected<?php }?> value="public"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public Event");?>
</option>
                  <option <?php if ($_smarty_tpl->getValue('data')['event_privacy'] == "closed") {?>selected<?php }?> value="closed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed Event");?>
</option>
                  <option <?php if ($_smarty_tpl->getValue('data')['event_privacy'] == "secret") {?>selected<?php }?> value="secret"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secret Event");?>
</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>

              </label>
              <div class="col-md-9">
                <select class="form-select" name="category">
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['categories'], 'category');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach1DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->getValue('data')['event_category']), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>

              </label>
              <div class="col-md-9">
                <input class="form-control" name="location" value="<?php echo $_smarty_tpl->getValue('data')['event_location'];?>
">
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country");?>

              </label>
              <div class="col-md-9">
                <select class="form-select" name="country">
                  <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Country");?>
</option>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['countries'], 'country');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach2DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('country')['country_id'];?>
" <?php if ($_smarty_tpl->getValue('data')['event_country'] == $_smarty_tpl->getValue('country')['country_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('country')['country_name'];?>
</option>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Language");?>

              </label>
              <div class="col-md-9">
                <select class="form-select" name="language">
                  <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Language");?>
</option>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('languages'), 'language');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('language')->value) {
$foreach3DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('language')['language_id'];?>
" <?php if ($_smarty_tpl->getValue('data')['event_language'] == $_smarty_tpl->getValue('language')['language_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('language')['title'];?>
</option>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("About");?>

              </label>
              <div class="col-md-9">
                <textarea class="form-control" name="description"><?php echo $_smarty_tpl->getValue('data')['event_description'];?>
</textarea>
              </div>
            </div>

            <!-- custom fields -->
            <?php if ($_smarty_tpl->getValue('custom_fields')['basic']) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['basic'],'_registration'=>false,'_inline'=>true), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            <!-- custom fields -->

            <div class="divider"></div>

            <div class="form-table-row">
              <div class="avatar">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"chat",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
              </div>
              <div>
                <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Chat Box");?>
</div>
                <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable chat box for this event");?>
</div>
              </div>
              <div class="text-end">
                <label class="switch" for="chatbox_enabled">
                  <input type="checkbox" name="chatbox_enabled" id="chatbox_enabled" <?php if ($_smarty_tpl->getValue('data')['chatbox_enabled']) {?>checked<?php }?>>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>

            <div class="divider"></div>

            <div class="form-table-row">
              <div>
                <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members Can Publish Posts?");?>
</div>
                <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members can publish posts or only event admin");?>
</div>
              </div>
              <div class="text-end">
                <label class="switch" for="event_publish_enabled">
                  <input type="checkbox" name="event_publish_enabled" id="event_publish_enabled" <?php if ($_smarty_tpl->getValue('data')['event_publish_enabled']) {?>checked<?php }?>>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>

            <div class="form-table-row">
              <div>
                <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post Approval");?>
</div>
                <div class="form-text d-none d-sm-block">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All posts must be approved by the event admin");?>
<br>
                  (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Note: Disable it will approve any pending posts");?>
)
                </div>
              </div>
              <div class="text-end">
                <label class="switch" for="event_publish_approval_enabled">
                  <input type="checkbox" name="event_publish_approval_enabled" id="event_publish_approval_enabled" <?php if ($_smarty_tpl->getValue('data')['event_publish_approval_enabled']) {?>checked<?php }?>>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>

            <!-- success -->
            <div class="alert alert-success mt15 mb0 x-hidden"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger mt15 mb0 x-hidden"></div>
            <!-- error -->
          </div>
          <!-- settings tab -->
        </div>
        <!-- tabs content -->
      </div>
      <div class="card-footer text-end">
        <button type="button" class="btn btn-danger js_admin-deleter" data-handle="event_posts" data-id="<?php echo $_smarty_tpl->getValue('data')['event_id'];?>
" data-delete-message="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Are you sure you want to delete all posts?");?>
">
          <i class="fa fa-trash-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Posts");?>

        </button>
        <button type="button" class="btn btn-danger js_admin-deleter" data-handle="event" data-id="<?php echo $_smarty_tpl->getValue('data')['event_id'];?>
" data-redirect="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/events">
          <i class="fa fa-trash-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Event");?>

        </button>
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
      </div>
    </form>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "categories") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_treegrid">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach4DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_url'=>"events",'_handle'=>"event_category"), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="4" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_category") {?>

    <form class="js_ajax-forms" data-url="admin/events.php?do=add_category">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="category_description" rows="3"></textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Parent Category");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="category_parent_id">
              <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set as a Parent Category");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach5DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order">
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit_category") {?>

    <form class="js_ajax-forms" data-url="admin/events.php?do=edit_category&id=<?php echo $_smarty_tpl->getValue('data')['category_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name" value="<?php echo $_smarty_tpl->getValue('data')['category_name'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="category_description" rows="3"><?php echo $_smarty_tpl->getValue('data')['category_description'];?>
</textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Parent Category");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="category_parent_id">
              <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set as a Parent Category");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')["categories"], 'category');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach6DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->getValue('data')['category_parent_id']), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order" value="<?php echo $_smarty_tpl->getValue('data')['category_order'];?>
">
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
