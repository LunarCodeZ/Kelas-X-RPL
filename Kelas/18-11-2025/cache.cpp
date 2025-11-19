#include <iostream>
#include <string>
using namespace std;

int main() {
    int batas = 1, batas_container;
    batas_container = batas;

    // Target: 9

    for (int i = 5; i > 0; i--) {
        for (int j = 1; j <= i; j++) {
            while (batas > 0) {
                cout << " ";
                batas--;
            }
            batas = batas_container;
        }
        // Batas = 1 | 3

        for (int k = 5; k >= i; k--) {
            cout << "*";
            while (batas > 0) {
                cout << " ";
                batas--;
            }
            batas = batas_container;
        }
        // Batas = 1 | 2

        cout << endl;
    }

    return 0;
}