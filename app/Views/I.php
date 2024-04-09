<!DOCTYPE html>
<html>

<head>
    <title>Posts</title>
</head>

<body>
    <h1>Posts</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <img src="<?php echo $post->download_url; ?>" alt="<?php echo $post->author; ?>">
                <h2>
                    <?php echo $post->author; ?>
                </h2>
                <p>
                    <?php echo $post->description; ?>
                </p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>