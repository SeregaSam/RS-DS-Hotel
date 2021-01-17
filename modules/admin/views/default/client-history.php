<?php

  use yii\widgets\LinkPager;
  use yii\helpers\Html;

  $this->title = 'История клиента';
?>
<div class="table-responsive">
  <table class="table table-sm">
    <thead>
      <th>Номер брони</th>
      <th>Приезд</th>
      <th>Отъезд</th>
      <th>Тип размещения</th>
      <th>Код</th>
    </thead>
    <tbody>
      <?php foreach ($books as $book): ?>
        <tr>
          <td><?= Html::encode($book['IdBookRoom']) ?></td>
          <td><?= Html::encode($book['ArrivalDate']) ?></td>
          <td><?= Html::encode($book['DepartDate']) ?></td>
          <td><?= Html::encode($book['GroupSize']) ?></td>
          <td><?= Html::encode($book['StatusCode']) ?></td>
        </tr> 
      <?php endforeach; ?>
    </tbody>
  </table>  
</div>

<div class="pagination-wrapper">
  
</div>
