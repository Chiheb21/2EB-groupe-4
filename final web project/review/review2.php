<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<title>review</title> 
   <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="review2.css" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>review</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="review.css">
        <script src="review.css" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="file:/// E :/fontawesome/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
           <img class="logo-image" src="image/logo.png" alt="">
            <nav>
                <ul class="nav__links">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Form</a></li>
                  <li><a href="#">Track your time</a></li>
                  <li><a href="#">Calendar</a></li>
                  <li><a href="review.php">Review</a></li>
                </ul>
            </nav>
            <a class="cta" href="">Login</a>
            <p class="menu cta">Menu</p>
        </header>

<div class="header">
	<h2>review</h2>
</div>
<div class="content">
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>thanks for your time</p>
    	<p> <a href="review.php" style="color: red;">add other review</a> </p>
    <?php endif ?>
</div>
</script>
        <div class="review" id="Review">
            <h1>student's review</h1>
            
            <div class="review_box">
                <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
        
                            <div class="profile_image">
                                <img src="image/man_dp6.jpg">
                            </div>
        
                            <div class="name">
                                <strong>yamdi amine</strong>
        
                                
                            </div>
        
                        </div>
                    </div>
                    <div class="comment">
                        <p>
                            The design is very  consistent  throughout all of the pages- clean and
easy to read.  Well done!
                        </p>
                    </div>
                </div>   
        
                <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
        
                            <div class="profile_image">
                                <img src="image/man_dp1.jpg">
                            </div>
        
                            <div class="name">
                                <strong>Chiheb Hamrouni</strong>
        
                                
                            </div>
        
                        </div>
                    </div>
                    <div class="comment">
                        <p>
                            This site definitely  appeals to the average person because the layout is so  simple  but very  VERY  effective.
                        </p>
                    </div>
                </div>   
        
                <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
        
                            <div class="profile_image">
                                <img src="image/man_dp2.jpg">
                            </div>
        
                            <div class="name">
                                <strong>Feres B'l</strong>
        

                            </div>
        
                        </div>
                    </div>
                    <div class="comment">
                        <p>
                            soft and warm colors and  minimum  text on the main  page are  great
                        </p>
                    </div>
                </div>   
        
            </div>
        
            <div class="review_box">
                <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
        
                            <div class="profile_image">
                                <img src="image/man_dp4.jpg">
                            </div>
        
                            <div class="name">
                                <strong>Khezami Ayoub</strong>
        
                            </div>
        
                        </div>
                    </div>
                    <div class="comment">
                        <p>
                            excellent page with lots of heart.  I just love the warm feel
of it.  Beautiful  work!
                        </p>
                    </div>
                </div>   
        
                <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
        
                            <div class="profile_image">
                                <img src="image/man_dp5.jpg">
                            </div>
        
                            <div class="name">
                                <strong>Malek Sghaier</strong>
        
                            </div>
        
                        </div>
                    </div>
                    <div class="comment">
                        <p>
                            The main  colors are  perfect,  they are very warm and  inviting.  The
contents of the pages flows very well
                        </p>
                    </div>
                </div>   
        
                <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
        
                            <div class="profile_image">
                                <img src="image/man_dp3.jpg">
                            </div>
        
                            <div class="name">
                                <strong>Firas Balti</strong>
        
                            </div>
        
                        </div>
                    </div>
                    <div class="comment">
                        <p>
                            The design is  classic-  but like I said  before a bit too bland.  You
should  think about  adding more  colors and  graphics  to the site to
liven it up a bit
                        </p>
                    </div>
                </div>   
        
            </div>
        
        </div>

        <footer class="footer">
            <div class="footer-container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">our services</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">affiliate program</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">shipping</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">order status</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4> shop</h4>
                        <ul>
                            <li><a href="#">Courses</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                            <a href="www.tiwtter.com"><i class="fab fa-twitter"></i></a>
                            <a href="www.instagram.com"><i class="fab fa-instagram"></i></a>
                            <a href="www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
       </footer>
</body>
</html>