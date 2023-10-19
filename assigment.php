<?php
echo "<h3> Siyaad Hassan sankus <br>
      CA204 <br>
      C120679
</h3>";
echo "<h5>Question1#:Arithmatict operations</h5>";
$num1= 3;
$num2= 2;
$sum = $num1 + $num2;
echo("sum is $sum<br>");

$num1= 3;
$num2= 2;
$sub = $num1 - $num2;
echo("sub is $sub<br>");

$num1= 3;
$num2= 2;
$mult = $num1 * $num2;
echo("mult is $mult<br>");

$num1= 3;
$num2= 2;
$div = $num1 / $num2;
echo("div is $div<br>");

$num1= 3;
$num2= 2;
$rem = $num1 % $num2;
echo("rem is $rem<br>");

//program that print number divisible by 3,5,both or non off them
echo "<h5>Question2#:the number is divisible by 3, 5, both, or none of them</h5>";
$number = 15;
if ($number % 3 == 0 && $number % 5 == 0) {
   echo "$number is divisible by both 3 and 5.";
   }
 elseif ($number % 3 == 0) {
  echo "$number is divisible by 3, but not by 5.";
 } 
 elseif ($number % 5 == 0) {
echo "$number is divisible by 5, but not by 3.";
 } else {
   echo "$number is not divisible by either 3 or 5.";
 }
 echo"<br>";

echo "<h5> 3.	Write a program that compares four integer numbers then specifies and then prints
 the greatest and the smallest ones (do not use built-in function such as min or max).</h5>";
$num1 = 10;
$num2 = 5;
$num3 = 8;
$num4 = 28;
$greatest=$num1;
if($num2 >$greatest){
$greatest=$num2;
}
if($num3>$greatest){
$greatest=$num3;
}
if($num4> $greatest){
    $greatest=$num4;
    }
$smallest=$num1;
if($num2<$smallest){
$smallest=$num2;
}
if($num3<$smallest){
$num3=$smallest;
}
if($num4<$smallest){
    $num4=$smallest;
    }


// Print the results
echo "The greatest number is:  ".$greatest;
echo"<br>";
echo "The smallest number is:  ".$smallest;
echo"<br>";


echo "<h5>4Write a program that prints whether the number is even (divisible by 2) or odd.</h5>";
$num=10;
if($num % 2 ==0){
  echo "$num is even.";
}
else{
 echo "$num is odd.";
}
echo"<br>";

echo "<h5>Question#5:program that calculates the factorial of a given number.</h5>";
echo"<br>";
$num = 5;
$factorial = 1;

for ($x=$num; $x>=1; $x--)
{
    $factorial = $factorial * $x;
}
echo "The factorial of $num is $factorial";

echo"<br>";
echo "<h5>Question6#: program that prints odd numbers from 2 to 20</h5>";
for($i=20;$i>=2; $i--){
if($i%2 !=0){
  echo$i.""."\n";
}
}


echo"<br>";
echo "<h5>Question7#: program that prints even numbers from 7 to 35</h5>";
for($i=35;$i>=7; $i--){
   if($i%2 ==0){
   echo$i. ""."\n";
}
}

echo"<br>";

 echo "<h5>Question8#:program that prints numbers divisible by 5 from 1 to 50.</h5>";
 for($i=1;$i<=50;$i++){
  if($i%5==0){
 echo $i. "". "\n";
  }
 }
 echo"<br>";

 
 echo "<h5>Question#9:program that prints numbers divisible by 2 and 5 at the same time from 50 to 2</h5>";
for($i=50;$i>=2;$i--){
 if($i%2==0 && $i%5==0){
 echo $i .""."\n";
 }
}


echo"<br>";


echo "<h5>Question#10:program to find the reverse of a given number (for example, the reverse of 12345 = 54321</h5>";
$num =12345; 
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem; 
$num = ($num / 10);   
}  
echo "Reverse number of 12345 is: $revnum";
echo"<br>";


echo "<h5>Question#11:program that calculates lowest common multiplier (LCM) of two positive integer numbers </h5>";

$p = $x = 20;
$q = $y = 25;

while ($x != $y) {
  if ($x > $y)
    $x = $x - $y; 
  else
    $y = $y - $x;
}
$lcm = ($p*$q)/$x;
echo " LCM of $p and $q is: $lcm";
echo"<br>";

echo "<h5>Question#12:program to find common factors of two positive integer numbers</h5>";
echo"<br>";
// Input two positive integer numbers
$num1 = 42;
$num2 = 70;

// Find the smaller of the two numbers
$min = ($num1 < $num2) ? $num1 : $num2;

// Initialize an array to store common factors
$commonFactors = array();

// Loop through numbers from 1 to the smaller number
for ($i = 1; $i <= $min; $i++) {
    // Check if both numbers are divisible by the current value of $i
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $commonFactors[] = $i; // Add the common factor to the array
    }
}

// Output the common factors
echo "Common factors of $num1 and $num2 are: " .  implode(', ', $commonFactors);


echo "<h5>Question#13:program that calculates highest common factor (HCF) of two integer numbers </h5>";
echo"<br>";
// Input two integers
$number1 = 18;
$number2 = 24;

// Find the absolute values of the two numbers
$number1 = abs($number1);
$number2 = abs($number2);

while ($number2 !== 0) {
    $remainder = $number1 % $number2;
    $number1 = $number2;
    $number2 = $remainder;
}
$hcf = $number1;
echo "The HCF of {$number1} and {$number2} is {$hcf}.";

