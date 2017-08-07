<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\models\Marketeer;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Email', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
       
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'id',
            'email_date:email',
            'email_recipient:email',
            'email_content:email',
            'email_template:email',
            'marketeer.fullName',
            
            /**'marketeer_id',**/
     /** [
        'attribute' => 'marketeer_id',
        'format' => 'full name',
        'value' => implode('<br/>', array_map(function($model){ return $model->fname . ' : ' . $model->lname;}, $model->Marketeer))
],**/

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
