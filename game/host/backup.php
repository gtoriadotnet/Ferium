<?php
ob_start();
?>
-- xlxi
game:Load("http://www.roblox.com/asset?id=65033&version=13")
game.Lighting.GlobalShadows = true
game:GetService("RunService"):Run()
game:GetService("NetworkServer"):Start(53640)
function plrfunc(kanye)
	kanye.Character.Humanoid.Died:connect(function()
		wait(3)
		kanye:LoadCharacter()
		plrfunc(kanye)
	end)
	kanye.Chatted:connect(function(chat)
		if chat == ";ec" then
			if kanye.Character.Head:FindFirstChild("ec") == nil then
				local sound = Instance.new("Sound", kanye.Character.Head)
				sound.Name = "ec"
				sound.SoundId = "https://finobe.com/asset?id=34186"
				sound.Volume = 1
				sound:Play()
			end
		end
	end)
end
game.Players.PlayerAdded:connect(function(kanye)
	kanye:LoadCharacter()
	plrfunc(kanye)
end)
<?php
$data = ob_get_clean();
$signature;
$key = file_get_contents("./privatekey.pem");
openssl_sign($data, $signature, $key, OPENSSL_ALGO_SHA1);
echo sprintf("%%%s%%%s", base64_encode($signature), $data);
header("content-type:text/plain");
?>