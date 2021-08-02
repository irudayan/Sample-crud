<html>
<head>
	<title>form</title>
</head>

<a href="create.php"><button>Create</button></a> 
<table border="1px">
	<thead>
        <tr>
            <th>#</th>
            <th>Name</th>                       
            <th>DoB</th>
        </tr>
    </thead>
    <tbody>

<?php
include ('config.php');
$ret = mysqli_query($con,"select * from test");
$count = mysqli_num_rows($ret);
if($count > 0){
while ($row=mysqli_fetch_array($ret)) {
?>
    	<tr>
    		<td><?php echo $row['id']; ?></td>
    		<td><?php echo $row['first']; ?></td>
    		<td><?php echo $row['date']; ?></td>
    	</tr>
    </tbody>
<?php } ?>
<?php } else{
	echo 'No Records are available in that table.';
} ?>
</table>

</body>
</html>