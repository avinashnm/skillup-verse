<!DOCTYPE html>
<html>
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=Kanit:wght@300&family=Oswald:wght@300&family=Raleway&family=Roboto+Condensed:wght@300&family=Roboto+Slab&family=Titillium+Web&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Bootstrap/JS/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="landing_page2.css">
</head>
<body>
  <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <img src="skillup_logo1.png" class="nav_logo"/>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <ul class="nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle majors-dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Majors</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Business Administration</a></li>
  <li><a class="dropdown-item" href="#">Computer Science</a></li>
  <li><a class="dropdown-item" href="#">Economics</a></li>
  <li><a class="dropdown-item" href="#">English Literature</a></li>
  <li><a class="dropdown-item" href="#">History</a></li>
  <li><a class="dropdown-item" href="#">Mathematics</a></li>
  <li><a class="dropdown-item" href="#">Chemistry</a></li>
  <li><a class="dropdown-item" href="#">Physics</a></li>

                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link login-link login-link" href="student-login-page.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup_page.html"><button class="signup-btn">Sign up</button></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="carousal-1.png" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="carousal-2.png" class="d-block w-100" alt="...">
      <button class='explore-courses-btn'>Explore Courses</button>
    </div>
    <div class="carousel-item">
      <img src="carousal-3.png" class="d-block w-100" alt="...">
      <button class='discover-instructors-btn'>Discover Instructors</button>
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
<div class="featured-courses-section">
  <h4 class="featured-courses-title">FEATURED COURSES</h4>
