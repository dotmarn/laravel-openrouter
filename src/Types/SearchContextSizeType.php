<?php

declare(strict_types=1);

namespace MoeMizrak\LaravelOpenrouter\Types;

/**
 * Search context size type for web search options.
 */
final class SearchContextSizeType
{
    /**
     * Minimal search context, suitable for basic queries.
     */
    public const LOW = 'low';

    /**
     * Moderate search context, good for general queries.
     */
    public const MEDIUM = 'medium';

    /**
     * Extensive search context, ideal for detailed research.
     */
    public const HIGH = 'high';
}
