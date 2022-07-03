<div>
        <h1>Register</h1>
        <form wire:submit.prevent="register" method="post">
                <input type="text" name="username" id="username" placeholder="Enter username" wire:model='username' class='input'>
                <br><br>
                <input type="password" name="password" id="password" placeholder="Enter password" wire:model='password' class='input'>
                <br><br>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" wire:model='confirm_password' class='input'>
                <br><br>
                <br><br>
                <p style='color:{{$color}}'>{{ $a }}</p>
                <br><br>
                <button type="submit" class='button'>Register</button>
        </form>
        <br><br>
        <br><br>
        <a href="/">Already a member? Login here.</a>
</div>
<!-- <div>   
    <h1>Register</h1>
    <form wire:submit.prevent="register" method="post">
        @csrf
        <input type="text" name="username" id="username" placeholder="Enter username" wire:model="username" class='input'>
        <br><br>
        <input type="password" name="password" id="password" placeholder="Enter password" wire:model="password" class='input'>
        <br><br>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" wire:model="confirm_password" class='input'>
        <br><br>
        <br><br>
        <button type="submit" class='button'>Register</button>
        <br><br>
        <p>{{ $a }}</p>
    </form>
    <br><br>
    <br><br>
    <a href="/">Already a member? Login here.</a>
</div> -->

