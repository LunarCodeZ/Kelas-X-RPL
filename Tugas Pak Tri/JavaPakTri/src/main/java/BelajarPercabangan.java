// ======================
//    Percabangan Java
// ======================
/*
   Percabangan adalah dimana kita
   mengecek suatu kondisi, dan menjalankan
   kode berdasarkan dengan kondisi yang
   sedang terjadi saat ini.
*/


// Import Scanner
import java.util.Scanner;

public class BelajarPercabangan {

    public static void main(String[] args) {
        // === Percabangan Java ===
        System.out.println("=== Percabangan Java ===");
        Scanner inputNilai = new Scanner(System.in);
        
        System.out.print("Masukkan nilai: ");
        int nilai = inputNilai.nextInt();
        System.out.print("\n");
        System.out.println("Nilai anda: " + nilai);
        
        if (nilai >= 70) {
          System.out.println("Selamat, anda lulus !");
        } else {
          System.out.println("Maaf, anda tidak lulus...");
        }
        
        System.out.println("\n\n");
        
        
        
        // === Percabangan Bersarang ===
        System.out.println("=== Percabangan Bersarang ==="); 
        System.out.print("Masukkan nilai anda: ");
        
        int nilaiGrade = inputNilai.nextInt();
        char grade;
        
        if (nilaiGrade > 90 && nilaiGrade <= 100) {
          grade = 'A';
        } else if (nilaiGrade > 80) {
          grade = 'B';
        } else if (nilaiGrade > 70) {
          grade = 'C';
        } else if (nilaiGrade > 60) {
          grade = 'D';
        } else {
          grade = 'E';
        }
        
        System.out.println("Grade anda: " + grade);
    }
}
