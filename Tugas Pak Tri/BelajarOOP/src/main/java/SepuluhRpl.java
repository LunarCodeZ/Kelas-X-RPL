import java.util.Scanner;

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
