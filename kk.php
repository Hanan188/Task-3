
</head>
<body>

  <?php
  $database=mysqli_connect("localhost","root","","task2");
  if (isset($_POST['DisplayDB'])) {
    ?>

<table border="2" style="margin:30px">
<tr>
  <td>Forward</td>
  <td>Backward</td>
  <td>Left</td>
  <td>Right</td>
  <td>Stop</td>



</tr>
<?php

$query ="SELECT * FROM `task2`";
$records = mysqli_query($database,$query)or die( mysqli_error($database)); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['forward']; ?></td>
    <td><?php echo $data['backward']; ?></td>
    <td><?php echo $data['left']; ?></td>
    <td><?php echo $data['right']; ?></td>
    <td><?php echo $data['stop']; ?></td>


  </tr>
<?php
}}
?>
</table>
<?php
 mysqli_close($database); 
 ?>
</body>
</html>