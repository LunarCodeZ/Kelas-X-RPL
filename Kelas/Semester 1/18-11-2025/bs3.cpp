#include <iostream>
#include <string>
using namespace std;

int main() {
    int tinggi = 5;

    // For loop border
    for (int a = tinggi; a > 0; a--) {

        for (int b = 1; b <= 1; b++) {
            cout << "==";
        }
        
    }
    cout << "===========";
    cout << endl;


    // For loop pola
    for (int i = tinggi; i > 0; i--) {
        cout << "|    ";
        for (int j = 1; j <= i; j++) {
            cout << " ";
        }

        for (int k = tinggi; k >= i; k--) {
            cout << "*" << " ";
        }

        for (int j = 1; j <= i; j++) {
            cout << " ";
        }

        cout << "   |";
        cout << endl;
    }


    // For border penutup
    for (int a = tinggi; a > 0; a--) {

        for (int b = 1; b <= 1; b++) {
            cout << "==";
        }
        
    }
    cout << "===========";
    cout << endl;


    cout << "\n\n";



    // For loop border
    for (int a = tinggi; a > 0; a--) {

        for (int b = 1; b <= 1; b++) {
            cout << "==";
        }
        
    }
    cout << "===========";
    cout << endl;


    // For loop pola
    for (int i = 0; i < tinggi; i++) {
        cout << "|     ";
        for (int j = 0; j < i; j++) {
            cout << " ";
        }

        for (int k = tinggi; k > i; k--) {
            cout << "*" << " ";
        }

        for (int j = 0; j < i; j++) {
            cout << " ";
        }

        cout << "    |";
        cout << endl;
    }


    // For border penutup
    for (int a = tinggi; a > 0; a--) {

        for (int b = 1; b <= 1; b++) {
            cout << "==";
        }
        
    }
    cout << "===========";
    cout << endl;

    return 0;
}