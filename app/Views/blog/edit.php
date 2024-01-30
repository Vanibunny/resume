<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }

        h1 {
            color: #343a40;
        }

        a {
            text-decoration: none;
            color: #007bff;
            margin-right: 15px;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #0056b3;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #343a40;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #40798c; 
            color: white;
            border: none;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #0056b3; /* Darker blue color */
        }
    </style>
</head>
<body>
    <h1>This is the blog edit</h1>
    <a href="<?= base_url('blog') ?>">Index</a>
    <a href="<?= base_url('blog/create') ?>">Create</a>

    <form method="post" action="<?= base_url('blog/update/') . $qwerty["blog_id"]?>">
        <label for="blog_title">Blog Title:</label><br>
        <input type="text" id="blog_title" name="blog_title" value="<?= $qwerty["blog_title"] ?>"><br>

        <label for="blog_description">Blog Description:</label><br>
        <textarea name="blog_description" id="blog_description"><?= $qwerty["blog_description"] ?></textarea>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
