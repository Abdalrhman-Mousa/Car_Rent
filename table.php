<?php require 'conecction.php'; echo "<br>"; echo "<br>"?>
<?php
echo "<h1> All Cars For Rent : </h1>";      
echo "<table width='80%' cellspan='2' border ='2'> <tr>";
echo "<td> Car ID </td>";
echo "<td> Car Name </td>";
echo "<td> Car Image </td>";
echo "<td> Car Model </td>";
echo "<td> Car Price </td>";
echo "<td> Car Color </td>";
echo "<td> Delete Car  </td>";
echo "<td> Edit Car </td> </tr>";









while ($line = mysqli_fetch_assoc ($sql_command)) {
    echo "<tr><td>" . $line['id'] . "</td>
     <td>" . $line['CarName'] . "</td>
     <td>" . $line['CarImage'] . "</td>
     <td>" . $line['CarModel'] . "</td>
     <td>" . $line['CarPrice'] . "</td>
     <td>" . $line['CarColor'] . "</td>
     <td><a href='delete.php?id=".$line['id']."'id='btn'>Delete</a></td>  
     <td><a href='update.php?id=".$line['id']."'id='btn'>Edit</a></td>  



     </tr>  
";  
     

    
  }

  echo"</table>";


  


