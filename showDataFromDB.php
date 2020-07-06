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

            <div class="wrapperButtons" method="POST">

                <button class="buttonEdit">
                
                    <a href="edit.php?id=<?php echo $data['id'] ?>">Editar</a>
                    
                <button>

                <button class="buttonDelete">
                
                    <a href="delete.php?id=<?php echo $data['id']?>">Apagar</a>
                    
                <button>

            </div>

        </div>

<?php

    }       

?>
    

            


