//Load the file containing the chat log
function loadLog(){		

    $.ajax({
        url: "log.html",
        cache: false,
        success: function(html){		
            $("#chatbox").html(html); //Insert chat log into the #chatbox div				
          },
    });
}

//Load the file containing the chat log
function loadLog(){		
    var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
    $.ajax({
        url: "log.html",
        cache: false,
        success: function(html){		
            $("#chatbox").html(html); //Insert chat log into the #chatbox div	
            
            //Auto-scroll			
            var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
            if(newscrollHeight > oldscrollHeight){
                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
            }				
          },
    });
}
setInterval (loadLog, 2500);	//Reload file every 2500 ms or x ms if you wish to chang