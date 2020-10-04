<?php
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 18.09.15
 * Time: 13:43
 */

require_once dirname(__FILE__).'/../vendor/autoload.php';

use Neoxygen\NeoClient\ClientBuilder;

$client = ClientBuilder::create()
    ->addConnection('default', 'http', 'localhost', 7474, true, "neo4j", "123456")
    ->build();

$query = '
CREATE (cat_root:Category {id:0})
CREATE (cat1:Category {id:43})
CREATE (cat2:Category {id: 533})
CREATE (cat3:Category {id: 12})
CREATE (cat1)-[:EXTENDS]->(cat_root)
CREATE (cat2)-[:EXTENDS]->(cat_root)
CREATE (cat3)-[:EXTENDS]->(cat1)

CREATE (a1:Article {id: 432828})
CREATE (a1)-[:IS_A]->(cat3)


CREATE (de:Language {name: "German"})
CREATE (en:Language {name: "English"})
CREATE (fr:Language {name: "French"})

CREATE (p1:Person {name: "Julian"})
CREATE (p2:Person {name: "John"})
CREATE (p3:Person {name: "Marie-Rose"})

CREATE (p1)-[:CAN_READ {level: 6}]->(de)
CREATE (p1)-[:CAN_WRITE {level: 6}]->(de)
CREATE (p2)-[:CAN_READ {level: 5}]->(de)
CREATE (p2)-[:CAN_READ {level: 6}]->(en)
CREATE (p2)-[:CAN_WRITE {level: 6}]->(en)
CREATE (p3)-[:CAN_READ {level: 4.5}]->(en)
CREATE (p3)-[:CAN_READ {level: 6}]->(fr)
CREATE (p3)-[:CAN_WRITE {level: 6}]->(fr)

CREATE (tr0:Transformation {started: timestamp(), committed: timestamp()})
CREATE (t1:Text {content: "Hunde mögen keine Katzen"})
CREATE (tr0)-[:IN_LANGUAGE]->(de)
CREATE (tr0)-[:PROC]->(t1)
CREATE (tr0)-[:BY]->(p1)

CREATE (tr1:Transformation {started: timestamp(), committed: timestamp()})
CREATE (t11:Text {content: "Dogs don\'t like cats"})
CREATE (tr1)-[:IN_LANGUAGE]->(en)
CREATE (t1)-[:PROC]->(tr1)
CREATE (tr1)-[:PROC]->(t11)
CREATE (tr1)-[:BY]->(p2)

CREATE (tr2:Transformation {started: timestamp(), committed: timestamp()})
CREATE (t12:Text {content: "Les chiens n\'aiment pas les chats"})
CREATE (tr2)-[:IN_LANGUAGE]->(fr)
CREATE (t11)-[:PROC]->(tr2)
CREATE (tr2)-[:PROC]->(t12)
CREATE (tr2)-[:BY]->(p3)

CREATE (tr3:Transformation {started: timestamp(), committed: timestamp()})
CREATE (t2:Text {content: "Die meisten Hunde mögen keine Katzen."})
CREATE (tr3)-[:IN_LANGUAGE]->(de)
CREATE (t1)-[:PROC]->(tr3)
CREATE (tr3)-[:PROC]->(t2)
CREATE (tr3)-[:BY]->(p1)

CREATE (tr4:Transformation {started: NULL, committed: NULL})
CREATE (t21:Text {content: NULL})
CREATE (tr4)-[:IN_LANGUAGE]->(en)
CREATE (t2)-[:PROC]->(tr4)
CREATE (t11)-[:PROC]->(tr4)
CREATE (tr4)-[:PROC]->(t21)

CREATE (t2)-[:DESCRIBES]->(a1)
RETURN a1;';

$result = $client->sendCypherQuery($query)->getResult();

var_dump($result);