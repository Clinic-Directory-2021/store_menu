<div>
    <form wire:submit.prevent='logout' method='post' class='logoutForm'>
        <h1 style='margin-left:10px; color:white;'>{{$c}}</h1>
        <button type='submit' class='logout'>Logout</button>
    </form>
    <br>
    <button type='submit' class='buttonAdd' wire:click='openAdd'> Add </button>
    <div class='addModal' style='display:{{$add}};'>
        <form wire:submit.prevent='add' method='post'> 
            <input type='text' placeholder='Product name' wire:model='name' class='input'/>
            <br><br>
            <input type='number' placeholder='Product price' wire:model='price' class='input'/>
            <br><br>
            <input type='text' placeholder='Product category' wire:model='category' class='input'/>
            <br><br>
            <br><br>
            <button type='submit' class='button'> Add </button>
        </form>
        <br>
        <button type='submit' class='button cancel' wire:click='closeAdd'> Cancel </button>
    </div>
    <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            @if(is_array($items) || is_object($items))
            @foreach($items as $item)
            @if($item['owner'] == session('username'))
                <tr>
                        <td>{{ $item['ID'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['price'] }}</td>
                        <td>{{ $item['category'] }}</td>
                        <td>
                            <div style='display:flex;'>
                                <form wire:submit.prevent='edit({{$item->ID}})' method='post'>
                                    <button type='submit' style='background-color:#CED89E; cursor:pointer;border:0;'> Edit </button>
                                </form>
                                <form wire:submit.prevent='destroy({{$item->ID}})' method='post'>
                                    <button type='submit' style='background-color:#FFDCAE; cursor:pointer;border:0;'> Delete </button>
                                </form>
                            </div>
                        </td>
                </tr>
            @endif    
            @endforeach
            @endif
    </table>
    <div class='editModal' style='display:{{$edit}}'>
        <form wire:submit.prevent='update' method='post'>
            <p>{{$b}}</p>
            <input type='text' placeholder='Product name' wire:model='edit_name' value={{$edit_name}} class='input'/>
            <br><br>
            <input type='number' placeholder='Product name' wire:model='edit_price' value={{$edit_price}} class='input'/>
            <br><br>
            <input type='text' placeholder='Product name' wire:model='edit_category' value={{$edit_category}} class='input'/>
            <br><br>
            <button type='submit' class='button'> Edit </button>
        </form>
        <br>
        <button type='submit' class='button cancel' wire:click='closeEdit'> Cancel </button>
    </div>
    
</div>
