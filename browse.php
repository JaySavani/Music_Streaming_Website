<?php 
include("includes/includedFiles.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<style>
body {
	margin: 0;
	font-family: 'Josefin Sans', sans-serif;
	font-size: 16px;
	font-weight: 400;
	color: #777777;
	background-color: #14182a;
}
 a {
	color: #3bc8e7;
	transition: all 0.3s ease;
	text-decoration: none;
}
a:hover {
	color: white;
}
a:focus,
button:focus {
	outline: none;
}
.ms_color {
	color: #3bc8e7 !important
}
.ms-banner {
	padding: 0px 0px 40px;
}
.ms_banner_img {
	text-align: center;
	max-width: 511px;
	width: 100%;
	float: left;
}
.ms_banner_text {
	width: calc(100% - 511px);
	float: left;
	padding-top: 135px;
}
.ms_banner_text .ms_banner_btn .ms_btn {
	height: 40px;
	width: 100%;
	margin-right: 25px;
	line-height: 45px;
	margin-left: 0;
	max-width: 150px;
	font-weight: 600;
}
.ms_banner_text h1 {
	font-size: 45px;
	font-weight: bold;
	color: #fff;
}
.ms_banner_text p {
	margin: 5px 0px 40px;
	line-height: 30px;
}
.contact .contact-content {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
.contact h2{
	color: crimson;
	text-decoration: underline 2px;
}
.contact .contact-content .column {
    width: calc(50% - 30px);
}

.contact .contact-content .text {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}

.contact .contact-content .left p {
    text-align: justify;
}

.contact .contact-content .left .icons {
    margin: 10px 0;
}

.contact .contact-content .row {
    display: flex;
    height: 65px;
    align-items: center;
}

.contact .contact-content .row .info {
    margin-left: 30px;
}

.contact .contact-content .row i {
    font-size: 25px;
    color: crimson;
}

.contact .contact-content .info .head {
    font-weight: 500;
}

.contact .contact-content .info .sub-title {
    color: #b3b3b3;
}

.contact .right form .fields {
    display: flex;
}

.contact .right form .field,
.contact .right form .fields .field {
    height: 45px;
    width: 100%;
    margin-bottom: 15px;
}

.contact .right form .textarea {
    height: 80px;
    width: 100%;
}

.contact .right form .name {
    margin-right: 10px;
}

.contact .right form .field input,
.contact .right form .textarea textarea {
    height: 100%;
    width: 100%;
    border: 1px solid rgb(0, 0, 0);
    border-radius: 6px;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
}

.contact .right form .field input:focus,
.contact .right form .textarea textarea:focus {
    border-color: #b3b3b3;
}

.contact .right form .textarea textarea {
    padding-top: 10px;
    resize: none;
}

.contact .right form .button-area {
    display: flex;
    align-items: center;
}

.right form .button-area button {
    color: #fff;
    display: block;
    width: 160px!important;
    height: 45px;
    outline: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 6px;
    cursor: pointer;
    flex-wrap: nowrap;
    background: crimson;
    border: 2px solid crimson;
    transition: all 0.5s ease;
}

.right form .button-area button:hover {
    color: crimson;
    background: none;
}


/* footer section styling */

footer {
    background: #111;
    padding: 15px 23px;
    color: #fff;
    text-align: center;
}

footer span a {
    color: crimson;
    text-decoration: none;
}
</style>

</head>
<body>
<!---Banner--->
            <div class="ms-banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="ms_banner_img">
                                <img src="images/banner.png" alt="" class="img-fluid">
                            </div>
                            <div class="ms_banner_text">
                                <h1>This Month’s</h1>
                                <h1 class="ms_color">Record Breaking Albums !</h1>
                                <p>Dream your moments, Until I Met You, Gimme Some Courage, Dark Alley, One More Of A Stranger, Endless<br> Things, The Heartbeat Stops, Walking Promises, Desired Games and many more...</p>
                                <div class="ms_banner_btn">
                                    <a href="#view" class="ms_btn">Listen Now</a>
                                </div>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<h1 class="pageHeadingBig">SONG FOR YOU</h1>
</body>
<div class="gridViewContainer" id="view">

	<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");

		while($row = mysqli_fetch_array($albumQuery)) {
			echo "<div class='gridViewItem'>
					<span role='link' tabindex='0' onclick='openPage(\"album.php?id=" . $row['id'] . "\")''>
						<img src='" . $row['artworkPath'] . "'>

						<div class='gridViewInfo'>"
							. $row['title'] .
						"</div>
					</span>

				</div>";
		}
	?>
</div>
<section class="contact" id="contact">
        <div class="max-width">
            <h2 align="center" class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>To buy any song from the above album send us mail.In message put album name and song name.available any time for your help free to contact any time.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Musicstore team</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Nadiad,Gujarat</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">musicstore123@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Your Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message..." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
     <!-- footer section start -->
    <footer>
        <span>Created By -<a href="#" > Namra Joshi,Mit Virani,Jay Savani </a></span>
    </footer>

</html>

