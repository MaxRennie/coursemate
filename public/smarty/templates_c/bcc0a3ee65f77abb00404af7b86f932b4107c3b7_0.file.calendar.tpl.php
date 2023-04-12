<?php
/* Smarty version 4.2.1, created on 2023-03-28 19:05:12
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64233a688cadb9_68863994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcc0a3ee65f77abb00404af7b86f932b4107c3b7' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/calendar.tpl',
      1 => 1680030311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/error.tpl' => 1,
    'file:components/sidebar.tpl' => 1,
    'file:components/add-task.tpl' => 1,
    'file:components/add-event.tpl' => 1,
  ),
),false)) {
function content_64233a688cadb9_68863994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164353011364233a688c6f95_16634856', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_164353011364233a688c6f95_16634856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_164353011364233a688c6f95_16634856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:components/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
    <div class="calendar">
       <?php $_smarty_tpl->_subTemplateRender("file:components/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div id="calendar" class="sidebar-included maximised"></div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:components/add-task.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:components/add-event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block "body"} */
}
