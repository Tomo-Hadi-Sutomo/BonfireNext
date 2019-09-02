<?php $this->extend('master') ?>

<?php $this->section('content') ?>

<div class="container">

    <br>

    <div class="jumbotron">
        <h1>Welcome to Bonfire</h1>

        <p class="lead">Your powerful web application kick-start based on CodeIgniter <?= \CodeIgniter\CodeIgniter::CI_VERSION ?></p>
    </div>

</div>

<div class="foot">
    <hr>

    <div class="container">

        <div class="row">
            <div class="col">
                CodeIgniter <?= \CodeIgniter\CodeIgniter::CI_VERSION ?>
            </div>
            <div class="col text-center">
                Environment: <?= ENVIRONMENT ?>
            </div>
            <div class="col text-right">
                Rendered in {elapsed_time} secs
            </div>
        </div>
    </div>
</div>

<?php $this->endSection() ?>
