<?php

declare(strict_types=1);

namespace Fschmtt\Keycloak\Enum;

/**
 * Since Keycloak 14.0.0
 */
abstract class NodeType extends Enum
{
    protected static function match(string $value): static
    {
        return match (strtoupper($value)) {
            'ARRAY' => new NodeTypeArray(),
            'BINARY' => new NodeTypeBinary(),
            'BOOLEAN' => new NodeTypeBoolean(),
            'MISSING' => new NodeTypeMissing(),
            'NULL' => new NodeTypeNull(),
            'NUMBER' => new NodeTypeNumber(),
            'OBJECT' => new NodeTypeObject(),
            'POJO' => new NodeTypePojo(),
            'STRING' => new NodeTypeString(),
        };
    }
}