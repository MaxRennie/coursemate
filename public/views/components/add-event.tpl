<div id="calendarPopout" class="lity-hide">
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
                        <input type="hidden" id="hdnSession" value="{$user_data.user_id}" />
                        <textarea id="calendarDescription" name="description" placeholder="Description"></textarea>
                        <input class="btn btn__light form-group-submit" type="submit" name="calendar-submit"
                            id="calendarSubmit" value="Create Event">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>