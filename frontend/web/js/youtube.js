function sendYoutubeCode() {
 
    var code = $('#youtube').val();
    var csrf = $('.csrf').val();
    //alert(csrf);
    $.ajax({
        type: "POST",
        url: '/video/send-youtube-code',
       data: ({        
            'code' : code,
            'csrf' : csrf
            }),

        success:function(){
            
        }
        
    });
}