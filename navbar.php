<?php
echo  '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="index.php">Idiscuss</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="About.php">About <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="contact.php">contact <span class="sr-only">(current)</span></a>
  </li>      
  <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Dropdown
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="#">Action</a>
         <a class="dropdown-item" href="#">Another action</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="#">Something else here</a>
       </div>
     </li>
  
 
   
     

 
  
  </ul>
  <form class="form-inline my-2 my-lg-0"   method="GET" action="search.php"  >
    <input class="form-control mr-sm-2"   name="search"   type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"   >Search</button>
  </form>
  <div>
  <button class="btn btn-primary mx-2"data-toggle="modal" data-target="#loginmodal">login</button>
  <button class="btn btn-primary mx-2"data-toggle="modal" data-target="#loginmodal">sign up</button>
</div>
  
</div>
</nav>';

include 'login modal.php';
include 'signup.php';


?> 