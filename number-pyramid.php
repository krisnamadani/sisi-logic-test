<form action="number-pyramid.php" method="post">
<input type="number" name="input" id="input" placeholder="Enter a number" required value="<?php if(isset($_POST['input'])) echo $_POST['input']; ?>">
<input type="submit" value="submit">
</form>

<?php

if(isset($_POST['input'])) {
    $input = $_POST['input'];
    
    if($input == "") {
        echo "Please enter a number";
        exit;
    } else if($input < 0) {
        echo "Please enter a positive number";
        exit;
    }

    for($i = 1; $i <= $input; $i++) {
        for($j = 1; $j <= $input-$i; $j++) {
        echo "&nbsp;&nbsp;";
      }
      
      for($j = 1; $j <= $i; $j++) {
          echo $j;
      }
      
      echo "<br>";
    }
} else {
    echo 'Enter a number';
}

?>