<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/searchclause.php");
require_once('include/xtempl.php');
require_once('classes/printpage.php');
require_once('classes/printpage_details.php');
require_once('classes/reportpage.php');
require_once('classes/reportprintpage.php');

add_nocache_headers();

require_once("include/customer_variables.php");

if( !Security::processPageSecurity( $strtablename, 'P' ) )
	return;




$layout = new TLayout("print_bootstrap", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "customer_print";
$layout->blocks["top"] = array();
$layout->containers["pdf"] = array();
$layout->container_properties["pdf"] = array(  "print" => "none"  );
$layout->containers["pdf"][] = array("name"=>"printbuttons",
	"block"=>"printbuttons", "substyle"=>1  );

$layout->skins["pdf"] = "";

$layout->blocks["top"][] = "pdf";
$layout->containers["master"] = array();
$layout->container_properties["master"] = array(  );
$layout->containers["master"][] = array("name"=>"masterinfo",
	"block"=>"mastertable_block", "substyle"=>1  );

$layout->skins["master"] = "";

$layout->blocks["top"][] = "master";
$layout->containers["pageheader"] = array();
$layout->container_properties["pageheader"] = array(  "print" => "repeat"  );
$layout->containers["pageheader"][] = array("name"=>"printheader",
	"block"=>"printheader", "substyle"=>1  );

$layout->containers["pageheader"][] = array("name"=>"page_of_print",
	"block"=>"page_number", "substyle"=>1  );

$layout->skins["pageheader"] = "";

$layout->blocks["top"][] = "pageheader";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"printgrid",
	"block"=>"grid_block", "substyle"=>1  );

$layout->skins["grid"] = "";

$layout->blocks["top"][] = "grid";
$page_layouts["customer_print"] = $layout;




			


