<!-- Header for pages -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceries Technology</title>
    <script src="https://kit.fontawesome.com/9fc40e56a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="resources/css/header.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
    <div class="preheader">
        <p class="follow-text">Follow us on</p>
        <div class="socials">
            
                <a href="#"><img src="resources/images/socials/social1.svg" alt="linkedin"></a>
                <a href="#"><img src="resources/images/socials/social2.svg" alt="twitter"></a>
                <a href="#"><img src="resources/images/socials/social3.svg" alt="instagram"></a>
                <a href="#"><img src="resources/images/socials/social4.svg" alt="facebook"></a>
            <!-- <div class="preheader-right">
                <i class="fa-regular fa-circle-question"></i><span>Help</span>
                <i class="fa-light fa-globe"></i><span>English</span>
            </div> -->
        </div>
    </div>
    <nav>
        <div class="logo-container">
            <img src="resources/images/logo.png" alt="logo">
        </div>
        <div >
            <ul class="navlinks">
                <li class="navlink"><a href="index.php">Home</a></li>
                <li class="navlink" onclick="toggle_more_about()" style="cursor: pointer;">About Us</li>
                <li class="navlink">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" style="width: auto; ">
                            <li><a class="dropdown-item" href="services.php">Remote Working Solutions</a></li>
                            <li><a class="dropdown-item" href="services.php">Back-up & Business Continuity</a></li>
                            <li><a class="dropdown-item" href="services.php">Business Intelligence Services</a></li>
                            <li><a class="dropdown-item" href="services.php">Infrastructure Support & Maintainence</a></li>
                            <li><a class="dropdown-item" href="services.php">User Support & Training</a></li>
                            <li><a class="dropdown-item" href="services.php">Security Services</a></li>
                            <li><a class="dropdown-item" href="services.php">Virtualisation</a></li>
                            <li><a class="dropdown-item" href="services.php">Advisory Services</a></li>
                            <li><a class="dropdown-item" href="services.php">Infrastructure audits & Reviews</a></li>
                            <li><a class="dropdown-item" href="services.php">Microsoft Infrastructure Support</a></li>
                            <li><a class="dropdown-item" href="services.php">Infrastructure Design & Implemenatation</a></li>
                            <li><a class="dropdown-item" href="services.php">Web Developement & SEO</a></li>
                        </ul>
                    </div>
                </li>
                <li class="navlink">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Clients
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="clients.php">Our Clients</a></li>
                            <li><a class="dropdown-item" href="edu-charity.php">Education Charity</a></li>
                        </ul>
                </li class="navlink">
                <li class="navlink"><a href="partners.php">Partners</a></li>
                <li class="navlink"><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="quote-button"><button>Get a Quote</button></div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const navLinks = document.querySelectorAll('.navlink');
        navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(link => {
            link.classList.remove('active');
            });
            this.classList.add('active');
        });
        });
    </script>


<!-- Header for pages -->