<?php

/**
 * Act on email change confirmation events.
 *
 * This hook allows a module to respond to either the request to change an
 * email or the actual click that changes the email.
 *
 * @param string $op
 *   Either "email change" or "email confirmation".
 * @param int $uid
 *   The user's uid.
 * @param $old_mail
 *   The user's old email.
 * @param $new_mail
 *   The user's new email.
 */
function hook_email_confirm($op, $uid, $old_mail, $new_mail) {
  // Implement your feature here.
}
