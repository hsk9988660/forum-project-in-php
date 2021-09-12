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
       
        $noresult=true;
        $queryy=  $_GET['search'];   
$sql=$sql=" SELECT * FROM `threads` WHERE MATCH (threads_title,threads_desc) against ('$queryy')"; 
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
   
    $noresult=false;
$title=$row['threads_title'];
$desc=$row['threads_desc'];
$id=$row['threads_id'];



echo  '



<div><h1><a href=" threadslist.php?threadsid='  .$id. ' ">  ' .$title.    '  </a></h1>
  <P>  ' .$desc.    ' </p>

';
}
 
 if ($noresult) {
    echo 'please match correct words ';
   
   
   
    }



      
        ?>
  
  
     



</body>

</html>