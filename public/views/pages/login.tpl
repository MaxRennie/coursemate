{extends file="layouts/main.tpl"}
{block name="body"}
    {include file="components/error.tpl"}

    {* //TODO: Add padding above the form *}
    <div class="login">
        <div class="col-12 col-md-6 form-container">
            <div class="app-form col-md-10" id="app-form">

                <div class="image">
                    <img src="src/images/team.svg" alt="Girl studying" width="480" height="480">
                </div>
                <form id="home-form" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">

                        <div class="selector">
                            <div class="selector-item">
                                <input type="radio" id="login" value="login" name="type" class="selector-item__radio"
                                    checked>
                                <label for="login" class="selector-item__label">Login</label>
                            </div>
                            <div class="selector-item">
                                <input type="radio" id="signup" value="signup" name="type" class="selector-item__radio">
                                <label for="signup" class="selector-item__label">Sign Up</label>
                            </div>
                        </div>
                        <input type="text" id="email" name="email" placeholder="Email">
                        <input type="password" id="password" name="password" placeholder="Password" autocomplete="password">
                        <input class="btn btn__light form-group-submit" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

{/block}