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
            background-color: #1f363d;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .edit-btn {
            background-color: #40798c;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .edit-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>This is the blog index</h1>
    <a href="<?= base_url('blog/create') ?>">Create</a>
    <a href="<?= base_url('blog/edit/1') ?>">Edit</a>

    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        <?php foreach($blogs as $blog): ?>
            <tr>
                <td><?= $blog['blog_title'] ?></td>
                <td><?= $blog['blog_description'] ?></td>
                <td>
                    <a href="<?= base_url('blog/edit/') . $blog['blog_id'] ?>">
                        <button class="edit-btn">Edit</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
