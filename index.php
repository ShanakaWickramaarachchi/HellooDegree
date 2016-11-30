<!DOCTYPE html>
<html>
<head>
  <title>HellooDegree</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets1/css/bootstrap.min.css">
 
  <link rel="stylesheet" type="text/css" href="assets1/css/slider-ltr.css">
  
  <link rel="stylesheet" type="text/css" href="assets1/css/style3.css">

  <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->
  <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,600&amp;subset=sinhala" rel="stylesheet">
    <style type="text/css">


        *{margin:0;padding:0;}

        /* Slider */
        #slider{
            width:100%;
            height:500px;
            position:relative;
            overflow:hidden;
        }
        .slides{
            width:400%;
            right:300%;
            height:100%;
            position:relative;
            -webkit-animation:slide 30s infinite;
            -moz-animation:slide 30s infinite;
            animation:slide 30s infinite;
        }
        .slider{
            width:25%;
            height:100%;
            float:left;
            position:relative;
            z-index:1;
            overflow:hidden;
        }
        .slide img{
            width:100%;
            height:100%;
        }
        .slide img{
            width:100%;
            height:100%;
        }
        .image{
            width:100%;
            height:100%;
        }
        .image img{
            width:100%;
            height:100%;
        }

        /* size of the tint */
         .legend{
            border:1500px solid transparent;
            border-left:800px solid rgba(52, 73, 94, .7);

            border-bottom:0;
            position:absolute;
            bottom:0;
        }

        /* Contents */
        .content{
            width:100%;
            height:100%;
            position:absolute;
            overflow:hidden;
        }
        .content-txt{
            width:500px;
            height:150px;
            float:left;
            position:relative;
            top:20px;
            -webkit-animation:content-s 7.5s infinite;
            -moz-animation:content-s 7.5s infinite;
            animation:content-s 7.5s infinite;
        }
        .content-txt h1{
            font-family:Intro;
            font-size:54px;
            color:#fff;
            text-align:left;
            margin-left:65px;
            padding-bottom:5px;
        }
        .content-txt h2{
            font-family:Arial;
            font-size:50px;
            color: coral;
            text-align:left;

        }
        .font {
            background-color: #135F6A;
            margin-left: 30px;
            width:390px;
        }

        .font2 {
            background-color: #135F6A;
            margin-left: 90px;
            width:300px;
        }

        /* Switch */
        .switch{
            width:120px;
            height:10px;
            position:absolute;
            bottom:50px;
            z-index:99;
            left:30px;
        }
        .switch > ul{
            list-style:none;
        }
        .switch > ul > li{
            width:10px;
            height:10px;
            border-radius:50%;
            background:#333;
            float:left;
            margin-right:5px;
            cursor:pointer;
        }
        .switch ul{
            overflow:hidden;
        }
        .on{
            width:100%;
            height:100%;
            border-radius:50%;
            background:#fff;
            position:relative;
            -webkit-animation:on 30s infinite;
            -moz-animation:on 30s infinite;
            animation:on 30s infinite;
        }

        /* Animation */
        @-webkit-keyframes slide{
            0%,100%{
                margin-left:0%;
            }
            21%{
                margin-left:0%;
            }
            25%{
                margin-left:100%;
            }
            46%{
                margin-left:100%;
            }
            50%{
                margin-left:200%;
            }
            71%{
                margin-left:200%;
            }
            75%{
                margin-left:300%;
            }
            96%{
                margin-left:300%;
            }
        }
        @-moz-keyframes slide{
            0%,100%{
                margin-left:100%;
            }
            21%{
                margin-left:510%;
            }
            25%{
                margin-left:100%;
            }
            45%{
                margin-left:100%;
            }
            50%{
                margin-left:200%;
            }
            71%{
                margin-left:200%;
            }
            75%{
                margin-left:300%;
            }
            96%{
                margin-left:300%;
            }
        }
        @keyframes slide{
            0%,100%{
                margin-left:0%;
            }
            21%{
                margin-left:0%;
            }
            25%{
                margin-left:100%;
            }
            46%{
                margin-left:100%;
            }
            50%{
                margin-left:200%;
            }
            71%{
                margin-left:200%;
            }
            75%{
                margin-left:300%;
            }
            96%{
                margin-left:300%;
            }
        }

        @-webkit-keyframes content-s{
            0%{left:-420px;}
            10%{left:110px;}
            30%{left:110px;}
            40%{left:110px;}
            50%{left:10px;}
            60%{left:0px;}
            70%{left:0;}
            80%{left:-420px;}
            90%{left:-420px;}
            100%{left:-420px;}
        }
        @-moz-keyframes content-s{
            0%{left:-820px;}
            10%{left:110px;}
            30%{left:110px;}
            40%{left:110px;}
            50%{left:0px;}
            60%{left:0px;}
            70%{left:0;}
            80%{left:-420px;}
            90%{left:-420px;}
            100%{left:-420px;}
        }
        @keyframes content-s{
            0%{left:-820px;}
            10%{left:120px;}
            15%{left:0px;}
            30%{left:0px;}
            40%{left:0px;}
            50%{left:0px;}
            60%{left:0px;}
            70%{left:0;}
            80%{left:-420px;}
            90%{left:-420px;}
            100%{left:-420px;}
        }

        @-webkit-keyframes on{
            0%,100%{
                margin-left:0%;
            }
            21%{
                margin-left:0%;
            }
            25%{
                margin-left:15px;
            }
            46%{
                margin-left:15px;
            }
            50%{
                margin-left:30px;
            }
            71%{
                margin-left:30px;
            }
            75%{
                margin-left:45px;
            }
            96%{
                margin-left:45px;
            }
        }

        @-moz-keyframes on{
            0%,100%{
                margin-left:0%;
            }
            21%{
                margin-left:0%;
            }
            25%{
                margin-left:15px;
            }
            46%{
                margin-left:15px;
            }
            50%{
                margin-left:30px;
            }
            71%{
                margin-left:30px;
            }
            75%{
                margin-left:45px;
            }
            96%{
                margin-left:45px;
            }
        }

        @keyframes on{
            0%,100%{
                margin-left:0%;
            }
            21%{
                margin-left:0%;
            }
            25%{
                margin-left:15px;
            }
            46%{
                margin-left:15px;
            }
            50%{
                margin-left:30px;
            }
            71%{
                margin-left:30px;
            }
            75%{
                margin-left:45px;
            }
            96%{
                margin-left:45px;
            }
        }




    a.effect5 {
    position: relative;
    display: inline-block;
    color: #2C2C38;
    text-decoration: none;
    margin: 30px;
    width: 250px;
    height: 100px;
    border: 3px solid;
    font-family: Roboto, sans-serif;
    font-size: 2em;
    }
    a.effect5:after{
    box-sizing: border-box;
    position: absolute;
    text-align: center;
    width: 100%;
    line-height: 100px;
    content: 'effect five';
    color: #25354F;
    background: white;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    transform-origin: 100% 100%;

    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    }
    a.effect5:before{
    position: absolute;
    text-align: center;
    width: 100%;
    line-height: 100px;
    content: 'reveal text';
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transform-origin: 0 0;
    -ms-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transform: rotateX(-90deg);
    transform: rotateX(-90deg);


    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    }
    a.effect5:hover:after {
    -webkit-transform: rotateX(90deg);
    transform: rotateX(90deg);
    -webkit-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
    }
    a.effect5:hover:before {
    -webkit-transform: rotateX(0deg);
    transform: rotateX(0deg);

    }

    html {
        background: #25354F;
        box-sizing: border-box;
    }
    </style>
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>


  <div id="pagewrap">
    <nav>
      <ul>
        <nav class="navbar1 " >
      <div class="navbar-header"style="padding-top: 20px;  padding-left: 20px;">

          <a class="navbar1-brand1 "> <img alt="logo"  src="images/logo1.png">
          </a>
        </div>
          </nav>

        <!--        <ul class="nav navbar-nav navbar-rightlanguage">-->
