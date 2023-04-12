<?php
/* Smarty version 4.2.1, created on 2023-03-28 15:42:51
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/components/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64230afb703745_65315194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46923bdbc4b43455829098ca9c3d667a560887cf' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/components/header.tpl',
      1 => 1680018170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64230afb703745_65315194 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a832d2a005.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <title>CourseMate</title>
</head>

<body id="page--<?php echo $_smarty_tpl->tpl_vars['view_name']->value;?>
">
    <nav class="navbar navbar-expand-md navbar-custom">
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value && $_smarty_tpl->tpl_vars['user_data']->value['user_image'] != null) {?>
        <a class="navbar-brand" href="/tasks"><img src="src/images/logo/coursemate_logo_long_white.svg" alt="CourseMate"
        height="20px"></a>
        <?php } else { ?>
            <a class="navbar-brand" href="index.php"><img src="src/images/logo/coursemate_logo_long_white.svg"
            alt="CourseMate" height="20px"></a>
        <?php }?>

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
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value && $_smarty_tpl->tpl_vars['user_data']->value['user_image'] != null) {?>
                    <a class="nav-link user-pp" href="/account"><img src="user-images/<?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['user_image'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"
                            alt="Profile" width="40px" height="40px"></a>
                    <ul>
                        <li class="sub-item" href="/logout">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <p>Logout</p>
                        </li>
                    </ul>
                <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value && $_smarty_tpl->tpl_vars['user_data']->value['user_image'] == null) {?>
                    <a class="nav-link" href="/account"><img src="src/images/profile.svg" alt="Profile" width="40px"
                            height="40px"></a>
                    <ul>
                        <li class="sub-item" href="/logout">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <p>Logout</p>
                        </li>
                    </ul>
                <?php } else { ?>
                    <a class="nav-link" href="/register"><img src="src/images/profile.svg" alt="Profile" width="40px"
                            height="40px"></a>
                <?php }?>
        </ul>
</nav><?php }
}
