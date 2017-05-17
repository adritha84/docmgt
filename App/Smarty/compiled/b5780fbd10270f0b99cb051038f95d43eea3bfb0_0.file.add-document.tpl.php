<?php
/* Smarty version 3.1.30, created on 2017-04-07 14:52:07
  from "C:\xampp\htdocs\App\templates\add-document.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e78b77714be7_57995459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5780fbd10270f0b99cb051038f95d43eea3bfb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\App\\templates\\add-document.tpl',
      1 => 1491568845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e78b77714be7_57995459 (Smarty_Internal_Template $_smarty_tpl) {
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

        <!-- Title -->
        <div class='container-title'>Add Document</div>

        <!-- Actions -->
        <div class='container-actions'>
            <a onclick="window.history.back()">
                <img src="http://localhost/App/Assets/img/back.png">
            </a>
        </div> 

</div>

<form id='add-doc-form'>
    <div class='row'>
            <div class='col'>
                File
            </div>
            <div class='col'>
                <input type="file" name="file">
            </div>
        </div>

    <div class='row'>
            <div class='col'>
                Titlu:
            </div>
            <div class='col'>
                <input name='title' type="text"></input>
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
                        <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['s_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value['s_title'];?>
</option>
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
$_prefixVariable1=ob_get_clean();
if ($_smarty_tpl->tpl_vars['cat']->value['c_title'] == $_prefixVariable1) {?>
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
                <textarea rows="10" cols="50" name="message"></textarea>           
            </div>
        </div>

        <button id='doc-add-btn'>Add</button>
    </form>
   
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
