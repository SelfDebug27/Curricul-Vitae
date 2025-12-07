<?php
session_start();

// Controlla se l'utente è autenticato
if (!isset($_SESSION['user'])) {
    header('Location: index.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae - Di Berardino Federico</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="cv-container">
        <header>
            <h1>Di Berardino Federico</h1>
            <p>
                <strong>Email:</strong> chiccofede.g@gmail.com |  
                <strong>Città:</strong> Alba Adriatica (TE)
            </p>
            <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/federico-di-berardino-74b25b351/" target="_blank">linkedin.com/in/federico-di-berardino</a> | <strong>GitHub:</strong> <a href="https://github.com/SelfDebug27" target="_blank">github.com/SelfDebug27</a></p>
        </header>

        <section>
            <h2>PROFILO PROFESSIONALE</h2>
            <p>
                Conoscenza solide di sviluppo web full-stack. Esperienza con PHP, JavaScript, HTML5, CSS3 e database MySQL.
                Appassionato di sicurezza informatica e best practice di coding. Ottime capacità di problem solving e lavoro in team.
                Ottime capacità comunicative e attitudine al miglioramento continuo.
                Impegno costante nell'aggiornamento delle competenze tecniche e nell'adozione di nuove tecnologie.
                Curiosità e passione per il mondo della sicurezza informatica.
            </p>
        </section>

        <section>
            <h2>ESPERIENZA PROFESSIONALE</h2>

            <article>
                <h3>Attualmente apprendista impegnato nel settore logistico presso DimarGroup</h3>
                <p><strong>Periodo:</strong> Da Ottobre 2022 | <strong>Provincia:</strong> Teramo</p>
                <ul>
                    <li>Utilizzo del gestionale Microsoft Business Central con annessa gestione ed analisi di Dati</li>
                </ul>
            </article>
        </section>

        <section>
            <h2>ISTRUZIONE</h2>
            
            <article>
                <h3>Diploma in Informatica</h3>
                <p><strong>Istituto tecnico tecnologico Enrico Fermi - Ascoli Piceno</strong> 2025 - 2026</p>
                <p>Voto: da vedere</p>
            </article>
        </section>

        <section>
            <h2>COMPETENZE TECNICHE</h2>
            
            <h4>Linguaggi di Programmazione:</h4>
            <p>PHP, JavaScript, HTML5, CSS3, SQL, Python (base + OOP), C++ (OOP), bash scripting, JavaScript (base)</p>

            <h4>Database:</h4>
            <p>MySQL, MariaDB</p>

            <h4>Strumenti e Tecnologie:</h4>
            <p>Git, VS Code, Eclipse, Code Blocks, Oracle VirtualBox</p>

            <h4>Sicurezza:</h4>
            <p>SQL Injection Prevention, XSS Protection, CSRF Tokens, Password Hashing</p>
        </section>

        <section>
            <h2>LINGUE</h2>
            <ul>
                <li><strong>Italiano:</strong> Madrelingua</li>
                <li><strong>Inglese:</strong> Buono (B2) — Lettura, scrittura, comprensione fluida e parlato</li>
            </ul>
        </section>

        <section>
            <h2>CERTIFICAZIONI E CORSI</h2>
            <ul>
                <li><strong>Linux Essentials</strong> — Udemy.com, 2025</li>
                <li><strong>eJPT, Junior Penetration Tester</strong> — Ine.com, 2025</li>
            </ul>
        </section>

        <footer>
            <p>Autorizzo il trattamento dei miei dati personali secondo le disposizioni della privacy policy.</p>
            <p><a href="logout.php">Logout</a></p>
        </footer>
    </div>
    <script src="animations.js"></script>
</body>
</html>