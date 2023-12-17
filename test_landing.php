<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Parallax Scrolling</title>
  <style>
    /* Style for sections */
    .section {
      height: 100vh; /* Adjust height as needed */
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-size: 3rem;
    }
    .section1 {
      background-color: #3498db;
    }
    .section2 {
      background-color: #2ecc71;
    }
    .section3 {
      background-color: #e74c3c;
    }
    /* Parallax effect */
    .parallax {
      background-image: url("carousal-1.png");
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>
<body>

<div class="section section1">Section 1</div>

<div class="parallax">
  <div class="section section2">Section 2</div>
</div>

<div class="section section3">Section 3</div>

<script>
  // Parallax effect
  window.addEventListener('scroll', function(){
    const parallax = document.querySelector('.parallax');
    let scrollPosition = window.pageYOffset;
    parallax.style.backgroundPositionY = scrollPosition * 0.5 + 'px'; // Adjust speed here
  });
</script>

</body>
</html>
