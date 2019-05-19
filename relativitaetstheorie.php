<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "physik";
    ?>
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
            <li class="toc-entry toc-h2"><a href="#einleitung">Einleitung</a></li>
            <li class="toc-entry toc-h2"><a href="#einstein_prinzipien">Einstein-Prinzipien</a></li>
            <li class="toc-entry toc-h2"><a href="#minkowski">Minkowski-Raum-Zeit</a></li>
            <li class="toc-entry toc-h2"><a href="#relativistische_kinematik">Relativistische Kinematik</a></li>
            <li class="toc-entry toc-h2"><a href="#relativistische_dynamik">Relativistische Dynamik</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Spezielle Relativitätstheorie</h1>

          <p class="bd-lead">Die spezielle Relativitätstheorie ist eine physikalische Theorie über die Bewegung von Körpern und Feldern in Raum und Zeit. Sie erweitert das ursprünglich in der Mechanik entdeckte galileische Relativitätsprinzip zum speziellen Relativitätsprinzip.</p>


          <br><br><h5 id="einleitung">Einleitung</h5>
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
                <td rowspan="2">Begriffe</td>
                <td>$$  \text{SRT  /  ST}$$</td>
                <td>Spezielle Relativitätstheorie / special relativity<br><br>Phys: ohne Gravitation (Einsteien 1905)<br>Math: flache Raumzeit (Minkowski-Raum)</td>
              </tr>
              <tr>
                <td>$$  \text{ART  /  GR}$$</td>
                <td>allgemeine Relativitätstheorie / general relativity<br><br>Phys: mit Gravitation (Einsteien 1916)<br>Math: gekrümmte Raumzeit</td>
              </tr>
           </table>

           <br><br><h5 id="einstein_prinzipien">Einstein-Prinzipien</h5>
           <table>
             <tr>
               <td rowspan="2" width=20%>Relativitätsprinzip</td>
               <td width=42%>Aussage:</td>
               <td>Es gitb keine absolute Geschwindigkeit. Alle Geschwindigkeiten sind Relativgeschwindigkeiten zwischen objektien bzw. Beobachter.</td>
             </tr>
             <tr>
               <td>Konsequenzen:</td>
               <td>
                1. Alle Beobachter bzw. Bezugssysteme sind gleichberechtigt.<br>
                2. Die physikalischen Gesetze sind <b>kovariant</b> formulierbar (in jedem Bezugssystem durch die glieche Formel).
               </td>
             </tr>
             <tr>
               <td rowspan="2">Lichtgeschwindigkeitsprinzip</td>
               <td>Aussage:</td>
               <td>Die Lichtgeschwindigkeit ist unabhängig vom Bewegungszustand des Beobachters. Sie hat in jedem Bezugssystem den gleichen Wert.</td>
             </tr>
             <tr>
               <td>Konsequenzen:</td>
               <td>
                1. Alle Beobachter messen die gleiche Lichtgeschwindigkeit.<br>
                2. Bisherige Vorstellungen von Raum- und Zeit müssen aufgegeben werden.
               </td>
             </tr>
            </table>

          <br><br><h5 id="minkowski">Minkowski-Raum-Zeit</h5>
           <table>
             <tr>
               <td width=20%>Relativitätsprinzip</td>
               <td width=21%>
                $$ x^0 := c\cdot t $$
                $$ x^1 := x $$
                $$ x^2 := y $$
                $$ x^3 := z $$
               </td>
               <td width=21%>
                $$ \tilde{x}^0 := c\cdot \tilde{t} $$
                $$ \tilde{x}^1 := \tilde{x} $$
                $$ \tilde{y}^2 := \tilde{y} $$
                $$ \tilde{z}^3 := \tilde{z} $$
               </td>
               <td>Situation:<img src="bilder/relativitaetsprinzip/minkowski_situation.png"style="max-height:50%; max-width:100%"></td>
             </tr>
             <tr>
               <td>Vergleich der x<sup>0</sup>-x<sup>1</sup>-Ebene</td>
               <td colspan="2">
                 - Beide Systeme sind gliechberechtigt<br>
                - In beiden Systemen verläfut ein Lichtstrahl entlang der Winkelhalbierenden.
               </td>
               <td><img src="bilder/relativitaetsprinzip/vergleich.png"style="max-height:50%; max-width:100%"></td>
             </tr>
             <tr>
               <td>4er-Vektoren</td>
               <td colspan="2">$$ S: \underline{x} = \begin{bmatrix}x^0\\x^1 \\ x^2\\ x^3\end{bmatrix}= \begin{bmatrix}c\cdot t\\x \\y\\z \end{bmatrix}= \begin{bmatrix}c\cdot t\\ \vec{x}\end{bmatrix} $$</td>
               <td>
                 $$ \tilde{S}: \underline{\tilde{x}} = \begin{bmatrix}\tilde{x}^0\\\tilde{x}^1 \\ \tilde{x}^2\\ \tilde{x}^3\end{bmatrix}= \begin{bmatrix}c\cdot \tilde{t}\\\tilde{x} \\\tilde{y}\\\tilde{z} \end{bmatrix}= \begin{bmatrix}c\cdot \tilde{t}\\ \tilde{\vec{x}}\end{bmatrix} $$
               </td>
             </tr>
             <tr>
               <td>Lorentz-Minkowski-Skalar-Produkt</td>
               <td colspan="2">$$ \left \langle \underline{v},\underline{w} \right \rangle = \underline{v}^T \cdot g \cdot \underline{w}  $$</td>
               <td>Zur Berechnung von Längen, Winkel, Flächen, Volumen, etc. wird das Lorentz-Minkowski-Skalar-Rrodukt verwerndet:</td>
             </tr>
             <tr>
               <td>Minkowski-Metrik</td>
               <td colspan="2">$$ g=\begin{bmatrix}1 & 0 & 0 & 0 \\ 0 & -1 & 0 & 0 \\ 0 & 0 & -1 & 0 \\ 0 & 0 & 0 & -1 \\\end{bmatrix} $$</td>
               <td></td>
             </tr>
             <tr>
               <td>Lorentz-Boost</td>
               <td colspan="2">$$ \Lambda = \begin{bmatrix}\cosh(\chi ) &\sinh(\chi )  &0  &0 \\ \sinh(\chi )&\cosh(\chi )  &0  &0 \\0 &0  &1  &0 \\0 &0  &0  &1\end{bmatrix}= \begin{bmatrix}\gamma  &\beta \gamma   &0  &0 \\\beta \gamma   &\gamma   &0  &0 \\0  &0  &1  &0 \\0  &0  &0  &1 \end{bmatrix} $$</td>
               <td>Lorentz-Transformationen lassen Skalar-Produkte, Längen, Winkel, Flächen, etc ... unverändert.<br>Nur bei 4D Grössen!</td>
             </tr>
             <tr>
               <td>Lorentz-Transformationen</td>
               <td colspan="2">$$ \tilde{g} = \Lambda^T \cdot g \cdot \Lambda $$</td>
               <td></td>
             </tr>
             <tr>
               <td rowspan="2">Lorentz-Faktor</td>
               <td colspan="2">$$ \gamma = \frac{1}{\sqrt{1-\cfrac{v^2}{c^2}}} $$</td>
               <td rowspan="2">
                 <b>γ</b> = Lorentz-Faktor [-]<br>
                 <b>v</b> = Geschwindigkeit des bewegten Objekts [m/s]<br>
                 <b>c</b> = Lichtgeschwindigkeit im Vakuum [m/s]<br>
                 <b>β</b> = Verhältnis zwischen v und c [-]<br><br>
                 <img src="bilder/relativitaetsprinzip/Lorentz_factor.png"style="max-height:50%; max-width:45%">
               </td>
             </tr>
             <tr>
               <td colspan="2"> $$ \beta = \frac{v}{c} $$</td>
             </tr>
            </table>

            <br><br><h5 id="relativistische_kinematik">Relativistische Kinematik</h5>
            <table>
              <tr>
                <td rowspan="3" width=20%>Bewegtes Teilchen</td>
                <td width=42%>4er-Bewegungskfunktion:$$ \underline{s}(\tau) := \begin{bmatrix}c\cdot t(\tau)\\x(\tau) \\y(\tau) \\z(\tau) \end{bmatrix} = \begin{bmatrix}c\cdot t(\tau)\\\vec{s}(t(\tau)) \end{bmatrix} $$</td>
                <td rowspan="3">
                  <b>τ</b> = Eigenzeit des Teilchens (mitbewegte Uhr) [s]<br>
                  <b>t</b> = Koordinatenzeit (ruhende Uhr) [s]<br>
                  <b>γ</b> = Lorentz-Faktor [-]<br>
                  <b>c</b> = Lichtgeschwindigkeit im Vakuum [m/s]
                  <img src="bilder/relativitaetsprinzip/relativistische_kinematik.png"style="max-height:50%; max-width:90%"><br>
                  Bewegtes Teilchen im Inertialsystem eines Beobachters.
                </td>
              </tr>
              <tr>
                <td>
                  4er-Geschwindigkeit 
                  $$ \underline{v}(\tau):= \frac{\text{d}}{\text{d}\tau}\cdot\underline{s}(\tau) $$<br>
                  $$ \underline{v} = \gamma \cdot \begin{bmatrix}c\\\vec{v} \end{bmatrix} $$
                </td>
              </tr>
              <tr>
                <td>4er-Beschleunigung $$ \underline{a}(\tau):= \frac{\text{d}}{\text{d}\tau}\cdot\underline{v}(\tau) $$</td>
              </tr>
              <tr>
                <td rowspan="3">Transformationsformeln</td>
                <td>
                  Geschwindigkeitstranformation
                  $$ u' = \frac{u-v}{1-\cfrac{uv}{c^2}} $$
                </td>
                <td>
                  <b>v</b> = Relativgeschwindigkeit [m]<br>
                  <img src="bilder/relativitaetsprinzip/uebersicht.jpg"style="max-height:50%; max-width:50%">
                </td>
              </tr>
              <tr>
                <td>
                  Längenkontraktion
                  $$ l = \frac{l_0}{\gamma} $$
                </td>
                <td>
                  <b>l</b> = Länge im bewegten System [m]<br>
                  <b>l<sub>0</sub></b> = Länge im ruhenden System [m]<br>
                </td>
              </tr>
              <tr>
                <td>
                  Zeitdilatation
                  $$ \Delta  t= \gamma \Delta t_0 $$
                </td>
                <td>
                  <b>t</b> = Zeit im bewegten System [s]<br>
                  <b>l<sub>0</sub></b> = Zeit im ruhenden System [s]<br>
                </td>
              </tr>
            </table>

            <br><br><h5 id="relativistische_dynamik">Relativistische Dynamik</h5>
            <table>
              <tr>
                <td width="20%">Impuls</td>
                <td width="42%">$$ \underline{p} := m \cdot \underline{v} = m\cdot \gamma \cdot \begin{bmatrix}c\\\vec{v} \end{bmatrix} = \begin{bmatrix}m\cdot \gamma \cdot c \\ m \cdot \gamma \cdot \vec{v} \end{bmatrix}$$</td>
                <td>
                  <b>p</b> = Impuls des Körpers [Ns] = [kg·m/s]<br>
                  <b>m</b> = Masse des Körpers [kg]<br>
                  <b>v</b> = Geschwindigkeit des Körpers [m/s]<br>
                </td>
              </tr>
              <tr>
                <td>Kraft</td>
                <td>$$\vec{F} = \frac{\text{d}\vec{p}}{\text{d}t}= \dot{\vec{p}}$$</td>
                <td></td>
              </tr>
              <tr>
                <td>Kinetische Energie</td>
                <td>$$ E_k = E - E_0 = (\gamma -1)mc^2 $$</td>
                <td></td>
              </tr>
              </table>

            <table>
              <thead>
                <tr>
                  <th scope="col" width=20%>Bezeichnung</th>
                  <th scope="col" width=42%>Ruhe</th>
                  <th scope="col">Bewegt</th>
                </tr>
              </thead>
              <tr>
                <td>Masse</td>
                <td>Invariante Masse $$ m $$</td>
                <td>Impulsmasse$$ m_{rel} = \gamma \cdot  m = \frac{p}{v} $$</td>
              </tr>
              <tr>
                <td>Impuls</td>
                <td>Ruheimpuls $$ \vec{p} = m \cdot \vec{v} $$</td>
                <td>$$ \vec{p} = \gamma \cdot m \cdot \vec{v} $$</td>
              </tr>
              <tr>
                <td>Energie</td>
                <td>Ruheenergie$$ E_0 = mc^2 $$</td>
                <td>Gesamtenergie $$ E = \gamma \cdot m \cdot c^2 = \sqrt{(mc^2)+(pc)^2} $$</td>
              </tr>
            </table>

            <br><br><h5 id="tools">Tools</h5>
              <table class="table">
                  <tr>
                    <td width=20%>Wolframalpha / Mathematica</td>
                    <td width="42%"><p>Lichtgeschwindigkeit</p>
                      <figure class="highlight"  >
                        <pre>
<code class="language-html" data-lang="html">c = 299792458;</code>
                        </pre>
                      </figure>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td width=20%>Matlab</td>
                    <td width="42%"></td>
                  </pre>
                </figure></td>
                    <td></td>
                  </tr>
              </table>


        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>