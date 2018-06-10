<!DOCTYPE html>
<html>
<head>
	<title>Job Top</title>
<link rel="stylesheet" type="text/css" href="/topjob/css/home.css">
<?php include('php/head.php'); include('php/databasecon.php');?>

</head>
<body>

<!-- This is Catagerys -->

<div class="cat-div">
	<div class="cat-c cat-c1">
		<p>
			IT-Sware/DB/QA/Web/Graphics/GIS <br>
			Corporate Management/Analysts <br>
			Eng-Mech/Auto/Elec  <br>
			Hospital/Nursing/Healthcare<br>
			R&D/Science/Research <br>
			Imports/Exports <br>
		</p>
	</div>

	<div class="cat-c">
		<p>
			IT-HWare/Networks/Systems <br>
			Office Admin/Secretary/Receptionist <br>
			Manufacturing/Operations <br>
			Legal/Law Agriculture/Dairy/Environment <br>
			All Vacancies <br>
		</p>
	</div>

	<div class="cat-c">
		<p>
			Accounting/Auditing/Finance <br>
			Civil Eng/Interior Design/Architecture <br>
			Media/Advert/Communication <br>
			Supervision/Quality Control <br>
			Security <br>
		</p>
	</div>

	<div class="cat-c">
		<p>
			Banking/Insurance IT-Telecoms <br>
			Hotels/Restaurants/Food <br>
			Apparel/Clothing <br>
			Fashion/Design/Beauty <br>
		</p>
	</div>

	<div class="cat-c">
		<p>
			Sales/Marketing/Merchandising<br>
			Customer Relations/Public Relations<br>
			Hospitality/Tourism<br>
			Ticketing/Airline/Marine<br>
			International Development<br>
		</p>
	</div>

	<div class="cat-c">
		<p>
			HR/Training<br>
			Logistics/Warehouse/Transport<br>
			Sports/Fitness/Recreation<br>
			Teaching/Academic/Library<br>
			KPO/BPO<br>
		</p>
		
	</div>


</div>
<!-- This is Catagerys End-->

<!-- Job list -->

<div>
	
	<center><div class="recent-job-ti-div"><h3 class="recent-j-ti"> Recent Jobs </h3></div></center>

</div>

<!-- Job list starting -->

<div class="job-list-div">
	
	<div id="div1" class="job-list-show"> </div>
	<div id="div2" class="job-list-show"> </div>
	<div id="div3" class="job-list-show"> </div>

</div>


 <?php /*

#sql Quary

$qurselect = "Select rid,title,url from posts";
$result = mysqli_query($sqlcon,$qurselect);
while ($raw = mysqli_fetch_assoc($result)) {
	echo $raw["rid"]."<br>";
	echo $raw["title"]."<br>";
	echo $raw["url"]."<br>";
} */
?> 

<script >
	var div = document.getElementById("div1");
	var div2 = document.getElementById("div2");
	var div3 = document.getElementById("div3");

	var req = new XMLHttpRequest();
	req.open("Get","/topjob/php/data.json");
	req.onload = function(){
		var ourData = JSON.parse(req.responseText);

	var len = ourData.length;
	var first = Math.ceil(len / 3); 

	var a = (first); // 
	var secondCol = Math.ceil(len - first) / 2;       
	var b = (first + secondCol);  

		var string = "";
	for (i = 0; i < first;i++){
		string += "<div class='divOfJob'> <p class='jobComp'>" + ourData[i].comName + 
		"</p><a class='titleOfJob' href='/topjob/php/"+ ourData[i].postLink + "'<p>" +
		ourData[i].jobTitle + "</p></a></div>";
		;	
	}
	div.insertAdjacentHTML("beforeend",string);
		
		var val = "";
	for (;a < b;a++){
		val += "<div class='divOfJob'> <p  class='jobComp'> " + ourData[a].comName + 
		"</p><a class='titleOfJob' href='/topjob/php/"+ ourData[a].postLink + "'<p>" +
		ourData[a].jobTitle + "</p></a></div>";
		;	
	}

	div2.insertAdjacentHTML("beforeend",val); 

	var val3 = "";
	for (;b < len;b++){
		val3 += "<div class='divOfJob'> <p class='jobComp'> " + ourData[b].comName + 
		"</p><a class='titleOfJob' href='/topjob/php/"+ ourData[b].postLink + "'<p>" +
		ourData[b].jobTitle + "</p></a></div>";
		;	
	}

	div3.insertAdjacentHTML("beforeend",val3); 

};
req.send();

	
</script>



















</body>
</html>