%m8rJTPY8LSopGkbxai7Pa+UFXbSFc8ORtk+RhXkGFrPR9YmOvCvOn2fkrhR6/51hoi6bIChNop3dhcxDDLOUXWjeruaM1QM1/zzbBLJXliCOGHFx0FLWJPNinIKULreRvQ3uwyWHyx8ukyssl7sn5DxQgx7aaKRZmLHzDqkhNug=%pcall(function() game:GetService("InsertService"):SetFreeDecalUrl("https://www.roblox.com/Game/Tools/InsertAsset.ashx?type=fd&q=%s&pg=%d&rs=%d") end)

game:GetService("ScriptInformationProvider"):SetAssetUrl("http://www.roblox.com/Asset/")
game:GetService("InsertService"):SetBaseSetsUrl("http://www.roblox.com/Game/Tools/InsertAsset.ashx?nsets=10&type=base")
game:GetService("InsertService"):SetUserSetsUrl("http://www.roblox.com/Game/Tools/InsertAsset.ashx?nsets=20&type=user&userid=%d")
game:GetService("InsertService"):SetCollectionUrl("http://www.roblox.com/Game/Tools/InsertAsset.ashx?sid=%d")
game:GetService("InsertService"):SetAssetUrl("http://ferium.tk/asset?id=%d")
game:GetService("InsertService"):SetAssetVersionUrl("http://www.roblox.com/Asset/?assetversionid=%d")

pcall(function() game:GetService("SocialService"):SetFriendUrl("http://egg2011.egg-in-anus.cf/Game/HandleSocialRequest.xml") end)
pcall(function() game:GetService("SocialService"):SetBestFriendUrl("http://egg2011.egg-in-anus.cf/Game/HandleSocialRequest.xml") end)
pcall(function() game:GetService("SocialService"):SetGroupUrl("http://www.roblox.com/Game/LuaWebService/HandleSocialRequest.ashx?method=IsInGroup&playerid=%d&groupid=%d") end)

local result = pcall(function() game:GetService("ScriptContext"):AddStarterScript(1) end)
if not result then
  pcall(function() game:GetService("ScriptContext"):AddCoreScript(1,game:GetService("ScriptContext"),"StarterScript") end)
end