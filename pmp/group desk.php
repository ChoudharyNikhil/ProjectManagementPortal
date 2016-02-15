<?php
include('session.php');
?>
<!DOCTYPE html> 
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

    <!-- Document Title
    ============================================= -->
	<title>PMP | Group Arena</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Group Page</h1>
                <span>PM_Portal</span>
                <a href="logout.php" class="button button-3d nomargin fright">Log Out</a>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar nobottommargin clearfix">
                        <div class="sidebar-widgets-wrap">

                            <div class="widget clearfix">

                                <h4>Group Members</h4>
                                <div id="post-list-footer">

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img src="images/magazine/small/1.png" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Siddharth Panigrahi</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>12BCE0326</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img src="images/magazine/small/2.png" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Nikhil Choudhary</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>12BCE0072</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img src="images/magazine/small/1.png" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">MS. Seerat Cheema</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>12BCE0005</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img src="images/magazine/small/2.png" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">MS. Nrutya Chowdary</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>12BCE0079</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div><!-- .sidebar end -->
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pmp";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
$sql="SELECT * from upload where groupid='$login_session';";

$result= mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
                    ?>
                  
                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent bothsidebar nobottommargin clearfix">

                        <!-- Posts
                        ============================================= -->
                        <div id="posts" class="small-thumbs">

                            <div class="entry clearfix">
                                <div class="entry-image">
                                    <a href="images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="images/blog/small/17.jpg" alt="Standard Post with Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#"><?php
echo $row['description'];
                                            ?></a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i>
                                            <?php
echo $row['date'];

?></li>
                                        <li><a href="#"><i class="icon-settings"></i> <?php
    $revid=$row['reviewid']
   // echo strtoupper($row['reviewid']);
                                            ?></a></li>
                                        <li><i class="icon-folder-open"></i> <a href="#">Rating: <?php
$sql1="SELECT * from review where groupid='$login_session' and reviewid='$revid';";

$review= mysqli_query($conn,$sql1);
$rowrev=mysqli_fetch_assoc($review);
echo strtoupper($rowrev['rate']);
                                            ?></a></li>
                                    </ul>
                                    
                                    <div class="entry-content">
                                        <p><?php

echo strtoupper($row['status']);
                                            ?></p>
                                        
                                        <h4>Comments:-</h4>
                                        <p><?php
echo strtoupper($rowrev['comments']);
                                            ?>
                                        
                                        </p>
                                        <a href="#"class="more-link">Marks : <?php
echo strtoupper($rowrev['marks']);
                                            ?></a>
                                        <br/><br/><br/><a href="conditional-form.html" class="button button-xlarge button-dark button-rounded tright">Upload Report<i class="icon-circle-arrow-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- #posts end -->

                    </div>
                    <!-- .postcontent end -->
<?php
}
                    ?>
                </div>

            </div>

        </section><!-- #content end -->

        <!-- Footer
		============================================= -->
		<footer id="footer" class="dark">		

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2015 All Rights Reserved. <br>
						
					</div>
                </div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>

</body>
</html>