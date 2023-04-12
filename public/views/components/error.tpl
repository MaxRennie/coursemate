{if $error}
    <div class="alert alert-danger mb-0" role="alert">
        {$error}
    </div>
{else if $success}
    <div class="alert alert-success mb-0" role="alert">
        {$success}
    </div>
{/if}