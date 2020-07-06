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

            a{
                text-decoration:none;
                color:#581b98;
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
                    
                    <a href="index.php">+</a>
            
                </button>

                <h1>Adicionar uma nova imagem</h1>

            </div>

        </div>

    </body>

</html>