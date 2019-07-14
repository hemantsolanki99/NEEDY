<?php
    include "include/nav.php";
?>
	<!-- NEEDY- Info -->
	<div id="top">
		<div class="container">
			<div class="row">
				<div class="col-lg-8" onclick="pagerdirct()">
					<h2>NEEDY - A One Step Ahead For Advertisement</h2>
					<h3>Start Your Journey Here<br>
						Provide Your Service and Get Others Service<br>
						Location Based Feeds At Your Account!
					</h3>
					<button onclick="pagerdirector()" class="btn btn-success btn-lg">Register Now!</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Know More -->
	<div id="know">
		<h2>Know More</h2>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
		</div>		
	</div>
<!--  sudo ./manager-linux-x64.run  -->
	<!-- Reviews -->
	<div id="review">
		<h2>Reviews</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="images/review/r1.png" class="img-thumbnail mx-auto d-block">
					<h4>Jiny</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-md-4">
					<img src="images/review/r2.png" class="img-thumbnail mx-auto d-block">
					<h4>Tina</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-md-4">
					<img src="images/review/r7.png" class="img-thumbnail mx-auto d-block">
					<h4>Rahul</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img src="images/review/r3.png" class="img-thumbnail mx-auto d-block">
					<h4>Jay</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-md-4">
					<img src="images/review/r4.png" class="img-thumbnail mx-auto d-block">
					<h4>Aarav</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-md-4">
					<img src="images/review/r5.png" class="img-thumbnail mx-auto d-block">
					<h4>Dharmik</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- About Us -->
	<div id="about">
		<h2>About Us</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="images/developer/dhruv-1.jpg" class="img-thumbnail mx-auto d-block">
					<h4>Dhruv Solanki</h4>
					<p>Concept and Design</p>
					<ul>Good At
						<li>Java Script</li>
						<li>Java</li>
						<li>Python</li>
						<li>C and C++</li>
					</ul>
				</div>

				<div class="col-md-4">
					<img src="images/developer/hemant.png" class="img-thumbnail mx-auto d-block">
					<h4>Hemant Solanki</h4>
					<p>Back End Developer</p>
					<ul>Good At
						<li>HTML and CSS</li>
						<li>Bootstrap Library</li>
						<li>PHP</li>
						<li>MySQL</li>
					</ul>
				</div>

				<div class="col-md-4">
					<img src="images/developer/nishith.png" class="img-thumbnail mx-auto d-block">
					<h4>Nishith Trivedi</h4>
					<p>Front End Developer<br>
					<ul>Good At
						<li>Java</li>
						<li>C and C++</li>
						<li>JSP and Servlet</li>
						<li>C and C++</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


<script type="text/javascript">
	function pagerdirector(){
		window.location.href = "register.php";
	}
	function pagerdirct(){
		window.location.href = "#about";
	}
</script>

<?php
    include "include/footer.php";
?>


<!-- 

Start Anaconda Navigator : 

@1st : source ~/anaconda3/bin/activate root
@2nd : anaconda-navigator

 -->