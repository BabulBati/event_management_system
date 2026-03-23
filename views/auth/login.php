<?php
/**
 * LOGIN PAGE (FR-002)
 * =====================
 * Public page — no login required.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Login")
 * - Create a centered login form using Bootstrap 5 card component
 * - Form fields:
 *   - Email (type="email", required, with validation)
 *   - Password (type="password", required)
 *   - Hidden CSRF token field (NFR-006)
 * - "Remember Me" checkbox (optional)
 * - Submit button: "Login"
 * - Link: "Don't have an account? Register here" → register.php
 * - Link: "Forgot Password?" → forgot_password.php
 * - Display error messages (invalid credentials, inactive account, etc.)
 * - Display success messages (after registration, password reset, etc.)
 * - Form action should POST to AuthController::login()
 * - Client-side validation using JavaScript (NFR-012)
 * - Include footer.php
 */
