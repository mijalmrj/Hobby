<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My House</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="header">
        <img src="Images/Mijal Maharjan.png" alt="Logo" class="logo">
        <nav class="horizontal-menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="my study subjects.html">My Study Subject</a></li>
                <li><a href="my hobbies.html">My Hobbies</a></li>
                <li><a href="my music.html">My Music</a></li>
                <li><a href="my house.php">My House</a></li>
            </ul>
        </nav>
    </header>

    <main style="justify-content: center; display: flex; ">
    <?php
$houseInfo = array(
    "Bedrooms" => 4,
    "Bathrooms" => 2,
    "Address" => "420 Ktm St"
);

echo "<table class='tg' border='1'>";
echo "<tr><th class='tg-head'>Context</th><th class='tg-head'>Value</th></tr>";
foreach ($houseInfo as $attribute => $value) {
    echo "<tr><td class='tg-fuxe'>$attribute</td><td class='tg-fuxe'>$value</td></tr>";
}
echo "</table>";
?>
    </main>


    <footer style="position: absolute;">
        <div class="contact-info">
            <p>Email: K210844@student.kent.edu.au</p>
            <p>Phone: +6123456789</p>
            <p>Social: <a href="https://steamcommunity.com/profiles/76561198415213032/">MIZ</a></p>
        </div>
        <p>&copy; 2024 Mijal Maharjan</p>
    </footer>
</body>

</html>