<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Recipe $model */

$this->title = 'Create Recipe';
$this->params['breadcrumbs'][] = ['label' => 'Recipes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recipe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'cats' => $cats,
        'kitchs' => $kitchs,
        'menus' => $menus,
    ]) ?>

</div>
