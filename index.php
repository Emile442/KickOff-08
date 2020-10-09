<?php require_once 'partials/header.php'; ?>

<div class="container pt-4">
    <h1>KickOff Day 08</h1>


    <div class="row pt-5">
        <div class="col-md-6">
            <h3>$_SESSION</h3>
            <pre>
                <code class="text"><?= isset($_SESSION) ? var_export($_SESSION) : var_export([]) ?></code>
            </pre>
        </div>
        <div class="col-md-6">
            <h3>$_COOKIE</h3>
            <pre>
                <code class="text"><?= isset($_COOKIE) ? var_export($_COOKIE) : var_export([]) ?></code>
            </pre>
        </div>
    </div>

</div>

<?php require_once 'partials/footer.php'; ?>
