<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>static/style.css">
    <title>CodeIgniter | Random Word Generator</title>
</head>
<body>
    <section>
        <div>
            <p>Random Word (attempt #<?= $this->session->userdata("counter") ?>)</p>
            <p class="random_word"><?= $this->session->userdata("random_word") ?></p>
            <a href="<?= base_url() ?>random/random_word">Generate</a>
        </div>
    </section>
</body>
</html>