<?
exec('"%windir%\sysnative\bash.exe" "/mnt/c/Program Files (x86)/Ampps/www/vote/checkpyq2.sh"');
sleep(1);
$decision = file_get_contents('tmp/finalcountq2.txt');
$hcvar = "NO";
if (strcmp($decision, $hcvar) !== 0) { 
	//BRINGTAPE Wins
    exec('"C:\Program Files\VideoLAN\VLC\vlc.exe" "C:\Program Files (x86)\Ampps\www\vote\clips\Scene2-TakeBox-Scene3-WatchQ-Overlay.mp4" --fullscreen --no-video-title');
	exec('"C:\Program Files\AutoHotkey\AutoHotkey.exe" "C:\Program Files (x86)\Ampps\www\vote\AHK-Scene3Take1.ahk"');
} 
else { 
	//LEAVETAPE Wins
    exec('"C:\Program Files\VideoLAN\VLC\vlc.exe" "C:\Program Files (x86)\Ampps\www\vote\clips\Scene2-LeaveBox-Scene3-WatchQ-Overlay.mp4" --fullscreen --no-video-title');
	exec('"C:\Program Files\AutoHotkey\AutoHotkey.exe" "C:\Program Files (x86)\Ampps\www\vote\AHK-Scene3Take2.ahk"');
} 
?>