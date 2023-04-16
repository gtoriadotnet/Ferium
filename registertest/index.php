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
<?php include('server.php') ?>
<?php echo file_get_contents("http://ferium.tk/topbar.php"); ?>
<div class="card border-secondary mb-3" style="max-width:50%;left:25%;top:10rem;">
  <div class="card-header">Register</div>
  <div class="card-body">
    <h4 class="card-title">Registration form</h4>
    <p class="card-text">(Make your password unique!)</p>
	<form class="form-group" method="post">
	  <?php include('errors.php'); ?>
	  <input type="username" class="form-control" placeholder="Username" name="usnm">
	  <input type="password" class="form-control" placeholder="Password" name="pswd">
	  <input type="password" class="form-control" placeholder="Confirm password" name="pswd2">
	  <input type="email" class="form-control" placeholder="E-mail" name="emadrs">
	  <button type="submit" class="btn btn-primary" style="top:1rem" name="sbmt">Create account</button>
	</form>
  </div>
</div>
</body>
</html>