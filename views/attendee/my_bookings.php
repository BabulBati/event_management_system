<?php
/**
 * MY BOOKINGS PAGE (FR-014)
 * ===========================
 * Protected page — only accessible to users with role 'attendee'.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "My Bookings")
 * - Include sidebar.php
 * - Include auth_check.php → requireRole('attendee')
 * - Receive bookings data from BookingController::myBookings()
 *
 * SECTIONS TO BUILD:
 *
 * 1. TABS OR SECTIONS
 *    - Tab 1: "Upcoming" — confirmed bookings with event date >= today
 *    - Tab 2: "Past" — bookings with event date < today
 *    - Tab 3: "Cancelled" — bookings with status = 'cancelled'
 *    - Use Bootstrap 5 nav-tabs or nav-pills
 *
 * 2. BOOKINGS TABLE (for each tab)
 *    - Columns: Event Title, Date & Time, Venue, Booking Date, Status, Actions
 *    - Status badge: green for "Confirmed", red for "Cancelled"
 *    - Actions:
 *      - "View Event" link → event detail page
 *      - "Cancel Booking" button (only for upcoming confirmed bookings) (FR-015)
 *        - Confirm cancellation with JavaScript confirm() dialog
 *        - Submit to BookingController::cancel() with CSRF token
 *      - "Write Review" link (only for past confirmed bookings without review) (FR-021)
 *    - If no bookings in a tab: show appropriate empty state message
 *
 * - Include footer.php
 */
