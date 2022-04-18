<?php
session_start();
if (!empty($_POST['message'])) {	
	$msg=$_POST['message'];
	$nama=$_POST['anon'];

	if (!empty($_SESSION['msg']['arrMsg'])){
		$max=sizeof($_SESSION['msg']['arrMsg']);
		$find=false;
		for ($i=0;$i<$max;$i++){
			$cari=array_search($msg, $_SESSION['msg']['arrMsg'][$i]);
			if ($cari) {
				$_SESSION['msg']['arrMsg'][$i];
				$find=true;
				break;
			}			
		}			
	}else{
		echo "error";
	}
	
        if(!$find){
            $item = array('komentar'=>$msg,'anon'=>$nama);
		    array_push($_SESSION["msg"]["arrMsg"],$item);										
        }
	}

header("location:index.php");	
?>