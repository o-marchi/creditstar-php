<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="main-header">
    <div class="top-info d-none d-sm-block">
        <div class="container">
            <div>
                <p>Klienditeenindus</p>

                <div class="item">
                    <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="10" height="12" rx="0.5" stroke="white"/>
                        <circle cx="5.5" cy="9.5" r="0.5" fill="white"/>
                        <circle cx="5.5" cy="9.5" r="1.5" fill="white" fill-opacity="0.2"/>
                    </svg>
                    <span>
                        1715
                    </span>
                </div>
                <div class="item">
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="6.5" cy="6.5" r="6" stroke="white"/>
                        <line x1="6.5" y1="3" x2="6.5" y2="7" stroke="white"/>
                        <line x1="9" y1="6.5" x2="6" y2="6.5" stroke="white"/>
                    </svg>
                    <span>
                        E-P 9.00-21.00
                    </span>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md">
        <div class="container">

            <a class="navbar-brand" href="<?= Url::home() ?>">
                <?= Html::img('@web/images/creditstar.png') ?>
            </a>

            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#w0-collapse" aria-controls="w0-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="w0-collapse" class="navbar-collapse collapse" style="">
                <ul id="w1" class="navbar-nav navbar-right nav">

                    <?php
                    $creditstar_links = [
                        'About Us' => 'https://www.creditstar.com/about',
                        'Core Values' => 'https://www.creditstar.com/about',
                        'Carrers' => 'https://www.creditstar.com/carrers'
                    ];
                    ?>

                    <?php foreach($creditstar_links as $label => $link): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link ?>" target="_blank">
                            <span><?= $label ?></span>

                            <svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L3.5 4L1 7" stroke="#FDA157" stroke-width="2"/>
                            </svg>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="sub-nav">
        <div class="container">
            <a href="">My actions</a>
            <a href="">Loans</a>
            <a href="">Users</a>
        </div>
    </nav>
</header>

<div class="container">
    <?= Alert::widget() ?>
    <?= $content ?>
</main>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
