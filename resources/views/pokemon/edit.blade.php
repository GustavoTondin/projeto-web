<form action="{{ url('pokemons/' . $pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" placeholder="Nome" value="{{ $pokemon->nome }}" required>
    <input type="text" name="tipo" placeholder="Tipo" value="{{ $pokemon->tipo }}" required>
    <input type="number" name="pontos_de_poder" placeholder="Pontos de Poder" value="{{ $pokemon->pontos_de_poder }}" required>
    <button type="submit">Editar pokemon</button>
</form>