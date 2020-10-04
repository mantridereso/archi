<?php
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 19.09.15
 * Time: 17:49
 */

namespace SVB\CBS\Model;


interface LanguageInterface
{

    /**
     * @return string
     * 2-letter acronym id like 'EN','DE','FR'...
     */
    public function getId();

    /**
     * @return string
     * natural name like 'English', 'Deutsch', 'Francais'...
     */
    public function getName();

}