<?php

// My db local
$host = 'localhost'; // o l'indirizzo del tuo server MySQL
$dbname = 'if0_36968007_portfolio_db';
$username = 'root';
$password = 'root';

// My db on infinityfree
// the data changes but not the logic

// Connessione al database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Ottieni l'indirizzo IP del visitatore
    $ip_address = $_SERVER['REMOTE_ADDR'];

    // Ottieni l'user-agent del visitatore
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    // Calcola il numero totale di visite uniche, verifica se c'è già una visita con lo stesso IP e user-agent nelle ultime 3 ore
    $stmt = $pdo->prepare("
     SELECT COUNT(*) AS visit_count
     FROM visits
     WHERE ip_address = :ip_address
     AND user_agent = :user_agent
     AND visit_date >= DATE_SUB(NOW(), INTERVAL 3 HOUR)
 ");
    $stmt->execute(['ip_address' => $ip_address, 'user_agent' => $user_agent]);
    $visit_count = $stmt->fetchColumn();

    // Se non ci sono visite recenti con lo stesso IP e user-agent, inserisci un nuovo record
    if ($visit_count == 0) {
        $stmt = $pdo->prepare("INSERT INTO visits (ip_address, user_agent, visit_date) VALUES (:ip_address, :user_agent, NOW())");
        $stmt->execute(['ip_address' => $ip_address, 'user_agent' => $user_agent]);
    }

    // Calcola il numero totale di visite
    $stmt = $pdo->prepare("SELECT COUNT(*) AS total_visits FROM visits");
    $stmt->execute();
    $total_visits = $stmt->fetchColumn();

} catch (PDOException $e) {
    echo "Connessione fallita: " . $e->getMessage() . "<br>";
    $total_visits = 0;
}