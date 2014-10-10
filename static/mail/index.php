<?php
$title = "Configure Your Apple Mail";
$active = "mail";
// Include the header file
require getenv("DOCUMENT_ROOT") . '/assets/includes/header.inc.php';
?>

        <h1 class='text-center'>Configuring Apple Mail</h1>
        <p class='text-justify'>
          1. Click on the Apple in the upper left corner of your screen and then click on "System Preferences"
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step1.png'>
        </p>
        <p class='text-justify'>
          2. Click on "Internet Accounts" in the Preferences Pane.
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step2.png'>
        </p>
        <p class='text-justify'>
          3. In the Internet Accounts pane click on "Add Other Account".
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step3.png'>
        </p>
        <p class='text-justify'>
          4. Click on the "Add Mail Account" radio button then click the button labeled "Create".
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step4.png'>
        </p>
        <p class='text-justify'>
          5. Fill in the information corresponding to your account information. When you send emails from this account, the value placed in the “Full Name” box will be seen by the recipient of the email. For example, in the corresponding screenshot, John Appleseed would be what the recipient of the email would see. When you finished filling in your account information click the button labeled "Create".
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step5.png'>
        </p>
        <p class='text-justify'>
          6. Automatic account creation will not complete. If you notice in the screenshot, the pane will indicate the account needs to be manually configured. Click the button labeled "Create".
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step6.png'>
        </p>
        <p class='text-justify'>
          7. Though its the default selection, make sure IMAP is highlighted by clicking on the IMAP button. In the input box labeled "Mail Server", type "mail.refresh-ministries.org". In the input box labeled "User Name", type your full email address. Finally type your password in the box labeled "Password" and then click the button labeled "Next".
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step7.png'>
        </p>
        <p class='text-justify'>
          8. Click “Connect” on this screen. This screen appears because we are using “mail.refresh-ministries.org” rather than “6h2r-hftz.accessdomain.com”. Media Temple uses access domains for resource addressing. This produces ugly server names, as seen above. For simplicity we have an alias to the ugly name. The certificate used for encrypting the connection has “6h2r-hftz.accessdomain.com” listed on it and we are accessing it via “mail.refresh-ministries.org”, this is what produces the warning box.
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step8.png'>
        </p>
        <p class='text-justify'>
          9. In the input box labeled "SMTP Server" type "mail.refresh-ministries.org". In the input box labeled "User Name" put your full ReFresh Ministries email address. In the input box labeled "Password" type your ReFresh Ministries password. When each box is sufficiently filled out click the button labeled "Create".
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step9.png'>
        </p>
        <p class='text-justify'>
          10. This screenshot shows what the default parameters of the newly created email account look like.
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step10.png'>
        </p>
        <p class='text-justify'>
          11. Check the "Notes" checkbox to associate notes with this account on your MacBook.
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step11.png'>
        </p>
        <p class='text-justify'>
          12. This concludes our use of the System Preferences panel. This panel can be closed by clicking on "System Preferences" in the upper left corner and then clicking on "Quit System Preferences".
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step12.png'>
        </p>
        <p class='text-justify'>
          13. Left click on your desktop background and then look in the upper left hand corner of your screen, you will see the word "Finder". Click on "Go" and then click on "Applications" in the menu.
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step13.png'>
        </p>
        <p class='text-justify'>
          14. Double click on "Mail" to open the application.
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step14.png'>
        </p>
        <p class='text-justify'>
          15. As described in Step 8 above, we receive this warning because of a sever name mismatch between what we supply and the name written on the server. Click on "Show Certificate".
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step15.png'>
        </p>
        <p class='text-justify'>
          16. Place a check in the box next to "Always Trust *.accessdomain.com when connecting to mail.refresh-ministries.org".
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step16.png'>
        </p>
        <p class='text-justify'>
          17. Making sure the box is checked for "Always Trust", click on the button labeled connect. This will bring up the permission elevation dialog shown in the next step.
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step17.png'>
        </p>
        <p class='text-justify'>
          18. Type your username in the box labeled "Name" and type your password in the box labeled "Password" and then click the button labeled "Update Settings". By doing this you are giving Mail permission to modify the certificate trust settings. By doing this, you will no longer have to acknowledge this box when Mail is opened.
        </p>
        <p class='text-center'>
          <img class='helpimg' src='https://s3.amazonaws.com/refreshministries/images/applemail/Step18.png'>
        </p>
        <div>
          <p class='text-justify'>
            This concludes the setup for Apple Mail to send and recieve emails using your ReFresh Ministries account. You may now send and receive emails from this account in the same way as any other account in Apple Mail.
          </p>
        </div>
<?php 
// Include the footer file
require getenv("DOCUMENT_ROOT") . '/assets/includes/footer.inc.php'; 
?>