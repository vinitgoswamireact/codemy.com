<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>


    <h1 style="text-align:center;">
    <?php
    // math operrator

    // $num_1 = 40;
    // echo $num_1;
    // echo "<br />";
    // $num_1--;

    // comparision
    /*
    == equal to
    < greater then
    > less then
    <= greater then and equal to
    >= less then and equal to
    */

    // $num_1 = 41;
    // $num_2 = 4;
    // var_dump($num_1 <= $num_2);

    // array & array associative
  //   $family_1 = array(
  //     "aarti",
  //     "ridhvi",
  //     "vinit",
  //   );
  //   $pizza_string = " favourite pizza is ";
  //   $next_line = "<br />";
  //   $family_2 = array(
  //     $family_1[0] => "corn",
  //    $family_1[1] => "capsicum",
  //    $family_1[2] => "onion"
  //   );
  // echo $family_1[0] . $pizza_string .  $family_2[$family_1[0]] . $next_line;
  // echo $family_1[1] . $pizza_string .  $family_2[$family_1[1]] . $next_line;
  // echo $family_1[2] . $pizza_string .  $family_2[$family_1[2]] . $next_line;
  // echo count($family_1 + $family_2 );

  //  mumeric array

//  echo $family_1[ count( $family_1 ) - 3 ];


// while loop
// $counter = 0;
// while( $counter <= 10 ){
//   echo "The count is : $counter <br />";
//   $counter++;
// };


// for loop

// for ( $counter = 0; $counter <= 10; $counter++ ) {
//   echo  "$counter <br />";
// }

// for each loop
$fav_pizza = array( "corn", "onion", "capsicum" );
$names = array( "aarti", "vinit", "ridhvi" );
$work = array( "saloon", "web dev", "school" );

/*
echo "==== for loop ==== <br />";
for ($count=0; $count < count( $names ) ; $count++) {
  echo " $names[$count]'s fav pizza is $fav_pizza[$count] and they are in $work[$count] <br /> ";
};

echo "==== while loop ==== <br />";
$count = 0;
while ($count < count($names)) {
  echo " $names[$count]'s fav pizza is $fav_pizza[$count] and they are in $work[$count] <br /> ";
  $count++;
}

echo "==== for loop ==== <br />";

foreach ($names as $key => $value ) {
  echo " $names[$key]'s fav pizza is $fav_pizza[$key] and they are in $work[$key] <br /> ";
};


echo "==== basic function ==== <br />";

function myfunction ( $value1, $value2 ) {
  return $value1 . " " . $value2;
};

echo myfunction("aarti", "vinit");

echo " <br /> ==== random function ==== <br />";

echo rand();
echo " <br />";
echo rand(0,100);
echo " <br />";
echo mt_rand(0,100);
echo " <br />";
echo $names[mt_rand(0,2)];


echo " <br />";

echo "Guess The  number <br />";
$num = 4;
$rand_num = mt_rand(0,10);
if ( $num == $rand_num ) {
  echo "You win $num = $rand_num";
} else {
  echo "You Loose $num = $rand_num";
}


echo " <br /> ==== date function ==== <br />";

echo date("m / d / Y h:i UTC +5:30");


echo " <br /> ==== string rplace ==== <br />";

$my_str = "i am a php developer";
echo "$my_str <br />";
echo str_replace( "php", "JS", $my_str );

echo " <br /> ==== string mannipulation ==== <br />";

// All Upercase
echo mb_strtoupper($my_str);
echo "<br />";
// All Lowercase
echo mb_strtolower($my_str);
echo "<br />";
// Capitalize
echo ucwords($my_str);
echo "<br />";
// First Word Capitalize
echo ucfirst($my_str);
echo "<br />";
// sting length
echo strlen($my_str);
echo "<br />";
// sting shuffle
echo str_shuffle($my_str);

// include funtion
include( "incfile.php" ); // o u can put this before html tag start
echo "Copyright &copy; " . date("Y") . " All Rights Reservered By " . $company_name . " " . $tag_line;

*/

// navbar
include( "incfile.php" );
include( "navbar.php" );




















     ?>
    </h1>




<!-- footer -->
<div class="">
  <?php include( "footer.php" ); ?>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>
