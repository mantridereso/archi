<?php

namespace SVB\CBS\Model\TranslationDomain\ShippingCoDomain;
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 23.09.15
 * Time: 16:39
 */
interface ContractInterface extends BusinessActionInterface
{
    /**
     * @return int
     */
    public function getGoldPiecesPrepayment();

    /**
     * @return int
     */
    public function getGoldPiecesFulfillment();

}