<?php
/**
 * ATTENDEE DASHBOARD
 * ====================
 * Protected page — only accessible to users with role 'attendee'.
 * Include auth_check.php and requireRole('attendee') at the top.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "My Dashboard")
 * - Include sidebar.php for attendee navigation
 *
 * SECTIONS TO BUILD:
 *
 * 1. WELCOME SECTION
 *    - Greet user by name: "Welcome, [Name]!"
 *
 * 2. QUICK STATS (Bootstrap cards in a row)
 *    - Total Bookings (count of all user's bookings)
 *    - Upcoming Events (count of confirmed bookings with future event dates)
 *    - Past Events Attended (count of confirmed bookings with past event dates)
 *
 * 3. UPCOMING BOOKINGS
 *    - Display a table or card list of upcoming booked events
 *    - Show: event title, date, venue, booking status
 *    - "View Details" link for each event
 *    - "Cancel Booking" button for each (FR-015)
 *    - If no upcoming bookings: show "No upcoming events. Browse events!" message
 *
 * 4. RECENTLY ATTENDED
 *    - Show last 5 past events the user attended
 *    - "Write Review" button if not yet reviewed (FR-021)
 *
 * - Include footer.php
 */
