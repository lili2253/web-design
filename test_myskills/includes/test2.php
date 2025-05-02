<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        &amp;
        <form action="includes\test2.php" method="post">
            <label for="firstname">Firstname?</label><br>
            <input id="firstname" type="text" name="firstname" placeholder="enter the first name">

            <label for="lastname">lastname?</label><br>
            <input id="lastname" type="text" name="lastname" placeholder="enter the last name">

            <label for ="favouritepet">Favourite Pet</label><br>
            <select id="favouritepet" name="favouritpet" placeholder="None">
                <potion value="none">None</potion>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit" name="submit">Submit</button>
        </form>
    </main>
</body>
</html>