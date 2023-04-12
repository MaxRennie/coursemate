<?php
/* Smarty version 4.2.1, created on 2023-03-28 10:39:18
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/components/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422c3d6375d69_16335122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2608fe3fbb64fb669b74a423c08802fccc536ec7' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/components/error.tpl',
      1 => 1679999956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422c3d6375d69_16335122 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div class="alert alert-danger mb-0" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['success']->value) {?>
    <div class="alert alert-success mb-0" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

    </div>
<?php }
}
}
