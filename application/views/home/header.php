<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="preconnect" href="<?php echo base_url() ?>">
  <?php
  if ($meta) {
    if (!empty($meta->meta_header)) {
      echo $meta->meta_header;
    }
  }
  ?>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&amp;display=swap" rel="stylesheet">
  <link href="<?php echo base_url('assets1/front/css/style-all-new.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets1/front/css/responsive.css'); ?>" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets1/images/favicon.ico'); ?>">
  <link href="<?php echo base_url('assets1/front/font-awesome-4.7.0/css/font-awesome.css'); ?>" rel="stylesheet" async>
  <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js></script>
  <!-- PushAlert -->
  <script type="text/javascript">
    (function(d, t) {
      var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
      g.src = "https://cdn.pushalert.co/integrate_b8d3a1d41cfb2b3965bf2dfc68e0ab85.js";
      s.parentNode.insertBefore(g, s);
    }(document, "script"));
  </script>
  <!-- End PushAlert -->
</head>
<style>
  body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #f07c7c;
  }

  .logo {
    border: 2px solid #eb008b;
    margin-top: 20px;
    border-radius: 10px 0 10px 10px;
    margin-bottom: 2px;
    overflow: hidden;
    font-size: 20px;
    font-style: italic;
  }
</style>
<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Verdana, sans-serif;
  }

  .mySlides {
    display: none;
  }

  img {
    vertical-align: middle;
  }

  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {
      font-size: 11px
    }
  }
</style>

<body style="font-family: bangers!important">
  <div class="container-fluid">
    <div class="class=">
      <center style="font-size:40px;">
        <a href="<?php echo base_url(); ?>">
          <?= $this->config->item('logo_html'); ?>
        </a>
      </center>
      <div class="gold-login-area">
        <ul style="margin-top:18px; padding-right: 40px; ">
          <li>
            <div id="google_translate_element"></div>
          </li>
        </ul>
      </div>
    </div>
  </div>