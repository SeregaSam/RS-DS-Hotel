<?php

  use yii\widgets\LinkPager;
  use yii\helpers\Html;

  $this->title = 'Номера';

  function renderStatus($status) {
    if($status) {
      $render = '<span class="room-free">свободен</span>';
    } else {
      $render = '<span class="room-book">забронирован</span>';
    }

    return $render;
  }
?>
<div class="table-responsive">
  <table class="table table-sm">
    <thead>
      <th>Номер комнаты</th>
      <th>Тип номера</th>
      <th>Цена</th>
      <th>Статус</th>
    </thead>
    <tbody>
      <?php foreach ($rooms as $room): ?>
        <tr>
          <td><?= Html::encode($room['roomNumber']) ?></td>
          <td><?= Html::encode($room['title']) ?></td>
          <td><?= Html::encode($room['price']) ?></td>
          <td><?= renderStatus($room['itsFree']) ?></td>
        </tr> 
      <?php endforeach; ?>
    </tbody>
  </table>  
</div>

<div class="pagination-wrapper">
  <?= LinkPager::widget(['pagination' => $paginationRooms]) ?>
</div>
