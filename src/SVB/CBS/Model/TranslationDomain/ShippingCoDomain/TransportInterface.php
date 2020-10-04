<?php
namespace SVB\CBS\Model\TranslationDomain\ShippingCoDomain;
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 23.09.15
 * Time: 16:15
 */
interface TransportInterface
{

    /**
     * @return RouteInterface
     */
    public function getRoute();

    /**
     * @return BookInterface[]
     */
    public function getBooks();

    /**
     * @return ShipInterface
     */
    public function getShip();



}