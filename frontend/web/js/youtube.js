function sendYoutubeCode() {
console.log('sendYoutubeCode');
    var code = $('#youtube').val();
   
    var csrf_token = $("meta[name=csrf-token]").attr("content");
    //alert(csrf);
    $.ajax({
        type: "POST",
        url: '/video/send-youtube-code',
       data: ({        
            code : code,
           _csrf: csrf_token
            }),

        success:function(data){
            $('.info').html(data);
          
        }
        
    });
}