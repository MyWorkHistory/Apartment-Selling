<?php
$fast_search_sids_where = "listings.active = 1
                           AND listings.location_id != 0
						   AND listings.category_sid = 1
						   AND listings.PropertyType = 8
						   AND listings.status = 120
						   AND listings.LotSize <= 1500
						   ORDER BY listings.LotSize ASC";
?>