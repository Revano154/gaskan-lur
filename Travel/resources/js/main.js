// Menampilkan popup ketika halaman dimuat
window.onload = function() {
    setTimeout(function() {
      document.getElementById('subscribePopup').style.display = 'flex';
    }, 2000); // Popup muncul setelah 2 detik
  };
  
  // Menutup popup
  document.getElementById('closePopup').addEventListener('click', function() {
    document.getElementById('subscribePopup').style.display = 'none';
  });
  
  // Menutup popup jika area luar popup diklik
  window.onclick = function(event) {
    if (event.target === document.getElementById('subscribePopup')) {
      document.getElementById('subscribePopup').style.display = 'none';
    }
  };
  