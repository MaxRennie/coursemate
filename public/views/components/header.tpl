<body id="page--{$view_name}">
    <nav class="navbar navbar-expand-md navbar-custom">
    {if $user_data && $user_data.user_image != null}
        <a class="navbar-brand" href="/tasks"><img src="src/images/logo/coursemate_logo_long_white.svg" alt="CourseMate"
        height="20px"></a>
        {else}
            <a class="navbar-brand" href="index.php"><img src="src/images/logo/coursemate_logo_long_white.svg"
            alt="CourseMate" height="20px"></a>
        {/if}
        <ul class="nav navbar-nav ms-auto">
            <li class="nav-item profile">
                {if $user_data && $user_data.user_image != null}
                    <a class="nav-link user-pp" href="/account"><img src="user-images/{{$user_data.user_image}}"
                            alt="Profile" width="40px" height="40px"></a>
                    <ul>
                        <li class="sub-item" href="/logout">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <p>Logout</p>
                        </li>
                    </ul>
                {elseif $user_data && $user_data.user_image == null}
                    <a class="nav-link" href="/account"><img src="src/images/profile.svg" alt="Profile" width="40px"
                            height="40px"></a>
                    <ul>
                        <li class="sub-item" href="/logout">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <p>Logout</p>
                        </li>
                    </ul>
                {else}
                    <a class="nav-link" href="/register"><img src="src/images/profile.svg" alt="Profile" width="40px"
                            height="40px"></a>
                {/if}
        </ul>
</nav>