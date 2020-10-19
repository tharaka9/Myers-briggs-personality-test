<?php include('inc/server.php'); 
//if uer not logged user cant access this

if (empty($_SESSION['username'])) {
    header('location:check.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Your Secret Super Power</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/swiper.css" rel="stylesheet">
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="assets/images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">


        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.php"><img src="assets/images/logo2.png" alt="alternative"> </a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="types_log.php">Personality Types</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">|</a>
                </li>
                <li class="nav-item">
                <?php if (isset($_SESSION["username"])): ?>
                    <a class="nav-link page-scroll" href="index.php?logout='1'">Logout</a>
            <?php endif ?>   

                </li>
                <li class="nav-item">
                    <a class="nav-link">|</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><?php echo $_SESSION['username']; ?></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">It’s so incredible to finally be understood.</h1>>
                        </div> 
                    </div> 
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="assets/images/0 wEmlOz38AOE-XwZB.png" alt="alternative">
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </header> 
    <!-- end of header -->


    <div class="container">
      <div class="row">
          <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/intj-architect.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Architect</h5>
                  <p class="card-text">An Architect (INTJ) is a person with the Introverted, Intuitive, Thinking, and Judging personality traits. These thoughtful tacticians love perfecting the details of life, applying creativity and rationality to everything they do. Their inner world is often a private, complex one.</p>
                </div>
              </div>

          </div>
          <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/logician.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Logican</h5>
                  <p class="card-text">A Logician (INTP) is someone with the Introverted, Intuitive, Thinking, and Prospecting personality traits. These flexible thinkers enjoy taking an unconventional approach to many aspects of life. They often seek out unlikely paths, mixing willingness to experiment with personal creativity.</p>
                </div>
              </div>

        </div>
        <div class="col-3">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/commander.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Commander</h5>
    <p class="card-text">A Commander (ENTJ) is someone with the Extraverted, Intuitive, Thinking, and Judging personality traits. They are decisive people who love momentum and accomplishment. They gather information to construct their creative visions but rarely hesitate for long before acting on them.</p>
  </div>
</div>
        </div>
        <div class="col-3">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/debater.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Debater</h5>
    <p class="card-text">A Debater (ENTP) is a person with the Extraverted, Intuitive, Thinking, and Prospecting personality traits. They tend to be bold and creative, deconstructing and rebuilding ideas with great mental agility. They pursue their goals vigorously despite any resistance they might encounter.</p>
  </div>
</div>
        </div>
          </div>    
          <div class="row">
            <div class="col-3">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/advocate.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Advocate</h5>
    <p class="card-text">An Advocate (INFJ) is someone with the Introverted, Intuitive, Feeling, and Judging personality traits. They tend to approach life with deep thoughtfulness and imagination. Their inner vision, personal values, and a quiet, principled version of humanism guide them in all things.</p>
  </div>
</div>
            </div>
            <div class="col-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/protagonist.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Protagonist</h5>
    <p class="card-text">A Protagonist (ENFJ) is a person with the Extraverted, Intuitive, Feeling, and Judging personality traits. These warm, forthright types love helping others, and they tend to have strong ideas and values. They back their perspective with the creative energy to achieve their goals.</p>
  </div>
</div>
          </div>
          <div class="col-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/mediator.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Mediator</h5>
    <p class="card-text">A Mediator (INFP) is someone who possesses the Introverted, Intuitive, Feeling, and Prospecting personality traits. These rare personality types tend to be quiet, open-minded, and imaginative, and they apply a caring and creative approach to everything they do.</p>
  </div>
</div>
          </div>
          <div class="col-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/campaigner.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Campaigner</h5>
    <p class="card-text">A Campaigner (ENFP) is someone with the Extraverted, Intuitive, Feeling, and Prospecting personality traits. These people tend to embrace big ideas and actions that reflect their sense of hope and goodwill toward others. Their vibrant energy can flow in many directions.</p>
  </div>
</div>
          </div>
            </div>  
            <div class="row">
                <div class="col-3">
        <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/logistician.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Logistician</h5>
    <p class="card-text">A Logistician (ISTJ) is someone with the Introverted, Observant, Thinking, and Judging personality traits. These people tend to be reserved yet willful, with a rational outlook on life. They compose their actions carefully and carry them out with methodical purpose.</p>
  </div>
</div>
                </div>
                <div class="col-3">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/defender.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Defender</h5>
    <p class="card-text">A Defender (ISFJ) is someone with the Introverted, Observant, Feeling, and Judging personality traits. These people tend to be warm and unassuming in their own steady way. They’re efficient and responsible, giving careful attention to practical details in their daily lives.</p>
  </div>
</div>
              </div>
              <div class="col-3">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/executive.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Executive</h5>
    <p class="card-text">An Executive (ESTJ) is someone with the Extraverted, Observant, Thinking, and Judging personality traits. They possess great fortitude, emphatically following their own sensible judgment. They often serve as a stabilizing force among others, able to offer solid direction amid adversity</p>
  </div>
</div>
              </div>
              <div class="col-3">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/consul.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Consul</h5>
    <p class="card-text">A Consul (ESFJ) is a person with the Extraverted, Observant, Feeling, and Judging personality traits. They are attentive and people-focused, and they enjoy taking part in their social community. Their achievements are guided by decisive values, and they willingly offer guidance to others.</p>
  </div>
</div>
              </div>
                </div> 
                
                <div class="row">
                    <div class="col-3">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/virtuoso.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Virtuoso</h5>
    <p class="card-text">A Virtuoso (ISTP) is someone with the Introverted, Observant, Thinking, and Prospecting personality traits. They tend to have an individualistic mindset, pursuing goals without needing much external connection. They engage in life with inquisitiveness and personal skill, varying their approach as needed.</p>
  </div>
</div>
                    </div>
                    <div class="col-3">
          <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/isfp-adventurer.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Adventurer</h5>
    <p class="card-text">An Adventurer (ISFP) is a person with the Introverted, Observant, Feeling, and Prospecting personality traits. They tend to have open minds, approaching life, new experiences, and people with grounded warmth. Their ability to stay in the moment helps them uncover exciting potentials.</p>
  </div>
</div>
                  </div>
                  <div class="col-3">
          <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/entrepreneur.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Entrepreneur</h5>
    <p class="card-text">An Entrepreneur (ESTP) is someone with the Extraverted, Observant, Thinking, and Prospecting personality traits. They tend to be energetic and action-oriented, deftly navigating whatever is in front of them. They love uncovering life’s opportunities, whether socializing with others or in more personal pursuits.</p>
  </div>
</div>
                  </div>
                  <div class="col-3">
          <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/images/entertainer.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Entertainer</h5>
    <p class="card-text">An Entertainer (ESFP) is a person with the Extraverted, Observant, Feeling, and Prospecting personality traits. These people love vibrant experiences, engaging in life eagerly and taking pleasure in discovering the unknown. They can be very social, often encouraging others into shared activities.</p>
  </div>
</div>
                  </div>
                    </div>  

        </div> <!-- end of container -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="#">Your Secret Super Power</a> - All rights reserved</p>
                </div> 
            </div> 
        </div> 
    </div> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="assets/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="assets/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="assets/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="assets/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="assets/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>