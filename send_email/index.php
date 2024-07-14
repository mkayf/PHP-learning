<?php
$showModal = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // get the values of mail receiver;
      $to = $_POST['email'];
      $full_name =  $_POST['full_name'];
      $subject = 'Account Created!';
      $msg = "Thanks for registerating $full_name. Your account has been created successfully!";
      $headers = "From:muhammadkaif150@gmail.com";
      $mail = mail($to, $subject, $msg, $headers);
        
      if($mail){
        // Display modal of mail sent.
        $showModal =  "<script>
        document.addEventListener('DOMContentLoaded', () => {
            let mailSent = new bootstrap.Modal(document.getElementById('mailSentModal'), {
            keyboard : false
          })
          mailSent.show();
        })
        </script>";
      }
      else{
        echo 'Mail cannot be sent!';
      }
        

        

    


    }
?>

<!-- 
    
-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send email using PHP</title>
    <!-- BOOTSTRAP LINK CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- MODAL -->
    <div class="modal" tabindex="-1" id="mailSentModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="display: flex; justify-content: center; align-items: center;"> <img src="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/112-gmail_email_mail-512.png" alt="Email icon" width="20px">ail sent</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Check your Email inbox or spam folder.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
    <!-- MODAL -->

    <div class="container">
    <div class="form-box">
<form class="form" method="POST" >
    <span class="title">Sign up</span>
    <span class="subtitle">Create a free account with your email.</span>
    <div class="form-container">
      <input type="text" class="input" placeholder="Full Name" name="full_name">
			<input type="email" class="input" placeholder="Email" name="email" required>
			<input type="password" class="input" placeholder="Password">
    </div>
    <button>Sign up</button>
</form>
<div class="form-section">
  <p>Have an account? <a href="">Log in</a> </p>
</div>
</div>
    </div>


<!-- BOOTSTRAP SCRIPT CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- JAVASCRIPT -->
     <script src="script.js"></script>
     <!-- Show modal on form submit -->
      <?php echo $showModal; ?>
  </body>
</html>