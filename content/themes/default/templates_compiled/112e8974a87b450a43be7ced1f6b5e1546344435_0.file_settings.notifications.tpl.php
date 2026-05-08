<?php
/* Smarty version 5.7.0, created on 2026-05-06 09:42:30
  from 'file:settings.notifications.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69fb0d06ebdb76_49248097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '112e8974a87b450a43be7ced1f6b5e1546344435' => 
    array (
      0 => 'settings.notifications.tpl',
      1 => 1714149270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
))) {
function content_69fb0d06ebdb76_49248097 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"notifications",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notifications");?>

</div>
<form class="js_ajax-forms" data-url="users/settings.php?edit=notifications">
  <div class="card-body">
    <!-- System Notifications -->
    <div class="heading-small mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("System Notifications");?>

    </div>
    <div class="pl-md-4">
      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"chat_bell",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Chat Message Sound");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("A sound will be played each time you receive a new message on an inactive chat window");?>
</div>
        </div>
        <div class="text-end">
          <label class="switch" for="chat_sound_settings">
            <input type="checkbox" name="chat_sound" id="chat_sound_settings" <?php if ($_smarty_tpl->getValue('user')->_data['chat_sound']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"notification_bell",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notifications Sound");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("A sound will be played each time you receive a new activity notification");?>
</div>
        </div>
        <div class="text-end">
          <label class="switch" for="notifications_sound_settings">
            <input type="checkbox" name="notifications_sound" id="notifications_sound_settings" <?php if ($_smarty_tpl->getValue('user')->_data['notifications_sound']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>
    </div>
    <!-- System Notifications -->

    <!-- Email Notifications -->
    <?php if ($_smarty_tpl->getValue('email_user_notifications_enabled') || $_smarty_tpl->getValue('email_admin_notifications_enabled')) {?>
      <div class="divider"></div>
      <div class="heading-small mb20">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email Notifications");?>

      </div>
      <div class="pl-md-4">
        <div class="row form-group">
          <label class="col-md-2 form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email Me When");?>
</label>
          <div class="col-md-10">
            <?php if ($_smarty_tpl->getValue('system')['email_post_likes']) {?>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="email_post_likes" id="email_post_likes" <?php if ($_smarty_tpl->getValue('user')->_data['email_post_likes']) {?>checked<?php }?>>
                <label class="form-check-label" for="email_post_likes"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Someone reacted to my post");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['email_post_comments']) {?>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="email_post_comments" id="email_post_comments" <?php if ($_smarty_tpl->getValue('user')->_data['email_post_comments']) {?>checked<?php }?>>
                <label class="form-check-label" for="email_post_comments"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Someone commented on my post");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['email_post_shares']) {?>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="email_post_shares" id="email_post_shares" <?php if ($_smarty_tpl->getValue('user')->_data['email_post_shares']) {?>checked<?php }?>>
                <label class="form-check-label" for="email_post_shares"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Someone shared my post");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['email_wall_posts']) {?>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="email_wall_posts" id="email_wall_posts" <?php if ($_smarty_tpl->getValue('user')->_data['email_wall_posts']) {?>checked<?php }?>>
                <label class="form-check-label" for="email_wall_posts"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Someone posted on my timeline");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['email_mentions']) {?>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="email_mentions" id="email_mentions" <?php if ($_smarty_tpl->getValue('user')->_data['email_mentions']) {?>checked<?php }?>>
                <label class="form-check-label" for="email_mentions"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Someone mentioned me");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['email_profile_visits']) {?>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="email_profile_visits" id="email_profile_visits" <?php if ($_smarty_tpl->getValue('user')->_data['email_profile_visits']) {?>checked<?php }?>>
                <label class="form-check-label" for="email_profile_visits"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Someone visited my profile");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['email_friend_requests']) {?>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="email_friend_requests" id="email_friend_requests" <?php if ($_smarty_tpl->getValue('user')->_data['email_friend_requests']) {?>checked<?php }?>>
                <label class="form-check-label" for="email_friend_requests"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Someone sent me/accepted my friend requset");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['verification_requests'] && $_smarty_tpl->getValue('system')['email_user_verification']) {?>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="email_user_verification" id="email_user_verification" <?php if ($_smarty_tpl->getValue('user')->_data['email_user_verification']) {?>checked<?php }?>>
                <label class="form-check-label" for="email_user_verification"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Admin approved/declined my verification requests");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['posts_approval_enabled'] && $_smarty_tpl->getValue('system')['email_user_post_approval']) {?>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="email_user_post_approval" id="email_user_post_approval" <?php if ($_smarty_tpl->getValue('user')->_data['email_user_post_approval']) {?>checked<?php }?>>
                <label class="form-check-label" for="email_user_post_approval"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Admin approved my pending posts");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('email_admin_notifications_enabled') && ($_smarty_tpl->getValue('user')->_is_admin || $_smarty_tpl->getValue('user')->_is_moderator)) {?>
              <?php if ($_smarty_tpl->getValue('email_user_notifications_enabled')) {?><div class="divider dashed"></div><?php }?>
              <?php if ($_smarty_tpl->getValue('system')['email_admin_verifications']) {?>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="email_admin_verifications" id="email_admin_verifications" <?php if ($_smarty_tpl->getValue('user')->_data['email_admin_verifications']) {?>checked<?php }?>>
                  <label class="form-check-label" for="email_admin_verifications"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verification request sent by user/page");?>
</label>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['email_admin_post_approval']) {?>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="email_admin_post_approval" id="email_admin_post_approval" <?php if ($_smarty_tpl->getValue('user')->_data['email_admin_post_approval']) {?>checked<?php }?>>
                  <label class="form-check-label" for="email_admin_post_approval"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post published and needs approval");?>
</label>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['email_admin_user_approval']) {?>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="email_admin_user_approval" id="email_admin_user_approval" <?php if ($_smarty_tpl->getValue('user')->_data['email_admin_user_approval']) {?>checked<?php }?>>
                  <label class="form-check-label" for="email_admin_user_approval"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("New user needs approval");?>
</label>
                </div>
              <?php }?>
            <?php }?>
          </div>
        </div>
      </div>
    <?php }?>
    <!-- Email Notifications -->

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
</form><?php }
}
