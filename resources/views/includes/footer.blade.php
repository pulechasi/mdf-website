<!-- //footer -->
<footer>
    <div class="footer-top text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h4 class="navbar-brand">Contact Us<span class="dot"></span></h4>
                    <p>
                        Malawi Defence Force Headquarters<br>

                        Kamuzu Barracks - Chidzanja Road <br>

                        Private Bag 43 <br>

                        Lilongwe - Malawi
                    </p>
                    <!-- <div class="col-auto social-icons">
                        <a href="#"><i class="bx bxl-facebook"></i></a>
                        <a href="#"><i class="bx bxl-twitter"></i></a>
                        <a href="#"><i class="bx bxl-instagram"></i></a>
                        <a href="#"><i class="bx bxl-pinterest"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mb-0" id="copyright-year">Copyright@2022. All rights Reserved</p>
    </div>

</footer>


<script src="{{ asset('app/js/jquery.min.js') }}"></script>
<script src="{{ asset('app/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('app/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('app/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>




<script>
    const currentYear = new Date().getFullYear();
    document.getElementById('copyright-year').textContent = `Copyright@${currentYear}. All rights Reserved`;
</script>


<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll(".dropdown-menu").forEach(function(element) {
            element.addEventListener("click", function(e) {
                e.stopPropagation();
            });
        });
    });
    // DOMContentLoaded  end

    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var missionSection = document.getElementById("missionSection");
        var visionSection = document.getElementById("visionSection");
        var scrollSection = document.getElementById("scrollSection");

        window.addEventListener("scroll", function() {
            if (isElementInViewport(missionSection)) {
                missionSection.classList.add("visible-section");
                missionSection.classList.remove("hidden-section");
            } else {
                missionSection.classList.add("hidden-section");
                missionSection.classList.remove("visible-section");
            }

            if (isElementInViewport(visionSection)) {
                visionSection.classList.add("visible-section");
                visionSection.classList.remove("hidden-section");
            } else {
                visionSection.classList.add("hidden-section");
                visionSection.classList.remove("visible-section");
            }

            if (isElementInViewport(scrollSection)) {
                scrollSection.classList.add("visible-section");
                scrollSection.classList.remove("hidden-section");
            } else {
                scrollSection.classList.add("hidden-section");
                scrollSection.classList.remove("visible-section");
            }
        });

        function isElementInViewport(element) {
            var rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }
    });
</script>






</body>

</html>
