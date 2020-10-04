<?php
namespace SVB\CBS\Model\TranslationDomain\ShippingCoDomain;
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 21.09.15
 * Time: 17:10
 */
interface ShipInterface
{

    /**
     * @return RouteInterface[]
     */
    public function getRoute();

    /**
     * @return ShipperInterface
     */
    public function getShipper();

}