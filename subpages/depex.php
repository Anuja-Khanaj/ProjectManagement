<?php

$insert = false;
//connecting to the database
$severname = "localhost";
$username = "root";
$password = "";
$database = "depex";

//creating connection 
$conn = mysqli_connect($severname, $username, $password, $database);

if (!$conn) {
    echo "connection is not sucessful";
}
// echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST["title"];
    $desc = $_POST["desc"];
    $tname = $_POST['tname'];
    $tinfo = $_POST['tinfo'];
    $gname = $_POST['gname'];

    $pdf = $_POST['pdf'];
    $certificate = $_POST['certificate'];

    $report = $_POST['report'];

    $link = $_POST['link'];
    // Insert into Database
    $sql = "INSERT INTO `notes` (`timestamp`, `srno`, `title`, `description`, `tname`, `tinfo`, `gname`, `pdf`,`certificate`,`report`, `link`) VALUES (current_timestamp(), NULL, '$title', '$desc', '$tname', '$tinfo', '$gname', '$pdf','$certificate','$report','$link')";

    $result = mysqli_query($conn, $sql);

    $insert = true;

    if (!$result) {
        echo "not sucessful connetion because of error --->" . mysqli_error($conn);
    }
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

    <title>Deepex Projects</title>
    <style>
        a{
            color: white;
        }
        li{
            list-style: none;
        }
    </style>
</head>

<body>
    <?php include "../partials/_header.php" ?>
    <div class="container my-4">
        <?php
        if ($insert) {

            echo ' ';
        }
        ?>
        <div class="container d-inline-flex justify-content-xl-center">

            <form class="d-flex w-100 search">
                <input class="form-control me-2 search-input p-3" style=" width:90%" type="search" placeholder="Search" aria-label="Search">

            </form>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary p-1" style=" width:30%" data-toggle="modal" data-target="#exampleModal">
                ADD NEW
            </button>
        </div>

        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <h2>Add Team</h2>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container my-5">

                            <form action="../subpages/_cse.php" method="post">
                                <div class="form-group main ">
                                    <label for="title"> Project Name</label>
                                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="tname"> Team Name</label>
                                    <input type="text" class="form-control" id="tname" name="tname" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Description" name="tdescription"> Team Info </label>
                                    <textarea class="form-control" id="desc" name="tinfo" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Gname"> Guide Name</label>
                                    <input type="text" class="form-control titlet" id="title" name="gname" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Description" name="Description"> Descripton</label>
                                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="vlink">Pdf </label>
                                    <input type="text" class="form-control" id="title" name="pdf" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="vlink">Certificate</label>
                                    <input type="text" class="form-control" id="title" name="certificate" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="vlink">Report</label>
                                    <input type="text" class="form-control" id="title" name="report" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="vlink">Video Link</label>
                                    <input type="text" class="form-control" id="title" name="link" aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-primary" data-target="#exampleModal">Submit</button>
                            </form>

                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>


        <div class="  row w-100 justify-content-xl-center">
            <?php
            $sql = "SELECT * FROM notes  ";
            $result = mysqli_query($conn, $sql);
           
            while ($row = mysqli_fetch_assoc($result)) {
                $srno = $row['srno'];
                
                echo ' <div class="card text-dark bg-info mb-3 mx-3 my-4     stitle " style="width: 18rem; display:"flex";">
            <div class="card-body">
            <h5 class="card-title">'. $row['title'] . '</h5>
            <p class="card-text">' .  $row['tname'] . '</p>
          </div><ul class ="list-group list-group-flush">
            <li class="list-group-item">' . $row['description'] . '</li>
            <li class="list-group-item">' . $row['gname'] . '</li>
          </ul>
          <div class="card-body">
          
          <a href="view.php?catid=' . $srno . '" class="btn btn-primary">View Threads</a>
     
          </div>
          </div>';
            }
            ?>
        </div>

     

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

            // get input field and add 'keyup' event listener
            let searchInput = document.querySelector('.search-input');
            searchInput.addEventListener('keyup', search);

            // get all title
            let titles = document.querySelectorAll(' .stitle');
            let searchTerm = '';
            let tit = '';

            function search(e) {
                // get input fieled value and change it to lower case
                searchTerm = e.target.value.toLowerCase();

                titles.forEach((title) => {
                    // navigate to p in the title, get its value and change it to lower case
                    tit = title.textContent.toLowerCase();
                    // it search term not in the title's title hide the title. otherwise, show it.
                    tit.includes(searchTerm) ? title.style.display = 'flex' : title.style.display = 'none';
                });
            }
        </script>
</body>

</html>