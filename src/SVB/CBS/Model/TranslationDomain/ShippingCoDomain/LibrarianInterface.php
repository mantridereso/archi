<?php
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 23.09.15
 * Time: 16:42
 */

namespace SVB\CBS\Model\TranslationDomain\ShippingCoDomain;


interface LibrarianInterface extends BusinessActorInterface
{

    /**
     * @return VillageInterface
     */
    public function getVillage();

}