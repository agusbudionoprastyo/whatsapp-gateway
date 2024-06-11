$(document).ready(function () {
  let year = new Date().getFullYear()
  var copyright = document.createElement('div')
  copyright.className = 'footer'
  copyright.innerHTML = '<div class="container-fluid"><div class="row"><div class="col-sm-6"> ' + year +' \xA9 MPWA-6.0.0</div><div class="col-sm-6"><div class="text-sm-end d-none d-sm-block"> Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://m-pedia.co.id - v6.0.0">M Pedia</a></div></div></div></div>'
  document.querySelector('.wrapper').appendChild(copyright)
})