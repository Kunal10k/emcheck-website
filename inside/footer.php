  <footer>
    <div class="container">
      <div class="footer">
        <!-- Column 1 -->
        <div class="footer-column">

          <a href="index.php">
            <div class="logo">
              <img src="assets/img/HV-logo-YW.avif" alt="">
            </div>
          </a>
          <h4>About Us</h4>
          <p class="pt-4">Follow the latest travel destination updates from Exploreza</p>
          <h4 class="mt-4">Follow On</h4>
          <div class="footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>

        </div>

        <!-- Column 2 -->
        <div class="footer-column">
          <div class="row">
            <div class="col-md-6">
              <h4>Service</h4>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Destination</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <h4>Important Links</h4>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Destination</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>

        </div>

        <!-- Column 3 -->
        <div class="footer-column">
          <h4>Contact Info</h4>

          <ul class="list-unstyled contact-info">
            <li><i class="bi bi-geo-alt-fill me-2 text-orange"></i> Travel
              174, Bipin Ganguly Road
              Dum Dum
              Kolkata-700030</li>
            <li><i class="bi bi-telephone-fill me-2 text-orange"></i> 033-25485646</li>
            <li><i class="bi bi-envelope-fill me-2 text-orange"></i> info@gmail.co.in
            </li>
            <!-- <li><i class="bi bi-envelope-fill me-2 text-orange"></i> info@gmail.com
</li> -->
          </ul>




        </div>
      </div>
  </footer>


  <section class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="copyright">© 2025 Industrie. Designed By <span>Esspesoft</span></div>
        </div>
        <div class="col-md-4">
          <div class="copyright right">License</div>
        </div>
      </div>
    </div>
  </section>



  <!-- footer End -->






  <a href="https://wa.me/9051216392" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>





  <script src="js/wow.min.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="./js/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js">
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/SplitText.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<!-- GLightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>
  const lightbox = GLightbox({
    selector: '.glightbox',
    touchNavigation: true,
    loop: true,
    zoomable: true,
  });
</script>


  <script>
    AOS.init();
    new WOW().init();
  </script>



  <!-- // sticky -->
  <script>
    window.addEventListener('scroll', function() {
      const header = document.querySelector('header');
      header.classList.toggle('sticky', window.scrollY > 50);
    });
  </script>








  <script>
    $(document).ready(function() {
      $(".stacked-carousel").owlCarousel({
        loop: true,
        center: true,
        items: 1,
        margin: 0,
        nav: true,
        navText: ["<i class='fa fa-arrow-left-long'></i>", "<i class='fa fa-arrow-right-long'></i>"],
        smartSpeed: 600
      });
    });
  </script>

  <script>
    window.addEventListener("DOMContentLoaded", () => {
      document.querySelectorAll(".metric-bar-fill").forEach(el => {
        const width = el.style.width;
        el.style.width = "0";
        setTimeout(() => {
          el.style.width = width;
        }, 100); // small delay for animation
      });
    });
  </script>


  <script>
    window.addEventListener('scroll', function() {
      const items = document.querySelectorAll('.reveal1'); // Use the new class

      items.forEach(item => {
        const itemPosition = item.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (itemPosition < windowHeight - 100) {
          item.classList.add('show');
        }
      });
    });
  </script>

  <script>
    // When the page is scrolled, reveal items
    window.addEventListener('scroll', function() {
      const items = document.querySelectorAll('.reveal'); // Select all items with the class 'reveal'

      items.forEach(item => {
        const itemPosition = item.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        // Add 'show' class if the item is in the viewport
        if (itemPosition < windowHeight) {
          item.classList.add('show');
        }
      });
    });
  </script>


  <script>
    // Select all text containers
    const textContainers = document.querySelectorAll('.text-container');

    // Loop through each text container
    textContainers.forEach(textContainer => {
      // Apply SplitText to split into words and characters
      const splitText = new SplitText(textContainer, {
        type: "words,chars"
      });
      const chars = splitText.chars; // Array of individual characters
      const words = splitText.words; // Array of words (useful for spacing corrections)

      // Ensure proper word breaks with wrapping CSS if needed
      textContainer.style.wordWrap = "break-word";

      // Create a ScrollTrigger animation
      gsap.from(chars, {
        duration: 1.1,
        opacity: 0,
        y: 50,
        stagger: 0.02,
        ease: "power2.out",
        scrollTrigger: {
          trigger: textContainer, // The element that triggers the animation
          start: "top bottom", // Trigger the animation when the top of the container reaches the bottom of the viewport
          end: "bottom top", // End the animation when the bottom of the container reaches the top of the viewport
          once: true, // This ensures the animation runs only once
          markers: false // Set to true if you want to see the start/end points for debugging
        }
      });
    });
  </script>




