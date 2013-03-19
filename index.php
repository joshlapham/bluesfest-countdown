<?php 

# Next Bluesfest date: Thursday 28th March 2013
$bluesfestDate = date('d-M-Y', mktime(0, 0, 0, 3, 28, 2013));
# Today's date
$today = date('d-M-Y');

if ($bluesfestDate == $today) {
    echo "It's Bluesfest!";
} else {
    echo "It's not Bluesfest.";
}

?>
