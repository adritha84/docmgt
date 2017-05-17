<?php
/* Smarty version 3.1.30, created on 2017-04-07 15:00:05
  from "C:\xampp\htdocs\App\templates\dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e78d558e3438_48741119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d6d6c7d08ee002064e887fbb23345f7a8220437' => 
    array (
      0 => 'C:\\xampp\\htdocs\\App\\templates\\dashboard.tpl',
      1 => 1491570001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e78d558e3438_48741119 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" type="text/css" href="App/assets/css/style.css">
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
        <div id='user-image' src='App/Assets/img/user.png'>
            <img src='App/Assets/img/user.png'>

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


<div id="page-header">
    Documents
    <a href='http://localhost/document/add'>Add</a>
</div>


<!-- DOCUMENTS -->
<table id='documents'>
    <tr>
        <th> N.I. </th> 
        <th> Data Inregistrarii </th>   
        <th> Titlu </th> 
        <th> Autor </th>  
        <th> Status </th>
        <th> Tip </th>
        <th> View </th>
        <th> Edit </th>
        <th> Delete </th>
        <th> Print </th>
    </tr>
    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['docs']->value, 'doc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['doc']->value) {
?>
            <tr data-doc-id="<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
">
    			<td> <?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['doc']->value['d_registration_date'];?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['doc']->value['d_title'];?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['doc']->value['u_fullname'];?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['doc']->value['s_title'];?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['doc']->value['c_title'];?>
 </td>
               
                <td> 
                    <a href="http://localhost/document/view/<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
">
                        <img src="App/Assets/img/view.png">
                    </a>
                </td>

                <?php if ($_smarty_tpl->tpl_vars['user']->value['u_role_id'] == 2) {?>
                <td>
                    <a href="http://localhost/document/edit/<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
">
                        <img src="App/Assets/img/edit.png">
                    </a>
                </td>
                <td>
                    <a id="<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
" class="doc-delete-btn">
                        <img src="App/Assets/img/delete.png">
                    </a>
                </td>
                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['u_id'] == $_smarty_tpl->tpl_vars['doc']->value['u_id']) {?>
                <td>
                    <a href="http://localhost/document/edit/<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
">
                        <img src="App/Assets/img/edit.png">
                    </a>
                </td>
                <td>
                    <a id="<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
" class="doc-delete-btn">
                        <img src="App/Assets/img/delete.png">
                    </a>
                </td>
                <?php } else { ?>
                    <td>-</td>
                    <td>-</td>

                <?php }?>
                <td>
                    <a href="http://localhost/document/file/<?php echo $_smarty_tpl->tpl_vars['doc']->value['d_id'];?>
">
                        <img src="http://localhost/App/Assets/img/print.png">
                    </a> 
                </td>
            </tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>	
<?php echo '<script'; ?>
 src='App/Assets/js/auth.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='App/Assets/js/doc.js'><?php echo '</script'; ?>
>
</html><?php }
}
