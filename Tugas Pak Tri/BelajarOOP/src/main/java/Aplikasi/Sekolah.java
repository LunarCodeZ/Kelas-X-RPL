package Aplikasi;
import Informasi.Kelas;

public class Sekolah {

    public static void main(String[] args) {
        Kelas obj = new Kelas();
        System.out.println("Nama: " + obj.nama);
        
        Kelas siswa1 = new Kelas();
        siswa1.tampilkanData();
        System.out.println("Data siswa1 - " + siswa1.dapatkanData());
    }
    
}
