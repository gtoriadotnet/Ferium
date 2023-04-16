<?php
$message = addslashes($_GET["username"]);
$avatar = addslashes($_GET["id"]);
ob_start();
echo '
-- XlXi modified tis lol
-- credit to conk for making this script weed
nc = game:GetService("NetworkClient")
nc:PlayerConnect(math.random(1000000,9999999), "76.189.132.196", 53640)
game:SetMessage("Connecting to server...")

plr = game.Players.LocalPlayer
plr.Name = "' . $message . '"
plr.CharacterAppearance = "http://finobe.com/user/getinstancecharapp/' . $avatar . '/0"
';
?>

game:GetService("Visit"):SetUploadUrl("")
game.Players:SetChatStyle("ClassicAndBubble")

nc.ConnectionAccepted:connect(function(peer, repl)
    game:SetMessageBrickCount()
    
    local mkr = repl:SendMarker()
    mkr.Received:connect(function()
        game:SetMessage("Requesting Character...")
        repl:RequestCharacter()
        
        game:SetMessage("Waiting for Character...")
        --because a while loop didnt work
        chngd = plr.Changed:connect(function(prop)
            if prop == "Character" then chngd:disconnect() end
        end)
        game:ClearMessage()
    end)
    
    repl.Disconnection:connect(function()
        game:SetMessage("You have disconnected from the game")
    end)
end)
nc.ConnectionFailed:connect(function() game:SetMessage("Failed to connect to the game: [Server not public]") end)
nc.ConnectionRejected:connect(function() game:SetMessage("Failed to connect to the game: [Your mom gay]") end)
<?php
$data = ob_get_clean();
$signature;
$key = file_get_contents("./privatekey.pem");
openssl_sign($data, $signature, $key, OPENSSL_ALGO_SHA1);
echo sprintf("%%%s%%%s", base64_encode($signature), $data);
header("content-type:text/plain");
?>