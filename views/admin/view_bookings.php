<?php
/**
 * VIEW ALL BOOKINGS PAGE (FR-025)
 * ==================================
 * Protected page — only accessible to admin.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "All Bookings")
 * - Include sidebar.php
 * - Include auth_check.php → requireRole('admin')
 * - Receive bookings data from AdminController::viewBookings()
 *
 * SECTIONS TO BUILD:
 *
 * 1. FILTER BAR (FR-025)
 *    - Filter dropdown: by event (list of all events)
 *    - Filter: by date range (from date — to date)
 *    - Filter dropdown: by status (All, Confirmed, Cancelled)
 *    - "Apply Filters" button
 *    - "Clear Filters" link
 *
 * 2. BOOKINGS TABLE
 *    - Columns: #, Attendee Name, Attendee Email, Event Title, Event Date, Booking Date, Status
 *    - Status badge: green for Confirmed, red for Cancelled
 *    - Show total booking count and filtered count
 *    - Clicking event title links to event detail page
 *
 * 3. SUMMARY STATS
 *    - Total confirmed bookings
 *    - Total cancelled bookings
 *    - Most booked event
 *
 * 4. PAGINATION
 *    - Paginate if more than ITEMS_PER_PAGE
 *
 * - Include footer.php
 */
