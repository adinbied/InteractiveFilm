<?
$files = [
    'tmp/filmbegin.txt',
	'tmp/finalcountq1.txt',
	'tmp/votestartq2.txt',
	'tmp/finalcountq2.txt',
	'tmp/votestartq3.txt'
];

foreach ($files as $file) {
    if (file_exists($file)) {
        unlink($file);
    } else {
        // File not found.
    }
}
?>