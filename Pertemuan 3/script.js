function tampil(){
    alert("Halo");
}

//let warna = document.getElementById('warna');

//warna.addEventListener('change', (Event) =>{
//    document.body.style.backgroundColor = warna.value
//});

let x = window.prompt("Masukan Nama Anda");
alert('Halo ' + x)

let warna = document.getElementById('warna');
warna.addEventLisetener('change', (event) =>{
	document.body.style.backgroundColor = warna.value;
});