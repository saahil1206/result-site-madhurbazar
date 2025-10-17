<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="<?php echo base_url() ?>">
    <title>404 Not Found</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets1/images/favicon.ico'); ?>">

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
</style>

<body style="font-family: bangers!important">
    <div class="container-fluid">
        <div class="class=">
            <center style="font-size:40px;">
                <a href="<?php echo base_url(); ?>">
                    <?= $this->config->item('logo_html'); ?>
                </a>
                <h3 style="font-size: 2rem; padding: 0; margin: 2rem auto;">404 Page Not Found</h3>
                <h4 style="font-size: 1.5rem; padding: 0; margin: 1rem auto;">The page you requested was not found!</h4>
                <a href="<?php echo base_url(); ?>" style="text-decoration: none; color: white; font-size:20px; border:2px solid white; padding:10px; border-radius:5px; background-color:#eb008b;">
                    Go to Home
                </a>
            </center>
        </div>
    </div>
</body>

</html>