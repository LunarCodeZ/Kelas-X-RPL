// ===================
//    Operator Java
// ===================

package com.mycompany.javapaktri;

public class Operator {

    public static void main(String[] args) {
        // === Operator Aritmatika ===
        System.out.println("=== Operator Aritmatika ===");
        int a = 10;
        int b = 5;
        
        // > penjumlahan
        int penjumlahan = a + b;
        System.out.println("Hasil penjumlahan " + a + " + " + b + " = " + penjumlahan);
        
        // > pengurangan
        int pengurangan = a - b;
        System.out.println("Hasil penjumlahan " + a + " - " + b + " = " + pengurangan);

        // > perkalian
        int perkalian = a * b;
        System.out.println("Hasil perkalian " + a + " * " + b + " = " + perkalian);
        
        // > pembagian
        int pembagian = a / b;
        System.out.println("Hasil pembagian " + a + " / " + b + " = " + pembagian);
  
        // > modulus
        int modulus = a % b;
        System.out.println("Sisa bagi " + a + " % " + b + " = " + modulus + "\n\n\n");
        
        
        
        // === Operator Penugasan ===
        System.out.println("=== Operator Penugasan ===");
        
        // > +=: Menjumlahkan dua nilai lalu menyimpan hasilnya ke variable itu
        System.out.println("variabel a sebelum: " + a);
        a += 5;
        System.out.println("a += 5: " + a + "\n");
        
        // > -=: Mengurangi dua nilai lalu menyimpan hasilnya ke variable itu
        System.out.println("variabel a sebelum: " + a);
        a -= 6;
        System.out.println("a += 7: " + a + "\n");
        
        // > *=: Mengalikan dua nilai lalu menyimpan hasilnya ke variable itu
        System.out.println("variabel a sebelum: " + a);
        a *= 2;
        System.out.println("a *= 2: " + a + "\n");
        
        // > /=: Membagi dua nilai lalu menyimpan hasilnya ke variable itu
        System.out.println("variabel a sebelum: " + a);
        a /= 3;
        System.out.println("a /= 3: " + a + "\n\n\n");
        
        
        
        // === Operator Pembanding ===
        System.out.println("=== Operator Pembanding ===");
        int w = 20;
        int x = 20;
        int y = 10;
        int z = 5;
        System.out.println("w = " + w);
        System.out.println("x = " + x);
        System.out.println("y = " + y);
        System.out.println("z = " + z + "\n");
        
        // > Pembanding sama (==): Memberikan True jika keduanya memiliki nilai sama
        System.out.println("> Pembanding sama (==)");
        boolean sama1 = w == x;
        boolean sama2 = w == y;
        System.out.println("Apakah w sama dengan x?: " + sama1);
        System.out.println("Apakah w sama dengan y?: " + sama2 + "\n");
        
        // > Pembanding beda (!=): Memberikan True jika keduanya memiliki nilai berbeda
        System.out.println("> Pembanding beda (!=)");
        boolean beda1 = w != x;
        boolean beda2 = w != y;
        System.out.println("Apakah w beda dari x?: " + beda1);
        System.out.println("Apakah w beda dari y?: " + beda2 + "\n");
        
        // > Pembanding kurang dari (<): Memberikan True jika nilai pertama lebih kecil
        System.out.println("> Pembanding kurang dari (<)");
        boolean kurang1 = w < x;
        boolean kurang2 = w < y;
        System.out.println("Apakah w kurang dari x?: " + kurang1);
        System.out.println("Apakah w kurang dari y?: " + kurang2 + "\n");
        
        // > Pembanding lebih dari (>): Memberikan True jika nilai pertama lebih besar
        System.out.println("> Pembanding lebih dari (>)");
        boolean lebih1 = y > x;
        boolean lebih2 = y > z;
        System.out.println("Apakah y lebih dari x?: " + lebih1);
        System.out.println("Apakah y lebih dari z?: " + lebih2 + "\n");
        
        // > Pembanding kurang dari / sama (<=): Memberikan True jika nilai pertama lebih kecil atau sama
        System.out.println("> Pembanding kurang dari / sama dengan (<=)");
        System.out.println("Apakah w kurang dari / sama dengan x?: " + (w <= x));
        System.out.println("Apakah w kurang dari / sama dengan y?: " + (w <= y));
        System.out.println("Apakah w kurang dari / sama dengan z?: " + (w <= z) + "\n");
        
        // > Pembanding lebih dari / sama (>=): Memberikan True jika nilai pertama lebih besar atau sama
        System.out.println("> Pembanding lebih dari / sama dengan (>=)");
        System.out.println("Apakah y lebih dari / sama dengan x?: " + (y >= x));
        System.out.println("Apakah y lebih dari / sama dengan y?: " + (y >= y));
        System.out.println("Apakah y lebih dari / sama dengan z?: " + (y >= z) + "\n\n\n");
        
        
        
        // === Operator Logika ===
        System.out.println("=== Operator Logika ===");
        System.out.println("w = " + w);
        System.out.println("x = " + x);
        System.out.println("y = " + y);
        System.out.println("z = " + z + "\n");
        
        // > AND (&&): Memberikan True jika seluruh kondisi benar
        System.out.println("> AND (&&)");
        boolean and1 = x <= 20 && y == 10;
        boolean and2 = x > 20 && y == 10;
        System.out.println("Apakah x <= 20 dan y == 10?: " + and1);
        System.out.println("Apakah x > 20 dan y == 10?: " + and2 + "\n");
        
        // > OR (||): Memberikan True jika setidaknya salah satu kondisi ada yang benar
        System.out.println("> OR (||)");
        boolean or1 = x <= 20 || y == 10;
        boolean or2 = x > 20 || y == 10;
        System.out.println("Apakah x <= 20 atau y == 10?: " + or1);
        System.out.println("Apakah x > 20 atau y == 10?: " + or2 + "\n");
        
        // > XOR (^): Memberikan True hanya jika tidak semua kondisi benar
        System.out.println("> XOR (^)");
        boolean xor1 = w == 20 ^ x > 20;
        boolean xor2 = w == 20 ^ x < 100;
        System.out.println("Apakah w = 20 xor x lebih dari 20?: " + xor1);
        System.out.println("Apakah w = 20 xor x kurang dari 100?: " + xor2);
        
        // > NOT (!): Memberikan kebalikan, True menjadi False, dan False menjadi True
        System.out.println("> NOT (!)");
        boolean not1 = !(x == 20);
        boolean not2 = !(x > 100);
        System.out.println("!x == 20: " + not1);
        System.out.println("!x > 100: " + not2);
    }
    
}
