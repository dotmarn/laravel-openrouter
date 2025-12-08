<?php

namespace MoeMizrak\LaravelOpenRouter\DTO;

use MoeMizrak\LaravelOpenrouter\DTO\DataTransferObject;

/**
 * DTO for file URL/data wrapper.
 * Supports both direct URLs and base64 data URIs for documents.
 *
 * Class FileUrlData
 *
 * @package MoeMizrak\LaravelOpenRouter\DTO
 */
final class FileUrlData extends DataTransferObject
{
    public function __construct(
        /**
         * File URL or base64 data URI.
         * Formats:
         * - URL: 'https://example.com/document.pdf'
         * - Base64: 'data:application/pdf;base64,JVBERi0xLjQK...'
         *
         * @var string
         */
        public string $url,

        /**
         * Optional filename for context.
         *
         * @var string|null
         */
        public ?string $filename = null,
    ) {}
}
