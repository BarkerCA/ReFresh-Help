<?php
$title = "Change Your Password";
$active = "password";
// Include the header file
require getenv("DOCUMENT_ROOT") . '/assets/includes/header.inc.php';
?>

        <h1 class='text-center'>Change Your Password</h1>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/password/UControl-1.png'>
        </p>
        <p class='text-justify'>
          1. Navigate to <a href="http://refresh-ministries.org/.tools/ucontrol" target="_blank">http://refresh-ministries.org/.tools/ucontrol</a> and type your email address in the input box labeled “Email Address”. In the input box labeled “Password” type your temporary password. After filling in these two input boxes mentioned above, click the button labeled “Login”.
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/password/UControl-2.png'>
        </p>
        <p class='text-justify'>
          2. After logging into to uControl, the screen will look like the Figure 2 above. To move on to the next step of changing your password, click on the “Change Password” link.
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/password/UControl-3.png'>
        </p>
        <p class='text-justify'>
          3. Upon arrival at the change password page, input your temporary password in the input box labeled “Old Password”. In the input box labeled “New Password”, type the password that you would like to use with your email account. In the input box labeled “Confirm New Password”, type the password you would like to use with your email account again exactly the same as you did in the “New Password” input box. When you complete filling in each box, click the “Save Settings” button to submit your changes. The page will refresh, the boxes will be blank again, and a green box indicating your password was successfully changed will appear. Finally, click on the logout link in the top right corner of the page to logout of uControl. This completes the process for changing your password.
        </p>
        <div class='text-justify'>
          <p>
            This concludes the steps to change your password for your ReFresh Ministries account.
          </p>
          <p class='text-center'>
            <a class='button' href='/iphone'>
              Configure iPhone For Email
            </a>
          </p>
        </div>

<?php 
// Include the footer file
require getenv("DOCUMENT_ROOT") . '/assets/includes/footer.inc.php'; 
?>