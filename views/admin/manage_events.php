<?php
/**
 * MANAGE EVENTS PAGE (FR-024)
 * ==============================
 * Protected page — only accessible to admin.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Manage Events")
 * - Include sidebar.php
 * - Include auth_check.php → requireRole('admin')
 * - Receive events data from AdminController::manageEvents()
 *
 * SECTIONS TO BUILD:
 *
 * 1. FILTER BAR
 *    - Filter dropdown: by status (All, Pending, Approved, Rejected, Cancelled)
 *    - Filter dropdown: by category
 *    - Search input: search by event title
 *    - "Apply" button
 *
 * 2. EVENTS TABLE
 *    - Columns: #, Title, Organizer, Category, Date, Venue, Capacity, Status, Actions
 *    - Status badge colors:
 *      - Pending → yellow/warning
 *      - Approved → green/success
 *      - Rejected → red/danger
 *      - Cancelled → grey/secondary
 *    - Actions:
 *      - "Approve" button (only for pending events) → AdminController::approveEvent()
 *      - "Reject" button (only for pending events) → AdminController::rejectEvent()
 *      - "Delete" button with confirmation → AdminController::deleteEvent()
 *        - Confirm: "This will notify all booked attendees. Are you sure?"
 *      - "View Details" link → event detail page
 *    - All action buttons include CSRF token (NFR-006)
 *    - Show total event count per status
 *
 * 3. PAGINATION
 *    - Paginate if more than ITEMS_PER_PAGE
 *
 * - Include footer.php
 */
