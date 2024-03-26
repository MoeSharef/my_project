<div>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><button wire:click="edit({{ $user->id }})" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#typeForm">Editer</button>
            </td>
        </tr>
    @endforeach
</div>
