<?php
namespace SVB\CBS\Model;
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 19.09.15
 * Time: 17:27
 */
interface DescribableInterface
{

    /**
     * @return DescriptionInterface[]
     */
    public function getDescriptions();

}