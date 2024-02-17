<?php 
//echo "we are on footer page..";

    $name = $_REQUEST['contact-name'];
    $mailForm = $_REQUEST['contact-email'];
    $phone = $_REQUEST['contact-phone'];
    $cname = $_REQUEST['cname'];
    $type = $_REQUEST['radio1'];
    $message = $_REQUEST['contact-message'];
   


    $mailTo = "keryaritsolutions@gmail.com";
    $headers = "From: ".$mailForm;
   
    $txt = "You Have Receive New Mail.\n Name : ".$name.
    ".\n Email : ".$mailForm. 
    ".\n Phone : ".$phone.
    ".\n Message : ".$message.
    ".\n CompanyName : ".$cname.
    ".\n Type : ".$type;  
    

    mail($mailTo,"New inquiry from: $name", $txt, $headers);
   //header("location:https://rnscinemas.com/");
   
   //$htmlContent = file_get_contents("mail.html");
   
   $body =  "Thank You Mr/Mrs : ".$name. " \n We contact You soon...";
  
   
   
   mail($mailForm,"Thank you very much . ",$body,"From:noreply@rscinema.com")

?>




<script language="javascript">
    window.open("https://rnscinemas.com/","_self");
</script>