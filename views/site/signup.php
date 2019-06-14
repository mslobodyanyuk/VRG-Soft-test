<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\SignupForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registration';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="../../css/smart_wizard.css" rel="stylesheet"/>
    <link href="../../css/smart_wizard_theme_arrows.css" rel="stylesheet"/>
</head>

<body>
<div class="container mt-5 mb-5">
    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
    <div id="stepwizard">
        <ul>
            <li><a href="#step1">STEP 1:<br/>Enter the Name, Surname and Phone</a></li>
            <li><a href="#step2">STEP 2:<br/>Enter the Address</a></li>
            <li><a href="#step3">STEP 3:<br/>Enter the Comment</a></li>
        </ul>
        <div>
            <div id="step1">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'surname') ?>
                <?= $form->field($model, 'phone') ?>
            </div>
            <div id="step2">
                <?= $form->field($model, 'street') ?>
                <?= $form->field($model, 'house') ?>
                <?= $form->field($model, 'city') ?>
            </div>
            <div id="step3">
                <?= $form->field($model, 'comment') ?>
                <div class="form-group">
                    <?= Html::submitButton('REGISTRATE', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="../../js/jquery.smartWizard.js"></script>
<script>
    $('#stepwizard').smartWizard({
        theme: 'arrows',
        transitionEffect: 'fade',
        transitionSpeed: '400'
    });
</script>
</body>
</html>