<?php
	require "header.php";
?>
	
	<main>
		<?php
			if (isset($_SESSION['type'])) {

				if ($_SESSION['type'] == 1) {
					echo '<p>You are logged in as Admin!</p>'. $_SESSION['staff'];
				}

				else if ($_SESSION['type'] == 2) {
					echo '<p>You are logged in as User!</p>'. $_SESSION['staff'];
				}

				else {
					echo "NO ENTRY";
				}
			}

			else {
				echo '<p>You are logged out!</p>';
			}
		?>
	</main>