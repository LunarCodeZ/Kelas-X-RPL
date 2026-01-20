// ================
//    Input Java
// ================

// Import Scanner agar bisa menggunakan Scanner
import java.util.Scanner;

public class Input {

    public static void main(String[] args) {
        System.out.println("=== Belajar Input & Output Java ===");
        System.out.println("Selasa, 20-Januari-2026 \n\n");
        
        // > Mengambil input bertipe data String
        System.out.println("> Mengambil input bertipe data String");
        Scanner inputData = new Scanner(System.in);
        System.out.print("Masukkan nama anda: ");
        
        String nama = inputData.nextLine();
        System.out.println("Halo, " + nama + "\n");
        
        
        // > Mangambil input bertipe data int atau angka bulat
        System.out.println("> Mangambil input bertipe data int");
        System.out.print("Masukkan umur anda: ");
        int umur = inputData.nextInt();
        System.out.println("Umur anda: " + umur + "\n");
        
        
        // > Mengambil input bertipe data double atau desimal
        System.out.println("> Mengambil input bertipe data double atau desimal");
        System.out.print("Masukkan angka desimal: ");
        double desimal = inputData.nextDouble();
        System.out.println("Angka desimal anda: " + desimal + "\n");
        
        
        // > Mengambil input bertipe data char atau huruf tunggal
        System.out.println("> Mengambil input bertipe data char atau huruf tunggal");
        Scanner masukkan = new Scanner(System.in);
        System.out.print("Huruf favorit: ");
        String huruf = masukkan.nextLine();
        System.out.println("Huruf favorit anda: " + huruf);
    }
    
}
