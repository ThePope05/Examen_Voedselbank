<div class="form-group">
    <label for="bedrijfsnaam">Bedrijfsnaam</label>
    <input type="text" class="form-control" id="bedrijfsnaam" name="bedrijfsnaam" value="{{ old('bedrijfsnaam', $leverancier->bedrijfsnaam ?? '') }}" required>
</div>
<div class="form-group">
    <label for="adres">Adres</label>
    <input type="text" class="form-control" id="adres" name="adres" value="{{ old('adres', $leverancier->adres ?? '') }}" required>
</div>
<div class="form-group">
    <label for="contactpersoon">Contactpersoon</label>
    <input type="text" class="form-control" id="contactpersoon" name="contactpersoon" value="{{ old('contactpersoon', $leverancier->contactpersoon ?? '') }}" required>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $leverancier->email ?? '') }}" required>
</div>
<div class="form-group">
    <label for="telefoonnummer">Telefoonnummer</label>
    <input type="text" class="form-control" id="telefoonnummer" name="telefoonnummer" value="{{ old('telefoonnummer', $leverancier->telefoonnummer ?? '') }}" required>
</div>
