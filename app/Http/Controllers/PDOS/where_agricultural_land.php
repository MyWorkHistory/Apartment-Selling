<?php
$fast_search_sids_where = "listings.active = 1
                           AND listings.location_id != 0
						   AND listings.category_sid = 1
						   AND listings.PropertyType = 8
						   AND (listings.status = 119
								OR listings.status = 121)
						   ORDER BY listings.Price ASC";
?>