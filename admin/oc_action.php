<?php
session_start();
ob_start();
include '../config.php';
include '../style/sweetalert.php';
include 'status.php';


$update = false;
$oc_id = "";
$oc_name = "";
$oc_age = "";
$oc_tribe = "";
$oc_religion = "";
$oc_saman = "";
$oc_level = "";
$oc_subject = "";
$oc_theory = "";
$oc_agephak = "";
$oc_agelat = "";
$oc_phak = "";
$oc_lat = "";
$oc_part = "";
$oc_pic = "";

if (isset($_POST['add'])) {
	$oc_name = $_POST['oc_name'];
	$oc_age = $_POST['oc_age'];
	$oc_tribe = $_POST['oc_tribe'];
	$oc_religion = $_POST['oc_religion'];
	$oc_saman = $_POST['oc_saman'];
	$oc_level = $_POST['oc_level'];
	$oc_subject = $_POST['oc_subject'];
	$oc_theory = $_POST['oc_theory'];
	$oc_agephak = $_POST['oc_agephak'];
	$oc_agelat = $_POST['oc_agelat'];
	$oc_phak = $_POST['oc_phak'];
	$oc_lat = $_POST['oc_lat'];
	$oc_part = $_POST['oc_part'];

	if (isset($_FILES['oc_pic']['name']) && ($_FILES['oc_pic']['name'] != "")) {

		$dn = date('ymdHis');
		$oc_pic = $_FILES['oc_pic']['name'];
		$extension = pathinfo($oc_pic, PATHINFO_EXTENSION);
		$randomno = rand(0, 10000);
		$pic_rand = $dn . $randomno . '.' . $extension;
		$upicture = "../uploads/" . $pic_rand;
	} else {

		$pic_rand = "";
		$upicture = "";
	}

	$query = "INSERT INTO oldcandidate(oc_name,oc_age,oc_tribe,oc_religion,oc_saman,oc_level,oc_subject,oc_theory,oc_agephak,oc_agelat,oc_phak,oc_lat,oc_part,oc_pic)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("ssssssssssssss", $oc_name, $oc_age, $oc_tribe, $oc_religion, $oc_saman, $oc_level, $oc_subject, $oc_theory, $oc_agephak, $oc_agelat, $oc_phak, $oc_lat, $oc_part, $pic_rand);
	$stmt->execute();
	move_uploaded_file($_FILES['oc_pic']['tmp_name'], $upicture);

	echo "<script>
			$(document).ready(function() {
				Swal.fire({
					position: 'center',
					icon: 'success',
					title: 'ເພີ່ມຂໍ້​ມູນເຂົ້າລະບົບສຳເລັດແລ້ວ',
					showConfirmButton: false,
					timer: 3000
				  });
			});
		</script>";

	header("refresh:3; url=oldcandidate");
}

if (isset($_GET['delete'])) {
	$oc_id = $_GET['delete'];

	$sql = "SELECT oc_pic FROM oldcandidate WHERE oc_id=?";
	$stmt2 = $conn->prepare($sql);
	$stmt2->bind_param("i", $oc_id);
	$stmt2->execute();
	$result2 = $stmt2->get_result();
	$row = $result2->fetch_assoc();

	$imagepath = "../uploads/" . $row['oc_pic'];
	unlink($imagepath);

	$query = "DELETE FROM oldcandidate WHERE oc_id=?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("i", $oc_id);
	$stmt->execute();

	if ($stmt) {

		header("refresh:1; url=oldcandidate");
	}
}

if (isset($_POST['update'])) {
	$oc_id = $_POST['oc_id'];
	$oc_name = $_POST['oc_name'];
	$oc_age = $_POST['oc_age'];
	$oc_tribe = $_POST['oc_tribe'];
	$oc_religion = $_POST['oc_religion'];
	$oc_saman = $_POST['oc_saman'];
	$oc_level = $_POST['oc_level'];
	$oc_subject = $_POST['oc_subject'];
	$oc_theory = $_POST['oc_theory'];
	$oc_agephak = $_POST['oc_agephak'];
	$oc_agelat = $_POST['oc_agelat'];
	$oc_phak = $_POST['oc_phak'];
	$oc_lat = $_POST['oc_lat'];
	$oc_part = $_POST['oc_part'];
	$oldpic = $_POST['oldpic'];

	if (isset($_FILES['oc_pic']['name']) && ($_FILES['oc_pic']['name'] != "")) {
		$dn = date('ymdHis');
		$oc_pic = $_FILES['oc_pic']['name'];
		$extension = pathinfo($oc_pic, PATHINFO_EXTENSION);
		$randomno = rand(0, 10000);
		$pic_rand = $dn . $randomno . '.' . $extension;
		$upicture = "../uploads/" . $pic_rand;

		$noc_pic = $pic_rand;
		if ($oldpic != "") {
			unlink("../uploads/" . $oldpic);
		}
		move_uploaded_file($_FILES['oc_pic']['tmp_name'], $upicture);
	} else {

		$noc_pic = $oldpic;
	}

	$query = "UPDATE oldcandidate SET oc_name=?, oc_age=?, oc_tribe=?, oc_religion=?, oc_saman=?, oc_level=?, oc_subject=?, oc_theory=?, oc_agephak=?, oc_agelat=?, oc_phak=?, oc_lat=?, oc_part=?, oc_pic=? WHERE oc_id=?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("ssssssssssssssi", $oc_name, $oc_age, $oc_tribe, $oc_religion, $oc_saman, $oc_level, $oc_subject, $oc_theory, $oc_agephak, $oc_agelat, $oc_phak, $oc_lat, $oc_part, $noc_pic, $oc_id);
	$stmt->execute();

	echo "<script>
				$(document).ready(function() {
					Swal.fire({
						position: 'center',
						icon: 'success',
						title: 'ອັບເດດຂໍ້ມູນສຳເລັດແລ້ວ',
						showConfirmButton: false,
						timer: 3000
					  });
				});
			</script>";

	header("refresh:3; url=oldcandidate");
}

ob_end_flush();
