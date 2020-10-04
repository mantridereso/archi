<?php
namespace SVB\CBS\Model\TranslationDomain\ShippingCoDomain;
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 21.09.15
 * Time: 17:06
 */
interface ShipperInterface extends BusinessActorInterface
{

    /**
     * @return ShipInterface[]
     */
    public function getShips();

}