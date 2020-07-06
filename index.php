<html>

    <head>

        <meta charset="UTF-8">
        <Title>Minha Galeria</Title>
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

            header{
                background-color:#581b98;
                color:#fff;
                display:flex;
                flex-direction:row;
                align-items:center;
                justify-content:center;
                padding:20px;
            }

            #galleryIcon{
                width:70px;
                height:70px;
                margin-left:25px;
            }

            #wrapperAddNewImage{
                display:flex;
                align-items:center;
                justify-content:center;
                margin-top:30px;
            }

            #AlignButtonAndTextButton{
                display:flex;
                flex-direction:row;
                align-items:center;
                justify-content:center;
                padding:5px;
            }

            #buttonAddNewImage{
                background-color:#83e85a;
                font-size:100px;
                border:none;
                width:100px;
                height:100px;
                border-radius:50px;
                margin-right:30px;
                display:flex;
                align-items:center;
                justify-content:center;
                cursor:pointer;
                transition:0.5s;
            }

            #buttonAddNewImage:hover{
                background-color:#13a856;
            }

            #aButtonAdd{
                text-decoration:none;
                color:#581b98;
            }

            .wrapperGalery{
                display:flex;
                align-items:center;
                justify-content:center;
                margin-top:20px;
            }

            .wrapperImages{
                width:80%;
                display:flex;
                flex-direction:row;
                flex-wrap:wrap;
                justify-content:space-around;
            }
            
            .cardImage{
                border:3px solid #581b98;
                border-radius:10px;
                width:30%;
                padding:30px 0;
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center;
                margin-top:15px;
                margin-bottom:15px;
                flex-wrap:wrap;
            }

            .imageGalery{
                width:250px;
                height:250px;
                border-radius:10px;
                margin-top:10px;
            }

            .wrapperButtons{
                display:flex;
                flex-direction:row;
                align-items:center;
                justify-content:center;
                width:70%;
                margin-top:15px;
            }

            .buttonEdit{
                border:none;
                background-color:#40514e;
                color:#fff;
                padding:10px 0;
                width:45%;
                border-radius:7px;
                cursor:pointer;
                transition:0.4s;
            }

            .buttonEdit:hover{
                background-color:#1e2121
            }

            .buttonDelete{
                border:none;
                background-color:#db0404;
                color:#fff;
                padding:10px 0;
                width:45%;
                border-radius:7px;
                cursor:pointer;
                transition:0.4s;
            }

            .buttonDelete:hover{
                background-color:#c94e4e;
            }

            a{
                text-decoration:none;
                color:#fff;
            }
   
        </style>

    </head>

    <body>

        <Header>

            <h1>Minha Galeria</h1>

            <img src="gallery.png" alt="Ícone Galeria" id="galleryIcon">

        </Header>

        <div id="wrapperAddNewImage">

            <div id="AlignButtonAndTextButton"> 

                <button type="button" id="buttonAddNewImage">
                    
                    <a href="addNewImage.php" id="aButtonAdd">+</a>
            
                </button>

                <h1>Adicionar uma nova imagem</h1>

            </div>

        </div>

        <div class="wrapperGalery">

            <div class="wrapperImages">

                <?php

                    include_once 'showDataFromDB.php';
                        
                ?>

            </div>

        </div>

    </body>

</html>