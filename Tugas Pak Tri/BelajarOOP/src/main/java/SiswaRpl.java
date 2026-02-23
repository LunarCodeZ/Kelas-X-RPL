import java.util.Scanner;

public class SiswaRpl {
    String nama = "Lunaric";
    int absen = 10;
    int umur = 17;
    String hobi = "Tidur";
    
    // Procedure
    void hobiSiswa() {
        System.out.println("Halo, nama saya " + nama + ",");
        System.out.println("hobi saya ialah " + hobi);
    }
    
    // Function
    String gantiHobi() {
        Scanner inputHobi = new Scanner(System.in);
        System.out.print("Masukkan hobi baru: ");
        String hobiBaru = inputHobi.nextLine();
        return hobi = hobiBaru;
    }
}
