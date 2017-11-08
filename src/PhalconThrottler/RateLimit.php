<?php

namespace OakLabs\PhalconThrottler;

class RateLimit
{
    /**
     * @var int
     */
    private $hits;

    /**
     * @var int
     */
    private $remaining;

    /**
     * @var int
     */
    private $period;

    /**
     * @var int
     */
    private $hitsPerPeriod;

    /**
     * @var bool
     */
    private $limited;

    /**
     * @var bool
     */
    private $warning;

    public function __construct(
        int $hits,
        int $remaining,
        int $period,
        int $hitsPerPeriod,
        bool $limited,
        bool $warning)
    {
        $this->hits = $hits;

        $this->remaining = $remaining;

        $this->period = $period;

        $this->hitsPerPeriod = $hitsPerPeriod;

        $this->limited = $limited;

        $this->warning = $warning;
    }

    /**
     * @return int
     */
    public function getHits(): int
    {
        return $this->hits;
    }

    /**
     * @return int
     */
    public function getRemaining(): int
    {
        return $this->remaining;
    }

    /**
     * @return int
     */
    public function getPeriod(): int
    {
        return $this->period;
    }

    /**
     * @return int
     */
    public function getHitsPerPeriod(): int
    {
        return $this->hitsPerPeriod;
    }

    /**
     * @return bool
     */
    public function isLimited(): bool
    {
        return $this->limited;
    }

    /**
     * @return bool
     */
    public function isWarning(): bool
    {
        return $this->warning;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'hits' => $this->getHits(),
            'remaining' => $this->getRemaining(),
            'period' => $this->getPeriod(),
            'hits_per_period' => $this->getHitsPerPeriod(),
            'warning' => $this->isWarning(),
            'limited' => $this->isLimited()
        ];
    }
}
