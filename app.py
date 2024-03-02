def fungsi_penghasilan(t):
    return 2 * t

def fungsi_pengeluaran(t):
    return t**2

def turunan_fungsi_penghasilan(t):
    return 2

def turunan_fungsi_pengeluaran(t):
    return 2 * t

def hitung_perubahan_penghematan(t):
    return turunan_fungsi_penghasilan(t) - turunan_fungsi_pengeluaran(t)

def hitung_perubahan_total_penghematan(batas_bawah, batas_atas):
    def integrand(t):
        return hitung_perubahan_penghematan(t)
    
    # Metode trapesium untuk menghitung integral
    h = 0.1  # interval waktu
    waktu = batas_bawah
    integral = 0

    while waktu < batas_atas:
        integral += 0.5 * (integrand(waktu) + integrand(waktu + h)) * h
        waktu += h

    return integral

# Tentukan batas-batas waktu
batas_bawah = 500000
batas_atas = 1000000

# Hitung perubahan total penghematan dalam batas-batas waktu
hasil_perubahan_total_penghematan = hitung_perubahan_total_penghematan(batas_bawah, batas_atas)

# Tampilkan hasil
print(f"Perubahan total penghematan dari {batas_bawah} hingga {batas_atas} adalah: {hasil_perubahan_total_penghematan:.2f}")
