<div class="row">
    <h5>Login</h5>
    <form method="post" action="" class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <input id="username" name="login[username]" type="text" class="validate">
                <label for="username">Username</label>
            </div>
            <div class="input-field col s6">
                <input id="password" name="login[password]" type="password" class="validate">
                <label for="password">Passwort</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="submit" type="submit" name="login[submit]" value="Login" class="btn validate">
            </div>
        </div>
    </form>
    <p>Sie sind noch nicht registriert ? Hier registrieren</p>
</div>

<div class="row">

    <h5>Neu Registrieren</h5>
    <form action="" method="post" class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <input id="first_name" type="text" name="register[first_name]" class="validate">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" name="register[last_name]" class="validate">
                <label for="last_name">Last Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" name="register[password]" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" name="register[email]"  class="validate">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="submit" type="submit" name="register[submit]" class="btn validate">
            </div>
        </div>
    </form>
</div>