<?php

declare(strict_types=1);

namespace MoeMizrak\LaravelOpenrouter\DTO;

/**
 * DTO for annotation data in assistant messages (web search citations).
 * For more info: https://openrouter.ai/docs/guides/features/web-search#parsing-web-search-results
 *
 * Class AnnotationData
 * @package MoeMizrak\LaravelOpenrouter\DTO
 */
final class AnnotationData extends DataTransferObject
{
    public const TYPE_URL_CITATION = 'url_citation';

    /**
     * @inheritDoc
     */
    public function __construct(
        /**
         * The type of annotation. Currently only 'url_citation' is supported.
         *
         * @var string|null
         */
        public ?string $type = null,

        /**
         * The URL citation data.
         *
         * @var UrlCitationData|null
         */
        public ?UrlCitationData $url_citation = null,
    ) {
        parent::__construct();
    }
}
