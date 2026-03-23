<?php
/**
 * EMAIL (PHPMAILER) CONFIGURATION
 * =================================
 *
 * TODO:
 * - Define SMTP host (e.g., smtp.gmail.com)
 * - Define SMTP port (e.g., 587 for TLS)
 * - Define SMTP username and password
 * - Define sender email address and sender name
 * - Enable SMTP authentication
 * - Set encryption type to TLS
 *
 * USAGE:
 * - This config is used by PHPMailer for sending email notifications (FR-020):
 *   1. Booking confirmation emails (FR-013)
 *   2. Booking cancellation emails (FR-015)
 *   3. Event cancellation notifications to all booked attendees (FR-008)
 *   4. Password reset links (FR-005)
 *
 * NOTE:
 * - PHPMailer should be installed via Composer into /vendor/ directory
 * - Never commit real SMTP credentials to version control
 */
