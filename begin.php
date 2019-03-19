<?
//write file for clients listening
$my_file = 'tmp/filmbegin.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = 'The film has started!';
fwrite($handle, $data);
// Start Scene 1
exec('"C:\Program Files\VideoLAN\VLC\vlc.exe" "C:\Program Files (x86)\Ampps\www\vote\clips\Scene1-BridgePhotoQ-Overlay.mp4" --fullscreen --no-video-title');
exec('"C:\Program Files\AutoHotkey\AutoHotkey.exe" "C:\Program Files (x86)\Ampps\www\vote\AHK-Scene1Bridge1.ahk"');
?>



