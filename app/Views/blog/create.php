<html>
    <head>
    <title>Blog</title>
    </head>
    <body>
        <h1>This is the blog create</h1>
        <a href=<?=base_url('blog') ?>>Index</a>
        <a href=<?=base_url('blog/edit') ?>>Edit</a>

        <form method="post" action="<?= base_url('blog/store') ?>">
            <label for="blog_title">Blog Title:</label><br>
            <input type="text" id="blog_title" name="blog_title"><br>

            <label for="blog_description">Blog Description:</label><br>
            <textarea name="blog_description" id="blog_description"></textarea>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>