<?php
// Ask the user to input values
$pressure = (float)readline("Enter the value for pressure (P): ");
$length = (float)readline("Enter the length in meters: ");
$width = (float)readline("Enter the width in meters: ");
$height = (float)readline("Enter the height in meters: ");
// Calculate volume
$volume = $length * $width * $height;
$temperature = (float)readline("Enter the temperature: ");
$temperature += 273.14;
// Calculate the number of moles and round up
$moles = $pressure * $volume / (8.314 * $temperature);
$roundedMoles = ceil($moles);
// Toggle the number of moles to make it odd or even
// No matter what it will flip from odd to even
$oddEvenValue = $roundedMoles + 1;
// Display the results
echo "Initial value for moles: $moles\n";
echo "Rounded whole number for moles: $roundedMoles\n";
// Calculate if even or odd using compressed if statement'
echo "Odd or even value for moles: $oddEvenValue, " . (($oddEvenValue % 2 == 0) ? 'Even' : 'Odd') . "\n";
?>