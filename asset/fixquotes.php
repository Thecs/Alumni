<?php
function FixQuotes ($what = ) {
        $what = ereg_replace(','',$what);
        while (eregi(', $what)) {
                $what = ereg_replace(',',$what);
        }
        return $what;
}
?>