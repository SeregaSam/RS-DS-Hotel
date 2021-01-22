<?php

  use yii\widgets\LinkPager;
  use yii\helpers\Html;

  $this->title = 'История клиента';

  function renderStatusCode($statusCode) {
    $aStatusCode = [
      'processing' => 'в обработке',
      'discard' => 'отменена',
      'accepted' => 'принята'
    ];

    return '<span>' . $aStatusCode[$statusCode] . '</span>';
  }
?>
<div class="table-responsive">
  <table class="table table-sm">
    <thead>
      <th>Номер брони</th>
      <th>Приезд</th>
      <th>Отъезд</th>
      <th>Статус брони</th>
      <th>Цена</th>
    </thead>
    <tbody>
      <?php foreach ($books as $book): ?>
        <tr>
          <td><?= Html::encode($book['idBookRoom']) ?></td>
          <td><?= Html::encode($book['arrivalDate']) ?></td>
          <td><?= Html::encode($book['departDate']) ?></td>
          <td><?= renderStatusCode(Html::encode($book['statusCode'])) ?></td>
          <td><?= Html::encode($book['cost']) ?></td>
        </tr> 
      <?php endforeach; ?>
    </tbody>
  </table>  
</div>

<div class="pagination-wrapper">
  
</div>
