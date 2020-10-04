<?php
namespace SVB\CBS\Model\TranslationDomain\ShippingCoDomain;
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 21.09.15
 * Time: 17:05
 */
interface VillageInterface
{


    /**
     * @return IslandInterface
     */
    public function getIsland();

    /**
     * @param $bookTitle
     * @return BookInterface
     */
    public function getLibraryBook($bookTitle);

    /**
     * @return LibrarianInterface
     */
    public function getLibrarian();



}