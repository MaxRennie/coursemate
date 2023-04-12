<?php
/* Smarty version 4.2.1, created on 2023-03-21 16:18:48
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/add-task.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6419d8e8a32b39_38067621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3d9ca5b18550f0c4fd4210ebe6bbc74c162ce8e' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/add-task.tpl',
      1 => 1679415527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419d8e8a32b39_38067621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8679354736419d8e8a310e8_09846617', "body");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_8679354736419d8e8a310e8_09846617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8679354736419d8e8a310e8_09846617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-12" style="display:block">
        <div class="app-form col-md-10" id="add-item-form">
            <div class="row">
                <div class="col-md-6 graphic">
                    <div class="graphic__image">
                        <img src="src/images/team.svg" alt="Girl studying" width="480" height="480">
                    </div>
                    <div class="graphic__text">
                        <h1 class="graphic__title">Add Item</h1>
                        <p class="graphic__description">Add a new item to your list.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form id="home-form" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="radio-group">
                                                                <input type="text" id="title" name="title" placeholder="Item Name">
                                                                <div class="radio-group">
                                    <input type="radio" id="type_task" name="type_id" value="2" checked>
                                    <label for="login">Task</label><br>
                                    <input type="radio" id="type_event" name="type_id" value="1">
                                    <label for="signup">Event</label><br>
                                </div>
                                                                <label for="duedate" id="dueDateLabel">Due date:</label>
                                <input type="date" id="dueDate" name="due_date">
                                                                <label for="duedate" id="startLabel">Start Time and Date(date and time):</label>
                                <input type="datetime-local" id="start" name="start">
                                                                <label for="duedate" id="endLabel">End Time and Date (date and time):</label>
                                <input type="datetime-local" id="end" name="end">
                                                                <input type="textarea" id="description" name="description" placeholder="Description">
                                                                <div class="radio-group" id="priority">
                                    <input type="radio" name="priority" id="priority_lo" value="1">
                                    <label for="login">Low</label><br>
                                    <input type="radio" name="priority" id="priority_med" value="2" checked>
                                    <label for="signup">Medium</label><br>
                                    <input type="radio" name="priority" id="priority_hi" value="3" checked>
                                    <label for="signup">High</label><br>
                                </div>
                                <input class="btn btn__light form-group-submit" type="submit" value="Submit">
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <a id="popoutButton" href="#itemPopout" data-lity>
            <i class="fa-solid fa-2x fa-plus"></i>
        </a>
        <div id="itemPopout" style="background:red;width:100vw;height:100vh;" class="lity-hide">
            <p>Inline content</p>
        </div>
    <?php
}
}
/* {/block "body"} */
}
