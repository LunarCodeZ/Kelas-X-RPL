function tampil() {
    /*
    == Episode 43 ==
    alert("Javascript"); 
    document.querySelector("#aku").innerHTML = "Javascript";

    == Episode 44 ==
    document.querySelector("h1").innerText = "Belajar JavaScript";
    document.querySelector(".container").style.backgroundColor = "red";
    document.querySelector("#para").style.fontSize = "20px";
    
    == Episode 45 ==
    console.log( document.querySelectorAll("img") );
    let min, max;
    min = Math.ceil(0);
    max = Math.floor(2);
    let n = Math.floor(Math.random() * (max - min + 1) + min);
    console.log(n);
    document.querySelectorAll("img")[n].style.visibility="visible";
    
    == Episode 46 ==
    alert(document.querySelector("#nama").value);
    */
    document.querySelector("#hasil").value = document.querySelector("#nama").value;
    document.querySelector("#para").innerText = document.querySelector("#nama").value;
}

/*
btn.onclick = tampil;


btn.onmouseover = function () {
    alert("Javascript");
}


btn.addEventListener('mouseover', tampil);
*/

btn.addEventListener('mouseover', function () {
    alert("event");
});

btn.onclick = function () {
    // == Episode 52 ==
    const nama = document.querySelector("#nama");

    if (nama.value == "") {
        alert("Nama masih kosong"); // Menampilkan "nama masih kosong jika nama tidak diisi" setelah mengeklik tombol simpan
    } else {
        alert(nama.value); // Lalu menampilkan nama jika nama telah diisi setelah mengeklik tombol simpan
    }

    /*
    == Episode 49 ==
    let menu = document.querySelector("ul");
    menu.removeChild(menu.children[0]);
    
    == Episode 50 ==
    const nama = document.querySelector("#nama");
    const judul = document.querySelector("h1");

    let tampil = "belajar";

    judul.innerHTML = tampil + nama.value;

    tampil = "ngoding";
    judul.innerHTML = tampil + nama.value;
    */

    /*
    == Episode 51 ==
    let a = 10;
    let b = 5;

    // b = a + b; - Menghasilkan 15, karena 10 ditambah 5
    // b = a - b; - Menghasilkan 5, karena 10 dikurangi 5
    // b = a * b; - Menghasilkan 50, karena 10 dikali 5
    // b = a / b; - Menghasilkan 2, karena 10 dibagi 5
    // b = a ** b; - Menghasilkan 100.000, karena 10 pangkat 5
    console.log(b);
    */


}