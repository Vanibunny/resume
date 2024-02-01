<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
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
            color: #81689D;
            margin-right: 15px;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #1F2544;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #1F2544;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .edit-btn, .delete-button {
            background-color: #474F7A;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin: 5px; 
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            width: 80px;
            transition: background-color 0.3s ease-in-out;
        }

        .edit-btn:hover, .delete-button:hover {
            background-color: #F0B7A4;
        }

        td .edit-btn, td .delete-button{
            display: block;
            margin: 0 auto;
        }

    </style>
</head>
<body>
    <h1>These are my favorite movies</h1>
    <a href="<?= base_url('movies-create') ?>">Create</a>
    <a href="<?= base_url('movies-edit/1') ?>">Edit</a>
    <a href=<?= base_url("index") ?>>Back to home page</a>
    
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        <?php foreach($movies as $movie): ?>
            <tr>
                <td><?= $movie['title'] ?></td>
                <td><?= $movie['description'] ?></td>
                <td>
                    <a href="<?= base_url('movies-edit/') . $movie['id'] ?>">
                        <button class="edit-btn">Edit</button>
                    </a>
                    <form style="display:inline" action="<?= base_url('movies-delete/') . $movie['id'] ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this movie?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
