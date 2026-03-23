<?php
/**
 * PASSWORD RESET MODEL
 * ======================
 * Database queries related to the 'password_resets' table.
 * All queries must use PDO prepared statements (NFR-004).
 *
 * FUNCTIONS TO IMPLEMENT:
 *
 * 1. create($userId, $token, $expiresAt)
 *    - INSERT new password reset token
 *    - Delete any existing tokens for this user first (one active token per user)
 *    - Used by: AuthController::forgotPassword() (FR-005)
 *    - Returns: true/false
 *
 * 2. findByToken($token)
 *    - SELECT password reset record by token
 *    - Check if token has not expired (expires_at > NOW())
 *    - Used by: AuthController::resetPassword()
 *    - Returns: record with user_id or false
 *
 * 3. delete($token)
 *    - DELETE a used or expired token
 *    - Used by: AuthController::resetPassword() after successful reset
 *    - Returns: true/false
 *
 * 4. deleteExpired()
 *    - DELETE all tokens where expires_at < NOW()
 *    - Cleanup function, can be called on each new reset request
 *    - Returns: number of deleted rows
 */
