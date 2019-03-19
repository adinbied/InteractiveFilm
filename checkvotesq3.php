<?
exec('"%windir%\sysnative\bash.exe" "/mnt/c/Program Files (x86)/Ampps/www/vote/checkpyq3.sh"');
sleep(1);
$decision = file_get_contents('tmp/finalcountq3.txt');
$hcvar = "DONT";
if (strcmp($decision, $hcvar) !== 0) { 
	//WATCHTAPE Wins
    exec('"C:\Program Files\VideoLAN\VLC\vlc.exe" "C:\Program Files (x86)\Ampps\www\vote\clips\Scene3-WatchTape-Scene4-FixMachineQ-Overlay.mp4" --fullscreen --no-video-title');
	exec('"C:\Program Files\AutoHotkey\AutoHotkey.exe" "C:\Program Files (x86)\Ampps\www\vote\AHK-Scene4Take1.ahk"');
} 
else { 
	//NOWATCH Wins
    exec('"C:\Program Files\VideoLAN\VLC\vlc.exe" "C:\Program Files (x86)\Ampps\www\vote\clips\Scene3-NoWatchTape-Scene4-FixMachineQ-Overlay.mp4" --fullscreen --no-video-title');
	exec('"C:\Program Files\AutoHotkey\AutoHotkey.exe" "C:\Program Files (x86)\Ampps\www\vote\AHK-Scene4Take2.ahk"');
} 
?>