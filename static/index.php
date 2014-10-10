<?php
$title = "Home";
$active = "home";
// Include the header file
require getenv("DOCUMENT_ROOT") . '/assets/includes/header.inc.php';
?>

        <div class='large-12 medium-12 columns'>
          <h1 class='text-center'>
            Welcome to the ReFresh Ministries Help Site
          </h1>
          <p class='text-center'>
            This site exists to help you configure your email account for ReFresh Ministries. Please change your password first.
          </p>
        </div>
        <div class='large-12 medium-12 columns' style='padding-top: 25px; padding-bottom: 25px;'>
          <div class='large-4 medium-4 columns'>
            <a href='/password'>
              <img class='.left' src='/assets/home/changepass.png'>
              Change Your Password
            </a>
          </div>
          <div class='large-4 medium-4 columns'>
            <a href='/iphone'>
              <img class='.left' src='/assets/home/iphone.png'>
              Configure Your iPhone
            </a>
          </div>
          <div class='large-4 medium-4 columns'>
            <a href='/mail'>
              <img class='.left' src='/assets/home/macmail.png'>
              Configure Apple Mail
            </a>
          </div>
        </div>

<?php 
// Include the footer file
require getenv("DOCUMENT_ROOT") . '/assets/includes/footer.inc.php'; 
?>