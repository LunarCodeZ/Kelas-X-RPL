// === Zodiac Checker ===

#include <iostream>
#include <string>
using namespace std;

void run() {
    // Deklarasi variabel
    int bulan, tanggal;
    string keterangan;

    string guiLines = "= = = = = = = = = = = = =";
    string title = "     Zodiac Checker     ";
    //


    // Tampilkan GUI
    cout << guiLines << "\n";
    cout << title << "\n";
    cout << guiLines << "\n\n";
    //


    // Baca input
    cout << "Masukkan bulan (1-12): ";
    cin >> bulan;


    if (bulan >= 1 && bulan <= 12) {



        if (bulan == 1) {

            cout << "Masukkan tanggal (1-31): ";
            cin >> tanggal;

            if (tanggal >= 1 && tanggal <= 31) {
                cout << "Bulan: " << bulan << " (Januari)\n";
                cout << "Tanggal: " << tanggal << "\n\n";

                if (tanggal <= 20) {
                    keterangan = "Anda ialah orang yang unik, berpikiran maju, dan suka hal-hal inovatif. anda peduli pada kemanusiaan dan bebas dari aturan kaku. Kadang terlihat dingin karena lebih banyak berpikir logis daripada emosional. Aquarius selalu menghargai kebebasan pribadi. \n\n\n";
                    cout << "Zodiak anda: Aquarius \n";
                    cout << keterangan;
                } else {
                    keterangan = "Anda adalah orang yang ambisius, disiplin, dan pekerja keras. anda fokus mengejar tujuan dan tidak mudah menyerah. Meski tampak kaku, anda punya rasa humor halus dan kesetiaan tinggi. Capricorn menghargai waktu dan tanggung jawab. \n\n\n";
                    cout << "Zodiak anda: Capricorn \n";
                    cout << keterangan;
                }

            } else {
                cout << "Nggak ada tanggal " << tanggal << " di bulan Januari ! \n";
                cout << "Tanggal di bulan Januari cuma 1 - 31 aja...\n\n\n";
            }
            run();
        }
        if (bulan == 2) {

            cout << "Masukkan tanggal (1-28): ";
            cin >> tanggal;

            if (tanggal >= 1 && tanggal <= 28) {
                cout << "Bulan: " << bulan << " (Februari)\n";
                cout << "Tanggal: " << tanggal << "\n\n";

                if (tanggal <= 18) {
                    keterangan = "Anda ialah orang yang unik, berpikiran maju, dan suka hal-hal inovatif. anda peduli pada kemanusiaan dan bebas dari aturan kaku. Kadang terlihat dingin karena lebih banyak berpikir logis daripada emosional. Aquarius selalu menghargai kebebasan pribadi. \n\n\n";
                    cout << "Zodiak anda: Aquarius \n";
                    cout << keterangan;
                } else {
                    keterangan = "Anda orang yang lembut, imajinatif, dan penuh empati. Anda juga mudah tersentuh dan punya intuisi kuat. Anda suka membantu orang lain, tapi terkadang terlalu terbawa perasaan. Dunia fantasi dan seni sering jadi tempat pelarian anda dari realita. \n\n\n";
                    cout << "Zodiak anda: Pisces \n";
                    cout << keterangan;
                }

            } else {
                cout << "Nggak ada tanggal " << tanggal << " di bulan Februari ! \n";
                cout << "Tanggal di bulan Februari cuma 1 - 28 aja...\n\n\n";
            }
            run();
        }
        if (bulan == 3) {

            cout << "Masukkan tanggal (1-31): ";
            cin >> tanggal;

            if (tanggal >= 1 && tanggal <= 31) {
                cout << "Bulan: " << bulan << " (Maret)\n";
                cout << "Tanggal: " << tanggal << "\n\n";

                if (tanggal <= 20) {
                    keterangan = "Anda orang yang lembut, imajinatif, dan penuh empati. Anda juga mudah tersentuh dan punya intuisi kuat. Anda suka membantu orang lain, tapi terkadang terlalu terbawa perasaan. Dunia fantasi dan seni sering jadi tempat pelarian anda dari realita. \n\n\n";
                    cout << "Zodiak anda: Pisces \n";
                    cout << keterangan;
                } else {
                    keterangan = "Anda orang yang berjiwa pemimpin, penuh semangat, dan suka tantangan. Anda juga spontan, energik, dan cepat mengambil keputusan, tetapi terkadang terlalu impulsif dan mudah marah. Meski sedikit keras kepala, Anda punya keberanian besar dan selalu ingin jadi yang pertama dalam segala hal. \n\n\n";
                    cout << "Zodiak anda: Aries \n";
                    cout << keterangan;
                }

            } else {
                cout << "Nggak ada tanggal " << tanggal << " di bulan Maret ! \n";
                cout << "Tanggal di bulan Maret cuma 1 - 31 aja...\n\n\n";
            }
            run();
        }
        if (bulan == 4) {

            cout << "Masukkan tanggal (1-30): ";
            cin >> tanggal;

            if (tanggal >= 1 && tanggal <= 30) {
                cout << "Bulan: " << bulan << " (April)\n";
                cout << "Tanggal: " << tanggal << "\n\n";

                if (tanggal <= 19) {
                    keterangan = "Anda orang yang berjiwa pemimpin, penuh semangat, dan suka tantangan. Anda juga spontan, energik, dan cepat mengambil keputusan, tetapi terkadang terlalu impulsif dan mudah marah. Meski sedikit keras kepala, Anda punya keberanian besar dan selalu ingin jadi yang pertama dalam segala hal. \n\n\n";
                    cout << "Zodiak anda: Aries \n";
                    cout << keterangan;
                } else {
                    keterangan = "Anda orang yang dikenal sabar, setia, dan pekerja keras. Anda juga menyukai kenyamanan, keindahan, dan kestabilan hidup. Namun, sifat keras kepala dan sulit berubah anda bisa menjadi kekurangan anda. Selain itu, anda sangat bisa dipercaya dan selalu menjaga komitmen. \n\n\n";
                    cout << "Zodiak anda: Taurus \n";
                    cout << keterangan;
                }

            } else {
                cout << "Nggak ada tanggal " << tanggal << " di bulan April ! \n";
                cout << "Tanggal di bulan April cuma 1 - 30 aja...\n\n\n";
            }
            run();
        }
        if (bulan == 5) {

            cout << "Masukkan tanggal (1-31): ";
            cin >> tanggal;

            if (tanggal >= 1 && tanggal <= 31) {
                cout << "Bulan: " << bulan << " (Mei)\n";
                cout << "Tanggal: " << tanggal << "\n\n";

                if (tanggal <= 20) {
                    keterangan = "Anda orang yang dikenal sabar, setia, dan pekerja keras. Anda juga menyukai kenyamanan, keindahan, dan kestabilan hidup. Namun, sifat keras kepala dan sulit berubah anda bisa menjadi kekurangan anda. Selain itu, anda sangat bisa dipercaya dan selalu menjaga komitmen. \n\n\n";
                    cout << "Zodiak anda: Taurus \n";
                    cout << keterangan;
                } else {
                    keterangan = "Anda orang yang cerdas, komunikatif, dan mudah beradaptasi. Anda juga suka belajar hal baru dan pandai bergaul, tetapi terkadang mudah bosan dan sulit fokus. Anda punya dua sisi kepribadian, yaitu menyenangkan sekaligus penuh misteri. \n\n\n";
                    cout << "Zodiak anda: Gemini \n";
                    cout << keterangan;
                }

            } else {
                cout << "Nggak ada tanggal " << tanggal << " di bulan Mei ! \n";
                cout << "Tanggal di bulan Mei cuma 1 - 31 aja...\n\n\n";
            }
            run();
        }

        if (bulan == 6) {

            cout << "Masukkan tanggal (1-30): ";
            cin >> tanggal;

            if (tanggal >= 1 && tanggal <= 30) {
                cout << "Bulan: " << bulan << " (Juni)\n";
                cout << "Tanggal: " << tanggal << "\n\n";

                if (tanggal <= 20) {
                    keterangan = "Anda orang yang cerdas, komunikatif, dan mudah beradaptasi. Anda juga suka belajar hal baru dan pandai bergaul, tetapi terkadang mudah bosan dan sulit fokus. Anda punya dua sisi kepribadian, yaitu menyenangkan sekaligus penuh misteri. \n\n\n";
                    cout << "Zodiak anda: Gemini \n";
                    cout << keterangan;
                } else {
                    keterangan = "Anda orang yang lembut, penyayang, dan sangat peduli dengan keluarga. Anda juga sensitif dan intuitif, tetapi mudah tersinggung jika merasa tidak dihargai. Selain itu, anda juga setia dan suka melindungi orang yang anda cintai. \n\n\n";
                    cout << "Zodiak anda: Cancer \n";
                    cout << keterangan;
                }

            } else {
                cout << "Nggak ada tanggal " << tanggal << " di bulan Juni ! \n";
                cout << "Tanggal di bulan Juni cuma 1 - 30 aja...\n\n\n";
            }
            run();
        }

        if (bulan == 7) {

            cout << "Masukkan tanggal (1-31): ";
            cin >> tanggal;

            if (tanggal >= 1 && tanggal <= 31) {
                cout << "Bulan: " << bulan << " (Juli)\n";
                cout << "Tanggal: " << tanggal << "\n\n";

                if (tanggal <= 22) {
                    keterangan = "Anda orang yang lembut, penyayang, dan sangat peduli dengan keluarga. Anda juga sensitif dan intuitif, tetapi mudah tersinggung jika merasa tidak dihargai. Selain itu, anda juga setia dan suka melindungi orang yang anda cintai. \n\n\n";
                    cout << "Zodiak anda: Cancer \n";
                    cout << keterangan;
                } else {
                    keterangan = "Anda ialah orang yang unik, berpikiran maju, dan suka hal-hal inovatif. anda peduli pada kemanusiaan dan bebas dari aturan kaku. Kadang terlihat dingin karena lebih banyak berpikir logis daripada emosional. Aquarius selalu menghargai kebebasan pribadi. \n\n\n";
                    cout << "Zodiak anda: Leo \n";
                    cout << keterangan;
                }

            } else {
                cout << "Nggak ada tanggal " << tanggal << " di bulan Juli ! \n";
                cout << "Tanggal di bulan Juli cuma 1 - 31 aja...\n\n\n";
            }
            run();
        }

        if (bulan == 8) {

            cout << "Masukkan tanggal (1-31): ";
            cin >> tanggal;

            if (tanggal >= 1 && tanggal <= 31) {
                cout << "Bulan: " << bulan << " (Agustus)\n";
                cout << "Tanggal: " << tanggal << "\n\n";

                if (tanggal <= 22) {
                    keterangan = "Anda ialah orang yang unik, berpikiran maju, dan suka hal-hal inovatif. anda peduli pada kemanusiaan dan bebas dari aturan kaku. Kadang terlihat dingin karena lebih banyak berpikir logis daripada emosional. Aquarius selalu menghargai kebebasan pribadi. \n\n\n";
                    cout << "Zodiak anda: Leo \n";
                    cout << keterangan;
                } else {
                    keterangan = "Capricorn ambisius, disiplin, dan pekerja keras. anda fokus mengejar tujuan dan tidak mudah menyerah. Meski tampak kaku, anda punya rasa humor halus dan kesetiaan tinggi. Capricorn menghargai waktu dan tanggung jawab.";
                    cout << "Zodiak anda: Virgo \n";
                    cout << keterangan;
                }

            } else {
                cout << "Nggak ada tanggal " << tanggal << " di bulan Agustus ! \n";
                cout << "Tanggal di bulan Agustus cuma 1 - 31 aja...\n\n\n";
            }
            run();
        }

        if (bulan == 9) {

            cout << "Masukkan tanggal (1-30): ";
            cin >> tanggal;

            if (tanggal >= 1 && tanggal <= 30) {
                cout << "Bulan: " << bulan << " (September)\n";
                cout << "Tanggal: " << tanggal << "\n\n";

                if (tanggal <= 22) {
                    keterangan = "Anda adalah orang yang perfeksionis, analitis, dan suka keteraturan. Anda teliti dalam setiap detail dan punya rasa tanggung jawab besar. Namun, terkadang terlalu kritis baik pada diri sendiri maupun orang lain. Meski begitu, Anda sangat bisa diandalkan. \n\n\n";
                    cout << "Zodiak anda: Virgo \n";
                    cout << keterangan;
                } else {
                    keterangan = "Anda adalah orang yang cinta kedamaian, adil, dan punya rasa estetika tinggi. Anda juga suka harmoni dan sering menjadi penengah dalam konflik. Tetapi, sifatnya yang sulit mengambil keputusan bisa membuat anda tampak ragu-ragu. Anda menawan dan sopan dalam berinteraksi. \n\n\n";
                    cout << "Zodiak anda: Libra \n";
                    cout << keterangan;
                }

            } else {
                cout << "Nggak ada tanggal " << tanggal << " di bulan September ! \n";
                cout << "Tanggal di bulan September cuma 1 - 30 aja...\n\n\n";
            }
            run();
        }

        if (bulan == 10) {

            cout << "Masukkan tanggal (1-31): ";
            cin >> tanggal;

            if (tanggal >= 1 && tanggal <= 31) {
                cout << "Bulan: " << bulan << " (Oktober)\n";
                cout << "Tanggal: " << tanggal << "\n\n";

                if (tanggal <= 22) {
                    keterangan = "Anda adalah orang yang cinta kedamaian, adil, dan punya rasa estetika tinggi. Anda juga suka harmoni dan sering menjadi penengah dalam konflik. Tetapi, sifatnya yang sulit mengambil keputusan bisa membuat anda tampak ragu-ragu. Anda menawan dan sopan dalam berinteraksi. \n\n\n";
                    cout << "Zodiak anda: Libra \n";
                    cout << keterangan;
                } else {
                    keterangan = "Anda ialah orang yang misterius, dan sangat bersemangat. Anda setia, tapi juga mudah cemburu dan sulit memaafkan pengkhianatan. Anda juga punya intuisi tajam dan tidak suka berpura-pura. Anda juga akan rela berkorban sepenuh hati. \n\n\n";
                    cout << "Zodiak anda: Scorpio \n";
                    cout << keterangan;
                }

            } else {
                cout << "Nggak ada tanggal " << tanggal << " di bulan Oktober ! \n";
                cout << "Tanggal di bulan Oktober cuma 1 - 31 aja...\n\n\n";
            }
            run();
        }

        if (bulan == 11) {

            cout << "Masukkan tanggal (1-30): ";
            cin >> tanggal;

            if (tanggal >= 1 && tanggal <= 30) {
                cout << "Bulan: " << bulan << " (November)\n";
                cout << "Tanggal: " << tanggal << "\n\n";

                if (tanggal <= 21) {
                    keterangan = "Anda ialah orang yang misterius, dan sangat bersemangat. Anda setia, tapi juga mudah cemburu dan sulit memaafkan pengkhianatan. Anda juga punya intuisi tajam dan tidak suka berpura-pura. Anda juga akan rela berkorban sepenuh hati. \n\n\n";
                    cout << "Zodiak anda: Scorpio \n";
                    cout << keterangan;
                } else {
                    keterangan = "Anda ialah orang yang optimis, petualang, dan mencintai kebebasan. anda suka belajar hal baru dan berpikir filosofis. Namun, kejujurannya kadang terdengar kasar. Sagittarius selalu membawa energi positif dan sulit dikekang. \n\n\n";
                    cout << "Zodiak anda: Sagittarius \n";
                    cout << keterangan;
                }

            } else {
                cout << "Nggak ada tanggal " << tanggal << " di bulan November ! \n";
                cout << "Tanggal di bulan November cuma 1 - 30 aja...\n\n\n";
            }
            run();
        }

        if (bulan == 12) {

            cout << "Masukkan tanggal (1-31): ";
            cin >> tanggal;

            if (tanggal >= 1 && tanggal <= 31) {
                cout << "Bulan: " << bulan << " (Desember)\n";
                cout << "Tanggal: " << tanggal << "\n\n";

                if (tanggal <= 21) {
                    keterangan = "Anda adalah orang yang optimis, suka berpetualang, dan mencintai kebebasan. anda suka belajar hal baru dan berpikir filosofis. Namun, kejujurannya kadang terdengar kasar. Sagittarius selalu membawa energi positif dan sulit dikekang. \n\n\n";
                    cout << "Zodiak anda: Sagittarius \n";
                    cout << keterangan;
                } else {
                    keterangan = "Anda adalah orang yang ambisius, disiplin, dan pekerja keras. anda fokus mengejar tujuan dan tidak mudah menyerah. Meski tampak kaku, anda punya rasa humor halus dan kesetiaan tinggi. Capricorn menghargai waktu dan tanggung jawab. \n\n\n";
                    cout << "Zodiak anda: Capricorn \n";
                    cout << keterangan;
                }

            } else {
                cout << "Nggak ada tanggal " << tanggal << " di bulan Desember ! \n";
                cout << "Tanggal di bulan Desember cuma 1 - 31 aja...\n\n\n";
            }
            run();
        }

        run();

    } else {

        cout << "\nMana ada bulan " << bulan << "? \n\n\n";

    }

    run();

}


int main() {

    run();

    return 0;
}
