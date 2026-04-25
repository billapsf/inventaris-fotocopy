<div class="form-group">
    <label for="nama_kategori">Nama Kategori</label>
    <input type="text" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori ?? '') }}" required>
    <small class="form-hint">Contoh: ATK, Bahan Habis Pakai, atau Peralatan.</small>
    @error('nama_kategori')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
