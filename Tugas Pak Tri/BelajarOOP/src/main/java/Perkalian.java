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
    
    // Function 3: Perkalian banyak bilangan
    int kalkulasiPerkalian(ArrayList<Integer> banyakBilangan) {
        int jumlah = 1;
        for (int bilangan : banyakBilangan) {
            jumlah *= bilangan;
        }
        return jumlah;
    }
}
