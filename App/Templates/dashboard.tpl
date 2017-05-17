<html>
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
        {if $user['u_role_id'] ==  2}
        <a href='http://localhost/users'>Users</a>
        {/if}
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
            {$user['u_fullname']}
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
    		{foreach from=$docs item=doc}
            <tr data-doc-id="{$doc['d_id']}">
    			<td> {$doc['d_id']} </td>
                <td> {$doc['d_registration_date']} </td>
                <td> {$doc['d_title']} </td>
                <td> {$doc['u_fullname']} </td>
                <td> {$doc['s_title']} </td>
                <td> {$doc['c_title']} </td>
               
                <td> 
                    <a href="http://localhost/document/view/{$doc['d_id']}">
                        <img src="App/Assets/img/view.png">
                    </a>
                </td>

                {if $user['u_role_id'] ==  2}
                <td>
                    <a href="http://localhost/document/edit/{$doc['d_id']}">
                        <img src="App/Assets/img/edit.png">
                    </a>
                </td>
                <td>
                    <a id="{$doc['d_id']}" class="doc-delete-btn">
                        <img src="App/Assets/img/delete.png">
                    </a>
                </td>
                {elseif $user['u_id'] ==  $doc['u_id']}
                <td>
                    <a href="http://localhost/document/edit/{$doc['d_id']}">
                        <img src="App/Assets/img/edit.png">
                    </a>
                </td>
                <td>
                    <a id="{$doc['d_id']}" class="doc-delete-btn">
                        <img src="App/Assets/img/delete.png">
                    </a>
                </td>
                {else}
                    <td>-</td>
                    <td>-</td>

                {/if}
                <td>
                    <a href="http://localhost/document/file/{$doc['d_id']}">
                        <img src="http://localhost/App/Assets/img/print.png">
                    </a> 
                </td>
            </tr>
			{/foreach}
</table>
</body>	
<script src='App/Assets/js/auth.js'></script>
<script src='App/Assets/js/doc.js'></script>
</html>