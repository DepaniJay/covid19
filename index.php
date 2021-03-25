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
<nav class="navbar navbar-expand-lg navbar-light bg-light nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
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
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="Image/eksath.jpg" width="400" height="300" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1>Let's Stay Safe & Fight Together Against Cor <span class="corona_rot"><img style="border-radius:25px;" src="Image/coron.jfif" width="80" height="80" alt=""></span> na Virus</h1>
                </div>
            </div>
        </div>
    </div>

<!-- *********************************Corona latest Updates******************************* -->

<section class="corona_update container-fluid" id="worldcorona">
    <div class="mb-5">
        <h3 class="text-uppercase text-center">Covid-19 LIVE WORLD CASE UPDATES</h3>
    </div>

    <div class="row d-flex justify-content-around align-items-center count_style">

        <?php

        $data = file_get_contents('https://api.covid19api.com/world/total');

        $coronaupdate = json_decode($data, true);

        // echo "<pre>";
        // print_r($coronaupdate);

        $totalactive = $coronaupdate['TotalConfirmed'] - $coronaupdate['TotalRecovered'] - $coronaupdate['TotalDeaths'];

        ?>


        <div class="col-lg-3 col-md-3 col-12 text-center">
            <h1 class="count"><?php echo $coronaupdate['TotalConfirmed'];  ?></h1>
            <p>Total Confirmed</p>
        </div>
        <div class="col-lg-3 col-md-3 col-12 text-center">
            <h1 class="count"><?php echo $totalactive;  ?></h1>
            <p>Total Active</p>
        </div>
        <div class="col-lg-3 col-md-3 col-12 text-center">
            <h1 class="count"><?php echo $coronaupdate['TotalRecovered'];  ?></h1>
            <p>Total Recovered</p>
        </div>
        <div class="col-lg-3 col-md-3 col-12 text-center">
            <h1 class="count"><?php echo $coronaupdate['TotalDeaths'];  ?></h1>
            <p>Total Deaths</p>
        </div>
    </div>
    
</section>

<section class="corona_update container-fluid" >
    <div class="mb-5">
        <h3 class="text-uppercase text-center">Covid-19 LIVE INDIA CASE UPDATES</h3>
    </div>

    <div class="row d-flex justify-content-around align-items-center count_style">

        <?php

        $indiadata = file_get_contents('https://api.covid19api.com/summary');

        $indiacorona = json_decode($indiadata, true);

        // echo "<pre>";
        // print_r($indiacorona);

        $totalcount = count($indiacorona['Countries']);

        $j = 0;
        for($j = 0; $j < $totalcount; $j++){
            if($indiacorona['Countries'][$j]['Country'] === "India"){
                $i = $j;
                break;
            }
        }
        
        $indiaactive = $indiacorona['Countries'][$i]['TotalConfirmed'] - $indiacorona['Countries'][$i]['TotalRecovered'] - $indiacorona['Countries'][$i]['TotalDeaths'];

        ?>


        <div class="col-lg-3 col-md-3 col-12 text-center">
            <h1 class="count"><?php echo $indiacorona['Countries'][$i]['TotalConfirmed'];  ?></h1>
            <p>Total Confirmed</p>
        </div>
        <div class="col-lg-3 col-md-3 col-12 text-center">
            <h1 class="count"><?php echo $indiaactive;  ?></h1>
            <p>Total Active</p>
        </div>
        <div class="col-lg-3 col-md-3 col-12 text-center">
            <h1 class="count"><?php echo $indiacorona['Countries'][$i]['TotalRecovered'];  ?></h1>
            <p>Total Recovered</p>
        </div>
        <div class="col-lg-3 col-md-3 col-12 text-center">
            <h1 class="count"><?php echo $indiacorona['Countries'][$i]['TotalDeaths'];  ?></h1>
            <p>Total Deaths</p>
        </div>
    </div>
    
</section>

<section class="corona_update container-fluid" >
    <div class="mb-5">
        <h3 class="text-uppercase text-center">Covid-19 LIVE INDIA GUJARAT CASE UPDATES</h3>
    </div>

    <div class="row d-flex justify-content-around align-items-center count_style">

        <?php

        $gujaratdata = file_get_contents('https://api.covid19india.org/data.json');

        $gujaratcorona = json_decode($gujaratdata, true);

        // echo "<pre>";
        // print_r($gujaratcorona);

        $gujaratcount = count($gujaratcorona['statewise']);

        $j = 0;
        for($j = 0; $j < $gujaratcount; $j++){
            if($gujaratcorona['statewise'][$j]['state'] == "Gujarat"){
                $i = $j;
                break;
            }
        }


        ?>


        <div class="col-lg-3 col-md-3 col-12 text-center">
            <h1 class="count"><?php echo $gujaratcorona['statewise'][$i]['confirmed'];  ?></h1>
            <p>Total Confirmed</p>
        </div>
        <div class="col-lg-3 col-md-3 col-12 text-center">
            <h1 class="count"><?php echo $gujaratcorona['statewise'][$i]['active'];  ?></h1>
            <p>Total Active</p>
        </div>
        <div class="col-lg-3 col-md-3 col-12 text-center">
            <h1 class="count"><?php echo $gujaratcorona['statewise'][$i]['recovered'];  ?></h1>
            <p>Total Recovered</p>
        </div>
        <div class="col-lg-3 col-md-3 col-12 text-center">
            <h1 class="count"><?php echo $gujaratcorona['statewise'][$i]['deaths'];  ?></h1>
            <p>Total Deaths</p>
        </div>
    </div>
    
</section>

