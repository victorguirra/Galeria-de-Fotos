<?php

include_once 'db_connect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM photos WHERE id = $id ";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($result); 
}
?>

<html>

    <head>

        <meta charset="UTF-8">
        <Title>Deletar Arquivo</Title>
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <style>

            *{
                padding:0;
                margin:0;
                box-sizing:border-box;
            }

            body{
                font-family:'Oswald', sans-serif;
            }

            .wrapper{
                width:100%;
                height:100vh;
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center;
            }

            form{
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                width:25%;
            }

            #wrapperButtons{
                display:flex;
                flex-direction:row;
                align-items:center;
                justify-content:space-around;
                width:100%;
                margin-top:30px;
                margin-bottom:30px;
            }

            #yesButton{
                border:none;
                padding:15px 0;
                width:45%;
                background-color:#0da574;
                color:#fff;
                border-radius:7px;
                cursor:pointer;
                transition:0.4s;
            }

            #yesButton:hover{
                background-color:#0da54a;
                padding:20px 0;
            }

            #noButton{
                border:none;
                padding:15px 0;
                width:45%;
                background-color:#ff304f;
                border-radius:7px;
                cursor:pointer;
                transition:0.5s;
            }

            #noButton:hover{
                background-color:#fa2d7c;
                padding:20px 0;
            }

            a{
                text-decoration:none;
                color:#fff;
            }

            .backToIndex{
                border:none;
                padding:15px 0;
                width:80%;
                background-color:#581b98;
                border-radius:7px;
                cursor:pointer;
                transition:0.5s;
                margin-top:15px;
            }

            .backToIndex:hover{
                background-color:#233296;
            }

        </style>

    </head>

    <body>

        <div class="wrapper">

            <h1>Tem Certeza que Deseja deletar o arquivo?</h1>

            <form action="delete.php" method="POST">

                <div id="wrapperButtons">

                    <button type="submit" id="yesButton" name="deleteFile">Sim</button>

                    <button type="submit" id="noButton">
                    
                        <a href="index.php">Não</a>
                    
                    </button>

                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

                </div>

                <?php

                    include_once 'db_connect.php';

                    if(isset($_POST['deleteFile'])){
                            
                        $id = $_POST['id'];
                        $sql = "DELETE FROM photos WHERE id = $id";

                        if(mysqli_query($connect, $sql)){
                            echo "Arquivo Apagado com Sucesso";
                        ?>

                        <button class="backToIndex">
                            
                            <a href="index.php">Voltar para a Galeria</a>        

                        <button>

                        <?php
                                
                        }else{
                            echo "Falha ao Apagar o Arquivo!";
                        ?>

                        <button class="backToIndex">
                            
                            <a href="index.php">Voltar para a Galeria</a>        

                        <button>
                        
                        <?php

                        }
                    }
                ?>

            </form>

        </div>

    </body>

</html>
