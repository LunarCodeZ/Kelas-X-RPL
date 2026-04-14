import java.util.ArrayList;

public class Perkalian {
    // Function 1: Perkalian 2 bilangan
    int kalkulasiPerkalian(int a, int b) {
        return a * b;
    }
    
    // Function 2: Perkalian 3 bilangan
    int kalkulasiPerkalian(int a, int b, int c) {
        return a * b * c;
    }
    
    // Function 3
    int kalkulasiPerkalian(int a, int b, int c, String d) {
        System.out.println("Method kalkulasiPerkalian: " + d);
        int hasil = a * b * c;
        return hasil;
    }
    
    
    // Function 3: Perkalian banyak bilangan
    int kalkulasiPerkalian(ArrayList<Integer> banyakBilangan) {
        int jumlah = 1;
        for (int bilangan : banyakBilangan) {
            jumlah *= bilangan;
        }
        return jumlah;
    }
}
