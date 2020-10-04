<?php
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 19.09.15
 * Time: 16:03
 */

require_once __DIR__.'/../vendor/autoload.php';

$client = new Seven\RpcBundle\JsonRpc\Client("http://api.cbs.svb.local/front.php/rpc/v1/json");

$r = '';
$t1 = microtime(true);

for ($i=0;$i<100;$i++) {
    $r.= $client->call('calc.add', array(1, $i)); // echo 3
    $r.= $client->call('calc.sub', array($i, 3)); // echo -1
    $r.= "\n";
}
$t2 = microtime(true);
echo $r;
echo "SPENT ".($t2-$t1)." s";
