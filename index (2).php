<!DOCTYPE html>
<html>
    
  <head>
    <title>Texter</title>
    <meta name="keywords" content="smoothy, responsive bootstrap, one page, green, white, free html5 template, templatemo" />
	<meta name="description" content="Smoothy is free HTML5 template for multi-purpose that is based on responsive bootstrap framework." />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
      <link rel="icon" href="favicon2.ico" type="image/x-icon"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">
   	<link rel="stylesheet" href="css/templatemo_misc.css">

    <link href="css/circle.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="js/slimbox2.js"></script> 

    
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script>


<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_flicker", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

  </head>
  <body>
    <header>
    <!-- start menu -->
    <div id="templatemo_home">
    	<div class="templatemo_top">
      <div class="container templatemo_container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="logo">
              <a href="startup.php"><img src="images/templatemo_logo.png" alt="logout"></a>
            </div>
          </div>
          <div class="col-sm-9 col-md-9 templatemo_col9">
          	<div id="top-menu">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a class="menu" href="#templatemo_home">About</a></li>
                <li><a class="menu" href="#templatemo_about">Add Blog</a></li>
                <li><a class="menu" href="#templatemo_portfolio">Imagica</a></li>
                <li><a class="menu" href="#templatemo_blog">Blog</a></li>
                <li><a class="menu" href="#templatemo_contact">Contact</a></li>
              </ul>
            </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="clear"></div>
    <!-- end menu -->
      	<div  id="slider"  class="nivoSlider templatemo_slider">
        	<a href="#"><img src="images/slider/img_1_blank.jpg" alt="slide 1" /></a>           	
			<a href="#"><img src="images/slider/img_2_blank.jpg" alt="slide 2" /></a>  
            <a href="#"><img src="images/slider/img_3_blank.jpg" alt="slide 3" /></a> 	        	
	
    	</div>
             <div class="templatemo_caption">
                   
                    
                    <div class="clear"></div>
             		<?php
    session_start();
$myuser=$_SESSION['varname'];
ECHO "<html>";
    ECHO "<h3 align=\"center\">";
    ECHO "Welcome $myuser, ";
ECHO "lets get blogging :D";
    ECHO "</h3>";
    ECHO "</html>";
ECHO "<a class=\"btn btn-large btn-primary\" href=\"#templatemo_about\">Start Blogging!</a>";
    ?>
	          	    
              </div>  
  </header>
  	<div class="templatemo_lightgrey_about" id="templatemo_about">
	<div class="container">

    <div class="clear"></div>
    <div class="templatemo_reasonbg">
    	<br><br><h2>Add a blog</h2>
       		<form method="post" action="show.php">
        <h3>Title:        <Input type="text" name="title" style="font-size:20px;" /></h3><br>
<TEXTAREA id="ta" name="ta" rows="15" cols="120" style="resize:none; opacity:0.80"></TEXTAREA>
<br><br>
<input type="submit" value="Post!" class="btn btn-large btn-primary">
</form>
    </div>
    <div class="clear"></div>
    <!--Our Portfolio Start-->
    <div class="templatemo_portfolio" id="templatemo_portfolio">
        	<h2>Our portfolio</h2>
            <div class="container">
           	  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">              
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/1.jpg" alt="portfolio 1">
								<div class="overlay-p">
									<a href="images/portfolio/1.jpg" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Blue Sky</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>
      
              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">              
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/2.jpg" alt="portfolio 2">
								<div class="overlay-p">
									<a href="images/portfolio/2.jpg" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Forest</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>
      
              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">              
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/3.jpg" alt="portfolio 3">
								<div class="overlay-p">
									<a href="images/portfolio/3.jpg" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Forest</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>
      
              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">              
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/4.jpg" alt="portfolio 4">
								<div class="overlay-p">
									<a href="images/portfolio/4.jpg" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Black and White</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>
      
              </div>
             </div>
               <div class="clear"></div>
              <div class="container">
              		<div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">              
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/5.jpg" alt="portfolio 5">
								<div class="overlay-p">
									<a href="images/portfolio/5.jpg" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Rotary</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">              
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/6.jpg" alt="portfolio 6">
								<div class="overlay-p">
									<a href="images/portfolio/6.jpg" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Rotary</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>
      
              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">              
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/7.jpg" alt="portfolio 7">
								<div class="overlay-p">
									<a href="images/portfolio/7.jpg" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Blue Sky</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>
      
              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">              
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/8.jpg" alt="portfolio 8">
								<div class="overlay-p">
									<a href="images/portfolio/8.jpg" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Black and White</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>
      
              </div>
              
              </div>
            <a class="btn btn-large btn-primary" href="#">View More</a>
    </div>
    <!--Our Portfolio End-->
    <div class="clear"></div>
    <!--Our Blog Start-->
    <div class="templatemo_blog" id="templatemo_blog">
        <?php
