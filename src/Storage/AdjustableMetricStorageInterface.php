<?php

namespace Lamoda\Metric\Storage;

use Lamoda\Metric\Storage\Exception\MetricStorageException;

interface AdjustableMetricStorageInterface
{
    /**
     * Returns adjuster for given metric.
     *
     * @param string   $name metric key
     * @param string[] $tags tags metrics should have
     *
     * @return MutableMetricInterface
     *
     * @throws MetricStorageException if metric is not found in storage
     */
    public function getAdjustableMetric(string $name, array $tags = []): MutableMetricInterface;

    /**
     * Checks if storage has metric named by given key.
     *
     * @param string $key metric key
     * @param string[] $tags tags metrics should have
     *
     * @return bool
     */
    public function hasAdjustableMetric(string $key, array $tags = []): bool;
}
