<?php

echo "Helo World!\n";

$array = array("1" => "PHP code test",
    "emoji" => "😀 😃 😄 😁 😆", 5, 5 => 89009,
    "Random number" => rand(100, 999),
    "PHP Version" => phpversion()
);

foreach ($array as $key => $value) {
    echo $key . "\t=>\t" . $value . "\n";
}
