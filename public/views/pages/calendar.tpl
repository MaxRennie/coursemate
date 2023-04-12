{extends file="layouts/main.tpl"}

{block name="body"}
    {include file="components/error.tpl"}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
    <div class="calendar">
       {include file="components/sidebar.tpl"}
        <div id="calendar" class="sidebar-included maximised"></div>
    </div>
    {include file='components/add-task.tpl'}
    {include file='components/add-event.tpl'}

{/block}