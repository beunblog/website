<div class="container-fluid item pt-5">
    <div class="row">
    <div id="image" class="col-2">
        <img src="<? echo $image; ?>" alt="Italian Trulli" style="height: 250px;">
    </div>
    <div id="text" class="col-8">
        <div id="title">
            <h1><?php echo $title; ?></h1>
        </div>
        <div id="summary">
            <?php echo $summary; ?>
        </div>
    </div>
    <div id="info" class="col-2">
        <div id="date" class="row" style="text-align:center;">
            <b><?php echo $date; ?></b>
        </div>
        <div id="button" class="row" style="margin-top:100%;">
            <a href="<?php echo $link ?>" class="btn btn-danger" role="button" aria-disabled="true">Read More</a>
        </div>
    </div>
    </div>
</div>