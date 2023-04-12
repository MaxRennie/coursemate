<?php
/* Smarty version 4.2.1, created on 2023-03-28 12:54:57
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422e3a14a7c37_21408889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d53f3a16bceda8986642ef1bd8f141584a63b6a' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/login.tpl',
      1 => 1679999837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/error.tpl' => 1,
  ),
),false)) {
function content_6422e3a14a7c37_21408889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20921109526422e3a14a31b7_27015767', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_20921109526422e3a14a31b7_27015767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20921109526422e3a14a31b7_27015767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:components/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="login">
        <div class="col-12 col-md-6 form-container">
            <div class="app-form col-md-10" id="app-form">

                <div class="image">
                    <img src="src/images/team.svg" alt="Girl studying" width="480" height="480">
                </div>
                <form id="home-form" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">

                        <div class="selector">
                            <div class="selector-item">
                                <input type="radio" id="login" value="login" name="type" class="selector-item__radio"
                                    checked>
                                <label for="login" class="selector-item__label">Login</label>
                            </div>
                            <div class="selector-item">
                                <input type="radio" id="signup" value="signup" name="type" class="selector-item__radio">
                                <label for="signup" class="selector-item__label">Sign Up</label>
                            </div>
                        </div>
                        <input type="text" id="email" name="email" placeholder="Email">
                        <input type="password" id="password" name="password" placeholder="Password" autocomplete="password">
                        <input class="btn btn__light form-group-submit" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "body"} */
}
