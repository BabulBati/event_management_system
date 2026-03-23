<?php
/**
 * AUTHENTICATION & AUTHORIZATION CHECK
 * =======================================
 * Include this file at the top of any protected page to enforce access control.
 *
 * TODO:
 *
 * 1. Session Validation
 *    - Start session if not already started
 *    - Check if user is logged in (check $_SESSION for user ID)
 *    - If not logged in, redirect to login page with error message
 *
 * 2. Session Timeout (NFR-007)
 *    - Check if session has been inactive for more than 30 minutes (SESSION_TIMEOUT)
 *    - Compare $_SESSION['last_activity'] with current time
 *    - If expired, destroy session and redirect to login with "Session expired" message
 *    - If active, update $_SESSION['last_activity'] to current timestamp
 *
 * 3. Role-Based Access Control (FR-003)
 *    - Provide a function: requireRole($allowedRoles)
 *    - $allowedRoles can be a string ('admin') or array (['admin', 'organizer'])
 *    - Check $_SESSION['role'] against allowed roles
 *    - If role not permitted, redirect to appropriate page with "Access Denied" message
 *
 * 4. CSRF Token Functions (NFR-006)
 *    - generateCSRFToken(): Create a token, store in $_SESSION, return for form embedding
 *    - validateCSRFToken($token): Compare submitted token with session token
 *    - Call these in every form (generate) and form handler (validate)
 *
 * USAGE EXAMPLE (in controller/view files):
 *   require_once 'includes/auth_check.php';
 *   requireRole('admin');           // Only admins can access
 *   requireRole(['admin', 'organizer']); // Admin and organizers can access
 */
