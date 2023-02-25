# apache_php_mysql_dev
Ambiente di sviluppo web Apache-PHP-MySql con Docker Compose

### Che cos'è
**apache_php_mysql_dev** è un'applicazione Docker multi-contenitore realizzata con *Docker Compose*<sup>1</sup> che mette a disposizione un ambiente di sviluppo con *Apache*, *PHP*, *MySQL* e *phpMyAdmin* già configurati e pronti all'uso per lo sviluppo di applicazioni web con PHP e database di MySQL.<br><br>
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

- **mysql_data** è la directory del host montata nel container di Docker per realizzare la persistenza sul host dei database di MySQL.<br>
- **www** è la directory del host montata sulla directory root delle pagine web gestite dal webserver Apache del container docker per realizzare la persistenza delle pagine PHP del progetto sul host e, allo stesso tempo, per rendere più semplice la loro gestione.<br>
- La directory **php_config** contiene il file php.ini in cui è possibile apportare modifiche alla configurazione di PHP.<br>

### Installazione ed esecuzione con Docker Compose
1) Scarica la cartella compressa del progetto cliccando sul bottone *Code* e poi sulla voce *Download ZIP*.<br>
2) Estrai sul tuo computer il contenuto della cartella che hai scaricato.<br>
*P.S. Il nome della cartella principale può essere cambiato.*<br>
1) Installa il *docker engine* o, per semplicità se utilizzi Windows o macOS, installa [Docker Desktop](https://www.docker.com/products/docker-desktop/).
2) Avvia il docker engine o Docker Desktop.
3) Digita il comando seguente nel terminale all'interno della cartella che hai estrtto:<br>
> docker-compose up
4) Per controllare il corretto funzionamento dell'ambiente apri il browser e richiedi la pagina php di test raggiungibile all'indirizzo:<br>
> localhost:8080/test.php
5) Per accedere a MySQL apri il client web *phpMyAdmin* all'indirizzo:<br>
> localhost:8081<br>

utizzando le credenziali seguenti:<br>

> username: root<br>
> password: 1234

Le pagine web dei tuoi progetti PHP devono essere create nella cartella *www* e possono essere visualizzate nel browser all'inidirizzo *localhost:8080*.<br>
La gestione dei database di MySQL puoi farla utilizzando *phpMyAdmin* raggiungibile all'indirizzo *localhost:8081*.

### Versioni, IP address, porte e credenziali di accesso
<pre>
Web server:
    PHP ver. 8.2.1
    Apache ver. 2.4.54 (Debian):
        IP address: localhost:8080
        Root directory: www
        
DBMS:    
    MySQL Community Server - GPL ver. 8.0.32:
        Account root:
            username: root
            password: 1234
        Port: 3306

PhpMyAdmin:
    IP address: localhost:8081
    Account root:
        username: root
        password: 1234
</pre>

Enjoy!

Luigi Menchise