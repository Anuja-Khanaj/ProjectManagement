<?php
// session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//     header("location: index.php");
//     exit;
// }

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Project Hub</title>

    <style>
        a{
            color: white;
        }
        li{
            list-style: none;
        }
    </style>
</head>

<body>

    <?php include 'partials/_header.php' ?>

    

    <div class="container my-4">
        <h1 class="text-center mb-0">Project Hub</h1>
        <br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="images/download.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/download.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/download.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
      <div class="info my-4">
      <div class="card" >
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img class="card-img" src="/ProjectManagement/images/image1.jpg">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title">Report Repository System</h5>
                        <p class="card-text">The 'Report Repository System' project was conceived to address a pressing challenge within our educational institution. Traditional paper-based record-keeping and report management have proven to be not only cumbersome but also environmentally unsustainable, as it result in extensive paper waste and storage requirements. The need for a more efficient, accessible, and eco-friendly solution became evident as the institution's report volumes continued to grow.
                        </p>
                     
                    </div>
                </div>
            </div>
        </div>
        <br>
        
        <div class="card" >
            <div class="row no-gutters">
               
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title">Report Repository System</h5>
                        <p class="card-text">The Institutional Repositories (IR) is a very powerful idea that can serve as an engine of 
                        change for any Institution. In this digital age, everyone wants content and to be successful information service providers. So, the Information Centers and Libraries need to develop services in such a way that the end users may manipulate the content, as per their requirements. Therefore, in the present scenario, IRs become an indispensable component for information and knowledge sharing in the scholarly world.

                        </p>
                     
                    </div>
                </div>
                <div class="col-sm-5">
                    <img class="card-img" src="/ProjectManagement/images/image2.jpg">
                </div>
            </div>
            
        </div>
      </div> 
    </div>
    <br>
    <?php include 'partials/_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>