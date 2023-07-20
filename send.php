<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="نحن وكالة رقمية مبتكرة متخصصة في تقديم حلول استراتيجية وإبداعية لعملائنا، نجمع خبرة تمتد لأكثر من 8 سنوات في مجال التسويق الرقمي حيث تساعدنا في توفير حلول شاملة تلبي احتياجات عملك.">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.svg"><!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js">
</script>
<![endif]-->
    <title>مودة | الرئيسية</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="main-wrapper">
      <!--header-->
      <header> 
        <!--navbar desktop-->
        <nav class="navbar main-nav navbar-expand-lg">
          <div class="container"><a class="navbar-brand" href="/"> <img class="white" src="images/white-logo.svg" alt="مودة"><img class="colored" src="images/logo.svg" alt="مودة"></a>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="https://mawada.agency/#about">من نحن</a></li>
                <li class="nav-item"><a class="nav-link" href="https://mawada.agency/#services">خدماتنا</a></li>
                <li class="nav-item"><a class="nav-link" href="https://mawada.agency/#clients">عملائنا</a></li>
                <li class="nav-item"><a class="nav-link" href="https://mawada.agency/#contact">تواصل معنا</a></li>
              </ul>
            </div><a class="phone-number d-none d-sm-block" href="tel:0597334589">كلمنا الآن</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#side_menu" aria-controls="side_menu" aria-expanded="false" aria-label="Toggle navigation">
              <div class="hamburger-menu"><span></span><span></span><span></span></div>
            </button>
          </div>
        </nav>
        <!--navbar desktop-->
        <!--side menu in mobile only-->
        <div class="offcanvas offcanvas-start" id="side_menu" data-bs-scroll="true" tabindex="-1" aria-labelledby="side_menu_label">
          <div class="offcanvas-header">
            <button class="btn-close btn-close-dark" type="button" data-bs-dismiss="offcanvas" data-bs-target="#side_menu" aria-controls="side_menu" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div class="navbar">
              <div class="collapsed navbar-collapse" id="navbarNavSide">
                <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link" href="https://mawada.agency/#about">من نحن</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://mawada.agency/#services">خدماتنا</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://mawada.agency/#clients">عملائنا</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://mawada.agency/#contact">تواصل معنا</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--side menu in mobile only-->
      </header>
      <!--header-->
      <style>
      body {
         text-align: center;
         height: auto;
      }
      header .navbar .navbar-nav .nav-link {
          /* color: #222; */
      }
      header .navbar .navbar-nav .nav-link:hover {
          /* color: #000; */
      }
      header .navbar {
        box-shadow: 0 4px 10px 0 rgb(115 115 115 / 5%), 0 7px 10px -5px rgb(126 126 126 / 5%);
        background-color: #34508a;
      }
      header .navbar .navbar-collapse {
        justify-content: flex-start;
      }
      /* header .navbar .colored {
          display: block;
      }
      header .navbar .white {
          display: none;
      } */

      .main {
         height: 50vh;
         display: flex;
         align-items: center;
         justify-content: center
      }

      h3 {
         line-height: 2;
         text-align: center;
         direction: rtl;
         padding-top: 50px;
      }

      footer {
         position: absolute;
         width: 100%;
         bottom: 0;
      }

      </style>
      <!-- /menubar -->
      <main class="main">
         <div class="container">
            <h3> <?php
                    $email= "contact@mawada.agency";
                    if (!empty($_POST)){
                        if(empty($_POST['name']) or empty($_POST['phone']) or empty($_POST['email']) or empty($_POST['message'])){
                            echo("تأكد من ملئ جميع الحقول!");
                        }
                        else{
                            $message  = "name :\n{$_POST["name"]}\n";
                            $message .= "number :\n{$_POST["phone"]}\n";
                            $message .= "email :\n{$_POST["email"]}\n";
                            $message .= "message :\n{$_POST["message"]}\n";
                            $message .= "IP :\n{$_SERVER['REMOTE_ADDR']}\n";
                            $message = stripslashes($message);
                            $message = wordwrap($message, 70);
                            mail($email,"مودة",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");
                            echo("تم إرسال رسالتك بنجاح وسيتم التواصل معك في أقرب وقت، شكرا لك :(");
                        }
                    }
                ?> </h3>
         </div>
      </main>
      <!--footer part-->
      <footer>
        <div class="copyright"> 
          <div class="copy-text">
            <p>جميع الحقوق محفوظة &copy;<a href="https://mawada.agency/">مودة للتسويق الرقمي.</a></p>
          </div>
        </div>
      </footer>
      <!--footer part-->
    </div>
    <!--scripts-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/fancybox.umd.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.js"></script>
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
      var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"left","whatsAppNumber":"9660597334589","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
      window.onload = () => {
        _waEmbed(wa_btnSetting);
      };
    </script>
  </body>
</html>