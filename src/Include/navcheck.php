
         <?php
				if (isset($_SESSION['u_email'])) {
						echo ' <li class="nav-item">
                	    <a class="nav-link" href="include/logout.inc.php">Logout</a>
               			 </li>';
				} else {
						echo ' <li class="nav-item">
                    <a class="nav-link" href="login.php">Registrer / Login</a>
                	</li>';
					}
				?>