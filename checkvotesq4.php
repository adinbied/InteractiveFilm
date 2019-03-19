<?
exec('"%windir%\sysnative\bash.exe" "/mnt/c/Program Files (x86)/Ampps/www/vote/checkpyq4.sh"');
sleep(1);
$decision = file_get_contents('tmp/finalcountq4.txt');
$hcvar = "GIVE";
if (strcmp($decision, $hcvar) !== 0) { 
	//TRY Wins
    exec('"C:\Program Files\VideoLAN\VLC\vlc.exe" "C:\Program Files (x86)\Ampps\www\vote\clips\Scene4-KeepGoing-Scene5-Archives.mp4" --fullscreen --no-video-title');
} 
else { 
	//GIVEUP Wins
    exec('"C:\Program Files\VideoLAN\VLC\vlc.exe" "C:\Program Files (x86)\Ampps\www\vote\clips\Scene4-GiveUp-Scene5-Archives.mp4" --fullscreen --no-video-title');
} 
?>