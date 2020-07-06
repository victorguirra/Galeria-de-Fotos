
<html>

    <head>

        <Meta charset="UTF-8">
        <Title>Galeria de Fotos</Title>
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
            }

            #title{
                color:#071e3d;
                margin-top:15px;
    
            }

            .wrapper-form{
                background-color:#071e3d;
                color:#fff;
                width:40%;
                display:flex;
                flex-direction:column;
                align-items:center;
                padding:20px 0;
                margin-top:10px;
                border-radius:20px;
            }

            form{
                display:flex;
                flex-direction:column;
                align-items:center;
                width:70%;
            }

            .form-group{
                display:flex;
                flex-direction:column;
                width:60%;
            }

            #inputImageTitle{
                background-color:transparent;
                border:2px solid #22d1ee;
                color:#22d1ee;
                width:100%;
                padding:7px 10px;
                border-radius:10px;
            }

            #inputImageTitle:focus{
                border:2px solid #a7ff83;
                padding:10px;
            }

            #selectFilesInput{
                border:2px solid #22d1ee;
                padding:7px 10px;
                border-radius:10px;
                width:100%;
            }

            label{
                margin-top:15px;
                margin-bottom:5px;
            }

            #buttonSendFiles{
                border:none;
                background-color:#22d1ee;
                padding:10px;
                border-top-left-radius:15px;
                border-bottom-right-radius:15px;
                margin-top:30px;
                width:60%;
                cursor:pointer;
                transition:0.6s;
            }

            #buttonSendFiles:hover{
                background-color:#a7ff83;
            }

            .erros-php{
                color:#ff1493;
                margin-top:15px;
                font-size:25px;
            }

        </style>

    </head>

    <body>

        <div class="wrapper">

            <h2 id="title">Galeria de Fotos</h2>

            <div class="wrapper-form">

                <h2>Adicione uma nova foto a sua galeria</h2>

                <form action="index.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">

                        <Label for="inputImageTitle">Título da Foto:</Label>
                        <input type="text" name="imageTitle" id="inputImageTitle" required>

                    </div>

                    <div class="form-group">

                        <label for="selectFilesInput">Escolha a sua foto:</label>
                        <input type="file" name="selectFilesInput" id="selectFilesInput" required>

                    </div>

                    <div class="erros-php">

                        <?php
                            include_once 'uploadFiles.php';
                        ?>

                    </div>

                    <button type="submit" name="buttonSendFiles" id="buttonSendFiles">Adicionar Foto</button>

                </form>

            </div>

        </div>

    </body>

</html>