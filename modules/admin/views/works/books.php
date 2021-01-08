<table border="1">
  <tr>
  <caption></caption>
  
    <th>Номер брони</th>
    <th>Постоялец</th>
    <th>Приезд</th>
    <th>Отъезд</th>
    <th>Тип размещения</th>
    <th>Код</th>
    
    
  </tr>
  
  <?php $bcksp = ' ';
  foreach ($Hotbooks as $NRoom){?>
      <tr><td><?php echo $NRoom['IdBookRoom'] ?></td><td><?php echo $NRoom['Surname'],$bcksp,$NRoom['Name'],$bcksp,$NRoom['Partonymic'] ?><td><?php echo $NRoom['ArrivalDate'] ?>
      <td><?php echo $NRoom['DepartDate'] ?></td><td><?php echo $NRoom['GroupSize'] ?></td><td><?php echo $NRoom['StatusCode'] ?></td></tr>
  
  <?php }?>
  
</table>