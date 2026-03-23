<?php
/**
 * REGISTRATION PAGE (FR-001)
 * ============================
 * Public page — no login required.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Register")
 * - Create a centered registration form using Bootstrap 5 card component
 * - Form fields:
 *   - Full Name (type="text", required, min 2 characters)
 *   - Email Address (type="email", required, unique validation)
 *   - Phone Number (type="tel", required)
 *   - Password (type="password", required, min 8 characters)
 *   - Confirm Password (type="password", required, must match password)
 *   - Role Selection (radio buttons or dropdown: "Organizer" or "Attendee")
 *   - Hidden CSRF token field (NFR-006)
 * - Submit button: "Register"
 * - Link: "Already have an account? Login here" → login.php
 * - Display validation error messages (email exists, passwords don't match, etc.)
 * - Form action should POST to AuthController::register()
 * - Client-side validation:
 *   - Email format check
 *   - Password strength indicator
 *   - Confirm password match check
 *   - All required fields filled
 * - Include footer.php
 *
 * NOTE: Admin accounts should NOT be creatable via registration.
 *       Admin accounts are created directly in the database or via seeder.
 */
