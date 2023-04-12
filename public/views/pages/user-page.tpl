{extends file="layouts/main.tpl"}
{block name="body"}
    {include file="components/error.tpl"}

    <div class="btn-group mb-3" role="group" aria-label="Account menu">
        <a href="./account" class="btn btn-secondary">Home</a>
        <a href="./favourite" class="btn btn-secondary">Favourites</a>
        <a href="./beersnbars" class="btn btn-secondary">My Beers and Bars</a>
        <a href="./addBeer" class="btn btn-secondary">Add Beer</a>
        <a href="./addBar" class="btn btn-secondary">Add Bar</a>
        <a href="./changepassword" class="btn btn-secondary">Change Password</a>
    </div>

{{/block}}