<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gigalumi</title>
    <style>
        .container{
            width:1080px;
            margin:auto;
        }
        .total-border {
            width:  780px;
            height: 100%;
            margin:auto;
            display: flex-col ;
            justify-content: center; 
        }

        .logo {
            width: 93px;
            margin-top: 21px;
        }

        .construction {
            width: 780px;
        }

        .welcome {
            font-size: 32px;
            font-weight: 900;
            line-height: 1.58;
            color: #333333;
            text-align: center;
        }

        .description {
            text-align: center;
            font-size: 32px;
            font-weight: 900;
            line-height: 1.5;
            color: #333333;
        }

        .left {
            width: 280px;
            font-size: 20px;
            font-weight: 500;
            color: #111111;
            text-align: left;
            line-height: 1.88;
            float: left;
            margin-top: 60px;
        }

        .icon {
            width:40px;
            margin-right: 11px;
            float: left;
        }

        .right {
            float: right;
            text-align: left;
            width: 380px;
            font-size: 18px;
            font-weight: 500;
            line-height: 1.5;
            color: #111111;
            margin-top: 60px;
        }

        .web {
            color: #00683c;
            font-size: 20px;
            font-weight: 900;
            line-height: 2.25;
        }
        
        @media (max-width: 1200px) {
            .container{
                width:80%;
                margin:auto;
            }
        }
        
        @media (max-width: 640px) {

        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9Z7PYTQYSV"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-9Z7PYTQYSV');
    </script>
</head>

<body>
    <div class="container">
        <div class="total-border">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gigalumi-logo@2x.png" class="logo">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/main.gif" class="construction">
            <div class="welcome"> Hey Welcome to Gigalumi!</div>
            <div class="description">Our official website is still under construction.<br/>See you soon! </div>
        </div>
        <div class="left">Follow us to updated!<br>
            <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/pinterest@2x.png" class="icon"></a>
            <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/linked-in@2x.png" class="icon"></a>
            <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/instagram@2x.png" class="icon"></a>
            <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fb@2x.png" class="icon"></a>
        </div>
        <div class="right">If you want to purchase Gigalumi online, please feel free to shop at Amazon.com.<br>
            <a href="javascript:;" class="web">Here's our official shop on Amazon!</a>
        </div>
    </div>
</body>
</html>