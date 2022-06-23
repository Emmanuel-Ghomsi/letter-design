<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="design a letter for entreprise" />
  <meta name="author" content="Emmanuel GHOMSI GHOMSI" />
  <title>Lettre pour entreprises</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css" />
</head>

<body>
  <div id="print">
    <header class="header"></header>

    <section class="content">
      <address>
        <span id="name" class="name fw-bold fs-6"><?= $_POST['name'] ?></span><br />
        <span class="address fw-bold"><?= $_POST['address'] ?></span><br />
        <span class="po-box fw-bold"><?= $_POST['poBox'] ?></span>
      </address>

      <p class="date"><?= $_POST['city'] ?>, le <?= date('d-m-y'); ?></p>

      <p class="fw-bold fs-6">Bonjour,</p>
      <p>Je suis Hermann,</p>
      <p>
        Responsable de projet digital chez Hkdigitals. <br />
        Hkdigitals est une entreprise française spécialisée dans l'apport de
        solutions digitales aux petites et moyennes entreprises.
      </p>
      <p>
        Avec un nombre d'utilisateurs sans cesse grandissant, les réseaux
        sociaux sont un véritable levier de différenciation. En 2022, on
        retrouve plusieurs types de réseaux sociaux avec différents types de
        publics.
      </p>
      <p>Notre équipe vous propose :</p>
      <ul>
        <li>La création ou le relooking des réseaux</li>
        <li>
          Une gestion optimisée de vos réseaux sociaux et de votre e-réputation
        </li>
        <li>
          De booster votre visibilité online et d'accroître votre notoriété
        </li>
        <li>
          D'élargir votre cible de prospects et capter de nouveaux clients
        </li>
        <li>Fidéliser vos clients et créer des ambassadeurs de votre marque</li>
        <li>Améliorer votre relation client par plus d'interactivités</li>
        <li>Et bien plus encore...</li>
      </ul>
      <p>
        Vous souhaitez en savoir davantage, échanger avec moi sur un besoin
        actuel ou futur alors.
      </p>
      <br />
      <ul class="fw-bold socials">
        Contactez moi
        <li class="fw-normal">
          <i class="fa fa-phone text-success"></i> Hermann : 06 40 60 72 30
        </li>
        <li class="text-success fw-normal">
          <i class="fa fa-clock-o"></i> 7j/7 - 24h/24
        </li>
        <li>
          <i class="fa fa-envelope text-success"></i> h.kuate@hkdigitals.com
        </li>
      </ul>
    </section>
    <footer class="footer"></footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <script>
    function slugify(str) {
      str = str.replace(/^\s+|\s+$/g, '');

      // Make the string lowercase
      str = str.toLowerCase();

      // Remove accents, swap ñ for n, etc
      var from = "ÁÄÂÀÃÅČÇĆĎÉĚËÈÊẼĔȆÍÌÎÏŇÑÓÖÒÔÕØŘŔŠŤÚŮÜÙÛÝŸŽáäâàãåčçćďéěëèêẽĕȇíìîïňñóöòôõøðřŕšťúůüùûýÿžþÞĐđßÆa·/_,:;";
      var to = "AAAAAACCCDEEEEEEEEIIIINNOOOOOORRSTUUUUUYYZaaaaaacccdeeeeeeeeiiiinnooooooorrstuuuuuyyzbBDdBAa------";
      for (var i = 0, l = from.length; i < l; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
      }

      // Remove invalid chars
      str = str.replace(/[^a-z0-9 -]/g, '')
        // Collapse whitespace and replace by -
        .replace(/\s+/g, '-')
        // Collapse dashes
        .replace(/-+/g, '-');

      return str;
    }

    window.addEventListener("load", (event) => {
      const letter = document.getElementById("print")
      const name = document.getElementById("name").textContent
      let body = document.body
      let html = document.documentElement
      let height = Math.max(body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight)
      let heightCM = height / 35.35

      var opt = {
        margin: 0,
        filename: slugify(name) + '.pdf',
        image: {
          type: 'jpg',
          quality: 1
        },
        html2canvas: {
          dpi: 192,
          letterRendering: true
        },
        jsPDF: {
          orientation: 'portrait',
          unit: 'in',
          format: "letter"
        }
      };

      // New Promise-based usage:
      const pdf = html2pdf().set(opt).from(letter);
      console.log(pdf);

      // Send to database
      $.ajax({
        type: "POST",
        url: "store.php",
        data: {
          pdf: pdf,
        },
        cache: false,
        success: function(data) {
          console.log(data);
        },
        error: function(xhr, status, error) {
          console.error(xhr);
        }
      });
    })
  </script>
</body>

</html>