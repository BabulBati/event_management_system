<?php
/**
 * ADMIN CONTROLLER
 * ==================
 * Handles all admin panel actions: dashboard, user management, event management, booking overview.
 *
 * NOTE: All functions require admin role check. Redirect non-admin users.
 *
 * FUNCTIONS TO IMPLEMENT:
 *
 * 1. dashboard()
 *    - FR-022: Display admin dashboard with statistics
 *    - Fetch and display: total users, total events, total bookings
 *    - Show recent activity (latest registrations, latest bookings, latest events)
 *    - Pass stats data to admin dashboard view
 *
 * 2. manageUsers()
 *    - FR-023: Display all registered users in a table
 *    - Support search by name or email
 *    - Support filter by role (admin, organizer, attendee)
 *    - Show user details: name, email, role, status, registration date
 *    - Provide activate/deactivate toggle for each user
 *
 * 3. toggleUserStatus($userId)
 *    - FR-023: Activate or deactivate a user account
 *    - Toggle status between 'active' and 'inactive'
 *    - Redirect back to Manage Users with success message
 *
 * 4. manageEvents()
 *    - FR-024: Display all events in a table
 *    - Show event details: title, organizer, category, date, status
 *    - Provide approve/reject/delete actions for each event
 *    - Support filter by status (pending, approved, rejected)
 *
 * 5. approveEvent($eventId)
 *    - FR-024: Change event status to 'approved'
 *    - Redirect back to Manage Events with success message
 *
 * 6. rejectEvent($eventId)
 *    - FR-024: Change event status to 'rejected'
 *    - Redirect back to Manage Events with success message
 *
 * 7. deleteEvent($eventId)
 *    - FR-024: Delete an event that violates guidelines
 *    - Notify organizer via email about deletion
 *    - Notify all booked attendees about event cancellation
 *    - Remove event from database
 *
 * 8. viewBookings()
 *    - FR-025: Display all bookings across the platform
 *    - Support filter by event, date, and booking status
 *    - Show: attendee name, event title, booking date, status
 *
 * SECURITY:
 * - Check admin role on every function (use auth_check.php)
 * - Validate CSRF token on all state-changing actions (NFR-006)
 * - Use prepared statements (NFR-004)
 */