$layout = new TLayout("masterprint_bootstrap", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "address_masterprint";
$layout->blocks["bare"] = array();
$layout->containers["column"] = array();
$layout->container_properties["column"] = array(  );
$layout->containers["column"][] = array("name"=>"masterprintheader",
	"block"=>"masterlist_title", "substyle"=>1  );

$layout->skins["column"] = "";

$layout->blocks["bare"][] = "column";
$layout->containers["mastergrid"] = array();
$layout->container_properties["mastergrid"] = array(  );
$layout->containers["mastergrid"][] = array("name"=>"bsmasterprintgrid",
	"block"=>"", "substyle"=>1  );

$layout->skins["mastergrid"] = "";

$layout->blocks["bare"][] = "mastergrid";
$page_layouts["address_masterprint"] = $layout;



			


$layout = new TLayout("masterprint_bootstrap", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "discount_masterprint";
$layout->blocks["bare"] = array();
$layout->containers["column"] = array();
$layout->container_properties["column"] = array(  );
$layout->containers["column"][] = array("name"=>"masterprintheader",
	"block"=>"masterlist_title", "substyle"=>1  );

$layout->skins["column"] = "";

$layout->blocks["bare"][] = "column";
$layout->containers["mastergrid"] = array();
$layout->container_properties["mastergrid"] = array(  );
$layout->containers["mastergrid"][] = array("name"=>"bsmasterprintgrid",
	"block"=>"", "substyle"=>1  );

$layout->skins["mastergrid"] = "";

$layout->blocks["bare"][] = "mastergrid";
$page_layouts["discount_masterprint"] = $layout;




		


$layout = new TLayout("print_bootstrap", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "billing_print";
$layout->blocks["top"] = array();
$layout->containers["pdf"] = array();
$layout->container_properties["pdf"] = array(  "print" => "none"  );
$layout->containers["pdf"][] = array("name"=>"printbuttons",
	"block"=>"printbuttons", "substyle"=>1  );

$layout->skins["pdf"] = "";

$layout->blocks["top"][] = "pdf";
$layout->containers["master"] = array();
$layout->container_properties["master"] = array(  );
$layout->containers["master"][] = array("name"=>"masterinfo",
	"block"=>"mastertable_block", "substyle"=>1  );

$layout->skins["master"] = "";

$layout->blocks["top"][] = "master";
$layout->containers["pageheader"] = array();
$layout->container_properties["pageheader"] = array(  "print" => "repeat"  );
$layout->containers["pageheader"][] = array("name"=>"printheader",
	"block"=>"printheader", "substyle"=>1  );

$layout->containers["pageheader"][] = array("name"=>"page_of_print",
	"block"=>"page_number", "substyle"=>1  );

$layout->skins["pageheader"] = "";

$layout->blocks["top"][] = "pageheader";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"printgrid",
	"block"=>"grid_block", "substyle"=>1  );

$layout->skins["grid"] = "";

$layout->blocks["top"][] = "grid";
$page_layouts["billing_print"] = $layout;



		


$layout = new TLayout("print_bootstrap", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "payment_print";
$layout->blocks["top"] = array();
$layout->containers["pdf"] = array();
$layout->container_properties["pdf"] = array(  "print" => "none"  );
$layout->containers["pdf"][] = array("name"=>"printbuttons",
	"block"=>"printbuttons", "substyle"=>1  );

$layout->skins["pdf"] = "";

$layout->blocks["top"][] = "pdf";
$layout->containers["master"] = array();
$layout->container_properties["master"] = array(  );
$layout->containers["master"][] = array("name"=>"masterinfo",
	"block"=>"mastertable_block", "substyle"=>1  );

$layout->skins["master"] = "";

$layout->blocks["top"][] = "master";
$layout->containers["pageheader"] = array();
$layout->container_properties["pageheader"] = array(  "print" => "repeat"  );
$layout->containers["pageheader"][] = array("name"=>"printheader",
	"block"=>"printheader", "substyle"=>1  );

$layout->containers["pageheader"][] = array("name"=>"page_of_print",
	"block"=>"page_number", "substyle"=>1  );

$layout->skins["pageheader"] = "";

$layout->blocks["top"][] = "pageheader";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"printgrid",
	"block"=>"grid_block", "substyle"=>1  );

$layout->skins["grid"] = "";

$layout->blocks["top"][] = "grid";
$page_layouts["payment_print"] = $layout;



		


$layout = new TLayout("rprint_bootstrap", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "revenue_by_location_rprint";
$layout->blocks["top"] = array();
$layout->containers["pdf"] = array();
$layout->container_properties["pdf"] = array(  "print" => "none"  );
$layout->containers["pdf"][] = array("name"=>"printbuttons",
	"block"=>"printbuttons", "substyle"=>1  );

$layout->skins["pdf"] = "";

$layout->blocks["top"][] = "pdf";
$layout->containers["master"] = array();
$layout->container_properties["master"] = array(  );
$layout->containers["master"][] = array("name"=>"masterinfo",
	"block"=>"mastertable_block", "substyle"=>1  );

$layout->skins["master"] = "";

$layout->blocks["top"][] = "master";
$layout->containers["pageheader"] = array();
$layout->container_properties["pageheader"] = array(  "print" => "repeat"  );
$layout->containers["pageheader"][] = array("name"=>"printheader",
	"block"=>"printheader", "substyle"=>1  );

$layout->containers["pageheader"][] = array("name"=>"page_of_print",
	"block"=>"page_number", "substyle"=>1  );

$layout->skins["pageheader"] = "";

$layout->blocks["top"][] = "pageheader";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"report_print",
	"block"=>"", "substyle"=>1  );

$layout->skins["grid"] = "";

$layout->blocks["top"][] = "grid";
$page_layouts["revenue_by_location_rprint"] = $layout;




$xt = new Xtempl();
$id = postvalue("id"); 
$id = $id != "" ? $id : 1;

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["pageType"] = PAGE_PRINT;
$params["tName"] = $strTableName;
$params["selection"] = postvalue("selection"); //PrintPage::readSelectedRecordsFromRequest( "customer" );
$params["allPagesMode"] = postvalue("all");
$params["pdfMode"] = postvalue("pdf");
$params["pdfContent"] = postvalue("htmlPdfContent");
$params["pdfWidth"] = postvalue("width");
$params["detailTables"] = postvalue("details");
$params["splitByRecords"] = postvalue("records");


$pageObject = new PrintPage($params);
$pageObject->init();
$pageObject->process();
?>