{extends file="layouts/main.tpl"}
{block name="body"}
    {include file="components/error.tpl"}

    <h1 class="mb-4 pb-2">My Account</h1>
    <div class="btn-group mb-3" role="group" aria-label="Account menu">
        <a href="./account" class="btn btn-secondary">Home</a>
        <a href="./favourite" class="btn btn-secondary">Favourites</a>
        <a href="./beersnbars" class="btn btn-secondary">My Beers and Bars</a>
        <a href="./addBeer" class="btn btn-secondary">Add Beer</a>
        <a href="./addBar" class="btn btn-secondary">Add Bar</a>
        <a href="./changepassword" class="btn btn-secondary">Change Password</a>
    </div>
    {if $error}
        <div class="alert alert-danger mb-3" role="alert">
            {$error}
        </div>
    {else if $success}
        <div class="alert alert-success mb-3" role="alert">
            {$success}
        </div>
    {/if}

    <form action="" method="post">
        <div class="form-group">
            <label for="currentPassword">Current Password</label>
            <input type="password" class="form-control" id="currentPassword" name="currentPassword">
        </div>
        <div class="form-group">
            <label for="newPassword">New Password</label>
            <input type="password" class="form-control" id="newPassword" name="newPassword">
        </div>
        <div class="form-group">
            <label for="new_password_confirm">New Password</label>
            <input type="password" class="form-control" id="new_password_confirm" name="new_password_confirm">
        </div>
        <button type="submit" class="btn btn-primary">Change password</button>
    </form>

{/block}