<?php
//inisialisasi session
session_start();
 
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}
 
?>
 

 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
    <!-- CSS -->
    <link rel="stylesheet" href="portfolio.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Portfolio | Bayu Genta Permana</title>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Bayu Genta Permana</a>
        <a class="navbar-brand name" href="#">BGP.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <p class="block"></p>
              <a class="nav-link active Home" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link About" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Skills" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Work" href="#work">Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Service" href="#service">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Contact" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Logout" href="logout.php"> Logout <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </header>
    <br />
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <br />
        <p class="display-4">Hello</p>
        <p class="text">I'am 
  <div class="glitch" data-text="Bayu">Bayu</div>
  <div class="scanlines"></div></p>
        <p class="lead">A Front End Programmer</p>
        <a href="https://www.instagram.com/baygp03/" target="_blank"><i class="fa-brands fa-instagram instagram"></i></a>
        <a href="https://www.facebook.com/bayugenta.permana.5/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.youtube.com/channel/UCiL89Hb3yrxVwxgYLHTSfTw" target="_blank"><i class="fa-brands fa-youtube"></i></a>
        <img class="photo" src="img/1657854452401.png" alt="" />
      </div>
    </div>
    <br />
    <div class="container">
      <div class="about" id="about">
       <div data-aos="zoom-in" data-aos-delay="0" data-aos-duration="1000"> <center><p class="text-about">About Me</p></center></div>
        <br>
        <div data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"><img class="photo1" src="img/IMG_20220715_162354.png" alt=""></div>
        <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1500"><p class="text-me">Hello, I'am Bayu Genta Permana, I'am a Front End Programmer, I'am a Student who is currently Studying at the Software Engineering Vocational School at SMK Plus Pelita Nusantara. and the Becoming a Full Stack Programmer is my Dream. </p></div>
        <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"><a class="download nav-link active"  href="img/Bayu Genta Permana.jpeg" target="_blank" ><cv class="cv"> DOWNLOAD CV</cv></a></div>
      </div>
    </div>
    <div class="container">
      <div class="skills" id="skills">
       <div data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000"> <center><p class="text-skills">My Skills</p></center> </div>
       <br>
       <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"><img class="img-skills" src="img/Screenshot (206).png" alt=""> </div>
       <div data-aos="fade-down" data-aos-delay="0" data-aos-duration="700"><div class="skill-bars">   
    <div class="bar">
      <div class="info">
        <span>HTML</span>
      </div>
      <div class="progress-line html">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>CSS</span>
      </div>
      <div class="progress-line css">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Bootstrap</span>
      </div>
      <div class="progress-line bootstrap">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>JavaScript</span>
      </div>
      <div class="progress-line javascript">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Flutter</span>
      </div>
      <div class="progress-line flutter">
        <span></span>
      </div>
    </div>
  </div>
  </div>
      </div>
    </div>
    <div class="container">
      <div class="work" id="work">
       <div data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000"><center><p class="text-work">My Work</p></center> </div>
      </div>
      <div class="cards">
        <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
   <div data-aos="flip-left" data-aos-delay="100" data-aos-duration="800"> <div class="card">
      <img src="img/card/webonepice.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Website One Piece</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
   <div data-aos="flip-left" data-aos-delay="400" data-aos-duration="800"> <div class="card">
      <img src="img/card/katalog aci.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Website Katalog Product</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
<div data-aos="flip-left" data-aos-delay="700" data-aos-duration="800"> <div class="card">      
  <img src="img/card/private label.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Website Private Label</h5>
      </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div data-aos="flip-left" data-aos-delay="100" data-aos-duration="800"> <div class="card">
      <img src="img/card/katalog momchips.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Website Katalog Product</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div data-aos="flip-left" data-aos-delay="400" data-aos-duration="800"> <div class="card">
      <img src="img/card/lostsaga.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Website Lost Saga</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
   <div data-aos="flip-left" data-aos-delay="700" data-aos-duration="800"> <div class="card">
      <img src="img/card/klik disini.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Website Direct Click</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div data-aos="flip-left" data-aos-delay="100" data-aos-duration="800"> <div class="card">
      <img src="img/card/form momchips.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Website Form</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div data-aos="flip-left" data-aos-delay="400" data-aos-duration="800"> <div class="card">
      <img src="img/card/hosting indonesia.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Website Hosting</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
   <div data-aos="flip-left" data-aos-delay="700" data-aos-duration="800"> <div class="card">
      <img src="img/card/3d virtual store.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Website 3D Store</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
  <div data-aos="flip-left" data-aos-delay="100" data-aos-duration="800"> <div class="card">
      <img src="img/card/form aci.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Website Form</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div data-aos="flip-left" data-aos-delay="400" data-aos-duration="800"> <div class="card">
      <img src="img/card/onepiece.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Website Portfolio</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div data-aos="flip-left" data-aos-delay="700" data-aos-duration="800"> <div class="card">
      <img src="img/card/school.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title down">Website Landing Pages</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
