<?php
/**
 * CREATE EVENT PAGE (FR-006)
 * ============================
 * Protected page — only accessible to users with role 'organizer'.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Create Event")
 * - Include sidebar.php
 * - Include auth_check.php → requireRole('organizer')
 *
 * FORM FIELDS:
 * - Event Title (type="text", required, max 200 characters)
 * - Description (textarea, required, rich text or plain)
 * - Category (dropdown <select>, populated from categories table) (FR-009)
 * - Event Date (type="date", required, must be a future date)
 * - Event Time (type="time", required)
 * - Venue / Location (type="text", required, max 200 characters)
 * - Maximum Capacity (type="number", required, min 1)
 * - Cover Image (type="file", accept=".jpg,.jpeg,.png,.webp") (NFR-015)
 *   - Show image preview using JavaScript before upload
 *   - Display max file size note: "Max 2MB, JPG/PNG/WEBP only"
 * - Hidden CSRF token field (NFR-006)
 *
 * BUTTONS:
 * - "Create Event" submit button
 * - "Cancel" button → redirect to My Events
 *
 * FORM ACTION: POST to EventController::create()
 * ENCTYPE: multipart/form-data (for file upload)
 *
 * CLIENT-SIDE VALIDATION (NFR-012):
 * - All required fields filled
 * - Date is in the future
 * - Capacity is a positive number
 * - File type and size validation before upload
 *
 * DISPLAY:
 * - Success/error messages from controller
 * - Note: "Your event will be reviewed by admin before publishing"
 *
 * - Include footer.php
 */
