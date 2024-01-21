

//--------------------------------------------------------------------------------------
//link pendaftaran
    document.getElementById("btn-df").addEventListener("click", function() {
        window.open("https://forms.gle/Xy9MjEXBdEJhUp3N8", "_blank");
    });

//link baca selengkapnya berita
    document.getElementById("btn-br1").addEventListener("click", function() {
        window.location.href = "baca-selengkapnya.html";
    });
    document.getElementById("btn-br2").addEventListener("click", function() {
        window.location.href = "baca-selengkapnya.html";
    });
    
//button top index    
    document.querySelector('.wj-top-btn').addEventListener('click', () => {
        document.querySelector('html').scrollTop = 0;
      });
      
      document.querySelector('.wj-top-btn').addEventListener('mouseover', () => {
        document.querySelector('.wj-top-btn').classList.add('animated', 'bounce');
        setTimeout(function () {
          document.querySelector('.wj-top-btn').classList.remove('animated', 'bounce')
        }, 1000);
      });

      window.onscroll = function () {
        if (document.querySelector('html').scrollTop > 1000) {
          document.querySelector('.wj-top-btn').style.display = 'block';
        } else {
          document.querySelector('.wj-top-btn').style.display = 'none';
        }
      };
      