</div>
</div>
<br>
<div class="container">
  <div class="service" id="service">
       <div data-aos="zoom-in" data-aos-delay="0" data-aos-duration="1500"> <center><p class="text-service">My Services</p></center></div>
       <div data-aos="fade-right" data-aos-delay="0" data-aos-duration="1000"><h1 class="title-service"> 3D Virtual Store</h1></div> 
       <div data-aos="fade-right" data-aos-delay="600" data-aos-duration="1300"><video class="video" src="video/km_20220716_540p.mp4" controls></video></div>
       <div data-aos="fade-right" data-aos-delay="300" data-aos-duration="1100"><p class="text-3d">3D Virtual Store is a Website but in the form of your Store, and 3D Virtual Store is a Service that helps Entrepreneurs who are just starting a Business and don't have enough	Capital Employed to open a Real Store. Even in this Digital Age, it is very suitable for new Entrepreneurs to have a 3D Virtual Store, so that Customers at Home can see your Products as in the Store directly with this 3D Virtual Store.</p></div>
       <br>
  </div>
</div>
<div class="container">
  <div class="interested">
    <div data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000"><img src="img/1658021857514.png" alt="" class="image-service"></div>
    <div data-aos="fade-right" data-aos-delay="400"  data-aos-duration="2000"><p class="text-image">Interested in Creating <br> Your Own  3D Virtual Store?</p></div>
    <br>
    <div data-aos="fade-right" data-aos-delay="500" data-aos-duration="1300"><p class="team"> Contact My Team</p></div>
    <div data-aos="fade-up" data-aos-delay="650" data-aos-duration="1000"><a href="https://wa.wizard.id/b2d141" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></div>
    <div data-aos="fade-up" data-aos-delay="650" data-aos-duration="1000"><a href="https://www.instagram.com/h3dvirtual/" target="_blank"><i class="fa-brands fa-instagram ig"></i></a></div>
    <br>
  </div>
</div>
<div class="container">
  <div class="contact" id="contact">
        <div data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000"><center><p class="text-contact">Contact Me</p></center></div>
   <form name="contact-form" method="post" action="add.php">
      <div class="input-container">
         <div data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000"><input type="text" id="name" name="nama" class="text-input" autocomplete="off" placeholder="Name" required/></div>
        <br>
        <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"><input type="email" id="email" name="email" class="text-input" autocomplete="off" placeholder="Email" required/></div>
        <br>
         <div data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000"><textarea type="text" name="message" id="message" class="text-input" placeholder="Message" ></textarea></div>
        <br>
       <div data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000"> <input type="submit" name="submit" id="send" class="text-input" autocomplete="off" value="Send" required/></div>
      </div>
    </form>
  </div>
</div>


<p class="created"> Created By Bayu Genta Permana</p>
<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzuD2m2DzwrTyJvyMPhKEGOX9DZVtMRswMX4zzaRtdSaEfZ8LozkBEixLpL8-c9_rAHiw/exec'
  const form = document.forms['contact-form']
  form.reset();
  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response =>  console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
  })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script>
 gsap.from(".display-4", { duration: 1, x: -100, opacity: 0, scale: 1.1 });
 gsap.from(".text", { duration: 1, x: -100, opacity: 0, scale: 1.1 });
 gsap.from(".glitch", { duration: 1, x: -100, opacity: 0, scale: 1.1 });
 gsap.from(".lead", { duration: 1, x: -100, opacity: 0, scale: 1.1 });
 gsap.to(".fa-brands", { duration: 1, y: -80, ease: "bounce" });
 gsap.from(".photo", { duration: 1, y: 200, opacity: 0, scale: 0 });
</script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- AOS ANIMATION -->
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  
  </body>
</html>
