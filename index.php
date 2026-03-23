<?php
/**
 * INDEX.PHP — APPLICATION ENTRY POINT / FRONT CONTROLLER
 * =========================================================
 * This is the main entry point of the Event Management System.
 *
 * TODO:
 *
 * 1. SESSION SETUP
 *    - Start PHP session with secure configuration (NFR-007):
 *      - session.cookie_httponly = true
 *      - session.cookie_samesite = 'Strict'
 *      - session.cookie_secure = true (for HTTPS, can be false in local dev)
 *    - Call session_start()
 *
 * 2. REQUIRE CONFIG FILES
 *    - require_once 'config/db.php'       (database connection)
 *    - require_once 'config/constants.php' (site constants)
 *
 * 3. ROUTING (Simple Approach)
 *    Option A — Simple Router using $_GET['page']:
 *    - Read $_GET['page'] parameter to determine which page to load
 *    - Use a switch/case or if/else to route to the correct controller/view
 *    - Example routes:
 *      - ?page=home         → views/public/homepage.php
 *      - ?page=event&id=X   → EventController::show($id)
 *      - ?page=login        → views/auth/login.php
 *      - ?page=register     → views/auth/register.php
 *      - ?page=dashboard    → Route to role-specific dashboard
 *      - ?page=my-bookings  → BookingController::myBookings()
 *      - ?page=create-event → EventController::create()
 *      - ?page=my-events    → EventController::myEvents()
 *      - ?page=admin-users  → AdminController::manageUsers()
 *      - etc.
 *    - Default: load homepage
 *
 *    Option B — .htaccess URL Rewriting (cleaner URLs):
 *    - Rewrite /events to index.php?page=events
 *    - Rewrite /event/5 to index.php?page=event&id=5
 *    - See .htaccess file for rewrite rules
 *
 * 4. ERROR HANDLING
 *    - Set custom error handler for development (display errors)
 *    - For production: log errors, show user-friendly error page
 *
 * 5. FLASH MESSAGES
 *    - Implement a simple flash message system using $_SESSION
 *    - setFlash('success', 'Event created!') → store in session
 *    - getFlash('success') → retrieve and delete from session
 *    - Display flash messages in header.php or at top of each page
 *
 * NOTE: The existing index.html should be replaced by this index.php
 *       once development begins. Apache serves index.php over index.html
 *       if both exist (can be configured in .htaccess).
 */
