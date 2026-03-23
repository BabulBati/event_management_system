<?php
/**
 * EVENT BOOKINGS PAGE (Organizer)
 * ==================================
 * Protected page — organizer can view list of attendees who booked their event.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Event Bookings")
 * - Include sidebar.php
 * - Include auth_check.php → requireRole('organizer')
 * - Verify logged-in organizer owns this event
 * - Receive bookings data from BookingController or EventController
 *
 * SECTIONS TO BUILD:
 *
 * 1. EVENT SUMMARY HEADER
 *    - Event title, date, venue
 *    - Total capacity vs booked seats vs available seats
 *    - Booking fill percentage (progress bar)
 *
 * 2. ATTENDEE LIST TABLE
 *    - Columns: #, Attendee Name, Email, Phone, Booking Date, Status
 *    - Status badge: Confirmed (green), Cancelled (red)
 *    - Show total count of confirmed bookings
 *    - If no bookings: show "No bookings yet for this event" message
 *
 * 3. EXPORT (optional/nice-to-have)
 *    - "Export to CSV" button for attendee list
 *
 * - "Back to My Events" link
 * - Include footer.php
 */
