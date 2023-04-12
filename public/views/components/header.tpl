<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/a832d2a005.js" crossorigin="anonymous"></script>
    <title>CourseMate</title>
</head>

<body id="page--{$view_name}">
    <nav class="navbar navbar-expand-md navbar-custom">
    {if $user_data && $user_data.user_image != null}
        <a class="navbar-brand" href="/tasks"><img src="src/images/logo/coursemate_logo_long_white.svg" alt="CourseMate"
        height="20px"></a>
        {else}
            <a class="navbar-brand" href="index.php"><img src="src/images/logo/coursemate_logo_long_white.svg"
            alt="CourseMate" height="20px"></a>
        {/if}

        <div class="collapse navbar-collapse" id="navbar">
            <div class="input-group search">
                <form action="/search" method="post" class="form-control">
                    <input class="form-control text-input mr-sm-2" type="search" placeholder="Search"
                        aria-label="Search" name="query">
                    <button class="btn border-bottom-0 rounded-pill ms-n5" type="submit"><i class="fa fa-search"
                            alt="search"></i></i></button>
                </form>
            </div>
        </div>
        <ul class="nav navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="src/images/notification-icon.svg" alt="Notifications"
                        width="20px" height="20px"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/settings"><img src="src/images/settings-icon.svg" alt="Settings" width="20px"
                        height="20px"></a>
            </li>

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