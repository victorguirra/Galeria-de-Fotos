<?php

include_once 'db_connect.php';

$consult = "SELECT * FROM photos";
$resultConsult = mysqli_query($connect, $consult) or die (mysqli_error($connect, $consult));

?>


<?php  
    
    while($data = mysqli_fetch_array($resultConsult)){
        
?>  

        <div class="cardImage">

            <h1><?php echo $data['titlePhoto']; ?></h1>

            <img src="Images/<?php echo $data['namePhoto'] ?>" class="imageGalery">

            <div class="wrapperButtons">

                <button class="buttonEdit">Editar<button>

                <button class="buttonDelete">Apagar<button>

            </div>

        </div>

<?php

    }   

?>
    

            


