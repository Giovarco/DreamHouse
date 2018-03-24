<?php
/*
  blocco dei parametri di connessione
*/
// nome di host
$host = "localhost";
// nome del database
$db = "dreamhouse";
// username dell'utente in connessione
$user = "root";
// password dell'utente
$password = "";

/*
  blocco try/catch di gestione delle eccezioni
*/
try {
  // stringa di connessione al DBMS
  $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  // imposto dell'attributo necessario per ottenere il report degli errori
  $connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // selezione e visualizzazione dei dati estratti
  foreach ($connessione->query("SELECT * FROM announcements") as $row)
  {
    echo '<pre>'; print_r($row['Owner']); echo '</pre>';
  }
  // chiusura della connessione
  $connessione = null;
}
catch(PDOException $e)
{
  // notifica in caso di errore nel tentativo di connessione
  echo $e->getMessage();
}
?>