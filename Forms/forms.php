<?php
class Forms {

    private function submit_button($value){
        echo "<input type='submit' value='$value' style='padding:8px 16px; background-color:#2e6c80; color:white; border:none; border-radius:4px;'>";
    }

    public function signup(){
        ?>
        <h2> Create Your BankSecure Account</h2>
        <form action='submit_signup.php' method='post'>
            <label for="username">Username:</label>
            <input type='text' id='username' name="username" required><br>
            <label for="email">Email:</label>
            <input type='email' id='email' name="email" required><br>
            <label for="password">Password:</label>
            <input type='password' id='password' name='password' required><br>
            <?php $this->submit_button('Create Account'); ?>
            <br><a href='login.php'>Already registered? Log in to your vault</a>
        </form><br>
        <?php
    }

    public function login(){
        ?>
        <h2> Access Your BankSecure Vault</h2>
        <form action='submit_login.php' method='post'>
            <label for="username">Username:</label><br>
            <input type='text' id='username' name="username" required><br><br>
            <label for="password">Password:</label>
            <input type='password' id='password' name='password' required><br>
            <?php $this->submit_button('Log In'); ?>
            <br><a href='index.php'>New here? Create your account</a>
        </form><br>
        <?php
    }
}
?>