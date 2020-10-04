<?php
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 19.09.15
 * Time: 18:15
 */

namespace SVB\CBS\Model;


interface TextTransformationInterface extends TextDomainInterface
{

    /**
     * @return TextDomainInterface[]
     */
    public function getSources();

    /**
     * @return TextDomainInterface
     */
    public function getTarget();

    /**
     * @return PersonInterface[]
     */
    public function getContributors();

    /**
     * @return boolean
     */
    public function isStarted();

    /**
     * @return boolean
     */
    public function isCommitted();

    /**
     * @return \DateTime|null
     *
     * =null if not started yet
     */
    public function getStartDateTime();

    /**
     * @return \DateTime|null
     *
     * =null if not committed yet
     */
    public function getCommitDateTime();

    /**
     * @return int
     *
     * returns numeric transaction id
     *
     * @throws \Exception //TODO define and implement specific exceptions for various conflict scenarios
     */
    public function start();

    /**

     * @param int $transactionId
     * @param PersonInterface $contributor
     * @param TextDomainInterface $target
     * @return TextTransformationInterface
     *
     * @return $this
     *
     * @throws \Exception //TODO define and implement specific exceptions for various conflict scenarios
     */
    public function commit($transactionId, PersonInterface $contributor, TextDomainInterface $target);

    /**
     * @param $transactionId
     * @param PersonInterface $personCommanding
     * @return TextTransformationInterface
     *
     * @return $this
     *
     * @throws \Exception //TODO define and implement specific exceptions for various conflict scenarios
     */
    public function rollback($transactionId, PersonInterface $personCommanding);

}