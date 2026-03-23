<?php
/**
 * NAVIGATION BAR INCLUDE
 * ========================
 * Responsive navbar component using Bootstrap 5.
 *
 * TODO:
 * - Create Bootstrap 5 responsive navbar (navbar-expand-lg)
 * - Display site name/logo as navbar brand (link to homepage)
 * - Show different navigation links based on user login status and role:
 *
 *   IF NOT LOGGED IN:
 *   - Home
 *   - Events (browse all)
 *   - Login
 *   - Register
 *
 *   IF LOGGED IN AS ATTENDEE:
 *   - Home
 *   - Events (browse all)
 *   - My Bookings
 *   - Profile dropdown (Profile Settings, Logout)
 *
 *   IF LOGGED IN AS ORGANIZER:
 *   - Home
 *   - My Events
 *   - Create Event
 *   - Profile dropdown (Profile Settings, Logout)
 *
 *   IF LOGGED IN AS ADMIN:
 *   - Dashboard
 *   - Manage Users
 *   - Manage Events
 *   - View Bookings
 *   - Profile dropdown (Profile Settings, Logout)
 *
 * - Show logged-in user's name in the navbar (from $_SESSION)
 * - Highlight active page link using Bootstrap 'active' class
 * - Include search bar in navbar for event search (FR-018)
 * - Ensure navbar is responsive with hamburger menu on mobile
 */
