# woocommerce-local-pickup-email

## Allows to extend email capabilities of woo commerce, adding emails to send when local pickup is selected during checkout. These emails are triggered in the following order: 1. Order has the 'processing' status (i.e.) has been paid, and 2. Order has 'completed' status. 

## HOW:
Adds 2 new classes that use default templates to woo commerce emails. These emails are ONLY sent when LOCAL PICKUP is the selected form of shipping. 

## How to Use:
Create plug-in folder and put the includes and woocommerce-local-order-email.php into the folder through FTP or cpanel terminal access. 

### Change trigger function in class files to create other filters than local pick-up. This uses default templates for woo commerce emails.
