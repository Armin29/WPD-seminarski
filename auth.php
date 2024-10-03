<?php
session_start();
include "database.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        header("Location: main.php?error=Unesite username");
    } elseif (empty($password)) {
        header("Location: main.php?error=Unesire šifru");
    } else {
        
        $stmt = $konekcija->prepare("SELECT * FROM users WHERE username=?");

        
        $stmt->bind_param("s", $username);
        $stmt->execute();

        
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $korisnik = $result->fetch_assoc();

            $korisnik_id = $korisnik['ID_user'];
            $korisnik_username = $korisnik['username'];
            $korisnik_sifra = $korisnik['password'];
            $korisnik_imeprezime = $korisnik['Ime_Prezime'];

            
            if ($username === $korisnik_username) {
                if (password_verify($password, $korisnik_sifra)) {
                    
                    $_SESSION['korisnik_id'] = $korisnik_id;
                    $_SESSION['korisnik_username'] = $korisnik_username;
                    $_SESSION['korisnik_imeprezime'] = $korisnik_imeprezime;

                    header("Location: main.php");
                } else {
                    header("Location: main.php?error=Netačna šifra");
                }
            } else {
                header("Location: main.php?error=Netačan unos");
            }
        } else {
            header("Location: main.php?error=Netačan unos");
        }

        $stmt->close();
    }
}

$konekcija->close();
?>
