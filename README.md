Instruktioner:
==============

O.B.S
-----
Denna version är endast till för redovisning av kmom10 BTH 2013
En funktion är inbyggd så att man kan ta bort skapade databaser bara för att testa sidan.
Denna funktion ska man endast kunna göra en gång då man startar upp sidan.

  
1.-Gör databasinställningar 
-----------------------------
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
  
O.B.S. innan du spara filen.

Se till att den här raden har rätt prefix:

$db['default']['dbdriver'] = "mysql";

Databas typerna är t.ex. mysql, postgres, odbc, etc. >> Måsta vara små bokstäver.
Olika plattformar kräver olika prefix. BTH har prefix "mysql".
Det är viktigt för att sidan ska kunna skicka mail från servern när medlemmar söker
medlemsskap.  



2.-Ändra i .htaccess filen
--------------------------
Du hittar filen i rooten. Du ska även se application mappen:  

Öppna filen .htaccess  
på rad 3 ändrar du "RewriteBase":  
Ändra sökvägen till den mapp där .htaccess filen och index.php filen är  
Du kanske måste kolla med din host som har webbhotellet vilken som är rätt sökväg.  

Exempel:   
RewriteBase /vision/  
RewriteBase /~username/phpmvc/kmom05/  

3.-Favicon
----------
Vill du ha en favicon så lägger du den i rootmappen och döper den till "favicon.png" 
och sparar över den som följer med.
Vill du byta namn på favicon kan du göra det i filen: "header.php"
Sökvägen till filen: application->views->includes->header.php

4.-Klart att testa
------------------
När alla inställningar är gjorda så gå till första sidan och initiera databaserna.
Följ sedan instruktionerna på sidan.

De databaser som initieras är:
users  
temp-user - Skapas när man skapar users  
pagedata  
blogs  
 
En temporär användare skapas.
Alla lösenorde är md5 skyddade.

//Lycka till!

Vid frågor kontakta 
tjacke@hotmail.com






