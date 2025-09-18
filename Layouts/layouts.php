<?php
class Layouts {
    public function heading($conf) {
        echo "<h1>Welcome to BankSecure</h1>";
    }

    public function welcome() {
        echo "<p>Your digital vault is ready. Manage your money with confidence.</p>";
    }

    public function footer($conf) {
        echo "<footer>BankSecure &copy; 2025</footer>";
    }
}