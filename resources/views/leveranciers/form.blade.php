<div class="form-group">
    <label for="bedrijfsnaam">Bedrijfsnaam</label> <!-- Label voor het veld Bedrijfsnaam -->
    <input type="text" class="form-control" id="bedrijfsnaam" name="bedrijfsnaam" value="{{ old('bedrijfsnaam', $leverancier->bedrijfsnaam ?? '') }}" required>
    <!-- Input veld voor Bedrijfsnaam met de waarde uit oude input of de huidige waarde van $leverancier, verplicht -->
</div>

<div class="form-group">
    <label for="adres">Adres</label> <!-- Label voor het veld Adres -->
    <input type="text" class="form-control" id="adres" name="adres" value="{{ old('adres', $leverancier->adres ?? '') }}" required>
    <!-- Input veld voor Adres met de waarde uit oude input of de huidige waarde van $leverancier, verplicht -->
</div>

<div class="form-group">
    <label for="contactpersoon">Contactpersoon</label> <!-- Label voor het veld Contactpersoon -->
    <input type="text" class="form-control" id="contactpersoon" name="contactpersoon" value="{{ old('contactpersoon', $leverancier->contactpersoon ?? '') }}" required>
    <!-- Input veld voor Contactpersoon met de waarde uit oude input of de huidige waarde van $leverancier, verplicht -->
</div>

<div class="form-group">
    <label for="email">Email</label> <!-- Label voor het veld Email -->
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $leverancier->email ?? '') }}" required>
    <!-- Input veld voor Email met de waarde uit oude input of de huidige waarde van $leverancier, verplicht -->
</div>

<div class="form-group">
    <label for="telefoonnummer">Telefoonnummer</label> <!-- Label voor het veld Telefoonnummer -->
    <input type="text" class="form-control" id="telefoonnummer" name="telefoonnummer" value="{{ old('telefoonnummer', $leverancier->telefoonnummer ?? '') }}" required>
    <!-- Input veld voor Telefoonnummer met de waarde uit oude input of de huidige waarde van $leverancier, verplicht -->
</div>
