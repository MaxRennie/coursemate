<?php
/* Smarty version 4.2.1, created on 2023-03-28 10:50:44
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422c684ce0ba5_62241593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85134108b3fe072630d8539576463a241636b467' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/register.tpl',
      1 => 1679999846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/error.tpl' => 1,
  ),
),false)) {
function content_6422c684ce0ba5_62241593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12491558056422c684cd13b8_49262037', "body");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_12491558056422c684cd13b8_49262037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12491558056422c684cd13b8_49262037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:components/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container mb-5 navbar-spacing">

        <div class="standalone-form">
            <div class="app-form col-md-10" id="app-form">
                <div id="step-1" class="step active">
                    <div class="image">
                        <img src="src/images/team.svg" alt="Girl studying" width="480" height="480">
                    </div>
                    <form id="registration" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <h2>Sign Up</h2><br>
                            <input type="text" id="fname" name="fname" placeholder="First Name" autocomplete="on">
                            <input type="text" id="lname" name="lname" placeholder="Last Name" autocomplete="on">
                            <div class="form-group file-upload">
                                <label for="user_image">Upload a Profile Image</label>
                                <input type="file" class="form-control-file" id="user_image" name="user_image" placeholder="Upload a Profile Image">
                            </div>
                            <input type="text" id="email" name="email" placeholder="Email" autocomplete="on"
                                value="<?php echo $_SESSION['user'];?>
">
                            <input type="password" id="password" name="password" placeholder="Password" autocomplete="on"
                                value="<?php echo $_SESSION['password'];?>
">
                            <input type="password" id="password_confirm" name="password_confirm"
                                placeholder="Confirm Password" autocomplete="on">

                            <div id="schoolSelect" class="dropdown">
                                <input type="text" placeholder="Search Schools here..." id="schoolInput"
                                    onkeyup="filterFunction('school')" autoComplete="on" list="schools">
                                <div class="selectWrapper">
                                    <select id="schools" name="schools" class="form-control" onfocus='this.size=5;'
                                        onblur='this.size=1;' onchange='this.size=1; this.blur(); '
                                        onselect="select(this, school)">
                                        <option value="null">...then select from this list</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['schools']->value, 'school');
$_smarty_tpl->tpl_vars['school']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['school']->value) {
$_smarty_tpl->tpl_vars['school']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['school']->value['institution_id'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['school']->value['institution_name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <p id="schoolTooltip">Can't find your school? <strong onclick="addSchool()">Add it
                                    here</strong>
                            </p>
                            <input style="display:none" type="text" id="add-school" name="add-school"
                                placeholder="Add your School">

                            <div id="courseSelect" class="dropdown">
                                <input type="text" placeholder="Search Courses here..." id="courseInput"
                                    onkeyup="filterFunction('course')" autoComplete="on" list="courses">
                                <div class="selectWrapper">
                                    <select id="courses" name="courses" class="form-control" onfocus='this.size=5;'
                                        onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                        <option value="null">...then select from this list</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['courses']->value, 'course');
$_smarty_tpl->tpl_vars['course']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->do_else = false;
?>
                                        <option value='<?php echo $_smarty_tpl->tpl_vars['course']->value['course_id'];?>
' onselect="select(this, school)">
                                            <?php echo $_smarty_tpl->tpl_vars['course']->value['course_name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                            <p id="courseTooltip">Can't find your course? <strong onclick="addCourse()">Add it
                                        here</strong>
                                </p>
                                <input style="display:none" type="text" id="add-course" name="add-course"
                                    placeholder="Add Course">
                                <button class="btn btn__light form-group-submit" type="submit">Next</button>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
