# Architecture: polyfill-uuid

## Purpose

Provides a pure-PHP fallback for the `uuid_*` functions from the `uuid` PECL extension.
Enables UUID generation and handling on systems without the extension.

## Directory Structure

```
Uuid.php       # Pure-PHP implementations of uuid_* functions as static methods
bootstrap.php  # Defines global uuid_* functions if the uuid extension is absent
bootstrap80.php  # PHP 8.0+ variant of the bootstrap
```

## Key Design Decisions

UUID generation (v1, v4) is implemented using PHP's random_bytes() for cryptographically
secure random data. The class follows the RFC 4122 specification for UUID structure and
formatting. The native PECL `uuid` extension is always preferred; this polyfill is only
loaded when it is absent.

## Extension Points

None — drop-in function polyfill matching the PECL uuid extension API.
