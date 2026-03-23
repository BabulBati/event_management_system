<?php
/**
 * FORGOT PASSWORD PAGE (FR-005)
 * ================================
 * Public page — no login required.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Forgot Password")
 * - Create a centered form using Bootstrap 5 card component
 * - Instructional text: "Enter your registered email to receive a password reset link"
 * - Form fields:
 *   - Email Address (type="email", required)
 *   - Hidden CSRF token field (NFR-006)
 * - Submit button: "Send Reset Link"
 * - Link: "Back to Login" → login.php
 * - Display success message: "If this email is registered, a reset link has been sent"
 *   (same message whether email exists or not — security best practice)
 * - Display error messages if any
 * - Form action should POST to AuthController::forgotPassword()
 * - Include footer.php
 */
