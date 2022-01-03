<?php
   session_start();
   if(!isset($_SESSION['userId'])){
     header("location:index.html");
   }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>addUser</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
    .box-shadow {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(3, 3, 3, 0.19);
    }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/sidebars.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
            <path fill-rule="evenodd"
                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
        </symbol>
        <symbol id="bi-eye-fill" viewBox="0 0 16 16">
            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
        </symbol>
        <symbol id="bi-file-lock" viewBox="0 0 16 16">
            <path
                d="M8 5a1 1 0 0 1 1 1v1H7V6a1 1 0 0 1 1-1zm2 2.076V6a2 2 0 1 0-4 0v1.076c-.54.166-1 .597-1 1.224v2.4c0 .816.781 1.3 1.5 1.3h3c.719 0 1.5-.484 1.5-1.3V8.3c0-.627-.46-1.058-1-1.224zM6.105 8.125A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3c0-.042.02-.107.105-.175z" />
            <path
                d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
        </symbol>
        <symbol id="bi-pencil-fill" viewBox="0 0 16 16">
            <path
                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
        </symbol>
        <symbol id="bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </symbol>
        <symbol id="bi-plus-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
        </symbol>
        <symbol id="bi-search" viewBox="0 0 16 16">
            <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </symbol>
        <symbol id="bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
        </symbol>
        <symbol id="bi-x-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
            <path fill-rule="evenodd"
                d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
        </symbol>
    </svg>
    <div class="row m-xxl-2">
        <div class="col-sm-2 mt-4">
            <nav class=" navbar-expand-lg navbar-light bg-light  bg-light box-shadow">
                <div class="d-flex flex-column p-3">
                    <div class="text-center">
                        <img src="./img/logo.png" alt="..." width="100%" height="100%" style="border-radius: 50%;">
                    </div>
                    <hr>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item mt-3">
                                <a href="myUsers.php" class="nav-link link-dark" aria-current="page">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#bi-person-fill" />
                                    </svg>
                                    My Users
                                </a>
                            </li>
                            <li class="nav-item mt-3">
                                <a href="#" class="nav-link link-dark">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#bi-eye-fill" />
                                    </svg>
                                    Change Password
                                </a>
                            </li>
                            <li class="nav-item mt-3">
                                <a href="logout.php" class="nav-link link-dark">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#bi-box-arrow-right" />
                                    </svg>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <div class="col-sm-10 mt-4">
            <div class="container-sm border-5 box-shadow p-3">
                <?php
                include "database/connect.php";

                $query1 = "SELECT COUNT(*) FROM user";
                $result1 = mysqli_query($con,$query1);
                $total_row = mysqli_fetch_row($result1);
                $count = $total_row[0];
                
                ?>
                <div class="bg-secondary p-3 rounded-3">
                    <h3>Total Users: <?php echo $count; ?> &nbsp; Total Coins:158 &nbsp; Left coin:8</h3>
                    <div class="container-fluid">
                        <form class="d-flex">
                            <span class="input-group-text" id="basic-addon1"> <svg class="bi" width="30" height="30">
                                    <use xlink:href="#bi-search" />
                                </svg></span>
                            <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
                            <a href="addUser.php" class="text-white ml-5"><svg class="bi me-2" width="50" height="50">
                                    <use xlink:href="#bi-plus-lg" />
                                </svg></a>
                        </form>
                    </div>
                </div>

                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Sr.No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Subscription</th>
                            <th scope="col">Last Login</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query2 = "select * from user";
                            $result2 = mysqli_query($con,$query2);
                            while($row = mysqli_fetch_array($result2)){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['srno']; ?></th>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo date("d,M Y"); ?></td>
                            <td><?php echo date("d,M Y"); ?></td>
                            <td><?php echo $row['subscription']; ?></td>
                            <td><?php echo date("d,M Y h:i:sa"); ?></td>
                            <td>
                                <a href=""><svg class="bi me-1 text-secondary" width="15" height="15">
                                        <use xlink:href="#bi-eye-fill" />
                                    </svg></a>
                                <a href="delete.php?id=<?php echo $row['srno']; ?>"><svg class="bi me-1 text-danger"
                                        width="15" height="15">
                                        <use xlink:href="#bi-x-lg" />
                                    </svg></a>
                                <a href=""><svg class="bi me-1 text-success" width="15" height="15">
                                        <use xlink:href="#bi-plus-circle" />
                                    </svg></a>
                                <a href=""><svg class="bi me-1 text-success" width="15" height="15">
                                        <use xlink:href="#bi-file-lock" />
                                    </svg></a>
                                <a href=""><svg class="bi me-1 text-secondary" width="15" height="15">
                                        <use xlink:href="#bi-pencil-fill" />
                                    </svg></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="text-end mt-lg-5">
                <hr>&copy; 2022 Super Stream
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/sidebars.js"></script>
</body>

</html>