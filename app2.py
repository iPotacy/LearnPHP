def hitung_penghematan(penghasilan, pengeluaran):
    return penghasilan - pengeluaran

def format_rupiah(nilai):
    return "Rp {:,.2f}".format(nilai)

def input_nominal(pesan):
    while True:
        try:
            nilai = float(input(pesan))
            if nilai < 0:
                raise ValueError("Nilai tidak boleh kurang dari 0.")
            return nilai
        except ValueError:
            print("Mohon masukkan angka yang valid.")

# Input penghasilan dan pengeluaran dari pengguna
print("Selamat datang di Kalkulator Penghematan Bulanan")
penghasilan_bulanan = input_nominal("Masukkan penghasilan bulanan Anda: ")
pengeluaran_bulanan = input_nominal("Masukkan pengeluaran bulanan Anda: ")

# Hitung penghematan
hasil_penghematan = hitung_penghematan(penghasilan_bulanan, pengeluaran_bulanan)

# Tampilkan hasil dengan format rupiah
print("\nPenghasilan bulanan Anda:", format_rupiah(penghasilan_bulanan))
print("Pengeluaran bulanan Anda:", format_rupiah(pengeluaran_bulanan))
print("Penghematan bulanan Anda:", format_rupiah(hasil_penghematan))
