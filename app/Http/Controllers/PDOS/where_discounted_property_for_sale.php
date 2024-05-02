<?php
$fast_search_sids_where = "listings.active = 1
                           AND listings.location_id != 0
						   AND listings.category_sid = 1
						   AND listings.Reduced = 1
                           ORDER BY listings.InitialPrice/listings.Price DESC";
?>