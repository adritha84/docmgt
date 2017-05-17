var auth = {
	init: function() 
  {
	   $('#login-btn').on( "click", auth.login);
     $('#logout-btn').on( "click", auth.logout);
	},
	login:function() 
  {
	   $.ajax({
      		type: "GET",
      		url: 'http://localhost/api/login',
      		data: $('#login-form').serialize(),
      		success: function( json ) 
            {
                var response = JSON.parse(json);
                if (response['Success'])
                    location.reload();
            }
    	});
	},
  logout:function() 
  {
     $.ajax({
          type: "GET",
          url: 'http://localhost/api/logout',
          data: $('#login-form').serialize(),
          success: function( json ) 
          {
            var response = JSON.parse(json);
            if (response['Success'])
                location.reload();
          }
      });
  }
};

auth.init();