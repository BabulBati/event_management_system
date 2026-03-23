<?php
/**
 * BOOKING CONTROLLER
 * ====================
 * Handles all booking-related actions for attendees.
 *
 * FUNCTIONS TO IMPLEMENT:
 *
 * 1. book($eventId)
 *    - FR-012: Process event booking for logged-in attendee
 *    - Auth check: only attendees can book
 *    - FR-016: Check if attendee has already booked this event (prevent duplicates)
 *    - FR-017: Check if event has available seats (available_seats > 0)
 *    - Check if event is approved and event date has not passed
 *    - Insert booking into 'bookings' table via Booking model
 *    - Decrease available_seats by 1 in 'events' table
 *    - FR-013: Send booking confirmation email with event details (PHPMailer)
 *    - Display confirmation message and redirect
 *
 * 2. myBookings()
 *    - FR-014: Fetch all bookings for the logged-in attendee
 *    - Join with events table to get event details (title, date, venue)
 *    - Separate into upcoming and past bookings
 *    - Display in attendee's "My Bookings" view
 *
 * 3. cancel($bookingId)
 *    - FR-015: Cancel a booking before the event date
 *    - Auth check: only the attendee who made the booking can cancel
 *    - Verify event date has not passed
 *    - Update booking status to 'cancelled' in 'bookings' table
 *    - Increase available_seats by 1 in 'events' table
 *    - Send cancellation confirmation email (FR-020)
 *    - Redirect back to My Bookings with success message
 *
 * SECURITY:
 * - Validate CSRF token on book/cancel actions (NFR-006)
 * - Use prepared statements for all queries (NFR-004)
 * - Verify user ownership before allowing cancellation
 */
