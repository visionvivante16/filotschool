<?php
/* Smarty version 5.7.0, created on 2026-05-07 10:06:28
  from 'file:admin.movies.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69fc6424bb2c65_40081707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04921204424853d646568dd5114bedd2b9ce08c4' => 
    array (
      0 => 'admin.movies.tpl',
      1 => 1760422462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fc6424bb2c65_40081707 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/movies/add_movie" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Movie");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "genres") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/movies/add_genre" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Genre");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_movie" || $_smarty_tpl->getValue('sub_view') == "edit_movie") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/movies" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_genre" || $_smarty_tpl->getValue('sub_view') == "edit_genre") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/movies/genres" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-film mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "add_movie") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Movie");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit_movie") {?> &rsaquo; <?php echo $_smarty_tpl->getValue('data')['title'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "genres") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Genres");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add_genre") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Genres");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Genre");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit_genre") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Genres");?>
 &rsaquo; <?php echo $_smarty_tpl->getValue('data')['genre_name'];
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
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Source");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Release");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid");?>
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
                <td>
                  <?php echo $_smarty_tpl->getValue('row')['movie_id'];?>

                </td>
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/movie/<?php echo $_smarty_tpl->getValue('row')['movie_id'];?>
/<?php echo $_smarty_tpl->getValue('row')['movie_url'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['poster'];?>
">
                    <?php echo $_smarty_tpl->getValue('row')['title'];?>

                  </a>
                </td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['source_type'] == "youtube") {?>
                    <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("YouTube");?>
</span>
                  <?php } elseif ($_smarty_tpl->getValue('row')['source_type'] == "vimeo") {?>
                    <span class="badge rounded-pill badge-lg bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Vimeo");?>
</span>
                  <?php } elseif ($_smarty_tpl->getValue('row')['source_type'] == "link") {?>
                    <span class="badge rounded-pill badge-lg bg-secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Link");?>
</span>
                  <?php } elseif ($_smarty_tpl->getValue('row')['source_type'] == "uploaded") {?>
                    <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Uploaded");?>
</span>
                  <?php }?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['release_year']) {
echo $_smarty_tpl->getValue('row')['release_year'];
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("N/A");
}?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['is_paid']) {?>
                    <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes");?>
</span>
                  <?php } else { ?>
                    <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No");?>
</span>
                  <?php }?>
                </td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/movies/edit_movie/<?php echo $_smarty_tpl->getValue('row')['movie_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="movie" data-id="<?php echo $_smarty_tpl->getValue('row')['movie_id'];?>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_movie") {?>

    <form class="js_ajax-forms" data-url="admin/movies.php?do=add_movie">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movie Source");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="source_url">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From YouTube, Vimeo or site.com/movie.mp4");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Or Upload Movie");?>

          </label>
          <div class="col-md-9">
            <div class="x-image">
              <div class="x-image-success">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Uploaded Successfully");?>

              </div>
              <button type="button" class="btn-close x-hidden js_x-video-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
              <input type="hidden" class="js_x-uploader-input" name="source_upload" value="">
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Maximum file size is");?>
 <?php echo $_smarty_tpl->getValue('system')['max_video_size']/1024;
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("MB");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and allowed extensions are");?>
 (<?php echo $_smarty_tpl->getValue('system')['video_extensions'];?>
)<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can change the");?>
 <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/uploads"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Uploads Settings");?>
</a>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movie Title");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="title">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="description" rows="3"></textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("IMDB");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="imdb_url">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("IMDB Link, Example:");?>
 <a target="_blank" href="https://www.imdb.com/title/tt0111161">https://www.imdb.com/title/tt0111161</a>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movie Stars");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="stars" rows="3"></textarea>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Separated by a comma (,) Example: Tom Hanks, Julia Roberts, Jim Carrey");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Release Year");?>

          </label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="release_year">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movie release year, Example: 1995");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Duration");?>

          </label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="duration">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movie duration in minutes, Example: 120");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Genres");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" multiple name="movie_genres[]">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('genres'), 'genre');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('genre')->value) {
$foreach1DoElse = false;
?>
                <option value="<?php echo $_smarty_tpl->getValue('genre')['genre_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('genre')['genre_name']);?>
</option>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Poster");?>

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
              <input type="hidden" class="js_x-uploader-input" name="poster" value="">
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="is_paid">
              <input type="checkbox" name="is_paid" id="is_paid">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("If you enable this option, users will have to pay to watch this movie.");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="price">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("How much user should pay to watch this movie, Example: 10");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Availability");?>

          </label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="available_for">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("How many days user can watch this movie after purchase, Example: 30 (0 for unlimited)");?>

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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit_movie") {?>

    <form class="js_ajax-forms" data-url="admin/movies.php?do=edit_movie&id=<?php echo $_smarty_tpl->getValue('data')['movie_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movie Source");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="source_url" <?php if ($_smarty_tpl->getValue('data')['source_type'] != 'uploaded') {?>value="<?php echo $_smarty_tpl->getValue('data')['source'];?>
" <?php }?>>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From YouTube, Vimeo or site.com/movie.mp4");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Or Upload Movie");?>

          </label>
          <div class="col-md-9">
            <?php if ($_smarty_tpl->getValue('data')['source_type'] == 'uploaded' && $_smarty_tpl->getValue('data')['source']) {?>
              <div class="x-image">
                <div class="x-image-success" style="display: block;">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Uploaded Successfully");?>

                </div>
                <button type="button" class="btn-close js_x-video-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
                <input type="hidden" class="js_x-uploader-input" name="source_upload" value="<?php echo $_smarty_tpl->getValue('data')['source'];?>
">
              </div>
            <?php } else { ?>
              <div class="x-image">
                <div class="x-image-success">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Uploaded Successfully");?>

                </div>
                <button type="button" class="btn-close x-hidden js_x-video-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
                <input type="hidden" class="js_x-uploader-input" name="source_upload" value="">
              </div>
            <?php }?>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Maximum file size is");?>
 <?php echo $_smarty_tpl->getValue('system')['max_video_size']/1024;
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("MB");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and allowed extensions are");?>
 (<?php echo $_smarty_tpl->getValue('system')['video_extensions'];?>
)<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can change the");?>
 <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/uploads"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Uploads Settings");?>
</a>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movie Title");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->getValue('data')['title'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="description" rows="3"><?php echo $_smarty_tpl->getValue('data')['description'];?>
</textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("IMDB");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="imdb_url" value="<?php echo $_smarty_tpl->getValue('data')['imdb_url'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("IMDB Link, Example:");?>
 <a target="_blank" href="https://www.imdb.com/title/tt0111161">https://www.imdb.com/title/tt0111161</a>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movie Stars");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="stars" rows="3"><?php echo $_smarty_tpl->getValue('data')['stars'];?>
</textarea>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Separated by a comma (,) Example: Tom Hanks, Julia Roberts, Jim Carrey");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Release Year");?>

          </label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="release_year" value="<?php echo $_smarty_tpl->getValue('data')['release_year'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movie release year, Example: 1995");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Duration");?>

          </label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="duration" value="<?php echo $_smarty_tpl->getValue('data')['duration'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movie duration in minutes, Example: 120");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Genres");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" multiple name="movie_genres[]">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['movies_genres'], 'genre');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('genre')->value) {
$foreach2DoElse = false;
?>
                <option <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('genre')['genre_id'],$_smarty_tpl->getValue('data')['genres'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('genre')['genre_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('genre')['genre_name']);?>
</option>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Poster");?>

          </label>
          <div class="col-md-9">
            <?php if ($_smarty_tpl->getValue('data')['poster'] == '') {?>
              <div class="x-image">
                <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                <div class="loader loader_small x-hidden"></div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-uploader-input" name="poster">
              </div>
            <?php } else { ?>
              <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('data')['poster'];?>
')">
                <button type="button" class="btn-close js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                <div class="loader loader_small x-hidden"></div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-uploader-input" name="poster" value="<?php echo $_smarty_tpl->getValue('data')['poster'];?>
">
              </div>
            <?php }?>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="is_paid">
              <input type="checkbox" name="is_paid" id="is_paid" <?php if ($_smarty_tpl->getValue('data')['is_paid']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("If you enable this option, users will have to pay to watch this movie.");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="price" value="<?php echo $_smarty_tpl->getValue('data')['price'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("How much user should pay to watch this movie, Example: 10");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Availability");?>

          </label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="available_for" value="<?php echo $_smarty_tpl->getValue('data')['available_for'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("How many days user can watch this movie after purchase, Example: 30 (0 for unlimited)");?>

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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "genres") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach3DoElse = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->getValue('row')['genre_id'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['genre_name'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['genre_order'];?>
</td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/movies/edit_genre/<?php echo $_smarty_tpl->getValue('row')['genre_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="movie_genre" data-id="<?php echo $_smarty_tpl->getValue('row')['genre_id'];?>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_genre") {?>

    <form class="js_ajax-forms" data-url="admin/movies.php?do=add_genre">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="genre_name">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="genre_order">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="genre_description" rows="3"></textarea>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit_genre") {?>

    <form class="js_ajax-forms" data-url="admin/movies.php?do=edit_genre&id=<?php echo $_smarty_tpl->getValue('data')['genre_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="genre_name" value="<?php echo $_smarty_tpl->getValue('data')['genre_name'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="genre_order" value="<?php echo $_smarty_tpl->getValue('data')['genre_order'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="genre_description" rows="3"><?php echo $_smarty_tpl->getValue('data')['genre_description'];?>
</textarea>
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
