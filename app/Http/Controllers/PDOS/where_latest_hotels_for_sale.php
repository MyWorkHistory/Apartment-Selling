<?php
$fast_search_sids_where = "listings.active = 1
                           AND location_id != 0
						   AND listings.category_sid = 1
						   AND listings.PropertyType = 3
                           ORDER BY listings.activation_date DESC
                           LIMIT 24";
?>