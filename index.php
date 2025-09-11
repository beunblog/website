<?php
include(__DIR__ . '/header.php');

$sql = "SELECT * FROM `posts`; ";
$result = $db->query($sql);
?>
<div class="container-fluid pt-5" id="post-list">
    <?php 
    for ($x = 0; $x < $result->num_rows; $x++){
    echo '<div class="post-preview row item pt-5">';
    echo '<div id="image" class="col-2">
            <img src=$img alt=$title style="height: 250px;">
          </div>
          <div id="text" class="col-8">
            <div id="title">
              <h1 id="title_text">$title</h1>
            </div>
            <div id="summary">
              <p id="summary_text">$summary</p>
            </div>
          </div>
          <div id="info" class="col-2">
            <div id="date" class="row" style="text-align:center;">
              <b id="date_text">$date</b>
            </div>
            <div id="button" class="row" style="margin-top:100%;">
              <a href="blog.html?post=$id class="btn btn-danger" role="button" aria-disabled="true">Read More</a>
            </div>
          </div>';
    }
    echo "</div>";
    ?>
  </div>

<?php
include(__DIR__ . '/footer.php');
?>
