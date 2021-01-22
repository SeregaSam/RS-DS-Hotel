<?php

  use yii\widgets\LinkPager;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;

  $this->title = 'Брони';

  function renderStatusCode($statusCode, $idBook) {
    $aStatusCode = [
      'processing' => 'в обработке',
      'discard' => 'отменена',
      'accepted' => 'принята'
    ];

    if($statusCode == 'processing') {
      return '<span>' . $aStatusCode[$statusCode] . ' ' . Html::a('Отменить',['default/discard-book', 'id' => $idBook],['class' => 'btn btn-outline-danger btn-sm']) . ' ' . Html::a('Принять',['default/accept-book', 'id' => $idBook],['class' => 'btn btn-outline-success btn-sm']) . '</span>';
    }

    if($statusCode == 'discard') {
      return '<span class="discard-book">' . $aStatusCode[$statusCode] . '</span>';
    }

    if($statusCode == 'accepted') {
      return '<span class="accept-book">' . $aStatusCode[$statusCode] . '</span>';
    }
  }
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#createBookModal">Добавить бронь</button>
</div>

<div class="table-responsive">
  <table class="table table-sm">
    <thead>
      <th>Номер брони</th>
      <th>Приезд</th>
      <th>Отъезд</th>
      <th>Номер</th>
      <th>Сумма</th>
      <th>Статус брони</th>
    </thead>
    <tbody>
      <?php foreach ($books as $book): ?>
        <tr>
          <td><?= Html::encode($book['idBookRoom']) ?></td>
          <td><?= Html::encode($book['arrivalDate']) ?></td>
          <td><?= Html::encode($book['departDate']) ?></td>
          <td><?= Html::encode($book['roomNumber']) ?></td>
          <td><?= Html::encode($book['cost']) ?></td>
          <td><?= renderStatusCode(Html::encode($book['statusCode']), $book['idBookRoom']) ?></td>
        </tr> 
      <?php endforeach; ?>
    </tbody>
  </table>  
</div>

<div class="modal fade" id="createBookModal" tabindex="-1" role="dialog" aria-labelledby="addBookTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addBookTitle">Добавить бронь</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $form = ActiveForm::begin([
        'id' => 'book-form',
        ]) ?>

        <h5>Представьтесь</h5>

        <?= $form->field($client, 'name')->textInput(['placeholder' => 'Имя']); ?>

        <?= $form->field($client, 'surname')->textInput(['placeholder' => 'Фамилия']); ?>

        <?= $form->field($client, 'patronymic')->textInput(['placeholder' => 'Отчество']); ?>

        <?= $form->field($client, 'email')->textInput(['email', 'placeholder' => 'email']); ?>

        <h5>Тип номера</h5>

        <?= $form->field($bookRoomForm,'idCategory')->dropDownList(['1' => 'одноместный', '2' => 'двухместный', '3' => 'трехместный', '4' => 'люкс'], ['class' => 'c-form__input']); ?>

        <h5>Дата прибытия</h5>

        <?= $form->field($bookRoomForm,'arrivalDate')->input('date', ['class' => 'c-form__input'])->label(false); ?>

        <h5>Дата отъезда</h5>

        <?= $form->field($bookRoomForm,'departDate')->input('date', ['class' => 'c-form__input'])->label(false); ?>     

        <h5>Питание</h2>

      <?= $form->field($bookRoomForm,'foodType')->dropDownList(['1' => 'завтрак', '2' => 'полупансион', '3' => 'полный пансион'], ['class' => 'c-form__input'])->label(false); ?>

      <h2 class="c-form__caption">Дополнительные услуги</h2>

      <?=$form->field($bookRoomForm, 'internet')->checkbox();?>
      <?=$form->field($bookRoomForm, 'telephone')->checkbox();?>
      <?=$form->field($bookRoomForm, 'minibar')->checkbox();?>

      <?= Html::submitButton('Забронировать', ['class'=>'btn btn-outline-secondary'])?>
      

      <?php $form = ActiveForm::end()?>
      </div>
    </div>
  </div>
</div>

<div class="pagination-wrapper">
  
</div>