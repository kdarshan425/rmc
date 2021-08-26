<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAI RMC INDIA</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&family=Abril+Fatface&family=Quantico:ital@1&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
  @media only screen and (min-width: 800px){
.whovr {
    max-width: 45rem !important;
    margin: 0 auto;
    text-align: center;
}}

h4{
    font-family: 'Raleway',sans-serif;
    font-weight:700;
}

.home{
    background:url('img/project-bg.jpg') no-repeat;
    background-size:cover;

}
@media only screen and (max-width: 500px){
    .home{
    background:url('img/project-bg-mob.jpg') no-repeat;
    background-size:cover;

}
}

.project{
    background:url('img/project-bg1.jpg') no-repeat;
    background-size:cover;
}

@media only screen and (max-width: 500px){
    .project{
    background:url('img/project-bg1-mob.jpg') no-repeat;
    background-size:cover;

}
}
.inner-project{
    /* For browsers that do not support gradients */
  background-image: linear-gradient(white,transparent);
}

    </style>
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <div class="carou">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div style="background: url(img/bg.jpg) no-repeat ;background-size: cover;" class="sai-c1 sai-caro">
                   <div class="container">
                       <div class="sai-caro-caption">
                            <center>
                                <div class="container">
                                    <img class="banner-img"src="img/logo1.png" alt="logo">
                                    <h1 style="padding-top:20px;">SAI RMC INDIA</h1>
                                </div>                                
                            </center>
                       </div>                        
                   </div>
                </div>                
            </div>
            <div class="carousel-item" data-transition="fade"  data-bs-interval="2000">
                <div style="background: url(img/2.jpg) no-repeat ;background-size: cover;" class="sai-c2 sai-caro">
                    <div class="container">
                        <div class="sai-caro-caption">
                            <center>
                                <div class="container">
                                    <h1>SAI RMC INDIA</h1>
                                    <h2 style="color:white">SOPHISTICATION AND EXCELLENCE AT ITS BEST</h2> 
                                    <div style="padding-top:50px;">
                                    <a  class="banner-btn btn-f" href="">PROJECTS</a>   
                                    </div>                                                      
                                </div>
                            </center>
                        </div>
                    </div>
                </div>                
            </div>
            </div>
            <button style="background:linear-gradient(to right,rgb(16 22 23 / 10%) 0,rgba(0,0,0,.0001) 50%);" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button style="background:linear-gradient(to left,rgb(16 22 23 / 10%) 0,rgba(0,0,0,.0001) 50%);" class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
   
	<div class="container ">	
        <div style="padding:50px;" class="home-abt-head">
            <center>
            <h1 style="color:#8888a0;font-weight:500;letter-spacing:1px;text-shadow:none;"><b>Why SAI RMC</b></h1>
            </center>                
        </div>
        <div class="container">
        <div class="row blog-grids">
			<div class="marcol col-lg-4 col-md-6 blog-left mb-lg-0 mb-sm-5 pb-lg-0 ">
				<img src="img/1.jpg" style="width:100%;height:200px;overflow:allow;" class="img-fluid" alt="" />
				<div class="container">
					<div class="blog-info">
						<h4>Promise</h4>
						<p class="mt-2"> 
                        Whatever the quantity of our orders, our fleet of delivery vehicles ensures that your RMC is delivered on time,
                        </p>
					</div>
				</div>
			</div>
			<div class="marcol col-lg-4 col-md-6 blog-middle mb-lg-0 mb-sm-5 pb-lg-0 ">
				<img src="img/2.jpg"  style="width:100%;height:200px;overflow:allow;" class="img-fluid" alt="" />
				<div class="container">
					<div class="blog-info">
						<h4>Environmental focus</h4>
						<p class="mt-2">All our factory procedures pass through standard inspection and verifications,Thats why we deliever the great</p>
					</div>
				</div>
			</div>
			<div class="marcol col-lg-4 col-md-6 blog-right mb-lg-0 mb-sm-5 pb-lg-0 ">
				<img src="img/3.jpg" style="width:100%;height:200px" class="img-fluid" alt="">
				<!-- <img src="images/s4.jpg" class="img-fliud" alt="" ;overflow:allow;/> -->
				<div class="container">
					<div class="blog-info">
						<h4>Client satisfaction & quality </h4>
						<p class="mt-2">Every Sai RMC India batch is delivered with 100% satisfaction guarantee  with quality that never compromised!</p>
					</div>
				</div>
			</div>
		</div>
        </div>
	</div>

    <div class="home">
        <div class="container">
            <div style="padding:50px;" class="home-abt-head">
                <center>
                <h1 style="color:#8888a0;font-weight:500;letter-spacing:1px;text-shadow:none;"><b>Who WE ARE</b></h1>
                </center>                
            </div>
            <div class="container">    
                <div style="width:100%;height:auto;padding-bottom:50px;" class="whovr">
                    <center>
                    <p style="font-family: 'Quantico', sans-serif;"><b>BUILDING BETTER IS A MATTER OF CHOICE !</b><br></p>
                    <p style="line-height:2">We Sai Ready-mix Concrete introduce ourselves as experienced, quality oriented, provider of ready-mixed concrete since last 5 years and serving 180+ prestigious construction companies in and around Pune.</p>
                    <p style="line-height:2">We are the only Ready Mix Concrete Company in the region that offers a versatile range of concrete mixes for all types of structures and buildings, including High-strength, Early-strength and Fiber-reinforced concrete.<br>
                     <a href="">Read More</a> </p>
                </center>
                </div>        
                <!-- <div class="row">
                    <div class="col-lg-6">
                        <h3 style="font-family: 'Quantico', sans-serif;">BUILDING BETTER IS A MATTER OF CHOICE !<br></h3>
                        <p>We Sai Ready-mix Concrete introduce ourselves as experienced, quality oriented, provider of ready-mixed concrete since last 5 years and serving 180+ prestigious construction companies in and around Pune.</p>

                    </div>
                    <div class="col-lg-6">
                    <p style="font-size:17px;">
                        We are the only Ready Mix Concrete Company in the region that offers a versatile range of concrete mixes for all types of structures and buildings, including High-strength, Early-strength and Fiber-reinforced concrete.<br>

                        We can also manufacture and deliver customized RMC formulations to fulfill your specific needs. We also take client budget into account to ensure that there is never any compromise on both quality and value-for-money. When you choose our services, you can remain assured about the consistency of quality across all batches.<br>

                    </p>
                    </div>
                </div>                 -->
            </div>
        </div>
    </div>

    <div class="container">
        <div style="padding:50px;" class="home-abt-head">
            <center>
            <h1 style="color:#8888a0;font-weight:500;letter-spacing:1px;text-shadow:none;"><b>Who WE ARE</b></h1>
            </center>                
        </div>
        
        <div class="container">
        <div class="row blog-grids">
			<div class="marcol col-lg-6 col-md-6 blog-left mb-lg-0 mb-sm-5 pb-lg-0">
				<img src="img/1.jpg" style="width:100%;height:200px;overflow:allow;" class="img-fluid" alt="" />
				<div class="container">
					<div class="blog-info">
						<h4>What is RMC?</h4>
						<p class="mt-2"> 
                        RMC refers to Ready Mix Concrete which is the perfect mixture of concrete manufactured within a factory known as batching plant based on a specific formula. and is delivered to the work site in a transit vehicle.
                        </p>
					</div>
				</div>
			</div>
			
			<div class="marcol col-lg-6 col-md-6 blog-right  mb-lg-0 mb-sm-5 pb-lg-0">
				<img src="img/3.jpg" style="width:100%;height:200px" class="img-fluid" alt="">
				<!-- <img src="images/s4.jpg" class="img-fliud" alt="" ;overflow:allow;/> -->
				<div class="container">
					<div class="blog-info">
						<h4>Why us</h4>
						<p class="mt-2">
                        Sai RMC India manufactures custom RMC formulations based on the specific needs and budget of the client. We are fully equipped to ensure that both quality and consistency are maintained across each batch.
                        </p>
					</div>
				</div>
			</div>
		</div>
        </div>
	</div>

    <div class="project">
        <div class="inner-project">
        <div class="container">
            <div style="padding:50px;" class="home-abt-head">
                <center>
                <h1 style="color:#8888a0;font-weight:500;letter-spacing:1px;text-shadow:none;"><b>OUR PROJECTS</b></h1>
                </center>                
            </div>
            <div class="container">    
                <div style="width:100%;height:auto;padding-bottom:50px;" class="whovr">
                    <center>                    
                    <p style="line-height:2">
                    Sai RMC India has delivered superior quality Ready Mix Concrete Pune for over 5 years for all types of residential and commercial projects. Some of the examples of project categories where we have been supplying RMC include: Luxury Residential Villas, Multistoried Apartments, Farmhouses, Commercial Buildings
                    </p>
                    <p style="line-height:2">
                    Supporting our state-of-the-art manufacturing/batching facility is our advanced fleet of delivery vehicles and equipment. Along with our expertise in delivery, we can transport Ready Mix Concrete at the work site. Our high-capacity concrete pumps can also lift the mix to the required height, no matter the scale and magnitude of your project.
                    <br>
                     <a href="">Read More</a> </p>
                    </center>
                </div>        
                <!-- <div class="row">
                    <div class="col-lg-6">
                        <h3 style="font-family: 'Quantico', sans-serif;">BUILDING BETTER IS A MATTER OF CHOICE !<br></h3>
                        <p>We Sai Ready-mix Concrete introduce ourselves as experienced, quality oriented, provider of ready-mixed concrete since last 5 years and serving 180+ prestigious construction companies in and around Pune.</p>

                    </div>
                    <div class="col-lg-6">
                    <p style="font-size:17px;">
                        We are the only Ready Mix Concrete Company in the region that offers a versatile range of concrete mixes for all types of structures and buildings, including High-strength, Early-strength and Fiber-reinforced concrete.<br>

                        We can also manufacture and deliver customized RMC formulations to fulfill your specific needs. We also take client budget into account to ensure that there is never any compromise on both quality and value-for-money. When you choose our services, you can remain assured about the consistency of quality across all batches.<br>

                    </p>
                    </div>
                </div>                 -->
            </div>
        </div>
        </div>
    </div>

    <?php include 'partials/footer.php'; ?>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>