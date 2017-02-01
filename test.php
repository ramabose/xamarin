<?php
include "includes/common.php";
print_r($_POST);
/*echo $selQuery="select * from properties where LotAddressID!='' ";
$results=mysql_query($selQuery);
$resCnt=mysql_num_rows($results);
SELECT * FROM `contacts` where `ContactType` = '2' and `TenantType`!='' and `TenantType`!='0'
if($resCnt>0)
	
{
	while ($row=mysql_fetch_array($results))
	{
		$UPQuery	= "Update `contacts` set   `CreatedDateon`= '".$row['CreatedOn']."'
											    where ContactId='".$row['RegisteredAgent']."'";
			$ExeInsQuery=mysql_query($UPQuery);
	}
}*/
$selQuery="SELECT * FROM `contacts` where FIND_IN_SET('2',`ContactType`) and `TenantType`!='' and `TenantType`!='0'";
$results=mysql_query($selQuery);
$resCnt=mysql_num_rows($results);
if($resCnt>0)	
{
	while ($row=mysql_fetch_array($results))
	{
		$UPQuery	= "Update `properties` set   `TenantType`= '".$row['TenantType']."'
											    where Tenant='".$row['ContactId']."'";
			$ExeInsQuery=mysql_query($UPQuery);
	}
	
}

?>
comm
