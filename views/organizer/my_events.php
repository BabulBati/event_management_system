<?php
/**
 * MY EVENTS PAGE (Organizer)
 * ============================
 * Protected page — only accessible to users with role 'organizer'.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "My Events")
 * - Include sidebar.php
 * - Include auth_check.php → requireRole('organizer')
 * - Receive events data from EventController::myEvents()
 *
 * SECTIONS TO BUILD:
 *
 * 1. PAGE HEADER
 *    - Title: "My Events"
 *    - "Create New Event" button → links to create_event.php
 *
 * 2. EVENTS TABLE
 *    - Columns: Title, Category, Date, Venue, Capacity, Bookings, Status, Actions
 *    - Status badge colors:
 *      - Pending → yellow/warning
 *      - Approved → green/success
 *      - Rejected → red/danger
 *      - Cancelled → grey/secondary
 *    - Bookings column: show "X / Y" (booked / capacity)
 *    - Actions:
 *      - "Edit" button → edit_event.php?id=X (only if event date not passed) (FR-007)
 *      - "View Bookings" button → event_bookings.php?id=X
 *      - "Delete/Cancel" button with confirmation dialog (FR-008)
 *        - JavaScript confirm: "Are you sure? All attendees will be notified."
 *        - Submit to EventController::delete() with CSRF token
 *    - If no events: show "You haven't created any events yet" message
 *
 * - Include footer.php
 */
