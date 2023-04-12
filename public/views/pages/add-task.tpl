{extends file="layouts/main.tpl"}
{block name="body"}
    {include file="components/error.tpl"}

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
                                {* both *}
                                <input type="text" id="title" name="title" placeholder="Item Name">
                                {* conditional statement *}
                                <div class="radio-group">
                                    <input type="radio" id="type_task" name="type_id" value="2" checked>
                                    <label for="login">Task</label><br>
                                    <input type="radio" id="type_event" name="type_id" value="1">
                                    <label for="signup">Event</label><br>
                                </div>
                                {* task *}
                                <label for="duedate" id="dueDateLabel">Due date:</label>
                                <input type="date" id="dueDate" name="due_date">
                                {* event *}
                                <label for="duedate" id="startLabel">Start Time and Date(date and time):</label>
                                <input type="datetime-local" id="start" name="start">
                                {* event *}
                                <label for="duedate" id="endLabel">End Time and Date (date and time):</label>
                                <input type="datetime-local" id="end" name="end">
                                {* both *}
                                <input type="textarea" id="description" name="description" placeholder="Description">
                                {* task *}
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
    {/block}

{*
//name
//type
//due-date
//description
//additional note
//priority
//status
//assigned to
//created by
//created date
//updated by
//updated date
*}