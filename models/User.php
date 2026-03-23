<?php
/**
 * USER MODEL
 * ============
 * Database queries related to the 'users' table.
 * All queries must use PDO prepared statements (NFR-004).
 *
 * FUNCTIONS TO IMPLEMENT:
 *
 * 1. findByEmail($email)
 *    - SELECT user by email address
 *    - Used by: AuthController::login(), AuthController::forgotPassword()
 *    - Returns: single user record or false
 *
 * 2. findById($id)
 *    - SELECT user by ID
 *    - Used by: ProfileController::show(), AdminController::toggleUserStatus()
 *    - Returns: single user record or false
 *
 * 3. create($data)
 *    - INSERT new user into 'users' table
 *    - $data includes: name, email, password (hashed), phone, role
 *    - Used by: AuthController::register()
 *    - Returns: new user ID or false
 *
 * 4. update($id, $data)
 *    - UPDATE user record (name, email, phone)
 *    - Used by: ProfileController::update()
 *    - Returns: true/false
 *
 * 5. updatePassword($id, $hashedPassword)
 *    - UPDATE only the password field for a user
 *    - Used by: ProfileController::changePassword(), AuthController::resetPassword()
 *    - Returns: true/false
 *
 * 6. toggleStatus($id)
 *    - UPDATE user status between 'active' and 'inactive'
 *    - Used by: AdminController::toggleUserStatus()
 *    - Returns: true/false
 *
 * 7. getAll($filters = [])
 *    - SELECT all users with optional filters (role, search by name/email)
 *    - Used by: AdminController::manageUsers()
 *    - Returns: array of user records
 *
 * 8. countAll()
 *    - SELECT COUNT of all users
 *    - Used by: AdminController::dashboard()
 *    - Returns: integer count
 *
 * 9. emailExists($email, $excludeId = null)
 *    - Check if email already exists (excluding a specific user ID for profile updates)
 *    - Used by: AuthController::register(), ProfileController::update()
 *    - Returns: true/false
 */
