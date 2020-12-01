<div>
    <h2>Lista de usuários</h2>

    @foreach($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach

    <small class="alert alert-info">A quantidade de usuários é {{ $countUsers }}</small>
</div>
