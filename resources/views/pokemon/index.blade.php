@foreach($pokemons as $pokemon)
    <div style="text-align: center; border-radius:50px;border:solid black 2px; width:50%;">
        <h3 style>{{ $pokemon->nome }}</h3>
        <p><b>Tipo:</b> {{ $pokemon->tipo }}</p>
        <p><b>Pontos de Poder:</b> {{ $pokemon->pontos_de_poder }}</p>
        <a href="{{ url('pokemons/'.$pokemon->id.'/editar') }}">Editar</a>
        <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
        <br>
    </div>
@endforeach