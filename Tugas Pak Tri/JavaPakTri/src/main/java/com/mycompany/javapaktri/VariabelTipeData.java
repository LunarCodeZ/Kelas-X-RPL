// =======================
//    Belajar Tipe Data
// =======================

package com.mycompany.javapaktri;

public class VariabelTipeData {
    
    public static void main(String[] args) {
        // === Tipe Data Angka ===
        System.out.println("=== Tipe Data Angka ===");
        

        // byte: Angka dari -128 hingga 127
        System.out.println("> byte: Angka dari -128 hingga 127");
        byte nilaiByte1 = -128; 
        byte nilaiByte2 = 127;
        System.out.println("nilaiByte1: " + nilaiByte1);
        System.out.println("nilaiByte2: " + nilaiByte2 + "\n");
        

        // short: Angka dari -32768 hingga 32767
        System.out.println("> short: Angka dari -32768 hingga 32767");
        short nilaiShort1 = -32768;
        short nilaiShort2 = 32767;
        System.out.println("nilaiShort1: " + nilaiShort1);
        System.out.println("nilaiShort2: " + nilaiShort2 + "\n");


        // int: Angka dari -32 juta hingga positif 32 juta
        System.out.println("> int: Angka dari -32 juta hingga 32 juta");
        int nilaiInt;
        nilaiInt = 10;
        int nilaiInt2 = -32000000;
        int nilaiInt3 = 32000000;
        System.out.println("nilaiInt: " + nilaiInt);
        System.out.println("nilaiInt2: " + nilaiInt2);
        System.out.println("nilaiInt3: " + nilaiInt3);

        nilaiInt = 100;
        System.out.println("nilaiInt setelah diperbarui: " + nilaiInt + "\n");


        // long: Dapat menyimpan angka lebih banyak dari int
        System.out.println("> long: Angka lebih banyak dari int");
        long nilaiLong1 = 120000000000L;
        long nilaiLong2 = -3600000000000L;
        System.out.println("nilaiLong1: " + nilaiLong1 + " (120 Juta)");
        System.out.println("nilaiLong2: " + nilaiLong2 + " (-3,6 juta)\n\n\n");
        
        
        
        // === Tipe Data Desimal ===
        System.out.println("=== Tipe Data Desimal ===");
        
        // > float: Angka desimal dengan presisi rendah
        System.out.println("> float: Angka desimal dengan presisi rendah");
        float tinggiBadan = 10.5f;
        float beratBadan = 42.3f;
        System.out.println("tinggiBadan: " + tinggiBadan);
        System.out.println("beratBadan: " + beratBadan + "\n");
        
        
        // > double: Angka desimal dengan presisi tinggi
        System.out.println("> double: Angka desimal dengan presisi tinggi");
        double desimal1 = 120.123456789d;
        double desimal2 = -310.10987654321d;
        System.out.println("desimal1: " + desimal1);
        System.out.println("desimal2: " + desimal2 + "\n\n\n");
        
        
        
        // === Tipe Data Huruf ===
        System.out.println("=== Tipe Data Huruf ===");
        
        // > char: Huruf tunggal yang diapit oleh dua petik tunggal
        System.out.println("> char: Huruf tunggal yang diapit dua petik tunggal");
        char gradeSaya = 'b';
        char inisialSaya = 'E';
        System.out.println("gradeSaya: " + gradeSaya);
        System.out.println("inisialSaya: " + inisialSaya + "\n");
        
        // > String: Menyimpan kalimat, teks dan sebagainya yang diapit oleh dua petik ganda
        System.out.println("> String: Teks, kata, kalimat, dsb yang diapit oleh dua petik ganda");
        String kelasSaya = "10 RPL";
        String namaSaya = "Erik Yanuar Putra";
        System.out.println("kelasSaya: " + kelasSaya);
        System.out.println("namaSaya: " + namaSaya + "\n\n\n");
        
        
        
        // === Tipe Data Lain ===
        System.out.println("=== Tipe Data Lain ===");
        
        // > boolean: Tipe data bernilai True or False
        System.out.println("> boolean: Tipe data bernilai True atau False");
        boolean javaSeru = true;
        boolean sayaCewek = false;
        System.out.println("javaSeru: " + javaSeru);
        System.out.println("sayaCewek: " + sayaCewek + "\n");
        
        
        // > Konstanta: Tipe data dengan nilai yang tidak bisa diubah
        System.out.println("> Final: Variabel konstanta yang nilainya tidak bisa diubah");
        final float PI = 3.14f;
        System.out.println("Nilai PI: " + PI);
    }
    
}
