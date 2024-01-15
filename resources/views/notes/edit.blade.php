<!DOCTYPE html>
<html>

<head>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h2>Editando la nota {{ $note->id }}</h2>
    @if (session('mensaje'))
        <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif

    <div class="list-group">
        {{-- ! problema form se puede re enviar --}}
        <a href="{{ url()->previous() }}" class="list-group-item list-group-item-action active mb-3 w-25">
            go back relativo 
        </a>
    </div>
    <!-- Hover added -->
    <div class="list-group">
        <a href="{{ route('notes.goNotes') }}" class="list-group-item list-group-item-action active w-25">volver</a>
    </div>
    
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @method('PUT') {{-- Necesitamos cambiar al método PUT para editar --}}
        @csrf
        {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        @error('title')
            <div class="alert alert-danger"> El nombre es obligatorio </div>
        @enderror
        @error('text')
            <div class="alert alert-danger"> La descripción es obligatoria </div>
        @enderror
        <input type="text" name="title" class="form-control mb-2" value="{{ $note->title }}"
            placeholder="Nombre de la nota" autofocus>
        <input type="text" name="text" placeholder="Descripción de la nota" class="form-control mb-2"
            value="{{ $note->text }}">
        <button class="btn btn-primary btn-block" type="submit">Guardar cambios</button>
    </form>
</body>

</html>
