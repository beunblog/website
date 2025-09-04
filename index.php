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
  <script src ="js/loadHTML.js"></script>
  <script src="js/main.js"></script>

  <?php
  $db = new PDO(
    'mysql:host=' . getenv('DB_HOST') . ';dbname=' . getenv('DB_NAME'),
    getenv('DB_USER'),
    getenv('DB_PASS')
  );
  ?>
  
</head>
<body>
<div class="container-fluid p-0">
  <div class="container-fluid" id="header">
  </div>
<div class="container-fluid pt-5" id="post-list">
    <!-- Previews will be inserted here -->
  </div>
</div>

<script>
  loadHTML('#header', 'header.html');
</script>

</body>
</html>
