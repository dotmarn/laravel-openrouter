<?php

declare(strict_types=1);

namespace MoeMizrak\LaravelOpenrouter\DTO;

/**
 * DTO for URL citation data in web search annotations.
 * For more info: https://openrouter.ai/docs/guides/features/web-search#parsing-web-search-results
 *
 * Class UrlCitationData
 * @package MoeMizrak\LaravelOpenrouter\DTO
 */
final class UrlCitationData extends DataTransferObject
{
    /**
     * @inheritDoc
     */
    public function __construct(
        /**
         * The URL of the web search result.
         *
         * @var string|null
         */
        public ?string $url = null,

        /**
         * Title of the web search result.
         *
         * @var string|null
         */
        public ?string $title = null,

        /**
         * Content of the web search result (added by OpenRouter if available).
         *
         * @var string|null
         */
        public ?string $content = null,

        /**
         * The index of the first character of the URL citation in the message.
         *
         * @var int|null
         */
        public ?int $start_index = null,

        /**
         * The index of the last character of the URL citation in the message.
         *
         * @var int|null
         */
        public ?int $end_index = null,
    ) {
        parent::__construct();
    }
}
