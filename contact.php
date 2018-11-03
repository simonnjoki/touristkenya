
   <?php
@$to ='tourismatkenya@gmail.com';
@$subject =$_POST['subject']; 
@$from =$_POST['from'];
@$body =$_POST['body'];
@mail($to, $from, $body);
?>
