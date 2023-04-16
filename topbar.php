<?php 
  session_start(); 
?>
<div class="topbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/">
			<img src="http://ferium.tk/img/ferium.png" style="width:65px;height:20px;"/>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarColor03">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" disabled="">Home (Unfinished)</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://ferium.tk/games">Places</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://ferium.tk/catalog">Catalog</a>
			</li>
		</ul>
		<?php
			if(isset($_SESSION['username'])){
				echo $_SESSION['username'];
			} else {
				echo '
				<a class="nav-link" href="http://ferium.tk/login">Login</a>
				<a class="nav-link" href="http://ferium.tk/register">Register</a>
				';
			}
		?>
		</div>
	</nav>
</div>

<?php
$offline=0;
$announce="";
$alert="This site is up for archival purposes and will not recieve updates. Code available <a href=\"https://github.com/XlXi/ferium\">here</a>.";
$important="";
$warn="";
$success="";
if(isset($_SESSION['success'])){
$success=$_SESSION['success'];
unset($_SESSION['success']);
}
if(empty($announce)) {
} else {
	echo "<div style='left:0rem;top:0rem;width:100%;height:25px;background-color:#9C27B0;'><center style='text-align:center;color:white;font-size:16px;'>$announce</center></div>";
}
if(empty($alert)) {
} else {
	echo "<div style='left:0rem;top:0rem;width:100%;height:25px;background-color:#e51c23;'><center style='text-align:center;color:white;font-size:16px;'>$alert</center></div>";
}
if(empty($important)) {
} else {
	echo "<div style='left:0rem;top:0rem;width:100%;height:25px;background-color:#2196F3;'><center style='text-align:center;color:white;font-size:16px;'>$important</center></div>";
}
if(empty($warn)) {
} else {
	echo "<div style='left:0rem;top:0rem;width:100%;height:25px;background-color:#ff9800;'><center style='text-align:center;color:white;font-size:16px;'>$warn</center></div>";
}
if(empty($success)) {
} else {
	echo "<div style='left:0rem;top:0rem;width:100%;height:25px;background-color:#4CAF50;'><center style='text-align:center;color:white;font-size:16px;'>$success</center></div>";
}
if($offline==1) {
echo "
<script>
alert('Ferium is currently offline and you will be redirected, sorry!');
window.location.replace('http://ferium.tk/error/offline');
</script>
";
}
?>