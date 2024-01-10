<!-- end partners -->
<section>
    <div class="container">
        <div class="row">
        </div>
    </div>
</section>
<!-- end partners -->
<!-- start footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="social-media-wrapper">
                <p class="stay-connected">Stay Connected!</p>
                <ul class="social-media-icons">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <p>Copyright © 2025 JURSE.</p>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Scripts -->
<!-- Bootstrap core JavaScript -->

<script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('frontend/assets/js/tabs.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper.js') }}"></script>
<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

<script>
    const interleaveOffset = 0.5;

    const swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        on: {
            progress: function () {
                const swiper = this;
                for (let i = 0; i < swiper.slides.length; i++) {
                    const slideProgress = swiper.slides[i].progress;
                    const innerOffset = swiper.width * interleaveOffset;
                    const innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".slide-inner").style.transform =
                        "translate3d(" + innerTranslate + "px, 0, 0)";
                }
            },
            touchStart: function () {
                const swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = "";
                }
            },
            setTransition: function (speed) {
                const swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".slide-inner").style.transition =
                        speed + "ms";
                }
            }
        }
    };

    const swiper = new Swiper(".swiper-container", swiperOptions);
    function myFunction() {
        var input, filter, sessionsdiv, divs, nodes, current_div, i, txtValue, dates;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        sessionsdiv = document.getElementById("sessions");
        nodes = sessionsdiv.childNodes;
        for (i = 0; i < nodes.length; i++) {
            if (nodes[i].nodeName.toLowerCase() == 'div') {
                current_div = nodes[i]
                if (current_div) {
                    txtValue = current_div.textContent || current_div.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        nodes[i].style.display = "";
                    } else {
                        nodes[i].style.display = "none";
                    }
                }
            }
        }
        dates = document.getElementsByClassName("date-header");
        if(filter.length > 0)
        {
            for(i = 0; i < dates.length; ++i) dates[i].style.display = "none";
        }
        else
        {
            for(i = 0; i < dates.length; ++i) dates[i].style.display = "";
        }
    }
    // Get all toggle headers
    const toggleHeaders = document.querySelectorAll('.toggle-header');

    // Add click event listener to each toggle header
    toggleHeaders.forEach((header) => {
        header.addEventListener('click', function () {
            // Toggle the display of the content
            const content = this.nextElementSibling;
            content.style.display = content.style.display === 'none' ? 'block' : 'none';

            // Toggle the open and closed icons
            const closedIcon = this.querySelector('.toggle-closed');
            const openIcon = this.querySelector('.toggle-open');
            closedIcon.style.display = closedIcon.style.display === 'none' ? 'inline-block' : 'none';
            openIcon.style.display = openIcon.style.display === 'none' ? 'inline-block' : 'none';
        });
    });
</script>
</body>
</html>
