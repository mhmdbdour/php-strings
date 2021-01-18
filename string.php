<?php 

// Upper / Lower / first upper / all first upper 
echo 'Q1';
 echo "<br>";
$Q1 = 'I am Mohammad Bdour, full stack web developer';
echo strtoupper($Q1);
echo "<br>";
echo strtolower($Q1);
echo "<br>";
echo ucfirst($Q1);
echo "<br>";
echo ucwords($Q1);
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";

// split string to specific chunks length with subString
echo 'Q2';
 echo "<br>";
 $Q2 = '082307';
echo substr(chunk_split($Q2, 2, ':'), 0, -1);
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";


// find if exist
echo 'Q3'; 
echo "<br>";
$Q3 = 'The quick brown fox jumps over the lazy dog';
if (strpos($Q3,'jumps')) 
 {
    echo 'yes its here';
 }
else
 {
    echo 'No its not';
 };
 echo "<br>";
 echo "-------------------------------------------------------";
 echo "<br>";


 // find and bring after specific word or character
echo 'Q4';
 echo "<br>";
 $Q4 = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($Q4, "/"), 1);
echo $file_name; 
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";


 // find and bring string before specific word or character
echo 'Q5';
 echo "<br>";
 $Q5  = 'Orange@example.com';
$user = strstr($Q5, '@', true);
echo $user;
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";

// subtract from a string and bring the sub (for the negative)
echo 'Q6';
 echo "<br>";
 $Q6  = 'Orange@example.com';
echo substr($Q6, -3);
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";


// shuffle a string randomly and bring fist specific length of it
echo 'Q7';
 echo "<br>";
 function password_generate($Num) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $Num);
}
  echo password_generate(7);
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";


// replace string with another with specific number of replacement
echo 'Q8';
echo "<br>";
$Q8 = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $Q8, 1); 
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";


// length of string before deferent character
echo 'Q9';
 echo "<br>";
 $Q9 = 'football';
$Q99 = 'footboll';
$Com = strspn($Q9 ^ $Q99, "\0");
echo"First difference between two strings at position $Com : \" $Q9[$Com] \" vs \" $Q99[$Com] \" ";
printf("\n");
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";


// convert string into array and print it 
echo 'Q10';
 echo "<br>";
$Q10 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$Arr = explode("\n", $Q10);
echo var_dump($Arr);
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";

// next letter of the last letter in a string
echo 'Q11';
 echo "<br>";
$Q11 = 'z';
$next_Q11 = ++$Q11; 
$len = strlen($next_Q11);
if ($len > 1) 
{
 $next_Q11 = $next_Q11[strlen($len)];
 }
echo $next_Q11;
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";


 // find and bring string after specific word or character
echo 'Q12';
 echo "<br>";
 $Q5  = 'Orange@example.com';
$user = substr(strstr($Q5, '@'),1);
echo $user;
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";


// insert a string at the specified position in a given string
echo 'Q13';
 echo "<br>";
$Q13 = 'The brown fox';
$Q13_insert ='quick';
$Q13_insert_pos = 4;
$Out = substr_replace($Q13, $Q13_insert.' ', $Q13_insert_pos, 0);
echo $Out;
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";

// get the first word of a sentence
echo 'Q14';
 echo "<br>";
$Q14 = 'The quick brown fox';
$Arr = explode(' ',trim($Q14));
echo $Arr[0];
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";

// remove all leading zeroes from a string
// trim string from left
echo 'Q15';
 echo "<br>";
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1;
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";

// trim inside a string (part of it)
echo 'Q16';
echo "<br>";
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str);
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";

// remove all  trailing slash from a string
// trim string from right
echo 'Q17';
 echo "<br>";
$my_str = 'The quick brown fox jumps over the lazy dog//';
echo rtrim($my_str, '/');
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";

// position of the last specified substring and bring after it 
echo 'Q18';
 echo "<br>";
$my_url = 'http://www.example.com/5478631';
echo substr($my_url, strrpos($my_url, '/' )+1);
echo "<br>";

// $file_name = substr(strrchr($my_url, "/"), 1);
// echo $file_name; 

echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";


echo 'Q19';
 echo "<br>";
$my_str = '"\1+2/32:2-3/43';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str);
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";

// bring specific words in an array 
echo 'Q20';
 echo "<br>";
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";

// replace and check if its a number or not
echo 'Q21';
 echo "<br>";
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x;
  }
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";

// print from a to z 
echo 'Q22';
 echo "<br>";
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n";
echo "<br>";
echo "-------------------------------------------------------";
echo "<br>";

