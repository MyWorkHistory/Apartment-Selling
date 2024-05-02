<?php
$fast_search_sids_where = "listings.active = 1
                           AND listings.location_id != 0
						   AND listings.category_sid = 1
						   AND (listings.PropertyType = 1
								OR listings.PropertyType = 3
								OR listings.PropertyType = 4
								OR listings.PropertyType = 5)
						   AND (listings.Price < 50001
								AND listings.Price > 19999)
						   ORDER BY listings.Price DESC";
?>