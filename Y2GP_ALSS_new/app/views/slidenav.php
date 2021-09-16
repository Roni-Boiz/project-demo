<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sidebar Menu with sub-menu</title>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <link rel="stylesheet" href="../../public/css/body.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <style>
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.btn{
  position: fixed;
  top: 5px;
  left: 10px;
  text-align: center;
  background:none;
  cursor: pointer;
  transition: left 0.4s ease;
}
.btn span{
  color: white;
  font-size: 20px;
  line-height: 45px;
}
.sidebar{

  position: fixed;
  width: 230px;
  height: 100%;
  left: -250px;
  background: #110b2e;
  transition: left 0.4s ease;
}
.sidebar.show{
  left: 0px;
}
.sidebar .text{
  color: white;
  font-size: 25px;
  font-weight: 400;
  line-height: 65px;
  text-align: center;
  letter-spacing: 1px;
}
nav ul{
  background: #110b2e;
  width: 100%;
  list-style: none;
}
nav ul li{
  line-height: 50px;
  border-top: 1px solid rgba(255,255,255,0.1);
}
nav ul li a{
  position: relative;
  color: white;
  text-decoration: none;
  font-size: 16px;
  padding-left: 40px;
  font-weight: 500;
  display: block;
  width: 100%;
  border-left: 3px solid transparent;
}
nav ul li.active a{
  background: #1e1e1e;
  border-left-color: white;
}
nav ul li a:hover{
  background: rgb(138, 138, 138);
}
nav ul ul{
  display: none;
  position: absolute;
  left: 230px;
  top:0;
}
nav ul ul li{
  line-height: 42px;
  border-top: none;
}
nav ul ul li a{
  font-size: 15px;
  color: #e6e6e6;
  padding-left: 20px;
  border-left: 1px solid transparent;
  border-left-color: white;
}
nav ul li.active ul li a{
  color: #e6e6e6;
  background: #1b1b1b;
  border-left-color: transparent;
}
nav ul ul li a:hover{
  background: rgb(138, 138, 138);
}
nav ul li.dropdown{
    position: relative;
    padding: 0;
}
nav ul .dropdown:hover ul{
    display: initial;
}
nav i{
  padding: 5px;
} 
.header{
    display: grid;
    grid-template-columns: 200px 1fr;
}
.header i{
  padding: 5px;
} 
.header {
  padding: 15px;
  background: #110b2e;
  color: white;
}
.header h2{
  padding-left: 20px;
}
.head ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
.head ul li {
  float: right;
}
.head ul li a {
  display: block;
  color: white;
  text-align: center;
  padding-left: 30px;
  text-decoration: none;
}
.head ul li a:hover {
  background-color: #111;
}
.head ul .dropdown:hover ul{
    display: initial;
    top:40px;
    right: 0;
} 
.head ul ul{
    display: none; 
    position: absolute;
    width: 130px;
    padding: 10px 20px 0 0;
    background: #110b2e;
}
.grid3{
    display: grid;
    grid-template-columns: 230px 1fr;
}

@media(max-width:470px) {
  .head ul li a {
    padding-left: 10px;

  }
}
	</style>
   </head>

   <body >
   <div id="myHeader">
   <div class="header" >
   <div class="btn">
         <span class="fas fa-bars"></span>
    </div>
    <h2>ALSS</h2>
    <div class="head">
    <ul>
            <li class="dropdown"><a href="#"><i class="fa fa-user-circle"></i></a>
                    <ul>
                        <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                        <li><a href="#"><i class="fas fa-sign-out-alt"></i></i>Logout</a></li>
                    </ul>
                <li><a href="#">Apartment ID</a></li>
                 <li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
                </li>
    </ul>
    </div>

   </div>
      <nav class="sidebar" id="side">
         <ul>
            <li><a href="#"><i class="fa fa-home"></i>HOME</a></li>
            <li class="dropdown"><a href="#"><i class="fa fa-calendar-plus" aria-hidden="true"></i>RESERVATIONS </a>
               <ul>
                    <li><a href="#">YOUR RESERVATIONS</a></li>
                    <li><a href="#">PARKING SLOT</a></li>
                    <li><a href="#">FITNESS CENTRE</a></li>
                    <li><a href="#">HALL</a></li>
                    <li><a href="#">TREATMENT ROOM</a></li>
               </ul>
            </li>
            <li class="dropdown"><a href="#"><i class="fa fa-handshake" aria-hidden="true"></i>REQUESTS</a>
                <ul>
                    <li><a href="#">YOUR REQUESTS</a></li>
                    <li><a href="#">MAINTENANCE</a> </li>
                    <li><a href="#">LAUNDRY</a></li>
                    <li><a href="#">VISITOR APPROVAl</a></li>
                </ul>
                </li>
            <li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i>PAYMENTS</a></li>
            <li><a href="#"><i class="fa fa-sticky-note" aria-hidden="true"></i>BILLS</a></li>
         </ul>
      </nav>
      </div>
      <div class="grid3">
      
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
      window.onscroll = function() {myFunction()};
      var header = document.getElementById("myHeader");
      var sticky = header.offsetTop;

      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      }
      </script>
   </body>
</html>
