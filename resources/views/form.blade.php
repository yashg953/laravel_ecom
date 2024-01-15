<h1>Form</h1>
<form action="form" method="POST">
    @csrf
<table>
    <tr><td>name</td><td><input type="text" name="name" placeholder="enter name"></td></tr>
    <tr><td>password</td><td><input type="password" name="password" placeholder="enter name"></td></tr>
    <tr><td>submit</td><td><input type="submit"></td></tr>
</table>
</form>