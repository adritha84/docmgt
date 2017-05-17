<?php
/* Smarty version 3.1.30, created on 2017-04-07 15:00:30
  from "C:\xampp\htdocs\App\templates\view-document.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e78d6e8b2299_70512469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cc03432fef144621bf43151ac7a97f1c8d9ea98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\App\\templates\\view-document.tpl',
      1 => 1491568821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e78d6e8b2299_70512469 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/black-tie/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/App/assets/css/style.css">
    <?php echo '<script'; ?>
 src="//mozilla.github.io/pdf.js/build/pdf.js"><?php echo '</script'; ?>
>
</head>
<body>  

<div id='top'>

    <!-- Logo -->
    <div id='logo'>
        &#x2610; Document Management WebApp 
    </div>

    <!-- Navigation -->
    <div id='nav'>
        <a href='http://localhost/'>Dashboard</a>
        <?php if ($_smarty_tpl->tpl_vars['user']->value['u_role_id'] == 2) {?>
        <a href='http://localhost/users'>Users</a>
        <?php }?>
    </div>

    <!-- User -->
    <div id='user'>

        <!-- User Image -->
        <div id='user-image' src='http://localhost/App/Assets/img/user.png'>
            <img src='http://localhost/App/Assets/img/user.png'>

            <!-- User Options -->
            <ul id='user-options'>
                <li><a href="http://localhost/account/">My Account</a></li>
                <li><a id='logout-btn'>Logout</a></li>
            </ul>
        </div>

        <!-- User Name -->
        <div id='user-name'>
            <?php echo $_smarty_tpl->tpl_vars['user']->value['u_fullname'];?>

        </div>
    </div>
</div>

    
<div class='container'>

    <div class='container-header'>

        <div class='container-title'>
            <?php echo $_smarty_tpl->tpl_vars['doc']->value['d_title'];?>


        </div>

        <!-- Actions -->
        <div class='container-actions'>
            <a onclick="window.history.back()">
                <img src="http://localhost/App/Assets/img/back.png">
            </a>
            <?php if ($_smarty_tpl->tpl_vars['user']->value['u_role_id'] == 2) {?>
            <a href="http://localhost/document/edit/<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
">
                <img src="http://localhost/App/Assets/img/edit.png">
            </a>
            <a id="<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
" class="doc-delete-btn">
                <img src="http://localhost/App/Assets/img/delete.png">
            </a>
            <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['u_id'] == $_smarty_tpl->tpl_vars['doc']->value['u_id']) {?>
                <a href="http://localhost/document/edit/<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
">
                    <img src="http://localhost/App/Assets/img/edit.png">
                </a>
                <a id="<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
" class="doc-delete-btn">
                    <img src="http://localhost/App/Assets/img/delete.png">
                </a>
            <?php }?>
            <a href="http://localhost/document/file/<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
">
                <img src="http://localhost/App/Assets/img/print.png">
            </a>
        </div> 

    </div>
       

    <div class='row'>
        <div class='col'>
            Numar:
        </div>
        <div class='col'>
            <?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>

        </div>
    </div>
    <div class='row'>
        <div class='col'>
            Data:
        </div>
        <div class='col'>
            <?php echo $_smarty_tpl->tpl_vars['doc']->value['d_registration_date'];?>

        </div>
    </div>
    <div class='row'>
        <div class='col'>
            Autor:
        </div>
        <div class='col'>
            <?php echo $_smarty_tpl->tpl_vars['doc']->value['u_fullname'];?>

        </div>
    </div>
    <div class='row'>
        <div class='col'>
            Status:
        </div>
        <div class='col'>
            <?php echo $_smarty_tpl->tpl_vars['doc']->value['s_title'];?>

        </div>
    </div>
    <div class='row'>
        <div class='col'>
            Tip:
        </div>
        <div class='col'>
            <?php echo $_smarty_tpl->tpl_vars['doc']->value['c_title'];?>

        </div>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['doc']->value['d_message'])) {?>
    <div class='row'>
        <div class='col'>
            Mesaj:
        </div>
        <div class='col'>
            <?php echo $_smarty_tpl->tpl_vars['doc']->value['d_message'];?>

        </div>
    </div>
    <?php }?>
    
</div>




<div id="doc-file" data-doc-file-id="<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
">

</id>


</body> 
<?php echo '<script'; ?>
 src='http://localhost/App/Assets/js/auth.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='http://localhost/App/Assets/js/doc.js'><?php echo '</script'; ?>
>

</html><?php }
}
