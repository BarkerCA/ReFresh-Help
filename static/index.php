<?php
$title = "Home";
$active = "home";
// Include the header file
require getenv("DOCUMENT_ROOT") . '/assets/includes/header.inc.php';
?>

        <h1>
          Welcome to the ReFresh Ministries Help Site
        </h1>
        <p>
          This site exists to help you configure your email account for ReFresh Ministries. Please complete the following steps in order.
        </p>
        <ol>
          <li>
            <a href='/password'>Change Your Password</a>
          </li>
          <li>
            <a href='/iphone'>Configure Your iPhone</a>
          </li>
          <li>
            <a href='/mail'>Configure Apple Mail</a>
          </li>
        </ol>

<?php 
// Include the footer file
require getenv("DOCUMENT_ROOT") . '/assets/includes/footer.inc.php'; 
?>