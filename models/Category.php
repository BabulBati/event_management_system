<?php
/**
 * CATEGORY MODEL
 * ================
 * Database queries related to the 'categories' table.
 * All queries must use PDO prepared statements (NFR-004).
 *
 * FUNCTIONS TO IMPLEMENT:
 *
 * 1. getAll()
 *    - SELECT all categories ordered by name
 *    - Used by: EventController::create() (dropdown), EventController::search() (filter)
 *    - Returns: array of all categories
 *
 * 2. findById($id)
 *    - SELECT single category by ID
 *    - Returns: single category record or false
 */
