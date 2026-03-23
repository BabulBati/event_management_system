<?php
/**
 * MANAGE USERS PAGE (FR-023)
 * =============================
 * Protected page — only accessible to admin.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Manage Users")
 * - Include sidebar.php
 * - Include auth_check.php → requireRole('admin')
 * - Receive users data from AdminController::manageUsers()
 *
 * SECTIONS TO BUILD:
 *
 * 1. SEARCH & FILTER BAR
 *    - Search input: search by name or email (FR-023)
 *    - Filter dropdown: filter by role (All, Admin, Organizer, Attendee)
 *    - Filter dropdown: filter by status (All, Active, Inactive)
 *    - "Search" button
 *
 * 2. USERS TABLE
 *    - Columns: #, Name, Email, Phone, Role, Status, Registered On, Actions
 *    - Role badge: different colors for Admin/Organizer/Attendee
 *    - Status badge: green for Active, red for Inactive
 *    - Actions:
 *      - Activate/Deactivate toggle button (FR-023)
 *        - Submit to AdminController::toggleUserStatus() with CSRF token
 *        - Confirm with JavaScript dialog: "Are you sure you want to deactivate this user?"
 *      - Do NOT allow deactivating other admin accounts (safety check)
 *    - Show total user count
 *
 * 3. PAGINATION
 *    - Paginate user list if more than ITEMS_PER_PAGE
 *
 * - Include footer.php
 */
