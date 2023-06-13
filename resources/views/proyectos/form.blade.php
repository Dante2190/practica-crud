<div class="container">

    <div class="form-group">
        <label for="NombreProyecto">Nombre de proyecto</label>
        <input type="text" class="form-control" placeholder="Nombre del proyecto" id="NombreProyecto"
            value="{{ isset($proyecto->NombreProyecto) ? $proyecto->NombreProyecto : '' }}" name="NombreProyecto"
            required><br>
    </div>
    <div class="form-group">
        <label for="FuenteFondos">Fuente de fondos</label>
        <input type="text" class="form-control" placeholder="Fuente de fondos" id="FuenteFondos"
            value="{{ isset($proyecto->FuenteFondos) ? $proyecto->FuenteFondos : '' }}" name="FuenteFondos" required><br>
    </div>
    <div class="form-group">
        <label for="MontoPlanificado">Monto Planificado</label>
        <input type="number" class="form-control" min="1.00" placeholder="Monto Planificado" id="MontoPlanificado"
            value="{{ isset($proyecto->MontoPlanificado) ? $proyecto->MontoPlanificado : '' }}" name="MontoPlanificado"
            required><br>
    </div>
    <div class="form-group">
        <label for="MontoPatrocinado">Monto Patrocinado</label>
        <input type="number" class="form-control" min="1.00" placeholder="Monto Patrocinado" id="MontoPatrocinado"
            value="{{ isset($proyecto->MontoPatrocinado) ? $proyecto->MontoPatrocinado : '' }}" name="MontoPatrocinado"
            required><br>
    </div>
    <div class="form-group">
        <label for="MontoFondosPropios">Monto Fondos Propios</label>
        <input type="number" class="form-control" min=".00" placeholder="Monto de fondos propios"
            id="MontoFondosPropios" value="{{ isset($proyecto->MontoFondosPropios) ? $proyecto->MontoFondosPropios : '' }}"
            name="MontoFondosPropios" required><br>
    </div>
    <input class="btn btn-success" type="submit" value="Guardar Datos">
    <a class="btn btn-primary" href="{{ url('proyecto/') }}">Regresar</a>
</div>
