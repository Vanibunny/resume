<html>
    <head>
    <title>Movies</title>
    </head>
    <body>
        <h1>These are my favorite movies</h1>
        <a href=<?=base_url('github') ?>>Index</a>
        <a href=<?=base_url('github/movies_edit') ?>>Edit</a>

        <form method="post" action="<?= base_url('github/movies_store') ?>">
            <label for="Movies">Movies:</label><br>
            <input type="text" id="title" name="title"><br>

            <label for="description">Description:</label><br>
            <textarea name="description" id="description"></textarea>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>