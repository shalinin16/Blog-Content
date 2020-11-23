<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: adminlogin.php"); // Redirecting To Home Page
}
?>

<html>
<head>
    <title>Admin page</title>
    <meta charset ="utf-8">
        <link rel="stylesheet" href="newstyle.css">
        <title>Admin Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    </head>
<header class="page-header">
  <nav>
    <a href="">
     <img class="logo" src="https://electralink.com/wp-content/uploads/2015/12/leadership-profile.png" height="80px" width="80px">
    </a>
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
    </button>
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3>Admin</h3>
      </li>
      <li>
        <a href="displayblog.php">
            <span>View Blogs</span></a>
      </li>
        <li>
            <a href="displayarticle.php">
                <span>View Articles</span>
            </a>
        </li>
        <li>
            <a href="displaycomments.php">
             <span>Comments</span>   
            </a>
        </li>
        <li>
            <a href="displayuser.php">
                <span>Visitors</span>
            </a>
        </li>
        <li>
            <a href="retri.php">
                <span>Blog Ideas</span>
            </a>
        </li>
        <li>
            <a href="logout.php">
                <span>Log Out</span>
            </a>
        </li>
      <li>
        <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
           <a ><span>Collapse</span></a>
            <img class="button-arrow" src= "https://www.freeiconspng.com/uploads/white-arrow-image-png-14.png" height="40px" width="40px">
        </button>
      </li>
    </ul>
  </nav>
</header>
    <body>
<section class="page-content">
    <div id="brand">
 <h1><a href="#">Welcome Sam</a></h1>
                </div>
   
  <section class="grid">
    <article></article>
     <!-- <br><br>
    <article></article>-->
      
      
  </section>
</section>
        
      
<script>const body = document.body;
const collapseBtn = document.querySelector(".admin-menu button");
const collapsedClass = "collapsed";
 
collapseBtn.addEventListener("click", function() {
  this.getAttribute("aria-expanded") == "true"
    ? this.setAttribute("aria-expanded", "false")
    : this.setAttribute("aria-expanded", "true");
  this.getAttribute("aria-label") == "collapse menu"
    ? this.setAttribute("aria-label", "expand menu")
    : this.setAttribute("aria-label", "collapse menu");
  body.classList.toggle(collapsedClass);
});</script>


    </body>
</html>