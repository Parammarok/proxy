<?php
$player= file_get_contents('https://openplayer.net/generate.php?id='.$_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Google Drive Proxy Player</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Google Drive Proxy Player</h2>
  <div class="embed-responsive embed-responsive-16by9">
  <?php echo html_entity_decode($player);?>
  </div>
  <div class="col-sm-13 mt-3">
	<textarea class="form-control"><?php echo $player;?></textarea>
  </div>
</div>

</body>
</html>
