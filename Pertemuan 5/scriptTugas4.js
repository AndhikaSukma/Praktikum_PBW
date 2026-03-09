function CekNilai(){
    let nim = document.getElementById("NIM").value;
    let nilai = parseInt(document.getElementById("nilai").value);
    let hasil = document.getElementById("hasil");
    let huruf;


    if (nilai < 0 || nilai > 100 || isNaN(nilai)){
        hasil.innerHTML = "Nilai tidak valid!";
        return;
    }

    if (nilai >= 80 && nilai <= 100){
        huruf = "A";
    } else if (nilai >= 70){
        huruf = "B";
    } else if (nilai >= 60){
        huruf = "C";
    } else if (nilai >= 50){
        huruf = "D";
    } else {
        huruf = "E";
    }

    hasil.innerHTML = "NIM: " + nim + "<br>Huruf Mutu: " + huruf;
}