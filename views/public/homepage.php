<?php
/**
 * HOMEPAGE (FR-010)
 * ===================
 * Public page — main landing page, no login required.
 *
 * TODO:
 * - Include header.php (set $pageTitle = "Home")
 *
 * SECTIONS TO BUILD:
 *
 * 1. HERO SECTION
 *    - Large banner with background image or gradient
 *    - Headline: "Discover & Book Amazing Events"
 *    - Subtext: brief description of the platform
 *    - Call-to-action button: "Browse Events" (scrolls to event listing)
 *
 * 2. SEARCH BAR (FR-018)
 *    - Prominent search input for searching events by title/keyword
 *    - Search button
 *    - Form submits to EventController::search()
 *
 * 3. CATEGORY FILTER (FR-019)
 *    - Display category buttons/pills: Workshop, Seminar, Concert, Sports, Cultural
 *    - Clicking a category filters the event listing below
 *    - "All" option to show all categories
 *
 * 4. EVENT LISTING (FR-010)
 *    - Display approved, upcoming events in a Bootstrap card grid (3 or 4 per row)
 *    - Each event card shows:
 *      - Cover image (or placeholder if no image)
 *      - Event title
 *      - Date and time
 *      - Venue/location
 *      - Category badge
 *      - Available seats / "Sold Out" badge (FR-017)
 *      - "View Details" button → links to event detail page
 *    - Implement pagination at the bottom (Previous / Page numbers / Next)
 *
 * 5. NFR-010: User should find and book an event within 3 clicks from homepage
 *    - Click 1: Browse homepage → Click 2: View Details → Click 3: Book Now
 *
 * - Include footer.php
 */
