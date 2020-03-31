<?php

/* @var $this yii\web\View */

$this->title = 'Creditstar';
?>
<main class="main-content">

    <h1 class="title">All Users</h1>

    <?=
        \yii\widgets\LinkPager::widget([
            'pagination' => $dataProvider->getPagination(),
        ]);
    ?>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dataProvider->getModels() as $user) : ?>
            <tr class="">
                <td><?= $user->first_name . ' ' . $user->last_name ?></td>
                <td><?= $user->email ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</main>

<div class="d-flex mt-3">
    <button type="button" class="btn mr-2">
        <span>VAATAN SALDOSEISU</span>
    </button>
    <button type="button" class="btn -red mr-2">
        <span>VAATAN SALDOSEISU</span>
    </button>
    <button type="button" class="btn -red">
        <span>VAATAN SALDOSEISU</span>
    </button>
</div>