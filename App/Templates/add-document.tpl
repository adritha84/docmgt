<html>
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
        {if $user['u_role_id'] ==  2}
        <a href='http://localhost/users'>Users</a>
        {/if}
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
            {$user['u_fullname']}
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
                    {foreach from=$statuses item=status}
                        <option value="{$status['s_id']}">{$status['s_title']}</option>
                    {/foreach}
                </select>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                Tip:
            </div>
            <div class='col'>
                <select name='category'>
                    {foreach from=$categories item=cat}
                        {if $cat['c_title'] == {$doc['c_title']}}
                            <option value="{$cat['c_id']}" selected="">{$cat['c_title']}</option>
                        {else}
                            <option value="{$cat['c_id']}">{$cat['c_title']}</option>
                        {/if}
                    {/foreach}
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
<script src='http://localhost/App/Assets/js/auth.js'></script>
<script src='http://localhost/App/Assets/js/doc.js'></script>
</html>