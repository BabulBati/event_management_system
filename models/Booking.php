<?php
/**
 * BOOKING MODEL
 * ===============
 * Database queries related to the 'bookings' table.
 * All queries must use PDO prepared statements (NFR-004).
 *
 * FUNCTIONS TO IMPLEMENT:
 *
 * 1. create($eventId, $attendeeId)
 *    - INSERT new booking into 'bookings' table with status='confirmed'
 *    - Used by: BookingController::book()
 *    - Returns: new booking ID or false
 *
 * 2. findById($id)
 *    - SELECT single booking by ID, JOIN with events and users
 *    - Used by: BookingController::cancel()
 *    - Returns: booking record with event and attendee details
 *
 * 3. cancel($id)
 *    - UPDATE booking status to 'cancelled'
 *    - Used by: BookingController::cancel()
 *    - Returns: true/false
 *
 * 4. getByAttendee($attendeeId)
 *    - SELECT all bookings for a specific attendee
 *    - JOIN with events table for event details (title, date, venue, image)
 *    - ORDER BY event_date (upcoming first)
 *    - Used by: BookingController::myBookings() (FR-014)
 *    - Returns: array of bookings with event details
 *
 * 5. getByEvent($eventId)
 *    - SELECT all confirmed bookings for a specific event
 *    - JOIN with users table for attendee details (name, email)
 *    - Used by: Organizer's "Event Bookings" page
 *    - Returns: array of bookings with attendee details
 *
 * 6. hasBooked($eventId, $attendeeId)
 *    - Check if an attendee already has a confirmed booking for an event
 *    - Used by: BookingController::book() to prevent duplicate bookings (FR-016)
 *    - Returns: true/false
 *
 * 7. getAll($filters = [])
 *    - SELECT all bookings with optional filters (event_id, date, status)
 *    - JOIN with events and users tables
 *    - Used by: AdminController::viewBookings() (FR-025)
 *    - Returns: array of all bookings
 *
 * 8. countAll()
 *    - SELECT COUNT of all bookings
 *    - Used by: AdminController::dashboard()
 *    - Returns: integer count
 *
 * 9. getBookedAttendees($eventId)
 *    - SELECT all attendee emails for a specific event (confirmed bookings)
 *    - Used by: EventController::delete() for sending cancellation emails (FR-008)
 *    - Returns: array of attendee email addresses
 *
 * 10. cancelByEvent($eventId)
 *     - UPDATE all bookings for an event to status='cancelled'
 *     - Used when organizer or admin cancels/deletes an event
 *     - Returns: number of affected rows
 */
