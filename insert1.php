<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics Insert</title>
</head>

<body>
    <form action="insert.php" method="post">
        <input type="text" id="name" name='name' placeholder="Name of character">
        <br />
        <input type="text" id="weapon" name='weapon' placeholder="Weapon of character">
        <br />
        <input type="number" id="studio_id" name='studio_id' placeholder="( 1 - 3)">
        <br />
        <button type="submit" id="submit">Submit</button>
        <br />
    </form>
</body>
</html>