<?php
$message = addslashes($_GET["username"]);
$avatar = addslashes($_GET["id"]);
ob_start();
?>

-- XlXi's :ok_hand: joinscript buddy retard

local startTime = tick()
local connectResolved = false
local loadResolved = false
local joinResolved = false
local playResolved = true
local playStartTime = 0

settings()["Game Options"].CollisionSoundEnabled = true
pcall(function() settings().Rendering.EnableFRM = true end)
pcall(function() settings().Physics.Is30FpsThrottleEnabled = true end)
pcall(function() game:GetService("Players"):SetChatStyle(Enum.ChatStyle.ClassicAndBubble) end)
pcall( function()
	if settings().Network.MtuOverride == 0 then
	  settings().Network.MtuOverride = 1400
	end
end)

client = game:GetService("NetworkClient")
visit = game:GetService("Visit")

function setMessage(message)
	if not false then
		game:SetMessage(message)
	else
		-- hack, good enought for now
		game:SetMessage("Teleporting ...")
	end
end

function showErrorWindow(message, errorType, errorCategory)
	if 0 then
		if (not loadResolved) or (not joinResolved) then
			local duration = tick() - startTime;
			if not loadResolved then
				loadResolved = true
			end
			if not joinResolved then
				joinResolved = true
			end
		elseif not playResolved then
			local duration = tick() - playStartTime;
			playResolved = true
		end
	end
	
	game:SetMessage(message)
end

function reportError(err, message)
	print("***ERROR*** " .. err)
	visit:SetUploadUrl("")
	client:Disconnect()
	wait(4)
	showErrorWindow("Error: " .. err, message, "Other")
end

function onDisconnection(peer, lostConnection)
	if lostConnection then
	    if waitingForCharacter then analyticsGuid("Waiting for Character Lost Connection",waitingForCharacterGuid) end
		showErrorWindow("You have lost the connection to the game", "LostConnection", "LostConnection")
	else
	    if waitingForCharacter then analyticsGuid("Waiting for Character Game Shutdown",waitingForCharacterGuid) end
		showErrorWindow("This game has shut down", "Kick", "Kick")
	end
end

function requestCharacter(replicator)
	
	local connection
	connection = player.Changed:connect(function (property)
		if property=="Character" then
			game:ClearMessage()
			waitingForCharacter = false
			
			connection:disconnect()
		
			if 0 then
				if not joinResolved then
					local duration = tick() - startTime;
					joinResolved = true
					
					playStartTime = tick()
					playResolved = false
				end
			end
		end
	end)
	
	setMessage("Requesting character")
	
	if 0 and not loadResolved then
		local duration = tick() - startTime;
		loadResolved = true
	end

	local success, err = pcall(function()	
		replicator:RequestCharacter()
		setMessage("Waiting for character")
		waitingForCharacter = true
	end)
	if not success then
		reportError(err,"W4C")
		return
	end
end

function onConnectionAccepted(url, replicator)
	connectResolved = true

	local waitingForMarker = true
	
	local success, err = pcall(function()	
		visit:SetPing("", 300) 		
		if not false then
			game:SetMessageBrickCount()
		else
			setMessage("Teleporting ...")
		end

		replicator.Disconnection:connect(onDisconnection)
		
		local marker = replicator:SendMarker()
		
		marker.Received:connect(function()
			waitingForMarker = false
			requestCharacter(replicator)
		end)
	end)
	
	if not success then
		return
	end
	
	while waitingForMarker do
		workspace:ZoomToExtents()
		wait(0.5)
	end
end

function onConnectionFailed(_, error)
	showErrorWindow("Failed to connect to the Game. (ID=" .. error .. ")", "ID" .. error, "Other")
end

function onConnectionRejected()
	connectionFailed:disconnect()
	showErrorWindow("This game is not available. Please try another", "WrongVersion", "WrongVersion")
end

idled = false
function onPlayerIdled(time)
	if time > 20*60 then
		showErrorWindow(string.format("You were disconnected for being idle %d minutes", time/60), "Idle", "Idle")
		client:Disconnect()
		if not idled then
			idled = true
		end
	end
end

pcall(function() settings().Diagnostics:LegacyScriptMode() end)
local success, err = pcall(function()	

	setMessage("Connecting to Server")
	client.ConnectionAccepted:connect(onConnectionAccepted)
	client.ConnectionRejected:connect(onConnectionRejected)
	connectionFailed = client.ConnectionFailed:connect(onConnectionFailed)
	
	playerConnectSucces, player = pcall(function() return client:PlayerConnect(math.random(1,999999999), "76.189.132.196", 53640) end)

	player.Idled:connect(onPlayerIdled)	
	
	pcall(function() player.Name = "<?php echo $message; ?>" end)
	player.CharacterAppearance = "http://finobe.com/user/getinstancecharapp/<?php echo $avatar ?>/0"	
			
end)

if not success then
	reportError(err,"CreatePlayer")
end

if 0 then
 delay(60*5, function()
	while true do
		reportCdn(false)
		wait(60*5)
	end
 end)
 local cpTime = 30
 delay(cpTime, function()
    while cpTime <= 480 do 
	   wait(cpTime)
       cpTime = cpTime * 2
    end
 end) 
end
<?php
$data = ob_get_clean();
$signature;
$key = file_get_contents("./privatekey.pem");
openssl_sign($data, $signature, $key, OPENSSL_ALGO_SHA1);
echo sprintf("%%%s%%%s", base64_encode($signature), $data);
?>