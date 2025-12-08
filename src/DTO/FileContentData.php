<?php

namespace MoeMizrak\LaravelOpenRouter\DTO;

/**
 * DTO for file/document content in messages.
 * Supports PDF, DOCX, and other document types for vision-capable models.
 *
 * Class FileContentData
 *
 * @package MoeMizrak\LaravelOpenRouter\DTO
 */
final class FileContentData extends DataTransferObject
{
    /**
     * The allowed type value for file content.
     */
    public const ALLOWED_TYPE = 'file';

    public function __construct(
        /**
         * Content type identifier - must be 'file'.
         *
         * @var string
         */
        public string $type,

        /**
         * File data object containing URL or base64 data.
         *
         * @var FileUrlData
         */
        public FileUrlData $file,
    ) {}
}
