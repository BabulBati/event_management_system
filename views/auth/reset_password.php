<?php
/**
 * RESET PASSWORD PAGE (FR-005)
 * ===============================
 * Public page — accessed via email reset link with token parameter.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Reset Password")
 * - Get token from URL query parameter ($_GET['token'])
 * - If no token provided, redirect to login page with error
 * - Create a centered form using Bootstrap 5 card component
 * - Form fields:
 *   - New Password (type="password", required, min 8 characters)
 *   - Confirm New Password (type="password", required, must match)
 *   - Hidden field: token (from URL)
 *   - Hidden CSRF token field (NFR-006)
 * - Submit button: "Reset Password"
 * - Display error messages (token expired, passwords don't match, etc.)
 * - Form action should POST to AuthController::resetPassword()
 * - Client-side validation: password match check, minimum length
 * - On success, redirect to login page with "Password reset successfully" message
 * - Include footer.php
 */
