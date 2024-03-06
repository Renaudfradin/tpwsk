<?php
function main(array $param) : array
{
    $originalvalue = intval($param["originalvalue"]);
    $newvalue = intval($param["newvalue"]);
    return [
        "originalvalue" => $originalvalue,
        "newvalue" => $newvalue,
    ];
}