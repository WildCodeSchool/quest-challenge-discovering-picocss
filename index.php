<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discovering Pico</title>
    <link rel="stylesheet" href='https://unpkg.com/@picocss/pico@1.*/css/pico.min.css' />
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?php include '_header.php' ?>
    <main class="container">
        <hgroup>
            <h1>Journey into Pico.css</h1>
            <h2><a href='https://picocss.com/' target="_blank">https://picocss.com</a></h2>
        </hgroup>
        <section class="grid">
            <?php $contents = require_once __DIR__ . '/contents.php'; ?>
            <?php foreach ($contents as $content) : ?>
                <article>
                    <header>
                        <img src="<?= $content['img'] ?>" alt="image of <?= $content['title'] ?>">
                    </header>
                    <h1><?= $content['title'] ?></h1>
                    <p><?= $content['text'] ?></p>
                    <footer>
                        <a href='<?= $content['link'] ?>' role="button" target="_blank">
                            Read more
                        </a>
                    </footer>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
    <?php include '_footer.php' ?>
</body>

</html>