<!--          <li><a href="#">-->
<!--              <img alt="logo" src="images/logo1.png"></a></li></ul>-->
        <li><a href="#">පරිගනක භාෂා</a></li>
        <li><a href="#">තාක්ශණය</a></li>
        <li><a href="#">අපි ගැන</a></li>
         <ul class="nav navbar-nav navbar-rightlanguage" style="background-color:#222;" >
          
                     <a href="#" class="btn green small">සිංහල</a>
                  <a href="#" class="btn green small">English</a>
                </ul>
      </ul>
    </nav>
</div>

<section id="mainContent" style="color:#fff">
					<div class="content_top">
						<div class="row">
						
							<div id="slider">
								  <div class="slides">
									<div class="slider">
									  <div class="legend"></div>
									  <div class="content">
										<div class="content-txt">
										  <h1>Lorem ipsum dolor</h1>
										  <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
										</div>
									  </div>
									  <div class="image">
										<img src="img/1.jpg">
									  </div>
									</div>
									<div class="slider">
									  <div class="legend"></div>
									  <div class="content">
										<div class="content-txt">
										  <h1>ලෝකයේ නවතම තාක්ෂණික තොරතුරු අප වෙතින්...</h1>

										</div>
									  </div>
									  <div class="image">
										<img src="img/2.png">
									  </div>
									</div>
									<div class="slider">
									  <div class="legend"></div>
									  <div class="content">
										<div class="content-txt" style="top:50px;">
                                            <div class="webd">
										  <h1>දැනට ලෝකයේ </h1>
                                                <div class = "font2">
                                                    <b>
                                                <h2>  බිලියන 2 ක </h2></b></div>
                                                <h1>  Web-Sites ඇත. <br>ඒ සඳහා වැදගත් වන HTML5 හදාරන්න</h1>
										  </div>
										  </div>
									  </div>
									  <div class="image">
										<img src="img/3.jpg">
									  </div>
									</div>
									<div class="slider">
									  <div class="legend"></div>
                                        <a href="#">
									  <div class="content">
										<div class="content-txt">
										  <h1>ලොව පුරා සිටින </h1>
                                           <div class = "font">
                                            <b><h2> මිලියන 10 ක් වන  </h2></b> </div>
                                            <h1> Java Developers <br>ලා  අතරට ඔබත් එක්වන්න</h1>

										</div>
									  </div>
									  <div class="image">
										<img src="img/4.jpg">
									  </div>
                                        </a>
									</div>
								  </div>
								  <div class="switch">
									<ul>
									  <li>
										<div class="on"></div>
									  </li>
									  <li></li>
									  <li></li>
									  <li></li>
									</ul>
								  </div>
							</div>
							
						</div>
	</section>
	
	
	<div class="xxx">
