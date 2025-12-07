<?php
// Configura qui le credenziali (sostituisci con le tue)
define('AUTH_USER', 'user');
// Hash della password generata con password_hash()
// IMPORTANTE: Sostituisci questo con l'hash che hai generato tu
define('AUTH_PASS_HASH', '$2y$10$kN7gWrUmFV75S66U0Z5/I.b.5xhHFb4olcRJr7aoQsEACxiIJgAJi');

/**
 * Genera una hash sicura per una password in chiaro.
 * Usare questo solo per creare il valore da copiare in AUTH_PASS_HASH.
 * 
 * Esempio d'uso: echo generate_password_hash_str('tuaPasswordQui');
 */
function generate_password_hash_str(string $plainPassword): string {
    return password_hash($plainPassword, PASSWORD_DEFAULT);
}

/**
 * Verifica una password in chiaro rispetto a una hash salvata.
 * Restituisce true se la password è corretta, false altrimenti.
 */
function verify_password(string $plainPassword, string $storedHash): bool {
    if ($storedHash === '' || $plainPassword === '') {
        return false;
    }
    return password_verify($plainPassword, $storedHash);
}

// Migliora i cookie di sessione (deve essere chiamato prima di session_start)
if (PHP_VERSION_ID >= 70300) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => '',
        'secure' => false, // metti true se usi HTTPS
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
}

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}

// Recupera e pulisce input
$username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
$password = $_POST['password'] ?? '';

// Confronto sicuro: verifica username in modo stretto e password con verify_password
if ($username === AUTH_USER && verify_password($password, AUTH_PASS_HASH)) {
    session_regenerate_id(true);
    $_SESSION['user'] = $username;
    header('Location: pagina.php');
    exit;
}

// Risposta in caso di credenziali errate
http_response_code(401);
echo "<!DOCTYPE html><html lang='it'><head><meta charset='utf-8'><title>Errore</title></head><body><h1>Credenziali errate</h1><p>Username o password non validi.</p><p><a href='index.html'>Riprova</a></p></body></html>";
exit;

?>