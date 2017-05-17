var doc = {
    init: function() {
		$('.doc-delete-btn').on( "click", doc.showDeleteWarning);
        $('#doc-edit-btn').on( "click", doc.updateDocument);
        $('#add-doc-form').on("submit", doc.addDocument);

        if ($('#doc-file').length) 
            doc.getDocumentFile();
        if ($('#doc-datepicker').length) 
            doc.showDocDatepicker();
	},
    showDocDatepicker:function() {
        $('#doc-datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            dateFormat: "yy-mm-dd"
        });
    },
    addDocument:function(event) {
        event.preventDefault();
        var url = $(this).attr("action");
        $.ajax({
            url: 'http://localhost/api/document/add/',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (json)
            {
                var resp = JSON.parse(json);
                if (resp['Success'])
                {
                    alert('Success');
                    $("#add-doc-form").trigger('reset');
                }
                else
                {
                    alert('Error');
                }
            }
        });      
    },
    updateDocument:function() {
        $.ajax({
            type: "POST",
            url: 'http://localhost/api/document/update/' + $('#doc-id-input').val(),
            data: $('#edit-doc-form').serialize(),
            success: function( json ) 
            {
                var resp = JSON.parse(json);
                if (resp['Success'])
                {
                    alert('Success');
                }
                else
                {
                    alert('Error');
                }
            }
        });
    },
	showDeleteWarning: function() {
		var el = $(this);
		$('<div></div>').dialog({
			resizable: false,
        	modal: true,
            draggable: false,    
       	 	title: "Warning",
       	 	open: function() { 
          		$(this).html("Are you sure you want to delete this document?");
                $(this).parent().css('position', 'fixed');
        	},
        	buttons: {
        		Delete: function() {
        			doc.deleteDocument(el);
          			$( this ).dialog( "close" );
        		},
        		Cancel: function() {
          			$( this ).dialog( "close" );
        		}
        	}
      }); 
	},
	deleteDocument: function(el) {
		$.ajax({
      		type: "GET",
      		url: 'http://localhost/api/document/delete/' + $(el).attr('id'),
      		data: $('#login-form').serialize(),
      		success: function( json ) 
            {
                var resp = JSON.parse(json);
                if (resp['Success'])
                {
                    if ($("#documents").length>0)
                        $(el).closest("tr").remove();
                    else
                        window.location.assign("http://localhost");
                }
            }
    	});
	},
    getDocumentFile: function() {
        $.ajax({
            type: "GET",
            url: 'http://localhost/api/document/file/' + $('#doc-file').data('doc-file-id'),
            data: $('#login-form').serialize(),
            success: function( json ) 
            {
                if (!json['Error'])
                {
                    var resp = JSON.parse(json);
                    doc.renderDocumentFile(atob(resp));
                }
                
            }
        });
    },
    renderDocumentFile: function($base64){
        PDFJS.disableWorker = true;
        PDFJS.getDocument({data: $base64}).then(function(pdf) 
        {
            for(var num = 1; num <= pdf.numPages; num++)
            {
                pdf.getPage(num).then(function(page) {
                    var viewport = page.getViewport(1.5);
                    var canvas = document.createElement('canvas');
                    var ctx = canvas.getContext('2d');
                    var renderContext = {
                      canvasContext: ctx,
                      viewport: viewport
                    };
                    
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    $("#doc-file").append(canvas);
                    
                    page.render(renderContext);
                });
            }   
        });
            
    }
};

doc.init();
