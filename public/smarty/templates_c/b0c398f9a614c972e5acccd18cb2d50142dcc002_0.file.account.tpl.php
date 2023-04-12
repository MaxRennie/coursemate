<?php
/* Smarty version 4.2.1, created on 2023-04-05 11:26:36
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642d5aece68704_52214937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0c398f9a614c972e5acccd18cb2d50142dcc002' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/account.tpl',
      1 => 1680693928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/error.tpl' => 1,
  ),
),false)) {
function content_642d5aece68704_52214937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_472075326642d5aece5c3a8_31461245', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_472075326642d5aece5c3a8_31461245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_472075326642d5aece5c3a8_31461245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:components/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <div class="account">
            <div class="row">
                <div class="col-md-6 col-12 settings">
                    <div class="image">
                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value && $_smarty_tpl->tpl_vars['user_data']->value['user_image'] != null) {?>
                            <img src="user-images/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_image'];?>
" alt="Profile Picture" class="profile-pic" width="400px"
                                height="400px">
                        <?php } else { ?>
                            <img src="src/images/profile.svg" alt="Profile Picture" class="profile-pic" width="400px"
                                height="400px">
                        <?php }?>
                    </div>

                    <h3 class="mb-4 pb-2">Hey <?php echo $_smarty_tpl->tpl_vars['user']->value['fname'];?>
</h3>
                    <h4>Thanks for using CourseMate</h4>
                    <p>Here you can change your password or profile picture</p>

                    <button class="btn btn-primary" id="changePassword">Change Password</button>
                    <button class="btn btn-primary" id="changeProfilePic">Change Profile Picture</button>
                    <div id="passwordChange" style="display:none;">
                        <form value="password" method="post">
                            <input type="password" id="currentPassword" name="currentPassword"
                                placeholder="Current Password">
                            <input type="password" id="newPassword" name="newPassword" placeholder="New Password">
                            <input type="password" id="new_password_confirm" name="new_password_confirm"
                                placeholder="Confirm New Password">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </form>
                    </div>

                    <div id="profilePicChange" style="display:none;">
                        <form id="image" method="post" enctype="multipart/form-data">

                            <div class="form-group file-upload">
                                <input type="file" class="form-control-file" id="user_image" name="user_image"
                                    placeholder="Upload a Profile Image">
                            </div>

                            <button class="btn btn__light form-group-submit" name="submit" type="submit">Next</button>
                        </form>

                    </div>
                </div>
                <div class="col-md-6 col-12 statistics">
                    <h3 class="mb-4 pb-2">Your Statistics</h3>
                    <div class="stat">
                        <h4>Events this week</h4>
                        <p><?php echo $_smarty_tpl->tpl_vars['user']->value['week_events'];?>
</p>
                    </div>
                    <div class="stat">
                        <h4>Tasks this week</h4>
                        <p><?php echo $_smarty_tpl->tpl_vars['user']->value['week_tasks'];?>
</p>
                    </div>
                    <div class="stat">
                        <h4>Time spent this week</h4>
                        <p><?php echo $_smarty_tpl->tpl_vars['user']->value['completed_courses'];?>
</p>
                    </div>
                    <div class="stat">
                        <h4>Total completed Tasks</h4>
                        <p><?php echo $_smarty_tpl->tpl_vars['user']->value['completed_tasks'];?>
</p>
                    </div>
                    <div class="stat">
                        <h4>Total time spent</h4>
                        <p><?php echo $_smarty_tpl->tpl_vars['user']->value['completed_courses'];?>
</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
}
}
/* {/block "body"} */
}
