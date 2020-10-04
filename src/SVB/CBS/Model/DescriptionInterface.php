<?php
namespace SVB\CBS\Model;

/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 19.09.15
 * Time: 17:18
 */
interface DescriptionInterface
{

    /**
     * @return TextDomainInterface
     */
    public function getText();

    /**
     * @return DescribableInterface
     */
    public function getSubject();

}