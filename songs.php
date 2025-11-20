<!DOCTYPE html>
<html>
<head>
    <title>lyric remix</title>
</head>
<body>

<?php
// song info
$title = "I'll Be";
$artist = "Edwin McCain";
$mood = "emotional";

// numeric variables
$verseCount = 2;
$repeatChorus = "2"; 

// arrays
$nouns = ["eyes", "breath", "mountains", "sky", "love", "heartache", "rain", "roof", "bed", "proof", "life"];
$verbs = ["stop", "steal", "thrust", "reveal", "belong", "dress", "hang", "fall", "lie", "burn", "fight", "remember"];
$adjectives = ["wonderful", "angry", "alive", "dead", "greatest", "better", "captivated"];

// sections of the song
$verse1 = [
    "The strands in your {$nouns[0]} that color them {$adjectives[0]}",
    "{$verbs[0]} me and {$verbs[1]} my {$nouns[1]}",
    "And emeralds from {$nouns[2]} that {$verbs[2]} towards the {$nouns[3]}",
    "Never {$verbs[3]} their depth"
];

$preChorus = [
    "And tell me that we {$verbs[4]} together",
    "{$verbs[5]} it up with the trappings of {$nouns[4]}",
    "I'll be {$adjectives[6]}, I'll {$verbs[6]} from your lips",
    "Instead of the gallows of {$nouns[5]} that {$verbs[6]} from above"
];

$chorus = [
    "I'll be your cryin' shoulder",
    "I'll be {$nouns[4]}'s suicide",
    "I'll be {$adjectives[5]} when I'm older",
    "I'll be the {$adjectives[4]} fan of your {$nouns[10]}"
];

$verse2 = [
    "And {$nouns[6]} {$verbs[7]} {$adjectives[1]} on the tin {$nouns[7]}",
    "As we {$verbs[8]} awake in my {$nouns[8]}",
    "And you're my survival, you're my living {$nouns[9]}",
    "My {$nouns[4]} is {$adjectives[2]} and not {$adjectives[3]}"
];

$bridge = [
    "And I've dropped out, I've {$verbs[9]} up, I've {$verbs[10]} my way back from the {$adjectives[3]}",
    "I tuned in, I turned on, {$verbs[11]} the thing that you said"
];

$outro = ["The {$adjectives[4]} fan of your {$nouns[10]}"];

// type juggling
$totalChorusLines = count($chorus) * $repeatChorus;
$linesPerVerse = count($verse1) + count($verse2);

// song display
echo "<h1>$title</h1>";
echo "<h2>by $artist</h2>";
echo "<p><strong>Mood:</strong> $mood</p>";
echo "<p><strong>Total Chorus Lines:</strong> $totalChorusLines</p>";
echo "<p><strong>Total Verse Lines:</strong> $linesPerVerse</p>";

echo "<div class='section verse'><h3>Verse 1</h3>";
echo "<p>{$verse1[0]}</p>";
echo "<p>{$verse1[1]}</p>";
echo "<p>{$verse1[2]}</p>";
echo "<p>{$verse1[3]}</p>";
echo "</div>";

echo "<div class='section prechorus'><h3>Pre-Chorus</h3>";
echo "<p>{$preChorus[0]}</p>";
echo "<p>{$preChorus[1]}</p>";
echo "<p>{$preChorus[2]}</p>";
echo "<p>{$preChorus[3]}</p>";
echo "</div>";

echo "<div class='section chorus'><h3>Chorus</h3>";
for ($i = 0; $i < $repeatChorus; $i++) {
    echo "<p>{$chorus[0]}</p>";
    echo "<p>{$chorus[1]}</p>";
    echo "<p>{$chorus[2]}</p>";
    echo "<p>{$chorus[3]}</p>";
}
echo "</div>";

echo "<div class='section verse'><h3>Verse 2</h3>";
echo "<p>{$verse2[0]}</p>";
echo "<p>{$verse2[1]}</p>";
echo "<p>{$verse2[2]}</p>";
echo "<p>{$verse2[3]}</p>";
echo "</div>";

echo "<div class='section bridge'><h3>Bridge</h3>";
echo "<p>{$bridge[0]}</p>";
echo "<p>{$bridge[1]}</p>";
echo "</div>";

echo "<div class='section chorus'><h3>Final Chorus</h3>";
echo "<p>{$chorus[0]}</p>";
echo "<p>{$chorus[1]}</p>";
echo "<p>{$chorus[2]}</p>";
echo "<p>{$chorus[3]}</p>";
echo "<p>{$chorus[0]}</p>";
echo "<p>{$chorus[1]}</p>";
echo "<p>{$chorus[2]}</p>";
echo "<p>{$chorus[3]}</p>";
echo "</div>";

echo "<div class='section outro'><h3>Outro</h3>";
echo "<p>{$outro[0]}</p>";
echo "</div>";
?>

</body>
</html>