<?php 
	echo "<p style='color:red;font-size:24'> TIME SLOTS </p>";
	$sql = "select Time_Slot from LaundryProject.TimeSlot join LaundryProject.List on TimeSlot.List = TimeSlot.List where User_Username='".userid."'";
	$result = mysqli_query($connect,$sql);
	if (mysqli_time_slot($result)>0)
	{
		$total=0;
		echo "<table boarder='1'><tr><td>Time Slot</td><td>";
		echo "<form action= 'TimeSlot.php' method='post'>";
		while ($list = mysqli_fetch_assoc($result))
		{
			echo "<tr><td colspan='3' align='center'><input type ='submit' value='ADD'></td></tr>";
				echo ">form>";
	}
	}
	else 
	{
		echo "NO AVAILABLE TIME SLOT";
	}
	
?>