<?php include_once 'partials/header.php' ?>

<?php
session_start();
?>


<div class="container pt-4 pb-5">

    <h1>KickOff Day 08</h1>

    <hr>

    <div class="row pt-4">
        <div class="col-md-8">
            <h3>Session</h3>
            <pre>
                <code class="lang-php">&lt;?php

session_start();
echo session_id(); // <?= session_id() ?>

<?php
    if (isset($_GET['add'])) {
echo "\n" . '$_SESSION[\'' . $_GET['key'] . '\'] = \'' . $_GET['value'] . "' // Ajout de la key à la session\n\n";
echo 'echo $_SESSION[\'' . $_GET['key'] .  '\'] // ' . $_GET['value'];
    }
?>

                </code>
            </pre>

            <hr>
            <small>var_dump($_SESSION);</small>
            <pre>
                <code class="text"><?= var_export($_SESSION) ?></code>
            </pre>
            <a href="session/session_remove.php" class="btn btn-outline-danger btn-sm">Clean session</a>
        </div>
        <div class="col-md-4 session-form">
            <form action="session/session_add.php" method="post">
                <div class="form-group">
                    <label for="key">Key</label>
                    <input type="text" class="form-control" id="key" name="key" placeholder="Key" required>
                </div>
                <div class="form-group">
                    <label for="value">Value</label>
                    <input type="text" class="form-control" id="value" name="value" placeholder="Value" required>
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
