<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../css/normalize.css" rel="stylesheet" type="text/css" media="screen">
   <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
   <link href="../css/ss.css" rel="stylesheet" type="text/css" media="screen">

   <title>Contact Us - Alpschalet Resort</title>
 </head>

 <body>
   <header class="hd">
     <h1><a href="#">Alpschalet Resort</a></h1>
     <!-- <a href="index.html"><img src="img/chalet.jpg" alt="Alps" title="Alps"/></a> -->
   </header>
   <nav class="nv">
     <ul>
       <li><a href="index.html">Home</a></li>
       <li><a href="index.html#ab">About</a></li>
       <li><a href="accommodation.html">Accommodation</a></li>
       <li><a href="travelguide.html">Travel Guide</a></li>
       <li><a href="contactus.html">Contact Us</a></li>
     </ul>
   </nav>
   <main class="mn cu">
     <div class="bs">

     </div>
       <?php
       //3 lines of code to retrieve the form data sent via the "post" method
         $fname=$_POST['firstname'];
         $lname=$_POST['lastname'];
         $email=$_POST['email'];
         $location=$_POST['location'];
         $comment=$_POST['comments'];

     /*creation of the $msg variable and
      supplementally adding more details to it.*/
         $msg="EMAIL SENT FROM WEBSITE:\r\n " ;
         $msg.="Senders First Name: $fname \r\n ";
         $msg.="Senders Surname: $lname \r\n ";
         $msg.="Senders E-mail: $email\r\n ";
         $msg.="Location: $location\r\n ";


         $to="roderickdsweeney@gmail.com";   //where is the email to be sent
         $subject="web Site Feedback";   //what subject should the email display
         $mailheaders="From: $email\r\n";  //what email  will display for the sender


         $formsent=mail($to, $subject, $msg, $mailheaders); //send the email
         if ($formsent)
          {
           echo "<h2> Your message was sent successfully!</h2>";
          }
          else
          {
           echo "<p> There is a problem. The form has not been sent !</p>";
          }
          ?>

        <div id="hdg">
          <img src="img/chalet.jpg" alt="" />
        </div>

         <p>Here are the details from your completed form!<br />
            <?php
            echo  $msg;
            ?>

            </p>
        <p><a href="contactus.html">go back</a></p>
      </div>
    </main>
    <footer class="ft">
      <div class="fs">
        <h4>Alpschalet</h4>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Terms &amp; Condition</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="sc">
        <h4>Social</h4>
        <ul>
          <li><a href="https://www.facebook.com"><img src="../img/facebook.png" alt="Facebook" title="Facebook" /></a></li>
          <li><a href="https://www.instagram.com"><img src="../img/instagram.png" alt="Instagram" title="Instagram" /></a></li>
          <li><a href="https://www.twitter.com"><img src="../img/twitter.png" alt="Twitter" title="Twitter" /></a></li>
        </ul>
      </div>
      <div class="th">
        <h4>Contact</h4>
        <address>
          Mühle 122<br />
          Schübelbach<br />
          Chur<br />
          Switzerland<br />
          8862<br />
        </address>
        <a href="tel:05551329823">055 513 29823</a>
      </div>
    </footer>
  </body>
</html>
