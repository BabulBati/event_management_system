<?php
/**
 * ADMIN DASHBOARD (FR-022)
 * ==========================
 * Protected page — only accessible to users with role 'admin'.
 * Include auth_check.php and requireRole('admin') at the top.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Admin Dashboard")
 * - Include sidebar.php for admin navigation
 *
 * SECTIONS TO BUILD:
 *
 * 1. STATS CARDS (Bootstrap cards in a row, 4 columns)
 *    - Total Users (with icon, link to Manage Users)
 *    - Total Events (with icon, link to Manage Events)
 *    - Total Bookings (with icon, link to View Bookings)
 *    - Pending Events (events awaiting approval, with icon)
 *
 * 2. RECENT ACTIVITY FEED
 *    - Show latest 10 activities across the platform:
 *      - New user registrations
 *      - New events created (pending approval)
 *      - New bookings made
 *    - Each activity: icon, description, timestamp
 *    - "View All" links for each section
 *
 * 3. QUICK CHARTS (optional/nice-to-have)
 *    - Bookings over time (line chart)
 *    - Events by category (pie/donut chart)
 *    - Can use Chart.js library
 *
 * 4. EVENTS PENDING APPROVAL
 *    - List of events with status 'pending'
 *    - Quick approve/reject buttons
 *    - Link to full Manage Events page
 *
 * - Include footer.php
 */
