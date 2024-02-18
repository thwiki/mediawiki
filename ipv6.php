<?php
$ip_address = $_SERVER['REMOTE_ADDR'];
$isIpv6 = 0;
if(strpos($ip_address, ':') !== false)
{
    $isIpv6 = 1;
}
echo $isIpv6;
?>