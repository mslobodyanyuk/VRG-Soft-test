<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Answer';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>


    <p>STEP 4:</p>

    <p>
        Data successfully sent, feedbackDataId: <h1><?= Html::encode($feedbackDataId); ?></h1>
    </p>

    <p>
        Answer code #: <h1><?= Html::encode($answerCode); ?></h1>
    </p>

    <code><?= __FILE__ ?></code>
</div>