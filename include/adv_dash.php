	<div id="panel">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4 class="b">Menu</h4>
					<a href=""><h5>Daily Feeds</h5></a>
					<a href="add.php"><h5>Create New Feed</h5></a>
					<a href="feeds.php"><h5>Your Feeds</h5></a>
				</div>
				<div class="col-md-9">
					<h4 class="b">Dashboard</h4>
					<!-- New Feed -->
					<form id="newFeed" action="#" method="POST">
						<div class="container">
							<h5>Create New Feed</h5>
							<div class="form-group">
								<input class="form-control" type="text" name="sname" placeholder="Service Name">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="pname" placeholder="Service Provider Name">
							</div>
							<div class="form-group">
								<select name="serviceType">
									<option value="">Type of Service</option>
									<option value="buy">Buy Another Service</option>
									<option value="sell">Sell Your Service</option>
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" type="number" name="price" placeholder="Service Price">
							</div>
							<div class="form-group">
								<input class="form-control" type="email" name="email" placeholder="Contact Email">
							</div>
							<div class="form-group">
								<input class="form-control" type="number" name="mobile" placeholder="Contact Number">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="image" placeholder="Image URL">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="moreInfo" placeholder="Description of Service" rows="5"></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-success" type="submit">Insert</button>
								<button class="btn btn-danger" onclick="closeForm()">Close</button>
							</div>
						</div>
					</form>

					<div id="feed">
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<img src="images/service/s1.jpg" class="img-thumbnail mx-auto d-block">
							<h4>Waiter</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<button class="btn btn-info" onclick="showFeedId()">Know More</button>
						</div>
						<div class="col-sm-6 col-md-4">
							<img src="images/service/s2.jpg" class="img-thumbnail mx-auto d-block">
							<h4>Tailor</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<button class="btn btn-info">Know More</button>
						</div>
						<div class="col-sm-6 col-md-4">
							<img src="images/service/s3.jpg" class="img-thumbnail mx-auto d-block">
							<h4>Coffie Boy</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<button class="btn btn-info">Know More</button>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<img src="images/service/s4.jpg" class="img-thumbnail mx-auto d-block">
							<h4>Teacher</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<button class="btn btn-info">Know More</button>
						</div>
						<div class="col-sm-6 col-md-4">
							<img src="images/service/s5.jpg" class="img-thumbnail mx-auto d-block">
							<h4>Delievery Van</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<button class="btn btn-info">Know More</button>
						</div>
						<div class="col-sm-6 col-md-4">
							<img src="images/service/s6.jpg" class="img-thumbnail mx-auto d-block">
							<h4>DJ Boy</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<button class="btn btn-info">Know More</button>
						</div>
					</div>
					</div>

					<!-- Show Dynamic Feed based on Click of Feed-->
					<div id="showFeed">
						<h4>Service Name</h4>
						<img src="images/service/s7.jpg" class="img-thumbnail mx-auto d-block">
						<h4>Description of Service : Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
						<h4>Service Provider Name : Name</h4>
						<h4>Type Of Service : Buy/Sell</h4>
						<h4>Price of Service : $8000</h4>
						<h4>Contact Email ID : Email ID</h4>
						<h4>Contact Number : Number</h4>
						<button class="btn btn-danger btn-lg" onclick="closeShowFeed()">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
