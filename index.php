<!DOCTYPE html>

<?php 

# Next Bluesfest dates: Thursday 28th March - 1st April 2013
$bluesfestDay1 = date('d-M-Y', mktime(0, 0, 0, 3, 28, 2013));
$bluesfestDay2 = date('d-M-Y', mktime(0, 0, 0, 3, 29, 2013));
$bluesfestDay3 = date('d-M-Y', mktime(0, 0, 0, 3, 30, 2013));
$bluesfestDay4 = date('d-M-Y', mktime(0, 0, 0, 3, 31, 2013));
$bluesfestDay5 = date('d-M-Y', mktime(0, 0, 0, 4, 1, 2013));
# Bluesfest start date in seconds
$bluesfestStartDateInSeconds = mktime(0, 0, 0, 3, 28, 2013);
# Today's date
$today = date('d-M-Y');
# The exact time right now
$todayInSeconds = time();

# Check if Bluesfest is today
if ( $bluesfestDay1 == $today || $bluesfestDay2 == $today || $bluesfestDay3 == $today || $bluesfestDay4 == $today || $bluesfestDay5 == $today ) {
    echo "<h3>It's Bluesfest!</h3>";
} else {
    echo "<h3>It's not Bluesfest.</h3>";
    # Calculate the difference between the current time and first Bluesfest date
    $difference = ($bluesfestStartDateInSeconds-$todayInSeconds);
    # Divide the difference by 86400, the number of seconds in a day
    $days = (int)($difference/86400);
    # Print the result
    echo "<p>Bluesfest will begin in $days days.";
};

?>
