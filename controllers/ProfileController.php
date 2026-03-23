<?php
/**
 * PROFILE CONTROLLER
 * ====================
 * Handles user profile viewing and updating.
 *
 * FUNCTIONS TO IMPLEMENT:
 *
 * 1. show()
 *    - FR-004: Display logged-in user's profile information
 *    - Fetch user data from 'users' table
 *    - Display profile settings view with current values
 *
 * 2. update()
 *    - FR-004: Process profile update form submission
 *    - Validate inputs: name, email, phone
 *    - Check if new email already exists for another user
 *    - Update user record in 'users' table via User model
 *    - Update session data with new values
 *    - Redirect back to profile with success message
 *
 * 3. changePassword()
 *    - FR-004: Handle password change
 *    - Validate current password matches stored hash
 *    - Validate new password and confirm password match
 *    - Hash new password with password_hash() (NFR-003)
 *    - Update password in 'users' table
 *    - Redirect back to profile with success message
 *
 * SECURITY:
 * - Validate CSRF token on all form submissions (NFR-006)
 * - Verify current password before allowing password change
 * - Use prepared statements (NFR-004)
 */
