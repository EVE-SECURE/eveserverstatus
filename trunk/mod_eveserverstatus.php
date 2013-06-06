<?php
#
#(U)
#
#<eveapi version="2">
#    <currentTime>2013-05-22 03:38:26</currentTime>
#    <result>
#<-----><serverOpen>True</serverOpen>
#<-----><onlinePlayers>28173</onlinePlayers>
#    </result>
#    <cachedUntil>2013-05-22 03:41:09</cachedUntil>
#</eveapi>

defined('_JEXEC') or die('Restricted access');

$url='https://api.eveonline.com/server/ServerStatus.xml.aspx';

$xml = simplexml_load_file($url);

$currentTime=$xml->currentTime;
$serverOpen=$xml->result->serverOpen;
$onlinePlayers=$xml->result->onlinePlayers;


#2013-05-22 03:38:26
#$currentTime=preg_replace('/(\d+\-\d+\-\d+\ \d+\:\d+)\:\d+/',\1,$currentTime);

$serverOpen=preg_replace('/True/','online',$serverOpen)
$serverOpen=preg_replace('/False/', 'offline', $serverOpen);


echo JText::_("eveTime: $currentTime \n<br/>");
echo JText::_("Статус сервера:&nbsp;$serverOpen \n<br/>");
echo JText::_("Игроков онлайн:&nbsp;$onlinePlayers \n<br/>");

