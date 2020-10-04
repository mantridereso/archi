<?php
namespace SVB\CBS\Model\TranslationDomain\ShippingCoDomain;
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 21.09.15
 * Time: 17:05
 */
interface RouteInterface
{

    /**
     * @return VillageInterface
     */
    public function getFromVillage();

    /**
     * @return VillageInterface
     */
    public function getToVillage();

    /**
     * @return TransportInterface
     */
    public function getTransport();

    /**
     * @return ShipInterface
     */
    public function getShip();

    /**
     * @return \DateTime|null
     */
    public function getStartDate();

    /**
     * @return \DateTime|null
     */
    public function getArrivalDate();

}