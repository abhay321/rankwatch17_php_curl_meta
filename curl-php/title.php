<?php
	function get_title($url){
		$ch = curl_init(); //Initializing Curl
		curl_setopt($ch, CURLOPT_HEADER, 0); //Set Option
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  //Set Option
		curl_setopt($ch, CURLOPT_URL, $url);  //Set Option
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  //Set Option
		$data = curl_exec($ch); //Executing CURL Function
		curl_close($ch); // Closing Curl
		return $data;	
	}
	$url = $_POST["url"]; //Access data from Form
	$val = get_title($url); // Calling the function
	$doc = new DOMDocument(); //creating New Dom Document
	@$doc->loadHTML($val); // Loading HTML Source in docs
	$attribute = $doc->getElementsByTagName('title'); // getting the attributes of Title Tags
	$title = $attribute->item(0)->nodeValue; // Getting title 
	$metas = $doc->getElementsByTagName('meta');
	for ($i = 0; $i < $metas->length; $i++)  
	{
		    $meta = $metas->item($i);
				if($meta->getAttribute('name') == 'description') //Getting attributes with the Attribute "description"
				$description = $meta->getAttribute('content'); // Loading Content of meta description into a variable
				if($meta->getAttribute('name') == 'keywords') //Getting attributes with the Attribute "keywords" 
				$keywords = $meta->getAttribute('content'); // Loading keyword content into a variable
	}
		// Checking if any keyword is returned or not if not Print NA
		if ($keywords == "")  
		{
			echo "<b>Keywords :</b> NA" . '<br/><br/>';
		}
		else
		{
			echo "<b>Keywords: </b> $keywords" . '<br/><br/>';   
		}
		echo "<b>Description:</b> $description". '<br/><br/>'; // Printing The Description
		echo "<b>Title:</b> $title". '<br/><br/>'; // Printing The Title
?>