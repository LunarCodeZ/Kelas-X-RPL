
nilai = int(input("Masukkan Nilai: "))
print(f"\n Nilai Anda: {nilai}")

if nilai >= 90:
    print("Anda lulus dan mendapatkan A+ !!")
elif nilai >= 70:
    print("Selamat, anda dapat A !")
elif nilai >= 50:
    print("Anda dapat B")
elif nilai >= 30:
    print("Nilai anda C")
else:
    print("Anda gagal..")