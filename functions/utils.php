<?php
/**
 * Created by PhpStorm.
 * Date: 20/05/2018
 * Time: 14:05
 */
if (!defined('IN_SPYOGAME')) die("Hacking Attemp!");


function getDataRe($data,$columns)
{
    $retour = 0;
    foreach ($columns as $column)
    {
        if ($data[$column] != '-1')
        {
            $retour+= (int)$data[$column];
        }
    }
    return numbers($retour);
}

function getPillage($data)
{
    $columns = array("metal","cristal","deuterium");
    return getDataRe($data,$columns);
}

function getflotte($data)
{
    $columns = array("PT","GT","CLE","CLO","CR","VB","VC","REC","SE","BMD","DST","EDLM","TRA");
    return getDataRe($data,$columns);
}

function getDef($data)
{
    $columns = array("LM","LLE","LLO","CG","AI","LP","PB","GB");
    return getDataRe($data,$columns);
}

function numbers($nb)
{
    return number_format( (int)$nb,0,',','.' );
}