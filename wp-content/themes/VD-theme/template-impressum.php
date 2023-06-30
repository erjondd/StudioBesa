<?php

get_header();

/*
Template Name: Impressum Template
*/

?>
<div class="impressum-header">
  <a href="<?php echo home_url(); ?>"><img src="<?= get_template_directory_uri() ?>\images\impressum-logo.png" alt=""></a>
</div>
<div class="impressum-body">
  <div class="impressum-body-left">
    <div class="left-first-row">Impressum / Datenschutz</br>Studio Besa</div>
    <div class="left-second-row">Herbergstrasse 3ic</br>9524 zuzwil</div>
    <div class="left-third-row">Schweiz</div>
    <div class="left-fourth-row">Vertretungsberechtigte (Persönlich haftende Gesellschafter/in)</div>
    <div class="left-fifth-row">Studio Besa Krasniqi</div>
    <div class="left-sixth-row">Diese wird vertreten durch die Geschäftsführer</div>
    <div class="left-seventh-row">Besa Krasniqi</div>
  </div>
  <div class="impressum-body-right">
    <div class="right-first-row">Kontakt:</div>
    <div class="right-second-row">
      <div class="right-second-question">Telefon:</div>
      <div class="right-second-answer">+41 520 76 00</div>
    </div>
    <div class="right-third-row">
      <div class="right-second-question">E-mail:</div>
      <div class="right-second-answer">info@studiobesa.ch</div>
    </div>
    <div class="right-fourth-row">Inhaltlich Verantwortlicher</div>
    <div class="right-fifth-row">Studio Besa</div>
  </div>

</div>
<div class="impressum-info">
  <div class="impressum-section1">
    <div class="impressum-section-tittle">Copyright</div>
    <div class="impressum-section-content">Alle auf unseren Internetseiten veröffentlichten Werke bzw. Werkteile, wie z.B. Texte, Bilder, Illustrationen und Dateien unterliegen dem Urheberrecht und anderen Gesetzen zum Schutz geistigen Eigentums. Jede weitere Veröffentlichung, Vervielfältigung, Verbreitung oder sonstige Nutzung, auch auszugsweise, bedarf der schriftlichen Genehmigung von Studio Besa</div>
  </div>
  <div class="impressum-section2">
    <div class="impressum-section-tittle">Haftungsausschluss</div>
    <div class="impressum-section-content">Der Autor übernimmt keinerlei Gewähr hinsichtlich der inhaltlichen Richtigkeit, Genauigkeit, Aktualität, Zuverlässigkeit und Vollständigkeit der Informationen. Haftungsansprüche gegen den Autor wegen Schäden materieller oder immaterieller Art, welche aus dem Zugriff oder der Nutzung bzw. Nichtnutzung der veröffentlichten Informationen, durch Missbrauch der Verbindung oder durch technische Störungen entstanden sind, werden ausgeschlossen. Alle Angebote sind unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne besondere Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.</div>
  </div>
  <div class="impressum-section3">
    <div class="impressum-section-tittle">Haftungsausschluss für Links</div>
    <div class="impressum-section-content">Verweise und Links auf Webseiten Dritter liegen ausserhalb unseres Verantwortungsbereichs. Es wird jegliche Verantwortung für solche Webseiten abgelehnt. Der Zugriff und die Nutzung solcher Webseiten erfolgen auf eigene Gefahr des jeweiligen Nutzers.</div>
  </div>
  <div class="impressum-section4">
    <div class="impressum-section-tittle">Urheberrechte</div>
    <div class="impressum-section-content">Die Urheber- und alle anderen Rechte an Inhalten, Bildern, Fotos oder anderen Dateien auf dieser Website, gehören ausschliesslich Studio Besa, oder den speziell genannten Rechteinhabern. Für die Reproduktion jeglicher Elemente ist die schriftliche Zustimmung des Urheberrechtsträgers im Voraus einzuholen.</div>
  </div>
  <div class="impressum-section5">
    <div class="impressum-section-tittle">Cookie</div>
    <div class="impressum-section-content">Diese Website verwendet Retargeting-Technologie der Google Inc. („Google“). Diese ermöglicht es, Besucher unserer Internetseiten gezielt mit personalisierter, interessenbezogener Werbung anzusprechen, die sich bereits für unseren Shop und unsere Produkte interessiert haben. Die Einblendung der Werbemittel erfolgt dabei auf Basis einer Cookie-basierten Analyse des früheren Nutzungsverhaltens. In den Fällen der Retargeting-Technologie wird ein Cookie auf Ihrem Computer oder mobilen Endgerät gespeichert, um anonymisierte Daten über Ihre Interessen zu erfassen und so die Werbung individuell auf die gespeicherten Informationen anzupassen. Diese Cookies sind kleine Textdateien, die auf Ihrem Computer oder mobilen Endgerät gespeichert werden. Sie bekommen dadurch Werbung angezeigt, die mit hoher Wahrscheinlichkeit Ihren Produkt- und Informationsinteressen entspricht. Weitergehende Informationen und die Datenschutzbestimmungen bezüglich Werbung und Google können Sie <span><a href ="">hier einsehen.</a></span></div>
  </div>
  <div class="impressum-section6">
    <div class="impressum-section-tittle">Hinweis</div>
    <div class="impressum-section-content">Sämtliche Inhalte und Werke auf dieser Website unterliegen dem Schweizer Urheberrecht und anderen Gesetzen zum Schutz des geistigen Eigentums. Es darf keine Vervielfältigung, Veränderung, Verbreitung und Verwertung der Inhalte erfolgen, sofern von der Firma Schweizer Versicherungen AG oder dem jeweiligen Inhaber der hierfür relevanten Rechte nicht zugestimmt wurde. Die Website der Schweizer Versicherungen AG ist mit größtmöglicher Sorgfalt zusammengestellt worden und wird regelmäßig aktualisiert und überprüft. Die übernimmt keine Gewähr für die Richtigkeit, Vollständigkeit, Aktualität oder Qualität der Informationen auf dieser Website. Unsere Website enthält externe Links zu anderen Seiten. Für die Inhalte und die Funktion der verlinkten Seiten übernehmen wir keine Haftung.</div>
  </div>
