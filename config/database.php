<?php
/**
 * Database Configuration
 * LSP GLOBAL OTOMOTIF Website
 * 
 * File ini berisi konfigurasi database untuk website
 * Saat ini website bersifat statis, file ini disiapkan untuk pengembangan masa depan
 */

// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'lsp_global_otomotif');
define('DB_USER', 'root');
define('DB_PASS', '');

// Website configuration
define('SITE_NAME', 'LSP GLOBAL OTOMOTIF');
define('SITE_URL', 'http://localhost/LSP-JB');
define('SITE_EMAIL', 'info@lspglobalotomotif.com');

// Timezone
date_default_timezone_set('Asia/Jakarta');

// Error reporting (set to 0 for production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * Database connection function
 * 
 * @return PDO|null
 */
function getDBConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        error_log("Database connection failed: " . $e->getMessage());
        return null;
    }
}

/**
 * Sanitize input data
 * 
 * @param string $data
 * @return string
 */
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Generate CSRF token
 * 
 * @return string
 */
function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Validate CSRF token
 * 
 * @param string $token
 * @return bool
 */
function validateCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Redirect function
 * 
 * @param string $url
 * @return void
 */
function redirect($url) {
    header("Location: " . $url);
    exit();
}

/**
 * Get current page URL
 * 
 * @return string
 */
function getCurrentURL() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

/**
 * Log activity
 * 
 * @param string $action
 * @param string $description
 * @return void
 */
function logActivity($action, $description = '') {
    $logFile = __DIR__ . '/../logs/activity.log';
    $timestamp = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    
    $logEntry = "[$timestamp] [$ip] [$action] $description [$userAgent]\n";
    
    // Create logs directory if it doesn't exist
    $logDir = dirname($logFile);
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}
?>
