<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Kirim Pesan</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px;
    }
    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: none;
    }
    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<form action="index.php" method="post">
    <h2 style="text-align:center; margin-bottom: 20px;">Kirim Pesan</h2>
    <label for="target">Target :</label><br>
    <input type="text" name="target" id="target" required><br>
    <label for="pesan">Pesan :</label><br>
    <textarea name="pesan" id="pesan" rows="4" required></textarea><br>
    <button type="submit">Kirim</button>
</form>

</body>
</html>
