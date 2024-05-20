<!-- <link rel="stylesheet" href="resources/css/header.css"> -->
<!-- <header> -->
<link rel="stylesheet" href="resources/css/style.css">
    <?php include 'resources/includes/header.php';?>    
<!-- </header> -->

    <div class="carousel slide carousel1" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="resources/images/carousel/Heroslide1.svg" class=" w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="resources/images/carousel/Heroslide2.svg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="resources/images/carousel/Heroslide3.svg" class="d-block w-100" alt="...">
          </div>
        </div>
    </div>
    <div id="about-us">
        <div class="about-left">
            <img class= "rounded-image" src="resources/images/about-image.png" alt="">
        </div>
        <div class="about-right">
            <h3 class="h3-text">ABOUT US</h3>
            <h1 class="h1-text">Get all the <br> Details About Us</h1>
            <p class="p-text">As a key decision-maker, your expertise is more valuable to your company <br>
                 than the time you spend supporting and manageing your IT systes
            </p>
            
            <div class="more-buttons">
                <button class="more-about yellow-button" onclick="toggle_more_about()"><a href="#about-us">More about Us</a></button>
                <button class="contact-link"><a href="#">Contact us Today <i class="fa-solid fa-arrow-right"></i></a></button>
            </div>
        </div>
        <div class="toggle-more-about no-display">
            <h3 class="h3-text" style="text-align:center;font-size:1.2em"><strong>ABOUT US</strong></h3>
            <p class="p-text" style="text-align:center;font-size:1em">As a key decision-maker, your expertise is more valuable to your company <br>
                 than the time you spend supporting and manageing your IT systes
            </p>
            <div class="about-details">
                <div class="about-more-1 more">
                    <h3>About Us</h3>
                    <br>
                    <p>Ceries Technology was formed in 2004 to provide flexible and dynamic IT Support services for small and midsize businesses. We are customer focused therefore we offer solutions to fit our customer’s business needs and deliver value to their business.
                        <br><br>
                        We help clients improve organisational and individual performance by leveraging our industry knowledge to deliver a well-managed IT infrastructure, backed up by expert IT support and advice.</p>
                </div>
                <div class="about-more-2 more">
                    <h3>Our Operation Center</h3>
                    <br>
                    <p>Our office is within 5mins walk from Moorgate Tube station at Finsbury square in Central London. We have engineers around the City that would get to most customer very quickly.</p>
                </div>
                <div class="about-more-3 more">
                    <h3>Our Expertise</h3>
                    <br>
                    <p>We are primarily a Microsoft House and offer solutions that deliver services to you AnyWhere and all the time. We have partnership with various organisations like Microsoft, VMware, Cisco, HP, Draytek and AVG
                        <br><br>
                        Our offerings include consultancy services to businesses, selecting appropriate products and services, designing and implementing these solutions.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="services">
        <div class="services-top">
            <h3 class="h3-text">SERVICES</h3>
            <h2>Services we Offer</h2>
            <p class="p-text">Our advisory services is independent and geared to the specific needs of each client.</p>
        </div>
        <div class="services-list">
            <div class="service"> 
                <img class="service-image" src="resources/images/icon/icon1.svg" alt="icon">              
                <h3 class="list-header">
                    Remote Working Solutions
                </h3>   
                <a href="#" class="service-link">Read more <i class="fa-solid fa-arrow-right"></i></a>       
            </div>
            <div class="service"> 
                <img class="service-image" src="resources/images/icon/icon2.svg" alt="icon">              
                <h3 class="list-header">
                    Back-up & Business Continuity
                </h3>   
                <a href="#" class="service-link">Read more <i class="fa-solid fa-arrow-right"></i></a>       
            </div>
            <div class="service"> 
                <img class="service-image" src="resources/images/icon/icon3.svg" alt="icon">              
                <h3 class="list-header">
                    Business Intelligence Services
                </h3>   
                <a href="#" class="service-link">Read more <i class="fa-solid fa-arrow-right"></i></a>       
            </div>
            <div class="service"> 
                <img class="service-image" src="resources/images/icon/icon4.svg" alt="icon">              
                <h3 class="list-header">
                    Infrastructure Support & Maintainence
                </h3>   
                <a href="#" class="service-link">Read more <i class="fa-solid fa-arrow-right"></i></a>       
            </div>
            <div class="service"> 
                <img class="service-image" src="resources/images/icon/icon5.svg" alt="icon">              
                <h3 class="list-header">
                    User Support & Training
                </h3>   
                <a href="#" class="service-link">Read more <i class="fa-solid fa-arrow-right"></i></a>       
            </div>
            <div class="service"> 
                <img class="service-image" src="resources/images/icon/icon6.svg" alt="icon">              
                <h3 class="list-header">
                    Security Services
                </h3>   
                <a href="#" class="service-link">Read more <i class="fa-solid fa-arrow-right"></i></a>       
            </div>
            <div class="service"> 
                <img class="service-image" src="resources/images/icon/icon7.svg" alt="icon">              
                <h3 class="list-header">
                    Virtualisation
                </h3>   
                <a href="#" class="service-link">Read more <i class="fa-solid fa-arrow-right"></i></a>       
            </div>
            <div class="service"> 
                <img class="service-image" src="resources/images/icon/icon8.svg" alt="icon">              
                <h3 class="list-header">
                    Advisory Services
                </h3>   
                <a href="#" class="service-link">Read more <i class="fa-solid fa-arrow-right"></i></a>       
            </div>
            <div class="service"> 
                <img class="service-image" src="resources/images/icon/icon9.svg" alt="icon">              
                <h3 class="list-header">
                    Infrastructure audits & Reviews
                </h3>   
                <a href="#" class="service-link">Read more <i class="fa-solid fa-arrow-right"></i></a>       
            </div>
            <div class="service"> 
                <img class="service-image" src="resources/images/icon/icon10.svg" alt="icon">              
                <h3 class="list-header">
                    Microsoft Infrastructure Support
                </h3>   
                <a href="#" class="service-link">Read more <i class="fa-solid fa-arrow-right"></i></a>       
            </div>
            <div class="service"> 
                <img class="service-image" src="resources/images/icon/icon11.svg" alt="icon">              
                <h3 class="list-header">
                    Infrastructure Design & Implementation
                </h3>   
                <a href="#" class="service-link">Read more <i class="fa-solid fa-arrow-right"></i></a>       
            </div>
            <div class="service"> 
                <img class="service-image" src="resources/images/icon/icon12.svg" alt="icon">              
                <h3 class="list-header">
                    Web Developement & SEO
                </h3>   
                <a href="#" class="service-link">Read more <i class="fa-solid fa-arrow-right"></i></a>       
            </div>

        </div>
    </div>
    <div class="ssl">
        <img src="resources/images/ssl.svg" alt="ssl">
    </div>
    <div id="clients">
        <div class="clients-left">
            <h3 class="h3-text">CLIENTS</h3>
            <h1 class="h1-text">Get all the <br> Details About Us</h1>
            <p class="p-text">As a key decision-maker, your expertise is more valuable to your company than the time you spend supporting and managing your IT systems</p>
            <button class="more-clients yellow-button"><a href="#">See Our Clients</a></button>
            <button class="contact-link"><a href="#">Contact us Today <i class="fa-solid fa-arrow-right"></i></a></button>
        </div>
        <div class="clients-right">
            <img src="resources/images/client.svg" alt="clients">
        </div>
    </div>
    <div id="partners">
        <h3 class="h3-text">PARTNERS</h3>
        <h1 class="h1-text">Companies we Work With</h1>
        <p class="p-text">Our advisory services is independent and geared to the specific needs of each client.</p>
        <div class="partner-images">
            <img src="resources/images/partners/partner1.svg" alt="partner1">
            <img src="resources/images/partners/partner2.svg" alt="partner2">
            <img src="resources/images/partners/partner3.svg" alt="partner3">
            <img src="resources/images/partners/partner4.svg" alt="partner4">
            <img src="resources/images/partners/partner5.svg" alt="partner5">
            <img src="resources/images/partners/partner6.svg" alt="partner6">
            <img src="resources/images/partners/partner7.svg" alt="partner7">
            <img src="resources/images/partners/partner8.svg" alt="partner8">
        </div>
        <button class="partners-read-more yellow-button" style="width:25%; height: 5%; padding: 0;"><a href="#">Read more about our partners <i class="fa-solid fa-arrow-right"></i></a></button>
    </div>

    <div id="testimonials">
        <div class="testimonial-top">
            <h3 class="h3-text">TESTIMONIALS</h3>
            <h1 class="h1-text">What People Say About Us</h1>
            <p class="p-text">Our Advisory services is independent and geared to the specific needs of each client.</p>
        </div>
        <div class="testimonial-bottom">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner testimonials">
                <div class="carousel-item active carousel2-item">
                    <img src="resources/images/testimonial1.svg" class="d-block w-100" alt="...">
                    <h1>Ades</h1>
                    <p>"The Job that Ceries Technology did is amazing. They promised quality and delivered, the project was done on time and on budget. They udnerstood our 
                        requirements and helped to formulate the right strategy forward. Now they are regarded as part of out internal IT team."
                    </p>
                    <img src="resources/images/Avatar.svg" alt="avatar">
                    <h4>Micheal Adedipe</h4>
                    <span>Director</span>
                </div>
                <div class="carousel-item carousel2-item">
                    <img src="resources/images/testimonial1.svg" class="d-block w-100" alt="...">
                    <h1>Ades</h1>
                    <p >"The Job that Ceries Technology did is amazing. They promised quality and delivered, the project was done on time and on budget. They udnerstood our 
                        requirements and helped to formulate the right strategy forward. Now they are regarded as part of out internal IT team."
                    </p>
                    <img src="resources/images/Avatar.svg" alt="avatar">
                    <h4>Micheal Adedipe</h4>
                    <span>Director</span>
                </div>
                <div class="carousel-item carousel2-item">
                    <img src="resources/images/testimonial1.svg" class="d-block w-100" alt="...">
                    <h1>Ades</h1>
                    <p>"The Job that Ceries Technology did is amazing. They promised quality and delivered, the project was done on time and on budget. They udnerstood our 
                        requirements and helped to formulate the right strategy forward. Now they are regarded as part of out internal IT team."
                    </p>
                    <img src="resources/images/Avatar.svg" alt="avatar">
                    <h4>Micheal Adedipe</h4>
                    <span>Director</span>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="testimonal-img-group">
                <img src="resources/images/testimonials/image 19.svg" alt="testimonial">
                <img src="resources/images/testimonials/image 20.svg" alt="testimonial">
                <img src="resources/images/testimonials/image 21.svg" alt="testimonial">
                <img src="resources/images/testimonials/image 22.svg" alt="testimonial">
                <img src="resources/images/testimonials/image 23.svg" alt="testimonial">
                <img src="resources/images/testimonials/image 24.svg" alt="testimonial">
                <img src="resources/images/testimonials/image 25.svg" alt="testimonial">
            </div>
        </div>
    </div>
    <div id="contacts">
        <div class="contacts-left">
            <h3 class="h3-text">CONTACT US</h3>
            <h1 class="h1-text" style="font-size: 3em">Want to Work with Us?</h1>
            <p class="p-text">Mondays to Fridays - 8a.m to 5p.m</p>
            <br>
            <button class="partners-read-more yellow-button"><a href="#">Send us a message<i class="fa-solid fa-arrow-right"></i></a></button>
        </div>
        <div class="contacts-right">
            <h4>OFFICE</h4>
            <p class="p-text">Thames Innovation Center: No 2 Veridon Way, Erith, Kent, DA18 4AL</p>
            <div class="contact">
                <img src="resources/images/icon/icon13.svg" alt="icon13"><p class="p-text">+44 207 920 6490</p>  
            </div>
            <div class="contact">
                <img src="resources/images/icon/icon14.svg" alt="icon14"><p class="p-text">service@ceries.co.uk</p>
            </div>
            <div class="contact">
                <img src="resources/images/icon/icon15.svg" alt="icon15"><p class="p-text">+44 207 920 6490</p>
            </div>
            <div class="social">
                <p class="p-text">Reach Us on Our Socials:</p>
                <div class="social-links">
                    <a href="#"><img src="resources/images/socials/social1.svg" alt="linkedin"></a>
                    <a href="#"><img src="resources/images/socials/social2.svg" alt="twitter"></a>
                    <a href="#"><img src="resources/images/socials/social3.svg" alt="instagram"></a>
                    <a href="#"><img src="resources/images/socials/social4.svg" alt="facebook"></a>
                </div>
            </div>


        </div>
    </div>
    <script src="resources/js/script.js"></script>
    <?php include 'resources/includes/footer.php';?> 
