<?php
ob_start();
?>
-- xlxi
-- DO NOT DISTRIBUTE OR YOU WILL BE IP BANNED.
game:GetService("RunService"):Run()
game:SetMessage("Server starting...")
wait()
game:Load("http://ferium.tk/game/host/egson.rbxl")
game:SetMessage("Place loaded.")
wait()
game:GetService("ChangeHistoryService"):SetEnabled(false)
game:SetMessage("ChangeHistoryService disabled.")
wait()

local suc, err = pcall(function() settings().Network.UseInstancePacketCache = true end)
game:SetMessage("Settings 1.")
wait()
if err then
game:SetMessage("Error on Settings 1.")
wait(2)
end
local suc, err = pcall(function() settings().Network.UsePhysicsPacketCache = true end)
game:SetMessage("Settings 2.")
wait()
if err then
game:SetMessage("Error on Settings 2.")
wait(2)
end
local suc, err = pcall(function() settings()["Task Scheduler"].PriorityMethod = Enum.PriorityMethod.AccumulatedError end)
game:SetMessage("Settings 3.")
wait()
if err then
game:SetMessage("Error on Settings 3.")
wait(2)
end
settings().Network.PhysicsSend = Enum.PhysicsSendMethod.ErrorComputation2
game:SetMessage("Settings 4.")
wait()
settings().Network.ExperimentalPhysicsEnabled = true
game:SetMessage("Settings 5.")
wait()
settings().Network.WaitingForCharacterLogRate = 100
game:SetMessage("Settings 6.")
wait()
local suc, err = pcall(function() settings().Diagnostics:LegacyScriptMode() end)
game:SetMessage("Settings 7.")
wait()
if err then
game:SetMessage("Error on Settings 7.")
wait(2)
end
wait()
game:SetMessage("Settings 8.")
settings().Diagnostics.LuaRamLimit = 0
wait()
game:SetMessage("Settings 9.")
game.Lighting.GlobalShadows = true
wait()
game:GetService("NetworkServer"):Start(53640)
game:SetMessage("Server started.")
game:ClearMessage()
function plrfunc(kanye)
	kanye.Character.Humanoid.Died:connect(function()
		wait(3)
		kanye:LoadCharacter()
		plrfunc(kanye)
	end)
	kanye.Chatted:connect(function(chat)
		if chat == ";ec" then
			if kanye.Character.Head:FindFirstChild("ec") == nil then
				kanye.Character:BreakJoints()
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