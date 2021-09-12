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

include('navbar.php');
include('dbconnect.php'); 
$id=$_GET['catid'];
$sql="SELECT * FROM `discuss` where catagory_id=$id ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
$id=$row['catagory_id'];
$catname=$row['catagory_name'];
$catdesc=$row['catagory_discription'];


}
// for loop to itterate through catageries
?>
    '<div class="container my-4">
        <div class="jumbotron mx-5  ">
            <h1 class="display-4 mx-4   ">
                welcome to <?php
     echo   $catname
    ?></h1>
            <p class="lead "> <?php
     echo         $catdesc
    ?></p>
            <hr class="my-4 ">

            <p>this is pair to pair forum for sharing knowledge with each other
                No Spam / Advertising / Self-promote in the forums. These forums define spam as unsolicited
                advertisement for goods, services and/or other web sites, or posts with little, or completely unrelated
                content. Do not spam the forums with links to your site or product, or try to self-promote your website,
                business or forums etc.
            </p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>';

        <?php
        include('dbconnect.php');
      if($_SERVER['REQUEST_METHOD']=='POST') {
         $th_title=$_POST['title'];
         $th__desc=$_POST['desc'];
         
      $sql="INSERT INTO `threads` ( `threads_title`, `threads_desc`, `threads_user_id`, `threads_catagory_id`, `datetime`) VALUES ('$th_title', '$th__desc', '2', '2', current_timestamp())";
        
        $result=mysqli_query($conn,$sql);
      }
     
   ?>

        <div class="container">

            <div class="container">
                <h1>Start Discussion</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method='POST'>
                    <div class="form-group">
                        <label for="exampleInputEmail1">problem title</label>
                        <input type="text" class="form-control" name=title aria-describedby="emailHelp">
                        <small id="title" class="form-text text-muted">title as samall as possible</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Elaborate your concern</label>
                        <textarea class="form-control" name=desc rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary text-center">Submit</button>
                </form>

            </div>
    
            <h1>Browse queastion</h1>
            <?php
include('dbconnect.php');

//$id=$_GET['threadsid'];
$sql="SELECT * FROM `threads`  ";
$result=mysqli_query($conn,$sql);
$noresult=false;
while($row=mysqli_fetch_assoc($result)){
    $noresult=true;
    $id=$row['threads_id'];
$title=$row['threads_title'];
$desc=$row['threads_desc'];
$content_time=$row['datetime']; 
echo '<div class="container">

<div class="media">
    <img src="img/user.jpg" width="34px" height="34px" class="mr-3" alt="...">
    <div class="media-body">
    <h5 class=mt-0">harry  ' .$content_time.' </h5>
        <h5 class=mt-0"><a href="threadslist.php?threadsid='  .$id. '" >'  .$title.  ' </a> </h5>
        ' .$desc.'
    </div>
</div>

</div>';
}
// for loop to itterate through catageries
?>
            <?php
             if($noresult){
                echo        '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4">No result found</h1>
                  <p class="lead">Be the 1st person to ask question</p>';
                }
    ?>

</body>

</html>