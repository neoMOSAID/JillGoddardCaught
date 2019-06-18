<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Jill Goddard Caught</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="scripts/dropzone.js" type="text/javascript"></script>
        <link href="styles/dropzone.css" rel="stylesheet" type="text/css">

        <link href="styles/viewer.css" rel="stylesheet">
        <script src="scripts/viewer.js" ></script>

        <script src="scripts/myscripts.js" ></script>
        <link href="styles/indexStyles.css" rel="stylesheet" type="text/css">

        <!--<script src="scripts/jquery-3.1.1.js" type="text/javascript"></script>-->
		<!--<script src = "http://code.jquery.com/jquery-1.12.0.js"></script>-->
		<!-- <script src="scripts/jquery-ui-1.12.1/external/jquery/jquery.js" type="text/javascript" ></script>
		<script src="scripts/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript" ></script>
-->

	</head>
	<body><div id="bodydiv">
			<header id="topheader">
				<hgroup id="group1">
				<ul>
					<li><a href="#">Create Account</a></li>
					<li>|</li>
					<li>
						<span id="loginDiv">Log in</span>
						<div id="loginDiv-content">
							<p>
							<label>Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<input type="email" name="email0" id="email0" placeholder="email or phone">
							</p>
							<p>
							<label>Password :</label>
							<input type="password" name="password0" id="password0">
							</p>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="enter0">Enter</button>
						</div>
					</li>
				</ul>
				</hgroup>
				<hgroup id="group2">
				<input type="search" id="search1" name="search1" placeholder="Search site">
				</hgroup>
			</header>
			<div id="div1">
				<nav id="nav1">
					<ul id="ui1">
						<li><a href="#">NEWS</a></li><li>|</li>
						<li><a href="#">PHOTOS</a></li><li>|</li>
						<li><a href="#">VIDEOS</a></li><li>|</li>
						<li><a href="#">ARTICLES</a></li><li>|</li>
						<li><a href="#">LINKS</a></li><li>|</li>
						<li><a href="#">STAFF</a></li><li>|</li>
						<li>
							<div id="dropdown1"  class="dropdown1">
								<span>&nbsp;MORE</span>
								<div id="dropdown1-content"  class="dropdown1-content">
									<p><a href="#">item 1</a></p>
									<p><a href="#">item 2</a></p>
									<p><a href="#">item 3</a></p>
								</div>
							</div>
						</li>
					</ul>
				</nav>
				<img src="images/jill-goddard-caught-com.png" id="jillgoddardcaught" alt="Jill Goddard Caught">
				<div id="div11">
					<p id="p11">Bubble ads:</p>
					<div id="ads11">
						<div>
							<a href="#">Send Flowers from $19.99</a><br>Send&nbsp;Roses&nbsp;Likes&nbsp;&&nbsp;&nbsp;other&nbsp;Flowers <br> "Best Value" - Wall street journal<br>
							<a href="#">www.justflowers.net</a>
						</div>
						<div>
							<a href="#">An american candidate</a><br>Watch american candidate
							the,<br> showtime&nbsp;reality&nbsp;show&nbsp;details&nbsp;here <br> <a href="#">www.americancandidate.tv</a>
						</div>
						<div>
							<a href="#">Team Overbot</a><br>Team&nbsp;With&nbsp;Silicon&nbsp;Valey\'s<br>
							DARPA&nbsp;GRAND&nbsp;Challenge&nbsp;<br>
							<a href="#">shop.customfix.com</a>
						</div>
						<div>
							<a href="#">RED Measurable Marketing</a><br>Leading&nbsp;interactive&nbsp;Firm<br>
							Serving&nbsp;MNCs&nbsp;in&nbsp;Asia,&nbsp;UK,&nbsp;US&nbsp;&&nbsp;EMEA<br><a href="#">www.red-interactive.com</a>
						</div>
						<div>
							<a href="#">How to Make Electricity</a><br>Don\'t&nbsp;even&nbsp;pay&nbsp;for&nbsp;electricity,&nbsp;you&nbsp;can<br>
							make it simply & cheap at home<br><a href="#">MakeRealEnergy.com</a>
						</div>
					</div>
                    <br><br>
                    <div id="contest">
                        <a href="#"><img src="images/contest.png" id="photoads11" ></a>
                        <a href="#"><img src="images/ads110.png" id="photoads11" ></a>
                    </div>
                    <br><br>
					<span>LATEST PHOTOS</span>
                    <div id="dropdown2" class="dropdown1">
                        <span>SORT&nbsp;&nbsp;&nbsp;</span>
                        <div id="dropdown2-content" class="dropdown1-content">
                            <p onclick="orderby('uploaded_on')" >By date</p>
                            <p onclick="orderby('views')" >By Views</p>
						</div>
					</div>
					<div id="divphotos">
                        <form action="includes/upload.php" class="dropzone" id="mydropzone" ></form>
                        <?php
                            require 'includes/getimages.php';
                        ?>
					</div>
                </div> <!-- end div11 -->
            </div> <!-- end div1 -->
			<footer id="topfooter">
                    copyrights @ 2018
			</footer>
        </div></body> <!-- end bodydiv -->
        <!--
I watched "Open Windows" and I thought to myself;
why not create a website just like the one in the movie.
and here it is.
if you like the video
please subscribe for more  unique content


  -->
</html>
<?php
    /*
                            $dir = "images/jill_photos";
                            $images = glob("$dir/*.{jpg,png,bmp}", GLOB_BRACE);
                            foreach($images as $image){
                                echo '<img src="'.$image.'" border="0"  />';
                                echo "\r\n\t\t\t\t\t\t";
                            }
                            echo "\r\n";
     */
?>
