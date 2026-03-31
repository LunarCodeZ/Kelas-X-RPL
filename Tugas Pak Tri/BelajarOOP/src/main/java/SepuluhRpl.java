import java.util.Scanner;

// Parameter: 10 Maret 2026
class PersegiPanjang {
    int luas, keliling;
    
    void hitungLuas(int panjang, int lebar) {
        luas = panjang * lebar;
        System.out.println("Panjang: " + panjang);
        System.out.println("Lebar: " + lebar);
        System.out.println("Luas persegi panjang: " + luas + "\n");
    }
    
    void hitungKeliling(int panjang, int lebar) {
        keliling = 2 * (panjang + lebar);
        System.out.println("Panjang: " + panjang);
        System.out.println("Lebar: " + lebar);
        System.out.println("Keliling persegi panjang: " + keliling + "\n");
    }
}

public class SepuluhRpl {

    public static void main(String[] args) {
        // === Membuat objek ===
        // Rumus: <namaClass> <objek> = new <namaClass>()
        // Objek MuridRpl
        System.out.println("=== Objek: MuridRpl ===");
        MuridRpl siswa1 = new MuridRpl();
        System.out.println("Nama: " + siswa1.nama);
        System.out.println("Absen: " + siswa1.absen);
        System.out.println("Umur: " + siswa1.umur);
        
        System.out.println("\n=== Procedure ===");
        siswa1.dataSiswa();
        
        System.out.println("\n=== Function ===");
        System.out.println("Luas persegi: " + siswa1.menghitungPersegi());
        System.out.println("");
        
        // Objek KelompokTiga
        System.out.println("=== Objek: KelompokTiga ===");
        KelompokTiga kelompok = new KelompokTiga();
        for (int i = 0; i < kelompok.anggota.length; i++) {
            System.out.println("Anggota " + (i + 1) + ": " + kelompok.anggota[i] + "/" + kelompok.absen[i]);
        }
        System.out.println("");
        
        
        
        // === SiswaRpl === 
        System.out.println("=== Procedure: SiswaRpl ===");
        SiswaRpl siswa2 = new SiswaRpl();
        siswa2.hobiSiswa();
        
//        System.out.println("\n=== Function: SiswaRpl ===");
//        siswa2.gantiHobi();
//        siswa2.hobiSiswa();
        System.out.println("");

        
        
        // === Parameter ===
        System.out.println("=== Parameter ===");
        int panjangPersegi, lebarPersegi;
        Scanner inputParameter = new Scanner(System.in);
        PersegiPanjang persegiSaya = new PersegiPanjang();
        
        System.out.print("Masukkan panjang: ");
        panjangPersegi = inputParameter.nextInt();
        System.out.print("Masukkan lebar: ");
        lebarPersegi = inputParameter.nextInt();
        System.out.print("\n");
        
        System.out.println("> Keliling Persegi Panjang");
        persegiSaya.hitungKeliling(panjangPersegi, lebarPersegi);
        // Disini, panjangPersegi dan lebarPersegi dinamakan dengan parameter
        
        System.out.println("> Luas Persegi Panjang");
        persegiSaya.hitungLuas(panjangPersegi, lebarPersegi);
        // Disini, panjangPersegi dan lebarPersegi dinamakan dengan parameter
        
        
        
        // === Overloading ===
        System.out.println("");
        System.out.println("=== Overloading ===");
        
        
        // Dinamis
//        MuridRpl siswa2 = new MuridRpl();
//        Scanner input = new Scanner(System.in);
//        
//        System.out.print("Masukkan nama: ");
//        String nama = input.nextLine();
//        siswa2.nama = nama;
//        System.out.print("Masukkan umur: ");
//        int angka = input.nextInt();
//        siswa2.umur = angka;
//        System.out.print("Masukkan absen: ");
//        angka = input.nextInt();
//        siswa2.absen = angka;
//        
//        System.out.println("");
//        System.out.println("=== Hasil ===");
//        System.out.println("Nama: " + siswa2.nama);
//        System.out.println("Umur: " + siswa2.umur);
//        System.out.println("Absen: " + siswa2.absen);
        
    }
    
}