<div class="featured-courses-container owl-carousel owl-theme">
  <div class="card h-100 course-card">
    <img src="course-1.webp" class="card-img-top card-img"    alt="...">
    <div class="card-body">
      <h5 class="card-title course-title"   >PHP and MYSQL</h5>
      <p class="card-text course-desc"   >Explore the Backbone of Dynamic Websites:</br> Dive into PHP and MySQL for Robust Web Development. Learn to Build Interactive Web Applications and Dynamic Content Management Systems with this Comprehensive Course.</p>
    </div>
    <div class="card-footer">
      <button class="enroll-btn"   >Enroll Now</button>
    </div>
  </div>

  <div class="card h-100 course-card"  >
    <img src="course-2.jpg" class="card-img-top card-img"    alt="...">
    <div class="card-body">
      <h5 class="card-title course-title double-line-title"   >Web Programming with ASP.NET</h5>
      <p class="card-text course-desc"   >Master ASP.NET for Dynamic Web Development: Dive into Web Programming with ASP.NET to Learn the Foundations of Building Scalable, Secure, and Interactive Web Applications.</p>
    </div>
    <div class="card-footer">
        <button class="enroll-btn"   >Enroll Now</button>
    </div>
  </div>

  <div class="card h-100 course-card"  >
    <img src="course-3.png" class="card-img-top card-img"    alt="...">
    <div class="card-body">
      <h5 class="card-title course-title double-line-title"   >Data Communication and Networks</h5>
      <p class="card-text course-desc"   >Explore Data Communication and Networks: Delve into the Intricacies of Data Transmission, Networking Protocols, and Infrastructure Essentials, Empowering Your Understanding of Modern Communication Technologies.</p>
    </div>
    <div class="card-footer">
      <button class="enroll-btn"   >Enroll Now</button>
    </div>
  </div>

  <div class="card h-100 course-card"  >
    <img src="course-4.jpeg" class="card-img-top card-img"    alt="...">
    <div class="card-body">
      <h5 class="card-title course-title"   >Cyber Security</h5>
      <p class="card-text course-desc"   >Embark on a Journey into Cybersecurity: Uncover Threats, Defenses, and Strategies in Safeguarding Digital Assets. Equip Yourself with the Tools to Protect, Detect, and Respond to Cyber Threats.</p>
    </div>
    <div class="card-footer">
      <button class="enroll-btn"   >Enroll Now</button>
    </div>
  </div>

  <div class="card h-100 course-card"  >
    <img src="course-5.jpeg" class="card-img-top card-img"    alt="...">
    <div class="card-body">
      <h5 class="card-title course-title"   >Data Structures</h5>
      <p class="card-text course-desc"   >Unlock the World of Data Structures: Delve into Fundamental Concepts and Algorithms, Mastering the Art of Organizing, Storing, and Accessing Data Efficiently for Optimal Problem-Solving.</p>
    </div>
    <div class="card-footer">
      <button class="enroll-btn"   >Enroll Now</button>
    </div>
  </div>

  <div class="card h-100 course-card"  >
    <img src="course-6.jpg" class="card-img-top card-img"    alt="...">
    <div class="card-body">
      <h5 class="card-title course-title"   >Web Programming</h5>
      <p class="card-text course-desc"   >Empower Your Web Development Journey: Learn the Core Principles, Languages, and Technologies Behind Web Programming, Crafting Dynamic and Interactive Websites and Applications.</p>
    </div>
    <div class="card-footer">
      <button class="enroll-btn"   >Enroll Now</button>
    </div>
  </div>

  <div class="card h-100 course-card"  >
    <img src="course-7.jpg" class="card-img-top card-img"    alt="...">
    <div class="card-body">
      <h5 class="card-title course-title double-line-title"   >Computer Organization and Architecture</h5>
      <p class="card-text course-desc"   >Dive into Computer Organization and Architecture: Explore the Inner Workings of Computing Systems, Understanding Hardware, Memory, and Processing Structures that Shape Modern Computing.</p>
    </div>
    <div class="card-footer">
      <button class="enroll-btn"   >Enroll Now</button>
    </div>
  </div>

  <div class="card h-100 course-card"  >
    <img src="course-8.png" class="card-img-top card-img"    alt="...">
    <div class="card-body">
      <h5 class="card-title course-title double-line-title"   >Mathematics for Computer Science</h5>
      <p class="card-text course-desc"   >Unlock the Power of Mathematics in Computer Science: Dive into Mathematical Foundations, Algorithms, and Logic, Equipping Yourself with Essential Tools for Solving Complex Computational Challenges.</p>
    </div>
    <div class="card-footer">
      <button class="enroll-btn"   >Enroll Now</button>
    </div>
  </div>

  <div class="card h-100 course-card"  >
    <img src="course-9.jpg" class="card-img-top card-img"    alt="...">
    <div class="card-body">
      <h5 class="card-title course-title vdouble-line-title"   >Object Oriented Programming using C++</h5>
      <p class="card-text course-desc"   >Master Object-Oriented Programming with C++: Explore Classes, Inheritance, Polymorphism, and Data Abstraction, Unleashing the Power of OOP Concepts in Crafting Efficient and Scalable Solutions.</p>
    </div>
    <div class="card-footer">
      <button class="enroll-btn"   >Enroll Now</button>
    </div>
  </div>

  <div class="card h-100 course-card"  >
    <img src="course-10.jpg" class="card-img-top card-img"    alt="...">
    <div class="card-body">
      <h5 class="card-title course-title"   >Operating Systems</h5>
      <p class="card-text course-desc"   >Journey into Operating Systems: Explore the Core Concepts, Processes, Memory Management, and File Systems that Power Computer Operations and Facilitate Seamless User Experiences.</p>
    </div>
    <div class="card-footer">
      <button class="enroll-btn"   >Enroll Now</button>
    </div>
  </div>
</div>
</div>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="popup-content">
    <h2 class="popup-hdn">Excellent Pick !</h2>
    <p class="popup-subhdn">Get ready for an enriching learning experience</p>
    <p class="popup-message">Sign Up or Login to get started</p>
    <div class="popup-btn-section">
      <a class="nav-link" href="signup_page.html"><button id="signup-btn" class="signup-btn">Sign up</button></a>
      <div class="or-divider">
    <div class="or-line"></div>
    <div class="or-text">Or</div>
    <div class="or-line"></div>
  </div>
      <a href="student-login-page.html"><input type="submit" name="signup-btn" class="login-btn" value="Login"></a>
    </div>
  </div>
  <img class="professor-image" src="professor-approval-image.png"/>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    items: 4, // Change as needed
    loop: true, // Enable loop
    center: true,
    dots: true,
    autoplay: true, // Enable autoplay
    autoplayTimeout: 3000, // Set autoplay timeout
    margin: 20, // Adjust margins between items
    responsiveClass: true,
    responsive: {
      0:{
        items:1,
        dots: true,
        loop:true
      },
      600:{
        items:3,
        dots: true,
        loop:true
      },
      1000:{
        items:5,
        dots: true,
        loop:true
      }
    }
  });
});
</script>
<script src="landing_page.js"></script>
</body>
</html>
