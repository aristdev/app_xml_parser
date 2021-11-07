<?php
    $xml = simplexml_load_file('tp_6.xml') or die ('cant load xml');

    foreach ($xml as $record) {
        print_r($record->titre);
    }

    ?>