<a id="popoutButton" href="#itemPopout">
    <i class="fa-solid fa-2x fa-plus"></i>
</a>
<div id="itemPopout" class="lity-hide">
    <div class="app-form col-md-10" id="add-item-form">
        <div class="row form-row">
            <div class="col-md-6 graphic">
                <div class="graphic__image">
                    <img src="src/images/team.svg" alt="Girl studying">
                </div>
                <div class="graphic__text">
                    <h2 class="graphic__title">Add Item</h2>
                    <p class="graphic__description">Add a new item to your list.</p>
                </div>
            </div>
            <div class="col-md-6">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        {* both *}
                        <input type="text" id="title" name="title" placeholder="Item Name">
                        {* conditional statement *}
                        <div class="radio-group">
                            <div class="radio-pair">
                                <input type="radio" id="type_task" name="type_id" value="2" checked>
                                <label for="type_task">Task</label><br>
                            </div>
                            <div class="radio-pair">
                                <input type="radio" id="type_event" name="type_id" value="1">
                                <label for="type_event">Event</label><br>
                            </div>
                        </div>
                        {* task *}
                        <label for="duedate" id="dueDateLabel">Due date:</label>
                        <input type="date" id="dueDate" name="due_date">
                        {* event *}
                        <label for="start" id="startLabel" style="display:none;">Start Time and Date(date and
                            time):</label>
                        <input type="datetime-local" id="start" name="start" style="display:none;">
                        {* event *}
                        <label for="end" id="endLabel" style="display:none;">End Time and Date (date and time):</label>
                        <input type="datetime-local" id="end" name="end" style="display:none;">
                        {* both *}
                        {* <input type="textarea" id="description" name="description" placeholder="Description"> *}
                        <textarea id="description" name="description" placeholder="Description"></textarea>
                        {* task *}
                        <div class="radio-group" id="priority">
                            <div class="radio-pair">
                                <input type="radio" name="priority" id="priority_lo" value="1">
                                <label for="login">Low</label><br>
                            </div>
                            <div class="radio-pair">
                                <input type="radio" name="priority" id="priority_med" value="2" checked>
                                <label for="signup">Medium</label><br>
                            </div>
                            <div class="radio-pair">
                                <input type="radio" name="priority" id="priority_hi" value="3" checked>
                                <label for="signup">High</label><br>
                            </div>
                        </div>
                        <input class="btn btn__light form-group-submit" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>