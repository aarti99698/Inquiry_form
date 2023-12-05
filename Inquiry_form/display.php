<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>

<body>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <style>
        @import url('href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap');


        :root {
            --main-color: #dd2f23;
            --color-dark: #1d2231;
            --text-gray: #8390A2;
        }

        body {
            margin: 0;
            padding: 0;
            background: #f1f5f9;
        }

        header {
            background: whitesmoke;
            display: flex;
            justify-content: space-between;
            padding: 1rem 1.5rem;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            position: fixed;
            width: calc(100%);
            top: 0;
            z-index: 100;
            transition: width 300ms;
        }

        header h2 {
            color: #222;
        }

        header label span {
            font-size: 1.7rem;
            padding-right: 1rem;
        }

        /* .search-wrapper {
            border: 1px solid #ccc;
            border-radius: 30px;
            height: 50px;
            display: flex;
            align-items: center;
            overflow-x: hidden;
            margin: 20px;
        } */

        /* .search-wrapper span {
            display: inline-block;
            padding: 0rem 1rem;
            font-size: 1.5rem;
        }

        .search-wrapper input {
            height: 100%;
            padding: .5rem;
            border: none;
            outline: none;
        }

        .user-wrapper {
            display: flex;
            align-items: center;
            margin-right: 40px;
        }

        .user-wrapper img {
            border-radius: 50%;
            margin-right: 1rem;
        }

        .user-wrapper h4 {
            margin-bottom: 0rem !important;
        }

        .user-wrapper small {
            display: inline-block;
            color: var(--text-gray);
            margin-top: -10px !important;
        } */

        main {
            margin-top: 85px;
            padding: 2rem 1.5rem;
            background: #f1f5f9;
            min-height: calc(100vh- 90px);
        }


        .Update,
        .Delete,
        .Edit {
            background-color: green;
            color: white;
            Border: 0;
            outline: none;
            font-weight: bold;
            border-radius: 5px;
            height: 23px;
            width: 80px;
            cursor: pointer;
        }

        .Delete {
            background-color: red;
        }

        /* .Edit {
            background-color: orange;
        } */

        .table {
            margin-top: 10rem;
            color: black;
            border-color: black;
            padding: 0px 10px;
        }

        table th {
            font-size: 14px;
            font-weight: 600;
            color: black;
            height: 5px;
            background-color: #a0a0a0;
        }

        table td {
            font-size: 13px;
            font-weight: 200;
            color: black;
            background-color: #f8f8f8;
        }
    </style>
    </head>

</html>

<?php
include("config.php");
//error_reporting(0);

$query = "SELECT * FROM register";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

//echo $total;

if ($total != 0) {

    ?>
    <div>
        <div class="header">
            <header>
                <h1>Candidate Details</h1>

                <!-- <div class="search-wrapper">
                    <span class=" las la-search"></span>
                    <input type="search" placeholder="Search here..">
                </div>

                <div class="user-wrapper">
                    <img src="image.avif" alt="" width="50px" height="50px" alt="">
                    <div>

                        <h4> Aaru</h4>
                        <small>Admin</small>
                    </div>
                </div> -->
        </div>

        <div class="table">
            <table Border="1" cellspacing="0" width="100%">
                <tr>
                    <th width="1%">Serial No</th>
                    <th width="6%">First Name</th>
                    <th width="6%">Last Name</th>
                    <th width="9%">Email</th>
                    <th width="6%">Phone Number</th>
                    <th width="6%">Applied Position</th>
                    <th width="6%">Possible Started Date</th>
                    <th width="4%">Upload Document</th>
                    <th width="12%">Oprations</th>
                </tr>
        </div>
    </div>
    <?php

    while ($result = mysqli_fetch_assoc($data)) {
        echo " <tr>
                
                 <td>".$result["Id"] . "</td>
                 <td>" . $result["fname"] . "</td>
                 <td>" . $result["lname"] . "</td>
                 <td>" . $result["email"] . "</td>
                 <td>" . $result["phone"] . "</td>
                 <td>" . $result["position"] . "</td>
                 <td>" . $result["started"] . "</td>
                 <td>" . $result["document"] . "</td>
                 <td>
                 <a href='update.php? Id=$result[Id]'><input type='submit' value='Update' class='Update'></a>
                 <a href='delete.php? Id=$result[Id]'><input type='submit' value='Delete' class='Delete'
                         onclick='return checkdelete()'></a> 
                 </td>
             </tr>";
    }
} else {
    echo " No records found";
}
?>
</table>

<script>
        function checkdelete() {
            return confirm('Are you sure? you want to DELETE this record !');
        }
</script>
</body>

</html>