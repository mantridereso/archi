<?php
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 19.09.15
 * Time: 17:45
 */

namespace SVB\CBS\Model;


interface PersonInterface
{

    /**
     * @return string
     * 3-letter acronym id
     */
    public function getId();

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @return LanguageProficiencyInterface[]
     */
    public function getLanguageProficiencies();

}