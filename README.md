Instruktioner:
==============

1. - Gör databasinställningar
Filen "database.php" hittar du här:
application->config->database.php

Öppna filen och leta reda på dessa rader:
$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['database'] = 'site';

Byt:
'localhost' 	till din host eller webhotell
'root' 			till ditt användarnamn
''				till ett lösenord
'site'			till databasens namn

Spara och stäng filen.



2. Ändra i .htaccess filen
Du hittar filen i rooten. Du ska även se application mappen:

Öppna filen .htaccess
på rad 3 ändrar du "RewriteBase":
Ändra sökvägen till den mapp där .htaccess filen och index.php filen är
Du kanske måste kolla med din host som har webbhotellet vilken som är rätt sökväg.

Exempel: 
RewriteBase /vision/
RewriteBase /~username/phpmvc/kmom05/









