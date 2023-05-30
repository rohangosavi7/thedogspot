<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Admin- User Profile</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link type="text/css" rel="stylesheet" href="assets/css/user.css">
   <link rel="stylesheet" href="../css/menu.css">



</head>
<body>
	<script type="text/javascript" src="../js/main.js"></script>

  <!-- Header area starts -->
  <header class=" header"> 
    <!--navigation bar-->
    <section class="navigation">
      
      <div class="nav-container" id="navbar" >
        <!-- logo and brand -->
        <div class="brand">
          <a href="../index.html" >
            <a href="../index.html">THE DOG SPOT</a>
          </a>
        </div>

        <!-- nav items -->
        <div class="nav-items" style="color:#222429;">
          <nav>
            <div class="nav-mobile">
              <a id="nav-toggle" href="#!"><span></span></a>
            </div>

            <ul class="nav-list">
              <!-- Setting the links to #! will ensure that no action takes place on click. -->
              <li><a href="../index.html" >HOME</a></li>
              <li><a href="#about">ABOUT</a></li>
              <li><a href="#">SERVICES</a>
                <ul class="nav-dropdown">
                <li><a href="../services.html">All Services</a></li>
                <li><a href="../adopt-pet.html">Adopt a Pet</a></li>
                <li><a href="../upload-pet.html">Upload pet Info</a></li>
                </ul>
              </li>
              <li><a href="../contact.html">CONTACT</a></li>
              <li><a href="../adopt-pet.html">ADOPT PET</a></li>
			  <li>
              <a href=""><img class="user-img" src="../images/user.png" alt=""/></a>
            </li>          
		</nav>
        </div>
      </div>
    </section>
    
  </header>
  <!-- header ends-->
  <section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">User Account</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="../images/user-avatar.png" alt="Image" class="shadow">
						</div>
						<h4 class="text-center">Prashant Ahirrao</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							My Profile
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i> 
							My Orders
						</a>
						<a class="nav-link" id="application-tab" data-toggle="pill" href="#application"  role="tab" aria-controls="application" aria-selected="false">
							<i class="fa fa-tv text-center mr-1"></i> 
							Contact Us
						</a>
						
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
							<i class="fa fa-bell text-center mr-1"></i> 
							Logout
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>User Name</label>
								  	<input type="text" class="form-control" value="<?php echo $_SESSION['user_name'] ?>">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" value="prashantahirrao@gmail.com">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Phone number</label>
								  	<input type="text" class="form-control" value="+91 9876543215">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
								  	<label>Address</label>
									<textarea class="form-control" rows="4"></textarea>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">My Orders</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>No orders</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								</div>
							</div>
						</div>
						<div>

						</div>
					</div>
					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
					<h3 class="mb-4" >Contact Us</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<button class="btn btn-primary"> <a style="color:#ffffff;" class="nav-link" href="../contact.html">Contact Us</a> </button>
									</div>
									<div class="form-check">

									</div>
								</div>
							</div>
						</div>
						<div>

						</div>
					</div>
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">LogOut</h3>
						<div class="form-group">
							<button class="btn btn-primary"> <a style="color:#ffffff;" class="nav-link" href="logout.php">Click here to Log Out</a> </button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
	<div id="footer">
      <script>
        $(function () {
          $("#footer").load("../footer.html");
        });
      </script>
    </div>
</body>
</html>