<?php
//exercise 1

$fileName = __DIR__ .  "/limerick.txt";

$fileContent = ['A magazine writer named Bing', 'Could make copy from most anything', 'But the copy he wrote', 'of a ten-dollar note', 'Was so good he now lives in Sing Sing'];

if (file_exists($fileName)) {
    foreach ($fileContent as $line) {
        file_put_contents($fileName, $fileContent);
    }
} else {
    touch($fileName);
    foreach ($fileContent as $line) {
        file_put_contents($fileName, $fileContent);
    }
}
?>


<?php
//exercise 2
$content = file_get_contents("https://jsonplaceholder.typicode.com/todos/1");
$writableContent = json_decode($content);
var_dump($writableContent);
?>


<?php
//exercise 3
$dir = __DIR__ . '/data/';
$fileNamePattern = '*.txt';
$files = glob($dir . $fileNamePattern);
$outputFile = __DIR__ . '/total.txt';
touch($outputFile);
unlink($outputFile);
$total = 0;
foreach ($files as $file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $firstName = $lines[0];
    $lastName = $lines[1];
    $scoreString = $lines[2];
    $score = intval($scoreString);
    $outputFileHandle = fopen($outputFile, 'a');
    fwrite($outputFileHandle, "Player = $firstName $lastName / Score = $score\n");
    fclose($outputFileHandle);
    $total += $score;
}
$outputFileHandle = fopen($outputFile, 'a');
fwrite($outputFileHandle, "total of all scores = $total");
fclose($outputFileHandle);
print file_get_contents($outputFile);

?>