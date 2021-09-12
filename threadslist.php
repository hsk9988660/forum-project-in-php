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

$id=$_GET['threadsid'];
$sql=$sql="SELECT * FROM `threads` where threads_id=$id "; 
$result=mysqli_query($conn,$sql);
$noresult=false;
while($row=mysqli_fetch_assoc($result)){
    $noresult=true;
$title=$row['threads_title'];
$desc=$row['threads_desc'];

}
// for loop to itterate through catageries
?>
    <div class="container my-4">
        <div class="jumbotron mx-5">
            <h1 class="display-4 mx-4"> 

                <?php
        echo $title;

            ?> </h1>
            <p class="lead"><?php
        echo  $desc;
            ?></p>
            <hr class="my-4 ">
            <p>this is pair to pair forum for sharing knowledge with each other
                No Spam / Advertising / Self-promote in the forums. These forums define spam as unsolicited
                advertisement for goods, services and/or other web sites, or posts with little, or completely unrelated
                content.
            </p><strong>posted by :hashim</strong>
      
        </div>
        <h1>Post a comment</h1>
          <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method='POST'>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">post your comment</label>
                        <textarea class="form-control" name=comment rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary text-center">Submit</button>
                </form>
        <?php
        include('dbconnect.php');
        $showalert=false;
      if($_SERVER['REQUEST_METHOD']=='POST') {
        $showalert=true;
          $id=$_GET['threadsid'];
          $comment=$_POST['comment'];
        
         $sql="INSERT INTO `comment` ( `comment_content`, `threads_id`, `comment_type`) VALUES ( '$comment', $id, current_timestamp());";
        $result=mysqli_query($conn,$sql);
        if($showalert){
          echo '<div class="alert alert-secondary" role="alert">
          A simple secondary alert—check it out!
        </div>';


        }
      }
     
   ?>

         
<?php
include('dbconnect.php');

$id=$_GET['threadsid'];
$sql="SELECT * FROM `comment`where threads_id=$id  ";
$result=mysqli_query($conn,$sql);
$noresult=false;
while($row=mysqli_fetch_assoc($result)){
    $noresult=true;
   // $id=$row['comment_id'];
$content=$row['comment_content'];
$content_time=$row['comment_type'];

echo '<div class="container">
<div class="media">
    <img src="img/user.jpg" width="34px" height="34px" class="mr-3" alt="...">
    <div class="media-body">
    <h5 class=mt-0">harry  ' .$content_time.' </h5>
       ' .$content.'
    </div>
</div>

</div>';
}
?>
<!-- <?php
             if($noresult){
                echo        '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4">No result found</h1>
                  <p class="lead">Be the 1st person to ask question</p>';
                }
    ?>  -->
  </div>
</div>
</body>
</html>