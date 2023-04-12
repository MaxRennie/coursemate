{extends file="layouts/main.tpl"}
{block name="body"}
    {include file="components/error.tpl"}

    <div class="tasks">
        {include file='components/sidebar.tpl'}
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

                                {foreach from=$todaysTasks item=task}
                                    <div class="task__body__list__item">
                                        <div class="task__body__list__item__title">
                                            <h5>{$task.title}</h5>
                                        </div>
                                        <div class="task__body__list__item__description">
                                            <p>{$task.description}</p>
                                        </div>
                                        <div class="task__body__list__item__date">
                                            <p>{$task.due_date}</p>
                                        </div> 
                                    {if isset($task.priority) && $task.priority == 1}
                                            <div class="task__body__list__item__priority__low"></div>
                                    {elseif $task.priority == 3}
                                            <div class="task__body__list__item__priority__high"></div>
                                    {else}
                                            <div class="task__body__list__item__priority"></div>
                                    {/if}
                                    </div>
                                {{/foreach}}
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
                                    {foreach from=$tomorrowsTasks item=task}
                                        <div class="task__body__list__item">
                                            <div class="task__body__list__item__title">
                                                <h5>{$task.title}</h5>
                                            </div>
                                            <div class="task__body__list__item__description">
                                                <p>{$task.description}</p>
                                            </div>
                                            <div class="task__body__list__item__date">
                                                <p>{$task.due_date}</p>
                                            </div>
                                            {if isset($task.priority) && $task.priority == 1}
                                                <div class="task__body__list__item__priority__low"></div>
                                            {elseif $task.priority == 3}
                                                <div class="task__body__list__item__priority__high"></div>
                                            {else}
                                                <div class="task__body__list__item__priority"></div>
                                            {/if}
                                        </div>
                                    {{/foreach}}
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
                                        {foreach from=$weekTasks item=task}
                                            <div class="task__body__list__item">
                                                <div class="task__body__list__item__title">
                                                    <h5>{$task.title}</h5>
                                                </div>
                                                <div class="task__body__list__item__description">
                                                    <p>{$task.description}</p>
                                                </div>
                                                <div class="task__body__list__item__date">
                                                    <p>{$task.due_date}</p>
                                                </div>
                                        {if isset($task.priority) && $task.priority == 1}
                                                    <div class="task__body__list__item__priority__low"></div>
                                        {elseif $task.priority == 3}
                                                    <div class="task__body__list__item__priority__high"></div>
                                        {else}
                                                    <div class="task__body__list__item__priority"></div>
                                        {/if}
                                            </div>
                                    {{/foreach}}
                                    </div>
                                </div>
                            </div>
                            <div class="split">
                                <div class="task__header">
                                    <h4 class="task__header__title">What are three things you’re grateful for today?</h4>
                                </div>
                                <div class="task__body">
                                    <div class="task__body__list">
                                    {foreach from=$todaysTasks item=task}
                                            <div class="task__body__list__item">
                                                <div class="task__body__list__item__title">
                                                    <h5>{$task.title}</h5>
                                                </div>
                                                <div class="task__body__list__item__description">
                                                    <p>{$task.description}</p>
                                                </div>
                                                <div class="task__body__list__item__date">
                                                    <p>{$task.due_date}</p>
                                                </div>
                                        {if isset($task.priority) && $task.priority == 1}
                                                    <div class="task__body__list__item__priority__low"></div>
                                        {elseif $task.priority == 3}
                                                    <div class="task__body__list__item__priority__high"></div>
                                        {else}
                                                    <div class="task__body__list__item__priority"></div>
                                        {/if}
                                            </div>
                                    {{/foreach}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{include file='components/add-task.tpl'}

        {/block}