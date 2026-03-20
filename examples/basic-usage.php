<?php

declare(strict_types=1);

/**
 * Example: UUID generation with polyfill-uuid.
 *
 * Install:
 *   composer require symfony/polyfill-uuid
 *
 * If the native uuid PECL extension is present, its functions are used directly.
 * Otherwise, the pure-PHP fallback is transparently activated.
 */

// Generate a version 4 UUID (random)
$uuid = uuid_create(UUID_TYPE_RANDOM);
echo $uuid; // e.g., "550e8400-e29b-41d4-a716-446655440000"

// Generate a version 1 UUID (time-based)
$uuidV1 = uuid_create(UUID_TYPE_TIME);

// Check if a string is a valid UUID
if (uuid_is_valid($uuid)) {
    echo "Valid UUID: $uuid\n";
}

// Parse and unparse
$binary = uuid_parse($uuid);   // binary representation (16 bytes)
$back   = uuid_unparse($binary); // back to string form
