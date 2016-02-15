<?php
include('fsession.php');
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
	<title>PMP | Faculty_DESK</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Faculty Portal</h1>
                <a href="logout.php" class="button button-3d nomargin fright">Log Out</a>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					&nbsp;&nbsp;&nbsp;&nbsp;<div id="processTabs">
						&nbsp;&nbsp;&nbsp;&nbsp;<ul class="process-steps bottommargin clearfix">
							<li>
								<a href="#ptab1" class="i-circled i-bordered i-alt divcenter">1</a>
								<h5>Review 1</h5>
							</li>
							<li>
								<a href="#ptab2" class="i-circled i-bordered i-alt divcenter">2</a>
								<h5>Review 2</h5>
							</li>
							<li>
								<a href="#ptab3" class="i-circled i-bordered i-alt divcenter">3</a>
								<h5>Review 3</h5>
							</li>
						</ul>
						<div>
							<div id="ptab1">
             <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pmp";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
$sql="SELECT * from upload where reviewid='review 1';";

$result= mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
                                ?>
        <div id="posts" class="small-thumbs">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <img class="image_fade" src="images/blog/small/17.jpg" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h2><a href="#"><?php

echo $row['description'];
   ?></a></h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> Uploaded On: <?php

echo $row['date'];

?></li>
                                    <li><a href="#"><i class="icon-user"></i> TEAM <?php

echo $row['groupid'];

?> </a></li>
                                </ul>
                                <div class="entry-content">
                                    <p><strong>SHORT DESCRIPTION</strong></br><?php

echo strtoupper($row['status']);
  ?></p>
                                    <a href="downloadnew.php?id=1" class="more-link"><i class="i-rounded i-small icon-download"></i><font size="5px">Download Here.</font></a>
                                </div>
                            </div>
                        </div>
                                </div><!-- #posts end -->
        <!-- Modal Reviews
        ============================================= -->
        <a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d nomargin fright">Add a Review</a>

        <div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="reviewFormModalLabel">Submit a Review</h4>
        </div>
        <div class="modal-body">
            <form class="nobottommargin" id="template-reviewform" name="template-reviewform" action="review.php" method="post">

                <div class="col_half">
                    <label for="template-reviewform-name">TEAM ID<small>*</small></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-user"></i></span>
                        <input type="text" value="" name="teamid" class="form-control required" />
                    </div>
                </div>
                
                <div class="col_half">
                    <label for="template-reviewform-name">REVIEW ID<small>*</small></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-circle"></i></span>
                        <input type="text" value="" name="reviewid" class="form-control required" />
                    </div>
                </div>
                <div class="col_half">
                    <label for="template-reviewform1-name">Marks</label>
                    <div class="input-group">
                        <input type="text" value="" name="marks" class="form-control required" />
                    </div>
                </div>

                <div class="clear"></div>

                <div class="col_full col_last">
                    <label for="template-reviewform-rating">Rate the Ideation of the Project</label>
                    <select id="template-reviewform-rating" name="template-reviewform-rating" class="form-control">
                        <option value="">-- Select One --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="clear"></div>

                <div class="col_full">
                    <label for="template-reviewform-comment">Comment <small>*</small></label>
                    <textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
                </div>

                <div class="col_full nobottommargin">
                    <button class="button button-3d nomargin" type="submit" id="template-reviewform-submit" name="template-reviewform-submit">Submit Review</button>
                </div>

            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Modal Reviews End -->                   
 <?php
} ?>
							</div>
               
                    <div id="ptab2">
    <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pmp";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
$sql="SELECT * from upload where reviewid='review 2';";

$result= mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
                                ?>
        <div id="posts" class="small-thumbs">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <img class="image_fade" src="images/blog/small/17.jpg" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h2><a href="#"><?php

echo $row['description'];
   ?></a></h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> Uploaded On: <?php

echo $row['date'];

?></li>
                                    <li><a href="#"><i class="icon-user"></i> TEAM <?php

echo $row['groupid'];

?> </a></li>
                                </ul>
                                <div class="entry-content">
                                    <p><strong>SHORT DESCRIPTION</strong></br><?php

