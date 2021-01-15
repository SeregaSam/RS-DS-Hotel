<?php
  use yii\widgets\LinkPager;

  $this->title = 'Номера';
?>

<div class="table-responsive">
  <table class="table table-sm">
    <thead>
      <th>Номер комнаты</th>
      <th>Тип номера</th>
      <th>Цена</th>
    </thead>
    <tbody>
      <?php  foreach ($rooms as $room): ?>
        <tr>
          <td><?= $room['RoomNumber'] ?></td>
          <td><?= $room['Name'] ?></td>
          <td><?= $room['Cost'] ?></td>
        </tr> 
      <?php endforeach; ?>
    </tbody>
  </table>  
</div>

<div class="pagination-wrapper">
  <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>
