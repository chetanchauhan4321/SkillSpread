<?php
$server="localhost";
$username="id2565121_chetanchauhan4321";
$password="hello123";
$db="id2565121_skillspread";
$conn=mysqli_connect($server,$username,$password,$db);


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
  
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Skill  Spread">
  <link rel="apple-touch-icon" href="assets/img/favicon.ico">

  <meta name="msapplication-TileImage" content="assets/img/favicon.ico">
  <meta name="msapplication-TileColor" content="#2F3BA2">



   
	<title>Skill Spread</title>
        <link rel="manifest" href="/manifest.json">

	<link rel="icon" type="image/icon" href="assets/img/favicon.ico">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body >
   <div class="alert alert-success alert-dismissable fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<center><strong>Heads Up!</strong> Sign Up for a free book <span></span><a  class="btn btn-success"href="#sign-up" >Sign Up</a></center>
   </div>
 <div class="navbar navbar-inverse navbar" style="background:#66cc0d;margin:0px" id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home"><img class="logo-custom" src="assets/img/SkillSpreadsLogo.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right ">
                    <li ><a href="#home" class="navi">HOME</a></li>
                     <li><a href="#features-sec" class="navi">FEATURES</a></li>
                     <li><a href="#blog-sec" class="navi">BLOG</a></li>
                     <li><a href="#faculty-sec" class="navi">TESTIMONIALS</a></li>
                     <li><a href="#course-sec" class="navi">COURSES</a></li>
                     <li><a href="#book-sec" class="navi">BOOKS</a></li>
                     <li><a href="#contact-sec" class="navi">CONTACT</a></li>
                     <li><a href="#faculty-sec" class="navi">ABOUT</a></li>
                     <li><a href="#sign-up" >SIGN-UP/LOG-IN</a></li>
                </ul>
            </div>
           
        </div>
    </div>
      <!--NAVBAR SECTION END-->
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <li>
                              <h3>Quality Books And Courses</h3>
                           <h1>THE UNIQUE METHOD</h1>
                            <a  href="#course-sec" class="btn btn-info btn-lg" >
                                COURSES 
                            </a>
                             <a  href="#book-sec" class="btn btn-success btn-lg" >
                                BOOKS
                            </a>
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>
                            <h3>Quality Books And Courses</h3>
                           <h1>UNMATCHED APPROACH</h1>
                             <a  href="#course-sec" class="btn btn-primary btn-lg" >
                                COURSES 
                            </a>
                             <a  href="#book-sec" class="btn btn-danger btn-lg" >
                                BOOKS
                            </a>
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                            <h3>Quality Books And Courses</h3>
                           <h1>BEST BOOKS</h1>
                             <a  href="#course-sec" class="btn btn-default btn-lg" >
                                 COURSES
                            </a>
                             <a  href="#book-sec" class="btn btn-info btn-lg" >
                                BOOKS
                            </a>
                        </li>
                        <!-- End Slider 03 -->
                    </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> WELCOME TO SKILL SPREAD <i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
         <div id="features-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">FEATURE LIST </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                     List of Features
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row" >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                     <i class="fa fa-paper-plane-o fa-4x icon-round-border" ></i>
                   <h3 >Quality Education</h3>
                 <hr />
                       <hr />
                   <p >
                       We provide Quality Education. 
                       
                   </p>
               <a href="#" class="btn btn-info btn-set" style="background:#66cc0d" >ASK THE EXPERT</a>
                </div>
                   </div>
                   <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="about-div">
                     <i class="fa fa-bolt fa-4x icon-round-border" ></i>
                   <h3 >SYSTEMATIC APPROACH</h3>
                 <hr />
                       <hr />
                   <p >
                       We Provide Systematic Approach.
                       
                   </p>
               <a href="#" class="btn btn-info btn-set" style="background:#66cc0d"  >ASK THE EXPERT</a>
                </div>
                   </div>
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="about-div">
                     <i class="fa fa-magic fa-4x icon-round-border" ></i>
                   <h3 >ONE TO ONE STUDY</h3>
                 <hr />
                       <hr />
                   <p >
                       We Provide One to One Study. 
                       
                   </p>
               <a href="#" class="btn btn-info btn-set" style="background:#66cc0d" >ASK THE EXPERT</a>
                </div>
                   </div>
                 
                 
               </div>
             </div>
   <!-- FEATURES SECTION END-->
    <div id="faculty-sec" >
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">TESTIMONIALS</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
					About Author
                     </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->

           <div class="row" >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="faculty-div">
                     <img src="assets/img/faculty/chetanchauhan.jpg" style="hight:400px; width:250px"  class="img-rounded" />
                   <h3 >Chetan Chauhan</h3>
                 <hr/>
                         <h4>Programmer</h4>
                   <p >
                       Lovely Professional University 
                   </p>
                </div>
                   </div>
                 
             
               </div>
             </div>
        </div>
    <!-- FACULTY SECTION END-->
        <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR COURSES </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      About Course
                         </p>
                 </div>

             </div>
			 
			 <!-- Db Area-->
			 <?php
	 

	
	$courses_sql="SELECT * FROM courses";
	$run=mysqli_query($conn,$courses_sql);
	while($rows=mysqli_fetch_assoc($run))
	{
	echo "
	<div class='row set-row-pad jumbotron' >
			   <div class='col-lg-6 col-md-6 col-sm-6 ' data-scroll-reveal='enter from the bottom after 0.4s' >
					 <img src='$rows[image]' class='img-thumbnail' width='200px'/>
			   </div>
			   <div class='col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1'>
					   <div class='panel-group' id='accordion'>
							<div class='panel panel-default' data-scroll-reveal='enter from the bottom after 0.9s'>
								<div class='panel-heading'>
									<h4 class='panel-title'>
										<a data-toggle='collapse' data-parent='#accordion' href='#$rows[id]' class='collapsed'>
											<strong>$rows[course_tittle]</strong>
										</a>
									</h4>
								</div>
								<div id='$rows[id]' class='panel-collapse collapse'  style='height: 0px;'>
									<div class='panel-body'>
										<p> 
										 $rows[course_desc]
										</p>
									</div>
								</div>
							</div>
						</div>
					   <div class='alert alert-info' data-scroll-reveal='enter from the bottom after 1.1s' >
						   <span>
							  <strong>$rows[total_users]</strong> 
							   <hr />
							   Users
						   </span>
					   </div>
					   <a href='$rows[link]' class='btn btn-primary'>Go To Course</a>
			    </div>
            </div>
	";
   	
	}
	?>
			 
			 
			 
			 
             <!--/.HEADER LINE END-->


          </div>
      <!-- COURSES SECTION END-->
	  
	  <!--BOOKS SECTION STARTS-->
	  <div id="book-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">BOOKS</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      About BOOK
                     </p>
                 </div>

             </div>
			  <?php
	 

	
	$books_sql="SELECT * FROM books";
	$run=mysqli_query($conn,$books_sql);
	while($rows=mysqli_fetch_assoc($run))
	{
	echo "
	<div class='row set-row-pad jumbotron' >
			   <div class='col-lg-6 col-md-6 col-sm-6 ' data-scroll-reveal='enter from the bottom after 0.4s' >
					 <img src='$rows[image]' class='img-thumbnail' width='200px'/>
			   </div>
			   <div class='col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1'>
					   <div class='panel-group' id='accordion'>
							<div class='panel panel-default' data-scroll-reveal='enter from the bottom after 0.9s'>
								<div class='panel-heading'>
									<h4 class='panel-title'>
										<a data-toggle='collapse' data-parent='#accordion' href='#1$rows[id]' class='collapsed'>
											<strong>$rows[book_tittle]</strong>
										</a>
									</h4>
								</div>
								<div id='1$rows[id]' class='panel-collapse collapse'  style='height: 0px;'>
									<div class='panel-body'>
										<p> 
										 $rows[book_desc]
										</p>
									</div>
								</div>
							</div>
						</div>
					   <div class='alert alert-info' data-scroll-reveal='enter from the bottom after 1.1s' >
						   <span>
							  <strong>$rows[total_users]</strong> 
							   <hr />
							   Users
						   </span>
					   </div>
			    </div>
            </div>
	";
   	
	}
	?>
             
			 <!--/.HEADER LINE END-->



        </div>
	  
	  <!--BOOKS SECTION ENDS-->
	  
	  <!--BLOG SECTION STARTS-->
	  <div id="blog-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">BLOGS</h1>
                 </div>

             </div>
             
			   
			   
       </div>
        
	  <!--BLOG SECTION ENDS-->
	  
    <div id="contact-sec"   >
           <div class="overlay">
 <div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"  >CONTACT US  </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      Please write to us if you have any Query
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control " name="name" placeholder="Your Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control " name="email"   placeholder="Your Email" required/>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" style="min-height: 150px;" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn  btn-block btn-lg" style="background:#66cc0d" name="submit_request">SUBMIT REQUEST</button>
                        </div>

                    </form>
                </div>

                   
     
              
              
                
               </div>
                </div>
          </div> 
       </div>
     <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Our Location </strong></h2>
        <hr />
                    <div ">
                        <h4>234/80 SSE, UDYOG VIHAR,</h4>
                        <h4> NEW DELHI.</h4>
                        <h4><strong>Call:</strong>  + 91-8978789769 / 70 / 71 </h4>
                        <h4><strong>Email: </strong>info@skillspread.com</h4>
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Connect With Us</strong></h2>
        <hr />
                    <div >
                        <a href="https://www.facebook.com">  <img src="assets/img/Social/facebook.png" alt="" /> </a>
                     <a href="https://www.google.com"> <img src="assets/img/Social/google-plus.png" alt="" /></a>
                     <a href="https://www.twitter.com"> <img src="assets/img/Social/twitter.png" alt="" /></a>
                    </div>
                    </div>


                </div>
                 </div>
     <!-- CONTACT SECTION END-->
    <div id="footer">
          <center>&copy 2017 skillspread.com | All Rights Reserved</center>
    </div>
     <!-- FOOTER SECTION END-->
   
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/scrollReveal.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="scripts/app1.js"></script>
</body>
</html>
<?php

if(isset($_POST['submit_request'])){
	echo $name=mysqli_real_escape_string($conn,strip_tags($_POST['name']));
	echo $email=mysqli_real_escape_string($conn,strip_tags($_POST['email']));
	echo $message=mysqli_real_escape_string($conn,strip_tags($_POST['message']));
	echo $date=date('Y-m-d');
	$ins_sql="INSERT INTO users (name,email,message,date) VALUES('$name','$email','$message','$date')";
	if(mysqli_query($conn,$ins_sql)){
		?>
		<script>window.location="index.php"</script>
		
		<?php
	}
}




?>
