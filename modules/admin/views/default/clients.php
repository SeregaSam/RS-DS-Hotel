<?php

  use yii\widgets\LinkPager;
  use yii\helpers\Html;

  $this->title = 'Клиенты';
?>
<div class="table-responsive">
  <table class="table table-sm">
    <thead>
      <th>Фамилия, имя, отчество</th>
      <th>Пол</th>
      <th>История</th>
    </thead>
    <tbody>
      <?php foreach ($clients as $client): ?>
        <tr>
          <td><?= Html::encode($client['Surname']) . ' ' . Html::encode($client['Name']) . ' ' . Html::encode($client['Patronymic']) ?></td>
          <td><?= Html::encode($client['Gender']) ?></td>
          <td><?= Html::a('история бронирования', ['default/client-history', 'id' => $client['IdClient']]) ?></td>
        </tr> 
      <?php endforeach; ?>
    </tbody>
  </table>  
</div>

<div class="pagination-wrapper">
  <?= LinkPager::widget(['pagination' => $paginationClients]) ?>
</div>
