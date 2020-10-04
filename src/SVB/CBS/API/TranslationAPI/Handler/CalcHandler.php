<?php
namespace SVB\CBS\API\Handler;
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 19.09.15
 * Time: 14:08
 */
class CalcHandler {

    public function add($a, $b) { return $a + $b; }

    public function sub($a, $b) { return $a - $b; }

    public function div($a, $b) { return $a / $b; }

}