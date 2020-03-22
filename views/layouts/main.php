<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
    <div class="top-info d-none d-lg-block">
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

                <?php if (Yii::$app->user->isGuest) : ?>
                    <a class="btn -small" href="/site/login">
                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="2" height="5" fill="white"/>
                            <rect x="2" width="3" height="2" fill="white"/>
                            <rect x="6" y="8" width="5" height="1" fill="white"/>
                            <rect x="5" width="2" height="5" fill="white"/>
                            <mask id="path-5-inside-1" fill="white">
                            <rect x="4" y="5" width="9" height="7" rx="1"/>
                            </mask>
                            <rect x="4" y="5" width="9" height="7" rx="1" stroke="white" stroke-width="4" mask="url(#path-5-inside-1)"/>
                        </svg>
                        <span>Login</span>
                    </a>
                <?php else : ?>
                    <?=
                    Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php
    NavBar::begin([
        'brandLabel' => 'Creditstar',
        'brandUrl' => Yii::$app->homeUrl,
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
</header>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
