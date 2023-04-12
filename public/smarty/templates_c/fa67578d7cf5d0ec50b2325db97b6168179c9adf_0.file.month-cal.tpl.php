<?php
/* Smarty version 4.2.1, created on 2023-02-25 15:02:21
  from '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/month-cal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63fa22fd058be8_76370007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa67578d7cf5d0ec50b2325db97b6168179c9adf' => 
    array (
      0 => '/Users/maxrennie/Local Sites/CourseMate/app/public/views/pages/month-cal.tpl',
      1 => 1677337044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fa22fd058be8_76370007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3522873563fa22fd0570a4_77353683', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_3522873563fa22fd0570a4_77353683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3522873563fa22fd0570a4_77353683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        

    
    <?php echo '<?php'; ?>

    include 'Calendar.php';
    $calendar = new Calendar('2021-02-02');
    $calendar->add_event('Birthday', '2021-02-03', 1, 'green');
    $calendar->add_event('Doctors', '2021-02-04', 1, 'red');
    $calendar->add_event('Holiday', '2021-02-16', 7);
    <?php echo '?>'; ?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Event Calendar</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="calendar.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <nav class="navtop">
            <div>
                <h1>Event Calendar</h1>
            </div>
        </nav>
        <div class="content home">
            <?php echo '<?'; ?>
=$calendar<?php echo '?>'; ?>

        </div>
    </body>

    </html>
<?php
}
}
/* {/block "body"} */
}
