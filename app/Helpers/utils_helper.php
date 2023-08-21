<?php

function dateForRelease($date): string
{
    $tgl = date('d F Y', strtotime($date));
    return $tgl;
}
