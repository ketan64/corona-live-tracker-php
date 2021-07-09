<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php    include "links/links.php";      ?>
    <?php    include "css/style1.php";      ?>
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preid">precautions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contid">contacts</a>
      </li>
     
      
    </ul>
    
  </div>
</nav>

<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="images/eksath.png" width="300" height="300">
            </div>
        </div>

        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
            <h1>Let's Stay Safe & Fight Together Against Cor   <span class="corona_rot" ><img src="images/corona1.png" width="60"></span>     na Virus</h1>
        </div>

        </div>
    </div>
</div>
<!--**********************corona updates**********************-->
<section class="corona_update container-fluid">
    <div class="mb-3">
        <h3 class="text-uppercase text-center">COVID-19 LIVE UPDATES OF THE WORLD</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
                <th>Country</th>
                <th>Total Confirmed</th>
                <th>Total Recovered</th>
                <th>Total Deaths</th>
                <th>New Confirmed</th>
                <th>New Recovered</th>
                <th>New Deaths</th>
            </tr>
        </table>
    </div>

</section>
<!--/********************about section*********************/-->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-5">
        <h1>About COVID-19</h1>
    </div>
    <div class="row pt-5">
         <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
            <img src="images/abcor4.jpg" class="img-fluid">
         </div>
         <div class="col-lg-6 col-md-6 col-12">
            <h2>What is COVID-19 (CoronaVirus)</h2>
            <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
            <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).
At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</p>
         </div>
    </div>

</div>

<!--////////////////////////////////symptoms/////////////////-->
<div class="container-fluid pt-5 pb-5" id="sympid">
    <div class="section_header text-center mb-5 mt-5">
        <h1>CoronaVirus Symptoms</h1>
    </div> 
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
                <img src="images/1.png" class="img-fluid" width="120" height="120">
                <figcaption>cough</figcaption>
            </figure>    
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
                <img src="images/2.png" class="img-fluid" width="120" height="120">
                <figcaption>fever</figcaption>
            </figure>    
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
                <img src="images/3.png" class="img-fluid" width="120" height="120">
                <figcaption>dizziness</figcaption>
            </figure>    
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
                <img src="images/4.png" class="img-fluid" width="120" height="120">
                <figcaption>breathing problem</figcaption>
            </figure>    
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
                <img src="images/5.png" class="img-fluid" width="120" height="120">
                <figcaption>fever</figcaption>
            </figure>    
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
                <img src="images/6.png" class="img-fluid" width="120" height="120">
                <figcaption>sour throat</figcaption>
            </figure>    
            </div>
        </div>
    </div>
</div>

<!--/********************prevention*********************/-->
<div class="container-fluid sub_section pt-5 pb-5" id="preid">
    <div class="section_header text-center mb-5 mt-5">
        <h1>6 Steps Prevention Against CoronaVirus</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                         <img src="images/hands.png" class="img-fluid" width="90" height="90">
                     </figure>    
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Wash your hands regularly for 20 seconds with soap and water or alcohol based handsanitizer</figcaption>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                         <img src="images/p2.png" class="img-fluid" width="90" height="90">
                     </figure>    
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Do not touch your eyes of nose without washing your hands.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                         <img src="images/p3.png" class="img-fluid" width="90" height="90">
                     </figure>    
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Stay Home and Self-Isolate from others in the household if you feel unwell.</figcaption>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                         <img src="images/p4.png" class="img-fluid" width="90" height="90">
                     </figure>    
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Avoid close contact(1 meter or 3 feet) with people who are unwell.</figcaption>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                         <img src="images/p5.png" class="img-fluid" width="90" height="90">
                     </figure>    
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Cover your Nose and Mouth with a disposable tissue or flexed elbow when you cough or sneeze.</figcaption>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                         <img src="images/fever.png" class="img-fluid" width="90" height="90">
                     </figure>    
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>if you have cough, fever and difficulty breathing, seek medical care early.</figcaption>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>  

<!--/********************contact us*********************/-->
<div class="container-fluid pt-5 pb-5" id="contid">
    <div class="section_header text-center mb-5 mt-5">
        <h1>Contact us ASAP</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
             
             <form action="" method="POST">
                <div class="form-group">
                    <label >Usename</label>
                    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
                 </div>
                <div class="form-group">
                    <label >Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label >Mobile</label>
                    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
                </div>

                <div class="form-groups">
                    <label>Select Symptoms</label> <br>
                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                        <label class="custom-control-label" for="customcheckbox1">Cold</label>
                    </div>

                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
                        <label class="custom-control-label" for="customcheckbox2">Fever</label>
                    </div>

                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
                        <label class="custom-control-label" for="customcheckbox3">Difficulty in Breathing</label>
                    </div>

                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="weak">
                        <label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                 <label for="exampleFormControlTextarea1">Example textarea</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
                  </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>    


<!--//////////top cursor////////////-->
<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn">  </i>
</div>


<!--//////////////////footer/////////////*/-->

<footer class="mt-5"> 
    <div class="footer_style text-white text-center container-fluid">
        <p>
            Copyright by Ketan Sutar
        </p>

    </div>
</footer>

<script type="text/javascript">
   
   $('.count').counterUp({
       delay: 10,
       time: 3000
   })



    mybutton = document.getElementById("myBtn");
    //when the user scrolls down 20px from the top of the document, show the button
     window.onscroll = function() { scrollFunction() };
    function scrollFunction()
    {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            mybutton.style.display = "block";
        }else {
            mybutton.style.display = "none";
        }
    }
    //when the cursor clicks on the button, scroll to top of the document
    function topFunction()
    {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }


    function fetch()
    {
        $.get("https://api.covid19api.com/summary",
        
           function(data)
           {
             // console.log(data['Countries'].length);
             var tbval= document.getElementById('tbval');

             for(var i=1;i<(data['Countries'].length);i++)
             {
                var x= tbval.insertRow();
                x.insertCell(0);
                tbval.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];
                tbval.rows[i].cells[0].style.background='#7a4a91';
                tbval.rows[i].cells[0].style.color='#fff';

                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background='#4bb7d8';

                x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background='#4bb7d8';

                x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background='#f36e23';

                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background='#4bb7d8';

                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background='#9cc850';

                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML= data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background='#f36e23';
             }
           }
        )
    }
</script>

</body> 
</html>

<?php

include 'dbcon.php'; 

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $symp= $_POST['coronasym'];
    $msg= $_POST['msg'];

    $chk ="";

    foreach($symp as $chk1)
    {
        $chk .= $chk1.",";
    }

    $insertquery="insert into coronacase(username, email, mobile, symp, message) values('$username','$email','$mobile','$chk','$msg')";

    $query= mysqli_query($con, $insertquery);



}



?>