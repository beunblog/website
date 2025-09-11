<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beunblog!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <link href="css/style.css" type="text/css" rel="stylesheet">

     <?php
// Create connection
$db = new mysqli(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'));

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
echo "Connected successfully";
?> 

</head>
<body>
<div class="container-fluid p-0">
    <div class="container-fluid" id="header">
        <div class="container-fluid bg-danger p-5">
            <h1> Beunblog</h1>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
<!--                       <li class="nav-item">-->
<!--                            <a class="nav-link" href="#">Webtools</a>-->
<!--                        </li>-->
<!--                       -->
<!--                       <li class="nav-item">-->
<!--                           <a class="nav-link" href="#">Link</a>-->
<!--                       </li>-->
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Webtools</a>
                           <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="../webtools/quadratic.php">Quadratic Calculator</a></li>
                               <li><a class="dropdown-item" href="../webtools/root.php">Root Calculator</a></li>
<!--                               <li><a class="dropdown-item" href="#">A third link</a></li>-->
                           </ul>
                       </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>