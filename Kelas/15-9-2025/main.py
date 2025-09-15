import time
interface_garis = "_ _ _ _ _ _ _ _ _ _"

def start():
    print(interface_garis)
    print(" Luas Persegi Panjang ")
    print(interface_garis)
    tanya_panjang()
    tanya_lebar()

def tanya_panjang():
    panjang = int(input("Masukkan Panjang: "))
    if panjang >= 0:
        tanya_lebar(panjang)
    else:
        tanya_panjang()
        print("\n Panjang tidak boleh kurang dari 1")
        print("Ulangi lagi ! \n")

def tanya_lebar(p):
    lebar = int(input("Masukkan Lebar: "))
    if lebar >= 0:
        jawab(p,lebar)
    else:
        tanya_lebar()
        print("\n Panjang tidak boleh kurang dari 1")
        print("Ulangi lagi ! \n")

def jawab(p,l):
    luas = p*l
    print(f"\nLuas persegi panjang adalah: {luas}")
    time.sleep(2)
    print("\n\n")
    start()

start()