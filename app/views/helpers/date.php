<?php
class DateHelper extends AppHelper {
    function ParseDateTime($dateField) {
         $datestring = $dateField['year'] . '-' .$dateField['month'] . '-' . $dateField['day']. '-' .$dateField['H'] . '-' . $dateField['i'] . '-' . $dateField['s'];
		 
         return DateTime::createFromFormat('Y-m-d H:i:s', $datestring);
    }
}

?>