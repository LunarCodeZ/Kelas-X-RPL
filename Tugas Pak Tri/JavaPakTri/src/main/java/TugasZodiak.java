import java.util.Scanner;

public class TugasZodiak {
    
    static void cekZodiak() {
        String hasilZodiak = "";
        String kepribadian = "";
        
        String[] daftarBulan = {
            "Januari", "Februari", "Maret", "April",
            "Mei", "Juni", "Juli", "Agustus",
            "September", "Oktober", "November", "Desember"
        };
        boolean bulanAda = false;
        Scanner input = new Scanner(System.in);
        
        System.out.print("Masukkan bulan: ");
        String inputBulan = input.nextLine();
        int bulan = 0;
        
        // Validasi bulan
        if (inputBulan.length() > 2) {
            for (int i_bulan = 0; i_bulan < daftarBulan.length; i_bulan++) {
                if (inputBulan.equals(daftarBulan[i_bulan])) {
                    bulan = i_bulan + 1;
                    bulanAda = true;
                }
            }
        } else if (inputBulan.isEmpty()) {
            System.out.println("Bulan tidak boleh kosong !");
            System.out.println("Mohon masukkan bulan dalam bentuk angka atau huruf... \n\n");
            cekZodiak();
        } else {
            bulan = Integer.parseInt(inputBulan);
            bulanAda = true;
        }
        
        // Tampilkan error karena bulan dalam bentuk huruf, tapi tidak ada di daftar
        if (!bulanAda) {
            System.out.println("Bulan: " + inputBulan + " tidak valid !");
            System.out.println("Mohon masukkan bulan dalam bentuk angka atau huruf... \n\n");
            cekZodiak();
        }
        
        if (bulan > 12 && bulan < 1) {
            System.out.println("Bulan tidak boleh lebih dari 12 dan kurang dari 1 !");
            System.out.println("Mohon masukkan bulan dalam bentuk angka atau huruf... \n\n");
            cekZodiak();
        } else {
            System.out.println("Bulan: " + daftarBulan[bulan - 1] + "\n");
        }
        
        
        System.out.print("Masukkan tanggal: ");
        int inputTanggal = input.nextInt();
        
        // Validasi tanggal
        if (bulan == 1) {
            if (inputTanggal > 0 && inputTanggal <= 31) {
                if (inputTanggal >= 20) {
                    hasilZodiak = "Aquarius";
                    kepribadian = "Mandiri, tidak konvensional, dan visioner";
                } else {
                    hasilZodiak = "Capricorn";
                    kepribadian = "Ambisius, disiplin, dan bertanggung jawab";
                }
            } else {
                System.out.println("Bulan " + daftarBulan[bulan-1] + " tidak memiliki tanggal " + inputTanggal + " !");
                System.out.println("Mohon masukkan tanggal diantara 1-31... \n\n");
                cekZodiak();
            }
        } else if (bulan == 2) {
            if (inputTanggal > 0 && inputTanggal <= 28) {
                if (inputTanggal <= 18) {
                    hasilZodiak = "Aquarius";
                    kepribadian = "Mandiri, tidak konvensional, dan visioner";
                } else {
                    hasilZodiak = "Pisces";
                    kepribadian = "Intuitif, artistik, dan penuh kasih sayang";
                }
            } else {
                System.out.println("Bulan " + daftarBulan[bulan-1] + " tidak memiliki tanggal " + inputTanggal + " !");
                System.out.println("Mohon masukkan tanggal diantara 1-28... \n\n");
                cekZodiak();
            }
        } else if (bulan == 3) {
            if (inputTanggal > 0 && inputTanggal <= 31) {
                if (inputTanggal <= 20) {
                    hasilZodiak = "Pisces";
                    kepribadian = "Intuitif, artistik, dan penuh kasih sayang";
                } else {
                    hasilZodiak = "Aries";
                    kepribadian = "Berani, penuh semangat, dan kompetitif";
                }
            } else {
                System.out.println("Bulan " + daftarBulan[bulan-1] + " tidak memiliki tanggal " + inputTanggal + " !");
                System.out.println("Mohon masukkan tanggal diantara 1-31... \n\n");
                cekZodiak();
            }
        } else if (bulan == 4) {
            if (inputTanggal > 0 && inputTanggal <= 30) {
                if (inputTanggal <= 19) {
                    hasilZodiak = "Aries";
                    kepribadian = "Berani, penuh semangat, dan kompetitif";
                } else {
                    hasilZodiak = "Taurus";
                    kepribadian = "Dapat diandalkan, sabar, dan praktis";
                }
            } else {
                System.out.println("Bulan " + daftarBulan[bulan-1] + " tidak memiliki tanggal " + inputTanggal + " !");
                System.out.println("Mohon masukkan tanggal diantara 1-30... \n\n");
                cekZodiak();
            }
        } else if (bulan == 5) {
            if (inputTanggal > 0 && inputTanggal <= 31) {
                if (inputTanggal <= 20) {
                    hasilZodiak = "Taurus";
                    kepribadian = "Dapat diandalkan, sabar, dan praktis";
                } else {
                    hasilZodiak = "Gemini";
                    kepribadian = "Cerdas, komunikatif, dan mudah beradaptasi";
                }
            } else {
                System.out.println("Bulan " + daftarBulan[bulan-1] + " tidak memiliki tanggal " + inputTanggal + " !");
                System.out.println("Mohon masukkan tanggal diantara 1-31... \n\n");
                cekZodiak();
            }
        } else if (bulan == 6) {
            if (inputTanggal > 0 && inputTanggal <= 30) {
                if (inputTanggal <= 20) {
                    hasilZodiak = "Gemini";
                    kepribadian = "Cerdas, komunikatif, dan mudah beradaptasi";
                } else {
                    hasilZodiak = "Cancer";
                    kepribadian = "Sangat perhatian, intuitif, dan setia";
                }
            } else {
                System.out.println("Bulan " + daftarBulan[bulan-1] + " tidak memiliki tanggal " + inputTanggal + " !");
                System.out.println("Mohon masukkan tanggal diantara 1-30... \n\n");
                cekZodiak();
            }
        } else if (bulan == 7) {
            if (inputTanggal > 0 && inputTanggal <= 31) {
                if (inputTanggal <= 22) {
                    hasilZodiak = "Cancer";
                    kepribadian = "Sangat perhatian, intuitif, dan setia";
                } else {
                    hasilZodiak = "Leo";
                    kepribadian = "Karismatik, murah hati, dan percaya diri";
                }
            } else {
                System.out.println("Bulan " + daftarBulan[bulan-1] + " tidak memiliki tanggal " + inputTanggal + " !");
                System.out.println("Mohon masukkan tanggal diantara 1-31... \n\n");
                cekZodiak();
            }
        } else if (bulan == 8) {
            if (inputTanggal > 0 && inputTanggal <= 31) {
                if (inputTanggal <= 22) {
                    hasilZodiak = "Leo";
                    kepribadian = "Karismatik, murah hati, dan percaya diri";
                } else {
                    hasilZodiak = "Virgo";
                    kepribadian = "Analitis, perfeksionis, dan pekerja keras";
                }
            } else {
                System.out.println("Bulan " + daftarBulan[bulan-1] + " tidak memiliki tanggal " + inputTanggal + " !");
                System.out.println("Mohon masukkan tanggal diantara 1-31... \n\n");
                cekZodiak();
            }
        } else if (bulan == 9) {
            if (inputTanggal > 0 && inputTanggal <= 30) {
                if (inputTanggal <= 22) {
                    hasilZodiak = "Virgo";
                    kepribadian = "Analitis, perfeksionis, dan pekerja keras";
                } else {
                    hasilZodiak = "Libra";
                    kepribadian = "Diplomatis, adil, dan mencintai keindahan";
                }
            } else {
                System.out.println("Bulan " + daftarBulan[bulan-1] + " tidak memiliki tanggal " + inputTanggal + " !");
                System.out.println("Mohon masukkan tanggal diantara 1-30... \n\n");
                cekZodiak();
            }
        } else if (bulan == 10) {
            if (inputTanggal > 0 && inputTanggal <= 31) {
                if (inputTanggal <= 22) {
                    hasilZodiak = "Libra";
                    kepribadian = "Diplomatis, adil, dan mencintai keindahan";
                } else {
                    hasilZodiak = "Scorpio";
                    kepribadian = "Misterius, intens, dan penuh gairah";
                }
            } else {
                System.out.println("Bulan " + daftarBulan[bulan-1] + " tidak memiliki tanggal " + inputTanggal + " !");
                System.out.println("Mohon masukkan tanggal diantara 1-31... \n\n");
                cekZodiak();
            }
        } else if (bulan == 11) {
            if (inputTanggal > 0 && inputTanggal <= 30) {
                if (inputTanggal <= 21) {
                    hasilZodiak = "Scorpio";
                    kepribadian = "Misterius, intens, dan penuh gairah";
                } else {
                    hasilZodiak = "Sagittarius";
                    kepribadian = "Suka berpetualang, jujur, dan optimis";
                }
            } else {
                System.out.println("Bulan " + daftarBulan[bulan-1] + " tidak memiliki tanggal " + inputTanggal + " !");
                System.out.println("Mohon masukkan tanggal diantara 1-30... \n\n");
                cekZodiak();
            }
        } else {
            if (inputTanggal > 0 && inputTanggal <= 31) {
                if (inputTanggal <= 21) {
                    hasilZodiak = "Sagittarius";
                    kepribadian = "Suka berpetualang, jujur, dan optimis";
                } else {
                    hasilZodiak = "Capricorn";
                    kepribadian = "Ambisius, disiplin, dan bertanggung jawab";
                }
            } else {
                System.out.println("Bulan " + daftarBulan[bulan-1] + " tidak memiliki tanggal " + inputTanggal + " !");
                System.out.println("Mohon masukkan tanggal diantara 1-31... \n\n");
                cekZodiak();
            }
        }
        
        
        // Tampilkan hasil
        if (!hasilZodiak.isEmpty()) {
            System.out.println("Zodiak anda ialah: " + hasilZodiak);
            System.out.println("Anda ialah orang yang " + kepribadian + "\n\n");
            cekZodiak();
        }
    }
    
    

    public static void main(String[] args) {
        // === Tugas Zodiak ===
        System.out.println("===================");
        System.out.println("|   Zodiak Java   |");
        System.out.println("|  by LunarCodeZ  |");
        System.out.println("===================");
        
        System.out.print("\n");
        cekZodiak();
    }
    
}
