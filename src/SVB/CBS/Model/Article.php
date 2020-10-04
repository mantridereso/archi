<?php
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 21.09.15
 * Time: 13:35
 */

namespace SVB\CBS\Model;

use HireVoice\Neo4j\Annotation as OGM;
use Doctrine\Common\Collections\ArrayCollection;

class Article implements ArticleInterface
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var DescriptionInterface[]
     */
    private $descriptions;

    /**
     * @return int
     */
    public function getId()
    {
        // TODO: Implement getId() method.
    }

    /**
     * @return DescriptionInterface[]
     */
    public function getDescriptions()
    {
        // TODO: Implement getDescriptions() method.
    }
}