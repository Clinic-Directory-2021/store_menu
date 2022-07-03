<div>   
    <h1>LOGIN</h1>
    <form wire:submit.prevent="login" method="post">
        <input type="text" name="username" id="username" placeholder="Enter username" wire:model="username" class='input'>
        <br><br>
        <input type="password" name="password" id="password" placeholder="Enter password" wire:model="password" class='input'>
        <br><br>
        <br><br>
        <p>{{$users}}</p>
        <br><br>
        <button type="submit" class='button'>Login</button>
    </form>
    <br><br>
    <br><br>
    <a href="/register">Not a member? Register here.</a>
        
        
</div>
