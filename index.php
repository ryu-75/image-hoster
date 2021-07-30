<?php
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {

    $error = 1;

if ($_FILES['image']['size'] <= 3000000) {

    $imageInfo = pathinfo($_FILES['image']['name']);
    $imageExtension = $imageInfo['extension'];
    $extensionArray = [
        'png',
        'gif',
        'jpg',
        'jpeg   '
    ];

    if (in_array($imageExtension, $extensionArray)) {

        $address = 'uploads/'.time().rand().'.'.$imageExtension;

        move_uploaded_file($_FILES['image']['tmp_name'], $address);

        $error = 0;

        }
    }
} 
?>  

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
                text-align: center;
                
            }

            .image-link {
                display: flex;
                justify-content: center;
            }

            p {
                text-align: center;
            }

            @media screen and (max-width: 550px) {
                .image {
                    width: 300px
                }
            }

        </style>
    </head>
<body>
    <div class="container">
        <article>
            <h1 class="title">Image hoster</h1>

            <?php 

                if (isset($error) && $error == 0) {

                    echo '<div class="img-container">
                            <img class="image" src="'.$address.'" id="image" /><br />
                        </div>

                        <div class="image-link">
                            <input type="text" value="http://localhost/'.$address.'" />
                        </div>';
                }   
            ?>

            <form method="POST" action="index.php" enctype="multipart/form-data">
                <div>
                    <fieldset>
                            <input type="file" name="image" required>
                            <div class="button">
                                <button type="submit">Send</button>
                            </div>
                            <p>Supports format : JPEG, jpg, gif and png</p>
                            <p>Maximum sizes 3Mo</p>
                            <?php
                                    if (isset($error) && $error == 1) {
                                    echo "<p>Incorrect format</p>";
                                    }
                            ?>
                    </fieldset>
                </div>    
            </form>
        </article>
    </div>
</body>
</html>
