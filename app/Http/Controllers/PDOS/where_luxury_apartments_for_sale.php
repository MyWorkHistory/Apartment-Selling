<?php
$fast_search_sids_where = "listings.active = 1
                           AND listings.location_id != 0
						   AND listings.category_sid = 1
						   AND listings.LuxuryProperty = 1
						   AND (listings.PropertyType = 1
								OR listings.PropertyType = 5
								OR listings.PropertyType = 10)
                           ORDER BY listings.Price DESC";
?>