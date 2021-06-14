<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid 19 india</title>
    <link rel = "stylesheet" href = "css/bootstrap.css">
    <link rel = "stylesheet" href = "css/style.css">
</head>
<body>
<!-- As a heading -->

<nav class="navbar navnack">
  <div class="navbar-brand h1 heading px-3">Covid-19</div>
</nav>

<div class="container-fluid">
<div class= " my-4">
  <h3 class="text-center text-uppercase head text-danger">Covid-19 Live updates of India</h3>
</div>

<div class="table-responsive">
  <table class="table table-bordered table-hover table-striped text-center">
    <tr>
      <th>S.No</th>
      <th>Last Updated Time</th>
      <th>State</th>
      <th>State-Code</th>
      <th class = "confirmed">Confirmed</th>
      <th class = "active">Active</th>
      <th class = "recovered">Recovered</th>
      <th class = "deaths">Deaths</th>
    </tr>
    <?php
    $data = file_get_contents('https://api.covid19india.org/data.json');
    $coronalive = json_decode($data, true);
    $number_Of_States = count($coronalive['statewise']);
    $i = 1;
    
    while ($i < $number_Of_States)
    {
      ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo ($coronalive['statewise'][$i]['lastupdatedtime']) ?></td>
        <td><?php echo ($coronalive['statewise'][$i]['state']) ?></td>
        <td><?php echo ($coronalive['statewise'][$i]['statecode']) ?></td>
        <td class = "confirmed"><?php echo ($coronalive['statewise'][$i]['confirmed']) ?></td>
        <td class = "active"><?php echo ($coronalive['statewise'][$i]['active']) ?></td>
        <td class = "recovered"><?php echo ($coronalive['statewise'][$i]['recovered']) ?></td>
        <td class = "deaths"><?php echo ($coronalive['statewise'][$i]['deaths']) ?></td>
      </tr>

  <?php
    $i++;}
    ?>
  </table>
</div>
</div>


</body>
</html>