<?php
require_once 'Rcon.php';
require_once 'config.php';

// Connect to Rcon server
use Thedudeguy\Rcon;

$rcon = new Rcon($rconHost, $rconPort, $rconPassword, $rconTimeout);

if (isset($_GET['reload'])) {
  if (@$rcon->connect())
  {
    $rcon->sendCommand('reload');
  }
}

if (isset($_GET['stop'])) {
  if (@$rcon->connect())
  {
    $rcon->sendCommand('stop');
  }
}

sleep(3);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>