<?php 
	// Check For Submit
	if (filter_has_var(INPUT_POST, 'submit')) {
		// Get Form Data
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">My Website</a>
			</div>
		</div>
	</div>

	<div class="container">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="message" class="form-control"></textarea>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>


	
	<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->


</body>
</html>