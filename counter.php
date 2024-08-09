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

    // Inserisci sempre un nuovo record
    $stmt = $pdo->prepare("INSERT INTO visits (ip_address, user_agent, visit_date) VALUES (:ip_address, :user_agent, NOW())");
    $stmt->execute(['ip_address' => $ip_address, 'user_agent' => $user_agent]);

    // Calcola il numero totale di visite uniche, verifica se c'è già una visita con lo stesso IP e user-agent nelle ultime 3 ore
    $stmt = $pdo->prepare("
        SELECT COUNT(*) AS total_visits
        FROM (
            SELECT ip_address, user_agent
            FROM visits AS v1
            WHERE NOT EXISTS (
                SELECT 1
                FROM visits AS v2
                WHERE v2.ip_address = v1.ip_address
                  AND v2.user_agent = v1.user_agent
                  AND v2.visit_date > v1.visit_date
                  AND v2.visit_date <= DATE_ADD(v1.visit_date, INTERVAL 3 HOUR)
            )
        ) AS unique_visits
    ");
    $stmt->execute();
    $total_visits = $stmt->fetchColumn();

} catch (PDOException $e) {
    echo "Connessione fallita: " . $e->getMessage() . "<br>";
    $total_visits = 0;
}