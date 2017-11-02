
<!DOCTYPE html>
<html>
<?php
	require 'php/connection.php';
	require 'php/navbar.php';
	$query="SELECT * FROM tbl_event";
    $result=$connection->query($query);
        
?>
<body>
	<div class="container"><br><br>
		<div class="body" style="display: inline-block; margin: auto;width: 100%;">
			<table class="table table-hover table-striped">
				<thead>
					<th>Event Name</th>
					<th>Event Time</th>
					<th>Event Date</th>
					<th>Event Venue</th>
					<th>Event Capacity</th>
					<th>Status</th>
					<th>More Information</th>
				</thead>
			<?php if($count=mysqli_num_rows($result)){
				$rows=$result->fetch_all(MYSQLI_ASSOC);

				foreach ($rows as $row){?>
					<div class="pop_up_row">
						<tr>
							<td><?php echo $row['event_name'] ?></td>
							<td><?php echo $row['event_time'] ?></td>
							<td><?php echo $row['event_date'] ?></td>
							<td><?php echo $row['event_venue'] ?></td>
							<td><?php echo $row['event_capacity'] ?></td>
							<td><?php if ($row['event_date']<date("Y-m-d")){echo "Past";} else echo "Current"; ?></td>
							<td><a class="btn btn-info" href="more_details.php?event_id=<?php echo $row['event_id'] ?>">More...</a></td>
						</tr>
					</div>
					<?php}
				}?>
				<?php }}else{
					echo "<p>No items to display</p>";
				}?>
			</table>
		</div>
	</div>
</body>
</html>