<!DOCTYPE html>
<?php


include("includes/header.php");



?>


    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">TalkingSpace</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="register.html">Create An Account</a></li>
            <li><a href="create.html">Create Topic</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="main-col">
					<div class="block">
						<h1 class="pull-left">Welcome to Talkingspace</h1>
						<h4 class="pull-right">A simple PHP forum engine</h4>
						<div class="clearfix"></div>
						<hr>
						<ul id="topics">
							<li class="topic">
							<div class="row">
							<div class="col-md-2">
								<img class="avatar pull-left" src="img/gravatar.jpg" />
							</div>
							<div class="col-md-10">
								<div class="topic-content pull-right">
									<h3><a href="topic.html">How did you learn CSS and HTML?</a></h3>
									<div class="topic-info">
										<a href="category.html">Development</a> >> <a href="profile.html">BradT81</a> >> Posted on: June 12, 2014
										<span class="badge pull-right">3</span>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="topic">
						<div class="row">
							<div class="col-md-2">
								<img class="avatar pull-left" src="img/gravatar.jpg" />
							</div>
							<div class="col-md-10">
								<div class="topic-content pull-right">
									<h3><a href="topic.html">How to create new page dynamically in php</a> </h3>
									<div class="topic-info">
										<a href="category.html">Development</a> >> <a href="profile.html">BradT81</a> >> Posted on: June 12, 2014
										<span class="badge pull-right">7</span>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="topic">
						<div class="row">
							<div class="col-md-2">
								<img class="avatar pull-left" src="img/gravatar.jpg" />
							</div>
							<div class="col-md-10">
								<div class="topic-content pull-right">
									<h3><a href="topic.html">Google Panda - Who's affected?</a></h3>
									<div class="topic-info">
										<a href="category.html">Search Engines</a> >> <a href="profile.html">BradT81</a> >> Posted on: June 12, 2014
										<span class="badge pull-right">4</span>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="topic">
						<div class="row">
							<div class="col-md-2">
								<img class="avatar pull-left" src="img/gravatar.jpg" />
							</div>
							<div class="col-md-10">
								<div class="topic-content pull-right">
									<h3><a href="topic.html">Is Css3 is not working in IE8 and IE9?</a></h3>
									<div class="topic-info">
										<a href="category.html">Design</a> >> <a href="profile.html">BradT81</a> >> Posted on: June 12, 2014
										<span class="badge pull-right">2</span>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="topic">
						<div class="row">
							<div class="col-md-2">
								<img class="avatar pull-left" src="img/gravatar.jpg" />
							</div>
							<div class="col-md-10">
								<div class="topic-content pull-right">
									<h3><a href="topic.html">Best Web Application Frameworks</a></h3>
									<div class="topic-info">
										<a href="category.html">Development</a> >> <a href="profile.html">BradT81</a> >> Posted on: June 12, 2014
										<span class="badge pull-right">4</span>
									</div>
								</div>
							</div>
						</div>
					</li>
						</ul>
						<h3>Forum Statistics</h3>
					<ul>
						<li>Total Number of Users: <strong>52</strong></li>
						<li>Total Number of Topics: <strong>10</strong></li>
						<li>Total Number of Categories: <strong>5</strong></li>
					</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="block">
						<h3>Login Form</h3>
						<form role="form">
						<div class="form-group">
							<label>Username</label>
							<input name="username" type="text" class="form-control" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input name="password" type="password" class="form-control" placeholder="Enter Password">
						</div>
						<button name="do_login" type="submit" class="btn btn-primary">Login</button> <a  class="btn btn-default" href="register.html"> Create Account</a>
					</form>
					</div>

					<div class="block">
					<h3>Categories</h3>
					<div class="list-group">
						<a href="#" class="list-group-item active">All Topics <span class="badge pull-right">14</span></a>
						<a href="#" class="list-group-item">Design<span class="badge pull-right">4</span></a>
						<a href="#" class="list-group-item">Development<span class="badge pull-right">9</span></a>
						<a href="#" class="list-group-item">Business & Marketing <span class="badge pull-right">12</span></a>
						<a href="#" class="list-group-item">Search Engines<span class="badge pull-right">7</span></a>
						<a href="#" class="list-group-item">Cloud & Hosting <span class="badge pull-right">3</span></a>
					</div>
				</div>
				</div>
			</div>
		</div>
    </div><!-- /.container -->
  </div>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
