<?php
/* Smarty version 3.1.30, created on 2017-04-06 20:00:41
  from "C:\xampp\htdocs\App\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e682493415f7_98666797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2992d821d8096401baee57625e424dc4588bf2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\App\\templates\\login.tpl',
      1 => 1491501640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e682493415f7_98666797 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://localhost/App/assets/css/style.css">
</head>
<body>
	<div id='login'>
		<div id='login-title'>Document Management WebApp</div>
		<form id='login-form'>
			<label>Username:</label>
            <input name='username' type='text'>
            <label>Password:</label>
            <input name='password' type='text'>
        </form>
        <button id='login-btn'>Sign in</button>
	</div>
</body>
<?php echo '<script'; ?>
 src='http://localhost/App/Assets/js/auth.js'><?php echo '</script'; ?>
>
</html>

        <?php }
}
