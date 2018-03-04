<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $model common\models\Peminjaman */
/* @var $form yii\widgets\ActiveForm */
$this->registerJs($this->render('_script.js'));
?>
<div class="row"></div>

  <div class="col-md-10">
        <div class="box box-primary">
           <div class="box-body">
              <div class="box-header with-border">
                  <h3 class="box-title">Form Peminjaman</h3>
              </div>
              <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'ID_PEMINJAM')->textInput([
                                    'value'=>Yii::$app->user->identity->username,
                                    'disabled' => 'readonly',
                                    ]) ?>

                <p><b>Ruang yang dipinjam</b></p>
                <table width="100%">
                  <tr>
                  <?php $data; ?>
                  <?php foreach ($ruang as $key => $s) {
                       if( $key%5 == 0){ echo '</tr><tr>';};
                    ?>
                    <td align="center">
                      <input type="checkbox" name="ruang[]" value=<?= $s['ID_RUANG'] ?>>
                    </td>
                    <td><?= 'Ruang '.$s['NAMA_RUANG']; ?>
                   <?php
                  }  ?></td>
                  </tr>
                </table>

                <?= $form->field($model, 'KEPERLUAN')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'TANGGAL_PINJAM')->widget(DatePicker::classname(), [
                                    'options' => ['placeholder' => 'Tanggal Ruang akan dipinjam', 'id' => 'pi-tanggal'],
                                    'pluginOptions' => [
                                        'autoclose'=>true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);

                                    ?>
                <p><b>Sesi yang dipinjam</b></p>
                <table width="100%">
                  <tr>
                  <?php $data; ?>
                  <?php foreach ($sesi as $key => $s) {
                       if( $key%5 == 0){ echo '</tr><tr>';};
                    ?>
                    <td align="center">
                      <input type="checkbox" name="sesi[]" value=<?= $s['ID_SESI'] ?>>
                    </td>
                    <td><?= 'Sesi '.$s['ID_SESI']; ?>
                   <?php
                  }  ?></td>
                  </tr>
                </table>

                <div class="alert alert-success alert-dismissible" id="inforuang" style="display:none">

                </div>

                <br><br>
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
          </div>
      </div>
  </div>


  <div class="col-md-2">
    <div class="box box-primary">
      <div class="box-body">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Sesi</h3>
        </div>
        <?php
              foreach ($sesi as $key => $s) {
                  echo '<b>Sesi '.$s['ID_SESI'].'</b><br>';
                  echo '&nbsp' . $s['SESI_MULAI'] . '-' . $s['SESI_SELESAI'] . '<br>';
              }
             ?>
      </div>
    </div>
  </div>

</div>
