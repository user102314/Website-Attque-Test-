<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lwess Product</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">WEB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="images/search-icon.png"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="login-container">
        <h3 class="text-center" style="color: #8d18de;">Login</h3><br><br>
        <form id="loginForm">
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select id="role" name="role" class="form-control" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <span><a href="signup.php">SignUp</a></span>
            <button type="submit" class="btn w-100" style="background: #8d18de; color: white;">Login</button>
        </form>
        <div id="responseMessage" class="mt-3 text-center text-color-danger" style="color: red;"></div>
    </div>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const role = document.getElementById('role').value;

    document.getElementById("username").style.borderColor = "";
    document.getElementById("password").style.borderColor = "";

    if (!username || !password || !role) {
        if (!username) document.getElementById("username").style.borderColor = "red";
        if (!password) document.getElementById("password").style.borderColor = "red";
        alert("Please fill in all fields.");
        return;
    }

    const data = new FormData();
    data.append('username', username);
    data.append('password', password);
    data.append('role', role);

    fetch('login.php', {
        method: 'POST',
        body: data
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            window.location.href = data.redirect; 
        } else {
            document.getElementById("username").style.borderColor = "red";
            document.getElementById("password").style.borderColor = "red";
            document.getElementById("responseMessage").innerHTML = data.message;
        }
    })
    .catch(() => {
        alert('An unexpected error occurred. Please try again.');
    });
});
    </script>
	<div class="footer_section layout_padding">
		<div class="container">
			<div class="footer_main">
				<div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">subscribe Now</span>
                    </div>
                </div>
                <h1 class="year_text">2024</h1>
                <h1 class="landing_text">oussemalwess prodection</h1>
			</div>
			<div class="social_icon">
				<ul>
					<li><a href="#"><img src="images/fb-icon.png"></a></li>
					<li><a href="#"><img src="images/twitter-icon.png"></a></li>
					<li><a href="#"><img src="images/linkdin-icon.png"></a></li>
					<li><a href="#"><img src="images/instagram-icon.png"></a></li>
					<li><a href="#"><img src="images/youtub-icon.png"></a></li>
				</ul>
			</div>
		</div>
	</div>
    <script src="js/BlockJs.js"></script>

	<div class="copyright_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="copyright_text">2024 All Rights Reserved Design by <a href="https://oussemalwess.vercel.app/"> Oussema Lwess</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
