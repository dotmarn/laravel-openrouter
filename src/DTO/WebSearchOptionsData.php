<?php

declare(strict_types=1);

namespace MoeMizrak\LaravelOpenrouter\DTO;

use MoeMizrak\LaravelOpenrouter\Rules\AllowedValues;

/**
 * DTO for web search options configuration.
 * For more info: https://openrouter.ai/docs/guides/features/web-search
 *
 * Class WebSearchOptionsData
 * @package MoeMizrak\LaravelOpenrouter\DTO
 */
final class WebSearchOptionsData extends DataTransferObject
{
    /**
     * @inheritDoc
     */
    public function __construct(
        /**
         * Search context size determines how much search data is retrieved and processed.
         * Options: 'low', 'medium', 'high'
         * - low: Minimal search context, suitable for basic queries
         * - medium: Moderate search context, good for general queries
         * - high: Extensive search context, ideal for detailed research
         *
         * @var string|null
         */
        #[AllowedValues(['low', 'medium', 'high'])]
        public ?string $search_context_size = null,
    ) {
        parent::__construct();
    }
}
