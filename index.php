<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>PLC | Pretty Little Chat</title>
    
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="js/chat.js"></script>
    
</head>

<body onload="setInterval('chat.update()', 1000)">

    <div id="page-wrap">
    
        <h2>PLC | Pretty Little Chat</h2>
  
        
        <p id="nickarea"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <div class="sendTextArea">
        <form id="send-message-area">
            <p>Deine Nachricht: </p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>
        </div>
        <br>
        <div class="close">
       <input type="button" name="cancelvalue" value="CHAT SCHLIEßEN" onClick="closeDelete()"> 
        </div>
    </div>
    <script type="text/javascript" src="js/intro.js"></script>
    <script type="text/javascript">
    function closeDelete() {
  if (confirm("Möchtest du den Chat wirklich schließen?")) {
    $.ajax({
          url: 'delete.php',
          success: function (response) {
            close();
          },
          error: function () {
            alert("Chat konnte nicht geschlossen werden");
          }
        });
    
  }
}
</script> 
</body>

</html>