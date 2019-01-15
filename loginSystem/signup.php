<?php
require "header.php";
?>

	<main>
		<div class="wrapper-main">
			<section class="section-default">
				
				<h1>Signup</h1>
				<?php
				if (isset($_GET['error'])) {
					if ($_GET['error'] == "emptyfields") {
						echo '<p>Please fill all the fields</p>';
					}
					elseif ($_GET['error'] == "invailduidmail") {
						echo '<p>Invaild Username & Email id.</p>';
					}
					elseif ($_GET['error'] == "invailduid") {
						echo '<p>Invaild Username.</p>';
					}
					elseif ($_GET['error'] == "invaildmail") {
						echo '<p>Invaild Email id.</p>';
					}
					elseif ($_GET['error'] == "passwordcheck") {
						echo '<p>your password is incorrect.</p>';
					}
					elseif ($_GET['error'] == "usertaken") {
						echo '<p>User is already taken!</p>';
					}

				}
				elseif ($_GET["signup"] == "Success") {
						echo '<p>SignUp Successful.</p>';
				}

					?>
				
				<form class="form-signup" action="includes/signup.inc.php" method="post">
					<input type="text" name="uid" placeholder="Username">
					<input type="text" name="mail" placeholder="Email">
					<input type="password" name="pwd" placeholder="Password">
					<input type="password" name="pwd-repeat" placeholder="Repeat-Password">
					<button type="submit" name="signup-submit">Signup</button>
				</form>


			</section>
		</div>
	</main>

<?php
require "footer.php";
?>