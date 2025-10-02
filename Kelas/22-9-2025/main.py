
nilai = int(input("Masukkan Nilai: "))
print(f"\nNilai Anda: {nilai}")

if nilai >= 0 and nilai <= 100:

    if nilai >= 90:
        print("Anda lulus dan mendapatkan A+ !!")
    elif nilai >= 70:
        print("Selamat, anda dapat B !")
    elif nilai >= 50:
        print("Anda dapat C")
    elif nilai >= 30:
        print("Nilai anda D")
    else:
        print("Anda gagal..")
        
else:
    print("Nilai tidak boleh lebih dari 100 dan kurang dari 0!")