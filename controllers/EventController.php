<?php
/**
 * EVENT CONTROLLER
 * =================
 * Handles all event-related actions for organizers and public viewing.
 *
 * FUNCTIONS TO IMPLEMENT:
 *
 * 1. index()
 *    - FR-010: Fetch and display all approved events on the homepage
 *    - Support pagination (ITEMS_PER_PAGE from constants)
 *    - Pass events data to the public homepage view
 *
 * 2. show($id)
 *    - FR-011: Fetch single event by ID with organizer details
 *    - Fetch associated reviews/ratings for the event
 *    - Calculate average rating
 *    - Check seat availability (available_seats > 0)
 *    - Display event detail page
 *
 * 3. create()
 *    - FR-006: Display create event form (GET) / Process form submission (POST)
 *    - Auth check: only organizers can access
 *    - Validate inputs: title, description, category, date, time, venue, capacity
 *    - Handle image upload:
 *      - Validate file type (JPG, PNG, WEBP only) as per NFR-015
 *      - Validate file size (max 2MB) as per NFR-015
 *      - Generate randomized filename to prevent conflicts
 *      - Move uploaded file to /uploads/events/ directory
 *    - Set available_seats = capacity on creation
 *    - Set event status to 'pending' (requires admin approval per FR-024)
 *    - Insert event via Event model
 *    - Redirect to My Events with success message
 *
 * 4. edit($id)
 *    - FR-007: Display edit form (GET) / Process update (POST)
 *    - Auth check: only the organizer who created the event can edit
 *    - Only allow editing if event date has not passed
 *    - Handle optional image re-upload (delete old image if new one uploaded)
 *    - Update event via Event model
 *
 * 5. delete($id)
 *    - FR-008: Cancel/delete an event
 *    - Auth check: only the organizer who created the event can delete
 *    - Fetch all attendees who booked this event
 *    - Send cancellation email to all booked attendees (FR-008, FR-020)
 *    - Update event status to 'cancelled' (or delete from DB)
 *    - Restore bookings status to 'cancelled'
 *
 * 6. myEvents()
 *    - Fetch all events created by the logged-in organizer
 *    - Show booking count per event
 *    - Display in organizer's "My Events" view with edit/delete actions
 *
 * 7. search()
 *    - FR-018: Search events by title or keyword
 *    - FR-019: Filter events by category, date, venue
 *    - Return filtered/searched results with pagination
 *
 * SECURITY:
 * - Validate CSRF token on create/edit/delete (NFR-006)
 * - Sanitize all inputs (NFR-005, NFR-012)
 * - Use prepared statements (NFR-004)
 */
