<?php
/**
 * AUTHENTICATION CONTROLLER
 * ==========================
 * Handles all authentication-related actions: registration, login, logout, password reset.
 *
 * FUNCTIONS TO IMPLEMENT:
 *
 * 1. register()
 *    - FR-001: Handle user registration form submission
 *    - Validate inputs: name, email, password, phone, role (organizer/attendee)
 *    - Check if email already exists in database
 *    - Hash password using password_hash() with PASSWORD_BCRYPT (NFR-003)
 *    - Insert new user into 'users' table via User model
 *    - Redirect to login page with success message
 *
 * 2. login()
 *    - FR-002: Handle user login form submission
 *    - Validate email and password inputs
 *    - Fetch user from database by email using User model
 *    - Verify password using password_verify()
 *    - Check if user account is active (status = 'active')
 *    - Start PHP session and store user data (id, name, email, role)
 *    - Configure session with secure flags: httponly, samesite (NFR-007)
 *    - Redirect user to their role-specific dashboard
 *
 * 3. logout()
 *    - Destroy PHP session
 *    - Clear all session data
 *    - Redirect to login page
 *
 * 4. forgotPassword()
 *    - FR-005: Handle forgot password form submission
 *    - Validate email input
 *    - Generate a unique token using bin2hex(random_bytes(32))
 *    - Store token in 'password_resets' table with expiry (1 hour)
 *    - Send password reset email with link containing the token (use PHPMailer)
 *    - Show success message regardless of whether email exists (security)
 *
 * 5. resetPassword()
 *    - FR-005: Handle password reset form submission
 *    - Validate token from URL, check it exists and is not expired
 *    - Validate new password and confirm password match
 *    - Hash the new password and update in 'users' table
 *    - Delete the used token from 'password_resets' table
 *    - Redirect to login page with success message
 *
 * SECURITY:
 * - Validate CSRF token on all form submissions (NFR-006)
 * - Sanitize all inputs server-side (NFR-012)
 * - Use prepared statements for all DB queries (NFR-004)
 */
