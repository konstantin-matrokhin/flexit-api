<?php


namespace Kvlt\Flexit\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name="players")
 */
class FlexitMember implements Member {

    /**
     * @var int
     * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=32)
     */
    private $name;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var int
     */
    private $coins;

    /**
     * @var int
     */
    private $xp;

    /**
     * @var bool
     */
    private $registered;

    /**
     * @var bool
     */
    private $authed;

    /**
     * @var array
     */
    private $friends;

    /**
     * @var int
     */
    private $group;

    /**
     * @var bool
     */
    private $banned;

    /**
     * @var bool
     */
    private $muted;

    /**
     * @var float
     */
    private $bannedUntil;

    /**
     * @var float
     */
    private $lastJoin;

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
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getPasswordHash(): string {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTel(): string {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel(string $tel): void {
        $this->tel = $tel;
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

    /**
     * @return bool
     */
    public function isRegistered(): bool {
        return $this->registered;
    }

    /**
     * @param bool $registered
     */
    public function setRegistered(bool $registered): void {
        $this->registered = $registered;
    }

    /**
     * @return bool
     */
    public function isAuthed(): bool {
        return $this->authed;
    }

    /**
     * @param bool $authed
     */
    public function setAuthed(bool $authed): void {
        $this->authed = $authed;
    }

    /**
     * @return array
     */
    public function getFriends(): array {
        return $this->friends;
    }

    /**
     * @param array $friends
     */
    public function setFriends(array $friends): void {
        $this->friends = $friends;
    }

    /**
     * @return int
     */
    public function getGroup(): int {
        return $this->group;
    }

    /**
     * @param int $group
     */
    public function setGroup(int $group): void {
        $this->group = $group;
    }

    /**
     * @return bool
     */
    public function isBanned(): bool {
        return $this->banned;
    }

    /**
     * @param bool $banned
     */
    public function setBanned(bool $banned): void {
        $this->banned = $banned;
    }

    /**
     * @return bool
     */
    public function isMuted(): bool {
        return $this->muted;
    }

    /**
     * @param bool $muted
     */
    public function setMuted(bool $muted): void {
        $this->muted = $muted;
    }

    /**
     * @return float
     */
    public function getBannedUntil(): float {
        return $this->bannedUntil;
    }

    /**
     * @param float $bannedUntil
     */
    public function setBannedUntil(float $bannedUntil): void {
        $this->bannedUntil = $bannedUntil;
    }

    /**
     * @return float
     */
    public function getLastJoin(): float {
        return $this->lastJoin;
    }

    /**
     * @param float $lastJoin
     */
    public function setLastJoin(float $lastJoin): void {
        $this->lastJoin = $lastJoin;
    }

}