</div>
<?php
get_footer();
?>


<script>
  $(document).ready(function() {

    $("header").addClass("withoutheader");

    function reveal() {
      var reveals = document.querySelectorAll(".meet-content");

      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })

  $(document).ready(function() {

    function reveal() {
      var reveals = document.querySelectorAll(".whatwetreat-content");

      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);

  })

  $(document).ready(function() {

    function reveal() {
      var reveals = document.querySelectorAll(".whatwetreat-content-picture");

      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);

  })



  $(document).ready(function() {

    function reveal() {
      var reveals = document.querySelectorAll(".feedback-first-absolute-position");

      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);

  })

  $(document).ready(function() {

    function reveal() {
      var reveals = document.querySelectorAll(".feedback-second-absolute-position");

      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })

  $(document).ready(function() {
    function reveal() {
      var reveals = document.querySelectorAll(".swiper-container");
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })

  $(document).ready(function() {
    function reveal() {
      var reveals = document.querySelectorAll(".first-box");
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })
  $(document).ready(function() {
    function reveal() {
      var reveals = document.querySelectorAll(".footer-logo");
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })

  $(document).ready(function() {
    function reveal() {
      var reveals = document.querySelectorAll("#blog");
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })
  $(document).ready(function() {
    function reveal() {
      var reveals = document.querySelectorAll(".form-leftside");
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })
  $(document).ready(function() {
    function reveal() {
      var reveals = document.querySelectorAll(".form-rightside");
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })
  $(document).ready(function() {
    function reveal() {
      var reveals = document.querySelectorAll(".second-box");
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })
  $(document).ready(function() {
    function reveal() {
      var reveals = document.querySelectorAll(".third-box");

      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })
  $(document).ready(function() {

    function reveal() {
      var reveals = document.querySelectorAll(".kontakt-legs");

      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })
  $(document).ready(function() {

    function reveal() {
      var reveals = document.querySelectorAll(".footer-facebook");

      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 50;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })
  $(document).ready(function() {
    function reveal() {
      var reveals = document.querySelectorAll(".footer-instagram");
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 50;
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
  })

  jQuery(document).ready(function() {
    jQuery('.whatwetreat-button .material-bubble').click(function() {
      jQuery('.popup-all-background').addClass('active');
    })
  })
  jQuery(document).ready(function() {
    jQuery('.close-popup').click(function() {
      jQuery('.popup-all-background').removeClass('active');
    })
  })
  jQuery(document).ready(function() {
    jQuery('.cpanel1').click(function() {
      jQuery('.cpanel11').addClass('active');
      jQuery('.cpanel22').removeClass('active');
      jQuery('.cpanel33').removeClass('active');
      jQuery('.form-cpanel-text1').addClass('active');
      jQuery('.form-cpanel-text2').removeClass('active');
      jQuery('.form-cpanel-text3').removeClass('active');
      jQuery('.picture2').removeClass('active');
      jQuery('.picture3').removeClass('active');
      jQuery('.picture1').addClass('active');

    });
    jQuery('.cpanel2').click(function() {
      jQuery('.cpanel22').addClass('active');
      jQuery('.cpanel11').removeClass('active');
      jQuery('.cpanel33').removeClass('active');
      jQuery('.form-cpanel-text2').addClass('active');
      jQuery('.form-cpanel-text1').removeClass('active');
      jQuery('.form-cpanel-text3').removeClass('active');
      jQuery('.picture2').addClass('active');
      jQuery('.picture3').removeClass('active');
      jQuery('.picture1').removeClass('active');
    });
    jQuery('.cpanel3').click(function() {
      jQuery('.cpanel33').addClass('active');
      jQuery('.cpanel11').removeClass('active');
      jQuery('.cpanel22').removeClass('active');
      jQuery('.form-cpanel-text3').addClass('active');
      jQuery('.form-cpanel-text1').removeClass('active');
      jQuery('.form-cpanel-text2').removeClass('active');
      jQuery('.picture3').addClass('active');
      jQuery('.picture2').removeClass('active');
      jQuery('.picture1').removeClass('active');
    });
  })
</script>