<table border="1">
  <tr>
  <caption>Таблица размеров обуви</caption>
  
    <th>Номер комнаты</th>
    <th>Категория</th>
    <th>Посетители</th>
    <th>Цена</th>
  </tr>
  <?php  foreach ($Hotrooms as $NRoom){?>
      <tr><td><?php echo $NRoom['IdRoom'] ?></td><td><?php echo $NRoom['Name'] ?><td><?php echo $NRoom['GuestNumber'] ?>
      <td><?php echo $NRoom['Cost'] ?></td></tr>
  
  <?php }?>
  
</table>