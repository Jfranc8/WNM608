<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jessica's Indoor Houseplants</title>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="css/storetheme.css">
</head>
<body>
	
	<!-- header>h1+p -->
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none font">
				<h1>Jessica's Indoor Houseplants</h1>
			</div>
		<div class="flex-stretch"></div>
			<nav class="flex-none nav">
				<ul class="container display-flex">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="product_list.php">Shop</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">
			<h2>Grid</h2>
			<div class="grid">
				<div class="col-xs-6">column 6</div>
				<div class="col-xs-6">column 6</div>
			</div>
			<div class="grid gap xs-small md-medium">
				<div class="col-xs-4">column 4</div>
				<div class="col-xs-4">column 4</div>
				<div class="col-xs-4">column 4</div>

				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>

				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>
				<div class="col-xs-6">column 6</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="card soft">
			<h2>Responsive Grid</h2>
			<div class="grid">
				<div class="col-xs-12 col-md-6">column 6</div>
				<div class="col-xs-12 col-md-6">column 6</div>
			</div>
			<div class="grid">
				<div class="col-xs-12 col-md-4 col-xl-3">column 4</div>
				<div class="col-xs-12 col-md-4 col-xl-6">column 4</div>
				<div class="col-xs-12 col-md-4 col-xl-3">column 4</div>

				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>
			</div>
			<div class="grid ten gap">
				<div class="col-xs-2">column 2</div>
				<div class="col-xs-2">column 2</div>
				<div class="col-xs-2">column 2</div>
				<div class="col-xs-2">column 2</div>
				<div class="col-xs-2">column 2</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="grid gap xs-small md-medium">
			<!-- .col-xs-6.col-md-3*4>.card>{Card} -->
			<div class="col-xs-6 col-md-3">
				<img src="https://via.placeholder.com/500" alt="" class="media-image">
			</div>
			<div class="col-xs-6 col-md-3">
				<img src="https://via.placeholder.com/500" alt="" class="media-image">
			</div>
			<div class="col-xs-6 col-md-3">
				<img src="https://via.placeholder.com/500" alt="" class="media-image">
			</div>
			<div class="col-xs-6 col-md-3">
				<img src="https://via.placeholder.com/500" alt="" class="media-image">
			</div>
		</div>
	</div>


	<!-- .container>article#article$.article*4>h2{Article $}+div.article-body>p*3>lorem40 --> 
	<div class="container">
		<article id="article1" class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>Article 1</h2>
				</div>
				<div class="flex-none">
					<small>5:20am</small>
				</div>
			</div>
			<div class="article-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas possimus, modi laboriosam perferendis ipsa dolore molestiae optio pariatur facilis omnis illum totam, et quos officia fuga placeat necessitatibus, voluptates ratione aliquid. Imedit minus et quasi blanditiis vel laboriosam ipsum dolor!</p>

				<p>Eligendi repudiandae error a totam ea non odio quis fugiat minima exercitationem veritatis tenetur nam facere, atque facilis consequatur, modi vitae laborum at enim, assumenda voluptate, odit ipsum? Libero eaque vitae 
				aliquam voluptatem ipsum est nostrum totam perferendis ducimus recusandae!</p>
				
				<p>Rerum reprehenderit itaque nihil repudiandae quos, deserunt aspernatur, fugit adipisci eius tempora natus, temporibus dolore consequatur ex saene expedita tenetur veritatis accusantium vel.</p>
			</div>
		</article>

	<div class="container">
		<article id="article2" class="article card hard">
			<h2>Article 2</h2>
			<div class="article-body">
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi suscipit placeat rem nam quia aliquid voluptatum ratione, quaerat blanditiis. Ab ut odit, reiciendis hic incidunt sit tempore? Mollitia accusamus, ipsum.</p>
				<p>Dolores voluptate tempora animi blanditiis, atque dolore laboriosam, a! Neque unde nostrum, similique quae, alias nulla doloremque consectetur quam perferendis, animi officiis labore ipsum, sequi ipsa quo minima error obcaecati?</p>
				<p>Deserunt, adipisci dolorem itaque iste odio delectus pariatur labore corrupti non, illum vero officiis nemo voluptas et inventore rerum suscipit, voluptatem sunt earum. Exercitationem earum deleniti quos provident repellat incidunt.</p>	
			</div>
		</article>
	</div>
	<div class="view-window" style="background-image: url(img/background.jpg);">
	</div>
		
	<div class="container">
		<article id="article3" class="article">
			<h2>Article 3</h2>
			<div class="article-body">
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi suscipit placeat rem nam quia aliquid voluptatum ratione, quaerat blanditiis. Ab ut odit, reiciendis hic incidunt sit tempore? Mollitia accusamus, ipsum.</p>
				<p>Dolores voluptate tempora animi blanditiis, atque dolore laboriosam, a! Neque unde nostrum, similique quae, alias nulla doloremque consectetur quam perferendis, animi officiis labore ipsum, sequi ipsa quo minima error obcaecati?</p>
				<p>Deserunt, adipisci dolorem itaque iste odio delectus pariatur labore corrupti non, illum vero officiis nemo voluptas et inventore rerum suscipit, voluptatem sunt earum. Exercitationem earum deleniti quos provident repellat incidunt.</p>	
			</div>
		</article>
	</div>

</body>
</html>