<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-viewport=width initial-scale=1.0">
        <link href="./css">
        <title>Image hoster</title>
    </head>
<body>
    <h1>Image hoster</h1>
    <form method="POST" action="uploads/" enctype="multipart/form-data">
        <fieldset>
            <legend>Your form</legend>

                <label for="firstname">Prénom :
                    <input type="text" id="firstname" name="firsname"><br />
                </label>

                <label for="lastname">Nom : 
                    <input type="text" id="lastname" name="lastname"><br />
                </label>

                <input type="file" name="image">
        </fieldset>
    </form>
</body>
</html>
