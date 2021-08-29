<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d82b93004d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&family=Abril+Fatface&family=Quantico:ital@1&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="owl-caro/owl.carousel.min.css">
    <link rel="stylesheet" href="owl-caro/owl.theme.default.min.css">
    
    <style>
    .contactimg{
        width:100%;
        height:auto;
        padding-top:60px;
    }
    
    @media (max-width: 570px){
        .contactimg{
        width:100%;
        height:auto;
        padding-top:0px;
    }
    }
    @media (max-width: 800px){
        .contactimg{
        width:100%;
        height:auto;
        padding-top:40px;
    }
    }
    .form-control{
        border-radius: 5px;
    }
    .form-group {
    margin-bottom: 1rem;
}
    </style>
</head>
<body>
    
    <!--  -->
    <?php include 'partials/header.php';?>
    
    <div style="padding-top:100px;" class="container ch-head" style="text-align: center;">
        <center><h1 data-aos="zoom-in" style="color:#6d6d7d;">Contact Us</h1></center>
    </div>
    <div  class="container" style="padding-bottom:90px;padding-top:50px;">
        <div class="container" style="text-align:center;padding-bottom:30px;font-family: 'Archivo', sans-serif;">
        <center>
            <div style="max-width:500px;">
            <p style="color: #8888A0;font-size:18px;">If you're having any query, any suggession, any feedback, We are always there for you! Just post a message below We'll reach you soon in your mail..</p>
            <p style="color: #8888A0;font-size:18px;">Mail us at info@sairmcindia.com<br>Or</p>
            </div>
        </center>       
    </div>
    
    <div style="box-shadow: 0px 10px 20px -5px rgb(73 93 207 / 20%);" class="row">        
                <div style="height:100%" class="col-xs-12 col-sm-12 col-lg-6">
                    <div style="padding-top:0px;padding-bottom:50px;" class="container">
                        <div class="contactimg" >
                        <img style="width:100%;height:auto;" src="img/contact.svg" alt="">
                        </div>
                    </div>
                </div>
                <div style="background:rgb(240 239 253)" class="col-xs-12 col-sm-12 col-lg-6">
                    <form method="post" action="<?php $_SERVER["REQUEST_URI"] ?>"  id="contact-form" >
                    <center>
                    <div style="max-width:350px;padding-top:40px;padding-bottom:30px;">
                        <div class="form-group">                            
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"  required>
                        </div>
                        <div class="form-group">                            
                            <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name"  required>
                        </div>
                        <div class="form-group">                            
                            <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Title"  required>
                        </div>
                        <div class="form-group">                           
                            <textarea name="desc" placeholder="Description" style="height:90px;" class="form-control" id="desc" name="desc" rows="3"  required></textarea>
                        </div>
                        <center>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </center>
                    </div>                        
                    </center>                
                    </form>
                </div>
            </div>
    
    </div>
    <?php
    include 'partials/footer.php';
    ?>
    <script>
     setTimeout(function () {
  
  // Closing the alert
  $('.alert').alert('close');
}, 5000);
</script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>