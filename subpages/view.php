<?php

$insert = false;
//connecting to the database
$severname = "localhost";
$username = "root";
$password = "";
$database = "notes";

//creating connection 
$conn = mysqli_connect($severname, $username, $password, $database);

if (!$conn) {
    echo "connection is not sucessful";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

  <title>More about project</title>
  <style>
        a{
            color:white;
        }
        li{
            list-style: none;
        }
        td{
          color:black;
        }
    </style>
</head>

<body>


  <div class="container my-5">


  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Points</th>
      <th scope="col">Content</th>
    </tr>
  </thead>
  <tbody>
        <?php
              $id = $_GET['catid'];
              $sql = "SELECT * FROM `notes` WHERE srno = $id"; 
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  // $title = $row["title"];
                  // $desc = $row["desc"];
                  // $tname = $row['tname'];
                  // $tinfo = $row['tinfo'];
                  // $gname = $row['gname'];
              
                  // $pdf = $row['pdf'];
                  // $certificate = $row['certificate'];
              
                  // $report = $row['report'];
              
                  // $link = $row['link'];
                  echo ' <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Project Name</td>
                    <td>' . $row['title'] . '</td>

                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Team Name</td>
                    <td>' . $row['tname'] . '</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td >Team Information</td>
                    <td>' . $row['tinfo'] . '</td>
                  </tr>
                <tr>
                  <th scope="row">3</th>
                  <td >Guide Name</td>
                  <td>' . $row['gname'] . '</td>
                  </tr>
                  <tr>
                  <th scope="row">4</th>
                  <td >Description</td>
                  <td>' . $row['description'] . '</td>
                  </tr>
                  <tr>
                  <th scope="row">5</th>
                  <td >PDF</td>
                  
                  <td>' . $row['pdf'] . '</td>
                  <td><a href="'.$row['pdf'] .'>"' .$row['pdf']. '</a></td>
                  </tr>
                  <tr>
                  <th scope="row">6</th>
                  <td >Certificate</td>
                  <td>' . $row['certificate'] . '</td>
                  <td><a href="'.$row['certificate'] .'>"' .$row['certificate']. '</a></td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td >Project Report</td>
                    <td>' . $row['report'] . '</td>
                    <td><a href="'.$row['report'] .'>"' .$row['report']. '</a></td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td >Video Link</td>
                    <td>' . $row['link'] . '</td>
                    <td><a href="'.$row['link'] .'>"' .$row['link']. '</a></td>
                  </tr>
                  
                  ';
                    }
                    ?>
                    </tbody>
</table>





   <!-- <table>
         <tbody>
        <?php
              $id = $_GET['catid'];
              $sql = "SELECT * FROM `notes` WHERE srno = $id"; 
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  // $title = $row["title"];
                  // $desc = $row["desc"];
                  // $tname = $row['tname'];
                  // $tinfo = $row['tinfo'];
                  // $gname = $row['gname'];
              
                  // $pdf = $row['pdf'];
                  // $certificate = $row['certificate'];
              
                  // $report = $row['report'];
              
                  // $link = $row['link'];
                  echo ' <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Project Name</td>
                    <td>' . $row['title'] . '</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Team Name</td>
                    <td>' . $row['tname'] . '</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td >Team Information</td>
                    <td>' . $row['tinfo'] . '</td>
                  </tr>
                <tr>
                  <th scope="row">3</th>
                  <td >Guide Name</td>
                  <td>' . $row['gname'] . '</td>
                  </tr>
                  <tr>
                  <th scope="row">4</th>
                  <td >Description</td>
                  <td>' . $row['description'] . '</td>
                  </tr>
                  <tr>
                  <th scope="row">5</th>
                  <td >PDF</td>
                  <td> <a href ="'. $row['pdf'] .'">' . $row['pdf'] . '</a></td>
                  </tr>
                  <tr>
                  <th scope="row">6</th>
                  <td >certifivate</td>
                  <td> <a href = "' . $row['certificate'] . '">' . $row['certificate'] . '</a></td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td >Project Report</td>
                    <td>' . $row['report'] . '</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td >Video Link</td>
                    <td>' . $row['link'] . '</td>
                  </tr>
                  </tbody>
                  ';
                    }
                    ?>


    
      
    </table>
  </div> -->



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    }); //script of HTML data tables we have used in table.
  </script>
</body>

</html>