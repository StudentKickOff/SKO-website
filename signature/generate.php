<?php
ini_set('display_errors', 'On');
?>

<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>Result</title>
    </head>
    <body>

        <table cellpadding="0" cellspacing="0" border="0" style="background:#fff;">
            <tbody>
                <tr>
                    <td style="color: #2c2c2b; padding-left: 10px; padding-right: 10px;">
                        <table style="padding-bottom: 5px;border-top: 2px dotted red;border-bottom: 2px dotted red;padding-top: 8px;padding-bottom: 8px;">
                            <tbody>
                                 <tr>
                                    <td style="vertical-align: bottom">
                                        <div style="position: relative; letter-spacing: 0.5px; min-width:200px; padding-bottom: 1px; font-family: Arial, Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; font-size: 14pt; line-height: 20px"><?php echo htmlentities($_POST['naam'], ENT_QUOTES, "UTF-8"); ?></div>
                                        <div style="font-family: Arial, Arial, Helvetica, sans-serif; font-size: 10pt; line-height: 15px"><?php echo htmlentities($_POST['functie'], ENT_QUOTES, "UTF-8"); ?></div>

                                    </td>
                                    <td style="text-align: right; vertical-align: bottom">
                                        <div style="font-family: Arial, Arial, Helvetica, sans-serif; font-size: 10pt;"><?php echo htmlentities($_POST['gsm'], ENT_QUOTES, "UTF-8"); ?></div>
                                        <div style="font-family: Arial, Arial, Helvetica, sans-serif; font-size: 10pt;"><a style="text-decoration: none; color:black;" href="http://www.studentkickoff.be">www.studentkickoff.be</a></div>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                    </td>
                    <td><img style="margin-top: 22px" src="http://www.studentkickoff.be/signature/logo2013.png" /></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
