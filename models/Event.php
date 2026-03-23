<?php
/**
 * EVENT MODEL
 * =============
 * Database queries related to the 'events' table.
 * All queries must use PDO prepared statements (NFR-004).
 *
 * FUNCTIONS TO IMPLEMENT:
 *
 * 1. findById($id)
 *    - SELECT single event by ID, JOIN with categories and users (organizer)
 *    - Used by: EventController::show(), EventController::edit()
 *    - Returns: single event record with organizer name and category name
 *
 * 2. create($data)
 *    - INSERT new event into 'events' table
 *    - $data: organizer_id, title, description, category_id, event_date, event_time,
 *             venue, capacity, available_seats (= capacity), image, status ('pending')
 *    - Used by: EventController::create()
 *    - Returns: new event ID or false
 *
 * 3. update($id, $data)
 *    - UPDATE event details
 *    - Used by: EventController::edit()
 *    - Returns: true/false
 *
 * 4. delete($id)
 *    - DELETE event from database (or update status to 'cancelled')
 *    - Used by: EventController::delete(), AdminController::deleteEvent()
 *    - Returns: true/false
 *
 * 5. getApproved($page, $perPage)
 *    - SELECT all events with status='approved' and event_date >= today
 *    - ORDER BY event_date ASC
 *    - Implement pagination using LIMIT and OFFSET
 *    - Used by: EventController::index() (homepage listing, FR-010)
 *    - Returns: array of events
 *
 * 6. getByOrganizer($organizerId)
 *    - SELECT all events created by a specific organizer
 *    - Include booking count per event (subquery or JOIN with bookings)
 *    - Used by: EventController::myEvents()
 *    - Returns: array of events with booking counts
 *
 * 7. search($keyword, $filters, $page, $perPage)
 *    - SELECT events matching keyword in title/description (FR-018)
 *    - Apply filters: category_id, event_date, venue (FR-019)
 *    - Only return approved events
 *    - Implement pagination
 *    - Used by: EventController::search()
 *    - Returns: array of matching events
 *
 * 8. getAll($filters = [])
 *    - SELECT all events with optional filters (status, category)
 *    - Used by: AdminController::manageEvents()
 *    - Returns: array of all events
 *
 * 9. updateStatus($id, $status)
 *    - UPDATE event status (pending/approved/rejected/cancelled)
 *    - Used by: AdminController::approveEvent(), AdminController::rejectEvent()
 *    - Returns: true/false
 *
 * 10. updateAvailableSeats($id, $change)
 *     - UPDATE available_seats by incrementing or decrementing
 *     - $change: -1 for booking, +1 for cancellation
 *     - Used by: BookingController::book(), BookingController::cancel()
 *     - Returns: true/false
 *
 * 11. countAll()
 *     - SELECT COUNT of all events
 *     - Used by: AdminController::dashboard()
 *     - Returns: integer count
 *
 * 12. countApproved()
 *     - SELECT COUNT of approved events (for pagination)
 *     - Returns: integer count
 */
