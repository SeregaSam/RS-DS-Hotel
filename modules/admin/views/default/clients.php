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
      <th>email</th>
      <th>История</th>
    </thead>
    <tbody>
      <?php foreach ($clients as $client): ?>
        <tr>
          <td><?= Html::encode($client['surname']) . ' ' . Html::encode($client['name']) . ' ' . Html::encode($client['patronymic']) ?></td>
          <td><?= Html::encode($client['gender']) ?></td>
          <td><?= Html::encode($client['email']) ?></td>
          <td><?= Html::a('история бронирования', ['default/client-history', 'id' => $client['id']]) ?></td>
        </tr> 
      <?php endforeach; ?>
    </tbody>
  </table>  
</div>

<div class="pagination-wrapper">
  <?= LinkPager::widget(['pagination' => $paginationClients]) ?>
</div>
