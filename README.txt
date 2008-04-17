This module was created to address a missing piece of functionality in 
the Drupal user system.

Currently if a user updates their email address there is no 
confirmation step to ensure that the new email address belongs
to the user and is able to receive email. 

In researching this issue I came across a patch to Drupal
core to address this issue. The patch is still pending 
however so I wrote this module borrowing from the code
submitted as patches in this issue.

See http://drupal.org/node/85494 for more information

This module uses hook_user to intercept when a user is
updating their user account. If the email address is
being changed then two emails are generated and sent
to both the user's original email address and their new
email address. The user must click a confirmation link
in the email sent to their new email address in order
for the change in their account email address to be
confirmed. The link in the confirmation email expires
after 24 hours.

The site administrator can configure the subject, from
email address, BCC email address if desired and the
body of the emails sent to both the user's original
email address and their new email address.

This module was developed in part for the Beijinger
website http://www.thebeijinger.com (soon to be 
rolled out as a Drupal site).

