<?php
$fast_search_sids_where = "listings.active = 1
                           AND listings.location_id != 0
						   AND listings.category_sid = 1
						   AND listings.status = 124
						   AND (listings.PropertyType = 2
								OR listings.PropertyType = 3
								OR listings.PropertyType = 6
								OR listings.PropertyType = 7
								OR listings.PropertyType = 9)
						   ORDER BY listings.Price DESC";
?>