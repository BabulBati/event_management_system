<?php
/**
 * PROFILE SETTINGS PAGE (FR-004)
 * =================================
 * Protected page — accessible to all logged-in users (attendee, organizer).
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Profile Settings")
 * - Include sidebar.php
 * - Include auth_check.php (any logged-in user)
 * - Receive user data from ProfileController::show()
 *
 * SECTIONS TO BUILD:
 *
 * 1. PROFILE INFORMATION FORM
 *    - Pre-filled fields with current user data:
 *      - Full Name (type="text", required)
 *      - Email Address (type="email", required)
 *      - Phone Number (type="tel", required)
 *    - Hidden CSRF token field (NFR-006)
 *    - "Update Profile" submit button
 *    - Form action: POST to ProfileController::update()
 *    - Display success/error messages
 *
 * 2. CHANGE PASSWORD FORM (separate form)
 *    - Fields:
 *      - Current Password (type="password", required)
 *      - New Password (type="password", required, min 8 chars)
 *      - Confirm New Password (type="password", required, must match)
 *    - Hidden CSRF token field
 *    - "Change Password" submit button
 *    - Form action: POST to ProfileController::changePassword()
 *    - Client-side validation: password match, minimum length
 *
 * 3. ACCOUNT INFO (read-only display)
 *    - Role: Attendee/Organizer
 *    - Member since: registration date
 *
 * - Include footer.php
 */
