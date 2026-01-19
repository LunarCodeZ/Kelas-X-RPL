// =========================
//    Input & Output Java
// =========================



// Import Scanner: modul untuk menerima input
import java.util.Scanner;

public class InputOutput {

    public static void main(String[] args) {
        // === Input & Output Java ===
        System.out.println("=== Input & Output Java ===");
        
        // > Input: Memasukkan nilai dari user
        System.out.println("> Input: Memasukkan nilai dari user");
        
        Scanner inputNama = new Scanner(System.in); // --> Menggunakan class Scanner untuk memasukkan nilai
        System.out.println("Masukkan nama anda: ");
        
        
        // > Output: Menerima dan menampilkan nilai yang dimasukkan
        String nama = inputNama.nextLine();
        System.out.println("Halo, " + nama);
    }
    
}
