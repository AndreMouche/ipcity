<?php
require("ipcity.php");

$time = date("c");
$userip = getenv("HTTP_X_FORWARDED_FOR");

$result = trim(ipCity("$userip"));
$hostname = getenv("HTTP_HOST");

$filename = date('omd');
$fp = fopen($filename, 'a');
fwrite($fp, "$time,$userip,$result,$hostname\n");
fclose($fp);

// echo "$time,$userip,$result,$hostname";

?>

<script language="javascript">
	var province = '<?php echo $result;?>';
	var match = /(��ͨ|���ɹ�|����|����|������|����|ɽ��|���|����|�½�|�ӱ�|����|����|����|�ຣ|����|ɽ��)/.test(province);
	if(match) {
		window.location.href="http://n.htm";
	}
	else{
		window.location.href="http://s.htm";
	}
</script>
