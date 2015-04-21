<?php

include('connect.php');
$output = '';

if (isset($_POST['searchVal'])) {

	$hotelName = $_POST['searchVal'];
	//$hotelName = preg_replace("#[^0-9a-z]#i","",$hotelName);
	if(!empty($hotelName))
	{
		$search_query = mysql_query("SELECT * FROM Hotel_Details WHERE Hotel_Name LIKE '$hotelName%'") or die("Could not locate hotel");
		$count = mysql_num_rows($search_query);

		if($count == 0)
			{
				$output = 'There was no search results';

			}
		else
			{
				while ($row = mysql_fetch_array($search_query)) {
					$hname = $row['Hotel_Name'];

					$output .= "<a style = 'color:#428bcd; text-decoration:none'href='$hname' class='ajaxHotelName'>".$hname."</a><br>";
				}

			}
		}
		echo($output);
	}

	
	?>