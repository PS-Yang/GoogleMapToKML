<?php

// $mid = "1HB7YgxfSX5ll_0aauV9lBj7Wkf0";//大肚山計畫
// GetKMLInfo($mid,"Dadu_Plateau");
// $mid="1vTVPVHyxrFXSlyykBvCkt9t1nmw"; //北屯太平區域圖
// GetKMLInfo($mid,"test2");

function GetKMLInfo ($mid,$name) //$name別用中文名稱 
{
	//取得網頁內容
	$url = "https://www.google.com/maps/d/kml?mid=".$mid;
	$page_content = file_get_contents($url); //抓取內容
	//存入檔案
	$file=fopen($name.".kmz", "w");
	fwrite($file,$page_content);
	fclose($file);
	//解壓縮
	include_once('pclzip.lib.php');
	$archive = new PclZip($name.".kmz");
	if(($list=$archive->extract(PCLZIP_OPT_BY_NAME, 'doc.kml'))==0){
	    //當有錯誤的時候，可以用這個顯示錯誤訊息
	    die("Error : ".$archive->errorInfo(true)); 
	  }
	//解壓縮出來名稱會是doc.kml 讀doc.kml檔
	$read_file = fopen("doc.kml", "r");
	$str="";
	if($read_file /*!= NULL*/)
	{
		while (!feof($read_file)) 
		{
	        $str .= fgets($read_file);
	       // echo $str;
	       // exit;
		}
	    fclose($read_file);
	}
	//轉存成$name.kml
	$file=fopen($name.".kml", "w");
	fwrite($file,$str);
	fclose($file);
	echo "Success!";
}

?>