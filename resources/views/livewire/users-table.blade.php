<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Users') }} from livewire
        </h2>
    </x-slot>
    <div class="py-3 px-3 bg-white shadow-sm border-bottom">

    <h2>Users List</h2>
    <input
        wire:model="search"
        class="form-control"
        type="text"
        placeholder="Search"
    >

    <div class="table-responsive">

        <table class="table">

        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
              </tr>
            @endforeach

        </tbody>
      </table>

      @if ($users->count())
        {!! $users->links() !!}
      @else
          No results for the search {{ $search }}
      @endif
</div>
</div>
    </div>
