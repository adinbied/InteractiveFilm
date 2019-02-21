<?
$files = [
    'tmp/filmbegin.txt',
	'tmp/finalcountq1.txt'
];

foreach ($files as $file) {
    if (file_exists($file)) {
        unlink($file);
    } else {
        // File not found.
    }
}
?>