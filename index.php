<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>i discuss catageries</title>
</head>

<body>
    <?php
    include('dbconnect.php');
include('navbar.php');

// for loop to itterate through catageries
?> 
    <!-- slider start
fetch   all catagories

-->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1500x500/?code,python" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1500x500/?code,python" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1500x500/?code,python" class="d-block w-100" alt="...">
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
    <div class="container text-center">

        <h1> welcome to i discuss catageries</h1>

    </div>
    <?php 

$sql="SELECT * FROM `discuss`";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){

$id=$row['catagory_id'];
$cat=$row['catagory_name'];
$desc=$row['catagory_discription'];
echo '<div class="container ">
    <div class="row">
    <div class="col-lg-4 mx-3 my-2">
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/1500x600/?'  .$cat. ' code,python />
" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href="threads.php?catid='  .$id. '">'  .$cat. '</a></h5>
                <p class="card-text   catid='  .$id. '">'  .substr($desc,0,90). '...</p>
                <a href="threads.php?catid='  .$id. ' "class="btn btn-primary">View threads</a>
            </div>
        </div>
    </div>

</div>

</div>';
}
?>
</body>

</html>