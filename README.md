Email Confirm
=============

The Email Change Confirmation module addresses missing 
functionality in the core distribution of Backdrop. 
With this module enabled, a user who attempts to change 
the email address associated with their account must 
confirm that change by clicking a confirmation link 
that is sent to the new email address. The confirmation link 
must be clicked with a certain time period after which the 
pending update to their email address will expire and they 
will have to attempt to update their account again.

See https://github.com/backdrop/backdrop-issues/issues/5210
for more information.

This module uses hook_user to intercept when a user is
updating their user account. If the email address is
being changed then two emails are generated and sent
to both the user's original email address and their new
email address. The user must click a confirmation link
in the email sent to their new email address in order
for the change in their account email address to be
confirmed. The link in the confirmation email expires
after 24 hours.

Installation
------------

Install this module using the official Backdrop CMS instructions at <https://backdropcms.org/guide/modules>.

Configuration
-------------

1) Copy the Email Change Confirmation module files to your
   Backdrop modules directory (e.g. /sites/all/modules)
2) To install, enable the Email Change Confirmation module
   on the Backdrop modules page /admin/build/modules
3) Go to /admin/config/people/email_confirm to configure the 
   settings for the emails sent out to users when they
   change their email address.
  a) The site administrator can configure the email Subject,
     From email address, BCC email address (if desired) and 
     the body of the emails sent to both the user's original
     email address and to the new email address they wish to
     change to.

Notes
-----

If an email address is changed by a user that has the 
'administer users' permission, the email confirmation
email is not sent out and the change to the user's
information is effective immediately.

Hooks
-----

The Email Change Confirmation module implements a hook to
allow other modules to take action when a user requests to
change their email address and/or confirms the change of
their email address.

To implement the hook, create a function that ends 
in _email_confirm:

```
MODULENAME_email_confirm($op, $uid, $old_mail, $new_mail) {
  // Do something here
}
```

The `$op` will be either 'email change' when a user edits their
account and changes their email address or 'email confirmation'
when the user clicks the confirmation link in the email sent
out by this module after the user attempts to change their
email address.

The `$uid` is the user ID of the user changing their email
address.

`$old_mail` and `$new_mail` are the user's original email address
and the email address they wish to change to.

Current Maintainers
-------------------

- [Herb v/d Dool](https://github.com/herbdool/)
- Seeking co-maintainers.

Credits
-------

- Ported to Backdrop by [Herb v/d Dool](https://github.com/herbdool/).
- Originally developed for Drupal by [greggles](https://www.drupal.org/u/greggles), [jaydub](https://www.drupal.org/u/jaydub).


License
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for
complete text.