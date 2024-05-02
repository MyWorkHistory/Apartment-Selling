<?php
$fast_search_sids_where = "listings.active = 1
                           AND listings.location_id != 0
						   AND listings.category_sid = 1
						   AND listings.status = 124
						   AND listings.PropertyType = 4
                           ORDER BY listings.Price DESC";
?>