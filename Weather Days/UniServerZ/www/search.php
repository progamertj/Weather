<html> <link href="Style.css" rel="stylesheet"/>
    
</html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title></title>
    <meta charset="UTF-8">
    <link href="Style.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    

</head>
    <nav><center>
    <hr style="height:1px;border-top:1px solid grey" />  
    
 <hr style="height:1px;border-top:1px solid grey" />  
</center>
</nav>
    
   <body>           
     <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<body>
<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
       <div class="simple-text logo-normal">
    Football Shirts
        </div>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="javascript:void(0)">
              <i class="material-icons">dashboard</i>
              <p>Main Menu</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
<body>
<style>
table, th, td {border: 2px solid black;}
</style>
<script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="./assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
      
 
  </script>
<?php
//get the input box values from connect.php
$minimum = $_POST["minval"];
$maximum = $_POST["maxval"];
$search = $_POST["Ksearch"];
$date = $_POST["Sdate"];

echo($minimum);
echo($maximum);
echo($search);
echo($date);

if($minimum=="") echo("<p>no minimum input");
if($maximum=="") echo("<p>no maximum input");
if($search=="") echo("<p>No Words");
if($date=="") echo("<p>Invalid Date");
    

if($minimum=="" && $maximum=="") $query="SELECT * FROM shirts";
if($minimum!="" && $maximum=="") $query="SELECT * FROM shirts WHERE Price>".$minimum;
if($minimum=="" && $maximum!="") $query="SELECT * FROM shirts WHERE Price<".$maximum;
if($minimum!="" && $maximum!="") $query="SELECT * FROM shirts WHERE Price>".$minimum." AND price<".$maximum;
if($search!="") $query="SELECT * FROM shirts WHERE Description LIKE '%".$search."%'";
if($search!="") $query="SELECT * FROM shirts WHERE Description LIKE '%".$search."%'". "AND price>".$minimum;
if($search!="") $query="SELECT * FROM shirts WHERE Description LIKE '%".$search."%'". "AND price<".$maximum;
if($date!="") $query="SELECT * FROM shirts WHERE date > '".$date."' ";
if($date!="") $query="SELECT * FROM shirts WHERE date < '".$date."' "."AND Price<".$maximum;
//lets print the query to check its correct based on what is input

echo("<p>query=".$query);

$dbhost = "localhost"; //server name localhost or 127.0.0.1
$dbuser = "admin";      //User name default root 
$dbpass = "football";  //Password reset at start of uniserver yours is "root"
$dbname = "footballshirts";      //Database name
$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 
if(!$db) {die("Error connecting to Database");}

$result = mysqli_query($db, $query);
?>

<table style="width:75%">
<tr>
    <th>ID</th>
    <th>Team</th>
    <th>League</th>
    <th>Colour</th>
    <th>Price</th>
    <th>Description</th>
    <th>Picture</th>
    <th>date</th>
<tr>
<?php
if (mysqli_num_rows($result) > 0) 
  {
  //output data of each row
  while($row = mysqli_fetch_assoc($result)) 
    {
    ?>
  
    <tr>
    <th><?php echo $row["ID"]; ?>         </th>
    <th><?php echo $row["Team"]; ?></th>
    <th><?php echo $row["League"]; ?>      </th>
    <th>    <?php echo $row["Colour"]; ?></th>
        <th>    <?php echo $row["Price"]; ?></th>
           <th>    <?php echo $row["Description"]; ?></th> 
                <th><img src=<?php echo $row["Picture"]; ?> height="250" width="250">
                    </th> 
         <th>
           <?php echo $row["date"]; ?></th> 
        
    </tr>
  </center>
   
    <?php
    }
} else {echo "<br>0 results</br>";}
?>
     <center>
</table>
<?php
mysqli_close($db);




?>
    
<form action="connect.php" method="post">
<pre>
<input 
  type="submit" 
  value="Back"
  style="font-size : 40px; " 
/>
</pre>
</body>
</html>
