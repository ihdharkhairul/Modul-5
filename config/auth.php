<?php
if (session_status() === PHP_SESSION_NONE) session_start();

function requireLogin(string $redirect = '../login.php'): void {
    if (empty($_SESSION['user'])) {
        header("Location: $redirect");
        exit;
    }
}

function currentUser(): array {
    return $_SESSION['user'] ?? [];
}

function redirectByRole(string $role): void {
    $map = [
        'admin'   => 'pages/dashboard.php',
        'officer' => 'pages/dashboard.php',
        'citizen' => 'pages/dashboard.php',
    ];
    header('Location: ' . ($map[$role] ?? 'login.php'));
    exit;
}
