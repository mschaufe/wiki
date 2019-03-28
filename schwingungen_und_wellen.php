<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "physik";?>
</head>
  <body>
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
  <div class="container">
    <span class="skiplink-text">Skip to main content</span>
  </div>
</a>

  <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
    <?php include ('includes/head.php'); ?>
  </header>

    <div class="container-fluid">
      <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <?php include ('includes/search.php'); ?>
          <?php include ('includes/nav_physik.php'); ?>
        </div>

        
          <div class="d-none d-xl-block col-xl-2 bd-toc">
            <ul class="section-nav">
            <li class="toc-entry toc-h2"><a href="#schwingungen">Schwingungen</a></li>
            <li class="toc-entry toc-h2"><a href="#wellen">Wellen</a></li>
            </ul>
          </div>


        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="optik">Schwingungen und Wellen</h1>
          <p class="bd-lead">Schwingungen sind Vorgänge, bei denen sich ein physikalischer Zustand zeitlich periodisch verändert, d.h. eine physikalische Größe startet bei einem bestimmten Wert, verändert sich stetig und erreicht nach einiger Zeit wieder diesen Wert.</p>

        <br><br><h5 id="schwingungen">Ungedämpfte harmonische Schwingungen</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width=20%>Bezeichnung</th>
              <th scope="col" width=42%>Formel</th>
              <th scope="col">Grafik</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Frequenz einer Welle</td>
              <td>$$ f = \frac{1}{T} $$</td>
              <td><img src="bilder/optik/schwingungen/schwingung.jpeg"style="max-height:50%; max-width:100%"><br>
                <br><b>f</b> = Frequenz [1/s]<br>
                <b>T</b> = Schwingungsdauer einer Periode [s]
              </td>
            </tr>
            <tr>
              <td>Ausbreitungsgeschwindigkeit einer Welle</td>
              <td>$$ v = \lambda \cdot f $$</td>
              <td><b>v</b> = Geschwindigkeit [m/s]<br>
                <b>λ</b> = Periodenlänge [m]<br>
                <b>f</b> = Frequenz [1/s]
              </td>
            </tr>
            <tr>
              <td rowspan="2">Harmonische Schwingung</td>
              <td>$$ y= \hat{y} \cdot \sin(\omega \cdot t) $$</td>
              <td>Falls die Projektion wie eine Kreisbewegung mit Sinus oder Cosinus beschrieben werden kann.</td>
            </tr>
            <tr>
              <td>$$ {{ F}_{{\rm{rück}}}}(x) =  - k \cdot x $$</td>
              <td>Oder die rücktreibende Kraft auf den schwingenden Körper ist entgegengesetzt gerichtet und betraglich proportional zur Auslenkung des Körpers aus der Ruhelage.</td>
            </tr>
            <tr>
              <td>Phasenwinkel</td>
              <td>$$ \varphi = ωt  = 2\pi f t  $$</td>
              <td>
                <b><img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi.png" style="max-height:14px; max-width:14px"></b> = Phasenwinkel [rad]<br>
                <b>ω</b> = Kreisfrequenz [1/s]<br>
                <b>f</b> = Frequenz [1/s]<br>
                <b>t</b> = Zeit [s]
              </td>
            </tr>
            <tr>
              <td>Auslenkung</td>
              <td>$$ y = \hat{y}\cdot \sin(\varphi ) $$</td>
              <td>
                <b>y</b> = Auslenkung nach Ablauf der Zeit t [m]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/y.png" style="max-height:17px; max-width:17px"> = Amplitude (Auslenkungsmaximum) [m]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi.png" style="max-height:14px; max-width:14px"> = Phasenwinkel [rad]
              </td>
            </tr>
            <tr>
              <td>Schwingungsgleichung</td>
              <td>$$ F_E + F_R + F_D = ma = m\ddot{y} 
                \\ \text{ } \\
              \hat{F}_E \cos(\omega t) -Dy - \beta \dot{y} = m\ddot{y} $$</td>
              <td>
                <b>F<sub>E</sub></b> = Erregerkraft (F<sub>E</sub> cos(ωt)) [N]<br>
                <b>F<sub>R</sub></b> = Rückstellkraft (-Dy) [N]<br>
                <b>F<sub>D</sub></b> = Dämpfungskraft (-βv) [N]<br>
                <b>m</b> = Masse des Schwingers [kg]<br>
                <b>a</b> = Beschleunigung [m/s<sup>2</sup>]<br>
                <b>y</b> = Auslenkung [m]<br>
                <b>β</b> = Dämpfungskonstante [kg/s]<br>
                <b>D</b> = Richtgrösse F/y<br>
                <b>ω</b> = Erregerkreisfrequenz [1/s]<br>
              </td>
            </tr>
          </tbody>
        </table>

         <br><br><h5 id="wellen">Wellen</h5>
         <table>
            <tr>
              <td rowspan="3" width=20%>Wellenarten</td>
              <td width=42%><b>Querwellen</b> oder <b>transversale Wellen</b> sind Wellen, bei denen die Richtung der Teilchengeschwindikgeit zur Richtung der Phasengeschwindigkeit senkrecht ist.</td>
              <td> <img src="bilder/schwingungen_und_wellen/wellen/Querwellen.jpeg" style="max-height:100%; max-width:40%">
                <img src="bilder/schwingungen_und_wellen/wellen/tal_berg.jpeg" style="max-height:100%; max-width:50%"></td>
            </tr>
            <tr>
              <td width=42%><b>Längswellen</b> oder <b>longitudinale Wellen</b> haben bei der Schwing- und Phasengeschwindigkeit die gleiche Richtung. <br>In ihnen wechseln Verdichtung und Verdünnungen.</td>
              <td> <img src="bilder/schwingungen_und_wellen/wellen/laengswellen.jpeg" style="max-height:100%; max-width:40%">
                <img src="bilder/schwingungen_und_wellen/wellen/verdichtung.jpeg" style="max-height:100%; max-width:50%"></td>
            </tr>
            <tr>
              <td width=42%>Die <b>Ausbreitungsmöglichkeiten</b> unterscheidet die Wellen in drei Typen auf. 
                </td>
              <td>
                1-dim <b>linearen Wellen</b>
                <br>2-dim <b>Flächenwellen</b>
                <br>3-dim <b>Raumwellen</b> </td>
            </tr>
            <tr>
              <td>Auslenkung (Elongation)</td>
              <td>$$ y(x,t) = \hat{y}\cdot \sin\left [ 2 \pi \Big(  \frac{x}{\lambda }-\frac{t}{T} \Big) \right ] $$</td>
              <td>
                <b>y</b> = Auslenkung eines Teilchens am Ort x zur Zeit t [m]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/y.png" style="max-height:17px; max-width:17px"> = Amplitude (Auslenkungsmaximum) [m]<br>
                <b>t</b> = Zeit [s]<br>
                <b>T</b> = Periodendauer [s]<br>
                <b>x</b> = Abstand vom Wellenzentrum [m]<br>
                <b>λ</b> = Wellenlänge [m]<br><br>
                <img src="bilder/schwingungen_und_wellen/wellen/elongation.jpeg" style="max-height:100%; max-width:65%">
              </td>
            </tr>
            <tr>
              <td>Kreisfrequenz</td>
              <td>$$ \omega = \frac{2\pi}{T} = 2\pi f $$</td>
              <td> 
                <b>ω</b> = Kreisfrequenz [1/s]<br>
                <b>T</b> = Schwingungsdauer einer Periode [s]<br>
                <br><b>f</b> = Frequenz [1/s]<br>
              </td>
            </tr>
            <tr>
              <td>Wellenzahl</td>
              <td>$$ k = \frac{2\pi}{\lambda } $$</td>
              <td>
                <b>k</b> = Wellenzahl [1/m]<br>
                <b>λ</b> = Periodenlänge [m]
              </td>
            </tr>
            <tr>
              <td>Wellengleichung</td>
              <td>$$ \frac{\delta^2y}{\delta x^2}-\frac{1}{c^2}\frac{\delta^2 y}{\delta t^2} = 0 $$</td>
              <td>
                <b>y</b> = Auslenkung [m]<br>
                <b>x</b> = Abstand vom Wellenzentrum [m]<br>
                <b>c</b> = Phasengeschwindigkeit [m/s]<br>
                <b>t</b> = Zeit [s]<br>
              </td>
            </tr>
            <tr>
              <td>Konstruktive Interverenz</td>
              <td>$$ \Delta s = n \cdot \lambda $$</td>
              <td><img src="bilder/schwingungen_und_wellen/wellen/kon.png" style="max-height:100%; max-width:40%"><br><br>
                <b>s</b> = Strecke [m]<br>
                <b>n</b> = ganze Zahl [-]<br>
                <b>λ</b> = Wellenlänge beider Wellen [m]</td>
            </tr>
            <tr>
              <td>Destruktive Interverenz</td>
              <td>$$ \Delta s = \frac{\lambda}{2} +n \cdot \lambda $$</td>
              <td><img src="bilder/schwingungen_und_wellen/wellen/des.png" style="max-height:100%; max-width:40%"><br><br>
                <b>s</b> = Strecke [m]<br>
                <b>n</b> = ganze Zahl [-]<br>
                <b>λ</b> = Wellenlänge beider Wellen [m]
              </td>
              <tr>
              <td rowspan="2">Wellenknoten Wellenbauch</td>
              <td>Stellen, deren Amplitude immer <b>Null</b> ist, heissen Wellenknoten</td>
              <td rowspan="2"><img src="bilder/schwingungen_und_wellen/wellen/knoten_bauch.jpeg" style="max-height:100%; max-width:80%"></td>
            </tr>
            <tr>
              <td>Stellen, deren Amplitude immer <b>2</b><img src="bilder/schwingungen_und_wellen/harmonische_schwingung/y.png" style="max-height:17px; max-width:17px"> ist, heissen Wellenbäuche.</td>
            </tr>
            </tr>

         </table>

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>