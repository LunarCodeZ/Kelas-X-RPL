#include <iostream>
using namespace std;

int main() {
    int tinggi = 5;

    cout << "Segitiga siku-siku atas ke bawah:" << endl;
    for (int i = 1; i <= tinggi; i++) {

        for (int j = 1; j <= i; j++) {
            cout << "*" << "  ";
            
        }

        cout << endl;
    }
    cout << "\n\n\n";


    cout << "Segitiga siku-siku bawah ke atas:" << endl;
    for (int i = tinggi; i > 0; i--) {

        for (int j = 1; j <= i; j++) {
            cout << "*" << "  ";
        }

        cout << endl;
    }
    cout << "\n\n\n";


    cout << "Segitiga siku-siku terbalik atas ke bawah:" << endl;
    for (int i = tinggi; i > 0; i--) {
        for (int j = 1; j <= i; j++) {
            cout << "   ";
        }

        for (int k = tinggi; k >= i; k--) {
            cout << "*" << "  ";
        }

        cout << endl;
    }
    cout << "\n\n\n";


    cout << "Segitiga siku-siku terbalik bawah ke atas:" << endl;
    for (int i = 0; i < tinggi; i++) {
        for (int j = 0; j < i; j++) {
            cout << "   ";
        }

        // cout << "*";

        for (int k = tinggi; k > i; k--) {
            cout << "*" << "  ";
        }

        cout << endl;
    }

    return 0;
}