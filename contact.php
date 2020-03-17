<?php 
include 'includes/header.php';
include 'includes/config.php';

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$insertQuery="INSERT INTO `contact`( name , email , message) VALUES ('$name','$email','$message')";

	$result=mysqli_query($db,$insertQuery);

}



 ?>



<style type="text/css">
	

	h1,
h2,
h3,
h4,
h5,
h6,
p {
		font-family: 'Open Sans' sans-serif;
		color: #FBFBFB;
		margin: 0;
}

.contact__container {
		display: block;
		border: 10px solid #62B6CB;
		border-radius: 10px;
		margin: 0 auto;
		padding: 0 0 10px 10px;
		max-width: 330px;
		background-color: #62B6CB;
}

.contact__title {
		display: inline-block;
}

.contact__title h2 {
		padding: 0 10px 0 0px;
		margin: 5px 0;
		color: #FBFBFB;
}

.contact__form {
		padding: 10px 10px 0 0;
}

hr {
		width: 100%;
		display: block;
		margin: 5px 0;
		height: 5px;
		border: 0;
		background-color: #FBFBFB;
}

input,
textarea {
		width: 100%;
		border: 5px solid #FFFFFF;
		border-radius: 5px;
		resize: none;
		padding: 0 5px;
		box-sizing: border-box;
		font-family: 'Open Sans' sans-serif;
		font-size: 18px;
		color: #25606f;
}

input[type="text"] {
		padding: 0;
		height: 40px;
		width: 100%;
}

input:focus,
textarea:focus {
		outline: none;
}

.contact__form-input {
		margin: 5px 0 10px 0;
}

.contact__form-textarea {
		margin: 5px 0;
		width: 100%;
		height: 100px;
}

input[type="submit"] {
		width: 100%;
		height: 50px;
		background-color: #25606f;
		border: 0;
		color: #FBFBFB;
		border: 5px solid #25606f;
		border-radius: 5px;
		margin: 10px 0 0 0;
		font-family: 'Open Sans' sans-serif;
		font-size: 22px;
}

input[type="button"]:hover {
		background-color: #368da2;
		border: #368da2;
}
</style>




<div class="wrapper">
		<div class="contact__container">
				<div class="contact__title">
						<h2>Contact us<hr></h2>

				</div>
				<form class="contact__form" method="post" action="">
						<p>Name</p>
						<input class="contact__form-input" type="text" name="name" required>

						<p>Email</p>
						<input class="contact__form-input" type="text" name="email" required>

						<p>Message</p>
						<textarea class="contact__form-textarea" type="text" name="message"></textarea>

						<input type="submit" name="submit" value="Send message">
				</form>
		</div>
</div>

<?php include 'includes/footer.php' ?>;