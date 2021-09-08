
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/slidenav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
    <script>  
        function fun() { 
            if(document.getElementById("show").style.display == "none"){
                document.getElementById("show").style.display = "block"; 
            }else{
                document.getElementById("show").style.display = "none";
            }      
        }  
    </script>  
</head>
<body>
    <header>
        <nav>
            <div class="logo"> 
                <button onclick = "fun()" id = "btn">  
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>  
                </button> 
                <img src="../../public/img/alss1.png"/>
            </div> 
            <ul>
               <li class="dropdown"><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a><span>&rsaquo;</span>
                    <ul>
                        <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                    </ul>
                <li><a href="#">Apartment ID</a></li>
                 <li><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a></li>
                </li>
            </ul>
        </nav>
      </header>
    <div id = "show"> 
    <div class="slide">
        <nav>
            <ul>
                <li ><a href="#"><i class="fa fa-home"></i>HOME</a></li>
                <li class="dropdown"><a href="#"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>RESERVATIONS </a><span>&rsaquo;</span>
                <ul>
                    <li><a href="#">YOUR RESERVATIONS</a></li>
                    <li><a href="#">PARKING SLOT</a></li>
                    <li><a href="#">FITNESS CENTRE</a></li>
                    <li><a href="#">HALL</a></li>
                    <li><a href="#">TREATMENT ROOM</a></li>
                </ul>
                </li>
                <li class="dropdown"><a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i>REQUESTS</a><span>&rsaquo;</span>
                <ul>
                    <li><a href="#">YOUR REQUESTS</a></li>
                    <li><a href="#">TECHNICAL AND MAINTENANCE</a> </li>
                    <li><a href="#">LAUNDRY</a></li>
                    <li><a href="#">VISITOR APPROVAl</a></li>
                </ul>
                </li>
                <li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i>PAYMENTS</a></li>
                <li><a href="#"><i class="fa fa-sticky-note-o" aria-hidden="true"></i>BILLS</a></li>
            </ul>
        </nav>
    </div>
</div>  
   <div class="content">
        
</body>
</html>