<?php
/**
 * REVIEW CONTROLLER
 * ===================
 * Handles attendee feedback and rating for events.
 *
 * FUNCTIONS TO IMPLEMENT:
 *
 * 1. create($eventId)
 *    - FR-021: Display review form (GET) / Process review submission (POST)
 *    - Auth check: only attendees can submit reviews
 *    - Verify the attendee has a confirmed booking for this event
 *    - Verify the event date has passed (can only review after attending)
 *    - Check if attendee has already submitted a review (prevent duplicates)
 *    - Validate rating (1-5 integer) and comment (text, optional)
 *    - Insert review into 'reviews' table via Review model
 *    - Redirect to event detail page with success message
 *
 * 2. getEventReviews($eventId)
 *    - Fetch all reviews for a specific event
 *    - Join with users table to get attendee names
 *    - Calculate average rating for the event
 *    - Return reviews data (used by EventController::show)
 *
 * SECURITY:
 * - Validate CSRF token on form submission (NFR-006)
 * - Sanitize comment text with htmlspecialchars() (NFR-005)
 * - Use prepared statements (NFR-004)
 */