<!-- **************************** About Section ******************************** -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>About COVID-19</h1>
    </div>

    <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 about_res">
            <img src="Image/aboutcorona.jfif" width="500" height="500" class="img-fluid image" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2>What is COVID-19 (Corona-Virus)</h2>
            <p>Coronaviruses are a large family of respiratory viruses, known to cause illness ranging from the common cold to more severe illnesses such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS).
            </p>
            <p>The current outbreak has been caused by a strain of coronavirus that had not previously detected anywhere in the world before the outbreak was reported in Wuhan, China in December 2019.SARS-CoV-2 RNA has also been detected in other biological samples, including the urine and feces of some patients. One study found viable SARS-CoV-2 in the urine of one patient. Three studies have cultured SARS-CoV-2 from stool specimens. To date, however, there have been no published reports of transmission of SARS-CoV-2 through feces or urine.</p>
        </div>
    </div>
</div>

<!-- *********************** Coronavirus Symptoms *************************** -->

<div class="container-fluid pt-5 pb-5" id="sympid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>Coronavirus Symptoms</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">    
                    <img src="Image/logo1.PNG" class="img-fluid " width="120" height="120" alt="">
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">    
                    <img src="Image/logo2.PNG" class="img-fluid " width="120" height="120" alt="">
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">    
                    <img src="Image/logo3.PNG" class="img-fluid " width="120" height="120" alt="">
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">    
                    <img src="Image/logo4.PNG" class="img-fluid " width="120" height="120" alt="">
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">    
                    <img src="Image/logo5.PNG" class="img-fluid " width="120" height="120" alt="">
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">    
                    <img src="Image/logo6.PNG" class="img-fluid " width="120" height="120" alt="">
                </figure>
            </div>
        </div>
    </div>
</div>

<!-- *********************** Prevention Against Coronavirus *************************** -->

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>6 Steps Prevention Against Coronavirus</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">    
                            <img src="Image/prevention1.PNG" class="img-fluid " width="90" height="90" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Wash your hands regularly for 20 seconds,with soap and water or alcohol-based hand rub</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">    
                            <img src="Image/prevention2.PNG" class="img-fluid " width="90" height="90" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Cover your nose and mouth with a disposable tissue or fiexed eibow when you cough or sneeze</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">    
                            <img src="Image/prevention3.PNG" class="img-fluid " width="90" height="90" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">    
                            <img src="Image/prevention4.PNG" class="img-fluid " width="90" height="90" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Stal=y home and self-isolate from others in the household if you feel unwell</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">    
                            <img src="Image/prevention5.PNG" class="img-fluid " width="90" height="90" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Stay informed by watching news & follow the recommended practices</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">    
                            <img src="Image/prevention6.PNG" class="img-fluid " width="90" height="90" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>If you have fever, cough and diffculty breathing,seek medical care early</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- *********************** Contact Us ASAP *************************** -->

<div class="container-fluid pt-5 pb-5" id="contactid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>Contact Us ASAP</h1>
    </div>

    <div>
        <p class="text-center text-success">
        <?php
            include 'connection.php';
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $symp = $_POST['coronasym'];
                $message = $_POST['message'];

                $check = "";
                foreach($symp as $check1){
                    $check .= $check1 . ",";
                }

                $insertquery = "INSERT INTO `coronacase`(`username`, `email`, `mobile`, `symp`, `message`) VALUES ('$username','$email','$mobile','$check','$message')";

                $query = mysqli_query($con,$insertquery);

                if($query){
                    echo "Thank You for submiting your health details. \n Our Doctor's contact you within some time.";
                }else{
                    echo "Some Error occurs in submiting your response please try to submit after some time";
                }
            }


        ?>
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
            <form action="" method="POST">


  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="Mobile" autocomplete="off" required>
  </div>
  
<div class="form-group">
    <label>Select Symptoms</label><br>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
        <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
        <label class="custom-control-label" for="customcheckbox1">Cold</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
        <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
        <label class="custom-control-label" for="customcheckbox2">fever</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
        <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
        <label class="custom-control-label" for="customcheckbox3">difficulty in breath</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
        <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
        <label class="custom-control-label" for="customcheckbox4">feeling weak</label>
    </div>
</div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </div>
</div>

<!-- ************************* top cursor *************************** -->

<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn">
        
    </i>
</div>

<!-- ********************** footer ******************************** -->

<footer class="mt-5"> 
    <div class="footer_style bg-light text-dark text-center container-fluid">
        <p>Copyright by JdProgrammer</p>
    </div>
</footer>

<script type="text/javascript">

// ********************** Counter Code ***********************************

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 8000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

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

// function fetch(){
//     $.get("https://api.covid19api.com/summary", 
    
//         function (data){
//             // console.log(data['Countries'].length);
//             var tbval = document.getElementById('tbval');

//             for(var i=1; i<(data['Countries'].length); i++){
//                 var x = tbval.insertRow();
//                 x.insertCell(0);

//                 tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
//                 tbval.rows[i].cells[0].style.background = '#7a4a91';
//                 tbval.rows[i].cells[0].style.color = '#fff';

//                 x.insertCell(1);
//                 tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
//                 tbval.rows[i].cells[1].style.background = '#4bb7d8';

//                 x.insertCell(2);
//                 tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
//                 tbval.rows[i].cells[2].style.background = '#9cc850';

//                 x.insertCell(3);
//                 tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
//                 tbval.rows[i].cells[3].style.background = '#f36e23';

//                 x.insertCell(4);
//                 tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
//                 tbval.rows[i].cells[4].style.background = '#4bb7d8';
                
//                 x.insertCell(5);
//                 tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
//                 tbval.rows[i].cells[5].style.background = '#9cc850';
                
//                 x.insertCell(6);
//                 tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
//                 tbval.rows[i].cells[6].style.background = '#f36e23';
                
//             }
//         }

//     );
// }



</script>

</body>
</html>

