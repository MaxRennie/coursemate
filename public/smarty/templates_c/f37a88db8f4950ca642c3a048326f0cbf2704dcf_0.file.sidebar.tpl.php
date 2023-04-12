<?php
/* Smarty version 4.2.1, created on 2023-04-05 11:27:11
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/components/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642d5b0fc909d5_65305660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f37a88db8f4950ca642c3a048326f0cbf2704dcf' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/components/sidebar.tpl',
      1 => 1680690335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642d5b0fc909d5_65305660 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sidebar minimised" id="NavAnchor">
        <div class="sidebar__content">
        <div class="sidebar__header">
                        <h2 class="sidebar__title">Events</h2>
        </div>
        <div class="sidebar__body">
            <div class="sidebar__list">
            <?php if ($_smarty_tpl->tpl_vars['view_name']->value == 'calendar') {?>
                <div class="sidebar__list-item" id="dayViewBtn">
                                        <span>Today</span>
                </div>
                <div class="sidebar__list-item" id="weekViewBtn">
                                        <span>This Week</span>
                </div>
            <?php }?>
                <div class="sidebar__list-item" id="monthViewBtn">
                                        <a href="/calendar">This Month</a>
                </div>
                <div class="sidebar__list-item">
                                                            <a href="/tasks">Tasks</a>
                </div>
                <div class="sidebar__list-item">
                                                            <a href="/statistics">Statistics</a>
                </div>
            </div>
        </div>
        <div class="sidebar__button" onclick="toggleSideNav()">
        </div>
    </div>
</div><?php }
}
