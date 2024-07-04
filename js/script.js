//Navigation
function myFunction() {
    var x = document.querySelector("nav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

//Cooquie comsemn
const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookies");

cookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
    if (!localStorage.getItem("cookieBannerDisplayed")) {
        cookieContainer.classList.add("active");
    }
}, 2000);

//Animation
const timeline = gsap.timeline({ defaults: { duration: 0.1 } })
timeline
    
    //.from('.topnav a', {opacity: 0, stagger: .1 })
    //.from('.topBgBanner', { opacity: 0, duration: 0.3 })
    .from('p', { opacity: 0, stagger: .1, ease: 'power2.in', duration: 0.3 })
    .from('h1, h2', { opacity: 0, stagger: .1, duration: 0.5 }, '<.2')
    .from('.cookie-container', { opacity: 0, stagger: .1, duration: 0.5 }, '<.2')
    .to('footer', { y: 0, ease: 'elastic' })

    //Contact page
    //.from('#contact img', { x: '-200%', ease: Power4.easeOut, duration: 0.3 })
    //.from('#contact form', {opacity: 0, stagger: .1 })
    //.from('#contact iframe', {opacity: 0, stagger: .1 })
    
    
//Header effect on scroll
const body = document.body;
let lastScroll = 0;
let width = $(window).width();

if(width>920){
    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll <= 0) {
            body.classList.remove("scroll-up");
            return;
        }

        if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
            body.classList.remove("scroll-up");
            body.classList.add("scroll-down");
        } else if (
            currentScroll < lastScroll &&
            body.classList.contains("scroll-down")
        ) {
            body.classList.remove("scroll-down");
            body.classList.add("scroll-up");
        }
        lastScroll = currentScroll;
    })
}



//Go to top script
const toTop = document.querySelector(".to-top");
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
})


//Owl Slider
var owlSlider = $('#owlSlider');

owlSlider.owlCarousel({
  navigation : false,
  loop: true,
  autoplay: true,
  animateOut: 'fadeOut',
  responsiveClass:true,
  responsive: {
    0: {
      items: 1
    }
  }
});


//Accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
$(document).ready(function()
{
    $("tr:even").css("background-color", "#f1f1f1");
    $(".accordion td").css("padding","5px");
});

//Show/hide elements on scroll
const observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});
const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));