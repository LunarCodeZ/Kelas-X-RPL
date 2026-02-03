import java.util.Scanner;

/**
 * 
 * @author LunarCodeZ
*/

public class BelajarPerulangan {

    public static void main(String[] args) {
        // === Perulangan Nama: Statis ===
        System.out.println("=== Perulangan Nama: Statis ===");
        String namaSaya = "Erik";
        for (int i = 1; i <= 5; i++) {
            System.out.println(i + ". " + namaSaya);
        }
        System.out.println("\n\n");
        
        
        // === Perulangan Nama: Dinamis ===
//        System.out.println("=== Perulangan Nama: Dinamis ===");
//        Scanner input = new Scanner(System.in);
//        System.out.print("Masukkan nama anda: ");
//        String nama = input.nextLine();
//        
//        System.out.print("Masukkan berapa kali perulangan: ");
//        int ulang = input.nextInt();
//        
//        for (int i = 1; i <= ulang; i++) {
//            System.out.println(i + ". " + nama);
//        }
//        System.out.println("\n\n");
        
        
        // === Segitiga Siku-siku Sudut Kiri Bawah: Statis ===
        System.out.println("=== Segitiga Siku-siku Sudut Kiri Bawah: Statis ===");
        int tinggiA = 5;
        for (int a = 1; a <= tinggiA; a++) {
            System.out.print("* ");
            for (int b = 1; b < a; b++) {
                System.out.print("* ");
            }
            System.out.print("\n");
        }
        System.out.println("\n\n");
        
        // === Segitiga Siku-siku Sudut Kiri Bawah: Dinamis ===
        System.out.println("=== Segitiga Siku-siku Sudut Kiri Bawah: Dinamis ===");
//        Scanner inputSegitiga = new Scanner(System.in);
//        System.out.print("Masukkan tinggi segitiga: ");
//        int tinggiSegitiga1 = inputSegitiga.nextInt();
//        for (int a = 1; a <= tinggiSegitiga1; a++) {
//            System.out.print("* ");
//            for (int b = 1; b < a; b++) {
//                System.out.print("* ");
//            }
//            System.out.print("\n");
//        }
        System.out.println("\n\n");
        
        
        // === Segitiga Siku-siku Sudut Kiri Atas: Statis ===
        System.out.println("=== Segitiga Siku-siku Sudut Kiri Atas: Statis ===");
        int tinggiB = 5;
        for (int a = tinggiB; a >= 1; a--) {
            for (int b = a; b >= 1; b--) {
                System.out.print("* ");
            }
            System.out.print("\n");
        }
        System.out.println("\n\n");
        
        
        // === Segitiga Siku-siku Sudut Kiri Atas: Dinamis ===
        System.out.println("=== Segitiga Siku-siku Sudut Kiri Atas: Dinamis ===");
        System.out.println("\n\n");
        
        
        // === Segitiga Siku-siku Sudut Kanan Atas: Statis ===
        System.out.println("=== Segitiga Siku-siku Sudut Kanan Atas: Statis ===");
        int tinggiC = 5;
        for (int a = tinggiC; a >= 1; a--) {
            for (int b = 5 - a; b >= 1; b--) {
                System.out.print("  ");
            }
            for (int c = a; c >= 1; c--) {
                System.out.print("* ");
            }
            System.out.print("\n");
        }
        System.out.println("\n\n");
        
        
        // === Segitiga Siku-siku Sudut Kanan Atas: Dinamis ===
        System.out.println("=== Segitiga Siku-siku Sudut Kanan Atas: Dinamis ===");
        System.out.println("\n\n");
        
        
        // === Segitiga Siku-siku Sudut Kanan Bawah: Statis ===
        System.out.println("=== Segitiga Siku-siku Sudut Kanan Bawah: Statis ===");
        System.out.println("\n\n");
        
        
        // === Segitiga Siku-siku Sudut Kanan Bawah: Dinamis ===
        System.out.println("=== Segitiga Siku-siku Sudut Kanan Bawah: Dinamis ===");
    }
    
}
