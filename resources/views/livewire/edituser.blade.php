<div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input wire:model="name" type="name" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input wire:model="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input wire:model="password" type="password" name="password" class="form-control" id="password">
    </div>
    <button wire:click.prevent="AddUser" class="btn btn-primary">Add User</button>
</div>
