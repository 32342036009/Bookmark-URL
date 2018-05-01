$(document).ready(function(){
    $(document).on('click','#submit',function(){       
        var siteName = $('#siteName').val();
        var siteUrl = $('#siteUrl').val();
         jQuery.ajax({
            type: "POST",
      		
            url: "http://localhost/url/Bookmark/ajax",
            data :{siteName:siteName,siteUrl:siteUrl},
            success: function(data){
                alert(data);
                console.log(data);
            },
            error: function(){
                alert('error');
            }
        });

    });
});