# apache_php_mysql_dev_x64
Ambiente di sviluppo web Apache-PHP-MySql con Docker Compose per le architetture x86.

### Che cos'è
**apache_php_mysql_dev_x64** è un'applicazione Docker multi-contenitore realizzata con *Docker Compose*<sup>1</sup>, che mette a disposizione un ambiente di sviluppo con *Apache*, *PHP*, *MySQL* e *phpMyAdmin*, già configurati e pronti all'uso per lo sviluppo di applicazioni web con PHP e database di MySQL, per le architetture x64.<br><br>
<sup>1</sup> [Docker Compose](https://docs.docker.com/compose/) è uno strumento per la definizione e l’esecuzione di *applicazioni Docker multi-contenitore*.

### Struttura del progetto
<pre>
+ mysql_data
|
+ php_config
|   |- php.ini
|
+ www
|-docker-compose.yaml
|-Dockerfile
|-README.md
</pre>

- **mysql_data** è la directory del host montata nel docker-container, per realizzare la persistenza dei database di MySQL sul host.<br>
- **www** è la directory del host montata sulla root-directory delle pagine web gestite da Apache nel docker-container, per realizzare la persistenza delle pagine PHP del progetto sul host e, allo stesso tempo, per rendere più semplice la loro gestione.<br>
- La directory **php_config** contiene il file *php.ini* in cui è possibile apportare delle modifiche alla configurazione di PHP.<br><br>
*P.S. Le cartelle **mysql_data** e **www** saranno create automaticamente da Docker Compose durante la creazione dei docker-container.*<br>

### Creazione dei docker-container con Docker Compose
1) Scarica la cartella compressa del progetto cliccando sul bottone *Code* e poi sulla voce *Download ZIP*.<br>
2) Estrai sul disco del tuo computer il contenuto della cartella compressa che hai scaricato.<br>
*P.S. Il nome della cartella principale può essere cambiato.*<br>
1) Installa il *docker-engine* o, per semplicità se utilizzi Windows o macOS, installa [Docker Desktop](https://www.docker.com/products/docker-desktop/).
2) Avvia il docker-engine o Docker Desktop.
3) Digita il comando seguente, utilizzando il terminale all'interno della cartella principale che hai estratto (la cartella che contiene il file *docker-compose.yaml*):<br>
> **docker-compose up**
4) Per controllare il corretto funzionamento dell'ambiente, apri il browser e richiedi la pagina php di test all'indirizzo:<br>
> **localhost:8080/test.php**
5) Per accedere a MySQL, apri il client web *phpMyAdmin* all'indirizzo:<br>
> **localhost:8081**<br>

e utilizza le credenziali seguenti:<br>

> username: root<br>
> password: 1234<br>

*P.S. Le pagine web dei progetti PHP possono essere create sul host nella cartella __www__ e possono essere visualizzate nel browser all'indirizzo __localhost:8080__. La gestione dei database di MySQL può essere fatta utilizzando __phpMyAdmin__ raggiungibile all'indirizzo __localhost:8081__.*

### Accensione e spegnimento dei docker-container
Dopo la creazione dei docker-container, è possibile eseguire i comandi seguenti per, rispettivamente, avviare e terminare la loro esecuzione:<br>
> **docker-compose start**<br>
> **docker-compose stop**<br>

*P.S. I comandi devono essere eseguiti con il terminale nella cartella principale del progetto. Prima dell'avvio dei docker-container, ovviamente ricordati che è neccessario avviare il docker-engine sul host.*<br>

### Versioni, IP address, porte e credenziali di accesso
<pre>
Web server:
    PHP ver. 8.2.1
    Apache ver. 2.4.54 (Debian):
        IP address: localhost:8080
        Root web directory: www (sul computer host)
        
DBMS:    
    MySQL Community Server - GPL ver. 8.0.32:
        Account root:
            username: root
            password: 1234
        Port: 3306
        Directory dei database: mysql_data (sul computer host)

PhpMyAdmin:
    IP address: localhost:8081
    Account root:
        username: root
        password: 1234
</pre>

Enjoy!

Luigi Menchise
