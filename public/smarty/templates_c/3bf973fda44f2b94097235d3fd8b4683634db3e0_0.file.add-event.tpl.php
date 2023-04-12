<?php
/* Smarty version 4.2.1, created on 2023-03-31 10:23:33
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/components/add-event.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6426b4a5452fa1_82359924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bf973fda44f2b94097235d3fd8b4683634db3e0' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/components/add-event.tpl',
      1 => 1680258210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6426b4a5452fa1_82359924 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="calendarPopout" class="lity-hide">
    <div class="app-form col-md-10" id="add-item-form">
        <div class="row form-row">
            <div class="col-md-6 graphic">
                <div class="graphic__image">
                    <img src="src/images/team.svg" alt="Girl studying">
                </div>
                <div class="graphic__text">
                    <h2 class="graphic__title">Add Event</h2>
                    <p class="graphic__description">Add a new event to your calendar.</p>
                </div>
            </div>
            <div class="col-md-6">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" id="calendarTitle" name="title" placeholder="Item Name">
                        <label for="start" id="startLabel" style="display:none;">Start Time and Date(date and
                            time):</label>
                        <input type="datetime-local" id="calendarStart" name="start">
                        <label for="end" id="endLabel" style="display:none;">End Time and Date (date and time):</label>
                        <input type="datetime-local" id="calendarEnd" name="end">
                        <input type="hidden" id="hdnSession" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_id'];?>
" />
                        <textarea id="calendarDescription" name="description" placeholder="Description"></textarea>
                        <input class="btn btn__light form-group-submit" type="submit" name="calendar-submit"
                            id="calendarSubmit" value="Create Event">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
