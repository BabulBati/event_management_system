<?php
/**
 * EVENT DETAIL PAGE (FR-011)
 * ============================
 * Public page — accessible to all users.
 *
 * TODO:
 * - Include header.php (set $pageTitle = event title)
 * - Receive event data from EventController::show()
 *
 * SECTIONS TO BUILD:
 *
 * 1. EVENT HEADER
 *    - Cover image (full width or large)
 *    - Event title (large heading)
 *    - Category badge
 *    - Event status badge (if applicable)
 *
 * 2. EVENT DETAILS
 *    - Date and time (with calendar icon)
 *    - Venue / Location (with map pin icon)
 *    - Organizer name
 *    - Full description (multi-paragraph)
 *
 * 3. SEAT AVAILABILITY & BOOKING
 *    - Display: "X seats available out of Y"
 *    - Progress bar showing capacity fill percentage
 *    - IF available_seats > 0 AND user is logged in as attendee:
 *      - Show "Book Now" button (FR-012)
 *      - Button submits to BookingController::book()
 *      - Include CSRF token (NFR-006)
 *    - IF available_seats == 0:
 *      - Show "Sold Out" badge, disable button (FR-017)
 *    - IF user is not logged in:
 *      - Show "Login to Book" button → redirect to login page
 *    - IF user already booked this event (FR-016):
 *      - Show "Already Booked" message, disable button
 *
 * 4. REVIEWS & RATINGS (FR-021)
 *    - Display average star rating (1-5 stars visual)
 *    - Display total number of reviews
 *    - List all reviews: attendee name, star rating, comment, date
 *    - IF logged-in attendee has attended (event date passed + confirmed booking)
 *      AND has not yet reviewed:
 *      - Show "Write a Review" form or link to review page
 *
 * - Include footer.php
 */
