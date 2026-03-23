<?php
/**
 * REVIEW MODEL
 * ==============
 * Database queries related to the 'reviews' table.
 * All queries must use PDO prepared statements (NFR-004).
 *
 * FUNCTIONS TO IMPLEMENT:
 *
 * 1. create($eventId, $attendeeId, $rating, $comment)
 *    - INSERT new review into 'reviews' table
 *    - Used by: ReviewController::create() (FR-021)
 *    - Returns: new review ID or false
 *
 * 2. getByEvent($eventId)
 *    - SELECT all reviews for a specific event
 *    - JOIN with users table to get attendee name
 *    - ORDER BY created_at DESC
 *    - Used by: ReviewController::getEventReviews()
 *    - Returns: array of reviews with attendee names
 *
 * 3. getAverageRating($eventId)
 *    - SELECT AVG(rating) for a specific event
 *    - Used by: EventController::show() for event detail page
 *    - Returns: float average rating or null
 *
 * 4. hasReviewed($eventId, $attendeeId)
 *    - Check if an attendee has already reviewed a specific event
 *    - Used by: ReviewController::create() to prevent duplicate reviews
 *    - Returns: true/false
 */
