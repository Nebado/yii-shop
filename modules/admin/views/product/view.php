<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Product', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= $model->name; ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php $img = $model->getImage(); ?>
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            // 'category_id',
            [
                'attribute' => 'category_id',
                'value' => $model->category->name ? $model->category->name : "Self category",
            ],
            'name',
            'content:html',
            'price',
            'keywords',
            'description',
            [
                'attribute' => 'image',
                'value' => "<img src='{$img->getUrl()}'>",
                'format' => 'html'
            ],
            [
                'attribute' => 'hit',
                'value' => !$model->hit ? '<span class="text-danger">No</span>' : '<span class="text-success">Yes</span>',
                'format' => 'html',
            ],
            [
                'attribute' => 'new',
                'value' => !$model->new ? '<span class="text-danger">No</span>' : '<span class="text-success">Yes</span>',
                'format' => 'html',                
            ],
            [
                'attribute' => 'sale',
                'value' => !$model->sale ? '<span class="text-danger">No</span>' : '<span class="text-success">Yes</span>',
                'format' => 'html',                
            ],
        ],
    ]) ?>


</div>
