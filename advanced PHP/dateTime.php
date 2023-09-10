<?php

// EET (Eastern European Timezone)

$now = new DateTime();

$twoDaysAgo = new DateTime("-2 days");
$oneWeekAfter = new DateTime("+1 week ");
$loginTime = new DateTime("2018-12-12 12:30");


echo "<pre>";
print_r($now);
print_r($loginTime);
print_r($twoDaysAgo);
print_r($oneWeekAfter);

echo $now->format("D Y-m-d h:m a");
// result: Sat 2023-09-09 01:09 pm
