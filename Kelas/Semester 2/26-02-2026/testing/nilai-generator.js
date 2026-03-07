function randomizeScore(amount) {
    let semuaNilai = [];

    for (let attempt = 1; attempt <= amount; attempt++) {
        semuaNilai.push(Math.ceil(Math.random() * 100));
    }

    for (let nilai of semuaNilai) {
        console.log(nilai);
    }
}

randomizeScore(20);