<tr>

    <td>
        <a class="d-flex align-items-center" href="#">
            <figure class="avatar me-3">
                <img src="{{ $user->profile_photo_url }}" class="rounded-circle"
                    alt="avatar">
            </figure>
            {{ $user->name }}
        </a>
    </td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->role->name }}</td>
    <td>
        <span>
            <select wire:model="user.status" name="status" id="status"
            class=" badge
            @if($user->status == 1)
                {{ 'bg-success' }}
                @elseif($user->status == 0)
                    {{ 'bg-danger' }}

            @endif">
                <option value="1" >Active</option>
                <option value="0">Blocked</option>
            </select> 
        </span>
    </td>
    <td class="text-end">
        <div class="dropdown">
            <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true"
                aria-expanded="false">
                <i class="bi bi-three-dots"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="/users/{{ $user->id }}" class="dropdown-item">View Profile</a>
                <a href="/users/{{ $user->id }}/edit" class="dropdown-item">Edit</a>
                <a href="#" class="dropdown-item text-danger">Delete</a>
            </div>
        </div>
    </td>
</tr>