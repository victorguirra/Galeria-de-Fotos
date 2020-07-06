<?php

include_once 'db_connect.php';

$consult = "SELECT * FROM photos";
$resultConsult = mysqli_query($connect, $consult) or die (mysqli_error($connect, $consult));

?>


<?php  
    
    while($data = mysqli_fetch_array($resultConsult)){

?>

    <h1><?php echo $data['titlePhoto']?></h1>

    <img src="./images/<?php $data['namePhoto'] ?>"
<?php

    }

?>
    

            


