<div class="mb-3">
    <label class="form-label">Placa</label>
    <input type="text" name="placa" class="form-control" value="{{ old('placa', $camion->placa ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Código Interno</label>
    <input type="text" name="codigo_interno" class="form-control" value="{{ old('codigo_interno', $camion->codigo_interno ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Color</label>
    <input type="text" name="color" class="form-control" value="{{ old('color', $camion->color ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Modelo</label>
    <input type="text" name="modelo" class="form-control" value="{{ old('modelo', $camion->modelo ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Capacidad (toneladas)</label>
    <input type="number" name="capacidad_toneladas" class="form-control" value="{{ old('capacidad_toneladas', $camion->capacidad_toneladas ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Marca</label>
    <select name="id_marca" class="form-control" required>
        <option value="">Seleccione una marca</option>
        @foreach($marcas as $marca)
            <option value="{{ $marca->id }}" {{ (old('id_marca', $camion->id_marca ?? '') == $marca->id) ? 'selected' : '' }}>
                {{ $marca->descripcion }}
            </option>
        @endforeach
    </select>
</div>