<script>
  const counters = document.querySelectorAll('.counter');

  counters.forEach(counter => {
    const updateCount = () => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText.replace("+", ""); // remove + if already present

      const increment = target / 200;

      if(count < target){
        counter.innerText = Math.ceil(count + increment) + "+";
        setTimeout(updateCount, 10);
      } else {
        counter.innerText = target + "+";
      }
    };

    // Animate only when visible
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if(entry.isIntersecting){
          updateCount();
          observer.unobserve(counter);
        }
      });
    }, { threshold: 0.5 });

    observer.observe(counter);
  });
</script>

<script>
  $(document).ready(function(){
    // Product Cards Carousel
    $('.product-carousel').owlCarousel({
      loop:true,
      margin:20,
      nav:true,
      navText: ["<i class='fa fa-arrow-left-long'></i>", "<i class='fa fa-arrow-right-long'></i>"],
      dots:false,
      responsive:{
        0:{ items:1 },
        576:{ items:1.5 },
        768:{ items:2 },
        992:{ items:3 }
      }
    });

    // Partners Carousel
    $('.partners-carousel').owlCarousel({
      loop:true,
      margin:30,
      autoplay:true,
      autoplayTimeout:2500,
      autoplayHoverPause:true,
      nav:false,
      dots:false,
      responsive:{
        0:{ items:2 },
        576:{ items:3 },
        768:{ items:4 },
        992:{ items:5 },
        1200:{ items:6 }
      }
    });
    // Projectgallery Carousel
    $('.project-carousel').owlCarousel({
      loop:true,
      margin:20,
      autoplay:true,
      autoplayTimeout:2500,
      autoplayHoverPause:true,
      nav:true,
      navText: ["<i class='fa fa-arrow-left-long'></i>", "<i class='fa fa-arrow-right-long'></i>"],
      dots:false,
      responsive:{
        0:{ items:1 },
        576:{ items:2 },
        768:{ items:3 },
        992:{ items:3 },
        1200:{ items:3 }
      }
    });
  });
</script>



<script>
$(document).ready(function(){

  var avatar = $(".avatar-carousel");
  var testimonial = $(".testimonial-carousel");

  avatar.owlCarousel({
    items:5,
    margin:15,
    center:true,
    dots:false,
    nav:false,
    // loop:true,
  });

  testimonial.owlCarousel({
    items:1,
    // loop:true,
    dots:false,
    nav:false,
    autoplay:true,
    autoplayTimeout:5000,
    smartSpeed:600
  });

  // Sync testimonial → avatar
  testimonial.on('changed.owl.carousel', function(event) {
    var index = event.item.index;
    avatar.trigger('to.owl.carousel', [index, 300, true]);
    $('.avatar-item').removeClass('active');
    $('.avatar-item').eq(index).addClass('active');
  });

  // Avatar click → testimonial
  $('.avatar-item').click(function(){
    var index = $(this).parent().index();
    testimonial.trigger('to.owl.carousel', [index, 300, true]);
  });

  $('.avatar-item').eq(0).addClass('active');

});
</script>



  </body>

  </html>