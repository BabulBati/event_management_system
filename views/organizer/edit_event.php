<?php
/**
 * EDIT EVENT PAGE (FR-007)
 * ==========================
 * Protected page — only accessible to the organizer who created the event.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Edit Event")
 * - Include sidebar.php
 * - Include auth_check.php → requireRole('organizer')
 * - Verify logged-in organizer owns this event (check organizer_id)
 * - Verify event date has not passed (FR-007: can only edit before event date)
 * - Receive event data from EventController::edit()
 *
 * FORM FIELDS (pre-filled with existing event data):
 * - Event Title (pre-filled)
 * - Description (pre-filled)
 * - Category (dropdown, pre-selected with current category)
 * - Event Date (pre-filled, must remain a future date)
 * - Event Time (pre-filled)
 * - Venue / Location (pre-filled)
 * - Maximum Capacity (pre-filled)
 *   - NOTE: If capacity is reduced below current bookings, show warning
 * - Cover Image:
 *   - Show current image thumbnail
 *   - Option to upload new image (replaces old one)
 *   - "Remove Image" option
 * - Hidden: event ID
 * - Hidden: CSRF token (NFR-006)
 *
 * BUTTONS:
 * - "Update Event" submit button
 * - "Cancel" → redirect to My Events
 *
 * FORM ACTION: POST to EventController::edit($id)
 * ENCTYPE: multipart/form-data
 *
 * - Include footer.php
 */
