<!DOCTYPE html>
<html lang="en">
<head>
    <title>Covid tracker</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body>
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19 tracker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://corona20virus-tracker.herokuapp.com/#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://corona20virus-tracker.herokuapp.com/#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://corona20virus-tracker.herokuapp.com/#previd">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://corona20virus-tracker.herokuapp.com/indiacoronalive.php">indiacoronalive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://corona20virus-tracker.herokuapp.com//#contactid">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<section class="corona_update container-fluid">
    <div class="my-5">
        <h3 class="text-center text-uppercase">COVID-19 LIVE UPDATES OF THE INDIA</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
                <th class="text-capitalize">Last updated time</th>
                <th class="text-capitalize">State</th>
                <th class="text-capitalize">Confirmed Case</th>
                <th class="text-capitalize">Active Case</th>
                <th class="text-capitalize">Recovered</th>
                <th class="text-capitalize">Deaths</th>
            </tr>
<?php
$data=file_get_contents('https://api.covid19india.org/data.json');
$coronalive=json_decode($data,true);
$statescount=count($coronalive['statewise']);
$i=1;
while($i < $statescount){

?>
<tr>
    <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']  ?></td>
    <td><?php echo $coronalive['statewise'][$i]['state']  ?></td>
    <td><?php echo $coronalive['statewise'][$i]['confirmed']  ?></td>
    <td><?php echo $coronalive['statewise'][$i]['active']  ?></td>
    <td><?php echo $coronalive['statewise'][$i]['recovered']  ?></td>
    <td><?php echo $coronalive['statewise'][$i]['deaths']  ?></td>
</tr>

    <?php
    $i++;
}




?>
        </table>
    </div>
</section>






<footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
      <p> Developed by Siddhanta Pal</p>
    </div>
  </footer>

    
</body>
</html>
