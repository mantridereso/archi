<?php
namespace SVB\CBS\Model\TranslationDomain\ShippingCoDomain;
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 23.09.15
 * Time: 16:32
 */
interface BusinessActionInterface
{

    /**
     * @return TransportInterface
     */
    public function getTransport();

    /**
     * @return BusinessActorInterface
     */
    public function getPrimaryActor();

    /**
     * @return BusinessActorInterface
     */
    public function getSecondaryActor();

    /**
     * @return BusinessActionInterface|null
     */
    public function getPrecedingAction();

}