# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-52c57cb7d226151d21bc1d8639252dcf');
$domain = "sandbox872d143d0f4c407795d7a0b69f959d6c.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandbox872d143d0f4c407795d7a0b69f959d6c.mailgun.org>',
                        'to'      => 'Dana <devernde@gmail.com>',
                        'subject' => 'Hello Dana',
                        'text'    => 'Congratulations Dana, you just sent an email with Mailgun!  You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain so you can send 10,000 emails/month for free.'));
