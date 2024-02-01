<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            color: #343a40;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        a {
            text-decoration: none;
            color: #81689D;
            margin-right: 15px;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #1F2544;
        }

        form {
            max-width: 500px;
            width: 500%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #343a40;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #474F7A; 
            color: white;
            border: none;
            padding: 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            border-radius: 4px;
        }

        button:hover {
            background-color: #F0B7A4;
        }
    </style>
</head>
<body>
    <h1>Edit Data</h1>
    <a href="<?= base_url("movies") ?>">Movies</a>
    <a href="<?= base_url("index") ?>">Back to Home Page</a>

    <form method="post" action="<?= base_url('movies_update/') . $qwerty["id"]?>">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?= $qwerty["title"] ?>">

        <label for="description">Description:</label>
        <textarea name="description" id="description"><?= $qwerty["description"] ?></textarea>

        <button type="submit">Update</button>
    </form>
</body>
</html>
