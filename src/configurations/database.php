<?php

/**
 * Local Development
 */
define("DATABASE_HOST", getenv("DATABASE_HOST") ?: "localhost");
define("DATABASE_NAME", getenv("DATABASE_NAME") ?: "getcontact_web");
define("DATABASE_USER", getenv("DATABASE_USER") ?: "");
define("DATABASE_PASS", getenv("DATABASE_PASS") ?: "");

/**
 * Production
 */
// define("DATABASE_HOST", "");
// define("DATABASE_NAME", "");
// define("DATABASE_USER", "");
// define("DATABASE_PASS", "");