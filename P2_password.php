 <?php       

    $number_of_words = 3;

    $symbolsArray = array("$","%","^","&","*","!","@","#");

    # Array of words
    function get_words($numWords){
      $words = array("Ken", "Tom", "Katy", "Dan", "Johnson", "Andy", "Eugene", "Bobby", "Simon");

      shuffle($words);

      if(isset($_POST['add_uppercase'])) {
        $words[0] = strtoupper($words[0]);
      }
      if(isset($_POST['add_lowercase'])) {
        $words[2] = strtolower($words[2]);
      }

       return array_slice($words, 0, $numWords);
    }

    function generate_password($wordsArray, $symbolsArray, $hasNumber, $hasSymbol) {

      $password = join("-", $wordsArray);

      if($hasNumber){
        $password = $password . rand(0,9);
      }
      if($hasSymbol){
        $randomIndex = rand(0, count($symbolsArray) - 1 );
        $password = $password . $symbolsArray[$randomIndex];
      }
      return $password;
    }

if(isset($_POST['number_of_words'])) {
  $number_of_words = $_POST['number_of_words'];
}

$addNumber = isset($_POST['add_number']);
$addSymbol = isset($_POST['add_symbol']);

$password = generate_password(get_words($number_of_words),$symbolsArray, $addNumber, $addSymbol);

?>