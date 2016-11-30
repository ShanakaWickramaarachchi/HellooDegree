<!DOCTYPE html>
<html>
<head>
    <title>HTML5 Video Lessons</title>
    <meta charset="utf-8">
    <script type = "text/javascript"
            src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
   
    <link rel="stylesheet" type="text/css" href="../assets/css/style3.css">
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.min.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
    
 <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,600&amp;subset=sinhala" rel="stylesheet">
    <style type="text/css">
    
    single_page_area{font-color: #fff;}
    
    .panel-title{
    font-family: 'Abhaya Libre', serif;
   color: #fff;
    font-size: 20px;
    
    }
    
     
    
    .verticalLine {
    border-left: thin solid #01579B;
    padding-left: 15px;
}
        #stage1{
      
            font-size: 23px;
            font-color: #546E7A;
        }

        #stage2{
         
            font-size: 10px;
            font-color: #222;
        }
        </style>

</head>
<body>

   <?php
  $servername = 'localhost';
$username = 'helloode_1';
$password ='e[R(~)qS~MEv';
$databaseName ='helloode_courses';

  // Create connection
  $db = mysqli_connect($servername, $username, $password);

$dbSelected = mysqli_select_db($db,$databaseName);

$id= isset($_GET['id']) ? $_GET['id'] : '';

$id= isset($_GET['id']) ? $_GET['id'] : '';


$query = 'SELECT
        name, author
    FROM

courses
 WHERE
        	id= "' . mysqli_real_escape_string($db,$id) . '"';



$result = mysqli_query($db,$query);



$row = mysqli_fetch_array($result);
extract($row);
?>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>


  <div id="pagewrap">
    <nav>
      <ul>
        <nav class="navbar1 " >
      <div class="navbar-header"style="padding-top: 20px;  padding-left: 20px;">

          <a class="navbar1-brand1 "> <img alt="logo"  src="../images/logo1.png">
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
    </div>
    <section id="mainContent">
        <div class="content_bottom">
            <div class="col-md-12">
                <div class="content_bottom_left">
                

                    <div class="single_page_area">

                <!-- panel -->

                  
                        <div class="container1">
               
 <ol class="breadcrumb" style="background-color:#fff; font-size :17px; margin-bottom:3px;">
    <li><b><a href="#">HellooDegree.com</a></b></li>
    <li><b><a href="#">පරිගනක භාෂා</a></b></li>
