package Informasi;

public class Kelas {
    // Access Modifier
    public String nama = "Erik";
    public int absen = 10;
    public String alamat = "Star Palace";
    
    public void tampilkanData() {
        System.out.println("Nama: " + nama);
        System.out.println("Absen: " + absen);
        System.out.println("Alamat: " + alamat);
    }
    
    public String dapatkanData() {
        return "Nama: " + nama + " | Absen: " + absen + " | Alamat: " + alamat;
    }
}
