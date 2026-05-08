<?php
/* Smarty version 5.7.0, created on 2026-05-07 10:06:19
  from 'file:admin.forums.recursive_rows.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69fc641bc9df93_48386442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd98ffd415fcba46066a60efc70dcf6a7c6f664ea' => 
    array (
      0 => 'admin.forums.recursive_rows.tpl',
      1 => 1685288947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin.forums.recursive_rows.tpl' => 2,
  ),
))) {
function content_69fc641bc9df93_48386442 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/sngine/content/themes/default/templates';
?><tr class="treegrid-<?php echo $_smarty_tpl->getValue('row')['forum_id'];?>
 <?php if ($_smarty_tpl->getValue('row')['forum_section'] != '0') {?>treegrid-parent-<?php echo $_smarty_tpl->getValue('row')['forum_section'];
}?>">
  <td>
    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/forums/<?php echo $_smarty_tpl->getValue('row')['forum_id'];?>
/<?php echo $_smarty_tpl->getValue('row')['title_url'];?>
">
      <?php echo $_smarty_tpl->getValue('row')['forum_name'];?>

    </a>
  </td>
  <td>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('row')['forum_description'],50);?>

  </td>
  <td><?php echo $_smarty_tpl->getValue('row')['forum_threads'];?>
</td>
  <td><span class="badge rounded-pill badge-lg bg-info"><?php echo $_smarty_tpl->getValue('row')['forum_order'];?>
</span></td>
  <td>
    <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/forums/edit_forum/<?php echo $_smarty_tpl->getValue('row')['forum_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
      <i class="fa fa-pencil-alt"></i>
    </a>
    <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="forum" data-id="<?php echo $_smarty_tpl->getValue('row')['forum_id'];?>
">
      <i class="fa fa-trash-alt"></i>
    </button>
  </td>
</tr>
<?php if ($_smarty_tpl->getValue('row')['childs']) {?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('row')['childs'], '_row');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_row')->value) {
$foreach5DoElse = false;
?>
    <?php $_smarty_tpl->renderSubTemplate('file:admin.forums.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('row'=>$_smarty_tpl->getValue('_row')), (int) 0, $_smarty_current_dir);
?>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
