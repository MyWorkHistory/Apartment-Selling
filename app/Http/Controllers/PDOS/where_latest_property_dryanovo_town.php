<?php
$sql = "SELECT listings.sid
        FROM listings,
             yh_bg_locations_in_use 
        WHERE listings.active = 1
          AND listings.location_id != 0
          AND listings.category_sid = 1
          AND listings.location_id = yh_bg_locations_in_use.id
		  AND listings.location_id = 323
        ORDER BY listings.activation_date DESC";           					   
?>