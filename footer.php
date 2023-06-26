<section id="footer-section">
        <footer class="section-p1">
            <div class="col">
                <h4>Contact Details</h4>
                <p class="none"><strong>Adress: </strong>-</p>
                <p class="none"><strong>Phone: </strong>011 346 8777 | 077 117 0441 | 077 617 0145</p>
                <p class="none"><strong>Woring Info: </strong>-</p>
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <h4>Our Services</h4>
                <a href="#"><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Vocational Training</a>
                <a href="#"><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Caring Of Mentally Retarded Persons</a>
                <a href="#"><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Issuing of ID Cards For Hearing Impaired People</a>
                <a href="#"><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Community Base Rehabilitation</a>
                <a href="#"><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Self Help Group</a>
                <a href="#"><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Early Childhood Development</a>
                <a href="#"><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Rehabilitation of Drug Addicts</a>
                <a href="#"><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Sign Language Service</a>
                <a href="#"><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Visually Handicapped Trust Fund</a>
                <a href="#"><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Other Services</a>
            </div>
    
            <div class="col">
                <h4>FAQ</h4>
                <a href="#">Sign Up</a>
                <a href="#">Terms and Conditions</a>
                <a href="#">Privacy Policy</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
            </div>
    
            <div class="col install">
                <h4>Related Links</h4>
                <p><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>State of Primary Health Care, <br> Epidemics and Covid Disease Control</p>
                <p><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Ministry of Health</p>
                <p><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Center for Achievements <br> and Wellbeing Web Portal</p>
                <p><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Center for Achievements <br> and Wellbeing Information Center</p>
                <p><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>National Secretariat for Elders</p>
                <p><i class="fa-solid fa-arrow-right" style="padding-right: 10px;"></i>Center for Achievements <br> and Wellbeing Secretariat for people with Disabilities</p>
                <p>Secure Payment Gateways</p>
                <img src="img/pay/pay.png" alt="">
            </div>
            <div class="copyright">
                <hr>
                <p class="none">CopyRight &copy; 2022 Center For Achievements and Wellbeing | All rights reserved</p>
                <p class="none" style="font-size:10px;">Website Developned By Invarto @ Dilen Sulakshana</p>
            </div>
        </footer>
    </section>


    


    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>

    <script>
        
        // --------------------Image Slider-------------

        const swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        loop: true,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });

        // ----------------------Reveal Animation------------------

        window.addEventListener('scroll', reveal);

        function reveal(){
            var reveals = document.querySelectorAll('.reveal');

            for(var i = 0; i < reveals.length; i++) {

                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if(revealtop < windowheight - revealpoint){
                    reveals[i].classList.add('active');
                }
                else{
                    reveals[i].classList.remove('active');
                }
            }
        }
        

    </script>
</body>
</html>