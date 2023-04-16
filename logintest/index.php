<html>
<head>
<link rel="stylesheet" type="text/css" href="/bootstrap/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/bootstrap/bootstrap.min.css">
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6472041828899635",
    enable_page_level_ads: true
  });
</script>
</head>
<body>
<?php echo file_get_contents("http://76.189.132.196/topbar.php"); ?>
<?php include('server.php') ?>
<div class="card border-secondary mb-3" style="max-width:50%;left:25%;top:10rem;">
  <div class="card-header">Login</div>
  <div class="card-body">
  <form method="post">
	  <?php include('errors.php'); ?>
	  <input type="username" class="form-control" placeholder="Username" name="usnm">
	  <input type="password" class="form-control" placeholder="Password" name="pswd">
	<button class="btn btn-primary" style="top:1rem" name="lgn">Login</button>
	</form>
  </div>
</div>
</body>
</html>