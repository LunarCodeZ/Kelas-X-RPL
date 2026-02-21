public class SepuluhRpl {

    public static void main(String[] args) {
        // === Membuat objek ===
        // Rumus: <namaClass> <objek> = new <namaClass>()
        // Objek MuridRpl
        System.out.println("=== Objek: MuridRpl ===");
        MuridRpl siswa = new MuridRpl();
        System.out.println("Nama: " + siswa.nama);
        System.out.println("Absen: " + siswa.absen);
        System.out.println("Umur: " + siswa.umur);
        System.out.println("");
        
        // Objek KelompokTiga
        System.out.println("=== Objek: KelompokTiga ===");
        KelompokTiga kelompok = new KelompokTiga();
        for (int i = 0; i < kelompok.anggota.length; i++) {
            System.out.println("Anggota " + (i + 1) + ": " + kelompok.anggota[i] + "/" + kelompok.absen[i]);
        }
        
        
    }
    
}