<li class="active"> <b> HTML5 පරිගණක භාෂාව</b></li> 
          
  </ol>

                            <div class="row">
                                <div class="col-md-4">
                                 
                                    <a class="panel-group" input type = "panel" id="button1"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                            <div class="panel-heading">
                                                  <h4 class="panel-title"style="color: #ffffff" >
                                                 HTML5 මූලික හැඳින්වීම
                                                </h4>
                                            </div></div>
                                        </div>
                                    </a>


                                    <a class="panel-group" input type = "panel" id="button2"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                            Web Development සඳහා HTML5 භාවිතය-part-1
                                                </h4>
                                            </div></div>
                                        </div>
                                    </a>

                                    <a class="panel-group" input type = "panel" id="button3"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                   Web Development සඳහා HTML5 භාවිතය-part-2
                                                </h4>
                                            </div>
                                        </div>  </div>
                                    </a>

                                    <a class="panel-group" input type = "panel" id="button4"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  Web Development සඳහා HTML5 භාවිතය-part-3
                                                </h4>
                                            </div></div>
                                        </div>
                                    </a>
                                    <a class="panel-group" input type = "panel" id="button5"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                   
                                                </h4>
                                            </div></div>
                                        </div>
                                    </a>
                                    <a class="panel-group" input type = "panel" id="button6"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    
                                                </h4>
                                            </div>
                                        </div></div>
                                    </a>
                                    <a class="panel-group" input type = "panel" id="button6"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                       
                                                    </h4>
                                                </div>
                                            </div></div>
                                    </a>
                                    <a class="panel-group" input type = "panel" id="button6"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        
                                                    </h4>
                                                </div>
                                            </div></div>
                                    </a>
                                    <a class="panel-group" input type = "panel" id="button6"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                       
                                                    </h4>
                                                </div>
                                            </div></div>
                                    </a>

                                    <a class="panel-group" input type = "panel" id="button6"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        
                                                    </h4>
                                                </div>
                                            </div></div>
                                    </a>
                                    <a class="panel-group" input type = "panel" id="button6"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        
                                                    </h4>
                                                </div>
                                            </div></div>
                                    </a>
                                    <a class="panel-group" input type = "panel" id="button6"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        
                                                    </h4>
                                                </div>
                                            </div></div>
                                    </a>
                                    <a class="panel-group" input type = "panel" id="button6"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        
                                                    </h4>
                                                </div>
                                            </div></div>
                                    </a>
                                    <a class="panel-group" input type = "panel" id="button6"  value = "Load Data">
                                        <div class="panel panel-default"><div class="containersd">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                       
                                                    </h4>
                                                </div>
                                            </div></div>
                                    </a>


                                    <div class="col-lg-4 col-md-4">

                                        <script type = "text/javascript" language = "javascript">


                                            $(document).ready(function() {
                                                        $("#button1").click(function(event){

//                                                            $.getJSON('x.json', function(jd) {
//
//                                                                $('#stage').html('<iframe width="800" height="400" src=' + jd.age + '>');
//                                                                $('#stage1').html('<p> ' + jd.age3+ '</p>');
//                                                                $('#stage2').html('<p> ' + jd.age5+ '</p>');


                                                                $.getJSON('x3ss.json', function(jd) {

                                                                    $('#stage').html('<iframe width="800" height="400" src=' + jd.age + '>');                                                             
                                                                   
   $('#stage1').html('<p> '+ '<b> '+'</br>' +'<h2>'+ jd.age3+ '</h2>'+'</br>'+
   '<center>'+
   '<img src=' + jd.age4 +  '>'+'</center>'+
   '</br>'+ jd.age5+'<center>'+
   '<img src=' + jd.age7 +  '>'+'</center>' 
   + '</br>' + jd.age10 +
    '<center>'+ 
   '<img src=' + jd.age11 +  '>'+'</center>'   
   +
   '</br>'+ jd.age6 +
   '<center>'+  
   '<img src=' + jd.age8 +  '>'+'</center>' 
   +'</p>'+ '</b>');
                                                                });
                                                        });
                                                    }
                                            );


                                            $(document).ready(function() {
                                            $("#button2").click(function(event){

                                                $.getJSON('x3ss.json', function(jd) {

                                                    $('#stage').html('<iframe width="800" height="400" src=' + jd.age2 + '>');
                                        $('#stage1').html('<p> '+ '<b> '+'</br>' +'<h2>'+ jd.age12+ '</h2>'+'</br>'+'<center>'+

   '</br>'+ jd.age13+'<center>'+ 
   '<img src=' + jd.age20 +  '>'+'</center>' +
   '</br>'+ jd.age14 +  '</br>'+ '<center>'+ 
   '<a href= '+ jd.age14s2 + '>' + jd.age14s + '</a>' +'</center>' +
   '</br>'+ '</br>'+ jd.age15 + '</br>'+ '</br>'+
    '<center>'+ 
   '<img src=' + jd.age18 +  '>'+'</center>'   
   +
   '</br>'+ jd.age16 +'</br>'+
   '<center>'+ 
   '<img src=' + jd.age19 +  '>'+'</center>' 
     
   +'</p>'+ '</b>');
                                                                });
                                                        });
                                                    }
                                            );


      						 $(document).ready(function() {
                                            $("#button3").click(function(event){

                                                $.getJSON('x3ss.json', function(jd) {

                                                    $('#stage').html('<iframe width="800" height="400" src=' + jd.age2 + '>');
                                        $('#stage1').html('<p> '+ '<b> '+'</br>' +'<h2>'+ jd.age21+ '</h2>'+'</br>'+'<center>'+

   '</br>'+ jd.age22+
      '</br>'+  '</br>'+ 
   '<center>'+ 
   '<img src=' + jd.age24 +  '>'+'</center>' +
   '</br>'+ '</br>'+ jd.age25 + '</br>'+ '</br>'+
    '<center>'+ 
   '<img src=' + jd.age26 +  '>'+'</center>'   
     
   +'</p>'+ '</b>');
                                                                });
                                                        });
                                                    }
                                            );



      						 $(document).ready(function() {
                                            $("#button4").click(function(event){

                                                $.getJSON('x3ss.json', function(jd) {

                                                    $('#stage').html('<iframe width="800" height="400" src=' + jd.age2 + '>');
                                        $('#stage1').html('<p> '+ '<b> '+'</br>' +'<h2>'+ jd.age27+ '</h2>'+'</br>'+'<center>'+

   '</br>'+ jd.age28+
      '</br>'+  '</br>'+ 
   '<center>'+ 
   '<img src=' + jd.age31 +  '>'+'</center>' +
   '</br>'+ '</br>'+ jd.age29 + '</br>'+ '</br>'+
    '<center>'+ 
   '<img src=' + jd.age32 +  '>'+'</center>'   
     + '</br>'+ jd.age30 + '</br>'
   +'</p>'+ '</b>');
                                                                });
                                                        });
                                                    }
                                            );




                                        </script>

                                    </div>

                                </div>
                               
                                <div class="col-md-8">
                               <div class="verticalLine">
                                    <div id="stage">
<!--                                        --><?php //echo '<img src="images/' . $id .'.jpg">' ?>
                                        <?php echo ' <iframe width="800" height="400" src="https://www.youtube.com/embed/' . $name .'" frameborder="0" allowfullscreen></iframe>' ?>
<!--                                        <iframe width="800" height="400" src="https://www.youtube.com/embed/1DDWTpi8EXk" frameborder="0" allowfullscreen></iframe>-->
                                    </div>

                                    <div id="stage1">

                                    </div>
                                    <div id="stage2">

                                    </div>
                                     </div>
                                     </div>
                               
                            </div>

                            <br><br>
                            <!-- panel -->
                        </div>
                    </div>
                </div>



    </section>
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
                    
                      
                  <img alt="logo"  src="../images/logo1.png">
            
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
</footer>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<script src="../assets/js/custom.js"></script>
</body>
</html>