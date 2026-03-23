<?php
/**
 * REVIEW / RATE EVENT PAGE (FR-021)
 * ====================================
 * Protected page — only accessible to attendees who have attended the event.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Review Event")
 * - Include auth_check.php → requireRole('attendee')
 * - Receive event data from ReviewController::create()
 * - Verify: attendee has confirmed booking AND event date has passed
 *
 * SECTIONS TO BUILD:
 *
 * 1. EVENT SUMMARY
 *    - Display event title, date, venue (read-only reference)
 *
 * 2. REVIEW FORM
 *    - Star Rating (1-5):
 *      - Use clickable star icons (Font Awesome or Bootstrap Icons)
 *      - JavaScript to handle star selection and update hidden input
 *      - Hidden input: name="rating" (required, value 1-5)
 *    - Comment/Review Text:
 *      - Textarea (optional, max 500 characters)
 *      - Character counter using JavaScript
 *    - Hidden CSRF token field (NFR-006)
 *    - "Submit Review" button
 *    - Form action: POST to ReviewController::create()
 *
 * 3. VALIDATION
 *    - Client-side: rating must be selected (1-5)
 *    - Server-side: sanitize comment with htmlspecialchars() (NFR-005)
 *    - Prevent duplicate reviews (check in controller)
 *
 * - Include footer.php
 */
