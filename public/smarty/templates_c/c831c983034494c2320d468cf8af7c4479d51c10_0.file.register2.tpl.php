<?php
/* Smarty version 4.2.1, created on 2023-03-14 15:18:28
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/register2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641090440e4559_88572690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c831c983034494c2320d468cf8af7c4479d51c10' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/register2.tpl',
      1 => 1678807106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641090440e4559_88572690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1744226076641090440db796_87643419', "body");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_1744226076641090440db796_87643419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1744226076641090440db796_87643419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container mb-5 navbar-spacing">
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
            <div class="alert alert-success" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

            </div>
        <?php }?>
        <div class="standalone-form">
            <div class="app-form col-md-10" id="app-form">
                <div id="step-1" class="step active">
                    <div class="image">
                        <img src="src/images/team.svg" alt="Girl studying" width="480" height="480">
                    </div>
                    <form id="registration" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <h2>Sign Up</h2><br>
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
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['school']->value['institution_name'];?>
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

                                <button class="btn btn__light form-group-submit" type="submit" name="register"
                                    value="1">Next</button>
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
