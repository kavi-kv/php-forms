<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PHP Forms</title>
    <script src="script.js" defer></script>
</head>

<body>
    <main>
        <h2>Form Validtions</h2>
        <form action="form_handler.php" method="post" onsubmit=" return formValidtions()">

            <label for="firstname">Firsname?</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname?">

            <label for="Email">Email</label>
            <input type="text" id="email" name="email" placeholder="Email">

            <label for="message">Message</label>
            <input type="text" id="message" name="message" placeholder="Message">

            <label for="favorites">Favorite CIty</label>
            <select name="favoritecity" id="favoritecity">
                <option value="none">None</option>
                <option value="mugadishu">Mugadishu</option>
                <option value="kismayo">Kismayo</option>
                <option value="barawe">Barawe</option>
                <option value="hergeisa">Hergeisa</option>
            </select>

            <button type="submit" onclick="return confirm('Are you sure?')">Submit</button>

        </form>
    </main>
</body>

</html>