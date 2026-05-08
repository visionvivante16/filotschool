<?php
/* Smarty version 5.7.0, created on 2026-05-06 09:51:34
  from 'file:admin.colored_posts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69fb0f26c3e9c0_46550691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f0d34de72e6cd12810a0c024f9b1cdcf01f7e87' => 
    array (
      0 => 'admin.colored_posts.tpl',
      1 => 1760422402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb0f26c3e9c0_46550691 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/colored_posts/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Pattern");?>

        </a>
      </div>
    <?php } else { ?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/colored_posts" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-palette mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Colored Posts");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "add") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Pattern");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Pattern");
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
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Preview");?>
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
                <td><?php echo $_smarty_tpl->getValue('row')['pattern_id'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['type'] == "color") {?>
                    <div class="post-colored-preview small" style="background-image: linear-gradient(45deg, <?php echo $_smarty_tpl->getValue('row')['background_color_1'];?>
, <?php echo $_smarty_tpl->getValue('row')['background_color_2'];?>
);">
                      <h4 style="color: <?php echo $_smarty_tpl->getValue('row')['text_color'];?>
;">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hello World");?>

                      </h4>
                    </div>
                  <?php } else { ?>
                    <div class="post-colored-preview small" style="background-image: url(<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('row')['background_image'];?>
)">
                      <h4 style="color: <?php echo $_smarty_tpl->getValue('row')['text_color'];?>
;">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hello World");?>

                      </h4>
                    </div>
                  <?php }?>
                </td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/colored_posts/edit/<?php echo $_smarty_tpl->getValue('row')['pattern_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="pattern" data-id="<?php echo $_smarty_tpl->getValue('row')['pattern_id'];?>
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

    <form class="js_ajax-forms" data-url="admin/colored_posts.php?do=add">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pattern Type");?>

          </label>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input type="radio" name="type" id="pattern_type_color" value="color" class="form-check-input js_pattern-type" checked>
              <label class="form-check-label" for="pattern_type_color"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Background Color");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="type" id="pattern_type_image" value="image" class="form-check-input js_pattern-type">
              <label class="form-check-label" for="pattern_type_image"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Background Image");?>
</label>
            </div>
          </div>
        </div>

        <div id="js_pattern-type-color">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Background Color 1");?>

            </label>
            <div class="col-md-9">
              <div class="input-group js_colorpicker">
                <input type="text" class="form-control form-control-color js_pattern-background-color-1" name="background_color_1" value="#FF00FF" />
                <input type="color" class="form-control form-control-color" value="#FF00FF" />
              </div>
            </div>
          </div>

          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Background Color 2");?>

            </label>
            <div class="col-md-9">
              <div class="input-group js_colorpicker">
                <input type="text" class="form-control form-control-color js_pattern-background-color-2" name="background_color_2" value="#3A3AD7" />
                <input type="color" class="form-control form-control-color" value="#3A3AD7" />
              </div>
            </div>
          </div>
        </div>

        <div id="js_pattern-type-image" class="x-hidden">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Background Image");?>

            </label>
            <div class="col-md-9">
              <div class="x-image">
                <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-uploader-input js_pattern-background-image" name="background_image" value="">
              </div>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Text Color");?>

          </label>
          <div class="col-md-9">
            <div class="input-group js_colorpicker">
              <input type="text" class="form-control form-control-color js_pattern-text-color" name="text_color" value="#000000" />
              <input type="color" class="form-control form-control-color" value="#000000" />
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Preview");?>

          </label>
          <div class="col-md-9">
            <div class="post-colored-preview js_pattern-preview" style="background-image: linear-gradient(45deg, #FF00FF, #3A3AD7);">
              <h2 style="color: #000000;">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hello World");?>

              </h2>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit") {?>

    <form class="js_ajax-forms" data-url="admin/colored_posts.php?do=edit&id=<?php echo $_smarty_tpl->getValue('data')['pattern_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pattern Type");?>

          </label>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input type="radio" name="type" id="pattern_type_color" value="color" class="form-check-input js_pattern-type" <?php if ($_smarty_tpl->getValue('data')['type'] == "color") {?>checked<?php }?>>
              <label class="form-check-label" for="pattern_type_color"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Background Color");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="type" id="pattern_type_image" value="image" class="form-check-input js_pattern-type" <?php if ($_smarty_tpl->getValue('data')['type'] == "image") {?>checked<?php }?>>
              <label class="form-check-label" for="pattern_type_image"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Background Image");?>
</label>
            </div>
          </div>
        </div>

        <div id="js_pattern-type-color" <?php if ($_smarty_tpl->getValue('data')['type'] == "image") {?>class="x-hidden" <?php }?>>
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Background Color 1");?>

            </label>
            <div class="col-md-9">
              <div class="input-group js_colorpicker">
                <input type="text" class="form-control form-control-color js_pattern-background-color-1" name="background_color_1" value="<?php echo $_smarty_tpl->getValue('data')['background_color_1'];?>
" />
                <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('data')['background_color_1'];?>
" />
              </div>
            </div>
          </div>

          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Background Color 2");?>

            </label>
            <div class="col-md-9">
              <div class="input-group js_colorpicker">
                <input type="text" class="form-control form-control-color js_pattern-background-color-2" name="background_color_2" value="<?php echo $_smarty_tpl->getValue('data')['background_color_2'];?>
" />
                <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('data')['background_color_2'];?>
" />
              </div>
            </div>
          </div>
        </div>

        <div id="js_pattern-type-image" <?php if ($_smarty_tpl->getValue('data')['type'] == "color") {?>class="x-hidden" <?php }?>>
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Background Image");?>

            </label>
            <div class="col-md-9">
              <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('data')['background_image'];?>
')">
                <button type="button" class="btn-close js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-uploader-input js_pattern-background-image" name="background_image" value="<?php echo $_smarty_tpl->getValue('data')['background_image'];?>
">
              </div>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Text Color");?>

          </label>
          <div class="col-md-9">
            <div class="input-group js_colorpicker">
              <input type="text" class="form-control form-control-color js_pattern-text-color" name="text_color" value="<?php echo $_smarty_tpl->getValue('data')['text_color'];?>
" />
              <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('data')['text_color'];?>
" />
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Preview");?>

          </label>
          <div class="col-md-9">
            <?php if ($_smarty_tpl->getValue('data')['type'] == "color") {?>
              <div class="post-colored-preview js_pattern-preview" style="background-image: linear-gradient(45deg, <?php echo $_smarty_tpl->getValue('data')['background_color_1'];?>
, <?php echo $_smarty_tpl->getValue('data')['background_color_2'];?>
);">
                <h2 style="color: <?php echo $_smarty_tpl->getValue('data')['text_color'];?>
;">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hello World");?>

                </h2>
              </div>
            <?php } else { ?>
              <div class="post-colored-preview js_pattern-preview" style="background-image: url(<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('data')['background_image'];?>
)">
                <h2 style="color: <?php echo $_smarty_tpl->getValue('data')['text_color'];?>
;">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hello World");?>

                </h2>
              </div>
            <?php }?>
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
