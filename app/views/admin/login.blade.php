<p>This is the login view</p>

<form method="post" action="{{ route('login') }}">
    Username:
    <input type="text" name="username" placeholder="username">
    Password:
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="Submit">

    {{ Form::token() }}
</form>
