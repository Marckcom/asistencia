<?php
	require_once 'conn.php';
	
    if(isset($_POST['studentID'])){
        
        $studentID =$_POST['studentID'];
		$date = date('Y-m-d H:i:s');
		$year = date('Y');
		$time = date('H:i:s A');

		$sql = "SELECT * FROM student WHERE STUDENTID = '$studentID'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'NUMERO DE CEDULA INVALIDA: '.$studentID;
		}else{
				$row = $query->fetch_assoc();
				$id = $row['STUDENTID'];
				$sql ="SELECT * FROM attendance WHERE STUDENTID='$id' AND LOGDATE='$date' AND STATUS='0'";
				$query=$conn->query($sql);
				if($query->num_rows>0){
				$sql = "UPDATE attendance SET TIMEOUT='$time', STATUS='1' WHERE STUDENTID='$studentID' AND LOGDATE='$date'";
				$query=$conn->query($sql);
				$_SESSION['success'] = 'ASISTENCIA REGISTRADA: '.$row['FIRSTNAME'].' '.$row['LASTNAME'];
				}else{
					$sql = "INSERT INTO attendance(STUDENTID,TIMEIN,LOGDATE,STATUS) VALUES('$studentID','$time','$date','0')";
					if($conn->query($sql) ===TRUE){
					 $_SESSION['success'] = 'ASISTENCIA REGISTRADA: '.$row['FIRSTNAME'].' '.$row['LASTNAME'];
			 		}
					 else{
			  $_SESSION['error'] = $conn->error;
		   }	
		}
	}

	}else{
		$_SESSION['error'] = 'ERROR';
}
header("location: index.php");
	   
$conn->close();
?>