//session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="blog"; // Database name 
$tbl_name="articles"; // Table name 
$qwerty=$_SESSION['varname'];
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
while($row = mysql_fetch_array($result)) {
echo "<html>";
    echo "<fieldset>";
    echo "<h2>";
    echo $row['user'];
    echo "</h2>";
    echo " ";
   echo $row['articles'];
    $id=$row['articles'];
    echo "</fieldset>";
    $iden=$row['title'];
   if($row['user']==$myuser)
    echo "<form action=\"formcheck.php\" method=\"post\"><Input type=\"submit\" name=\"delbtn\" value=\"Delete $iden\" class=\"btn btn-large btn-primary\"></form>";
   
  echo "<hr>";
    echo "</html>";
}
?>
        <div class="clear"></div>
        <div class="container"></div>
    </div>
    <!--Our Blog End-->
	<!--Contact Start -->
    <div class="templatemo_lightgrey" id="templatemo_contact">
    	<div class="templatemo_paracenter">
    	<h2>Contact us</h2></div>
        <div class="clear"></div>
        <div class="container">
        	<div class="templatemo_paracenter">Features of our website<br><br></div>
            <div class="clear"></div>
            <div class="container">
        <div class="row">
             	<div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><i class="fa fa-bell-o"></i></span>
                      	  </div>                          
                     	   Pixel Perfect Design</div>
						<div class="col-xs-12 col-sm-6 col-md-3 hover-box" >
							<div class="inner-hover-box">								
								<p>Our Website offers the perfect design for you to blog.</p>
							</div>
						</div>
					</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><i class="fa fa-tablet"></i></span>
                      	  </div>
                     	   Responsive Layout</div>
						<div class="col-xs-6 col-sm-6 col-md-3 hover-box" >
							<div class="inner-hover-box">								
								<p>Our Website has a proper responsive and interactive layout</p>
							</div>
						</div>
					</div> 	
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><i class="fa fa-lock"></i></span>
                      	  </div>
                     	   Secured Website</div>
						<div class="col-xs-6 col-sm-6 col-md-3 hover-box" >
							<div class="inner-hover-box">								
								<p>Your blogs are registerd under your name, no one else can tamper your blog.</p>
							</div>
						</div>
					</div> 	
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><i class="fa fa-rocket"></i></span>
                      	  </div>
                     	   Quick Service</div>
						<div class="col-xs-6 col-sm-6 col-md-3 hover-box" >
							<div class="inner-hover-box">								
								<p>Our Website allows you to quickly add blogs and delete them.</p>
							</div>
						</div>
					</div> 	
        </div>
    </div>
    </div>
            <br><br>
          <div class="container">
        <div class="row">
          <div class="col-md-3">
            <form action="index (2).php" role="form">
              <div class="form-group">
                <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name" maxlength="30">
              </div>
              <div class="form-group">
                <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" maxlength="30">
              </div>
              <div class="form-group">
                <input name="subject" type="text" class="form-control" id="subject" placeholder="Your Subject" maxlength="40">
              </div>
              <div><input type="submit" value="Send Message" class="btn btn-primary" ></div>
            </form>
          </div>
          <div class="col-md-9">
            <div class="txtarea">
              <textarea name="message" rows="10" class="form-control" id="message"></textarea>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
        </div>
  </div>
    
    <!--Contact End-->
    <!--Footer Start-->
    <div class="templatemo_footer">
    	<div class="container">
       	  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
            	<h2>About Kins</h2>
                <p>It is a club started in MSRIT</p>
          </div>
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
            	<h2>Services</h2>
                <ul>
                  <li>Interactive Quizs</li>
                  <li>Seminars</li>
                  <li>Hackathons</li>
                  <li>Learning sessions</li>
                </ul>
                <div class="clear"></div>
                <div class="templatemo_morelink"><a href="#">and more... </a></div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
            	<h2>Flicker</h2>
					<div id="templatemo_flicker" >
          <ul class="nobullet footer_gallery">
                <li><a href="images/flicker/1.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s1.jpg" alt="image 1" /></a></li>
                <li><a href="images/flicker/2.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s2.jpg" alt="image 2" /></a></li>
                <li><a href="images/flicker/3.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s3.jpg" alt="image 3" /></a></li>
                <li><a href="images/flicker/4.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s4.jpg" alt="image 4" /></a></li>
                <li><a href="images/flicker/5.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s5.jpg" alt="image 5" /></a></li>
          	    <li><a href="images/flicker/6.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s6.jpg" alt="image 6" /></a></li>
                <li><a href="images/flicker/7.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s7.jpg" alt="image 7" /></a></li>
                <li><a href="images/flicker/8.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s8.jpg" alt="image 8" /></a></li>
            </ul>
            <br style="clear: left" />
        </div>
          </div>
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
            <h2>Contact</h2>
            	<span class="left col-xs-1 fa fa-map-marker"></span>
                <span class="right col-xs-11">MSRIT, MSR Nagar, Mathikere 560054.</span>
                <div class="clear height10"></div>
                <span class="left col-xs-1 fa fa-phone"></span>
                <span class="right col-xs-11">8762228118<br>9986968493</span>
                <div class="clear height10"></div>
                <span class="left col-xs-1 fa fa-envelope"></span>
                <span class="right col-xs-11">priya.indhu94@gmail.com<br>ketaki_8@hotmail.com</span>
                <div class="clear height10"></div>
                <span class="left col-xs-1 fa fa-globe"></span>
                <span class="right col-xs-11">www.facebook.com/kins</span>
                <div class="clear"></div>
            </div>
        </div>
    </div>
   <!--Footer End-->
	<!-- Bottom Start -->
    <div class="templatemo_bottom">
    	<div class="container">
        	<div class="row">
            	<div class="left">Copyright © 2014 <a href="#">KINS </a> &nbsp;<a href="#">by Ketaki & Indhu</a></div>
                <div class="right">
                	<a href="#"><div class="fa fa-rss soc"></div></a>
                    <a href="#"><div class="fa fa-twitter soc"></div></a>
                    <a href="#"><div class="fa fa-linkedin soc"></div></a>
                    <a href="#"><div class="fa fa-dribbble soc"></div></a>
                    <a href="#"><div class="fa fa-facebook soc"></div></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom End -->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery.cycle2.carousel.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script type="text/javascript">
      $(function(){
          var default_view = 'grid';
          if($.cookie('view') !== 'undefined'){
              $.cookie('view', default_view, { expires: 7, path: '/' });
          } 
          function get_grid(){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox-list');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          function get_list(){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox');
                  $('.prod-cnt').addClass('dbox-list');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          if($.cookie('view') == 'list'){ 
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0});
              $('.prod-cnt').removeClass('dbox');
              $('.prod-cnt').addClass('dbox-list');
              $('.prod-cnt').stop().animate({opacity:1}); 
          } 

          if($.cookie('view') == 'grid'){ 
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0});
                  $('.prod-cnt').removeClass('dboxlist');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
          }

          $('#list').click(function(){   
              $.cookie('view', 'list'); 
              get_list()
          });

          $('#grid').click(function(){ 
              $.cookie('view', 'grid'); 
              get_grid();
          });

          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');
              
              $('.prod-cnt').each(function(){
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                  };
              });
              $('.'+CategoryID).fadeIn(); 
              
          });
      });
    </script>
	<script src="js/jquery.singlePageNav.js"></script>
	
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
    <script>
      $(document).ready(function(){

        // hide #back-top first
        $("#back-top").hide();
        
        // fade in #back-top
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('#back-top').fadeIn();
            } else {
              $('#back-top').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#back-top a').click(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 800);
            return false;
          });
        });

      });
      </script>
      <script type="text/javascript">
      <!--
          function toggle_visibility(id) {
             var e = document.getElementById(id);
             if(e.style.display == 'block'){
                e.style.display = 'none';
                $('#togg').text('show footer');
            }
             else {
                e.style.display = 'block';
                $('#togg').text('hide footer');
            }
          }
      //-->
      </script>
      <script type="text/javascript" src="js/lib/jquery.mousewheel-3.0.6.pack.js"></script>

      <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
      </script>
      <script src="js/stickUp.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>
      <script>
     $('a.menu').click(function(){
    $('a.menu').removeClass("active");
    $(this).addClass("active");
	});
      </script>
      
      <script> <!-- scroll to specific id when click on menu -->
      	 // Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }                   
});
      </script>
</body>
</html>
<!-- 
-->