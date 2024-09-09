document.getElementById('userForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah pengiriman default formulir

    const formData = new FormData(this);
    fetch('saveData.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert('Data berhasil dikirim!');
    })
    .catch(error => {
        console.error('Terjadi kesalahan:', error);
    });
});
