<?php


namespace Kvlt\Flexit\Models;

use Doctrine\ORM\Mapping\{
    Entity, Id, Annotation, Column, Table, OneToOne, GeneratedValue, JoinColumn
};

/**
 * @Entity
 * @Table(name = "economy")
 */
class Economy {

    /**
     * @var int
     * @Id
     * @GeneratedValue
     * @Column(type = "integer")
     */
    private $id;

    /**
     * @var float
     * @Column(type = "float")
     */
    private $rubles;

    /**
     * @var int
     * @Column(type = "integer")
     */
    private $coins;

    /**
     * @var int
     * @Column(type = "integer")
     */
    private $xp;

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void {
        $this->id = $id;
    }

    /**
     * @return float
     */
    public function getRubles(): float {
        return $this->rubles;
    }

    /**
     * @param float $rubles
     */
    public function setRubles(float $rubles): void {
        $this->rubles = $rubles;
    }

    /**
     * @return int
     */
    public function getCoins(): int {
        return $this->coins;
    }

    /**
     * @param int $coins
     */
    public function setCoins(int $coins): void {
        $this->coins = $coins;
    }

    /**
     * @return int
     */
    public function getXp(): int {
        return $this->xp;
    }

    /**
     * @param int $xp
     */
    public function setXp(int $xp): void {
        $this->xp = $xp;
    }

}