<?php
/* Smarty version 4.2.1, created on 2023-04-05 11:26:32
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/layouts/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642d5ae882f5a5_44856844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b166847c466d3c0d635b93e53b8f1eb04c7ca41' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/layouts/main.tpl',
      1 => 1680689272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/components/header.tpl' => 1,
    'file:views/components/footer.tpl' => 1,
  ),
),false)) {
function content_642d5ae882f5a5_44856844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:views/components/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1061161986642d5ae882d586_49110229', "body");
?>

</main>
<?php $_smarty_tpl->_subTemplateRender('file:views/components/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "body"} */
class Block_1061161986642d5ae882d586_49110229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1061161986642d5ae882d586_49110229',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
}
