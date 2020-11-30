<?php
 //create connection
 $connect=mysqli_connect('localhost','hoaint','0403','database_mau');
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
else
    echo 'Connected Successfully!!';

mysqli_query($connect,"insert into KhachHang (id,Hoten,Namsinh,Email,Diachi,SoDT) values(1,'Hoai','1999','hoaint@gmail.com','GOc De','0328329322')");

?>
 <h1>KhachHang</h1>
	<table>
        <tr>
        <th>ID#</th>
        <th>Hoten</th>
        <th>Namsinh</th>
        <th>Email</th>
        <th>DiaChi</th>
        <th>SoDT</th>
        </tr>
        <?php 
            $result=mysqli_query($connect,"select * from KhachHang");
            while($row=mysqli_fetch_array($result)):
        ?>
        <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['Hoten'];?></td>
        <td><?php echo $row['Namsinh'];?></td>
        <td><?php echo $row['Email'];?></td>
        <td><?php echo $row['Diachi'];?></td>
        <td><?php echo $row['SoDT'];?></td>
        </tr>
        <?php endwhile;?> 
    </table>