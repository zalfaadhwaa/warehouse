<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    height: 100%; 
    display: flex;
    flex-direction: column; 
}

body > * {
    flex-shrink: 0; /* Mencegah elemen mengecil */
}

main {
    flex: 1; 
}

footer {
    background-color: #343a40; 
    color: #fff; 
    text-align: center;
    padding: 10px 0; 
    border-top: 1px solid #ccc; 
    font-size: 14px;
    position: fixed;  /* Mengatur posisi footer tetap */
    bottom: 0;        /* Menempatkan footer di bawah */
    left: 0;          /* Menjaga footer tetap di sisi kiri */
    width: 100%;      /* Mengisi lebar penuh */
    z-index: 1000;    /* Memastikan footer berada di atas elemen lain */
    margin-top: 20px;
}
</style>

<footer>
    <div>
        <p class="mb-0">&copy; 2024 LoomHouse</p>
    </div>
</footer>