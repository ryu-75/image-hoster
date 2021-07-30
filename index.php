<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-viewport=width initial-scale=1.0">
        <link href="./css/style.css">
        <title>Image hoster</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

            body {
                font-family: 'Lato', sans-serif;
                width: 100%;
                background-color: rgba(86, 132, 160, 1);
                display: inline;
            }

            .title {
                text-align: center;
                text-decoration: underline;

            }


            form {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top : 15px
                
            }

            fieldset {
                border : 2mm ridge white;
                border-radius: 10px;
                color: black;
                background-color: white;
                box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.33)
            }

            input {
                display: flex;
                justify-content: center;
            }

            input, .button {
                margin-top: 15px
            }

            .button {
                display: flex;
                justify-content: center;
            }

            .image {
                max-width: 500px;
                display: inline;
                margin-top : 15px;
                margin-left: 12px;
                border : 2mm ridge white;
            }

            .img-container {
                display: flex;
                justify-content: center;
                
            }

        </style>
    </head>
<body>
    <div class="container">
        <h1 class="title">Image hoster</h1>
        <form method="POST" action="index.php" enctype="multipart/form-data">
            <div>
                <fieldset>
                        <input type="file" name="image" required>
                        <div class="button">
                            <button type="submit">Envoyer</button>
                        </div>
                </fieldset>
            </div>    
        </form>
    </div>
</body>
</html>
