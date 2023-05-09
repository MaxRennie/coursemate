<div class="sidebar minimised" id="NavAnchor">
    {* // TODO: Add animation to Sidebar *}
    <div class="sidebar__content">
        <div class="sidebar__header">
            {* //TODO: Change to current month *}
            <h2 class="sidebar__title">Events</h2>
        </div>
        <div class="sidebar__body">
            <div class="sidebar__list">
            {if $view_name == 'calendar'}
                <div class="sidebar__list-item" id="dayViewBtn">
                    {* //TODO: Add Icon *}
                    <span>Today</span>
                </div>
                <div class="sidebar__list-item" id="weekViewBtn">
                    {* //TODO: Add Icon *}
                    <span>This Week</span>
                </div>
            {/if}
                <div class="sidebar__list-item" id="monthViewBtn">
                    {* //TODO: Add Icon *}
                    <a href="/calendar">This Month</a>
                </div>
                <div class="sidebar__list-item">
                    {* //TODO: Change to task view *}
                    {* //TODO: Add Icon *}
                    <a href="/tasks">Tasks</a>
                </div>
                <div class="sidebar__list-item">
                    {* //TODO: Add Icon *}
                    {* //TODO: Change to Course View *}
                    <a href="/account">Statistics</a>
                </div>
            </div>
        </div>
        <div class="sidebar__button" onclick="toggleSideNav()">
        </div>
    </div>
</div>