<?php
/**
 * ORGANIZER DASHBOARD
 * =====================
 * Protected page — only accessible to users with role 'organizer'.
 * Include auth_check.php and requireRole('organizer') at the top.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Organizer Dashboard")
 * - Include sidebar.php for organizer navigation
 *
 * SECTIONS TO BUILD:
 *
 * 1. WELCOME SECTION
 *    - Greet user by name: "Welcome, [Name]!"
 *
 * 2. QUICK STATS (Bootstrap cards in a row)
 *    - Total Events Created (count of organizer's events)
 *    - Total Bookings Received (sum of bookings across all organizer's events)
 *    - Upcoming Events (events with future dates)
 *    - Pending Approval (events with status 'pending')
 *
 * 3. UPCOMING EVENTS
 *    - Table or card list of upcoming events by this organizer
 *    - Show: title, date, venue, bookings count, status (approved/pending/rejected)
 *    - Quick action links: Edit, View Bookings
 *
 * 4. RECENT BOOKINGS
 *    - Last 10 bookings received across all organizer's events
 *    - Show: attendee name, event title, booking date
 *
 * - Include footer.php
 */
