<?php

require_once dirname(__FILE__).'/../../vendor/autoload.php';

use SVB\CBS\Model\TranslationDomain\ShippingCoDomain\Book;
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 23.09.15
 * Time: 17:46
 */
class Test1
{

    //use \SVB\CBS\ContainerAwareTrait;

    public function __construct(){
        $this->em = new HireVoice\Neo4j\EntityManager(array(
            'transport' => 'curl',
            'host' => 'localhost',
            'port' => '7474',
            'username' => 'neo4j',
            'password' => '123456',

            'proxy_dir' => '/tmp',
            'debug' => true,
            'pathfinder_maxdepth' => 20


            // 'transport' => 'curl', // or 'stream'
            // 'host' => 'localhost',
            // 'port' => 7474,
            // 'username' => null
            // 'password' => null,
            // 'proxy_dir' => '/tmp',
            // 'debug' => true, // Force proxy regeneration on each request
            // 'annotation_reader' => ... // Should be a cached instance of the doctrine annotation reader in production
        ));
    }

    public function run(){

        $repository = $this->em->getRepository('SVB\\CBS\\Model\\TranslationDomain\\ShippingCoDomain\\Book');

        $book1 = new Book();
        $book1->setTextContent("HUHU IM WALDE");
        $book1->setCountReaders(0);

        $book2 = new Book();
        $book2->setTextContent("HUHU UND HIHI LUSTIG IM WALDE");

        $book3 = new Book();
        $book3->setTextContent("OUOU AND EEEE FUNNY IN THE FOREST");

        $book2->addPreviousVersion($book1);
        $book2->addPreviousVersion($book3);

        $this->em->persist($book2);
        $this->em->flush();

    }


}

$test1 = new Test1();
$test1->run();