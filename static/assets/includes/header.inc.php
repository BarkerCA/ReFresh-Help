<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ReFresh Help  :: <?php echo $title; ?></title>
    <link data-turbolinks-track="true" href="/assets/loader.css?body=1" media="all" rel="stylesheet" />
    <script src="/assets/vendor/modernizr.js?body=1"></script>
  </head>
  <body class=''>
    <div class="fixed contain-to-grid">
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a href="/">ReFresh Ministries Help</a></h1>
          </li>
        </ul>
      
        <section class="top-bar-section">
          <ul class="right">
            <li <?php if($active == "home"){ echo "class='active'"; } ?>><a href="/">Home</a></li>
            <li <?php if($active == "password"){ echo "class='active'"; } ?>><a href="/password">Password</a></li>
            <li <?php if($active == "iphone"){ echo "class='active'"; } ?>><a href="/iphone">iPhone</a></li>
            <li <?php if($active == "mail"){ echo "class='active'"; } ?>><a href="/mail">Mail</a></li>
          </ul>
        </section>
      </nav>
    </div>
    <div class='row'>
     <div class='medium-12 columns main'>