<?php
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 19.09.15
 * Time: 17:56
 */

namespace SVB\CBS\Model;


interface LanguageProficiencyInterface
{

    /**
     * @return PersonInterface
     */
    public function getPerson();

    /**
     * @return LanguageInterface
     */
    public function getLanguage();

    /**
     * @return int
     *
     * 0..6 A0..C2
     */
    public function getLevelReading();

    /**
     * @return int
     *
     * 0..6 A0..C2
     */
    public function getLevelWriting();

    /**
     * @return int
     *
     * 0..6 A0..C2
     */
    public function getLevelListening();

    /**
     * @return int
     *
     * 0..6 A0..C2
     */
    public function getLevelSpeaking();

}