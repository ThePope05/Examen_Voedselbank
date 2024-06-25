<div class="form-group">
    <label for="klant_id">Klant</label>
    <input type="number" class="form-control" id="klant_id" name="klant_id"
        value="{{ old('klant_id', $voedselpakketten->klant_id ?? '') }}" required>
</div>
<div class="form-group">
    <label for="gemaakt_door_id">Gemaakt door</label>
    <input type="number" class="form-control" id="gemaakt_door_id" name="gemaakt_door_id"
        value="{{ old('gemaakt_door_id', $voedselpakketten->gemaakt_door_id ?? '') }}" required>
</div>
<div class="form-group">
    <label for="uitgiftedatum">Uitgiftedatum</label>
    <input type="date" class="form-control" id="uitgiftedatum" name="uitgiftedatum"
        value="{{ old('uitgiftedatum', $voedselpakketten->uitgiftedatum ?? '') }}" >
</div>

