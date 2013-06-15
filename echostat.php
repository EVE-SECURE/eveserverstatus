<?php

#
#(U)
#
#<eveapi version="2">
#    <currentTime>2013-05-22 03:38:26</currentTime>
#    <result>
#	<serverOpen>True</serverOpen>
#	<onlinePlayers>28173</onlinePlayers>
#    </result>
#    <cachedUntil>2013-05-22 03:41:09</cachedUntil>
#</eveapi>

#defined('_JEXEC') or die('Restricted access');

$url='https://api.eveonline.com/server/ServerStatus.xml.aspx';

$xml = simplexml_load_file($url);

$currentTime=$xml->currentTime;
$serverOpen=$xml->result->serverOpen;
$onlinePlayers=$xml->result->onlinePlayers;

#$currentTime=preg_replace('/(\d\d:\d\d):\d\d/',"\\1",$currentTime);

$serverOpen=preg_replace('/True/',"<span style='color:#00FF00;'><b>Online</b></span>",$serverOpen);
$serverOpen=preg_replace('/False/',"<span style='color:#FF0000;'><b>Offline</b></span>", $serverOpen);

echo "<ul class='eve-status'><li>Статус сервера:&nbsp;$serverOpen</li>";
echo "<li>Дата и время сервера:&nbsp;<span class='blue-text'><b>$currentTime</b></span></li>";
echo "<li>Игроков онлайн:&nbsp;<span class='blue-text'><b>$onlinePlayers</b></span></li></ul>";
?>