<?php
// DATABASE CONFIGURATION
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "school_db";

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// PAYSTACK CONFIGURATION (do not change)
define("PAYSTACK_SECRET", "sk_test_a845ea94f6c3bd9e6e2601f1fb231a673679fec3");
define("PAYSTACK_PUBLIC", "pk_test_c3e17821e5ac46917c5e8acd260f28b0c0f602f4");

// CONTACT FORM EMAIL
define("ADMIN_EMAIL", "your-admin-email@example.com"); // ← change this to your real admin email
?>

















