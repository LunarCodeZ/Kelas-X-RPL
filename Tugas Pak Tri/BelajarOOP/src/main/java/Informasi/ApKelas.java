package Informasi;

public class ApKelas {

    public static void main(String[] args) {
        Kelas obj = new Kelas();
        System.out.println("Nama: " + obj.nama);
        System.out.println("Absen: " + obj.absen);
        System.out.println("Alamat: " + obj.alamat + "\n");
        
        Kelas siswa1 = new Kelas();
        siswa1.tampilkanData();
        System.out.println("Data siswa1 - " + siswa1.dapatkanData());
    }
    
}
