<?php 

include("databasecon.php");

#Values

$companyName = $_POST["company-name"];
$jobTitle = $_POST["jobtitle"];
$jobCat = $_POST["jobcat"];
$contentData = $_POST["cdata"];

$jobtipost = str_ireplace(" ", "_", $jobTitle);
$valupost = random_int(0, 100000);
$postid = $valupost;

$post = fopen($link = "posts/name_".$jobtipost."_id".$postid.".php", "w");
fwrite($post, "<?php include('../head.php') ?>");
fwrite($post, "<h1> Company : ".$companyName."</h1><br>");
fwrite($post, "<h3> Job : ".$jobTitle."</h3><br>");
fwrite($post, "<p> ".$contentData."</p>");
fclose($post);

if ($post == true) {
	header("Location:".$link."");
}

#SQL Quary 

$quar = "INSERT INTO posts(id,title,url) VALUES ('$postid','$jobTitle','localhost/topjob/php/$link')";

$result = mysqli_query($sqlcon,$quar);

mysqli_close($sqlcon);


if (file_exists("data.json")) {
	
	$data = file_get_contents("data.json");
	$decode = json_decode($data,true);

	$jsonex = array(
			'comName'=> $companyName,
			'postLink'=> $link,
			'jobTitle'=> $jobTitle,
			'jobcat'=> $jobCat,
			'jobdis'=> $contentData

	);

	$decode[] = $jsonex;
	$last = json_encode($decode);
	file_put_contents("data.json", $last);

}

 ?>