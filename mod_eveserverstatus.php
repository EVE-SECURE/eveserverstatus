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

defined('_JEXEC') or die('Restricted access');

#$timeLimit=10;
#header('Refresh: ' . $timeLimit);

$url='https://api.eveonline.com/server/ServerStatus.xml.aspx';

$xml = simplexml_load_file($url);

$currentTime=$xml->currentTime;
$serverOpen=$xml->result->serverOpen;
$onlinePlayers=$xml->result->onlinePlayers;

$currentTime=preg_replace('/(\d\d:\d\d):\d\d/',"\\1",$currentTime);

$serverOpen=preg_replace('/True/',"<span style='color:#00FF00;'><b>Online</b></span>",$serverOpen);
$serverOpen=preg_replace('/False/',"<span style='color:#FF0000;'><b>Offline</b></span>", $serverOpen);


echo JText::_("<ul class='eve-status'><li>Статус сервера:&nbsp;$serverOpen</li>");
echo JText::_("<li>Игроков онлайн:&nbsp;<b>$onlinePlayers</b></li>");
echo JText::_("<li>Игровое время:&nbsp;<b>$currentTime</b></li></ul>");

#$l="<ul class='eve-status'><li>Статус сервера:&nbsp;";
#if ($vals[4]['value']=="True")
#{
# $l.="<span style='color:#00FF00;'><b>Online</b></span></li>";
#}
#else
#{
#    $l.="<span style='color:#FF0000;'><b>Offline</b></span></li>";
#}
#$l.="<li>Игроков онлайн:&nbsp;<b>".$vals[6]['value']."</b></li></ul>";
