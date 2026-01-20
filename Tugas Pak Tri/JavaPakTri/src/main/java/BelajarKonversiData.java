// ========================
//    Konversi Data Java
// ========================

public class BelajarKonversiData {

    public static void main(String[] args) {
        System.out.println("=== Konversi Data Java ===");
        
        String a = "25";
        int b = Integer.parseInt(a);
        float c = Float.parseFloat(a);
        int nilai = 100;
        
        System.out.println("String a(" + a + ") + " + nilai + " = " + (a + nilai));
        System.out.println("int b(" + b + ") + " + nilai + " = " + (b + nilai));
        System.out.println("float c(" + c + ") + " + nilai + " = " + (c + nilai));
    }
    
}
