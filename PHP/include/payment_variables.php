<?php
$strTableName="payment";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="payment";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("payment");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["payment"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>