<?php

$motorcycle = array('Kawasaki', 'Royal_Enfield', 'suzuki', ' Hunda');
$motorcount = count($motorcycle);


echo "Motorcyle CountNumber: $motorcount<br><br>";

for ($index = 0; $index < $motorcount; $index++) {
    echo "$index => $motorcycle[$index]<br>";
}

echo "<br>";

//for each

$motorcycle = array('Kawasaki' => '20b', 'Royal_Enfield' => '80b', 'suzuki' => '60b', ' Hunda' => '90b');

foreach ($motorcycle as $key => $value) {
    echo "Company: $key " . "Market share: $value<br>";
}
