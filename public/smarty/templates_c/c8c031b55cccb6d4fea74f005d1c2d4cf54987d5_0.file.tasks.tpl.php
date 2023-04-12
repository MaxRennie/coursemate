<?php
/* Smarty version 4.2.1, created on 2023-03-28 16:21:44
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/tasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64231418541910_04246093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8c031b55cccb6d4fea74f005d1c2d4cf54987d5' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/tasks.tpl',
      1 => 1680020496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/error.tpl' => 1,
    'file:components/sidebar.tpl' => 1,
    'file:components/add-task.tpl' => 1,
  ),
),false)) {
function content_64231418541910_04246093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21985064964231418516e51_04132561', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_21985064964231418516e51_04132561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21985064964231418516e51_04132561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:components/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="tasks">
        <?php $_smarty_tpl->_subTemplateRender('file:components/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="content sidebar-included tasks maximised">
            <div class="row">
                <div class="col-12">
                    <div class="header">
                        <h2 class="header__title">Tasks</h2>
                    </div>
                </div>
            </div>
            <div class="row tasks__content">
                <div class="col-md-4 today task">
                    <div>
                        <div class="task__header">
                            <h4 class="task__header__title">Today's Tasks</h4>
                            </div>
                        </div>
                        <div class="task__body">
                            <div class="task__body__list">

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todaysTasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                                    <div class="task__body__list__item">
                                        <div class="task__body__list__item__title">
                                            <h5><?php echo $_smarty_tpl->tpl_vars['task']->value['title'];?>
</h5>
                                        </div>
                                        <div class="task__body__list__item__description">
                                            <p><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
</p>
                                        </div>
                                        <div class="task__body__list__item__date">
                                            <p><?php echo $_smarty_tpl->tpl_vars['task']->value['due_date'];?>
</p>
                                        </div> 
                                    <?php if ((isset($_smarty_tpl->tpl_vars['task']->value['priority'])) && $_smarty_tpl->tpl_vars['task']->value['priority'] == 1) {?>
                                            <div class="task__body__list__item__priority__low"></div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['task']->value['priority'] == 3) {?>
                                            <div class="task__body__list__item__priority__high"></div>
                                    <?php } else { ?>
                                            <div class="task__body__list__item__priority"></div>
                                    <?php }?>
                                    </div>
                                <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 tomorrow task">
                        <div>
                            <div class="task__header">
                                <h4 class="task__header__title">Tomorrow's Tasks</h4>
                            </div>
                            <div class="task__body">
                                <div class="task__body-list">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tomorrowsTasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                                        <div class="task__body__list__item">
                                            <div class="task__body__list__item__title">
                                                <h5><?php echo $_smarty_tpl->tpl_vars['task']->value['title'];?>
</h5>
                                            </div>
                                            <div class="task__body__list__item__description">
                                                <p><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
</p>
                                            </div>
                                            <div class="task__body__list__item__date">
                                                <p><?php echo $_smarty_tpl->tpl_vars['task']->value['due_date'];?>
</p>
                                            </div>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['task']->value['priority'])) && $_smarty_tpl->tpl_vars['task']->value['priority'] == 1) {?>
                                                <div class="task__body__list__item__priority__low"></div>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['task']->value['priority'] == 3) {?>
                                                <div class="task__body__list__item__priority__high"></div>
                                            <?php } else { ?>
                                                <div class="task__body__list__item__priority"></div>
                                            <?php }?>
                                        </div>
                                    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 other task">
                        <div class="split">
                            <div class="task__header">
                                <h4 class="task__header__title">This Week's Tasks</h4>
                                </div>
                                <div class="task__body">
                                    <div class="task__body__list">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['weekTasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                                            <div class="task__body__list__item">
                                                <div class="task__body__list__item__title">
                                                    <h5><?php echo $_smarty_tpl->tpl_vars['task']->value['title'];?>
</h5>
                                                </div>
                                                <div class="task__body__list__item__description">
                                                    <p><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
</p>
                                                </div>
                                                <div class="task__body__list__item__date">
                                                    <p><?php echo $_smarty_tpl->tpl_vars['task']->value['due_date'];?>
</p>
                                                </div>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['task']->value['priority'])) && $_smarty_tpl->tpl_vars['task']->value['priority'] == 1) {?>
                                                    <div class="task__body__list__item__priority__low"></div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['task']->value['priority'] == 3) {?>
                                                    <div class="task__body__list__item__priority__high"></div>
                                        <?php } else { ?>
                                                    <div class="task__body__list__item__priority"></div>
                                        <?php }?>
                                            </div>
                                    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

                                    </div>
                                </div>
                            </div>
                            <div class="split">
                                <div class="task__header">
                                    <h4 class="task__header__title">What are three things you’re grateful for today?</h4>
                                </div>
                                <div class="task__body">
                                    <div class="task__body__list">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todaysTasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                                            <div class="task__body__list__item">
                                                <div class="task__body__list__item__title">
                                                    <h5><?php echo $_smarty_tpl->tpl_vars['task']->value['title'];?>
</h5>
                                                </div>
                                                <div class="task__body__list__item__description">
                                                    <p><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
</p>
                                                </div>
                                                <div class="task__body__list__item__date">
                                                    <p><?php echo $_smarty_tpl->tpl_vars['task']->value['due_date'];?>
</p>
                                                </div>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['task']->value['priority'])) && $_smarty_tpl->tpl_vars['task']->value['priority'] == 1) {?>
                                                    <div class="task__body__list__item__priority__low"></div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['task']->value['priority'] == 3) {?>
                                                    <div class="task__body__list__item__priority__high"></div>
                                        <?php } else { ?>
                                                    <div class="task__body__list__item__priority"></div>
                                        <?php }?>
                                            </div>
                                    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:components/add-task.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php
}
}
/* {/block "body"} */
}
