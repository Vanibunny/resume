<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movies</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #343a40;
            margin-bottom: 20px;
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
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 80%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #343a40;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        button {
            background-color: #474F7A;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #F0B7A4;
        }
    </style>
</head>

<body>
    <h1>Add Movies</h1>
        <a href=<?= base_url("movies") ?>>Movies</a>
        <a href=<?= base_url("index") ?>>Back to home page</a>

    <form method="post" action="<?= base_url('github/movies_store') ?>">
        <label for="title">Movies:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
