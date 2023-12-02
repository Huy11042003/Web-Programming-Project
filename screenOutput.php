<?php
include_once('retrieve.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Output CV Screen</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="outputStyle.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="container">
		<div class="left_Side">
			<div class="profileText">
				<div class="imgBx">
					<img src=
					<?php
						echo "'". $uploadPhoto . "'";
					?>>
				</div>
				<h2>
					<?php
						echo $firstName . " " . $lastName;
					?>
					<br>
					<span>
						<?php
							echo $wantedJob;
						?>
					</span>
				</h2>
			</div>

			<div class="contactInfo">
				<h3 class="title">Contact Info</h3>
				<ul>
					<?php
						if(sizeof($userEdu['phoneNumber']) > 0){
							foreach($userEdu['phoneNumber'] as $Number){
								echo "<li>";
									echo "<span class='icon'><i class='fa fa-phone' aria-hidden='true'></i></span>";
									echo "<span class='text'>" . $Number . "</span>"; 
								echo "</li>";
							}
						}
					?>
					<!-- <li>
						<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
						<span class="text">+1 234 5678 900</span>
					</li> -->
					<li>
						<span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
						<span class="text">
							<?php
								echo $email;
							?>
						</span>
					</li>
					<li>
						<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						<span class="text">
							<?php
								echo $address . ', ' . $city . ','  . $country;

							?>
						</span>
					</li>
				</ul>
			</div>


			<div class="contactInfo education">
				<h3 class="title">Education</h3>
				<ul>
					<?php
						foreach($listUser as $User){
							echo "<li>";
							echo "<h5>";
							$dateStart = DateTime::createFromFormat("Y-m-d", $User['startDate']);
							$dateEnd = DateTime::createFromFormat("Y-m-d", $User['endDate']);
							echo $dateStart->format("Y") . ' - ' . $dateEnd->format("Y");
							echo "</h5>";
							echo "<h4>";
							echo $User['degree'] . " in " . $User['university'];
							echo "</h4>";
							echo "</li>";	
						}
					?>
				</ul>
			</div>

			<?php
				if(sizeof($userEdu['languages']) > 0){
					$languageProficiency = [70, 45, 95];
					$i = 0;
					echo "<div class=" . "'contactInfo language'" .">";
					echo "<h3 class='title'>Languages</h3>";

					foreach($userEdu['languages'] as $language){
						echo "<ul>";
						echo "<li>";
						echo "<span class='text'>" . $language . "</span>";
						echo "<span class='percent'>";
						echo "<div style='width:". $languageProficiency[$i++] . "%'></div>";
						echo "</span>";
						echo "</li>";
						echo "</ul>";
					}


					echo "</div>";
				}
			?>
			<!-- <div class="contactInfo language">
				<h3 class="title">Languages</h3>
				<ul>
					<li>
						<span class="text">English</span>
						<span class="percent"></span>
					</li>
				</ul>
			</div> -->
		</div>
		<div class="right_Side">
			<div class="about">
				<h2 class="title2">Profile</h2>
				<p><?php echo $profile;?></p>
			</div>
			<?php
				if(sizeof($listExpJob) > 0){
					echo "<div class='about'>";
					echo "<h2 class='title2'>Experience</h2>";
					foreach($listExpJob as $job){
						echo "<div class='box'>";
							echo "<div class='year_company'>";

								$dateStart = DateTime::createFromFormat("Y-m-d", $job['startDate']);
								$dateEnd = DateTime::createFromFormat("Y-m-d", $job['endDate']);

								echo "<h5>" . $dateStart->format("Y") . " - " . $dateEnd->format("Y") . "</h5>";
							echo "</div>";
							echo "<div class='text'>";
								echo "<h4>" . $job['job'] . "</h4>";
								echo "<p>" . $job['description'] . "</p>";
							echo "</div>";		
						echo "</div>";
					}
					echo "</div>";
				}
			?>

			<div class="about certifications">
				<h2 class="title2">Certifications</h2>
				<?php
					if(sizeof($listCertificates) > 0){
						foreach($listCertificates as $certi){
							echo "<div class='box'>";
								echo "<h4>" . $certi['name'] . "</h4>";
								echo "<p>" . $certi['description'] . "</p>";
							echo "</div>";
						}
					}
				?>
			</div>

			<div class="about skills">
				<h2 class="title2">Professional Skills</h2>
				<?php 
					if(sizeof($listSkills) > 0){
						foreach($listSkills as $SKILL){
							echo "<div class='box'>";
								echo "<h4>" . $SKILL['name'] . "</h4>";
								echo "<div class='percent'>";
									echo "<div style='width: 90%;'></div>";

								echo "</div>";
							echo "</div>";
						}
					} 
				?>
			</div>

			<div class="about interest">
				<h2 class="title2">Interest</h2>
				<ul>
					<li></li>
				</ul>
			</div>
		</div>


	</div>
</body>
</html>