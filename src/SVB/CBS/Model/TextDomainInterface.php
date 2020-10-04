<?php
namespace SVB\CBS\Model;
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 19.09.15
 * Time: 17:23
 */
interface TextDomainInterface
{

    /**
     * @return string
     */
    public function getValue();

    /**
     * @return LanguageInterface
     */
    public function getLanguage();

}