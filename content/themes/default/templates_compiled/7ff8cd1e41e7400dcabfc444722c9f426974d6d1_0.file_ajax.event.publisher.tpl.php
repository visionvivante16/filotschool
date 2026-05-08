<?php
/* Smarty version 5.7.0, created on 2026-04-28 05:37:37
  from 'file:ajax.event.publisher.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69f047a1f3aec1_39336498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ff8cd1e41e7400dcabfc444722c9f426974d6d1' => 
    array (
      0 => 'ajax.event.publisher.tpl',
      1 => 1763057046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
))) {
function content_69f047a1f3aec1_39336498 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create New Event");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="modules/create.php?type=event&do=create">
  <div class="modal-body">
    <!-- sponsored event -->
    <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
      <div class="form-table-row">
        <div>
          <div class="form-label h6 mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored Event");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable this option to add your own host to the event");?>
<br>
            <small class="text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Note: Only system admins can see this option");?>
</small>
          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="is_sponsored">
            <input type="checkbox" name="is_sponsored" id="is_sponsored">
            <span class="slider round"></span>
          </label>
        </div>
      </div>
      <div id="sponsored_event" class="x-hidden">
        <div class="form-group">
          <label class="form-label" for="sponsor_name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored By");?>
</label>
          <input type="text" class="form-control" name="sponsor_name" id="sponsor_name">
        </div>
        <div class="form-group">
          <label class="form-label" for="sponsor_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored URL");?>
</label>
          <input type="text" class="form-control" name="sponsor_url" id="sponsor_url">
        </div>
      </div>
      <div class="divider"></div>
    <?php }?>
    <!-- sponsored event -->
    <!-- title -->
    <div class="form-group">
      <label class="form-label" for="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name Your Event");?>
</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>
    <!-- title -->
    <!-- start date -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Start Date");?>
</label>
      <input type="datetime-local" class="form-control" name="start_date">
    </div>
    <!-- start date -->
    <!-- end date -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("End Date");?>
</label>
      <input type="datetime-local" class="form-control" name="end_date">
    </div>
    <!-- end date -->
    <!-- event type (in person or online) -->
    <div class="form-group">
      <label class="form-label" for="is_online"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Event Type");?>
</label>
      <select class="form-select" name="is_online" id="is_online">
        <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("In Person");?>
</option>
        <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Online");?>
</option>
      </select>
    </div>
    <!-- event type (in person or online) -->
    <!-- privacy -->
    <?php if (!$_smarty_tpl->getValue('page_id')) {?>
      <div class="form-group">
        <label class="form-label" for="privacy"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Privacy");?>
</label>
        <select class="form-select" name="privacy">
          <option value="public"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public Event");?>
</option>
          <option value="closed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed Event");?>
</option>
          <option value="secret"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secret Event");?>
</option>
        </select>
      </div>
    <?php }?>
    <!-- privacy -->
    <!-- category -->
    <div class="form-group">
      <label class="form-label" for="category"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>
</label>
      <select class="form-select" name="category" id="category">
        <option><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Category");?>
</option>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
          <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <!-- category -->
    <!-- location -->
    <div class="form-group">
      <label class="form-label" for="location"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>
</label>
      <input type="text" class="form-control js_geocomplete" name="location" id="location">
      <input type="hidden" name="latitude" data-geo="lat">
      <input type="hidden" name="longitude" data-geo="lng">
    </div>
    <!-- location -->
    <!-- country -->
    <div class="form-group">
      <label class="form-label" for="country"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country");?>
</label>
      <select class="form-select" name="country">
        <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Country");?>
</option>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach1DoElse = false;
?>
          <option value="<?php echo $_smarty_tpl->getValue('country')['country_id'];?>
"><?php echo $_smarty_tpl->getValue('country')['country_name'];?>
</option>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <!-- country -->
    <!-- language -->
    <div class="form-group">
      <label class="form-label" for="language"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Language");?>
</label>
      <select class="form-select" name="language">
        <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Language");?>
</option>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('languages'), 'language');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('language')->value) {
$foreach2DoElse = false;
?>
          <option value="<?php echo $_smarty_tpl->getValue('language')['language_id'];?>
"><?php echo $_smarty_tpl->getValue('language')['title'];?>
</option>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <!-- language -->
    <!-- description -->
    <div class="form-group">
      <label class="form-label" for="description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("About");?>
</label>
      <textarea class="form-control" name="description"></textarea>
    </div>
    <!-- description -->
    <!-- custom fields -->
    <?php if ($_smarty_tpl->getValue('custom_fields')) {?>
      <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields'),'_registration'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <!-- custom fields -->
    <?php if ($_smarty_tpl->getValue('page_id')) {?>
      <!-- tickets link -->
      <div class="divider"></div>
      <div class="form-group">
        <label class="form-label" for="tickets_link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tickets Link");?>
</label>
        <input type="text" class="form-control" name="tickets_link" id="tickets_link" value="<?php echo $_smarty_tpl->getValue('event')['event_tickets_link'];?>
">
      </div>
      <div class="form-group">
        <label class="form-label" for="prices"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Prices Info");?>
</label>
        <textarea class="form-control" name="prices"><?php echo $_smarty_tpl->getValue('event')['event_prices'];?>
</textarea>
      </div>
      <!-- tickets link -->
    <?php }?>
    <div class="divider"></div>
    <!-- post -->
    <div class="form-table-row">
      <div>
        <div class="form-label h6 mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Post");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create a post after creating the event");?>
<br>
          <small class="text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post will be public and only works with public/closed events");?>
</small>
        </div>
      </div>
      <div class="text-end">
        <label class="switch" for="create_post">
          <input type="checkbox" name="create_post" id="create_post">
          <span class="slider round"></span>
        </label>
      </div>
    </div>
    <!-- post -->
    <!-- error -->
    <div class="alert alert-danger mb0 mt10 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <?php if ($_smarty_tpl->getValue('page_id')) {?>
      <input type="hidden" name="page_id" value="<?php echo $_smarty_tpl->getValue('page_id');?>
">
    <?php }?>
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create");?>
</button>
  </div>
</form>

<?php echo '<script'; ?>
>
  /* sponsored event */
  $('#is_sponsored').on('change', function() {
    if ($(this).prop('checked')) {
      $('#sponsored_event').fadeIn();
    } else {
      $('#sponsored_event').hide();
    }
  });
  /* event type */
  $('#is_online').on('change', function() {
    if ($(this).val() == '1') {
      $('#location').prop('disabled', true);
    } else {
      $('#location').prop('disabled', false);
    }
  });
<?php echo '</script'; ?>
><?php }
}
