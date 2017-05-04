<?php
if(isset($_POST["list"])){
	$num=$_POST["list"];
	echo "<form action='hw6action.php' method='post' enctype='multipart/form-data'>";
	echo "<input type='hidden' name='list2' value='".$num."'>"."<br/>";
	for($n=1;$n<=$num;$n++){
		echo $n."<input type='file' name='upload".$n."'>"."<br/>";
	}
		echo "<input type='submit'></form>";
}
if(isset($_POST['list2'])){
	$num=$_POST['list2'];
	for($n=1;$n<=$num;$n++){
		$name="upload".$n;

	if(isset($_FILES[$name])){
	echo $_FILES[$name]["name"]."<br/>";
	echo $_FILES[$name]["tmp_name"]."<br/>";
	echo $_FILES[$name]["size"]."<br/>";
	echo $_FILES[$name]["type"]."<br/>";
	$a=pathinfo($_FILES[$name]["name"]);
	$t=time();


if(copy($_FILES[$name]["tmp_name"],$t.".".$a["extension"])){
	echo "檔案上傳成功";
}else{
	echo "檔案上傳失敗";
}
}
}
}

?>
