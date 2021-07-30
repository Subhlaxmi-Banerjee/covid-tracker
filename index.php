<?php
include "logic.php"

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,200;1,500;1,900&display=swap"
    rel="stylesheet">

    <script src="https://kit.fontawesome.com/84f844a880.js" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "style.css" />;

    <title>Covid-19 Tracker</title>

  </head>
  <body>
    <div class="container-fluid p-5 text-center my-3" style = "background-color : #FFEEFF">
      <h1>Covid-19 Tracker</h1>
      <h6 class ="text-muted">Courage is the fear that has said its prayers </h5>
    </div>
    <div class="container my-5">
      <div class="row text-center">
        <div class="col p-5 m-2 text-dark bg-light">
          <h5>Confirmed</h5>
          <?php echo $total_confirmed; ?>
        </div>
        <div class="col p-5 m-2" style = "background-color : #D4F1F4;color : #05445E">
          <h5>Active</h5>
          <?php echo $active; ?>
          </div>
        <div class="col p-5 m-2" style = "background-color : #A3EBB1;color = #116530">
          <h5>Recovered</h5>
          <?php echo $total_recovered; ?>
        </div>
        <div class="col p-5 m-2 text-danger" style = "background-color :#F7C9B6;color : #821D30">
          <h5>Deceased</h5>
          <?php echo $total_deceased; ?>
        </div>
      </div>
    </div>

  <div class="container bg-light my-2 text-center">
    <p class = "text-info">Flatten The Curve, Stay Home Stay Safe</p>
  </div>

    <div class="container-fluid">
    <div class="table-responsive">
      <table class= "table">
        <thead class="table-dark">
          <tr>
            <th scope = "col">Countries</th>
            <th scope = "col">Confirmed</th>
            <th scope = "col">Recovered</th>
            <th scope = "col">Deceased</th>
          </tr>
        </thead>
        <tbody>
          <?php
             if(is_array($data) || is_object($data)){
              foreach ($data as $key => $value){
                $increased = $value[$days]['confirmed']-$value[$previous]['confirmed']
           ?>
           <tr>
             <th><?php echo $key; ?></th>
             <td>
               <?php echo $value[$days]['confirmed'];?>
               <?php if($increased != 0){?>
                 <small class="text-danger pl-50px" style="padding-left: 10px;"><i class="fas fa-arrow-up"></i><?php echo $increased;?></small>
               <?php } ?>
               </td>
             <td><?php echo $value[$days]['recovered']; ?></td>
             <td><?php echo $value[$days]['deaths']; ?></td>
           </tr>
         <?php } ?>
         <?php } ?>
        </tbody>
      </table>
    </div>
    </div>
    <footer class = "footer mt-auto py-2 bg-light">
      <div class="container text-center">
        <span class = "text-muted">Copyright &copy;2021, Subhlaxmi Banerjee</span>
      </div>
    </footer>
  </body>
</html>