echo strtoupper($row['status']);
  ?></p>
                                    <a href="download.php?id=1" class="more-link"><i class="i-rounded i-small icon-download"></i><font size="5px">Download Here.</font></a>
                                </div>
                            </div>
                        </div>
                                </div><!-- #posts end -->
        <!-- Modal Reviews
        ============================================= -->
        <a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d nomargin fright">Add a Review</a>

        <div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="reviewFormModalLabel">Submit a Review</h4>
        </div>
        <div class="modal-body">
            <form class="nobottommargin" id="template-reviewform" name="template-reviewform" action="review.php" method="post">

                <div class="col_half">
                    <label for="template-reviewform-name">TEAM ID<small>*</small></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-user"></i></span>
                        <input type="text" value="" name="teamid" class="form-control required" />
                    </div>
                </div>
                
                <div class="col_half">
                    <label for="template-reviewform-name">REVIEW ID<small>*</small></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-circle"></i></span>
                        <input type="text" value="" name="reviewid" class="form-control required" />
                    </div>
                </div>
                <div class="col_half">
                    <label for="template-reviewform1-name">Marks</label>
                    <div class="input-group">
                        <input type="text" value="" name="marks" class="form-control required" />
                    </div>
                </div>

                <div class="clear"></div>

                <div class="col_full col_last">
                    <label for="template-reviewform-rating">Rate the Ideation of the Project</label>
                    <select id="template-reviewform-rating" name="template-reviewform-rating" class="form-control">
                        <option value="">-- Select One --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="clear"></div>

                <div class="col_full">
                    <label for="template-reviewform-comment">Comment <small>*</small></label>
                    <textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
                </div>

                <div class="col_full nobottommargin">
                    <button class="button button-3d nomargin" type="submit" id="template-reviewform-submit" name="template-reviewform-submit">Submit Review</button>
                </div>

            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Modal Reviews End -->                   
 <?php
} ?>                  


                    </div>
    
                    <div id="ptab3">
    <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pmp";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
$sql="SELECT * from upload where reviewid='review 3';";

$result= mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
                                ?>
        <div id="posts" class="small-thumbs">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <img class="image_fade" src="images/blog/small/17.jpg" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h2><a href="#"><?php

echo $row['description'];
   ?></a></h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> Uploaded On: <?php

echo $row['date'];

?></li>
                                    <li><a href="#"><i class="icon-user"></i> TEAM <?php

echo $row['groupid'];

?> </a></li>
                                </ul>
                                <div class="entry-content">
                                    <p><strong>SHORT DESCRIPTION</strong></br><?php

echo strtoupper($row['status']);
  ?></p>
                                    <a href="download.php?id=<?php $row['groupid']?>" class="more-link"><i class="i-rounded i-small icon-download"></i><font size="5px">Download Here.</font></a>
                                </div>
                            </div>
                        </div>
                                </div><!-- #posts end -->
        <!-- Modal Reviews
        ============================================= -->
        <a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d nomargin fright">Add a Review</a>

        <div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="reviewFormModalLabel">Submit a Review</h4>
        </div>
        <div class="modal-body">
            <form class="nobottommargin" id="template-reviewform" name="template-reviewform" action="review.php" method="post">

                <div class="col_half">
                    <label for="template-reviewform-name">TEAM ID<small>*</small></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-user"></i></span>
                        <input type="text" value="" name="teamid" class="form-control required" />
                    </div>
                </div>
                <div class="col_half">
                    <label for="template-reviewform-name">REVIEW ID<small>*</small></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-circle"></i></span>
                        <input type="text" value="" name="reviewid" class="form-control required" />
                    </div>
                </div>
                <div class="col_half">
                    <label for="template-reviewform1-name">Marks</label>
                    <div class="input-group">
                        <input type="text" value="" name="marks" class="form-control required" />
                    </div>
                </div>

                <div class="clear"></div>

                <div class="col_full col_last">
                    <label for="template-reviewform-rating">Rate the Ideation of the Project</label>
                    <select id="template-reviewform-rating" name="template-reviewform-rating" class="form-control">
                        <option value="">-- Select One --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="clear"></div>

                <div class="col_full">
                    <label for="template-reviewform-comment">Comment <small>*</small></label>
                    <textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
                </div>

                <div class="col_full nobottommargin">
                    <button class="button button-3d nomargin" type="submit" id="template-reviewform-submit" name="template-reviewform-submit">Submit Review</button>
                </div>

            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Modal Reviews End -->                   
 <?php
} ?>                  


                    </div>
    
						</div>
					</div>

					<script>
					  $(function() {
						$( "#processTabs" ).tabs({ show: { effect: "fade", duration: 400 } });
						$( ".tab-linker" ).click(function() {
							$( "#processTabs" ).tabs("option", "active", $(this).attr('rel') - 1);
							return false;
						});
					  });
					</script>

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

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>