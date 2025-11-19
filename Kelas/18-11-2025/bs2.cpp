#include <iostream>
#include <string>
using namespace std;

int start() {
    string line = "===============================";

    cout << line << endl;
    cout << "| Program Bangun Segitiga     |" << endl;
    cout << "| Dengan menggunakan for loop |" << endl;
    cout << line << endl << endl;

    int tinggi, batas, batas_container , counter = 0, model;
    char simbol;
    string pilihan_model[6] ={
        "Segitiga Kiri Atas Ke Bawah",
        "Segitiga Kiri Bawah Ke Atas",
        "Segitiga Kanan Atas Ke Bawah",
        "Segitiga Kanan Bawah Ke Atas",
        "Segitiga Sama Kaki",
        "Segitiga Sama Kaki Terbalik"
    };

    cout << "Masukkan tinggi segitiga: ";
    cin >> tinggi;

    // cout << "\nMasukkan batas: ";
    // cin >> batas;
    // batas_container = batas;

    cout << "\nKetikkan simbol (1 karakter): ";
    cin >> simbol;

    cout << ">> Model Segitiga << \n";
    for (string model : pilihan_model)
    {
        counter++;
        cout << "[" << counter << "]" << " " << model << "\n";
    }
    cout << "Pilih model (1-4): ";
    cin >> model;

    // Closing Border
    int border_1, border_1_num;
    int border_2, border_2_num;

    
    if (model > 0 && model < 5) {
        
        cout << endl << "Tinggi segitiga: " << tinggi << endl;
        // cout << "Batas: " << batas << endl;
        cout << "Simbol digunakan: " << simbol << endl;
        cout << "Model segitiga: " << pilihan_model[model] << endl;
        cout << "Hasil: " << "\n\n";
       
        if (model == 1) {

            // Jika model "segitiga kiri atas ke bawah"
            border_1 = tinggi - 1;

            // For loop border
            for (int a = 1; a <= tinggi; a++) {
                cout << "=";

                if (a == tinggi) {
                    for (int b = 0; b <= tinggi; b++) {
                        cout << "==";
                    }
                }
                
            }
            cout << "=" << endl;


            // For loop pola
            for (int i = 1; i <= tinggi; i++) {
                cout << "| ";
                for (int j = 1; j <= i; j++) {
                    cout << simbol << "  ";

                    if (j == i) {
                        border_1_num = border_1 * 3;

                        for (int x = 1; x <= border_1_num; x++) {
                            cout << " ";
                        }

                        cout << "|";
                    }

                    
                }
                border_1--;


                cout << endl;
            }

            // * --> 15
            // * * --> 12
            // * * * --> 6

            // * --> 12
            // * * --> 9
            // * * * --> 6
            // * * * * --> 3
            // * * * * *


            // For border penutup
            for (int a = 1; a <= tinggi; a++) {
                cout << "=";

                if (a == tinggi) {
                    for (int b = 0; b <= tinggi; b++) {
                        cout << "==";
                    }
                }
                
            }
            cout << "=";

            cout << "\n\n\n\n";
            start();


        } else if (model == 2) {

            // Jika model "segitiga kiri bawah ke atas"
            border_2 = 0;

            // For loop border
            for (int a = tinggi; a > 0; a--) {

                for (int b = 1; b <= 1; b++) {
                    cout << "===";
                }
                
            }
            cout << "===";
            cout << endl;


            // For loop pola
            for (int i = tinggi; i > 0; i--) {
                cout << "| ";
                for (int j = 1; j <= i; j++) {
                    cout << simbol << "  ";

                    if (j == i) {
                        border_2_num = border_2 * 3;

                        for (int x = 1; x <= border_2_num; x++) {
                            cout << " ";
                        }

                        cout << "|";
                    }
                }
                border_2++;

                cout << endl;
            }

            // * * * * *
            // * * * * --> 3
            // * * *--> 6
            // * * --> 9
            // * --> 12


            // For border penutup
            for (int a = tinggi; a > 0; a--) {

                for (int b = 1; b <= 1; b++) {
                    cout << "===";
                }
                
            }
            cout << "===";
            cout << endl;

            // for (int i = tinggi; i > 0; i--) {
            //     for (int j = 1; j <= i; j++) {
            //         cout << "| " << simbol;
            //         while (batas > 0) {
            //             cout << " ";
            //             batas--;
            //         }
            //         batas = batas_container;
            //     }

            //     cout << endl;
            // }

            cout << "\n\n\n";
            start();


        } else if (model == 3) {

            // Jika model "segitiga kanan atas ke bawah"
            // For loop border
            for (int a = 1; a <= tinggi; a++) {
                cout << "=";

                if (a == tinggi) {
                    for (int b = 0; b <= tinggi; b++) {
                        cout << "==";
                    }
                }
                
            }
            cout << "===" << endl;


            // For loop pola
            for (int i = tinggi; i > 0; i--) {
                cout << "|";
                for (int j = 1; j <= i; j++) {
                    cout << "   ";
                }

                for (int k = tinggi; k >= i; k--) {
                    cout << simbol << "  ";
                }

                cout << "|";
                cout << endl;
            }


            // For border penutup
            for (int a = 1; a <= tinggi; a++) {
                cout << "=";

                if (a == tinggi) {
                    for (int b = 0; b <= tinggi; b++) {
                        cout << "==";
                    }
                }
                
            }
            cout << "===" << endl;

            cout << "\n\n\n";
            start();
            
        } else {

            // Jika model "segitiga kanan bawah ke atas"
            // For loop border
            for (int a = tinggi; a > 0; a--) {

                for (int b = 1; b <= 1; b++) {
                    cout << "===";
                }
                
            }
            cout << "===";
            cout << endl;


            // For loop pola
            for (int i = 0; i < tinggi; i++) {
                cout << "| ";
                for (int j = 0; j < i; j++) {
                    cout << "   ";
                }

                // cout << "*";

                for (int k = tinggi; k > i; k--) {
                    cout << simbol << "  ";
                }

                cout << "|";
                cout << endl;
            }

            
            // For border penutup
            for (int a = tinggi; a > 0; a--) {

                for (int b = 1; b <= 1; b++) {
                    cout << "===";
                }
                
            }
            cout << "===";
            cout << endl;

            cout << "\n\n\n";
            start();
            
        }

    } else {
        cout << endl << "model tidak valid !! \n\n";
        start();
    }

    return 0;
}


int main() {

    cout << endl << "Hello :), \nProgram ini dibuat oleh: LunarCodeZ" << endl << endl;
    start();

    return 0;
}