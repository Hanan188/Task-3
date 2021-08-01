<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
</head>
<style type="text/css">
body{
   width: 400px;

}
   input{
       padding: 10px;
       border: 2px;
       border-color: black;
       border-radius: 10px;
       text-decoration: none;
       width: 100px;
       margin-top: 20px;
       display: inline-block;
   }
   .container{
       display: flex;
       justify-content: space-between;
       align-items: center;
   }

</style>
<body><center>

   <div>
       <form method="POST" action="task2.php">
           <input type="submit" value="Forward" name="Forward"></input>
       </form>

       <div class="container">
           <form method="POST" action="task2.php">
            <input type="submit" value="Left" name="Left"></input>
           </form>
           <form method="POST" action="task2.php">
             <input type="submit" value="Stop" name="Stop"></input>
               </form>
           <form method="POST" action="task2.php">
             <input type="submit" value="Right" name="Right"></input>
               </form>
       </div>
       <form method="POST" action="task2.php">
         <input type="submit" value="Backward" name="Backward"></input>
         </form>
         <form method="POST" action="kk.php">
           <input type="submit" value="DisplayDB" name="DisplayDB"></input>
         </form>
      
   </div>
   </center>
   <script>
  window.watsonAssistantChatOptions = {
      integrationID: "2562863c-0dd7-45ce-a469-62acc3151bfd", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "d8935f57-3ec3-4267-ae86-910a3dfa026d", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>

</body>
</html>


<?php
$database=mysqli_connect("localhost","root","","task2"); 

if(isset($_POST['Forward']))
{
  $edit = mysqli_query($database, "UPDATE `task2` SET `right`='0',`left`='0',`backward`='0' ,`forward`='forward' ,`Stop`='0' ");

//$insert = mysqli_query($database,"INSERT INTO `task2`(`right`, `left`, `backward`, `forward`, `Stop`) VALUES ('0','0','0','0','forward')");
}
elseif(isset($_POST['Left']))
{
  $edit = mysqli_query($database, "UPDATE `task2` SET `right`='0',`left`='left',`backward`='0', `forward`='0' ,`Stop`='0' ");

}
elseif(isset($_POST['Stop']))
{
  $edit = mysqli_query($database, "UPDATE `task2` SET `right`='0',`left`='0',`backward`='0', `forward`='0' ,`Stop`='stop'");

}

elseif(isset($_POST['Right']))
{
  $edit = mysqli_query($database, "UPDATE `task2` SET `right`='right',`left`='0',`backward`='0', `forward`='0' ,`Stop`='0' ");

}

elseif(isset($_POST['Backward']))
{
  $edit = mysqli_query($database, "UPDATE `task2` SET `right`='0',`left`='0',`backward`='backward' ,`forward`='0' ,`Stop`='0' ");

}


?>

