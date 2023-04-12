<?php
/* Smarty version 4.2.1, created on 2023-03-28 15:36:41
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64230989773930_97826545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9efec45de9781fb17ffd1865cc3d666f8feb40e' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/home.tpl',
      1 => 1680017777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/error.tpl' => 1,
  ),
),false)) {
function content_64230989773930_97826545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21260070806423098976d511_25508305', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_21260070806423098976d511_25508305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21260070806423098976d511_25508305',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:components/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <div class="home">
        <div class="hero">
        </div>
        <div class="container">
            <div class="row-div row ">
                <div class="col-12 col-md-6">
                    <div class="hero-block">
                        <h1>Hi, it’s CourseMate</h1>
                        <h4>CourseMate helps you organise your time and make the most of University, both when
                            you’re in
                            and when you’re out-out</h4>
                    </div>
                    <div class="content-block text-block">
                        <h3>Say ‘bye’ to the stress from uni</h3>
                        <p>University is a difficult time, you’ve got so much to balance - work, studying, exams,
                            partying and play. You need something to lessen the pressure and help you drop a few of
                            those worries.
                        </p>
                    </div>
                    <div class="content-block image-block">
                        <img src="src/images/studying.svg" alt="Girl studying" width="480" height="480">
                    </div>
                    <div class="content-block text-block">
                        <h3>Say ‘hi’ to having it all planned out</h3>
                        <p>That’s why we made CourseMate. You won’t have to work out when you should be revising, or how many words you should be writing a week, all you’ve got to do is stick to your schedule and live your best life.
                        </p>
                    </div>
                    <div class="content-block image-block">
                                            <img src="src/images/graduation.svg" alt="Graduation Graphic" width="500" height="204">
                    </div>
                    <div class="content-block text-block">
                        <h3>Let CourseMate help you out</h3>
                        <p>CourseMate organises your time effectively - taking into account your mates, your hobbies and all the things you love. We’ll stop you leaving it until last minute and using your time unproductively.<p>
                    </div>
                </div>

                <div class="col-12 col-md-6 form-container" style="">
                    <div class="app-form col-md-10" id="app-form">

                        <div class="image">
                            <img src="src/images/team.svg" alt="Girl studying" width="480" height="480">
                        </div>
                        <form id="home-form" method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="radio-group">
                                    <input type="radio" id="login" name="type" value="login" checked>
                                    <label for="login" ng-click="radioSelect(login)">Login</label><br>
                                    <input type="radio" id="signup" name="type" value="signup">
                                    <label for="signup" ng-click="radioSelect(signup)">Sign Up</label><br>
                                </div>
                                <input type="text" id="email" name="email" placeholder="Email">
                                <input type="password" id="password" name="password" placeholder="Password">
                                <input class="btn btn__light form-group-submit" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="icon-carousel">
                    <ul>
                        <li>
                            <div class="icon-bg">
                                <img src="src/images/effort.svg" alt="effort" width="100" height="100">
                            </div>
                            <p>Make the most of your time</p>
                        </li>
                        <li>
                            <div class="icon-bg">
                                <img src="src/images/graduate.svg" alt="Graduate" width="100" height="100">
                            </div>
                            <p>Get organised</p>
                        </li>
                        <li>
                            <div class="icon-bg">
                                <img src="src/images/happy.svg" alt="happy" width="100" height="100">
                            </div>
                            <p>Worry less</p>
                        </li>
                        <li>
                            <div class="icon-bg">
                                <img src="src/images/time.svg" alt="time" width="100" height="100">
                            </div>
                            <p>Do your best</p>
                        </li>
                        <li>
                            <div class="icon-bg">
                                <img src="src/images/files.svg" alt="files" width="100" height="100">
                            </div>
                            <p>Achieve your best</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="footer-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <img class="short-logo" src="src/images/logo/coursemate_logo_short_white.svg">
                    </div>

                    <div class="footer-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <ul class="contact">
                            <li>
                                <a href="#">Home</a>
                            </li>

                            <li>
                                <a href="#">Calendar</a>
                            </li>

                            <li>
                                <a href="#">Taskboard</a>
                            </li>

                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-col col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <form class="newsletter">
                            <input type="email" id="newsletterEmail" name="newsletterEmail" placeholder="Email">
                            <input class="btn btn__light" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    <?php
}
}
/* {/block "body"} */
}
