<?php

namespace MoeMizrak\LaravelOpenRouter\Types;

/**
 * Enum for supported file/document formats.
 */
enum FileFormatType: string
{
    case PDF = 'pdf';
    case DOCX = 'docx';
    case DOC = 'doc';
    case TXT = 'txt';
    case CSV = 'csv';
    case XLSX = 'xlsx';
    case XLS = 'xls';
    case HTML = 'html';
    case MD = 'markdown';

    /**
     * Get MIME type for format.
     */
    public function mimeType(): string
    {
        return match ($this) {
            self::PDF => 'application/pdf',
            self::DOCX => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            self::DOC => 'application/msword',
            self::TXT => 'text/plain',
            self::CSV => 'text/csv',
            self::XLSX => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            self::XLS => 'application/vnd.ms-excel',
            self::HTML => 'text/html',
            self::MD => 'text/markdown',
        };
    }
}
