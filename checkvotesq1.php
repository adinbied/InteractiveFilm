<?
exec('"%windir%\sysnative\bash.exe" "/mnt/c/Program Files (x86)/Ampps/www/vote/checkpyq1.sh"');
sleep(1);
$decision = file_get_contents('tmp/finalcountq1.txt');
$hcvar = "TAKE";
if (strcmp($decision, $hcvar) !== 0) { 
	//NOTAKEPHOTO Wins
    exec('"C:\Program Files\VideoLAN\VLC\vlc.exe" "C:\Program Files (x86)\Ampps\www\vote\clips\Scene1-NoPhoto-Scene2-TakeHomeTapeQ-Overlay.mp4" --fullscreen --no-video-title');
	exec('"C:\Program Files\AutoHotkey\AutoHotkey.exe" "C:\Program Files (x86)\Ampps\www\vote\AHK-Scene2Take1.ahk"');
} 
else { 
	//TAKEPHOTO Wins
    exec('"C:\Program Files\VideoLAN\VLC\vlc.exe" "C:\Program Files (x86)\Ampps\www\vote\clips\Scene1-TakePhoto-Scene2-TakeHomeTapeQ-Overlay.mp4" --fullscreen --no-video-title');
	exec('"C:\Program Files\AutoHotkey\AutoHotkey.exe" "C:\Program Files (x86)\Ampps\www\vote\AHK-Scene2Take2.ahk"');
} 
?>