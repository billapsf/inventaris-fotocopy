<div class="form-group">
    <label for="kode_barang">Kode Barang</label>
    <input type="text" id="kode_barang" value="{{ $kodeBarang }}" readonly>
    <small class="form-hint">Kode dibuat otomatis oleh sistem dan tidak perlu diisi manual.</small>
</div>

<div class="form-group">
    <label for="nama_barang">Nama Barang</label>
    <input type="text" id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang ?? '') }}" required>
    @error('nama_barang')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="kategori">Kategori</label>
    <select id="kategori" name="kategori" required>
        <option value="">-- Pilih Kategori --</option>
        @foreach ($kategoriOptions as $kategori)
            <option value="{{ $kategori }}" @selected(old('kategori', $barang->kategori ?? '') === $kategori)>
                {{ $kategori }}
            </option>
        @endforeach
    </select>
    @error('kategori')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="stok">Stok</label>
    <input type="text" id="stok" name="stok" inputmode="numeric" value="{{ old('stok', $barang->stok ?? '') }}" required>
    <small class="form-hint">Masukkan angka stok.</small>
    @error('stok')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" id="harga" name="harga" inputmode="numeric" value="{{ old('harga', $barang->harga ?? '') }}" required>
    <small class="form-hint">Contoh penulisan: 50000 atau 150000 tanpa titik.</small>
    @error('harga')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
