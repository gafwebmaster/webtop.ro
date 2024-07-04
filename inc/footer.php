    <footer>
        <section class="df sb">            
            <p class="mt">© <?= date("Y") ?> Copyright. Toate drepturile rezervate</p>
            <span>
                <a href="termeni-si-conditii.php">Termeni si conditii</a> |
                <a href="gdpr.php">GDPR</a>
            </span>
            
           
        </section>
    </footer>

    <a href="#" class="to-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 10l10-8l10 8M16 2v28"/></svg>
    </a>

    <div class="cookie-container">
        <p>Folosim cookies. Mai multe detalii: <a target="_blank" href="termeni-si-conditii.php">Termeni și condiții</a> și <a target="_blank" href="gdpr.php">GDPR</a>.</p>
        <button class="cookies btn mb">De acord</button>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
    <script src="js/jquery.min.js"></script> 
    <script src="js/owl.carousel.js"></script>
    <script src="js/script.js"></script>
    
    <!-- Gallery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
<script  src="js/index.js"></script>
<script>
      
      TweenMax.from(".logo", 1, {
            delay: 0.3,
            opacity: 0,
            y: -200,
            ease: Expo.easeInOut
      })
      
//      TweenMax.from(".topnav", 0, {
//            delay: 0.1,
//            opacity: 0,            
//            ease: Expo.easeInOut
//      })
      
//      TweenMax.staggerFrom(".contactDetails span", 2, {
//            delay: 2, opacity: 0, y: 20, ease: Expo.easeInOut
//      }, 0.2)
      
      TweenMax.staggerFrom("nav a", 0.1, {
            delay: 0, opacity: 0, y: 1, ease: Expo.easeInOut
      }, 0.1)

//      TweenMax.staggerFrom(".social-media ul li", 7, {
//            delay: 2.4, opacity: 0, y: 20, ease: Expo.easeInOut
//      }, 0.2)
      
//      TweenMax.staggerFrom(".twoTxtImg, .bgForth, .whatWeKnow", 1, {
//            delay: 2.5, opacity: 0, y: 20, ease: Expo.easeInOut
//      }, 0.2)
</script>
<script src="js/snow.js"></script>
   
</body> 
</html>