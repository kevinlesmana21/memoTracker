window.addEventListener('load', function() {
  // let dels = [...document.getElementsByClassName('del')]; //spread operator:ngubah data ini jadi array
  // dels.forEach(del => {
  //   del.addEventListener('click', function(e) { 
  //     e.preventDefault();
  //     let route = del.getAttribute('href');
  //     document.getElementById('alert').style.display = 'block';
  //     document.querySelector(`#btnYes`).setAttribute('href', route);
  //   });
  // })
  document.querySelector('#body').addEventListener('click', function(e) {
    if (e.target.nodeName === 'A') {
      e.preventDefault();
      if (e.target.classList.contains('del')) {
        let route = e.target.getAttribute('href')
        document.getElementById('alert').style.display = 'block';
        document.querySelector(`#btnYes`).setAttribute('href', route);
        document.querySelector(`#btnNo`).addEventListener('click', function() {
          document.getElementById('alert').style.display = 'none';
        })
      }
    }
  })
})