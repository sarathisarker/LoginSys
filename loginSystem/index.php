<?php
require "header.php";
?>

	<main>
		<div class="wrapper-main">
			<section class="section-default">
				<?php
					if (isset($_SESSION['userId'])) {
						echo '<p>You are Logged In.</p>';
					}
					else {
						echo '<p>You are Logged Out.</p>';
					}

				?>
			</section>
		</div>
	</main>

<?php
require "footer.php";
?>