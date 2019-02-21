<?
//write file for clients listening
$my_file = 'tmp/filmbegin.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = 'The film has started!';
fwrite($handle, $data);
fclose($handle);
// Start Scene 1
exec('"C:\Program Files\VideoLAN\VLC\vlc.exe" "C:\Program Files (x86)\Ampps\www\vote\clips\Intro-Q1.mp4" --fullscreen --no-video-title');
exec('"C:\Program Files\AutoHotkey\AutoHotkey.exe" "C:\Program Files (x86)\Ampps\www\vote\obssceneswap.ahk"');
sleep(26);
exec('"C:\Windows\System32\wsl.exe" "/mnt/c/Program Files (x86)/Ampps/www/vote/checkpy.sh"');
sleep(0.2);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>



