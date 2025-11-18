// === Belajar For Loop ===

#include <iostream>
using namespace std;

int main() {

    int c;
    cout << "=== Program perulangan For ===" << endl << endl;

    // for (int i = 1; i <= 5; i++) {

    //     cout << endl << "i ke-" << i << ":" << endl;

    //     for (int j = 1; j <= 3; j++) {
    //         cout << "Ini i ke-" << i << " Dan ini j ke-" << j;
    //         cout << endl;
    //     }

    //     // cout << i << ". Belajar CPP" << endl;
    //     // cout << "Di kelas X RPL" << endl << endl;

        
    // }

    for (int a = 1; a <= 3; a++)
    {
        cout << "Unit ke-" << a << endl;

        for (int j = 1; j <= 3; j++)
        {
            cout << a << "." << j << endl;
        }

        cout << endl;
    }

    return 0;
}