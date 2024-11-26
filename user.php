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
    <div id="dataContainer" class="container mt-5">
        <h2 class="text-center">Liste des Informations</h2>
        <div class="row" id="dataContent"></div>
    </div>
    <script>
        function fetchInformation() {
            fetch('data.php') 
                .then(response => response.json()) 
                .then(data => {
                    const container = document.getElementById('dataContent');
                    container.innerHTML = ''; 
                        data.forEach(item => {
                        const card = document.createElement('div');
                        card.className = 'col-md-4 mb-4';
    
                        card.innerHTML = `
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">${item.namesite}</h5>
                                    <p class="card-text">${item.description}</p>
                                    <a href="${item.url}" target="_blank" class="btn btn-primary">Visiter</a>
                                    <p class="text-muted mt-2">Prix : $${item.prix}</p>
                                </div>
                            </div>
                        `;
    
                        container.appendChild(card);
                    });
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération des données :', error);
                    alert('Impossible de récupérer les données. Veuillez réessayer plus tard.');
                });
        }
            document.addEventListener('DOMContentLoaded', fetchInformation);
    </script>
   
	<div class="contact_section layout_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="contact_text">Requeste a call back</h1>
					<div class="contact_main">
    			        <div class="mail_section">
    			        	<input type="Name" class="mail_text" placeholder="Name" name="Name">
    			        	<input type="Name" class="mail_text" placeholder="Email" name="Email">
    			        	<input type="Name" class="mail_text" placeholder="Phone" name="Phone">
    			        	<select>
                              <option value="volvo">Select elements</option>
                              <option value="saab">One</option>
                              <option value="opel">Two</option>
                              <option value="audi">Three</option>
                            </select>
    			        	<textarea class="massage_text" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
    			        	<div class="send_bt">
				                <div class="send_text"><a href="#">SEND</a></div>
			                </div>
    			        </div>
    		        </div>
				</div>
				<div class="col-md-6">
					<div class="contact_bg"><img src="images/contact-bg.png"></div>
				</div>
			</div>
		</div>
	</div>

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
<script src="js/BlockJs.js"></script>

</html>
