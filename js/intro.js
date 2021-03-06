// ask user for name with popup prompt    
var nick = prompt("Wie lautet dein Name:", "Gast");
        
// default name is 'Guest'
if (!nick || nick === ' ') {
   nick = "Gast";	
}

// strip tags
nick = nick.replace(/(<([^>]+)>)/ig,"");

// display name on page
$('#nickarea').html("Du bist: <span>" + nick + "</span>");

// kick off chat
var chat =  new Chat();
$(function() {

     chat.getState(); 
     
     // watch textarea for key presses
     $("#sendie").keydown(function(event) {  
     
         var key = event.which;  
   
         //all keys including return.  
         if (key >= 33) {
           
             var maxLength = $(this).attr("maxlength");  
             var length = this.value.length;  
             
             // don't allow new content if length is maxed out
             if (length >= maxLength) {  
                 event.preventDefault();  
             }  
          }  
       });
     // watch textarea for release of key press
     $('#sendie').keyup(function(e) {	
                          
          if (e.keyCode == 13) { 
          
            var text = $(this).val();
            var maxLength = $(this).attr("maxlength");  
            var length = text.length; 
             
            // send 
            if (length <= maxLength + 1) { 
             
                chat.send(text, nick);	
                $(this).val("");
                
            } else {
            
                $(this).val(text.substring(0, maxLength));
                
            }	
            
            
          }
     });
    
});