<?php include_once 'partials/header.php' ?>

<div class="container pt-4 pb-5">

    <h1>KickOff Day 08</h1>

    <hr>

    <div class="row pt-4">
        <div class="col-md-8">
            <h3>Cookies</h3>
            <pre>
                <code class="lang-php">&lt;?php

<?php
    if (isset($_GET['add']) && $_GET['add'] == '1') {
echo 'setcookie(\'' . $_GET['key'] . '\', \''  . $_GET['value']. "'); // Ajout de la key en cookie\n";
    } elseif (isset($_GET['add']) && $_GET['add'] == '0') {
echo 'setcookie(\'' . $_GET['key'] . '\', \''  . $_GET['value']. "', time() + " . $_GET['time'] . "); // Ajout de la key en cookie pour " . $_GET['time'] . "second(s)\n";
    }
    if (isset($_GET['add'])) {
echo 'echo $_COOKIE[\'' . $_GET['key'] .  '\'] // ' . $_GET['value'];
    }
?>

                </code>
            </pre>

            <hr>
            <small>var_dump($_COOKIE);</small>
            <pre>
                <code class="text"><?= var_export($_COOKIE) ?></code>
            </pre>
            <a href="cookies/cookies_remove.php" class="btn btn-outline-danger btn-sm">Clean cookies</a>
        </div>
        <div class="col-md-4 session-form">
            <form action="cookies/cookies_add.php" method="post">
                <div class="form-group">
                    <label for="key">Key</label>
                    <input type="text" class="form-control" id="key" name="key" placeholder="Key" required>
                </div>
                <div class="form-group">
                    <label for="value">Value</label>
                    <input type="text" class="form-control" id="value" name="value" placeholder="Value" required>
                </div>
                <div class="form-group">
                    <label for="">Durée (en seconde)</label>
                    <input type="number" class="form-control" id="time" name="time" placeholder="Durée">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.container -->

<?php
include_once 'partials/footer.php';
