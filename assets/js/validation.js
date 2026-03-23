/**
 * FORM VALIDATION JAVASCRIPT (NFR-012)
 * =======================================
 * Client-side form validation for all forms in the application.
 * Server-side validation is ALSO required — this is just the first layer.
 *
 * TODO - Validation functions to implement:
 *
 * 1. validateRegistrationForm()
 *    - Name: required, min 2 characters, letters and spaces only
 *    - Email: required, valid email format (regex)
 *    - Phone: required, valid phone format
 *    - Password: required, min 8 characters, recommend mix of upper/lower/number
 *    - Confirm Password: required, must match password field
 *    - Role: required, must select one (organizer or attendee)
 *    - Show inline error messages below each invalid field
 *    - Prevent form submission if any validation fails
 *
 * 2. validateLoginForm()
 *    - Email: required, valid email format
 *    - Password: required, not empty
 *
 * 3. validateEventForm()
 *    - Title: required, max 200 characters
 *    - Description: required, min 20 characters
 *    - Category: required, must select one
 *    - Date: required, must be a future date
 *    - Time: required
 *    - Venue: required, max 200 characters
 *    - Capacity: required, must be a positive integer (> 0)
 *    - Image: optional, but if provided — validate type and size
 *
 * 4. validateProfileForm()
 *    - Name: required, min 2 characters
 *    - Email: required, valid email format
 *    - Phone: required, valid phone format
 *
 * 5. validatePasswordChangeForm()
 *    - Current Password: required
 *    - New Password: required, min 8 characters
 *    - Confirm New Password: required, must match new password
 *    - New password must be different from current password
 *
 * 6. validateReviewForm()
 *    - Rating: required, must be 1-5
 *    - Comment: optional, max 500 characters
 *
 * HELPER FUNCTIONS:
 * - showError(field, message): Display error message below a form field
 * - clearErrors(form): Remove all error messages from a form
 * - isValidEmail(email): Regex check for valid email format
 * - isValidPhone(phone): Regex check for valid phone number
 *
 * APPROACH:
 * - Use addEventListener('submit', ...) on each form
 * - Use Bootstrap 5 validation classes: .is-valid, .is-invalid, .invalid-feedback
 * - Prevent default form submission if validation fails
 */
