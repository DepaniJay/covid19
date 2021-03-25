<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Live Update</title>
    <link rel="stylesheet" href="CSS/style.css">
    <?php include 'Link/link.php'; ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="worldcorona.php">WorldCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiadaywise.php">IndiaDayWise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">IndiaCoronaLive</a>
      </li>
    </ul>
  </div>
</nav>

<!-- *********************************Corona latest Updates******************************* -->

<section class="corona_update container-fluid">
    <div class="my-5">
        <h3 class="text-uppercase text-center">Covid-19 LIVE UPDATES OF THE INDIA</h3>
    </div>

    <div class="table-responsive">
        <table class=" table table-bordered table-striped text-center" id="tbval">
            <tr>
                <th class="text-capitalize">Lastupdatedtime</th>
                <th class="text-capitalize">State</th>
                <th class="text-capitalize">Confirmed</th>
                <th class="text-capitalize">Active</th>
                <th class="text-capitalize">Recovered</th>
                <th class="text-capitalize">Deaths</th>
            </tr>

            <?php

            $data = file_get_contents('https://api.covid19india.org/data.json');

            $coronalive = json_decode($data, true);

            $statecount = count($coronalive['statewise']);
            $i = 1;

            while($i < $statecount){

                ?>
                
                <tr>
                    <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'];  ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['state'];  ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['confirmed'];  ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['active'];  ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['recovered'];  ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['deaths'];  ?></td>
                </tr>


                <?php
                $i++;
            }
            ?>


        </table>
    </div>
    
</section>

<!-- ************************* top cursor *************************** -->

<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn">
        
    </i>
</div>

<!-- ********************** footer ******************************** -->

<footer class="mt-5"> 
    <div class="footer_style text-white text-center container-fluid">
        <p>Copyright by JdProgrammer</p>
    </div>
</footer>

<script type="text/javascript">


mybutton = document.getElementById("myBtn");
//when the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction(){
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
        mybutton.style.display = "block";
    }else{
        mybutton.style.display = "none";
    }
}
// when the user clicks on the button, scroll to the top of the document
function topFunction(){
    document.body.scrollTop = 0; //For Safari
    document.documentElement.scrollTop = 0; //For Chrome,Firefox, IE and Opera
}




</script>

</body>
</html>
