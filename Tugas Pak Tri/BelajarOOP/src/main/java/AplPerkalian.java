import java.util.Scanner;
import java.util.ArrayList;

public class AplPerkalian {
    String baris = "====================";
    String teks1 = "   Perkalian Java   ";
    String teks2 = "     LunarCodeZ     ";
    String[] opsi = {
        "2 Bilangan",
        "3 Bilangan",
        "Banyak bilangan"
    };
    String[] opsiAngka = {"1", "2", "3"};
    
    void mulaiPertamaKali() {
        System.out.println(baris);
        System.out.println(teks1);
        System.out.println(teks2);
        System.out.println(baris);
        mulai();
    }
    
    void mulai() {
        Scanner input = new Scanner(System.in);
        
        System.out.println("> Apa yang ingin anda kalikan ?");
        for (int angka = 1; angka <= opsi.length; angka++) {
            System.out.println("[" + angka + "] - " + opsi[angka - 1]);
        }
        System.out.print("Masukkan angka: ");
        String opsi = input.nextLine();
        
        // Validasi input
        if (opsi.equals("1") || opsi.equals("2") || opsi.equals("3")) {
            int bil1, bil2, bil3;
            Scanner inputBilangan = new Scanner(System.in);
            Perkalian hasil = new Perkalian();
            System.out.println("");
            
            switch (opsi) {
                case "1":
                    System.out.print("Masukkan bilangan pertama: ");
                    bil1 = inputBilangan.nextInt();
                    System.out.print("Masukkan bilangan kedua: ");
                    bil2 = inputBilangan.nextInt();
                    System.out.println(bil1 + " * " + bil2 + " = " + hasil.kalkulasiPerkalian(bil1, bil2));
                    System.out.println("\n");
                    mulai();
                    break;

                case "2":
                    System.out.print("Masukkan bilangan pertama: ");
                    bil1 = inputBilangan.nextInt();
                    System.out.print("Masukkan bilangan kedua: ");
                    bil2 = inputBilangan.nextInt();
                    System.out.print("Masukkan bilangan ketiga: ");
                    bil3 = inputBilangan.nextInt();
                    System.out.println(bil1 + " * " + bil2 + " * " + bil3 + " = " + hasil.kalkulasiPerkalian(bil1, bil2, bil3));
                    System.out.println("\n");
                    mulai();
                    break;

                case "3":
                    ArrayList<Integer> banyakBilangan = new ArrayList<Integer>();
                    String bilangan;
                    System.out.println("Masukkan bilangan kemudian tekan 'enter'");
                    System.out.println("Ketik 'hitung' jika sudah selesai...");
                    int jumlahBilangan = 0;
                    
                    while (true) {
                        bilangan = inputBilangan.nextLine();
                        if ((bilangan.equals("hitung") || bilangan.equals("Hitung")) &&
                             jumlahBilangan > 0) {
                            System.out.println("Jumlah = " + hasil.kalkulasiPerkalian(banyakBilangan));
                            mulai();
                            System.out.println("\n");
                            break;
                        } else {
                            banyakBilangan.add(Integer.parseInt(bilangan));
                            jumlahBilangan++;
                        }
                    }
                    break;
                    
                case "4":
                    

                default:
                    break;
            }
        } else {
            System.out.println("Opsi " + opsi + " tidak ditemukan !");
            System.out.println("Mohon coba lagi...");
            mulai();
        }
    }
    
    public void main(String[] args) {
//        mulaiPertamaKali();
        Perkalian objek = new Perkalian();
        System.out.println(objek.kalkulasiPerkalian(2, 1, 5, "X RPL"));
    }
    
}
