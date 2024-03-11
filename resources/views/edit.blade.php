<!DOCTYPE html>
<html>
<head>
    <title>Editar Producte</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}" type="text/css">
</head>
<body>
    <h1>Editar Producte</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('productes.update', ['id' => $producte->id]) }}">
        @csrf
        @method('PUT')
        <label for="nom">Nom del Producte:</label>
        <input type="text" id="nom" name="nom" value="{{ old('nom', $producte->nom) }}"><br>
        <label for="preu">Preu:</label>
        <input type="text" id="preu" name="preu" value="{{ old('preu', $producte->preu) }}"><br>
        <!-- Altres camps del formulari -->
        <button type="submit">Desar Canvis</button>
    </form>
</body>
</html>