<center><h1><a href="#section1">සියල්ල පහලින් බලාගන්න </a></h1></center></div>
<div id="section1">
	<center><h1><a href="#section1">HellooDegree.com ලබා දෙන පරිගණක භාෂා </a></h1></center></div>
	
	
	
	
			<div class="row">
		
				<div align="center" class="fond">
				  <div style="width:100%;">
				  	<br>
					  <div class="style_prevu_kit"><img src="images/jslogo.png">
					
					  </div>
					  <div class="style_prevu_kit"><img src="images/htmllogo.png"></div>
					  <a href = "pages/pageJava.php">
					  <div class="style_prevu_kit"><img src="images/javalogo.png"></div></a>
					  <div class="style_prevu_kit"><img src="images/techlogo.png"></div>
				  </div>
				</div>
			</div>
		
				

  <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="headingnew">

      අලුත් පාඩම්
    </div>
  </div>


 
  <?php
  $servername = 'localhost';
$username = 'helloode_1';
$password ='e[R(~)qS~MEv';
$databaseName ='helloode_courses';
  // Create connection
  $db = mysqli_connect($servername, $username, $password,$databaseName);



  // Check connection
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }?>


<!--//one-->

<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="col-lg-4 col-md-4 col-sm-4">
       <div class="row1">
            <div class="example-1 card">
             <?php
  $sql = "SELECT * FROM Java Where id = 3";
  $result = mysqli_query($db, $sql);

  $odd = true;
  while ($row = mysqli_fetch_array($result)) {
  echo ($odd == true) ? '<tr class="odd_row">' : '<tr class= "even_row"> ';
  $odd = !$odd;
  extract($row);?> 
        
                <div class="wrapper">
                    <?php
               echo '<a href="' .'pages/single.php?id=' . $id .
        '" > <img src="images/' . $id .'.jpg "alt="' . $name .
        '"/ > </a >';
            ?>
                    <div class="date">
                        <span class="day">New</span>
                                               
                    </div>
                    <div class="data">
                        <div class="content">
                      
 <span class="author11" style="color:#222; font-size: 25px;">
 Course Content 
 </br>
 </span>

                            <?php
                            
   echo '<span class="author11" style="color:#222; font-size: 15px;">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $Description. ' </a ></span> 
     

                            </td >';}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!--//two-->
<div class="col-lg-4 col-md-4 col-sm-4">
       <div class="row1">
            <div class="example-1 card">
             <?php
    $sql = "SELECT * FROM Java Where id = 3";
  $result = mysqli_query($db, $sql);

  $odd = true;
  while ($row = mysqli_fetch_array($result)) {
  echo ($odd == true) ? '<tr class="odd_row">' : '<tr class= "even_row"> ';
  $odd = !$odd;
  extract($row);?> 
        
                <div class="wrapper">
                    <?php
               echo '<a href="' .'pages/single.php?id=' . $id .
        '" > <img src="images/' . $id .'.jpg "alt="' . $name .
        '"/ > </a >';
            ?>
                 
                    <div class="date">
                        <span class="day">New</span>
                                               
                    </div>
                    <div class="data">
                        <div class="content">
 

                            <?php
                            
                    

                            echo '<span class="author11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $author . ' </a ></span> 
      <span class="title11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $name. ' </a ></span> 
        
              <span class="text11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $author . ' </a ></span>

                            </td >';}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--//three-->
    <div class="col-lg-4 col-md-4 col-sm-4">
       <div class="row1">
            <div class="example-1 card">
             <?php
   $sql = "SELECT * FROM Java Where id = 3";
  $result = mysqli_query($db, $sql);

  $odd = true;
  while ($row = mysqli_fetch_array($result)) {
  echo ($odd == true) ? '<tr class="odd_row">' : '<tr class= "even_row"> ';
  $odd = !$odd;
  extract($row);?> 
        
                <div class="wrapper">
                    <?php
               echo '<a href="' .'pages/single.php?id=' . $id .
        '" > <img src="images/' . $id .'.jpg "alt="' . $name .
        '"/ > </a >';
            ?>
                   
                    <div class="date">
                        <span class="day">New</span>
                                               
                    </div>
                    <div class="data">
                        <div class="content">
 

                            <?php
                            
                    

                            echo '<span class="author11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $author . ' </a ></span> 
      <span class="title11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $name. ' </a ></span> 
        
              <span class="text11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $author . ' </a ></span>

                            </td >';}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--four-->
    <div class="col-lg-4 col-md-4 col-sm-4">
       <div class="row1">
            <div class="example-1 card">
             <?php
    $sql = "SELECT * FROM Java Where id = 3";
  $result = mysqli_query($db, $sql);

  $odd = true;
  while ($row = mysqli_fetch_array($result)) {
  echo ($odd == true) ? '<tr class="odd_row">' : '<tr class= "even_row"> ';
  $odd = !$odd;
  extract($row);?> 
        
                <div class="wrapper">
                    <?php
               echo '<a href="' .'pages/single.php?id=' . $id .
        '" > <img src="images/' . $id .'.jpg "alt="' . $name .
        '"/ > </a >';
            ?>
                   
                    <div class="date">
                        <span class="day">New</span>
                                               
                    </div>
                    <div class="data">
                        <div class="content">
 

                            <?php
                            
                    

                            echo '<span class="author11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $author . ' </a ></span> 
      <span class="title11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $name. ' </a ></span> 
        
              <span class="text11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $author . ' </a ></span>

                            </td >';}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!--five-->
    <div class="col-lg-4 col-md-4 col-sm-4">
       <div class="row1">
            <div class="example-1 card">
             <?php
    $sql = "SELECT * FROM Java Where id = 3";
  $result = mysqli_query($db, $sql);

  $odd = true;
  while ($row = mysqli_fetch_array($result)) {
  echo ($odd == true) ? '<tr class="odd_row">' : '<tr class= "even_row"> ';
  $odd = !$odd;
  extract($row);?> 
        
                <div class="wrapper">
                    <?php
               echo '<a href="' .'pages/single.php?id=' . $id .
        '" > <img src="images/' . $id .'.jpg "alt="' . $name .
        '"/ > </a >';
            ?>
                  
                    <div class="date">
                        <span class="day">New</span>
                                               
                    </div>
                    <div class="data">
                        <div class="content">
 

                            <?php
                            
                    

                            echo '<span class="author11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $author . ' </a ></span> 
      <span class="title11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $name. ' </a ></span> 
        
              <span class="text11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $author . ' </a ></span>

                            </td >';}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--six-->
    <div class="col-lg-4 col-md-4 col-sm-4">
       <div class="row1">
            <div class="example-1 card">
             <?php
   $sql = "SELECT * FROM Java Where id = 3";
  $result = mysqli_query($db, $sql);

  $odd = true;
  while ($row = mysqli_fetch_array($result)) {
  echo ($odd == true) ? '<tr class="odd_row">' : '<tr class= "even_row"> ';
  $odd = !$odd;
  extract($row);?> 
        
                <div class="wrapper">
                    <?php
               echo '<a href="' .'pages/single.php?id=' . $id .
        '" > <img src="images/' . $id .'.jpg "alt="' . $name .
        '"/ > </a >';
            ?>
                   
                    <div class="date">
                        <span class="day">New</span>
                                               
                    </div>
                    <div class="data">
                        <div class="content">
 

                            <?php
                            
                    

                            echo '<span class="author11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $author . ' </a ></span> 
      <span class="title11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $name. ' </a ></span> 
        
              <span class="text11">
    <a href="pages/single.php?product_code=' . $id .
        '" > ' . $author . ' </a ></span>

                            </td >';}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  </div>






<script>
    function myFunction() {
        
         document.getElementById("myImg").src = "xx.png";
         
    }
     function myFunction1() {
        
         document.getElementById("myImg").src = "iPhone6-Flat2.png";
          document.getElementById("demo").style.color = "black";
    }
    
      function myFunction2() {
        
       
          document.getElementById("demo").style.color = "black";
    }
</script>


        <div class = "row" style="  font-family: 'Abhaya Libre', serif;">>
            <div class="col-lg-12 col-md-12">

                <center><h1><br><br><b>
                            ඔබ HellooDegree.com තෝරා ගත යුත්තේ ඇයි?</<M</h1></b></center><br>
            </div>

            <div class = "row">
               <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-4 col-md-4">
                    
                        <div class="panel panel-default"><div class="ssss">
                               
                                     <button style="border: 0px #fff solid; text-decoration: none; color: #222;  background-color: #fff;" onclick="myFunction()">
                                 
  
                                        <h2><b> 1) අපි Updated නිසා...<b></h2>  </p>
                                 </p>
                                    <h3>
                                        <b>  දැනට ලෝකයේ භාවිතාවන නවතම තාක්ශනය ශ්‍රී ලාංකිකයන්ට ගැලපෙන අයුරින් භාවිතා කර සාදනු ලබන Video Lessons අන්තර්ගත වීම<b>
                                    </h3></button>
                                    <div class="col-lg-1 col-md-1"></div>
                                </div>
                        </div>
                                   
                        <div class="panel panel-default"><div class="ssss">
                               
                                    <button id="demo"  style="border: 0px #fff solid; text-decoration: none; color: #9E9E9E;  background-color: #fff;" onclick="myFunction1()">

                                        <h2><b> 2) අපි Local නිසා...</b> </h2>
      <h3>
        <b>සිංහල හා ඉංග්‍රීසි යන භාෂා දෙකම භාවිතා කරමින් අධ්‍යනය කටයුතු කරගැනීමට ඇති හැකියාව</b>
      </h3></button>
                                    <div class="col-lg-1 col-md-1"></div>
                                </div></div>
                   
      <div class="panel panel-default"><div class="ssss">
                               
                                    <button style="border: 0px #fff solid; text-decoration: none; color: #E0E0E0;  background-color: #fff;" onclick="myFunction2()">

                                        <h2><b> 3) අපි Simple නිසා...</b> </h2>
      <h3>
        <b>සියලුම ගැඹුරු තාක්ශණික තොරතුරු සරලව පැහැදිලි කිරීම</b>
      </h3></button>
                                    <div class="col-lg-1 col-md-1"></div>
                                </div></div>

                </div>
<div class="col-lg-1 col-md-1"></div>
          <div class="col-lg-4 col-md-4">

                   

<img id="myImg" src="xx.png" >
<img id="myImg2" >

                </div>
            </div>
        </div>
 




</div>











 <footer id="footer">
        <div class="footer_top">

                <div class="col-md-1">
<!--                    <a href="/" class="footer_logo">-->
<!--                    </a>-->
                </div>

                <div class="col-md-4">
            

                       </br>
                        <div class="nav_list" style="color:#546E7A; font-size: 19px;">
                                <div class="footer_nav_toggle">
                    
                      
                  <img alt="logo"  src="images/logo1.png">
            
                            <li><a href="#">පරිගනක භාෂා</a></li>
                            <li><a href="#">තාක්ශණය</a></li>
                            <li>  <a href="#">අපි ගැන</a></li>
                            <li> <a href="#">සම්බන්ධ වෙන්න</a></li>
                        </div></div></div>
                <div class="col-md-3">


               
                </div>



                <div class="col-md-3"><br><br>
                    <div class="footer_nav_toggle">

                        <div class="social-section text-center">
                            <a class="btn-sm-full fb-bg rectangle waves-effect waves-light"><i class="fa fa-facebook"> </i> <span>Facebook</span> </a>
                            <a class="btn-sm-full tw-bg rectangle waves-effect waves-light"><i class="fa fa-twitter"> </i> <span>Twitter</span></a>
                            <a class="btn-sm-full gplus-bg rectangle waves-effect waves-light"><i class="fa fa-google-plus"> </i> <span>Google +</span></a>
                            <a class="btn-sm-full comm-bg rectangle waves-effect waves-light"><i class="fa fa-comments"> </i> <span>Forum</span></a>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <br><br><br><br><br><br>


                        <br><br><br>

                    </div>
                </div>

</section>
</div></div>
</footer>
</div></div>
</div>


<!--3-->






<div class="footer_bottom">
 
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="footer_bottom_left">
          <p>Copyright &copy;2016 HellooDegree.com</a></p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="footer_bottom_right">
          <p>Powered BY TeamLoafers</p>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>
<script src="assets1/js/jquery.min.js"></script> 

<script src="assets1/js/wow.min.js"></script> 
<script src="assets1/js/custom.js"></script> 

</body>
</html>
