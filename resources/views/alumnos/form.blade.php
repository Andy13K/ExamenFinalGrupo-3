<!-- _form.blade.php -->
<div>
    <label for="carne">Carne</label>
    <input type="text" name="carne" value="{{ old('carne', $alumno->carne ?? '') }}" required>
    @error('carne')
    <div>{{ $message }}</div>
    @enderror
</div>
<div>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre', $alumno->nombre ?? '') }}" required>
    @error('nombre')
    <div>{{ $message }}</div>
    @enderror
</div>
<div>
    <label for="correo_institucional">Correo Institucional</label>
    <input type="email" name="correo_institucional" value="{{ old('correo_institucional', $alumno->correo_institucional ?? '') }}" required>
    @error('correo_institucional')
    <div>{{ $message }}</div>
    @enderror
</div>
<div>
    <label for="telefono">Teléfono</label>
    <input type="text" name="telefono" value="{{ old('telefono', $alumno->telefono ?? '') }}" required>
    @error('telefono')
    <div>{{ $message }}</div>
    @enderror
</div>
