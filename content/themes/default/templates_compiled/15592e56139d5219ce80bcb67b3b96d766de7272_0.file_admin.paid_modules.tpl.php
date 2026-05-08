<?php
/* Smarty version 5.7.0, created on 2026-02-26 05:35:55
  from 'file:admin.paid_modules.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_699fdbbb4a9f45_19994787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15592e56139d5219ce80bcb67b3b96d766de7272' => 
    array (
      0 => 'admin.paid_modules.tpl',
      1 => 1760786767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 6,
  ),
))) {
function content_699fdbbb4a9f45_19994787 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa-solid fa-money-check-dollar mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Modules");?>

  </div>

  <form class="js_ajax-forms" data-url="admin/settings.php?edit=paid_modules">
    <div class="card-body">

      <div class="alert alert-primary">
        <div class="icon">
          <i class="fas fa-money-check-dollar fa-2x"></i>
        </div>
        <div class="text">
          <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Modules");?>
</strong><br>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid modules are used to charge users for certain posts on the platform");?>
.<br>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cost will be deducted from user's wallet balance");?>
.<br>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make sure you have enabled");?>
 <a class="text-warning" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/wallet"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Wallet System");?>
</a>
        </div>
      </div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Blogs");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the paid blogs On and Off");?>

          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="paid_blogs_enabled">
            <input type="checkbox" name="paid_blogs_enabled" id="paid_blogs_enabled" <?php if ($_smarty_tpl->getValue('system')['paid_blogs_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cost");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="paid_blogs_cost" value="<?php echo $_smarty_tpl->getValue('system')['paid_blogs_cost'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The cost per blog post");?>

          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Products");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the paid products On and Off");?>

          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="paid_products_enabled">
            <input type="checkbox" name="paid_products_enabled" id="paid_products_enabled" <?php if ($_smarty_tpl->getValue('system')['paid_products_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cost");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="paid_products_cost" value="<?php echo $_smarty_tpl->getValue('system')['paid_products_cost'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The cost per product post");?>

          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Funding");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the paid funding On and Off");?>

          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="paid_funding_enabled">
            <input type="checkbox" name="paid_funding_enabled" id="paid_funding_enabled" <?php if ($_smarty_tpl->getValue('system')['paid_funding_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cost");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="paid_funding_cost" value="<?php echo $_smarty_tpl->getValue('system')['paid_funding_cost'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The cost per funding post");?>

          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Offers");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the paid offers On and Off");?>

          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="paid_offers_enabled">
            <input type="checkbox" name="paid_offers_enabled" id="paid_offers_enabled" <?php if ($_smarty_tpl->getValue('system')['paid_offers_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cost");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="paid_offers_cost" value="<?php echo $_smarty_tpl->getValue('system')['paid_offers_cost'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The cost per offer post");?>

          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Jobs");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the paid jobs On and Off");?>

          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="paid_jobs_enabled">
            <input type="checkbox" name="paid_jobs_enabled" id="paid_jobs_enabled" <?php if ($_smarty_tpl->getValue('system')['paid_jobs_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cost");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="paid_jobs_cost" value="<?php echo $_smarty_tpl->getValue('system')['paid_jobs_cost'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The cost per job post");?>

          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Courses");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the paid courses On and Off");?>

          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="paid_courses_enabled">
            <input type="checkbox" name="paid_courses_enabled" id="paid_courses_enabled" <?php if ($_smarty_tpl->getValue('system')['paid_courses_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cost");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="paid_courses_cost" value="<?php echo $_smarty_tpl->getValue('system')['paid_courses_cost'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The cost per course post");?>

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
</div><?php }
}
