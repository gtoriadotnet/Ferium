<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color: #b3b3b3;">
<div style="left:0px;width:100%;top:50%;height:500px;margin-top:-250px;position:absolute;">
<center><h1>Elevootis TEE VEE</h1></center><br>
<center><h3>Put link here</h3></center><br>
<center><h5>V</h5></center><br>
<input style="left:50%;margin-left:-86.5px;position:absolute;" type="text" id="gamer"><br>
<input style="left:50%;margin-left:-28.75px;margin-top:20px;position:absolute;" type="submit" value="Submit" id="goto">
<center><h5 style="margin-top:80px">I swear we aren't people™</h5></center>
</div>
<script>
document.getElementById('goto').onclick = function() {
	window.location = document.getElementById('gamer').value;
};
</script>
</body>
</html>