echo"<br>";
echo "<h5>  question#:15.	Write a program to find all factors of a positive integer number (for example, factors of 42 are: 1, 2, 3, 6, 7, 14, 21 and 42).</h5>";

function findFactors($number) {
  $factors = array();
  
  for ($i = 1; $i <= $number; $i++) {
  if ($number % $i == 0) {
  $factors[] = $i;
  }
  }
  
  return $factors;
  }
  
  $number = 42;
  $factors = findFactors($number);
  
  echo "Factors of $number are: ";
  foreach ($factors as $factor) {
  echo "$factor, ";
  }

  echo"<br>";
  echo "<h5> question# 16.	Write a program to find prime factors of a positive integer number (for example, prime factors of 42 are: 2, 3 and 7).</h5>";


  function primeFactors($number) {
    $factors = array();
    
    for ($i = 2; $i <= sqrt($number); $i++) {
    while ($number % $i == 0) {
    $factors[] = $i;
    $number /= $i;
    }
    }
    
    if ($number > 1) {
    $factors[] = $number;
    }
    
    return $factors;
    }
    
    // Example usage
    $number = 42;
    $primeFactors = primeFactors($number);
    
    echo "Prime factors of {$number} are: ";
    foreach ($primeFactors as $factor) {
    echo "{$factor}, ";
    }

    echo "<br>";

    echo "<h5>Question#17:program that prints prime (whole number greater than 1which is exactly divisible by itself )  </h5>";
    echo"<br>";
    // Function to check if a number is prime
    function isPrime($num) {
        if ($num <= 1) {
            return false;
        }
        if ($num <= 3) {
            return true;
        }
    
        if ($num % 2 == 0 || $num % 3 == 0) {
            return false;
        }
    
        $i = 5;
        while ($i * $i <= $num) {
            if ($num % $i == 0 || $num % ($i + 2) == 0) {
                return false;
            }
            $i += 6;
        }
    
        return true;
    }
    
    // Loop through numbers from 100 to 6 and print prime numbers
    for ($i = 100; $i >= 6; $i--) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
       echo "<br>";
       echo "<h5>Question#18:program that produces multiplication table (up to 12*12)</h5>";
echo"<br>";
// Create a table header
echo"<h2> multiplication table</h2>";
echo "<table border='1'>";
echo "<tr><th>&nbsp;</th>";

// Create the header row with numbers from 1 to 12
for ($i = 1; $i <= 12; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Create the multiplication table rows
for ($i = 1; $i <= 12; $i++) {
    echo "<tr><th>$i</th>";
    
    for ($j = 1; $j <= 12; $j++) {
        // Calculate the product and display it in the table
        $product = $i * $j;
        echo "<td>$product</td>";
    }
    
    echo "</tr>";
}
// Close the table
echo "</table>";
 echo "<br>";
 echo "<h5>question#19.	Write a program that prints prime numbers from 10 to 50.</h5>";
echo"<br>";

// Loop through numbers from 10 to 50
for ($num = 10; $num <= 50; $num++) {
    $isPrime = true;

    // Check if the number is less than 2 (not prime)
    if ($num < 2) {
        $isPrime = false;
    } else {
        // Check for divisibility by numbers from 2 to the square root of the number
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    // If $isPrime is still true, the number is prime, so print it
    if ($isPrime) {
        echo $num . " ";
    }
}
echo "<br>";
echo "<h5>20.	Write a program that prints non-prime numbers from 90 to 12. </h5>";
echo"<br>";
// Loop from 90 to 12
for ($i = 90; $i >= 12; $i--) {
    $isPrime = true;

    // Check if the current number is divisible by any number other than 1 and itself
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }

    // If the number is not prime, print it
    if (!$isPrime) {
        echo $i . " "."\n";
    }
}
echo "<br>";
echo "<h5>question#21.Write a program that prints Fibonacci series, a series of numbers in which each number is the sum of the two preceding numbers. For example, 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, etc.</h5>";
function fibonacci($n) {
  $fib = [0, 1]; // Initialize the first two numbers in the series
  
  for ($i = 2; $i < $n; $i++) {
  // Calculate the next number by summing the two preceding numbers
  $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
  }
  
  return $fib;
  }
  
  // Print the Fibonacci series up to a certain number of terms
  $terms = 10; // Change this value to print more or fewer terms
  
  $fibonacciSeries = fibonacci($terms);
  
  foreach ($fibonacciSeries as $number) {
  echo $number . " ";
  }
  echo "<br>";
  echo "<h5>22.	Write a program that solves Quadratic Equations (print the value(s) of X or tell that it has imaginary solutions) using the formula:
 
    </h5>";
    echo "<br>";
    // Input coefficients
$a = 1;
$b = -3;
$c = 2;

// Calculate the discriminant
$discriminant = ($b * $b) - (4 * $a * $c);

// Check if the discriminant is positive, zero, or negative
if ($discriminant > 0) {
    // Two real solutions
    $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
    echo "The solutions are x1 = $x1 and x2 = $x2";
} elseif ($discriminant == 0) {
    // One real solution (a repeated root)
    $x1 = -$b / (2 * $a);
    echo "The solution is x1 = $x1";
} else {
    // Imaginary solutions
    $realPart = -$b / (2 * $a);
    $imaginaryPart = sqrt(-$discriminant) / (2 * $a);
    echo "The solutions are complex and are: ";
    echo "x1 = $realPart + {$imaginaryPart}i and x2 = $realPart - {$imaginaryPart}i";
}



?>