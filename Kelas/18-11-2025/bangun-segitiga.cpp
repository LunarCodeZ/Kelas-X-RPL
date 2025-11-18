#include <iostream>
#include <string>
using namespace std;

int main() {
    cout << "=== Program Bangun Segitiga ===" << endl;
    cout << "Dengan menggunakan for loop" << endl << endl;

    // int t, batas;
    // char simbol;
    // string mode;

    // cout << "Masukkan nilai tinggi segitiga: ";
    // cin >> t;

    // cout << "\nMasukkan batas: ";
    // cin >> batas;

    // cout << "\nKetikkan simbol: ";
    // cin >> simbol;

    // cout << "\nIncrement / Decrement?: ";
    // cin >> mode;

    // if (mode == "increment") {
    //     for (t; t <= batas; t++)
    //     {
    //         for (int a = 0; a <= t; a++)
    //         {
    //             cout << simbol << "\t" << endl;
    //         }
    //     }
    // }
    

    // *
    // * *
    // * * *

    // for (int i = 1; i <= 5; i++) {
        
    //     for (int j = 0; j < i; j++)
    //     {
    //         cout << "*\t";
    //     }

    //     cout << endl;
    // }

    //=== Tugas 1: Segitiga kiri atas ke bawah === 
    // *
    // * *
    // * * *

    cout << "Tugas 1: Segitiga kiri atas ke bawah" << endl;

    for (int i = 1; i <= 5; i++) {
        for (int j = 1; j <= i; j++) {
            cout << "*  ";
        }

        cout << endl;
    }

    cout << endl;
    


    //=== Tugas 2: Segitiga kiri bawah ke atas === 
    // * * *
    // * *
    // *
    cout << "Tugas 2: Segitiga kiri bawah ke atas" << endl;

    for (int i = 5; i > 0; i--) {
        for (int j = 1; j <= i; j++) {
            cout << "*  ";
        }

        cout << endl;
    }

    cout << endl;



    //=== Tugas 3: Segitiga kanan atas ke bawah === 
    //     *
    //   * *
    // * * *

    cout << "Tugas 3: Segitiga kanan atas ke bawah" << endl;

    for (int i = 5; i > 0; i--) {
        for (int j = 1; j <= i; j++) {
            cout << "   ";
        }

        for (int k = 5; k >= i; k--) {
            cout << "*  ";
        }

        cout << endl;
    }

    cout << endl;



    //=== Tugas 4: Segitiga kanan bawah ke atas ===
    // * * *
    //   * *
    //     *

    cout << "Tugas 4: Segitiga kanan bawah ke atas" << endl;

    for (int i = 0; i < 5; i++) {
        for (int j = 0; j < i; j++) {
            cout << "   ";
        }

        // cout << "*";

        for (int k = 5; k > i; k--) {
            cout << "*  ";
        }

        cout << endl;
    }

    cout << endl;

    // Latihan: Segitiga sama kaki
    // Latihan: Segitiga sama kaki terbalik

    // Nilai tambahan: Dengan bingkai
    return 0;
}