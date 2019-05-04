<?php 
include 'functions.php';
	$id = $_GET['id'];
	$earned_vote = $_GET['earned_vote'];
	if(edit($id,$earned_vote) > 0){
		echo "<script> 
					document.location.href = 'earned_vote.php';
				</script>";
		}else{
			echo "<script> 
					alert('data gagal')
					document.location.href = 'earned_vote.php';
				</script>";
		}


 ?>