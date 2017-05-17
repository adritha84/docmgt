<?php
/* Smarty version 3.1.30, created on 2017-04-07 14:40:54
  from "C:\xampp\htdocs\App\templates\edit-document.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e788d6300a47_74272222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6f71e7b7633f1a1509ba2ea289fef4d54159871' => 
    array (
      0 => 'C:\\xampp\\htdocs\\App\\templates\\edit-document.tpl',
      1 => 1491568827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e788d6300a47_74272222 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a id="<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
" class="doc-delete-btn">
                <img src="http://localhost/App/Assets/img/delete.png">
            </a>
            <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['u_id'] == $_smarty_tpl->tpl_vars['doc']->value['u_id']) {?>
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

    <form id='edit-doc-form'>
        <input id='doc-id-input' value="<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
" type='hidden' name='id'>
        <div class='row'>
            <div class='col'>
                Data:
            </div>
            <div class='col'>
                <input name='date' type="text" id="doc-datepicker" value="<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_registration_date'];?>
"></input>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                Status:
            </div>
            <div class='col'>
                <select name='status'>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statuses']->value, 'status');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['doc']->value['s_title'];
$_prefixVariable1=ob_get_clean();
if ($_smarty_tpl->tpl_vars['status']->value['s_title'] == $_prefixVariable1) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['s_id'];?>
" selected=""><?php echo $_smarty_tpl->tpl_vars['status']->value['s_title'];?>
</option>
                        <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['s_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value['s_title'];?>
</option>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                Tip:
            </div>
            <div class='col'>
                <select name='category'>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['doc']->value['c_title'];
$_prefixVariable2=ob_get_clean();
if ($_smarty_tpl->tpl_vars['cat']->value['c_title'] == $_prefixVariable2) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['c_id'];?>
" selected=""><?php echo $_smarty_tpl->tpl_vars['cat']->value['c_title'];?>
</option>
                        <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['c_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['c_title'];?>
</option>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                Mesaj:
            </div>
            <div class='col'>
                <textarea rows="10" cols="50" name="message"><?php echo $_smarty_tpl->tpl_vars['doc']->value['d_message'];?>
</textarea>           
            </div>
        </div>

        
    </form>
    <button id='doc-edit-btn'>Save</button>
</div>


</body> 
<?php echo '<script'; ?>
 src='http://localhost/App/Assets/js/auth.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='http://localhost/App/Assets/js/doc.js'><?php echo '</script'; ?>
>
</html><?php }
}
