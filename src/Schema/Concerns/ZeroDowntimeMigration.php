<?php

declare(strict_types=1);

namespace Tpetry\PostgresqlEnhanced\Schema\Concerns;

trait ZeroDowntimeMigration
{
    /**
     * The timeout for zero downtime down migrations.
     */
    public function timeoutDown(): float
    {
        // @phpstan-ignore function.impossibleType
        if (property_exists($this, 'timeoutDown')) {
            return (float) $this->timeoutDown;
        }
        // @phpstan-ignore function.impossibleType
        if (property_exists($this, 'timeout')) {
            return (float) $this->timeout;
        }

        return 1.0;
    }

    /**
     * The timeout for zero downtime up migrations.
     */
    public function timeoutUp(): float
    {
        // @phpstan-ignore function.impossibleType
        if (property_exists($this, 'timeoutUp')) {
            return (float) $this->timeoutUp;
        }
        // @phpstan-ignore function.impossibleType
        if (property_exists($this, 'timeout')) {
            return (float) $this->timeout;
        }

        return 1.0;
    }
}
