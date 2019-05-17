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
            <li class="toc-entry toc-h2"><a href="#beugung">Beugung</a></li>
            </ul>
          </div>


        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="optik">Schwingungen und Wellen</h1>
          <p class="bd-lead">Schwingungen sind Vorgänge, bei denen sich ein physikalischer Zustand zeitlich periodisch verändert, d.h. eine physikalische Größe startet bei einem bestimmten Wert, verändert sich stetig und erreicht nach einiger Zeit wieder diesen Wert.</p>

        <br><br><h5 id="schwingungen">Schwingungen</h5>
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
              <td>
                <b>f</b> = Frequenz [1/s]<br>
                <b>T</b> = Periodendauer [s]
              </td>
            </tr>
            <tr>
              <td>Ungedämpfte Schwingungen</td>
              <td>$$ \hat{y} \equiv \small \text{konstant} $$</td>
              <td>Ungedämpfte Schwingung hat eine konstante Amplitude. Hier wird vorausgesetzt, dass die zugeführte Energie erhalten bleibt.</td>
            </tr>
            <tr>
              <td>Gedämpfte Schwingungen</td>
              <td>$$ \hat{y} \equiv \small \text{abnehmend} $$</td>
              <td>Ohne Energiezufuhr ist jede Schwingung gedämpft.</td>
            </tr>
            <tr>
              <td>Phasenwinkel</td>
              <td>$$ \varphi = \omega t + \varphi_0 = 2\pi f t + \varphi_0 $$</td>
              <td>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi.png" style="max-height:14px; max-width:14px"> = Phasenwinkel [rad]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi_0.png" style="max-height:30px; max-width:18px"> = Nullphasenwinkel [rad]<br>
                <b>ω</b> = Kreisfrequenz [1/s]<br>
                <b>t</b> = Zeit [s]<br>
                <b>f</b> = Frequenz [1/s]<br><br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phasenwinkel.jpeg"style="max-height:50%; max-width:70%"></td>
            </tr>
            <tr>
              <td>Ungedämpfte Auslenkung</td>
              <td>$$ y = \hat{y}\cdot \sin(\varphi ) $$</td>
              <td>
                <b>y</b> = Auslenkung nach Ablauf der Zeit t [m]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/y.png" style="max-height:17px; max-width:17px"> = Amplitude (Auslenkungsmaximum) [m]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi.png" style="max-height:14px; max-width:14px"> = Phasenwinkel [rad]<br><br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/elongation.jpeg"style="max-height:50%; max-width:30%">
              </td>
            </tr>
          </tbody>
        </table>
        <table>
            <tr>
              <td width=20% rowspan="2">Ungedämpfte harmonische Schwingung</td>
              <td width=42%>$$ D = \frac{F}{y} $$</td>
              <td rowspan="2">
                <b>D</b> = Richtgrösse [N/m]<br>
                <b>F</b> = Auslenkungskraft und Rückstellkraft [N]<br>
                <b>y</b> = Auslenkung [m]<br>
                <b>ω</b> = Kreisfrequenz [1/s]<br>
                <b>f</b> = Frequenz [1/s]<br>
                <b>T</b> = Periodendauer [s]<br>
                <b>m</b> = Masse [kg]<br>
                <b>D</b> = Richtgrösse [N/m]<br>
                <br><img src="bilder/optik/schwingungen/schwingung.jpeg"style="max-height:50%; max-width:100%"></td>
            </tr>
            <tr><td>$$ \omega = \sqrt{\frac{D}{m}}  $$ <br>$$ f = \frac{1}{2 \pi} \sqrt{\frac{D}{m}} $$ <br>$$ T = 2 \pi \sqrt{\frac{m}{D}} $$</td></tr>

            <tr>
              <td rowspan="2">Lineare Federschwingung</td>
              <td>$$ k = \frac{F}{\Delta l} $$</td>
              <td rowspan="2">
                <b>k</b> = Federkonstante [N/m]<br>
                <b>F</b> = Kraft, die die Änderung Δl verursacht [N]<br>
                <b>l</b> = Länge [m]<br>
                <b>ω</b> = Kreisfrequenz [1/s]<br>
                <b>f</b> = Frequenz [1/s]<br>
                <b>T</b> = Periodendauer [s]<br>
                <b>m</b> = Masse [kg]<br>
              <br><img src="bilder/schwingungen_und_wellen/harmonische_schwingung/feder.jpeg"style="max-height:50%; max-width:35%"></td>
            </tr>
            <tr><td>$$ \omega = \sqrt{\frac{D}{J}}  $$ <br>$$ f = \frac{1}{2 \pi} \sqrt{\frac{D}{J}} $$ <br>$$ T = 2 \pi \sqrt{\frac{J}{D}} $$</td></tr>

            <tr>
              <td rowspan="2">Drehschwingung</td>
              <td>$$ D = \frac{M}{\varphi} $$</td>
              <td rowspan="2">
                <b>D</b> = Winkelrichtgrösse [Nm]<br>
                <b>M</b> = Drehmoment [Nm]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi.png" style="max-height:14px; max-width:14px"> = Phasenwinkel [rad]<br>
                <b>J</b> = Massenträgheitsmoment [kg⋅m<sup>2</sup>]<br>
                <b>ω</b> = Kreisfrequenz [1/s]<br>
                <b>f</b> = Frequenz [1/s]<br>
                <b>T</b> = Periodendauer [s]<br>
                <b>m</b> = Masse [kg]<br>
              <br><img src="bilder/schwingungen_und_wellen/harmonische_schwingung/drehpendel.jpeg"style="max-height:50%; max-width:35%"></td>
            </tr>
            <tr><td>$$ \omega = \sqrt{\frac{D}{J}}  $$ <br>$$ f = \frac{1}{2 \pi} \sqrt{\frac{D}{J}} $$ <br>$$ T = 2 \pi \sqrt{\frac{J}{D}} $$</td></tr>

            <tr>
              <td rowspan="2">Mathematisches Pendel</td>
              <td>$$ D = \frac{F_1}{y} = \frac{G}{l} = \frac{mg}{l} $$</td>
              <td rowspan="2">
                <b>D</b> = Richtgrösse [N/m]<br>
                <b>F</b> = Kraft [N]<br>
                <b>G</b> = Fallbeschleunigung [m/s<sup>2</sup>]<br>
                <b>y</b> = Auslenkung [m]<br>
                <b>T</b> = Periodendauer [s]<br>
                <b>l</b> = Pendellänge [1/s]<br>
                <b>f</b> = Frequenz [1/s]<br>
                <b>m</b> = Masse [kg]<br>
              <br><img src="bilder/schwingungen_und_wellen/harmonische_schwingung/pendel.jpeg"style="max-height:50%; max-width:35%"></td>
            </tr>
            <tr><td>$$ \omega = \sqrt{\frac{g}{s}}  $$ <br>$$ f = \frac{1}{2 \pi} \sqrt{\frac{g}{l}} $$ <br>$$ T = 2 \pi \sqrt{\frac{l}{g}} $$</td></tr>
        </table>
        <table>
            <tr>
              <td width=20%>Gedämpfte Auslenkung</td>
              <td width=42%>$$ y(t) = \hat{y} e^{-\delta t}\sin(\varphi) $$</td>
              <td>
                <b>y</b> = Auslenkung [m]<br>
                <b>y<sub>0</sub></b> = Anfangswert der Amplitudenhüllkurve [m]<br>
                <b>e</b> = Basis des natürlichen Logarithmus []<br>
                <b>δ</b> = Abklingkonstante [1/s]<br>
                <b>t</b> = Zeit [s]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi.png" style="max-height:14px; max-width:14px"> = Phasenwinkel (ωt + <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi_0.png"style="max-height:18px; max-width:18px">) [rad]<br><br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/elongation_gedaempft.jpeg"style="max-height:60%; max-width:100%">
              </td>
            </tr>
            <tr>
              <td>Eigenfrequenz</td>
              <td>$$ \omega = \sqrt{{\omega_0}^2-\delta^2} $$</td>
              <td>
                <b>ω</b> = Kreisfrequenz der gedämpften Schwingung [1/s]<br>
                <b>ω<sub>0</sub></b> = Kreisfrequenz der ungedämpften Schwingung [1/s]<br>
                <b>δ</b> = Abklingkonstante (β/2m) [1/s]<br>
                <b>β</b> = Dämpfungskonstante [kg/s]<br>
                <b>m</b> = Masse [kg]
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
                <b>D</b> = Richtgrösse (F/y) [N/m]<br>
                <b>ω</b> = Erregerkreisfrequenz [1/s]<br>
                <b>t</b> = Zeit [s]<br>
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
              <td>$$ y(x,t) = \hat{y}\cdot \sin\left [ 2 \pi \Big(  \frac{x}{\lambda }-\frac{t}{T} \Big) + \varphi \right ] $$</td>
              <td>
                <b>y</b> = Auslenkung eines Teilchens am Ort x zur Zeit t [m]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/y.png" style="max-height:17px; max-width:17px"> = Amplitude (Auslenkungsmaximum) [m]<br>
                <b>t</b> = Zeit [s]<br>
                <b>T</b> = Periodendauer [s]<br>
                <b>x</b> = Abstand vom Wellenzentrum [m]<br>
                <b>λ</b> = Wellenlänge [m]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi.png" style="max-height:14px; max-width:14px"> = Phasenwinkel [rad]<br><br>

                <img src="bilder/schwingungen_und_wellen/wellen/elongation.jpeg" style="max-height:100%; max-width:65%">
              </td>
            </tr>
            <tr>
              <td>Frequenz einer Welle</td>
              <td>$$ f = \frac{1}{T} $$</td>
              <td>
                <b>f</b> = Frequenz [1/s]<br>
                <b>T</b> = Periodendauer [s]
              </td>
            </tr>
            <tr>
              <td>Kreisfrequenz</td>
              <td>$$ \omega = \frac{2\pi}{T} = 2\pi f $$</td>
              <td> 
                <b>ω</b> = Kreisfrequenz [1/s]<br>
                <b>T</b> = Schwingungsdauer einer Periode [s]<br>
                <b>f</b> = Frequenz [1/s]<br>
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
              <td>Ausbreitungsgeschwindigkeit einer Welle</td>
              <td>$$ v = \lambda \cdot f $$</td>
              <td><b>v</b> = Geschwindigkeit [m/s]<br>
                <b>λ</b> = Periodenlänge [m]<br>
                <b>f</b> = Frequenz [1/s]
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
              <td>$$ \Delta x = k \cdot \lambda $$ <br> $$ \Delta \varphi = k \cdot 2 \pi $$</td>
              <td><img src="bilder/schwingungen_und_wellen/wellen/kon.png" style="max-height:100%; max-width:40%"><br><br>
                <b>x</b> = Gangunterschied (0) [m]<br>
                <b>k</b> = ganze Zahl [-]<br>
                <b>λ</b> = Wellenlänge beider Wellen [m]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi.png" style="max-height:14px; max-width:14px"> = Phasenwinkeldifferenz [rad]<br>
                </td>
            </tr>
            <tr>
              <td>Schwebungsfrequenz</td>
              <td>$$ f_s = f_1 - f_2 = \Delta f $$</td>
              <td>
                <b>f<sub>s</sub></b> = Schwebungsfrequenz [1/s]<br>
                <b>f<sub>1</sub></b> = Frequenz 1 [1/s]<br>
                <b>f<sub>2</sub></b> = Frequenz 2 [1/s]<br>
                <b>T<sub>s</sub></b> = Schwebungsdauer (1/f<sub>s</sub>) [s]<br>
                <br>Wenn man zwei Stimmgabeln mit den Frequenzen 241Hz und 243Hz anschlägt, hört man einen Ton der Frequenz 242Hz, der zwei mal pro Sekunde lauter und wieder leise wird. Die Schwebungsfrequenz beträgt da mit 2Hz. Das Ohr kann maximal 15 bis 20 Schwebungen pro Sekunde wahrnehmen.
                <br><img src="bilder/schwingungen_und_wellen/harmonische_schwingung/schwebung.jpeg" style="max-height:50%; max-width:85%">
              </td>
            </tr>
            <tr>
              <td>Eigenfrequenz</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Destruktive Interverenz</td>
              <td>$$ \Delta x = \frac{\lambda}{2} +k \cdot \lambda $$ <br> $$ \Delta \varphi = (2k + 1) \pi $$</td>
              <td><img src="bilder/schwingungen_und_wellen/wellen/des.png" style="max-height:100%; max-width:40%"><br><br>
                <b>x</b> = Gangunterschied (λ/2) [m]<br>
                <b>k</b> = ganze Zahl [-]<br>
                <b>λ</b> = Wellenlänge beider Wellen [m]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi.png" style="max-height:14px; max-width:14px"> = Phasenwinkeldifferenz [rad]
              </td>
              <tr>
                <td rowspan="2">Wellenknoten / Wellenbauch</td>
                <td>Stellen, deren Amplitude immer <b>Null</b> ist, heissen Wellenknoten</td>
                <td rowspan="2"><img src="bilder/schwingungen_und_wellen/wellen/knoten_bauch.jpeg" style="max-height:100%; max-width:80%"></td>
              </tr>
              <tr>
                <td>Stellen, deren Amplitude immer <b>2</b><img src="bilder/schwingungen_und_wellen/harmonische_schwingung/y.png" style="max-height:17px; max-width:17px"> ist, heissen Wellenbäuche.</td>
              </tr>
            </tr>
          </table>

            <br><br><h5 id="beugung">Beugung</h5>
          <table>
            <tr>
              <td rowspan="3" width=20%>Gangunterschied</td>
              <td width=42%>$$ \delta = 2dn - \frac{\lambda}{2} $$</td>
              <td rowspan="3">
                <b>δ</b> = Gangunterschied bei senkrechtem Einfall [m]<br>
                <b>d</b> = Dicke des dünnen Blättchens [m]<br>
                <b>n</b> = Brechzahl des Blättchens [-]<br>
                <b>k</b> = ganze Zahl [-]<br>
                <b>λ</b> = Wellenlänge des Lichts [m]<br><br>
                Die reflektierenten Teile ünerlagern sich mit einem Gangunterschied, der sich aus dem <b>Umweg</b> des einen Strahles und dem<b> Phasensprung</b> von λ/2 des anderen bei der Reflexion am dichteren Medium zusammensetzt.<br><br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/gang.jpeg" style="max-height:50%; max-width:40%">
              </td>
            </tr>
            <tr>
              <td>Verstärkung für $$ \lambda = \frac{4dn}{2k + 1} $$</td>
            </tr>
            <tr>
              <td>Auslöschung für $$ \lambda = \frac{2dn}{k} $$</td>
            </tr>

            <tr>
              <td>Newtonsche Ringe</td>
              <td>$$ r_{\text{max}}^2 = R\left ( \frac{k+1}{2} \right )\lambda  $$ <br>$$ r_{\text{min}}^2 = Rk\lambda $$</td>
              <td>
                <b>r<sub>max</sub></b> = Radius des Interferenzmaximums, Verstärkt [m]<br>
                <b>r<sub>min</sub></b> = Radius des Interferenzmaximums, Auslöschung [m]<br>
                <b>R</b> = Krümmungsradius der Linse [m]<br>
                <b>λ</b> = Wellenlänge des Lichts [m]<br><br>
                <img src="bilder/schwingungen_und_wellen/beugung/newton.jpeg" style="max-height:50%; max-width:40%">
              </td>
            </tr>
            <tr>
              <td rowspan="2">Beugung am engen Spalt</td>
              <td>Beugungsminima $$ \sin({\alpha_{\text{min}}})  = k \cdot \frac{\lambda}{b} $$</td>
              <td rowspan="2">
                <b>b</b> = Spaltbreite [m]<br>
                <b>λ</b> = Wellenlänge des Lichts [m]<br>
                <b>k</b> = ganze Zahl [-]<br>
                <b>α<sub>min</sub></b> = Beugungswinkel für die Richtung der Minima [rad]<br>
                <b>α<sub>max</sub></b> = Beugungswinkel für die Richtung der Maxima [rad]<br><br>
                <img src="bilder/schwingungen_und_wellen/beugung/enger_spalt.jpeg" style="max-height:50%; max-width:100%">
              </td>
            </tr>
            <tr>
              <td>Beugungsmaxima $$ \sin({\alpha_{\text{max}}}) = \left ( k+ \frac{1}{2} \right )\frac{\lambda}{b} $$</td>
            </tr>

            <tr>
              <td rowspan="2">Beugung am Doppelspalt</td>
              <td>Beugungsminima $$ \sin({\alpha_{\text{min}}})  = k \cdot \frac{\lambda}{d} $$</td>
              <td rowspan="2">
                <b>d</b> = Abstand beider Spalte [m]<br>
                <b>λ</b> = Wellenlänge des Lichts [m]<br>
                <b>k</b> = ganze Zahl [-]<br>
                <b>α<sub>min</sub></b> = Beugungswinkel für die Richtung der Minima [rad]<br>
                <b>α<sub>max</sub></b> = Beugungswinkel für die Richtung der Maxima [rad]<br><br>
                <img src="bilder/schwingungen_und_wellen/beugung/doppelspalt.jpeg" style="max-height:50%; max-width:50%">
              </td>
            </tr>
            <tr>
              <td>Beugungsmaxima $$ \sin({\alpha_{\text{max}}}) = \left ( k+ \frac{1}{2} \right )\frac{\lambda}{d} $$</td>
            </tr>

            <tr>
              <td rowspan="2">Beugungsgitter</td>
              <td>$$ \sin({\alpha_{\text{min}}})  = k \cdot \frac{\lambda}{g} $$</td>
              <td rowspan="2">
                <b>α<sub>max</sub></b> = Beugungswinkel für die Richtung der Maxima [rad]<br>
                <b>g</b> = Gitterkonstante []<br>
                <b>λ</b> = Wellenlänge des Lichts [m]<br>
                <b>k</b> = ganze Zahl [-]<br>
                <b>l</b> = Entfernung Gitter - Auffangschirm [m]<br>
                <b>a</b> = Abstand des Maximums k-ter Ordnung
                <img src="bilder/schwingungen_und_wellen/beugung/gitter.jpeg" style="max-height:50%; max-width:55%">
              </td>
            </tr>
            <tr>
              <td>$$ \tan(\alpha) = \frac{a}{l} $$</td>
            </tr>

            <tr>
              <td rowspan="2">Auflösungsvermögen optischer Instrumente</td>
              <td>Auge und Fernrohr $$ \delta =  1.22 \cdot  \frac{\lambda}{D} $$</td>
              <td rowspan="2">
                <b>δ</b> = Auflösungsgrenze, kleinster Sehwinkel [rad]<br>
                <b>d</b> = Auflösungsgrenze kleinster Punktabstand<br>
                <b>D</b> = Durchmesser der Öffnung [m]<br>
                <b>λ</b> = Wellenlänge des Lichts [m]<br>
                <b>n</b> = Brechzahl des Mediums zwischen Objekt & Mikroskop<br>
                <b>A</b> = numerische Apertur (n sin(α)) []<br>
                <b>α</b> = Aperturwinkel, Öffnungswinkel des Objektivs [rad]<br><br>

                <img src="bilder/schwingungen_und_wellen/beugung/aufloesung.jpeg" style="max-height:50%; max-width:90%">
              </td>
            </tr>
            <tr>
              <td>Mikroskop $$ d = 1.22 \cdot \frac{\lambda}{n \sin(\alpha)} = 1.22 \cdot \frac{\lambda}{A} $$</td>
            </tr>

         </table>

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>