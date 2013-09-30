<!DOCTYPE html>

<?php 

# Next Bluesfest dates: Thursday 17th April - 21st April 2014
$bluesfestDay1 = date('d-M-Y', mktime(0, 0, 0, 4, 17, 2014));
$bluesfestDay2 = date('d-M-Y', mktime(0, 0, 0, 4, 18, 2014));
$bluesfestDay3 = date('d-M-Y', mktime(0, 0, 0, 4, 19, 2014));
$bluesfestDay4 = date('d-M-Y', mktime(0, 0, 0, 4, 20, 2014));
$bluesfestDay5 = date('d-M-Y', mktime(0, 0, 0, 4, 21, 2014));
# Bluesfest start date in seconds
$bluesfestStartDateInSeconds = mktime(0, 0, 0, 4, 17, 2014);
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
