<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up Diamond</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 50px auto;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 100px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="radio"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            color: #ff0000;
        }

        li {
            margin-bottom: 5px;
        }

        h2 {
            color: #4caf50;
            text-align: center;
        }

        p {
            margin: 5px 0;
            text-align: center;
        }
    </style>

<script>
        function validateForm() {
            var username = document.forms["topUpForm"]["username"].value;
            var id = document.forms["topUpForm"]["id"].value;
            var jumlahDiamond = document.forms["topUpForm"]["jumlah_diamond"].value;

            var errors = [];

            if (username === "") {
                errors.push("Username is required");
            }

            if (id === "") {
                errors.push("ID is required");
            }

            if (jumlahDiamond === "") {
                errors.push("Jumlah Diamond is required");
            }

            if (errors.length > 0) {
                alert("Error:\n" + errors.join("\n"));
                return false;
            }

            return true;
        }
    </script>
</head>
<body>

    <h1>Top Up Diamond Mobile Legends</h1>
    <form method="get">
        <label for="username">Username:</label>
        <input type="text" name="username" required placeholder="Masukkan Username"><br>

        <label for="id">ID:</label>
        <input type="text" name="id" required placeholder="Masukkan User ID"><br>

        <label>Jumlah Diamond:</label>
        <input type="radio" name="jumlah_diamond" value="170"> 170 Diamonds | Rp.43.000<br>
        <input type="radio" name="jumlah_diamond" value="240"> 240 Diamonds | Rp.62.000<br>
        <input type="radio" name="jumlah_diamond" value="408"> 408 Diamonds | Rp.104.500<br>
        <input type="radio" name="jumlah_diamond" value="568"> 568 Diamonds | Rp.142.500<br>
        <input type="radio" name="jumlah_diamond" value="875"> 875 Diamonds | Rp.218.500<br>

        <input type="submit" value="Top Up">
    </form>
    
    <?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Validasi input
    $errors = array();

    // Validasi username
    if (empty($_GET["username"])) {
        $errors[] = "Username is required";
    }

    // Validasi ID
    if (empty($_GET["id"])) {
        $errors[] = "ID is required";
    }

    // Validasi jumlah diamond
    if (empty($_GET["jumlah_diamond"])) {
        $errors[] = "Jumlah Diamond is required";
    }

    // Jika ada error, tampilkan pesan error
    if (!empty($errors)) {
        echo "<h2>Error:</h2>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        // Jika tidak ada error, proses top up
        $username = $_GET["username"];
        $id = $_GET["id"];
        $jumlah_diamond = $_GET["jumlah_diamond"];

        // Lakukan proses top up sesuai kebutuhan
        // Misalnya, Anda bisa menyimpan data ini ke database atau melakukan operasi lainnya

        echo "<h2>Top Up Successful!</h2>";
        echo "<p>Username: $username</p>";
        echo "<p>ID: $id</p>";
        echo "<p>Jumlah Diamond: $jumlah_diamond Diamonds</p>";
    }
}
?>

</body>
</html>
