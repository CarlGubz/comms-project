<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        
		
		$hospital_name = $_POST['hospital_name']; 
		$dea = $_POST['dea'];
		$doctorsName = $_POST['doctors_name'];
		$date = $_POST['date'];
		$patient_id = $_POST['patients_id'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
        $age = $_POST['age'];
		$prescription = $_POST['prescription'];
        $existing_medical_condition = $_POST['existing_medical_condition'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO table_the_iot_projects (hospital_name,dea,doctors_name,date, patients_id, name,gender,age,prescription, existing_medical_condition) values(?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($hospital_name,$dea,$doctors_name, $date, $patients_id, $name,$gender,$age,$prescription, $existing_medical_condition));
		Database::disconnect();
		header("Location: user data.php");
    }
?>