<div class="form-group">
    <label for="klant_id">Klant</label> <!-- Label voor het invoerveld Klant -->
    <input type="number" class="form-control" id="klant_id" name="klant_id"
        value="{{ old('klant_id', $voedselpakketten->klant_id ?? '') }}" required>
    <!-- Invoerveld voor Klant ID met standaardwaarde en vereist attribuut -->
</div>
<div class="form-group">
    <label for="gemaakt_door_id">Gemaakt door</label> <!-- Label voor het invoerveld Gemaakt door -->
    <input type="number" class="form-control" id="gemaakt_door_id" name="gemaakt_door_id"
        value="{{ old('gemaakt_door_id', $voedselpakketten->gemaakt_door_id ?? '') }}" required>
    <!-- Invoerveld voor Gemaakt door ID met standaardwaarde en vereist attribuut -->
</div>
<div class="form-group">
    <label for="uitgiftedatum">Uitgiftedatum</label> <!-- Label voor het invoerveld Uitgiftedatum -->
    <input type="date" class="form-control" id="uitgiftedatum" name="uitgiftedatum"
        value="{{ old('uitgiftedatum', $voedselpakketten->uitgiftedatum ?? '') }}">
    <!-- Invoerveld voor Uitgiftedatum met optionele standaardwaarde -->
</div>
