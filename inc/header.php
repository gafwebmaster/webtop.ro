<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $title ?></title>
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.png" /> 
    <meta name="description" content="<?= $desc ?>">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
    <!-- Gallery -->
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:300,600'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'>
    
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body id="sky">
  
    <header>
    
        <section>
            
            <div class="df sb headerDetails">
            
                <a href="/">
                    <img class="logo" src="img/logo.png">   
                </a>
                             
                <div class="df sb">                    
                    <div class="df sb am ml">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="none" stroke="#6c7a89" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1.75 1.75c0 8.5 4 12.5 12.5 12.5v-4l-3.5-1l-1 1.5c-2 0-4.5-2.5-4.5-4.5l1.5-1l-1-3.5z"/></svg>
                             
                        </div> 
                        <div class="df dc ai">
                            <div>
                                <a class="mr" href="tel:+40 741 579 161"> 0741 579 161</a>                             
                            </div>                            
                        </div>
                        
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="#6c7a89" d="M28 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Zm-2.2 2L16 14.78L6.2 8ZM4 24V8.91l11.43 7.91a1 1 0 0 0 1.14 0L28 8.91V24Z"/></svg>                              
                            </div>
                            <div class="df dc ai">
                                <a class="mr" href="mailto:contact@webtop.ro"> contact@webtop.ro</a>
                            </div>                            
                        </div>
                    </div>
                </div>           
            </div>
        </section>       
           
        <nav class="topnav">
            <section class="df sb">
                <div class="menu">                    
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        MENIU <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M3 15h14v-2H3v2zM3 5v2h14V5H3zm0 6h14V9H3v2z"/></svg>
                    </a>
                    <a href="index.php" class="<?= ($activePage == 'index') ? 'active':'' ?>" >Acasă</a>
                    
                    <a href="servicii-realizare-website.php" class="<?= ($activePage == 'servicii-realizare-website') ? 'active':''; ?>">Realizare website</a>
                    <a href="realizare-seo-website.php" class="<?= ($activePage == 'realizare-seo-website') ? 'active':''; ?>">SEO</a>
                    <a href="hosting-website.php" class="<?= ($activePage == 'hosting-website') ? 'active':''; ?>">Hosting</a>
                    <a href="vanzare-domenii.php" class="<?= ($activePage == 'vanzare-domenii') ? 'active':''; ?>">Domenii</a>
                    <a href="portofoliu.php" class="<?= ($activePage == 'portofoliu') ? 'active':''; ?>">Portofoliu</a>                    
                    <a href="contact.php" class="<?= ($activePage == 'contact') ? 'active':''; ?>">Contact</a>
                </div>               
                <div>
                    <a target="_blank" href="https://www.facebook.com/ServiciiMentenantaWebsite">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 1024 1024"><path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-92.4 233.5h-63.9c-50.1 0-59.8 23.8-59.8 58.8v77.1h119.6l-15.6 120.7h-104V912H539.2V602.2H434.9V481.4h104.3v-89c0-103.3 63.1-159.6 155.3-159.6c44.2 0 82.1 3.3 93.2 4.8v107.9z"/></svg>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/webtopdevelopment/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path d="M12 2c2.717 0 3.056.01 4.122.06c1.065.05 1.79.217 2.428.465c.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.047 1.066.06 1.405.06 4.122c0 2.717-.01 3.056-.06 4.122c-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772a4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465c-1.066.047-1.405.06-4.122.06c-2.717 0-3.056-.01-4.122-.06c-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153a4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122c.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10a5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0a1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6a3 3 0 0 1 0-6z" /></svg>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company/webtopdevelopment/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M1 2.838A1.838 1.838 0 0 1 2.838 1H21.16A1.837 1.837 0 0 1 23 2.838V21.16A1.838 1.838 0 0 1 21.161 23H2.838A1.838 1.838 0 0 1 1 21.161V2.838Zm8.708 6.55h2.979v1.496c.43-.86 1.53-1.634 3.183-1.634c3.169 0 3.92 1.713 3.92 4.856v5.822h-3.207v-5.106c0-1.79-.43-2.8-1.522-2.8c-1.515 0-2.145 1.089-2.145 2.8v5.106H9.708V9.388Zm-5.5 10.403h3.208V9.25H4.208v10.54ZM7.875 5.812a2.063 2.063 0 1 1-4.125 0a2.063 2.063 0 0 1 4.125 0Z" clip-rule="evenodd"/></svg>
                    </a>
                </div>        
            </section>    
        </nav>
    </header>
    
    <div id="owlSlider" class="owl-carousel hidden">
        <div>        
            <img src="/img/header/hosting.jpg">
        </div>    
<!--        <div>        
            <img src="/img/header/seo.jpg">
        </div>
        <div>        
            <img src="/img/header/webdevelopment.jpg">
        </div>        -->
    </div>
        