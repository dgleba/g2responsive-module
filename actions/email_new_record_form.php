<?php
class actions_email_new_record_form {

    function handle(&$params) {

        echo "<br><h2>Email send process - Test...</h2><br>";
        
        // give it some time to send the email. i think set_time_limit(30) is default. May need 60 sec. 2013-11-15
        // http://php.net/manual/en/function.set-time-limit.php
        set_time_limit(55);

        $app = & Dataface_Application::getInstance();  // reference to Dataface_Application object
        $auth = & Dataface_AuthenticationTool::getInstance(); // reference to Dataface_Authentication object
        $user = & $auth->getLoggedInUser();  // Dataface_Record object of currently logged in user.
        $rrecord = & $app->getRecord();  // Currently selected noterecord (Dataface_Record object)

        $to1      = 'oclarke@stackpole.com';
        $subject1 = 'Test Email';
        
        $headers1 = "From: " . "rpt1" . "\r\n";
        $headers1 .= "Reply-To: " . "Do-not@reply" . "\r\n";
        $headers1 .= "MIME-Version: 1.0\r\n";
        $headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
        $message1 = '<html><body>';
        $message1 .= '<table cellpadding="5" cellspacing="0" border="1"   bgcolor="#DAFFDA">';
        
        // grey color - standard = #eee;
        $message1 .= "<tr ><td>Name: </td><td>" . $rrecord->strval('name') . "</td></tr>";
        $message1 .= "<tr ><td>Phone: </td><td>" . $rrecord->strval('phone') . "</td></tr>";
        $message1 .= "<tr ><td>Note: </td><td>" . $rrecord->strval('note') . "</td></tr>";
        $message1 .= "<tr ><td>ID: </td><td>" . $rrecord->strval('id') . "</td></tr>";

        $message1 .= "<tr ><td>Created time: </td><td>" . $rrecord->strval('createdtime') . "</td></tr>";
        $message1 .= "<tr ><td>Updated time: </td><td>" . $rrecord->strval('modifed_at') . "</td></tr>";

        $message1 .= "</table>";
        $message1 .= "</body></html>";

        // replace \r and \n with html br tags to preserve new lines in the html email...
        $body1 = isset($message1) ? preg_replace('#(\\r\\n|\\n|\\r)#', '<br/>', $message1) : false;
        $body1 = preg_replace('#(______,|______)#', '<br/>', $body1);
        $body1 = preg_replace('#(</td></tr>)#', '</td></tr>'.PHP_EOL, $body1);

        if (mail($to1, $subject1, $body1, $headers1)) {
            echo '<br><br><h1><span style="background-color:#00ff00;">Your email has been sent.</span></h1><br>';
        } else {
            echo '<br><br /><h1><span style="background-color:#ff0000;">There was a problem sending the email.</span></h1><br />';
        }
        echo '<br /><br /><br /><span style="font-size:16px;">Press the BACK button in your browser to go back.</span><br />';
        


    }
}
 
