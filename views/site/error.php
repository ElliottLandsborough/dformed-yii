<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="container content">
    <div class="row-fluid about">
        <div class="span8">
            <div class="">

                <h1><?= Html::encode($this->title) ?></h1>

                <p class="">
                    <?= nl2br(Html::encode($message)) ?>
                </p>

                <p>
                    The above error occurred while the Web server was processing your request.
                </p>
                <p>
                    Please contact us if you think this is a server error. Thank you.
                </p>

            </div>
        </div>
        <div class="span4 aboutright">
            <?php require __DIR__ . '/../boxes/bigcircle.php'; ?>
        </div>
    </div>
</div>
