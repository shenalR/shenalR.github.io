<!DOCTYPE html>
<html>
<head>
	<?php include('../php/head.php') ?>
	<link rel="stylesheet" type="text/css" href="/topjob/css/postjob.css">
</head>
<body>

<div class="data-div">
<center><form name="jobpost" method="POST" action="savepost.php">

Company Name : <input type="text" name="company-name" placeholder="Company Name"><br>	

Type Job Title : <input type="text" name="jobtitle" placeholder="Job Title"> <br>

Select Job Catagory
<select name="jobcat">
	<option value="IT-Sware/DB/QA/Web/Graphics/GIS"> IT-Sware/DB/QA/Web/Graphics/GIS </option> 
	<option value="ITHWare/Networks/Systems"> ITHWare/Networks/Systems </option> 
	<option value="Accounting/Auditing/Finance"> Accounting/Auditing/Finance </option> 
	<option value="Banking/Insurance"> Banking/Insurance </option> 
	<option value="Sales/Marketing/Merchandising"> Sales/Marketing/Merchandising </option> 
	<option value="HR/Training"> HR/Training </option>
	<option value="Corporate Management/Analysts"> Corporate Management/Analysts </option>
	<option value="Office Admin/Secretary/Receptionist"> Office Admin/Secretary/Receptionist </option>
	<option value="Civil Eng/Interior Design/Architecture"> Civil Eng/Interior Design/Architecture </option>
	<option value="IT-Telecoms"> IT-Telecoms </option>
	<option value="Customer Relations/Public Relations"> Customer Relations/Public Relations </option>
	<option value="Logistics/Warehouse/Transport"> Logistics/Warehouse/Transport </option>
	<option value="Eng-Mech/Auto/Elec"> Eng-Mech/Auto/Elec  </option>
	<option value="Manufacturing/Operations"> Manufacturing/Operations </option>
	<option value="Media/Advert/Communication"> Media/Advert/Communication </option>
	<option value="Hotels/Restaurants/Food"> Hotels/Restaurants/Food </option>
	<option value="Hospitality/Tourism"> Hospitality/Tourism </option>
	<option value="Sports/Fitness/Recreation"> Sports/Fitness/Recreation </option>
	<option value="Hospital/Nursing/Healthcare"> Hospital/Nursing/Healthcare </option>
	<option value="Legal/Law"> Legal/Law  </option>
	<option value="Supervision/Quality Control"> Supervision/Quality Control </option>
	<option value="Apparel/Clothing"> Apparel/Clothing </option>
	<option value="Ticketing/Airline/Marine"> Ticketing/Airline/Marine </option>
	<option value="Teaching/Academic/Library"> Teaching/Academic/Library </option>
	<option value="R&D/Science/Research"> R&D/Science/Research </option>
	<option value="Agriculture/Dairy/Environment"> Agriculture/Dairy/Environment </option>
	<option value="Security"> Security </option>
	<option value="Fashion/Design/Beauty"> Fashion/Design/Beauty </option>
	<option value="International Development"> International Development </option>
	<option value="KPO/BPO"> KPO/BPO </option>
	<option value="Imports/Exports"> Imports/Exports</option>
</select> <br>

<textarea name="cdata" placeholder="Enter Description" rows="10" cols="50"></textarea> <br>

<input type="submit" name="submit" placeholder="submit">

</form></center>
</div>


</body>
</html>