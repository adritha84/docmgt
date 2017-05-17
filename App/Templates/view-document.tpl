<html>
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/black-tie/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/App/assets/css/style.css">
    <script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
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

        <div class='container-title'>
            {$doc['d_title']}

        </div>

        <!-- Actions -->
        <div class='container-actions'>
            <a onclick="window.history.back()">
                <img src="http://localhost/App/Assets/img/back.png">
            </a>
            {if $user['u_role_id'] ==  2}
            <a href="http://localhost/document/edit/{$doc['d_id']}">
                <img src="http://localhost/App/Assets/img/edit.png">
            </a>
            <a id="{$doc['d_id']}" class="doc-delete-btn">
                <img src="http://localhost/App/Assets/img/delete.png">
            </a>
            {elseif $user['u_id'] ==  $doc['u_id']}
                <a href="http://localhost/document/edit/{$doc['d_id']}">
                    <img src="http://localhost/App/Assets/img/edit.png">
                </a>
                <a id="{$doc['d_id']}" class="doc-delete-btn">
                    <img src="http://localhost/App/Assets/img/delete.png">
                </a>
            {/if}
            <a href="http://localhost/document/file/{$doc['d_id']}">
                <img src="http://localhost/App/Assets/img/print.png">
            </a>
        </div> 

    </div>
       

    <div class='row'>
        <div class='col'>
            Numar:
        </div>
        <div class='col'>
            {$doc['d_id']}
        </div>
    </div>
    <div class='row'>
        <div class='col'>
            Data:
        </div>
        <div class='col'>
            {$doc['d_registration_date']}
        </div>
    </div>
    <div class='row'>
        <div class='col'>
            Autor:
        </div>
        <div class='col'>
            {$doc['u_fullname']}
        </div>
    </div>
    <div class='row'>
        <div class='col'>
            Status:
        </div>
        <div class='col'>
            {$doc['s_title']}
        </div>
    </div>
    <div class='row'>
        <div class='col'>
            Tip:
        </div>
        <div class='col'>
            {$doc['c_title']}
        </div>
    </div>
    {if !empty($doc['d_message'])}
    <div class='row'>
        <div class='col'>
            Mesaj:
        </div>
        <div class='col'>
            {$doc['d_message']}
        </div>
    </div>
    {/if}
    
</div>




<div id="doc-file" data-doc-file-id="{$doc['d_id']}">

</id>


</body> 
<script src='http://localhost/App/Assets/js/auth.js'></script>
<script src='http://localhost/App/Assets/js/doc.js'></script>

</html>